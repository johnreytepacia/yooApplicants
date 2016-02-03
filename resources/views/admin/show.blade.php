@extends('layout.layout')


@section('content')

	
	<h1>{!! $applicant->fullname !!}</h1>
	<p>{!! $applicant->position !!}</p>
	<p>{!! $applicant->email !!}</p>
	<p>{!! $applicant->contact !!}</p>
	<p>{!! $applicant->location !!}</p>
	<p>{!! $applicant->skills !!}</p>
	<p>{!! $applicant->exp !!}</p>
	
	<a href="{{url('admin')}}" class="btn btn-primary"> Back</a>

@endsection

