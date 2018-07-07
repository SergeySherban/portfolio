@extends('Layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h2>Portfolio create</h2>
</div>
<div class="row">
	<div class="col-md-5">
		<form method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" placeholder="Title" name="title">
			@if($errors->has('title'))
			    <span class="help-block">
			        <strong>{{ $errors->first('title') }}</strong>
			    </span>
            @endif
		  </div>
		  <div class="form-group">
			<label for="url">URL</label>
			<input type="text" class="form-control" id="url" placeholder="URL" name="url">
		  </div>
		  <div class="form-group">
			<label for="category">Category</label>
			<input type="text" class="form-control" id="category" placeholder="Category" name="category">
			@if($errors->has('category'))
			    <span class="help-block">
			        <strong>{{ $errors->first('category') }}</strong>
			    </span>
			@endif
		  </div>
		  <div class="form-group">
			<label for="file">File input</label>
			<input type="file" class="form-control" id="file" placeholder="File" name="preview">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description"></textarea>
			@if($errors->has('description'))
			    <span class="help-block">
			        <strong>{{ $errors->first('description') }}</strong>
			    </span>
			@endif
		  </div>
		  <button type="submit" class="btn btn-primary">Save</button>
		  
		  {{ csrf_field() }}
		  
		</form>
	</div>
	<div class="col-md-7"></div>
</div>
  
@endsection