<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PieceJustificative extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'nature_recette_communale_id'
    ];


    public function natureRecetteCommunale():BelongsTo
    {
        return $this->belongsTo(NatureRecetteCommunale::class);
    }
}
