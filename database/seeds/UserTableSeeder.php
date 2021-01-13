<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'   => '1',
            'name'      => 'Admin',
            'username'  => 'kiran',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('rootadmin'),
        ]);
    }
}
