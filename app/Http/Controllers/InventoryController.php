<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('dashboard.inventory', [
            'my_user' => $my_user,
        ]);
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
