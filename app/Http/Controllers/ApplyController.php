<?php

namespace App\Http\Controllers;

use App\Applicants;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateApplicantsRequest;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
   


	public function index()
	{
		return view('apply.apply');
	}

	public function store(CreateApplicantsRequest $request)
	{
		
		$applicant = $request->all();
		Applicants::create($applicant);
		return redirect('apply/thankyou');
	}

	public function show()
	{
		return view('apply.thankyou');
	}


}
