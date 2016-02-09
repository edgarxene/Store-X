@extends('store.template')
@section('content')
<h1>Detalle Del Producto</h1>
<div class="product-block">
	<img src="{{$product->image}}" width="250">
</div>
<div class="product-block">
	<h3>{{$product->name}}</h3>		
		<div class="product-info">
			<p>{{$product->description}}</p>
			<p>Precio: ${{number_format($product->price,2)}}</p>
			<p>
				<a href="#">La quiero</a>
			</p>
		</div>
		<p><a href="{{route('home')}}">Regresar</a></p>
</div>
@stop
