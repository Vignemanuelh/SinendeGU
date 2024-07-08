<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transmettre extends Model
{
    use HasFactory;

    protected $fillable = [
        'secretariat_executif_id',
        'piece_justificative_id',
        'date_transmission'
    ];

    public function secretariatExecutif():BelongsTo
    {
        return $this->belongsTo(SecretariatExecutif::class);
    }

    public function pieceJustificative():BelongsTo
    {
        return $this->belongsTo(PieceJustificative::class);
    }
}
