<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;
use DB;
use Config;
use Session;
use App\Models\Orders;



class NewController extends Controller
{
    public function index($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('checkout', ['product' => $product]);
    }




    public function DoCheckout(Request $request)
	{

		$data = $request->input();
		//print_r($data);
        $id = $request->input('id');
		$product = products::find($id);
        //print_r($product);
		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    //1.
		//get formatted price. remove period(.) from the price
		// $temp_amount 	= $product->price*100;
		// $amount_array 	= explode('.', $temp_amount);
		// $pp_Amount 		= $amount_array;
        $pp_Amount = (int)($product->price * 100);
		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
		//2.
		//get the current date and time
		//be careful set TimeZone in config/app.php
		$DateTime 		= new \DateTime();
		$pp_TxnDateTime = $DateTime->format('YmdHis');
		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
		//3.
		//to make expiry date and time add one hour to current date and time
		$ExpiryDateTime = $DateTime;
		$ExpiryDateTime->modify('+' . 1 . ' hours');
		$pp_TxnExpiryDateTime = $ExpiryDateTime->format('YmdHis');
		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
		//4.
		//make unique transaction id using current date
		$pp_TxnRefNo = 'T'.$pp_TxnDateTime;
		//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

		//--------------------------------------------------------------------------------
		//$post_data

		$post_data =  array(
			"pp_Version" 			=> Config::get('constants.jazzcash.VERSION'),
			"pp_TxnType" 			=> "",
			"pp_Language" 			=> Config::get('constants.jazzcash.LANGUAGE'),
			"pp_MerchantID" 		=> Config::get('constants.jazzcash.MERCHANT_ID'),
			"pp_SubMerchantID" 		=> "",
			"pp_Password" 			=> Config::get('constants.jazzcash.PASSWORD'),
			"pp_BankID" 			=> "TBANK",
			"pp_ProductID" 			=> "RETL",
			"pp_TxnRefNo" 			=> $pp_TxnRefNo,
			"pp_Amount" 			=> $pp_Amount,
			"pp_TxnCurrency" 		=> Config::get('constants.jazzcash.CURRENCY_CODE'),
			"pp_TxnDateTime" 		=> $pp_TxnDateTime,
			"pp_BillReference" 		=> "billRef",
			"pp_Description" 		=> "Description of transaction",
			"pp_TxnExpiryDateTime" 	=> $pp_TxnExpiryDateTime,
			"pp_ReturnURL" 			=> Config::get('constants.jazzcash.RETURN_URL'),
			"pp_SecureHash" 		=> "",
			"ppmpf_1" 				=> "1",
			"ppmpf_2" 				=> "2",
			"ppmpf_3" 				=> "3",
			"ppmpf_4" 				=> "4",
			"ppmpf_5" 				=> "5",
		);

		$pp_SecureHash = $this->get_SecureHash($post_data);

		$post_data['pp_SecureHash'] = $pp_SecureHash;

		$values = array(
			'TxnRefNo'    => $post_data['pp_TxnRefNo'],
			'amount' 	  => $product->price,
			'description' => $post_data['pp_Description'],
			'status' 	  => 'success'
		);
		DB::table('order')->insert($values);


		Session::put('post_data',$post_data);
		// echo '<pre>';
		// print_r($post_data);
		// echo '</pre>';

		return view('do_checkout_v');


	}

	//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    private function get_SecureHash($data_array)
	{
		ksort($data_array);

		$str = '';
		foreach($data_array as $key => $value){
			if(!empty($value)){
				$str = $str . '&' . $value;
			}
		}

		$str = Config::get('constants.jazzcash.INTEGERITY_SALT').$str;

		$pp_SecureHash = hash_hmac('sha256', $str, Config::get('constants.jazzcash.INTEGERITY_SALT'));

		//echo '<pre>';
		//print_r($data_array);
		//echo '</pre>';

		return $pp_SecureHash;
	}
    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
	public function paymentStatus(Request $request)
	{
		$response = $request->input();
		// echo '<pre>';
		// print_r($response);
		// echo '</pre>';

		if($response['pp_ResponseCode'] == '000')
		{
			$response['pp_ResponseMessage'] = 'Your Payment has been Successful';
			$values = array('status' => 'completed');
			DB::table('order')
				->where('TxnRefNo',$response['pp_TxnRefNo'])
				->update(['status' => 'completed']);
		}

		return view('payment-status',['response'=>$response]);
	}
    // public function OrdersList(){
    //     $orders=order::all();
    //     return view('OrdersList', compact('orders'));
    // }
    public function OrdersList()
    {
        $orders = DB::table('order')->get();
        return view('OrdersList', compact('orders'));
    }

}
