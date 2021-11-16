<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = ['student_name','father_name','garien_name','mother_name','dob','class_name','section','mobile','pic','roll_nbr','status','scl_id'];
}
