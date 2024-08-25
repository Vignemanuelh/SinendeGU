<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'contribuable_id',
        'nature_recette_communale_id',
        'date_paiement',
        'montant'
    ];
}
