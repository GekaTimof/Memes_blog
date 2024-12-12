<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;


class Post extends Model
{
    use HasFactory;

    // Указываем поля, которые можно массово заполнять
    protected $fillable = [
        'title',
        'content',
        'image_path',
        'is_published',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
