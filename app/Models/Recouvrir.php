<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recouvrir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nature_recette_id',
        'agent_collecteur_id',
        'date_recouvrement'
    ];

    public function natureRecette():BelongsTo
    {
        return $this->belongsTo(NatureRecetteCommunale::class);
    }

    public function agentCollecteur():BelongsTo
    {
        return $this->belongsTo(AgentCollecteur::class);
    }
}
