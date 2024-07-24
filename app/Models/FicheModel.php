<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheModel extends Model
{
    use HasFactory;

    /**
     * nom de la table associé
     * clé primaire de la table
     * @var string
     * @var string
     */
    protected $table = 'fiche';
}
