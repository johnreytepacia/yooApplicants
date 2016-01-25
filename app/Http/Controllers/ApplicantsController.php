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

	}

	public function store()
	{

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
