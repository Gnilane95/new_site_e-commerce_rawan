<?php

namespace App\Models;

use App\Models\User;
use App\Models\Femme;
use App\Models\Enfant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bijou()
    {
        return $this->belongsTo(Bijou::class);
    }

    public function femme()
    {
        return $this->belongsTo(Femme::class);
    }

    public function homme()
    {
        return $this->belongsTo(Homme::class);
    }

    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
}
