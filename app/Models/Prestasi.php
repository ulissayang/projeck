<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestasi extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'prestasi';

    protected $fillable = ['title', 'slug', 'image', 'description', 'date'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'unique' => true,
                'onUpdate' => true,
                'separator' => '-',
                'method' => function ($string, $separator) {
                    $slug = Str::slug($string, $separator);
                    // Append UUID to ensure global uniqueness
                    $slug .= '-' . Str::uuid();
                    return $slug;
                },
            ]
        ];
    }
}
