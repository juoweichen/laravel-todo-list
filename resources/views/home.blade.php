@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<a href='/todo/create' class='btn btn-primary'>+ New</a>

			@foreach($todos as $todo)
			<div class="card mt-2">
				<div class="card-body p-2 d-flex">
					<a href='/todo/{{$todo->id}}' class="ml-3 mt-2">{{$todo->todo}}</a>
						<a href='/todo/{{$todo->id}}/edit' class='btn btn-dark ml-auto'>Edit</a>
						<a href='/todo/{{$todo->id}}/delete' class='btn btn-danger'>Delete</a>
						<!-- <form action="/todo/{{$todo->id}}" mothod='POST'>
							@csrf
							@method('DELETE')
							<button class='btn btn-danger' type="submit">Delete</button>
						</form> -->
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>
@endsection