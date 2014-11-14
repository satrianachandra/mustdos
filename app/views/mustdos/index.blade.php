@extends('layouts.main')

{{ HTML::style('css/style.css') }}
{{ HTML::style('css/demo.css') }}

@section('main')
	
      

        @foreach( $mustdos as $mustdo )
        <div class='wrapper'>
          <a   href="{{ route('mustdos.show', $mustdo->id) }}" title={{ $mustdo->name }}>
            <img src={{asset($mustdo->imageurl)}} >
            <div class='description'>
              <p class='description_content'>{{ $mustdo->name }}<p>
            </div>
          </a> 
        </div>
        @endforeach

      
      



     




@stop

