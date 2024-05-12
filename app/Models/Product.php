<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;
    protected $fillable = ['category_id' , 'provider_id' , 'picture' , 'name' , 'description' , 'quantity'];

    final public function category() : BelongsTo  {
        return $this->belongsTo(Category::class);
    }

    final public function transaction() : BelongsTo  {
        return $this->BelongsTo(Transaction::class);
    }

    final public function provider() : BelongsTo {
        return $this->belongsTo(Provider::class);
    }
}
