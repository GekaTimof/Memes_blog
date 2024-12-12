<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model{
    use HasFactory;

    protected $fillable = ['content', 'post_id', 'is_approved'];

    public $timestamps = true;
}
