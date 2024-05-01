<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Blog extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'blog';
    protected $fillable = [
        'name',
        'slug_name',
        'text',
        'document_name',
        'document_path',
        'likes',
        'user_id',
    ];
}
