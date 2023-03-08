<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $guarded = [];

    public function devis()
    {
      return $this->hasMany(Devi::class);
    }

    public function specificites(){
      return $this->hasMany(Specificite::class, 'service_id');
  }
}
