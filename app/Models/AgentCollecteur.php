<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentCollecteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'npi',
        'email',
        'telephone',
        'type',
        'arrondissement',
        'quartier',
        'photo',
        'secretariat_executif_id'
    ];

    public function secretariatExecutif()
    {
        return $this->belongsTo(SecretariatExecutif::class);
    }

    public function recouvrements()
    {
        return $this->hasMany(Recouvrir::class);
    }
}
