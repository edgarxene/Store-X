@extends('store.template')

@section('content')
	<!-- Utilizando blade...
	Ciclo para recorrer el arreglo de productos (Contiene todos los datos extraidos de la tabla).
	Cada item se llamara $producto.
	Para obtener el dato que viaja en cada item :::::: $product->name
	--> 
<div class="products">
	@foreach($products as $product)
	<div class="product">
		<h3>{{$product->name}}</h3>		
		<img src="{{$product->image}}" width="250">
		<div class="product-info">
			<p>{{$product->extract}}</p>
			<p>Precio: ${{number_format($product->price,2)}}</p>
			<p>
				<a href="#">La quiero</a>
				<a href="{{route('product-detail',$product->slug)}}">Detalle</a>
			</p>

		</div>
	</div>
		
	@endforeach
</div>	


@stop
