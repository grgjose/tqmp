<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use DateTime;


class UserController extends Controller
{
    /**
     * Default Display of Users Table
     */
    public function index()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        //$users = DB::table('users')->where('isDeleted', '=', false)->get();

        $users = DB::table('users')
        ->join('usertypes', 'users.usertype', '=', 'usertypes.id')
        ->select('users.*', 'usertypes.title as usertype_title')
        ->where('users.isDeleted', '=', false)
        ->get();


        return view('dashboard.index', [
            'my_user' => $my_user,
            'users' => $users,
        ])
        ->with('title', 'Active Users')
        ->with('main_content', 'dashboard.settings.users');
    }

    /**
     * View Login
     */    
    public function login(Request $request)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view("home.login", [
          'my_user' => $my_user  
        ]);
    }

    /**
     * View Register
     */   
    public function register()
    {

        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view("home.register", [
          'my_user' => $my_user  
        ]);
    }

    /**
     * Sign-in Process
     */    
    public function logon(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'min:2'],
            "password" => ['required', 'min:2']
        ]);
        
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();

        $remember = $request->input("remember_me");

        
        if($auth->attempt($validated, $remember) || $auth->viaRemember()){
            $request->session()->regenerate();



            if($auth->check() && $auth->user()->usertype <= 2){
                return redirect('/dashboard');
            } elseif($auth->user()->status == "registered"){
                $auth->logout();
                return redirect('/')->with('error_msg', 'Your user is not yet verified, Please wait for Email Confirmation from our Team!');
            }  else {
                return redirect('/');
            }

        } else {
            return redirect('/')->with('error_msg', 'Invalid Credentials!');
        }
    }

    /**
     * Sign-up Process
     */    
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
            'upload_file' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:4096'],
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
        $user->email_verification_token = $this->generateGUID();
        $user->email_verification_sent = date("Y-m-d H:i:s");
        $user->password = $validated['password'];
        $user->upload_file = $filename;

        $user->save();

        $data = [
            'name' => $validated['fname'].' '.$validated['lname'],
            'message' => '',
            'email_token' => $user->email_verification_token
        ];
    
        Mail::to($validated['email'])->send(new RegistrationMail($data));

        return redirect('/')->with('success_msg', 'Please check your email!');

    }

    /**
     * Email Confirmation Process
     */    
    public function confirmation($token)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();
        
        if($my_user != null) return redirect('/')->with('error_msg', 'You are already signed in!');
        if($token == null) return redirect('/')->with('error_msg', 'Invalid Token!');

        $users = DB::table('users')->where('email_verification_token', '=', $token)->get();

        if($users == null) return redirect('/')->with('error_msg', 'Invalid Token!');
        if(count($users) == 0 || count($users) > 1) return redirect('/')->with('error_msg', 'Invalid Token!');

        $user = User::find($users[0]->id);

        $datetime = new DateTime($user->email_verification_sent);
        $sevenDaysAgo = new DateTime("-7 days");
        
        if ($datetime < $sevenDaysAgo) return redirect('/')->with('error_msg', 'Expired Token!');

        $user->email_verification_token = null;
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->email_verification_sent = null;

        $user->save();

        return redirect('/')->with('success_msg', 'Email Verified, Please wait for the TQMP Sales Representative Email for the Validation of your Documents!');

    }

    /**
     * Logout a User
     */    
    public function logout(Request $request)
    {   
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) { return redirect('/'); }
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
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')->where('isDeleted', '=', false)->where('id', '=', $id)->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        return view('dashboard.settings.users-view', [
            'my_user' => $my_user,
            'user' => $users[0],
        ]);
    }

    /**
     * Display pending approvals (Customer)
     */
    public function approvals()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')
        ->where('usertype', '=', 3)
        ->where('status', 'registered')->get();

        return view('dashboard.index', [
            'my_user' => $my_user,
            'users' => $users,
        ])
        ->with('title', 'Approvals')
        ->with('main_content', 'dashboard.modules.approvals');

    }

    /**
     * Display specific approval (Customer)
     */
    public function approvals_show($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')
        ->where('usertype', '=', 3)
        ->where('status', 'registered')
        ->where('id', '=', $id)->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        return view('dashboard.modules.approvals-view', [
            'my_user' => $my_user,
            'user' => $users[0],
        ]);
    }

    /**
     * Download specific file (Customer)
     */
    public function approvals_download($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')
        ->where('usertype', '=', 3)
        ->where('status', 'registered')
        ->where('id', '=', $id)->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        $path = storage_path("app/public/uploads/".$users[0]->upload_file);

        if (!file_exists($path)) {
            abort(404, 'File not found.');
        }

        return response()->download($path);
    }

    /**
     * Approve a registered user (Customer)
     */
    public function approvals_approve($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')
        ->where('usertype', '=', 3)
        ->where('status', 'registered')
        ->where('id', '=', $id)->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        $user = User::find($id);
        $user->status = "active";
        $user->save();

        return redirect('/approvals')->with('success_msg', $user->email.' is now an Active Customer!');
    }

    /**
     * Rejects a registered user (Customer)
     */
    public function approvals_reject($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')
        ->where('usertype', '=', 3)
        ->where('status', 'registered')
        ->where('id', '=', $id)->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        $user = User::find($id);
        $user->status = "rejected";
        $user->save();

        return redirect('/approvals')->with('success_msg', $user->email.' is now a Rejected Customer!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 2) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')->where('isDeleted', '=', false)->where('id', '=', $id)->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        return view('dashboard.settings.users-update', [
            'my_user' => $my_user,
            'user' => $users[0],
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        
        $user = User::find($id);
        if($user == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        $validated = $request->validate([
            'fname' => ['required', 'min:3'],
            'mname' => ['nullable'],
            'lname' => ['required'],
            'email' => ['required'],
            'birthdate' => ['required'],
            'contact_num' => ['required'],
        ]);

        $user->fname = $validated['fname'];
        $user->mname = $validated['fname'];
        $user->lname = $validated['fname'];
        $user->email = $validated['fname'];
        $user->birthdate = $validated['fname'];
        $user->contact_num = $validated['fname'];

        $user->save();

        return $this->index();
    }

    /**
     * Update the specified resource in storage.
     */
    public function changepic($id, Request $request)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $users = DB::table('users')
        ->join('usertypes', 'users.usertype', '=', 'usertypes.id')
        ->select('users.*', 'usertypes.title as usertype_title')
        ->where('users.isDeleted', '=', false)
        ->get();

        if($users == null) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');
        if(count($users) == 0) return redirect('/dashboard')->with('error_msg', 'Unexpected Error!');

        // Handle file upload
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('user-pics', $filename, 'public');
        } else {
            return response()->json(['error' => 'File upload failed'], 400);
        }

        $user = User::find($id);
        $user->user_pic = $filename;
        $user->save();

        return view('dashboard.index', [
            'my_user' => $my_user,
            'users' => $users,
        ])
        ->with('title', 'Active Users')
        ->with('main_content', 'dashboard.settings.users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Generates a GUID
     */
    public function generateGUID() 
    {
        if (function_exists('com_create_guid')) {
            return trim(com_create_guid(), '{}');
        }
    
        return sprintf(
            '%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
            mt_rand(0, 0xFFFF), mt_rand(0, 0xFFFF),
            mt_rand(0, 0xFFFF),
            mt_rand(0, 0x0FFF) | 0x4000, // 4XXX - Version 4 UUID
            mt_rand(0, 0x3FFF) | 0x8000, // 8XXX, 9XXX, AXXX, or BXXX - Variant 1 UUID
            mt_rand(0, 0xFFFF), mt_rand(0, 0xFFFF), mt_rand(0, 0xFFFF)
        );
    }

}
