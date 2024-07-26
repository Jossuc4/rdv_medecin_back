<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedecinModel extends Model
{
    use HasFactory;

    /**
     * nom de la table associé | id du medecin
     * @var string 
     * @var string
     */

    protected $table = 'medecin';
    protected $primaryKey = 'id_medecin';
    public $timestamps = false;

    protected $fillable = [
        'id_medecin',
        'nom_medecin',
        'contact_medecin',
        'idspec',
        'mdp'
    ];
}
