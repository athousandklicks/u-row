<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Car;

class CartController extends Controller
{

    public function index()
    {
        $cartItems=Cart::content();
        return view('cart.index',compact('cartItems'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function addItem($id)
    {
        $car=Car::find($id);
        Cart::add($id, $car->name, 1, $car->price);
        return back();
    }

    public function update(Request $request, $id)
    {
        Cart::update($id,['qty'=>$request->qty]);
        return back();
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
