<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_packgakes_id', 'image'
    ];

    public function travel_package(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
}
