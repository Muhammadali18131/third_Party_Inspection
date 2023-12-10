<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    static function CertificateWithCandidate($id)
    {
        $record = DB::table("candidates as can")
        ->Join("certificates as cer", "cer.candidate_id", "=" ,"can.id")
        ->select("cer.*", "cer.id as certificate_id", "can.*")
        ->where("cer.id", "$id")
        ->get();
        return $record[0];
    }
    static function CertificateByCandidateId($id)
    {
        $record = DB::table("candidates as can")
        ->leftJoin("certificates as cer", "cer.candidate_id", "=" ,"can.id")
        ->select("cer.*", "cer.id as certificate_id", "can.*")
        ->where("can.id", "$id")
        ->get();
        return $record[0];
    }
    static function CertificateWithCandidate_all()
    {
        $record = DB::table("candidates as can")
        ->join("certificates as cer", "cer.candidate_id", "can.id")
        ->select("cer.*", "cer.id as certificate_id", "can.*")
        ->get();
        
        return $record;
    }

    static function CandidateWithCertificate_all()
    {
        $record = DB::table("certificates as cer")
        ->leftJoin("candidates as can", "cer.candidate_id", "can.id")
        ->select("cer.*", "cer.id as certificate_id", "can.*")
        ->get();
        
        return $record;
    }
}
