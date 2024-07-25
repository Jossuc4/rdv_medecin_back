<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrimodel extends Model
{
    use HasFactory;

    protected $table = 'matrimoniale';
    public $timestamps = false;

    protected $fillable = [
        "situation"
    ];
}
