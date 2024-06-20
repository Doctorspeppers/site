<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;

    public function project(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function item(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function curriculum() : BelongsTo {
        return $this->belongsTo(curriculum::class);
    }
}
