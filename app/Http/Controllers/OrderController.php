<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        //return view('dashboard.order');

        
        return view('dashboard.index', [
            'my_user' => $my_user,
        ])
        ->with('title', 'Orders')
        ->with('main_content', 'dashboard.modules.orders');
    }
}
