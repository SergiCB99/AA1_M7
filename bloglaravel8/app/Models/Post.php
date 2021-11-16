<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','content'
    ];

    function comments() {
        return $this->hasMany(Comment::class);
    }

    function category() {
        return $this->belongsTo(Category::class);
    }

    function user() {
        return $this->belongsTo(User::class);
    }
}
