<?php

namespace App\Models;

use App\Casts\Links;
use App\Casts\Skills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'logo',
        'text',
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
}
