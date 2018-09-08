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
        $category=new Category();
        $category->name="diving";
        $category->save();
        $category=new Category();
        $category->name="aerobics";
        $category->save();
        $category=new Category();
        $category->name="boxing";
        $category->save();
        $category=new Category();
        $category->name="bodybuilding";
        $category->save();
        $category=new Category();
        $category->name="golf";
        $category->save();
        $category=new Category();
        $category->name="hockey";
        $category->save();
        $category=new Category();
        $category->name="soccer";
        $category->save();$category=new Category();
        $category->name="skydiving";
        $category->save();
    }
}
