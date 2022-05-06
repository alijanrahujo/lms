<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Scl_Class;
use App\Models\Student;




class Section extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = ['section_name','category','teacher_id','scl_class_id','scl_id'];

    public function teacher()
    {
    	return $this->belongsTO(Teacher::class);
    }

    public function scl_class()
    {
    	return $this->belongsTO(Scl_Class::class);
    }

    public function students()
    {
         $this->hasMany(Student::class);
    }
}
