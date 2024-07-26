<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDVModel extends Model
{
    use HasFactory;

    protected $table = "rdv";

    protected $fillable = [
        'id_rdv',
        'id_medecin',
        'id_fiche',
        'raison',
        'date_rdv',
        'type_id'
    ];
}
