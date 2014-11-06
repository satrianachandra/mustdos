@extends('layouts.main')

@section('main')
	<h2>{{ $mustdo->name }}</h2>
	@if ( !$mustdo->entries->count() )
		Your mustdo has no entries.
	@else
		<ul>
			@foreach( $mustdo->entries as $entry )
				<li><a href="{{ route('mustdos.entries.show', [$mustdo->id, $entry->id]) }}">{{ $entry->name }}</a></li>
				(
					{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('mustdos.entries.destroy', $mustdo->id, $entry->id))) }}
						{{ link_to_route('mustdos.entries.edit', 'Edit', array($mustdo->id, $entry->id), array('class' => 'btn btn-info')) }},

						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				)
			@endforeach
		</ul>
	@endif

	<p>
		{{ link_to_route('mustdos.index', 'Back to MustDos Lists') }} |
		{{ link_to_route('mustdos.entries.create', 'Add new Entry', $mustdo->id) }}
	</p>

@stop