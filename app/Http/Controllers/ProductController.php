<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\ProductImage;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\DatabaseImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $products = DB::table('products')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.category as category')
            ->where('products.isDeleted', '=', false)->get();

        $productImages = DB::table('product_images')->get();

        return view('dashboard.index', [
            'my_user' => $my_user,
            'products' => $products,
            'product_images' => $productImages,
        ])
        ->with('title', 'Products')
        ->with('main_content', 'dashboard.settings.products');
    }

    /**
     * Show the cart of a User
     */
    public function before_add_to_cart($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $product = Product::Find($id);
        $productVariants = DB::table('product_variants')->where('product_id', '=', $id)->get();
        $productImages = DB::table('product_images')->get();

        return view("home.product_details", [
            'my_user' => $my_user,
            'product' => $product,
            'productVariants' => $productVariants,
            'productImages' => $productImages,
        ]);
    }

    /**
     * Show the cart of a User
     */
    public function after_add_to_cart($id, Request $request)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $validated = $request->validate([
            'quantity' => ['required', 'min:1'],
            'price' => ['required', 'min:1'],
        ]);

        $checkItems = DB::table('carts')
        ->where('user_id', '=', $my_user->id)
        ->where('product_id', '=', $id)
        ->get();

        if(count($checkItems) > 0){

            $product = Product::Find($id);

            $cart = Cart::find($checkItems[0]->id);
            $cart->user_id = $my_user->id;
            $cart->product_id = $product->id;
            $cart->product_category_id = $product->category_id;
            $cart->quantity = $cart->quantity + intval($validated['quantity']);
            $cart->price = $validated['price'];
            
            $cart->save();

        } else {
            $product = Product::Find($id);

            $cart = new Cart();
            $cart->user_id = $my_user->id;
            $cart->product_id = $product->id;
            $cart->product_category_id = $product->category_id;
            $cart->quantity = $validated['quantity'];
            $cart->price = $validated['price'];
            $cart->remarks = "";
    
            $cart->save();
        }


        return redirect('/shop')->with('success_msg', 'Item Added to Cart');
    }

    /**
     * Show the cart of a User
     */
    public function cart()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $carts = DB::table('carts')->where('user_id', '=', $my_user->id)->get();
        $products = DB::table('products')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.category as category')
            ->where('products.isDeleted', '=', false)->get();

        $productImages = DB::table('product_images')->get();


        $quotations = DB::table('quotations')
            ->leftJoin(DB::raw('(SELECT quotation_id, MIN(filename) as filename FROM quotation_images GROUP BY quotation_id) as qi'), 'quotations.id', '=', 'qi.quotation_id')
            ->select(
                'quotations.*', 
                'qi.filename as image')
            ->where('quotations.isDeleted', '=', false)->get();

        return view("home.cart", [
            'my_user' => $my_user,
            'carts' => $carts,
            'products' => $products,
            'productImages' => $productImages,
            'quotations' => $quotations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $productCategories = DB::table('product_categories')->get();
        $productSubCategories = DB::table('product_sub_categories')->get();

        return view('dashboard.settings.products-create', [
            'my_user' => $my_user,
            'productCategories' => $productCategories,
            'productSubCategories' => $productSubCategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       /** @var \Illuminate\Auth\SessionGuard $auth */
       $auth = auth();
       $my_user = $auth->user();
       
       $validated = $request->validate([
           'name' => ['required', 'min:3'],
           'display_name' => ['required'],
           'description' => ['nullable'],
           'category_id' => ['required'],
           'sub_category_id' => ['required'],
           'brand' => ['nullable'],
           'price' => ['required'],
           'upload_files.*' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:4096'],
       ]);

       $filenames = array();

        // Handle file upload
        if ($request->hasFile('upload_files')) {
            foreach($request->file('upload_files') as $file){
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('all-items', $filename, 'public');
                array_push($filenames, $filename);
            }  
        } else {
            $filename = "default.png"; 
        }

        $product = new Product();
        $product->name = $validated['name'];
        $product->display_name = $validated['display_name'];
        $product->description = $validated['description'];
        $product->category_id = $validated['category_id'];
        $product->sub_category_id = $validated['sub_category_id'] == "null" ? null : $validated['sub_category_id'];
        $product->brand = $validated['brand'];
        $product->price = $validated['price'];
        $product->status = "active";
        $product->isDeleted = false;
        $product->save();

        if(count($filenames) > 0){
            foreach($filenames as $name){
                $productImage = new ProductImage();
                $productImage->product_id = $product->id;
                $productImage->filename = $name;
                $productImage->save();
            }
        }

        return redirect('/products')->with('success_msg', $product->name.' is Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $products = DB::table('products')->where('isDeleted', '=', false)->where('id', '=', $id)->get();
        $productCategories = DB::table('product_categories')->get();
        $productImages = DB::table('product_images')->get();

        if ($products == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if (count($products) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        return view('dashboard.settings.products-view', [
            'my_user' => $my_user,
            'product' => $products[0],
            'productCategories' => $productCategories,
            'productImages' => $productImages,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $products = DB::table('products')->where('isDeleted', '=', false)->where('id', '=', $id)->get();
        $productCategories = DB::table('product_categories')->get();
        $productSubCategories = DB::table('product_sub_categories')->get();
        $productImages = DB::table('product_images')->get();

        if ($products == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if (count($products) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        return view('dashboard.settings.products-update', [
            'my_user' => $my_user,
            'product' => $products[0],
            'productCategories' => $productCategories,
            'productSubCategories' => $productSubCategories,
            'productImages' => $productImages,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $product = Product::find($id);
        if($product == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'display_name' => ['required'],
            'description' => ['nullable'],
            'category_id' => ['required'],
            'sub_category_id' => ['required'],
            'brand' => ['nullable'],
            'price' => ['required'],
            'upload_files.*' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:4096'],
            'images_to_delete.*' => ['nullable'],
        ]);

        // Handle image deletion
        if ($request->has('images_to_delete')) {
            foreach ($validated['images_to_delete'] as $imageId) {
                // Find the image by its ID and delete it
                $image = ProductImage::find($imageId); // Assuming the product has a relationship with images
                if ($image) {
                    // Delete the image from the filesystem
                    if (file_exists(public_path('storage/all-items/' . $image->filename))) {
                        unlink(public_path('storage/all-items/' . $image->filename));
                    }
                    // Delete the image record from the database
                    $image->delete();
                }
            }
        }

        $filenames = array();

        // Handle file upload
        if ($request->hasFile('upload_files')) {
            foreach($request->file('upload_files') as $file){
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('all-items', $filename, 'public');
                array_push($filenames, $filename);
            }  
        } else {
            $filename = "default.png"; 
        }

        if(count($filenames) > 0){
            foreach($filenames as $name){
                $productImage = new ProductImage();
                $productImage->product_id = $id;
                $productImage->filename = $name;
                $productImage->save();
            }
        }

        $product->name = $validated['name'];
        $product->display_name = $validated['display_name'];
        $product->description = $validated['description'];
        $product->category_id = $validated['category_id'];
        $product->sub_category_id = $validated['sub_category_id'] == "null" ? null : $validated['sub_category_id'];
        $product->brand = $validated['brand'];
        $product->price = $validated['price'];

        $product->save();

        return redirect('/products')->with('success_msg', $product->name.' is Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->isDeleted = true;
        $product->save();

        return redirect('/products')->with('success_msg', 'Product Successfully Deleted');
    }

    /**
     * Checkout Items of User
     */
    public function checkout(Request $request){
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $validated = $request->validate([
            'checkboxes.*' => ['required'],
            'reference_num' => ['required']
        ]);

        foreach($validated['checkboxes'] as $cartId){
            $cart = Cart::find($cartId);
            
            $order = new Order();
            $order->order_id = 1;
            $order->reference_num = $validated['reference_num'];
            $order->product_id = $cart->product_id;
            $order->quotation_id = $cart->quotation_id;
            $order->customer_id = $cart->user_id;
            $order->sales_rep_id = 0;
            $order->shipping_address = $my_user->address;
            $order->price = $request->input('price_'.$cartId);
            $order->quantity = $request->input('quantity_'.$cartId);
            
            $order->save();
            $cart->delete();
        }

        return redirect('/order-status/'.$validated['reference_num']);
    }

    /**
     * Order Status
     */
    public function order_status($reference){
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        // $orders = DB::table('orders')
        // ->join('products', 'orders.product_id', '=', 'products.id')
        // ->select('orders.*', 'products.name as name')
        // ->where('orders.reference_num', '=', $reference)
        // ->get();

        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->leftJoin('quotations', 'orders.quotation_id', '=', 'quotations.id')
        ->select(
            'orders.*',
            'products.name as p_name',
            'quotations.reference as q_name'
        )
        ->where('orders.reference_num', '=', $reference)
        ->get();

        return view('home.order_status', [
            'my_user' => $my_user,
            'orders' => $orders,
        ]);
    }

    /**
     * Remove Item from Cart
     */
    public function remove($id){
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $cart = Cart::find($id);
        if (!$cart) {
            return response()->json([
                'success' => false,
                'message' => 'Cart item not found.',
            ], 404);
        }
    
        $cart->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart.',
            'user' => $my_user, // Optional — only if needed on the frontend
        ]);
    }

    /**
     * Testing Import
     */
    public function import(){
        // Build full path to the file
        $path = storage_path('app\public\imports\DatabaseSeeder.xlsx');
        $importer = new DatabaseImport();
        Excel::import($importer, $path);

        $data = $importer->getData();
        $usertypes = $data['Usertypes'];
        $users = $data['Users'];
        $categories = $data['Categories'];
        $products = $data['Products'];

        dd($users);
    }

}
