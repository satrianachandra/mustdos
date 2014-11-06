<ul>
	<p>
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name') }}
	</p>

	{{ Form::label('entries', 'Entries:') }}

	<ul>
		<p>
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name') }}
		</p>

	</ul>

	
	<p>{{ Form::submit($submit_text) }}</p>
	
</ul>