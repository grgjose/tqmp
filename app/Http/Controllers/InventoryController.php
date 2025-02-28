<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null){
            return redirect('/')->with('error_msg', 'Invalid Access!');
        }

        if($my_user->usertype > 2){
            return redirect('/')->with('error_msg', 'Invalid Access!');
        }

        $inventories = DB::table('inventories')->get();
        $products = DB::table('products')->get();
        $brands = DB::table('brands')->get();
        $users = DB::table('users')->where('usertype', '=', 3)->get();

        return view('dashboard.index', [
            'my_user' => $my_user,
            'inventories' => $inventories,
            'products' => $products,
            'brands' => $brands,
            'users' => $users,
        ])
        ->with('title', 'Inventory')
        ->with('main_content', 'dashboard.modules.inventory');
        
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => ['required'],
            'product' => ['required'],
            'model' => ['required'],
            'details' => ['required'],
            'quantity' => ['required'],
        ]);

    }
    


}
