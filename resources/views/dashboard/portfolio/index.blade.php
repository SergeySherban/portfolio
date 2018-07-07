@extends('Layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2>Portfolio page</h2>
</div>
  <div class="nav-button">
  	<a class="btn btn-success" href="{{ url('/dashboard/portfolio/create') }}">Add</a>
  	<br>
  	<br>
  </div>
  <div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>URL</th>
				<th>Category</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($portfolio as $p)
			<tr>
				<td>{{ $p->id }}</td>
				<td>{{ $p->title }}</td>
				<td>{{ $p->url }}</td>
				<td>{{ $p->category }}</td>
				<td>
					<a class="btn btn-info" href="{{ route('portfolio.edit', $p->id) }}">Edit</a>
				</td>
				<td>
                    <form method="post" action="{{ route('portfolio.destroy', $p->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger portfolio-del">Delete</button>
                    </form>
				</td>
			</tr>
			@endforeach	
		</tbody>
	</table>
</div>
@endsection