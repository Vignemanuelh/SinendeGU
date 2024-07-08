<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'categorie_recette_id',
        'sous_categorie_recette_id',
        'nature_recette_id',
        'contribuable_id',
        'agent_collecteur_id',
        'secretariat_executif_id'
    ];

    public function categorieRecette():BelongsTo
    {
        return $this->belongsTo(CategorieRecette::class);
    }

    public function sousCategorieRecette():BelongsTo
    {
        return $this->belongsTo(SousCategorieRecette::class);
    }

    public function natureRecette():BelongsTo
    {
        return $this->belongsTo(NatureRecetteCommunale::class);
    }

    public function contribuable():BelongsTo
    {
        return $this->belongsTo(Contribuable::class);
    }

    public function agentCollecteur():BelongsTo
    {
        return $this->belongsTo(AgentCollecteur::class);
    }

    public function secretariatExecutif():BelongsTo
    {
        return $this->belongsTo(SecretariatExecutif::class);
    }
}
