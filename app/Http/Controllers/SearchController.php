<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search() {

        // Sets the parameters from the get request to the variables.
        $date = Request::get('appointmentStart');

        // Perform the query using Query Builder
        $result = DB::table('user_appointment_details')
            ->select(DB::raw("*"))
            ->where('name', '=', substr($date,0,10))
            ->get();

        return $result;
    }
}
