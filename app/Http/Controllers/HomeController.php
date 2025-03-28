<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.index', [
            'my_user' => $my_user,
        ]);
    }

    public function about()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.about', [
            'my_user' => $my_user,
        ]);
    }

    public function contact()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.contact', [
            'my_user' => $my_user,
        ]);
    }

    public function faqs()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.faqs', [
            'my_user' => $my_user,
        ]);
    }

    public function services()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.services', [
            'my_user' => $my_user,
        ]);
    }

    public function userprofiles()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('dashboard.userprofiles', [
            'my_user' => $my_user,
        ]);
    }
}
