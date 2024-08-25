<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class CategorieRecette extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'montant_encaisse',
        'montant_recouvre',
        'taux_recouvrement',
        'commune_id'
    ];

    public function contribuables():BelongsToMany
    {
        return $this->belongsToMany(Contribuable::class);
    }

//    public function commune():BelongsTo
//    {
//        return $this->belongsTo(Commune::class);
//    }
    public function sousCategorieRecettes():HasMany
    {
        return $this->hasMany(SousCategorieRecette::class);
    }
    public function natureRecetteCommunales():HasManyThrough
    {
        return $this->through('sousCategorieRecettes')->has('natureRecettes');
    }
}
