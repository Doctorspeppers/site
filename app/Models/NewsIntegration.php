<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsIntegration extends Model
{
    use HasFactory;

    public $fillable = [
        'aggregator',
        'url',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
