<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'description',
        'model',
        'user_id',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
