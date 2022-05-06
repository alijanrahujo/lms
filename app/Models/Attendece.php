<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendece extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = ['emp_id','date','day','time_in','time_out',
    'late_arrival','early_left','shift','remarks','scl_id','status'];
}
