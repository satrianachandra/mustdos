<ul>
	<p>
		{{ Form::label('mustdo_name', 'Name:') }}
		{{ Form::text('mustdo_name') }}
	</p>

	{{ Form::label('entries', 'Entries:') }}

	<ul>	 
		<p>
		{{ Form::label('entry_name', 'Entry Name:') }}
		{{ Form::text('entry_name') }}
		</p>

		{{ Form::label('items', 'Items:') }}

		<ul>	 
			<p>
			{{ Form::label('item_name', 'Item Name:') }}
			{{ Form::text('item_name') }}
			</p>

			<p>
			{{ Form::label('item_description', 'Description:') }}
			{{ Form::text('item_description') }}
			</p>

		</ul>


	</ul>

	
	<p>{{ Form::submit($submit_text) }}</p>
	
</ul>