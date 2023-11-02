<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads'; // Specify the table name if it's different
    protected $fillable = ['anfrage', 'gewerk', 'unterstuetzen'];
}
