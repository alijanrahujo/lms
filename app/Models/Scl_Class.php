<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Section;


class Scl_Class extends Model
{
    use HasFactory;
     public $timestamps=false;

     protected $table="scl_classes";

     protected $fillable = ['class_name','scl_id'];

     public function students()
     {
     	$this->hasMany(Student::class);
     }

     public function subjects()
     {
     	$this->hasMany(Subject::class);
     }

     public function sections()
     {
          $this->hasMany(Section::class);
     }
}
