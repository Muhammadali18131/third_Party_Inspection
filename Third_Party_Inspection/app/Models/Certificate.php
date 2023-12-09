<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $guarded = [];
    static public function UploadCertificate($request)
    {
        $filename = "";

        if ($request->hasFile("certificate")) {
            $filename = time() . "." . $request->certificate->extension();
            $request->certificate->move(public_path("/assets/certificates"), $filename);
        }

        return $filename;
    }
}
