@extends('layouts.main')

@section('main')
	<h2>MustDos</h2>
	@if ( !$mustdos->count() )
		You have no MustDos
	@else
		<ul>
			@foreach( $mustdos as $mustdo )
				<li><a href="{{ route('mustdos.show', $mustdo->id) }}">{{ $mustdo->name }}</a></li>
			@endforeach
		</ul>
	@endif
@stop