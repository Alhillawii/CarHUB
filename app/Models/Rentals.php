<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rentals extends Model
{
    use HasFactory , SoftDeletes;

    public function car()  {
        return $this->belongsTo(Car::class);
    }

    public function user()  {
        return $this->belongsTo(User::class);
    }

    public $guarded = [];

}
//---------------------------------------soft delete----------------------------------//
class Rental extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}