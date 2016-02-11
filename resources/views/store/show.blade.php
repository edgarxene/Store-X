@extends('store.template')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Detalle del Producto</h1>
	</div>

	<div class="row">
		<div class="col-md-6">		
			<div class="product-block">
				<img src="{{$product->image}}" width="250">
			</div>
		</div>

		<div class="col-md-6">		
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
		</div>
</div>

@stop
