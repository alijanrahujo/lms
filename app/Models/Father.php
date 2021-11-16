<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    use HasFactory;
    public $timestamps=false;

     protected $fillable = ['parent_name','address','mobile','pic','scl_id'];
}
