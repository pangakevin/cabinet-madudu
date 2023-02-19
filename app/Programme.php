<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $table = 'programmes';
    protected $fillable = ['titre','contenus','image','categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
}
