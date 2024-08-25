<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SousCategorieRecette extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'montant_encaisse',
        'montant_recouvre',
        'taux_recouvrement',
        'categorie_recette_id'
    ];

    public function categorieRecette():BelongsTo
    {
        return $this->belongsTo(CategorieRecette::class);
    }

    public function natureRecettes():HasMany
    {
        return $this->hasMany(NatureRecetteCommunale::class);
    }
}
