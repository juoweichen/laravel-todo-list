@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h2>{{$todo->todo}}</h2>
			<a href='/'>Back</a>
		</div>
	</div>
</div>
@endsection