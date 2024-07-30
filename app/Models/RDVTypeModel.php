<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDVTypeModel extends Model
{
    use HasFactory;

    protected $table = "rdvtype";
    protected $primaryKey = "id_rdv_type";
    public $timestamps = false;

    protected $fillable = ["type_rdv"];
}
