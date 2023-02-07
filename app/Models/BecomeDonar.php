<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BecomeDonar extends Model
{
    use HasFactory;
    protected $fillable=['donar_name','mobile','age','location','blood_group','gender','donar_email','image'];
}
