<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesFill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article=new Article();
        $article->title = "It is a sport!";
        $article->user_id = 1;
        $article->text = "memento mori ";
        $article->image = "http://sports.kz:8080/storage/app/public/images/7zHKnp96NSeHxrVaWcv2L22fYQbGlEenxiKp7q4g.jpeg";
        $article->category_id = 1;
        $article->save();
    }
}