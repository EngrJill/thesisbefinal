<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entries extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'QRentries',
        'TempEntries'
        
    ];
}
