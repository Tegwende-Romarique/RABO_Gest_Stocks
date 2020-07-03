<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['nom', 'categorie', 'prix_unitaire'];

    public function stocks(){
        return $this->hasOne('App\Stock');
    }

    public function lot(){
        return $this->hasMany('App\Lot');
    }

    public function vente(){
        return $this->hasMany('App\Vente');
    }
}
