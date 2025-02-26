<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Sign-in Process
     */    
    public function logon(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'min:2'],
            "password" => ['required', 'min:2']
        ]);
        
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();

        $remember = $request->input("remember_me");

        
        if($auth->attempt($validated, $remember) || $auth->viaRemember()){
            $request->session()->regenerate();

            if($auth->check() && $auth->user()->usertype == 1){
                return redirect('/dashboard');
            } else {
                return redirect('/');
            }

        } else {
            return redirect('/')->with('error_msg', 'Invalid Credentials!');
        }
    }

    /**
     * Login a User
     */    
    public function login(Request $request){
        return view("home.login");
    }

    /**
     * Logout a User
     */    
    public function logout(Request $request){   
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $auth->logout();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
