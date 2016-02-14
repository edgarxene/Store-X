@extends('store.template')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1>
	</div>
	<div class="table-cart">
		@if(count($cart))
		<p>
			<a href="{{route('cart-trash')}}" class="btn btn-danger">Vaciar Carrito <i class="fa fa-trash"></i></a>
		</p>
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Quitar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cart as $item)
						<tr>
							<td><img src="{{$item->image}}"></td>
							<td>{{$item->name}}</td>
							<td>${{number_format($item->price,2)}}</td>
							<td>{{$item->quantity}}</td>
							<td>${{number_format($item->price * $item->quantity,2)}}</td>
							<td><a href="{{route('cart-delete',$item->slug)}}" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>				
						</tr>
					@endforeach
				</tbody>
			</table>
			<hr>
			<a href="{{route('home')}}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i> Seguir comprando</a>
			<a href="{{route('home')}}" class="btn btn-primary">Continuar <i class="fa fa-chevron-circle-right"></i></a>

		</div>
		@else
			<h3 class="span label-warning">El carrito esta vacio :(</h3>
				<hr>
		<a href="{{route('home')}}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i> Seguir comprando</a>

		@endif
	
</div>

	
</div>

@stop
