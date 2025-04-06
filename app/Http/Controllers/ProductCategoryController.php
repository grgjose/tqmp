<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
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

        $productCategories = DB::table('product_categories')
            ->where('isDeleted', '=', false)->get();

        return view('dashboard.settings.product-categories', [
            'my_user' => $my_user,
            'productCategories' => $productCategories,
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

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $productCategories = DB::table('product_categories')
            ->where('isDeleted', '=', false)->get();

        if($productCategories == null || count($productCategories) == 0){
            return redirect('/product-categories')->with('error_msg', 'Unexpected Error!');
        }
            
        return view('dashboard.settings.product-categories-create', [
            'my_user' => $my_user
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

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $validated = $request->validate([
            'category' => ['required', 'min:1'],
            'description' => ['required'],
        ]);

        $productsCategory = new ProductCategory();
        $productsCategory->category = $validated['category'];
        $productsCategory->description = $validated['description'];
        $productsCategory->save();

        return redirect('/product-categories')->with('success_msg', 'Product Category Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
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
        if ($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $productCategories = DB::table('product_categories')
            ->where('id', '=', $id)
            ->where('isDeleted', '=', false)->get();

        if($productCategories == null || count($productCategories) == 0){
            return redirect('/product-categories')->with('error_msg', 'Unexpected Error!');
        }

        return view('dashboard.settings.product-categories-update', [
            'my_user' => $my_user,
            'productCategories' => $productCategories,
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

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $validated = $request->validate([
            'category' => ['required', 'min:1'],
            'description' => ['required'],
        ]);

        $productsCategory = ProductCategory::find($id);
        $productsCategory->category = $validated['category'];
        $productsCategory->description = $validated['description'];
        $productsCategory->updated_at = date('Y-m-d');
        $productsCategory->save();

        return redirect('/product-categories')->with('success_msg', 'Product Category Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productsCategory = ProductCategory::find($id);
        $productsCategory->isDeleted = true;
        $productsCategory->save();

        return redirect('/product-categories')->with('success_msg', 'Product Category Successfully Deleted');
    }
}
