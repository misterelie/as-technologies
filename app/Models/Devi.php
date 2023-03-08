<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devi extends Model
{
    use HasFactory;
    protected $table = "devis";
    protected $guarded = [];


    public function service()
    {
      return $this->belongsTo(Service::class);
    }

    public function specificite()
    {
      return $this->belongsTo(Specificite::class);
    }
}
