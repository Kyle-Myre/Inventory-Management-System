<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id' , 'date'];
    final public function customer() : BelongsTo {
        return $this->BelongsTo(Customer::class);
    }
    final public function transaction() : BelongsToMany {
        return $this->belongsToMany(Transaction::class);
    }
}
