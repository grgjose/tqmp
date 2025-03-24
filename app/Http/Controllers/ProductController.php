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

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

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

    public function addtocart($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $product = Product::Find($id);
        
        $cart = new Cart();
        $cart->user_id = $my_user->id;
        $cart->product_id = $product->id;
        $cart->product_category_id = $product->category_id;
        $cart->quantity = 1;
        $cart->price = $product->price;
        $cart->remarks = "";

        $cart->save();

        return redirect('/');

    }

    public function cart()         
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $carts = DB::table('carts')->where('user_id' , '=', $my_user->id)->get();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')->where('isDeleted', '=', false)->where('id', '=', $id)->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        return view('dashboard.settings.users-view', [
            'my_user' => $my_user,
            'user' => $users[0],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
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
