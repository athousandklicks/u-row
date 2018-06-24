<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	 public function shipping()
    {
        return view('cart.shipping-info');
    }

       public function payment()
    {
        return view('cart.payment');
    }
}
