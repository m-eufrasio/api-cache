<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'public.posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'image_url',
        'video_url',
        'image_alt',
        'video_thumbnail',
        'status'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
