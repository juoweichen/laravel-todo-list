@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">



			<div class="card">
				<div class="card-header">Create new todo item</div>

				<div class="card-body">
					<form action="/todo" method="POST">
						@csrf
						<div class="form-group">
							<input name="todo" type="text" class="form-control" id="todo" placeholder="write down new todo item here">
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