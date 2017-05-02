@extends('layouts.app')

@section('content')
	
	<div class="container">
		<table class="table table-striped table-bordered">
			<tbody>
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Type</th>
				<th>Epire Date</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
			<?php $i = 1; ?>
			@foreach($medicines as $medicine )
			
				<tr>
					<td>{{$i}}</td>
					<td>{{$medicine->name}}</td>
					<td>{{$medicine->type}}</td>
					<td>{{$medicine->expire_date}}</td>
					<td>{{$medicine->quantity}}</td>
					<td>Tsh. {{$medicine->price}} /=</td>
				</tr>
			
			<?php $i++; ?>
			@endforeach
			</tbody>
		</table>
	</div>
@stop