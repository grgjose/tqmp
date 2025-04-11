<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
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

    public function addInquiry(Request $request){
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $validated = $request->validate([
            'fullname' => ['required', 'min:3'],
            'email' => ['required'],
            'contact_num' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
            'upload_file' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:4096'],
        ]);

        // Handle file upload
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('inquiries', $filename, 'public');
        } else {
            $filename = "default.png"; 
        }

        $inquiry = new Inquiry();
        $inquiry->fullname = $validated['fullname'];
        $inquiry->email = $validated['email'];
        $inquiry->contact_num = $validated['contact_num'];
        $inquiry->subject = $validated['subject'];
        $inquiry->message = $validated['message'];
        $inquiry->upload_file = $filename;
        $inquiry->save();

        return redirect('/contact')->with('success_msg', 'Inquiry Submitted');
    }

}
