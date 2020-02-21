<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produit;

class Type_produit extends Model
{
    public $timestamps = false;

     public function Produit()
    {
    	return $this->hasMany('App\Produit');
    }
}
