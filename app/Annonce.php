<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;
use Illuminate\Support\Str;

class Annonce extends Model
{
    protected $table = 'annonces';
    protected $fillable = ['titre','slug','type','description','image','categorie_id'];
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

    public function getRouteKeyName(){
        return 'slug';
    }


}
