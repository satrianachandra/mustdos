@extends('layouts.main')

@section('main')
	</br>
	</br>
	<h2>{{ $mustdo->name }}</h2>
	@if ( !$mustdo->entries->count() )
		Your mustdo has no entries.
	@else
		<ul>
			@foreach( $mustdo->entries as $entry )
				<li>{{ $entry->name }}</li>
				<ul>
				@foreach( $entry->items as $item )
					<li>
						{{ $item->name }}
						{{ link_to_route('mustdos.entries.items.show', 'start', array($mustdo->id,$entry->id,$item->id), array('class' => 'btn btn-info')) }}
					</li>
				@endforeach
				</ul>
			@endforeach
		</ul>
	@endif

	</br>
	</br>
	<p>
		{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('mustdos.destroy', $mustdo->id))) }}
			{{ link_to_route('mustdos.edit', 'Edit', array($mustdo->id), array('class' => 'btn btn-info')) }},

			{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
		{{ Form::close() }}
				
	</p>

@stop