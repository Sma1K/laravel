<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment =new Comment();
        $comment->news_id = 1;
        $comment->comment = "i hope u liked";
        $comment->user_id = 1;
        $comment->save();
    }
}
