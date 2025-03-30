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

    public function get_quotation()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('glass.processing.get_quotation', [
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
}
