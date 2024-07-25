<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialiteModel extends Model
{
    use HasFactory;

    protected $table = 'specialite';
    protected $primaryKey = 'id_spec';
    public $timestamps = false;

    protected $fillable = [
        'nom_spec'
    ];
}
