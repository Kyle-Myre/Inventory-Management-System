<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['product_id' , 'quantity' , 'type'];

    final public function product() : HasOne  {
        return $this->hasOne(Product::class);
    }
    final public function order() : BelongsToMany {
        return $this->belongsToMany(Order::class);
    }
}
