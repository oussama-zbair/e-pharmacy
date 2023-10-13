<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'code',
    ];
    public function commandes(){
        return $this->hasMany(Commande::class);
    }
    public function pharmas() {
        return $this->hasMany(Epharmauth::class)->where('type','=', 'PHARMA');
    }
}
