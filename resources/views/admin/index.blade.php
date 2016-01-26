@extends('layout.layout')

@section('content')

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			
			<th>Full Name</th>
			<th>Position</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Location</th>
			<th>Years of Experience</th>
			<th>Skills</th>
			<th colspan="3">Actions</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($applicants as $applicant)
			<tr>
	
		<td>{{ $applicant->fullname }}</td>
		<td>{{ $applicant->position }}</td>
		<td>{{ $applicant->email }}</td>
		<td>{{ $applicant->contact }}</td>
		<td>{{ $applicant->location }}</td>
		<td>{{ $applicant->exp }}</td>
		<td>{{ $applicant->skills }}</td>
		<td> <a href="{{url('admin/show', $applicant->id)}}" class="btn btn-primary">View More</a> </td>	
		<td> <a href="{{url('admin/edit', $applicant->id)}}" class="btn btn-warning">Edit Applicant</a> </td>	
		
		<td>
{{-- 
		{!! Form::open(['method' => 'DELETE', 'route'=>['admin.destroy', $applicant->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
              --}}
				 <form action="/admin/{{ $applicant->id }}" method="POST">
			            {{ csrf_field() }}
			            {{ method_field('DELETE') }}

			            <button class="btn btn-danger">Delete</button>
			        </form>
             </td>



			</tr>

		@endforeach
	</tbody>
</table>

@endsection