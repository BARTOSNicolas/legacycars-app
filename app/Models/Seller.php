<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    public $timestamps = false;

    //Relation One to Many
    public function voitures(){
        return $this->hasMany(Car::class, 'seller_id', 'id');
    }
}
