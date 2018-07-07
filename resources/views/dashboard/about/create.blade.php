@extends('Layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h2>About create</h2>
</div>
<div class="row">
	<div class="col-md-5">
		<form method="post" action="{{ route('about.store') }}">
		  <div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" placeholder="Title" name="title">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description" rows="10"></textarea>
		  </div>
		  {{ csrf_field() }}
		  <button type="submit" class="btn btn-primary">Save</button>
		</form>
	</div>
	<div class="col-md-7"></div>
</div>
  
@endsection