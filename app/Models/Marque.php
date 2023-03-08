<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $table = "marques";
    protected $guarded = [];

    public function produit(){
        return $this->hasMany(Produit::class);
    }
}
