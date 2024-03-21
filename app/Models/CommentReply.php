<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    use HasFactory;

    protected $table = 'comment_replies';

    protected $guarded = [];

    public function commentReplies()
    {
        return $this->hasMany(Comment::class);
    }

    public function userLikeReply()
    {
        return $this->belongsToMany(ReplyLike::class);
    }
}
