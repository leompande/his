<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'firstname'   => 'leonard',
            'middlename'  => 'constantine',
            'lastname'  => 'mpande',
            'username' => 'Leo Mpande',
            'email'    => 'leo.august27@gmail.com',
            'password' => 'mpande',
        ));
    }

}


?>