<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\QuotationMessage;
use Illuminate\Support\Facades\DB;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $quotations = DB::table('quotations')
        ->where('isDeleted', '=', false)
        ->orderBy('created_at', 'DESC')->get();


        $quotationMessages = DB::table('quotation_messages')
        ->join('users', 'quotation_messages.from_user_id', '=', 'users.id')
        ->select('quotation_messages.*', 'users.usertype as usertype', 'users.fname as fname', 'users.lname as lname')
        ->get();

        $users = DB::table('users')->where('isDeleted', '=', false)->get();
        $usertypes = DB::table('usertypes')->where('isDeleted', '=', false)->get();

        return view('dashboard.index', [
            'my_user' => $my_user,
            'quotations' => $quotations,
            'quotationMessages' => $quotationMessages,
            'users' => $users,
            'usertypes' => $usertypes,
        ])
        ->with('title', 'Quotations')
        ->with('main_content', 'dashboard.modules.quotations');
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
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();
        
        $validated = $request->validate([
            'process' => ['required'],
            'size' => ['required'],
            'color' => ['nullable'],
            'details' => ['required'],
            'upload_file' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:4096'],
        ]);
 
        $filename = '';
        // Handle file upload
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('quotations', $filename, 'public');
        } else {
            $filename = "default.png"; 
        }
 
        $quotation = new Quotation();
        $quotation->user_id = $my_user->id;
        $quotation->reference = $this->generateGUID();
        $quotation->type = $validated['process'];
        $quotation->size = $validated['size'];
        $quotation->color = $validated['color'];
        $quotation->filename = $filename;
        $quotation->message = $validated['details'];
        $quotation->status = "Pending";
        $quotation->valid_until = null;
        
        $quotation->save();

        return redirect('/profile')->with('success_msg', 'Quotation Request is submitted. Please wait for the Reply.');
 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');
        if ($my_user->usertype > 1) return redirect('/')->with('error_msg', 'Invalid Access!');

        $quotations = DB::table('quotations')
        ->where('id', '=', $id)
        ->where('isDeleted', '=', false)->get();

        $quotationMessages = DB::table('quotation_messages')
        ->join('users', 'quotation_messages.from_user_id', '=', 'users.id')
        ->select('quotation_messages.*', 'users.usertype as usertype', 'users.fname as fname', 'users.lname as lname')
        ->where('quotation_messages.quotation_id', '=', $id)
        ->get();

        $users = DB::table('users')->where('usertype', '=', 3)->where('isDeleted', '=', false)->get();

        return view('dashboard.modules.quotations-view', [
            'my_user' => $my_user,
            'quotation' => $quotations[0],
            'quotationMessages' => $quotationMessages,
            'users' => $users,
        ])
        ->with('title', 'Quotations');
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
        $quotation = Quotation::find($id);
        $quotation->isDeleted = true;
        $quotation->save();

        return redirect('/users')->with('success_msg', 'User Successfully Deleted');
    }

    /**
     * Show User a Get Quotation Form
     */
    public function getQuotation()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('glass.processing.get_quotation', [
            'my_user' => $my_user,
            'process' => 'glass'
        ]);
    }


    public function showQuotation($reference)
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $quotation = DB::table('quotations')->where('reference', '=', $reference)->get();
        if($quotation == null || count($quotation) == 0) {
            return redirect('/profile')->with('error_msg', 'Invalid Quotation');
        }

        $quotationMessages = DB::table('quotation_messages')
        ->join('users', 'quotation_messages.from_user_id', '=', 'users.id')
        ->select('quotation_messages.*', 'users.usertype as usertype', 'users.fname as fname', 'users.lname as lname')
        ->where('quotation_messages.quotation_id', '=', $quotation[0]->id)
        ->get();

        return view('home.user_messages', [
            'my_user' => $my_user,
            'quotation' => $quotation[0],
            'quotationMessages' => $quotationMessages,
        ]);

    }

    public function sendMessage(Request $request){
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');

        $validated = $request->validate([
            'quotation_id' => ['required'],
            'message' => ['required'],
        ]);

        $quotationMessage = new QuotationMessage();
        $quotationMessage->quotation_id = $validated['quotation_id'];
        $quotationMessage->from_user_id = $my_user->id;
        $quotationMessage->message = $validated['message'];

        $quotationMessage->save();


        $quotations = DB::table('quotations')
        ->where('id', '=', $validated['quotation_id'])
        ->where('isDeleted', '=', false)
        ->orderBy('created_at', 'DESC')->get();

        $quotationMessages = DB::table('quotation_messages')
        ->join('users', 'quotation_messages.from_user_id', '=', 'users.id')
        ->select('quotation_messages.*', 'users.usertype as usertype', 'users.fname as fname', 'users.lname as lname')
        ->where('quotation_messages.quotation_id', '=', $validated['quotation_id'])
        ->get();

        $users = DB::table('users')->where('isDeleted', '=', false)->get();
        $usertypes = DB::table('usertypes')->where('isDeleted', '=', false)->get();

        return view('dashboard.index', [
            'my_user' => $my_user,
            'quotation' => $quotations[0],
            'quotationMessages' => $quotationMessages,
            'users' => $users,
            'usertypes' => $usertypes,
        ])
        ->with('title', 'Quotations')
        ->with('main_content', 'dashboard.modules.quotations-view');

    }

    public function userSendMessage(Request $request){
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if ($my_user == null) return redirect('/')->with('error_msg', 'Invalid Access!');

        $validated = $request->validate([
            'quotation_id' => ['required'],
            'message' => ['required'],
        ]);

        $quotationMessage = new QuotationMessage();
        $quotationMessage->quotation_id = $validated['quotation_id'];
        $quotationMessage->from_user_id = $my_user->id;
        $quotationMessage->message = $validated['message'];

        $quotationMessage->save();


        $quotations = DB::table('quotations')
        ->where('id', '=', $validated['quotation_id'])
        ->where('isDeleted', '=', false)
        ->orderBy('created_at', 'DESC')->get();

        $quotationMessages = DB::table('quotation_messages')
        ->join('users', 'quotation_messages.from_user_id', '=', 'users.id')
        ->select('quotation_messages.*', 'users.usertype as usertype', 'users.fname as fname', 'users.lname as lname')
        ->where('quotation_messages.quotation_id', '=', $validated['quotation_id'])
        ->get();

        $users = DB::table('users')->where('isDeleted', '=', false)->get();
        $usertypes = DB::table('usertypes')->where('isDeleted', '=', false)->get();

        return redirect('/show-quotation/'.$quotations[0]->reference);

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
