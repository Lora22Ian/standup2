<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSponsor extends Model
{
    protected $table = 'partnerSponsors';   

    protected $primaryKey = 'id_sp';   

    public $fillable=['id_sp', 'name', 'email', 'phone'];   
}
