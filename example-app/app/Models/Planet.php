<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Planet extends Model
{
    protected $fillable = ['name', 'description', 'size_in_km', 'solar_system_id'];

    public function solarSystem(): BelongsTo
    {
        return $this->belongsTo(SolarSystem::class);
    }
}