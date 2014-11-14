

<ul>
	<p>
		{{ Form::label('mustdo_name', 'Name:') }}
		{{ Form::text('mustdo_name') }}
	</p>

	{{ Form::label('cover', 'Cover:') }} {{ Form::file('image') }}

	</br>
	{{ Form::label('entries', 'Entries:') }}

	<ul>
		<?php $numberOfEntries = 3; ?>
		@for ($i = 0; $i < $numberOfEntries; $i++)
    		<p>
			{{ Form::label('entry_name', 'Entry Name:') }}
			{{ Form::text('entry_name[]') }}
			</p>
			{{ Form::label('items', 'Items:') }}
			<ul>
					<li>	 
						<p>
						{{ Form::label('item_name', 'Item Name:') }}
						<?php echo '<input name="item_name['.$i.'][]" type="text">'?>
						
						</p>

						<p>
						{{ Form::label('item_description', 'Description:') }}
						<?php echo '<input name="item_description['.$i.'][]" type="text">'?>
						</p>
					</li>
				<!-- <div><input type="text" name="mytext[]"></div> -->
				
			    <?php echo '<div class="input_fields_wrap_'.$i.'">'?>
				</div>
				<?php echo '<button class="add_field_button_'.$i.'">+ Item</button>'?>
			</ul>
			</br>		
		@endfor	 
		
	</ul>
	
	<!--
	<div class="entry_input_fields_wrap">
	</div>
	<button class="entry_add_field_button">+ Entry</button>
	</ul> -->

	</br>
	</br>
	</br>
	<p>{{ Form::submit($submit_text,['class'=>'btn btn-info']) }}</p>
	
</ul>