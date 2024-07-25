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
    public $timestamps = false;

    protected $fillable = [
        "nom_patient",
        "prenom_patient",
        "sexe_patient",
        "adresse",
        "phone",
        "mail",
        "date_naissance",
        "situation",
        "groupe_sang",
        "antecedent",
        "deces"
    ];
}
