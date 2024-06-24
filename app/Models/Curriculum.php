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

    public $table = 'curriculums';

    protected $fillable = [
        'subtitle',
        'resume',
        'skills',
    ];

    protected function casts(): array
    {
        return [
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

    public function create(array $attributes = [])
    {
        $model = $this->fill($attributes);
        if(isset($attributes['user_id'])){
            $model->user_id = $attributes['user_id'];

            return $model;
        }

        $model->user_id = auth()->user()->id;

        return $model;
    }
}
