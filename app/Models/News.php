<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'abstract',
        'content',
        'date',
        'published_at',
        'more',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function newsIntegration()
    {
        return $this->belongsTo(NewsIntegration::class, 'news_integration_id');
    }
}
