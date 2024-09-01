<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory , SoftDeletes;

    public function barnd(){
        return $this->belongsTo(Brand::class);
    }

    public function engine(){
        return $this->belongsTo(Engine::class);
    }

    public function transmission(){
        return $this->belongsTo(Transmission::class);
    }

    public function rentals(){
        return $this->hasMany(Rentals::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function images(){
        return $this->hasMany(Car_image::class);
    }

    protected $guarded = [];
}
