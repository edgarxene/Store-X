@extends('store.template')

@section('content')
@include('store.partials.slider')
	<!-- Utilizando blade...
	Ciclo para recorrer el arreglo de productos (Contiene todos los datos extraidos de la tabla).
	Cada item se llamara $producto.
	Para obtener el dato que viaja en cada item :::::: $product->name
	--> 
<div class="container text-center">
	<div id="products">
			@foreach($products as $product)
			<div class="product white-panel">
					<h3>{{$product->name}}</h3><hr>
					<img src="{{$product->image}}" width="250">
					<div class="product-info panel">
						<p>{{$product->extract}}</p>
						<h3><span class="label label-success">Precio: ${{number_format($product->price,2)}}</span></h3>
						<p>
							<a class="btn btn-warning" href="{{route('cart-add',$product->slug)}}"><i class="fa fa-cart-plus"></i>La quiero</a>
							<a class="btn btn-primary" href="{{route('product-detail',$product->slug)}}"><i class="fa fa-chevron-circle-right"></i>Detalle</a>
						</p><hr>
					</div>
			</div>
			@endforeach
	</div>	
</div>	

@stop
