<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogLines extends Model
{
    protected $table = 'blog_lines';
    protected $fillable = [
        'blog_id',
        'text',
        'document_path',
        'order_line',
    ];
    use HasFactory;
}
