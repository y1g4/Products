<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = "products";

    protected $fillable = [
        'name',
        'description',
        'small_description',
        'original_price',
        'price',
        'stock',
        'is_active'
    ];

    protected $cast = [
        'start_date' => 'date',
        'end_date' => 'datetime:Y-m-d',
        'is_active' => 'boolean' 
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $appends = [];

    public function getNamePriceAttribute(){
        return $this->name . ' - ' . $this->price; 
    }

// Accesors

public function getNameAttribute(){
    return ucfirst($this->attributes['name']);
}

//Mutators 
public function setNameAttribute($value){
    $this->attributes['name'] = strtoupper($value);
}
}
