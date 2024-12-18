<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $remember = $request->input("remember_me");

        if(auth()->attempt($validated, $remember) || auth()->viaRemember()){
            $request->session()->regenerate();
            return "LOGIN";
        } else {
            return "INVALID CREDENTIALS";
            //return redirect('/')->with('error_msg', 'Invalid Credentials!');
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
        auth()->logout();
        return "LOGOUT";
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
