<?php

namespace App\Http\Controllers;

use App\Applicants;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateApplicantsRequest;

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

	public function store(CreateApplicantsRequest $request)
	{
		

		$applicant = $request->all();
		Applicants::create($applicant);
		return redirect('apply/thankyou');
	}

	public function thankyou()
	{
		return view('apply.thankyou');
	}

	public function show($id)
	{
		$applicant = Applicants::findOrFail($id);
        return view('admin.show', compact('applicant'));
	}

	public function edit($id)
	{
		$applicant = Applicants::find($id);
        return view('admin.edit', compact('applicant'));
	}

	public function update(Request $request, $id)
	{
		$appUpdate = $request->all();
        $applicant = Applicants::find($id);
        $applicant->update($appUpdate);
        return redirect('admin');
	}

	public function destroy($id)
	{
		Applicants::find($id)->delete();
        return redirect('admin');
	}

}
