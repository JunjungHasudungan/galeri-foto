<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyLike extends Model
{
    use HasFactory;

    protected $table = 'reply_like';

    protected $guarded = [];


    public function replylikes() 
    {
        return $this->hasMany(CommentReply::class);
    }

    public function userLike()
    {
        return $this->hasMany(User::class);
    }
}
