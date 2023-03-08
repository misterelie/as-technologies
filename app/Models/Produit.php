<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = "produits";
    protected $guarded = [];

    public function categorie()
    {
       return $this->belongsTo(Categorie::class, "categorie_id");
    }
    public function marque()
    {
       return $this->belongsTo(Marque::class, "marque_id");
    }
}

