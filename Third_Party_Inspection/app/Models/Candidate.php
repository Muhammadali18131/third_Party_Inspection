<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $guarded = [];

   static public function UploadImg($request)
    {
        $filename = "";

        if ($request->hasFile("profile_img")) {
            $filename = time() . "." . $request->profile_img->extension();
            $request->profile_img->move(public_path("/assets/img/profile-img"), $filename);
        }

        return $filename;
    }
}
