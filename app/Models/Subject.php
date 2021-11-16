<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
     public $timestamps=false;

    protected $fillable = ['class_name','subject','teacher','scl_id'];
}
