<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function store(Request $request) {


    	$cartDetail = new CartDetail();
    	$cartDetail->cart_id = $user->cart_id;
    	$cartDetail->product_id = $request->product_id;
    	$cartDetail->quantity = $request->quantity;
    	$cartDetail->save();
    }
}