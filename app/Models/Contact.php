<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable=['id_contact', 'name', 'email', 'phone']; 

    protected $primaryKey = 'id_contact'; 

    protected $table = 'contacts'; 
    //use HasFactory;
    public function eventContacts() 

   { 

       return $this->hasMany('App\EventContact', 'id_rep_cont'); 

   } 
}
