<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = ['inst_name','address','city','phone','mobile','cell','email','membership','logo','owner_name','designation','status'];
}
