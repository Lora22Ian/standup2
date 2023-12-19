<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventContact extends Model 

{ 

  protected $table = 'eventContacts'; 

  protected $primaryKey = 'id_rep_cont'; 

  public $fillable=['id_rep_cont', 'id_event', 'id_contact']; 

  public function event()
    {
        return $this->belongsTo(Event::class, 'id_event', 'id_event');
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'id_contact', 'id_contact');
    }
} 
