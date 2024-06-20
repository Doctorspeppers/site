<?php

namespace App\Models;

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
        'date',
        'links',
        'skills',
    ];

    protected function casts(): array
    {
        return [
            'skills' => Skills::class,
            'links' => Links::class,
        ];
    }

    public static function create(array $attributes = [])
    {
        $model = static::query()->create($attributes);
        if($attributes['created_by']){
            $model->created_by = $attributes['created_by'];

            return $model;
        }


        $model->created_by = auth()->user()->id;


        return $model;
    }


    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function topic (): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
