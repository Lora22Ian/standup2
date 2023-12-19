<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets'; 
    protected $primaryKey = 'id'; 
    public $fillable = ['id','name', 'photo','price', 'type']; 
}

