<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelRecord extends Model
{
    protected $fillable = ['pavadinimas', 'kodas', 'uzpiltas_kuro_kiekis', 'data'];
    use HasFactory;
}
