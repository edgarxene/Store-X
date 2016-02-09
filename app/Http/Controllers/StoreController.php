<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
	public function index()
	{
		$products = Product::all();//Obtener todos los productos Atraves del modelo 
		//dd($products); //Herramienta de laravel que muestra los datos en el modo debug
		return view('store.index',compact('products'));//Envia los datos a la vista
	}
    
    public function show($slug)
	{
		$product = Product::where('slug',$slug)->first();
		//dd($products);
		return view('store.show',compact('product'));//Envia los datos a la vista
	}
}
