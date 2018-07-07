@extends('Layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>About page</h2>
    </div>

    <div class="nav-button">
        <a class="btn btn-success" href="{{ url('/dashboard/about/create') }}">Update</a>
        <br>
        <br>
    </div>
    <div>
        <h2 class="h2">{{ $about->title }}</h2>
        <blockquote>{{ $about->description }}</blockquote>
    </div>
@endsection