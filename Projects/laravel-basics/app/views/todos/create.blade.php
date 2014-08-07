@extends('layouts.main')
@section('content')
	
	{{ Form::open( array('route' => 'todos.store') )}}
		 @include('todos.partials._form')
	{{ Form::close() }}
	<p>{{ link_to_route('todos.index', 'Back', null, ['class'=>'button tiny']) }}</p>

@stop