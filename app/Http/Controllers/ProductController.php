<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function before_add_to_cart($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $product = Product::Find($id);
        $productImages = DB::table('product_images')->get();

        return view("home.product_details", [
            'my_user' => $my_user,
            'product' => $product,
            'productImages' => $productImages,
        ]);
    }

    public function after_add_to_cart($id, Request $request)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $validated = $request->validate([
            'quantity' => ['required', 'min:1'],
            'price' => ['required', 'min:1'],
        ]);

        $product = Product::Find($id);

        $cart = new Cart();
        $cart->user_id = $my_user->id;
        $cart->product_id = $product->id;
        $cart->product_category_id = $product->category_id;
        $cart->quantity = $validated['quantity'];
        $cart->price = $validated['price'];
        $cart->remarks = "";

        $cart->save();

        return redirect('/cart')->with('success_msg', 'Redirected to Cart');
    }

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

        return view("home.cart", [
            'my_user' => $my_user,
            'carts' => $carts,
            'products' => $products,
            'productImages' => $productImages,
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

        return view('dashboard.settings.products-create', [
            'my_user' => $my_user,
            'productCategories' => $productCategories,
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
           'brand' => ['nullable'],
           'price' => ['required'],
           'upload_file' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:4096'],
       ]);

       // Handle file upload
       if ($request->hasFile('upload_file')) {
           $file = $request->file('upload_file');
           $filename = time() . '_' . $file->getClientOriginalName();
           $file->storeAs('all-items', $filename, 'public');
       } else {
           $filename = "default.png"; 
       }

       $product = new Product();
       $product->name = $validated['name'];
       $product->display_name = $validated['display_name'];
       $product->description = $validated['description'];
       $product->category_id = $validated['category_id'];
       $product->brand = $validated['brand'];
       $product->price = $validated['price'];
       $product->status = "active";
       $product->isDeleted = false;
       $product->save();

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
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
