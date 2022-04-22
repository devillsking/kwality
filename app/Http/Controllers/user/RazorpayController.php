<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Payment,order,User};
use Exception;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session;


class RazorpayController extends Controller
{
    public function index(Request $request){
         $order = Order::orderBy('id','desc')->limit(1)->first();
        return view('user.razorpay', compact('order'));
    }

    private $razorpayId = "rzp_test_M5svUgQfaVRSIc";
    private $razorpaykey = "3842SQpHslcDqYuMgpHtfa9C";


    public function payment_store(Request $request){
        $input = $request->all();
  
        $api = new Api($this->razorpayId, $this->razorpaykey);
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        $order = Order::orderBy('id','desc')->limit(1)->first();
        $order->update(['transaction_id'=>$input['razorpay_payment_id'],'payment_status'=>'success']) ;
          
        Session::put('success', 'Payment successful');
        return redirect()->back();
    }

    }

