<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Annonce;
use App\Programme;

class Categorie extends Model
{
    protected $table = 'categories';
    protected $fillable = ['nom;','description'];
    protected static function boot()
        {
            parent::boot();

            // static::creating(function ($model){
            //     $model->slug = str::slug($model->titre);
            // });
            // static::created(function ($model){
            //     $model->update([
            //         'slug' => str::slug("titre-{$model->titre}-{$model->id}")]);
            // });
        }
    
    public function annonce()
       {
           return $this->hasMany(Annonce::class)->oldestFirst();
       }

    public function programme()
       {
           return $this->hasMany(Programme::class)->oldestFirst();
       }
    public function getRouteKeyName(){
        return 'slug';
    }
}
