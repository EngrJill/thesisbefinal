<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QRandTemperature;

class ProgramController extends Controller
{
    function updateById(Request $req) {
        $accessId = QRandTemperature::find($req->id);
        $accessId->QRandTemp=$req->QRandTemp;
        $accessId->QROnly=$req->QROnly;
        $accessId->TempOnly=$req->TempOnly;
        $result = $accessId-> save();

        if ($result) {
            return ["result" => "Data has been updated"];
        }

        else {
            return ["result" => "Data has not been updated"];
        };
    }
}
