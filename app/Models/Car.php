<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;

    //MassAssigment
    //protected $guarded = [];
    protected $fillable = ['marque', 'model', 'year', 'km', 'prix', 'picture', 'description' ];

    //Relation One to Many
    public function vendeur(){
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }
}
