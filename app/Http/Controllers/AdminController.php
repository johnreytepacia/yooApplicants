<?php

namespace App\Http\Controllers;

use App\Applicants;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index() {
        $applicants = Applicants::all();
        return view('admin.index', compact('applicants'));
    }

    public function edit($id) {
        $applicant = Applicants::find($id);
        return view('admin.edit', compact('applicant'));
    }

    public function show($id) {
        $applicant = Applicants::findOrFail($id);
        return view('admin.show', compact('applicant'));
    }
}
