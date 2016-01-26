<?php

namespace App\Http\Controllers;

use App\Applicants;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
    //

    public function index()
    {
    	$applicants = Applicants::all();
    	return view('admin.index', compact('applicants'));
    }

	public function apply()
	{
		return view('apply.apply');
	}

	public function store()
	{
		$applicant = $request->all();
		Applicants::create($applicant);
		return redirect('apply.thankyou');
	}

	public function thankyou()
	{
		return view('apply.thankyou');
	}

	public function edit($id)
	{

	}

	public function update($id)
	{

	}

	public function destroy($id)
	{

	}

}
