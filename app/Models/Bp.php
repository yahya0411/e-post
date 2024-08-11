<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bp extends Model
{
    use HasFactory;


    protected $fillable = [
        'Denomination',
        'Classe',
        'Ccp',
        'Code Comptable',
        'Code Postal',
        'Telephone',
        'Id Terminal',
        'Id Marchant',
        'Lan',
        'Wan',
        'Loopback0',
        'Loopback1',
    ];
}
