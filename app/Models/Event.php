<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events'; 
    protected $primaryKey = 'id_event'; 
    public $fillable=['id_event', 'name', 'description', 'date', 'location'];
    //use HasFactory;
}
