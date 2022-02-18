<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserAppointmentDetails;
use Spatie\QueryBuilder\QueryBuilder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $result = QueryBuilder::for(UserAppointmentDetails::class)
        -> allowedFilters(['appointmentStart','name'])
        -> get();

    return $result;
});

