<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Candidate::all();
        return view("admin.Candidate", compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Candidate-Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'iqama' => 'required',
            'summary' => 'required',
        ]);
        $filename = Candidate::UploadImg($request);
        $data['profile_img'] = $filename;

        Candidate::create($data);
        return redirect()->route("candidate-create")->with("success", "Candidate added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $row = Candidate::findOrFail($id);
        return view("admin.CandidateInspection", compact("row"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Certificate::CertificateByCandidateId($id);
        return view("admin.Candidate-Edit", compact("row"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'iqama' => 'required',
            'summary' => 'required',
        ]);

        $record = Candidate::find($id);

        if ($request->hasFile("profile_img")) {
            if (File::exists(public_path('assets/img/profile-img/' . $record->profile_img))) {
                File::delete(public_path('assets/img/profile-img/' . $record->profile_img));
            }
            $filename = Candidate::UploadImg($request);
            $data['profile_img'] = $filename;
        }

        $record->update($data);
        return redirect()->back()->with("success", "Candidate update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $row = Candidate::find($id);
        return view("admin.Candidate-Delete", compact("row"));
    }
    public function destroy(string $id)
    {
        $record = Candidate::find($id);
        if (File::exists(public_path('assets/img/profile-img/' . $record->profile_img))) {
            File::delete(public_path('assets/img/profile-img/' . $record->profile_img));
        }
        $record->delete();
        return redirect()->route("candidate")->with("success", "Candidate delete successfully");
    }
}
