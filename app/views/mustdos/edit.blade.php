@extends('layouts.main')

@section('main')
	<h2>Edit MustDo List</h2>

	{{ Form::model($mustdo, ['method' => 'PATCH', 'route' => ['mustdos.update', $mustdo->id]]) }}
		@include('mustdos/partials/_form', ['submit_text' => 'Edit MustDo List'])
	{{ Form::close() }}
	
@stop