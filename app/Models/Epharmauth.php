<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epharmauth extends Model
{

    use HasFactory;

    protected $table = 'epharmauths';
    public $timestamps = true;

    //protected $casts = [
      //  'price' => 'float'
    //];

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'role',
        'pharmacie_id',
    ];
    public function commandes(){
        return $this->hasMany(Commande::class);
    }
    public function pharmacie(){
        return $this->belongsTo(Pharmacie::class);
      }
}
