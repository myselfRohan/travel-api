<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class Tour extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'travel_id',
        'name',
        'starting_date',
        'ending_date',
        'price'
    ];

    public function setPriceAttribute()
    {
        return $this->price * 100;
    }

    public function getPriceAttribute()
    {
        return $this->price / 100;
    }
}
