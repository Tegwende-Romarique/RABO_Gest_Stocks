<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $filliable = ['produi_id','nom_client','contact_client','date_vente','qte'];

    public function produit(){
        return $this->belongsTo('App\Produit');
    }
}
