@extends('layouts.auth')

@section('content')
</style>
<div class="card">
	<div class="card-body">
	<table>
		<tr>
			<th>image</th>
			<th>title</th>
			<th>cost</th>
			<th>description</th>
			<th>category</th>
		</tr>


		
			@foreach ($products as $product)
			<tr>
				<td ><img class="imageContainer" src="{{ asset('images')."/".$product->image}}"></td>
				{{-- <td>{{ $product->image }}></td> --}}
				<td>{{ $product->title }}</td>
				<td>{{ $product->cost }}</td>
				<td>{{ $product->description }}</td>
				<td>{{ $product->category }}</td>

			</tr>
			@endforeach
	</table>
	</div>
</div>
@endsection