<?php

namespace App\Models;

use App\Models\Avi;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enfant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function avis()
    {
        return $this->hasMany(Avi::class);
    }
}
