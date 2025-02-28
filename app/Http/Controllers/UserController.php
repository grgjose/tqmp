<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;


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

    public function signup(Request $request)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();
        
        $validated = $request->validate([
            'fname' => ['required', 'min:3'],
            'mname' => ['nullable'],
            'lname' => ['required'],
            'email' => ['required'],
            'birthdate' => ['required'],
            'contact_num' => ['required'],
            'password' => ['required'],
            'upload_file' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
        ]);

        // Handle file upload
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
        } else {
            return response()->json(['error' => 'File upload failed'], 400);
        }


        $user = new User();

        $user->fname = $validated['fname'];
        $user->mname = $validated['mname'];
        $user->lname = $validated['lname'];
        $user->email = $validated['email'];
        $user->usertype = 3;
        $user->birthdate = $validated['birthdate'];
        $user->contact_num = $validated['contact_num'];
        $user->password = $validated['password'];
        $user->upload_file = $filename;

        $user->save();

        $data = [
            'name' => $validated['fname'].' '.$validated['lname'],
            'message' => 'This is a test email from TQMP.'
        ];
    
        Mail::to($validated['email'])->send(new MyTestMail($data));

        return redirect('/')->with('success_msg', 'Please check your email!');

    }

    /**
     * Login a User
     */    
    public function login(Request $request){
        return view("home.login");
    }

    public function register(){
        return view("home.register");
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
