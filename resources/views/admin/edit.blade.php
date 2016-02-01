@extends('layout.layout')


@section('content')
<h1>Update Applicant</h1>
	{!! Form::model($applicant, ['method' => 'PUT', 'route' =>['apply.update', $applicant->id]]) !!}

		<div class="form-group">
			{!! Form::label('fullname', 'Full Name:') !!}
			{!! Form::text('fullname',null, ['class' => 'form-control', 'placeholder' => 'Your Full Name']) !!}
			
		</div>
		<div class="form-group">
			{!! Form::label('position', 'Position:') !!}
			{!! Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Position']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Email Address:') !!}
			{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Your email']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('contact', 'Contact Number:') !!}
			{!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Contact Number']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('location', 'Address:') !!}
			{!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Full Address']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('exp', 'Years of Experience:') !!}
			{!! Form::select('exp', ['less than a year' => 'less than a year','1 year' => '1 year', '2 years' => '2 years', '3 years' => '3 years', '4 years above' => '4 years above'], null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('skills', 'Skills:') !!}
			{!! Form::text('skills', null, ['class' => 'form-control', 'placeholder' => 'Your Skills']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('file', 'Attach Resume') !!}
			{!! Form::file('file', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			
			{!! Form::submit('Apply', ['class' => 'form-control btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}


@endsection