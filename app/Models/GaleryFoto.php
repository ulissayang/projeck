<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GaleryFoto extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'galery_foto';

    protected $fillable = [
        'judul',
        'user_id',
        'slug',
        'deskripsi',
        'foto'
    ];

    protected $casts = [
        'foto' => 'array',
    ];

    public function user():BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
