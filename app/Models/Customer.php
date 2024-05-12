<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['first_name' , 'last_name' , 'address' , 'email' , 'phone'];

    final public function order() : HasMany {
        return $this->hasMany(Order::class);
    }
}
