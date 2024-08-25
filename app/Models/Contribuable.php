<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'maison',
        'commune_id'
    ];

    public function categorieRecettes():BelongsToMany
    {
        return $this->belongsToMany(CategorieRecette::class);
    }

    public function natureRecettes():BelongsToMany
    {
        return $this->belongsToMany(NatureRecetteCommunale::class, 'contribuable_nature_recettes');
    }
    public function paiements():BelongsToMany
    {
        return $this->belongsToMany(NatureRecetteCommunale::class, 'paiements');
    }
    public function communes():BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }
    public function montantContribuable():HasMany
    {
        return $this->hasMany(ContribuableNatureRecette::class);
    }
}
