<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.userprofiles', [
            'my_user' => $my_user,
        ]);
    }


    public function quotation_bulletproof()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.quotation.bulletproof', [
            'my_user' => $my_user,
        ]);
    }

    public function quotation_glasspro()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.quotation.glasspro', [
            'my_user' => $my_user,
        ]);
    }

    public function process_order()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.process_order', [
            'my_user' => $my_user,
        ]);
    }

    public function messages()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('dashboard.messages', [
            'my_user' => $my_user,
        ]);
    }

    public function user_messages()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.user_messages', [
            'my_user' => $my_user,
        ]);
    }

    public function order_status()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('dashboard.order_status', [
            'my_user' => $my_user,
        ]);
    }

    public function hidden_store()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.hidden_store', [
            'my_user' => $my_user,
        ]);
    }

    public function main_quote()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.main_quote', [
            'my_user' => $my_user,
        ]);
    }
}
