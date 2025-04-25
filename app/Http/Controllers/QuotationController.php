<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\QuotationImage;
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

        $filenames = array();
        $quotationType = $request->input('quotation_type');

        // Bullet Proofing
        if($quotationType == 'bullet'){

            $validated = $request->validate([
                'plateNumber' => ['required'],
                'model' => ['required'],
                'other_model' => ['nullable'],
                'color' => ['required'],
                'services.*' => ['required'],
                'remarks' => ['nullable'],
                'filenames.*' => ['nullable']
            ]);

            // Handle file upload
            if ($request->hasFile('filenames')) {
                foreach($request->file('filenames') as $file){
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('quotations', $filename, 'public');
                    array_push($filenames, $filename);
                }  
            } else {
                $filename = "default.png"; 
            }

            $quotation = new Quotation();
            $quotation->user_id = $my_user->id;
            $quotation->reference = $this->generateQuotationID($quotation->id+1);
            $quotation->quotation_type = $quotationType;
            $quotation->plate_number = $validated['plateNumber'];
            $quotation->model = $validated['model'] == 'Other Model'?$validated['other_model']:$validated['model'];
            $quotation->unit_color = $validated['color'];
            $quotation->services = json_encode($validated['services']);
            $quotation->remarks = $validated['remarks'];
            $quotation->status = 'Pending';

            $quotation->save();

        // Glass Processing
        } elseif ($quotationType == 'glass') {

            $validated = $request->validate([
                'type.*' => ['required'],
                'thickness.*' => ['required'],
                'height1.*' => ['required'],
                'height2.*' => ['nullable'],
                'width1.*' => ['required'],
                'width2.*' => ['nullable'],
                'color.*' => ['required'],
                'quantity.*' => ['required'],
                'cutting_details.*' => ['nullable'],
                'filenames.*' => ['nullable']
            ]);

            // Handle file upload
            if ($request->hasFile('filenames')) {
                foreach($request->file('filenames') as $file){
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('quotations', $filename, 'public');
                    array_push($filenames, $filename);
                }  
            } else {
                $filename = "default.png"; 
            }

            $quotation = new Quotation();
            $quotation->user_id = $my_user->id;
            $quotation->reference = $this->generateQuotationID($quotation->id+1);
            $quotation->quotation_type = $quotationType;
            $quotation->type = json_encode($validated['type']);
            $quotation->thichkness = json_encode($validated['thickness']);
            $quotation->h1 = json_encode($validated['height1']);
            $quotation->h2 = json_encode($validated['height2']);
            $quotation->w1 = json_encode($validated['width1']);
            $quotation->w2 = json_encode($validated['width2']);
            $quotation->color = json_encode($validated['color']);
            $quotation->quantity = json_encode($validated['quantity']);
            if(isset($validated['cutting_details'])){
                $quotation->cutting_details = json_encode($validated['cutting_details']);
            }
            
            $quotation->status = 'Pending';

            $quotation->save();
        }

        if(count($filenames) > 0){
            foreach($filenames as $image){
                $quotationImage = new QuotationImage();
                $quotationImage->quotation_id = $quotation->id;
                $quotationImage->filename = $image;
                $quotationImage->save();
            }
        }

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
     * Show User a Get Quotation Form (Bullet Proofing)
     */
    public function quotationBulletProofing()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        return view('home.quotation.bulletproof', [
            'my_user' => $my_user,
        ]);
    }

    /**
     * Show User a Get Quotation Form (Glass Processing)
     */
    public function quotationGlassProcessing()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        $products = DB::table('products')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->leftJoin('product_sub_categories', 'products.sub_category_id', '=', 'product_sub_categories.id')
            ->leftJoin(DB::raw('(SELECT product_id, MIN(filename) as filename FROM product_images GROUP BY product_id) as pi'), 'products.id', '=', 'pi.product_id')
            ->select(
                'products.*', 
                'product_categories.category as category',
                'product_sub_categories.category as sub_category',
                'pi.filename as image')
            ->where('products.isDeleted', '=', false)->get();

        return view('home.quotation.glasspro', [
            'my_user' => $my_user,
            'products' => $products,
        ]);
    }

    /**
     * Show User his/her Quotation Details
     */
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

    /**
     * Send Message as Admin
     */
    public function sendMessage(Request $request)
    {
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

    /**
     * Send Message as User
     */
    public function userSendMessage(Request $request)
    {
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

    /**
     * Generates a Quotation ID
     */
    public function generateQuotationID($id)
    {
        $paddedId = str_pad($id, 6, '0', STR_PAD_LEFT); // Pad ID to 6 digits
        return "{$paddedId}-3"; // Append fixed suffix
    }


}
