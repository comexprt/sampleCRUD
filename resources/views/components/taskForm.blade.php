{!! Form::open(['route' => 'note.store', 'method' => 'STORE']) !!}
	{{ Form::label('name', 'Note Name', ['class'=>'control-label']) }}

	{{ Form::text('name', null, ['class'=>'form-control form-control-lg', 'placeholder' => 'Note Name']) }}

	{{ Form::label('description', 'Note Description', ['class'=>'control-label  mt-3']) }}

	{{ Form::textarea('description', null, ['class'=>'form-control', 'placeholder' => 'Note Description']) }}

	{{ Form::label('due_date', 'Due Date', ['class'=>'control-label  mt-3']) }}
	{{ Form::date('due_date', \Carbon\Carbon::now(),['class'=>'form-control']) }}


	<div class="row justify-content-center mt-3">
		<div class="col-sm-6">
			<button class="btn btn-block btn-success" type="submit">Create Note</button>
		</div>
	</div>
{!! Form::close() !!}