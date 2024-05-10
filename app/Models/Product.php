<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id' , 'name' , 'description' , 'quantity'];

    final public function category() : BelongsTo  {
        return $this->belongsTo(Category::class);
    }
    
    final public function transaction() : BelongsTo  {
        return $this->BelongsTo(Transaction::class);
    }
}
