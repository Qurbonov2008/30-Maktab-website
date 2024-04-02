<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign_up extends Model
{
    use HasFactory;
    protected $fillable = ['name','class','email','subject'];
}
