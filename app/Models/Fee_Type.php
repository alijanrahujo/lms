<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee_Type extends Model
{
    use HasFactory;

    protected $table="fees_types";

     protected $fillable = ['fee_type','note','scl_id'];

}
