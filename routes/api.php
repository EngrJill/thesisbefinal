<?php

use App\Models\UserDetails;
use App\Models\UserAppointmentDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['IPCheck']], function () {

    Route::get('/user_details', function() {
        return UserDetails::all();
    });

    Route::post('/user_details', function() {

        request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required',
            'appointmentStart' => 'required',
            'appointmentEnd' => 'required',
            'placeAppointment' => 'required',
            'purposeAppointment' => 'required'
        ]);

        return UserDetails::create([
            'name' => request('name'),
            'address' => request('address'),
            'phoneNumber' => request('phoneNumber'),
            'email' => request('email'),
            'appointmentStart' => request('appointmentStart'),
            'appointmentEnd' => request('appointmentEnd'),
            'placeAppointment' => request('placeAppointment'),
            'purposeAppointment' => request('purposeAppointment')
        ]);
    });

    Route::get('/');

    Route::get('/user_appointment_details', function() {
        return UserAppointmentDetails::all();
    });

    Route::get('/user/{appointmentStart}', function (Request $appointmentStart, $id) {
        return 'User '.$id;
    });

    Route::post('/user_appointment_details', function() {

        request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required',
            'appointmentStart' => 'required',
            'appointmentEnd' => 'required',
            'placeAppointment' => 'required',
            'purposeAppointment' => 'required',
            'qrCode' => 'required'
        ]);

        return UserAppointmentDetails::create([
            'name' => request('name'),
            'address' => request('address'),
            'phoneNumber' => request('phoneNumber'),
            'email' => request('email'),
            'appointmentStart' => request('appointmentStart'),
            'appointmentEnd' => request('appointmentEnd'),
            'placeAppointment' => request('placeAppointment'),
            'purposeAppointment' => request('purposeAppointment'),
            'qrCode' => request('qrCode')
        ]);
    });
});