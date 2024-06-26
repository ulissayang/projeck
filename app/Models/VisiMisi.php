<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VisiMisi extends Model
{
    use HasFactory;
    
    protected $table = 'visi_misi';
    
    protected $fillable = ['jenis', 'user_id', 'deskripsi'];

    public function user():BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
    
}
