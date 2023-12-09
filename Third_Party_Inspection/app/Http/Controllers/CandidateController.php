<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
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
            'field1' => 'required',
            'field2' => 'required',
            'field3' => 'required',
            'field4' => 'required',
            'field5' => 'required',
            'field6' => 'required',
            'field7' => 'required',
            'field8' => 'required',
            'field9' => 'required',
            'field10' => 'required',
            'field11' => 'required',
            'field12' => 'required',
            'field13' => 'required',
            'field14' => 'required',
            'field15' => 'required',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Candidate::find($id);
        return view("admin.Candidate-Edit", compact("row"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            'field3' => 'required',
            'field4' => 'required',
            'field5' => 'required',
            'field6' => 'required',
            'field7' => 'required',
            'field8' => 'required',
            'field9' => 'required',
            'field10' => 'required',
            'field11' => 'required',
            'field12' => 'required',
            'field13' => 'required',
            'field14' => 'required',
            'field15' => 'required',
        ]);

        $record = Candidate::find($id);

        if ($request->hasFile("profile_img")) {
            if (File::exists(public_path('asssets/img/profile-img/' . $record->profile_img))) {
                File::delete(public_path('asssets/img/profile-img/' . $record->profile_img));
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
        $record->delete();
        return redirect()->route("candidate")->with("success", "Candidate delete successfully");
    }
}
