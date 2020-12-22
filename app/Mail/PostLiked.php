<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Post;

class PostLiked extends Mailable
{
    use Queueable, SerializesModels;

    public $liker;
    public $post;

    public function __construct(User $liker, Post $post)
    {
        $this->liker = $liker;
        $this->post = $post;
    }

    public function build()
    {
        return $this->markdown('emails.posts.posts_liked')->subject('Someone liked you post');
    }
}
