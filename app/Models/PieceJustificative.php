<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PieceJustificative extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom'
    ];

    public function transmissions():HasMany
    {
        return $this->hasMany(Transmettre::class);
    }
}
