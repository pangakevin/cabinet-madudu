<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    
    protected static function boot()
    {
        parent::boot();

        // static::creating(function ($model){
        //     $model->slug = str::slug($model->titre);
        // });
        static::created(function ($model){
            $model->update([
                'slug' => str::slug("titre-{$model->titre}-{$model->id}")]);
        });
    }



    public function categorie()
    {
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
    public function annonce()
    {
        return $this->belongsTo(Annonce::class,'categorie_id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
