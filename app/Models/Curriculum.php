<?php

namespace App\Models;

use App\Casts\Links;
use App\Casts\Skills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtitle',
        'resume',
        'skills',
        'links',
    ];

    protected function casts(): array
    {
        return [
            'skills' => Skills::class,
            'links' => Links::class,
        ];
    }

    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
