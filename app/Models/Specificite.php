<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specificite extends Model
{
    use HasFactory;
    protected $table = "specificites";
    public $incrementing = true;
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class, "service_id");
    }

    public function devis()
    {
        return $this->belongsTo(Devi::class);
    }
}
