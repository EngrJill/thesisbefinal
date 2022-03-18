<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRandTemp extends Model
{
    use HasFactory;

    protected $fillable = [
        'QRandTemp',
        'QROnly',
        'TempOnly'
    ];
}