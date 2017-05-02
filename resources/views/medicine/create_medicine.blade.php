@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Add new Medicine</h2>
	
	<hr>

	<form class="form-group" action="/medicine/create" method="post">

		{{csrf_field()}}

		<div class="form-group">
			<label for="name">Name:</label>
			<input class="form-control" type="text" name="name" id="name">
		</div>
		<div class="form-group">
			<label for="price">Price:</label>
			<input class="form-control"type="text" name="price" id="price">
		</div>
		<div class="form-group">
			<label for="type">Type:</label>
			<input class="form-control"type="text" name="type" id="type">
		</div>
		<div class="form-group">
			<label for="exp_date">Expire Date:</label>
			<input class="form-control" type="date" name="expire_date" id="exp_date">
		</div>
		<div class="form-group">
			<label for="quantity">Quantity:</label>
			<input class="form-control"type="text" name="quantity" id="quantity">
		</div>
		<input type="submit" class="btn btn-success" value="Add">

</form>
</div>

@stop