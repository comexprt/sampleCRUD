@extends('layouts.main')

@section('title','Create Note')


@section('content')

	<div class="row">
		<div class="col-sm-12">
			<h1> Create Task</h1>

			@component('components.taskForm'){}
			@endcomponent
		
		</div>
	</div>

@endsection