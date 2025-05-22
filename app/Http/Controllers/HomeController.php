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

        $groupedOrders = DB::table('orders')
        ->select(
            'reference_num',
            DB::raw("
                CASE 
                    WHEN SUM(CASE WHEN status != 'completed' THEN 1 ELSE 0 END) = 0 
                    THEN 'completed' 
                    ELSE 'pending' 
                END as group_status
            "),
            DB::raw('SUM(price) as total_price'),
            DB::raw('MIN(created_at) as nearest_created_at')
        )
        ->groupBy('reference_num')
        ->get();

        return view('home.profile', [
            'my_user' => $my_user,
            'quotations' => $quotations,
            'groupedOrders' => $groupedOrders,
        ]);
    }

    public function shop()
    {
        /** @var \Illuminate\Auth\SessionGuard $auth */
        $auth = auth();
        $my_user = $auth->user();

        if($my_user == null){
            return redirect('/')->with('error_msg', 'Login First to avail shopping');
        }

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

        $productSubCategories = DB::table('product_sub_categories')->get();
        
        
        return view('home.shop', [
            'my_user' => $my_user,
            'products' => $products,
            'productSubCategories' => $productSubCategories,
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
