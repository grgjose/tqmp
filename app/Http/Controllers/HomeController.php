<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function profile()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $quotations = DB::table('quotations')->where('user_id', '=', $my_user->id)->get();

        return view('home.profile', [
            'my_user' => $my_user,
            'quotations' => $quotations,
        ]);
    }

    public function quotation()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('glass.processing.get_quotation', [
            'my_user' => $my_user,
        ]);
    }
}
