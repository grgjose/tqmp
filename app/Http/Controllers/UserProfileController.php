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

    public function get_quotation_mfg()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('glass.manufacturing.get_quotation_mfg', [
            'my_user' => $my_user,
        ]);
    }
    public function get_quotation_aluminum_mfg()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('aluminum.manufacturing.get_quotation_aluminum_mfg', [
            'my_user' => $my_user,
        ]);
    }

    public function get_quotation_bulletproofing()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('bulletproofing.get_quotation_bulletproofing', [
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
}
