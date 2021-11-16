<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

     public $timestamps=false;

      protected $fillable = ['teacher_name','education','gender','dob','address','email','mobile','pic','emp_id','status','scl_id'];
}
