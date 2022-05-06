<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scl_Class;
use App\Models\Teacher;



class Subject extends Model
{
    use HasFactory;
     public $timestamps=false;

    protected $fillable = ['scl_class_id','subject','teacher_id','scl_id'];

    public function scl_class()
    {
    	return $this->belongsTO(Scl_Class::class);
    }

    public function teacher()
    {
    	return $this->belongsTO(Teacher::class);
    }
}
