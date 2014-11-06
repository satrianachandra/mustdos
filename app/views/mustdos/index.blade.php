@extends('layouts.main')

@section('main')
	<h2>MustDos</h2>
	@if ( !$mustdos->count() )
		You have no MustDos
	@else
		<ul>
			@foreach( $mustdos as $mustdo )
				<li><a href="{{ route('mustdos.show', $mustdo->id) }}">{{ $mustdo->name }}</a></li>
				(
					{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('mustdos.destroy', $mustdo->id))) }}
						{{ link_to_route('mustdos.edit', 'Edit', array($mustdo->id), array('class' => 'btn btn-info')) }},

						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				)
			@endforeach
		</ul>
	@endif
@stop