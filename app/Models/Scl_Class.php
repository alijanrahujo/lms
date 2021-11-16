<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scl_Class extends Model
{
    use HasFactory;
     public $timestamps=false;

     protected $fillable = ['class_name','scl_id'];
}
