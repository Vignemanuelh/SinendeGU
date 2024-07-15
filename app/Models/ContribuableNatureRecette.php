<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ContribuableNatureRecette extends Model
{
    use HasFactory;

    protected $fillable = [
        'contribuable_id',
        'nature_recette_communale_id'
    ];


}
