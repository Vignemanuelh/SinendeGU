<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contribuable extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'npi',
        'email',
        'telephone',
        'activite',
        'arrondissement',
        'quartier',
        'maison'
    ];

    public function categorieRecettes():BelongsToMany
    {
        return $this->belongsToMany(CategorieRecette::class);
    }

    public function natureRecettes():BelongsToMany
    {
        return $this->belongsToMany(NatureRecetteCommunale::class);
    }

    public function natureRecetteCommunales():HasMany
    {
        return $this->hasMany(NatureRecetteCommunale::class);
    }

    public function services():HasMany
    {
        return $this->hasMany(Service::class);
    }
}
