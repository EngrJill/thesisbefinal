<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAppointmentDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phoneNumber',
        'email',
        'appointmentStart',
        'appointmentEnd',
        'placeAppointment',
        'purposeAppointment',
        'qrCode'
    ];
}