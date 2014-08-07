@extends('layouts.main')
@section('content')

	<h2>All Todo Lists</h2>
		@foreach ($todo_lists as $list) 
			<h4>{{ link_to_route('todos.show', $list->name, [$list->id]) }}</h4>
			<ul class="no-bullet button-group">
				<li>
					{{ link_to_route('todos.edit', 'Edit', [$list->id], ['class'=>'button tiny']) }}
				</li>
				<li>
					{{ Form::model($list, [ 'route' => ['todos.destroy', $list->id], 'method' => 'delete' ]) }}
						{{ Form::button('Delete', ['type' => 'submit', 'class'=>'button tiny alert']) }}
					{{ Form::close() }}
				</li>
			</ul>
		@endforeach
		{{ link_to_route('todos.create', 'Create New List', null, ['class'=>'success button']) }}
	
@stop