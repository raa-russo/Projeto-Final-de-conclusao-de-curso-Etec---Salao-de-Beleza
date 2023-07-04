<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'start_date', 'end_date', 'description'];

    // Defina outros atributos, relações e métodos, se necessário
}
