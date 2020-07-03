<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['qte','Produit_id'];

    public function produit(){
        return $this->hasMany('App\Produit');
    }
}
