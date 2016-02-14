<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;

class StoreController extends Controller
{
	
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart',array());
	}

	public function index()
	{
		$cart = \Session::get('cart');
		$itemactive = Slider::where('order',1)->first();
		$items = Slider::all();//Obtener todos los items para el banner Atraves del modelo y extenderlo hasta partials/slider
	
		$products = Product::all();//Obtener todos los productos Atraves del modelo 
		//dd($products); //Herramienta de laravel que muestra los datos en el modo debug
		return view('store.index',compact('products','items','itemactive','cart'));//Envia los datos a la vista
	}
    
    public function show($slug)
	{
		$product = Product::where('slug',$slug)->first();
		//dd($products);
		return view('store.show',compact('product'));//Envia los datos a la vista
	}

}
