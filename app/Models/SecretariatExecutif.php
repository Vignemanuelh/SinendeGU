<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SecretariatExecutif extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'titre',
        'email',
        'telephone',
        'npi'
    ];

    public function agentCollecteurs():HasMany
    {
        return $this->hasMany(AgentCollecteur::class);
    }

    public function transmissions():HasMany
    {
        return $this->hasMany(Transmettre::class);
    }

    public function services():HasMany
    {
        return $this->hasMany(Service::class);
    }
}
