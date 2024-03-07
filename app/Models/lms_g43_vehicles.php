<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lms_g43_vehicles extends Model
{
    protected $table = 'lms_g43_vehicles';

    protected $fillable = ['type', 'model', 'license_plate', 'capacity'];
}

