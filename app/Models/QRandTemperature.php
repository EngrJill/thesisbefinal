<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRandTemperature extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'QRandTemp',
        'QROnly',
        'TempOnly'
    ];
}
