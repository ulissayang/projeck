<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'user_id',
        'slug',
        'jabatan',
        'foto',
    ];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
