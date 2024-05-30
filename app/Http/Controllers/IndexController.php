<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Booking;
use App\Models\Products;
use Hash;

class IndexController extends Controller
{
    public function packages()
	{
		// $products = DB::select('select * from product');
		// return view('packages',['product'=>$product]);
        $allPackages = products::all();
        return view('packages', compact('allPackages'));
	}
}
