<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_compte',
        'departement',
        'nom',
        'statut',
        'superficie',
        'population'
    ];

    public function contribuables():HasMany
    {
        return $this->hasMany(Contribuable::class);
    }
}
