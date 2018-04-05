<?php

use Illuminate\Database\Seeder;
use App\User;
class FillUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name="SEEDING TEST";
        $user->email="seedinga@inbox.ru";
        $user->dob="1994-05-10";
        $user->password=bcrypt("560246s");
        $user->save();
    }
}
