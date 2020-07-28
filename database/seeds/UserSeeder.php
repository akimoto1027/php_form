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
        //
        DB::table('users')->insert([
            [
            'name' => 'あああ',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
        ],[
            'name' => 'いいい',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password'),
        ]

        ]);
    }
}
