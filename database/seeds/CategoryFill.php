<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryFill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=new Category();
        $category->name="football";
        $category->save();
        $category=new Category();
        $category->name="basketball";
        $category->save();
        $category=new Category();
        $category->name="volleyball";
        $category->save();
    }
}
