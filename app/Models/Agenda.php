<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model 

{ 

    protected $table = 'agendas'; 
    protected $primaryKey = 'id_agenda'; 
    protected $fillable = ['id_agenda', 'start', 'finish', 'date', 'id_event', 'id_comediant']; 
    public function event() 

    { 

        return $this->belongsTo(Event::class, 'id_event', 'id_event'); 

    } 

    public function comediant() 

    { 

        return $this->belongsTo(Comediant::class, 'id_comediant', 'id_comediant'); 

    } 

} 