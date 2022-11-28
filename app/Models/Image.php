<?php

namespace App\Models;

use App\Models\Bijou;
use App\Models\Femme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
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
}
