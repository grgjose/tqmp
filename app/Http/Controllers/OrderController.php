<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
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

        $orders = DB::table('orders')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->join('quotations', 'quotations.id', '=', 'orders.quotation_id')
        ->join('users as customers', 'customers.id', '=', 'orders.customer_id')
        ->join('users as sales_reps', 'sales_reps.id', '=', 'orders.sales_rep_id')
        ->select(
            'orders.*',
            'products.name as product_name',
            'products.price as product_price',
            'products.display_name as product_display_name',
            DB::raw("CONCAT(customers.fname, ' ', customers.mname, ' ', customers.lname) as customer_fullname"),
            DB::raw("CONCAT(sales_reps.fname, ' ', sales_reps.mname, ' ', sales_reps.lname) as sales_rep_fullname"),
        )
        ->get();

        $orders = DB::table('orders')->get();

        return view('dashboard.index', [
            'my_user' => $my_user,
            'orders' => $orders,
        ])
        ->with('title', 'Orders')
        ->with('main_content', 'dashboard.modules.orders');
    }

    public function ticketing()
    {

        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view("dashboard.ticketing", [
            'my_user' => $my_user
        ]);
    }
}
