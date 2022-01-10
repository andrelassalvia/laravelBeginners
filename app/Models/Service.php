<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Outra forma de desabilitar a protecao para criacao em massa

    // protected $guarded = [];
}
