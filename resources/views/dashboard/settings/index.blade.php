@extends('Layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Setting page</h2>
</div>
<form method="post">
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input value="{{ $setting->email }}" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email"> <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
	<div class="form-group">
		<label for="exampleInputPassword1">Telephone</label>
		<input value="{{ $setting->tel }}" type="text" class="form-control" id="tel" placeholder="Telephone" name="tel"> </div>
		{{ csrf_field() }}
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection