@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">

			{{-- The search field starts here --}}
				<div class="input-group">
			      <input type="text" class="search_text form-control" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="find btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>


			      </span>
			    </div><!-- /input-group -->

			    {{-- <button id="find2">Test</button> --}}

			{{-- The medicines list starts here --}}
			<br>
			<table class="table table-striped table-bordered">
				<tbody>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Type</th>
					<th>Epire Date</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
				<?php $i = 1; ?>
				@foreach($medicines as $medicine )
				
					<tr class="medicines_row">
						<td>{{$i}}</td>
						<td>{{$medicine->name}}</td>
						<td>{{$medicine->type}}</td>
						<td>{{$medicine->expire_date}}</td>
						<td>{{$medicine->quantity}}</td>
						<td>Tsh. {{$medicine->price}} /=</td>
						<td><a href="?id={{$medicine->id}}">Add</a></td>
					</tr>
				
				<?php $i++; ?>
				@endforeach
				</tbody>
			</table>

			</div>
			<div class="col-md-6">
				
				<table class="table table-striped table-bordered">
				<tbody>
				<tr>
					<td colspan="7"><h1 style="text-align: center;">Mary's PHARMARCY</h1></td>
				</tr>
				<tr>
					<td colspan="7">
						<label for="name">Patient Name:</label>
						<input type="text">
						<p class="pull-right" style="font-weight: bold">TIN: 921-674-980</p>
					</td>
				</tr>
				<tr>
					<th>No.</th>
					<th>Description</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
				<?php $i = 1;



				if(isset($_GET['id'])){

					
					$id = $_GET['id'];


					$selected_medicine = \App\Medicine::find($id);


					$medicine_exist = session('selected_medicines', $selected_medicine);

					var_dump(sizeof($medicine_exist));

					if(count($medicine_exist) >= 1){
						session()->push('selected_medicines', $selected_medicine);

						@$selected_medicines = session('selected_medicines');

					}

					// var_dump($selected_medicines);

					$_GET['id'] = '';

				 ?>

				
				
				
				@foreach($selected_medicines as $selected_medicine )
				
					<tr class="medicines_row">
						<td>{{$i}}</td>
						<td>{{$selected_medicine->name}}</td>
						<td><input type="number" name="quantity" min="1"></td>
						<td>Tsh. {{$selected_medicine->price}} /=</td>
					</tr>
				
				<?php $i++; ?>
				@endforeach

				<?php } ?>
				


				</tbody>
			</table>

			<a href="?clear=1">Clear</a>

			<?php 
				if(isset($_GET['clear'])){
					session()->flush();
				}
			?>
			</div>
		</div>
	</div>

@stop