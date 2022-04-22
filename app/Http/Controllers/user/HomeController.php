<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\{plan,banner, order, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class HomeController extends Controller
{
    public function index_home(){
        $plan = plan::all();
        $banner =  Banner::where(['status'=>'1'])->get();
        return view('user.home',compact('plan','banner'));
    
    }
    public function index_order(){
        return view('user.orderdetails');
    }
    public function index_product_details($slug){
        $plan = plan::all()->where('slug',$slug);
        return view('user.productdetails',compact('plan'));
    }
    public function index_plans(){
        $plan = plan::all();
        return view('user.plans', compact('plan'));
    }
    public function index(){
        return view('user.contact');
    }

    

    public function store(Request $request){
        $validation = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
        ]);

        if($validation->fails()){
            return back()->withErrors($validation->errors());
        }

        $contact = contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return back()->with('status',"Thanks");

    }

    public function checkout($slug){
        $plan = plan::all()->where('slug',$slug);
        return view('user.checkoutform',compact('plan'));
    }

    public function checkout_store(Request $request){
            $validation = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
         
         ]);

        if($validation->fails()){
            return back()->withErrors($validation->errors());
        }

        $orders = order::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'total' => $request->total,
            'payment_mode' => $request->payment_mode,
            'payment_status' => $request->payment_status,
            'zip' => $request->zip
            ]);
            
            $user = User::create([
                'first_name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => $request->password,
                ]);
        return redirect('/plan-payment');
    }
}
