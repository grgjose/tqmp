<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        

    }

    public function addMessage(Request $request)
    {

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
