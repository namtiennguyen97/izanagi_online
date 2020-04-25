<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();

        $user->name = "adminUser";

        $user->email = "admin@gmail.com";

        $user->password = bcrypt("admin");
//        $user->password = 'admin';

        $user->inGame = 'Hirota';

        $user->role = 1;

        $user->save();

        //tao user binh thuong

        $user = new \App\User();

        $user->name = "user";

        $user->email = "user@gmail.com";

        $user->inGame = 'GG';

        $user->password = bcrypt("user");
//        $user->password = '12345678';

        $user->role = 2;

        $user->save();
    }
}
