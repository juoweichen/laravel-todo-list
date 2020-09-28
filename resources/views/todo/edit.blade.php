@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">

			<div class="card">
				<div class="card-header">Edit Todo Item</div>

				<div class="card-body">
					<form action="/todo/{{$todo->id}}" method="POST">
						@method('PUT')
						@csrf
						<div class="form-group">
							<input name="todo" type="text" class="form-control" id="todo" value='{{$todo->todo}}'>
							@error('todo')
							<small class='text-danger'>{{$message}}</small>
							@enderror
						</div>

						<button type="submit" class="btn btn-primary">Save todo</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection