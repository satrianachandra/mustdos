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
				<li>	 
					<p>
					{{ Form::label('item_name', 'Item Name:') }}
					{{ Form::text('item_name[]') }}
					</p>

					<p>
					{{ Form::label('item_description', 'Description:') }}
					{{ Form::text('item_description[]') }}
					</p>
				</li>
			<!-- <div><input type="text" name="mytext[]"></div> -->
			
		    <div class="input_fields_wrap">
			</div>
			<button class="add_field_button">+ Item</button>
		</ul>
	</ul>

	
	</br>
	</br>
	<p>{{ Form::submit($submit_text) }}</p>
	
</ul>