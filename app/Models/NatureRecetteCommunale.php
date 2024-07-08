<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NatureRecetteCommunale extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'nom',
        'tarif',
        'montant_encaisse',
        'montant_recouvre',
        'taux_recouvrement',
        'preuve',
        'fichiers',
//        'service_id',
//        'contribuable_id',
//        'categorie_recette_id',
        'sous_categorie_recette_id'
    ];

    public function sousCategorieRecette():BelongsTo
    {
        return $this->belongsTo(SousCategorieRecette::class);
    }

    public function contribuables():BelongsToMany
    {
        return $this->belongsToMany(Contribuable::class);
    }

    public function service():BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function contribuable():BelongsTo
    {
        return $this->belongsTo(Contribuable::class);
    }

    public function recouvrements():HasMany
    {
        return $this->hasMany(Recouvrir::class);
    }
}
