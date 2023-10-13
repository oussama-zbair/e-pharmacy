<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'ordonance',
        'adresse',
        'pharmacie_id',
        'epharmauth_id',
        'is_valid',
    ];
    public function user(){
        return $this->belongsTo(Epharmauth::class);
    }
    public function pharmacie(){
        return $this->belongsTo(Pharmacie::class);
    }
}
