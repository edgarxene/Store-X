<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;


class CartController extends Controller
{
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart',array());
	}
    //Show cart
    public function show()
    {
    	$cart = \Session::get('cart');
    	return view('store.cart',compact('cart'));
    }
    //Add Item
    public function add(Product $product)
    {
		
    	$cart = \Session::get('cart');
    	$cart[$product->slug] = $product;
    	\Session::put('cart',$cart);

    	return redirect()->route('cart-show');
	}
    //Delete item
    public function delete(Product $product)
    {
		
    	$cart = \Session::get('cart');
    	unset($cart[$product->slug]);
    	\Session::put('cart',$cart);

    	return redirect()->route('cart-show');
	}
    //Update item
    //Trash cart
    public function trash()
    {
		
    	$cart = \Session::forget('cart');

    	return redirect()->route('cart-show');
	}
    //Total
}
