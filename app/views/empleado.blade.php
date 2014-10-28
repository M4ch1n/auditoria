@extends('layout')

@section('content')
	@foreach($questions as $question)
    	<p>{{ $question->question }}</p>
    @endforeach
@stop