<?php

namespace App\Models;

use App\Casts\Dates;
use App\Casts\Links;
use App\Casts\Skills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'dates',
        'links',
        'skills',
        'text',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'skills' => Skills::class,
            'links' => Links::class,
            'dates' => Dates::class,
        ];
    }

    public static function create(array $attributes = [])
    {
        if(isset($attributes['created_by'])){
            $model = static::query()->create($attributes);

            return $model;
        }

        $attributes['created_by'] = auth()->user()->id;
        $model = static::query()->create($attributes);

        return $model;
    }

    public function getformatedDatesAttribute(): string{
        return (isset($this->dates['init']) ? $this->dates['init']->format($this->dates['format']) : '') . ' - ' . (isset($this->dates['end']) ? $this->dates['end']->format($this->dates['format']) : '');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
