<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenements';
    protected $fillable = ['nom','type','categorie','image','date'];
}

