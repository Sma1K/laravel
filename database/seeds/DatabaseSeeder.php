<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(FillUsers::class);
        $this->call(CategoryFill::class);
       // $this->call(CommentsSeed::class);
      //  $this->call(ArticlesFill::class);
    }
}
