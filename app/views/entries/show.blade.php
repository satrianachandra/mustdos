@extends('layouts.main')

@section('main')
	<h2>{{ $mustdo->name }} - {{ $entry->name }}</h2>
	{{ $entry->description }}
@stop