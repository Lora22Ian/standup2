<?php 

namespace App\Models; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;  

class SpContact extends Model 
{ 
  protected $table = 'spContacts'; 
  protected $primaryKey = 'id_contact'; 
  public $fillable=['id_contact', 'id_event', 'id_sp'];

  public function event()
    {
        return $this->belongsTo(Event::class, 'id_event', 'id_event');
    }
    public function partnerSponsor()
    {
        return $this->belongsTo(partnerSponsor::class, 'id_sp', 'id_sp');
    }
} 
