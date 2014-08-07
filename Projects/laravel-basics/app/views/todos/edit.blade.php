@extends('layouts.main')
@section('content')
	
	{{ Form::model($list, array('route' => ['todos.update', $list->id], 'method' => 'PUT') )}}
		 @include('todos.partials._form')
	{{ Form::close() }}
	<p>{{ link_to_route('todos.index', 'Back', null, ['class'=>'button tiny']) }}</p>

@stop