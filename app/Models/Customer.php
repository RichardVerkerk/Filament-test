<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname', 'address_line_1', 'address_line_2', 'postalcode', 'city', 'country', 'telephone_1', 'telephone_2'
    ];


    public function getNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }
}
