<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

     protected $fillable = ['student_id','class_id','section_id','fee_type','fee_month','date','amount',
     'paument_status','scl_id'];
}
