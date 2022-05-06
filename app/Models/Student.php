<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scl_Class;
use App\Models\Section;



class Student extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = ['student_name','father_name','garien_name','mother_name','dob','scl_class_id','section_id','mobile','pic','roll_nbr','monthly_fee','status','scl_id'];

    public function scl_class()
    {
    	return $this->belongsTO(Scl_Class::class);
    }

    public function section()
    {
    	return $this->belongsTO(Section::class);
    }
}
