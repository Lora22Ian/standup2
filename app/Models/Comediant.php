<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comediant extends Model
{
    //use HasFactory;
    protected $table = 'comedians'; 
    protected $primaryKey = 'id_comediant'; 
    public $fillable = ['id_comediant','name', 'description']; 
}
