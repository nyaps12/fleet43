<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lms_g43_drivers extends Model
{
    protected $table = 'lms_g43_drivers';

    protected $fillable = ['firstname', 'lastname', 'mobile', 'license_type', 'license_no', 'status'];

}
