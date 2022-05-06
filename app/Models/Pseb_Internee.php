<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pseb_Internee extends Model
{
    use HasFactory;

    protected $table="pseb__internees";
    protected $fillable=['name','designation','joining_date','emp_id','shift','status'];
}
