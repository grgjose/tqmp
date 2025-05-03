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
