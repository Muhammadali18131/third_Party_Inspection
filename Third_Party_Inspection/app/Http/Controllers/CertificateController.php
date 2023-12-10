<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Certificate::all();
        return view("admin.Certificate", compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Certificate-Create");
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
        ]);
        $filename = Certificate::UploadCertificate($request);
        $data['certificate'] = $filename;

        Certificate::create($data);
        return redirect()->route("certificate-create")->with("success", "certificate added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Certificate::find($id);
        return view("admin.Certificate-Edit", compact("row"));
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
        ]);

        $record = Certificate::find($id);

        if ($request->hasFile("certificate")) {
            if (File::exists(public_path('assets/certificates/' . $record->certificate))) {
                File::delete(public_path('assets/certificates/' . $record->certificate));
            }
            $filename = Certificate::UploadCertificate($request);
            $data['certificate'] = $filename;
        }

        $record->update($data);
        return redirect()->back()->with("success", "Certificate update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $row = Certificate::find($id);
        return view("admin.Certificate-Delete", compact("row"));
    }
    public function destroy(string $id)
    {
        $record = Certificate::find($id);
        if (File::exists(public_path('assets/certificates/' . $record->certificate))) {
            File::delete(public_path('assets/certificates/' . $record->certificate));
        }
        $record->delete();
        return redirect()->route("certificate")->with("success", "Certificate delete successfully");
    }
}
