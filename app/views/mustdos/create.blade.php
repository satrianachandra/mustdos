@extends('layouts.main')

@section('main')
	<h2>Create New MustDos</h2>

	{{ Form::model(new Mustdo, ['route' => ['mustdos.store'],'files' => true]) }}
		@include('mustdos/partials/_form', ['submit_text' => 'Create MustDos'])
	{{ Form::close() }}
@stop