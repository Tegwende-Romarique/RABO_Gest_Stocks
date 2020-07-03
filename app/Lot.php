<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    // protected $filliable = ['libelle'];

    public function produit(){
        return $this->hasOne('App\Produit');
    }
}
