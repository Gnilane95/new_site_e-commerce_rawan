<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BijouInox extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bijou()
    {
        return $this->belongsTo(Bijou::class);
    }
}
