<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donar_registration extends Model
{
    use HasFactory;
    protected $primaryKey = 'donar_id';
    protected $fillable=['donar_name','mobile','age','location','blood_group','gender','donar_email','image'];

}
