<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    DB::table('users')->insert([
        'name'     =>  	'Ada',
        'email'    => 	'aj@gm.com',
        'password' => Hash::make('awesome'),
    ]);
}

}
