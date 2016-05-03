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
		
		$applicant = $request->all();
		Applicants::create($applicant);
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
