<?php

namespace App\Http\Controllers;

use App\Applicants;
use Illuminate\Support\MessageBag;
use App\Http\Requests\UpdateApplicantsRequest;
use App\Http\Requests;
use App\Http\Requests\CreateApplicantsRequest;

class ApplyController extends Controller
{
   


	public function index()
	{
		return view('apply.apply');
	}

	public function store(CreateApplicantsRequest $request)
	{
		
		// $applicant = $request->all();
		// Applicants::create($applicant);
		// return redirect('apply/thankyou');

		$applicant = new Applicants(array(
				'fullname'	=>	$request->get('fullname'),
				'position'	=>	$request->get('position'),
				'email'		=>	$request->get('email'),
				'contact'	=>	$request->get('contact'),
				'location'	=>	$request->get('location'),
				'skills'	=>	$request->get('skills')
			));

		$applicant->save();

		$fileupload = $applicant->id . '.' . $request->file('file')->getClientOriginalExtension();
		$request->file('file')->move(base_path() . '/public/uploads', $fileupload);

		return redirect('apply/thankyou');

	}

    public function update($id, UpdateApplicantsRequest $request) {
    $appUpdate = $request->all();
    $applicant = Applicants::find($id);
    $applicant->update($appUpdate);
    return redirect('admin');
    }

	public function destroy($id) {
		Applicants::find($id)->delete();
		return redirect('admin');
	}

	public function show()
	{
		return view('apply.thankyou');
	}

}
