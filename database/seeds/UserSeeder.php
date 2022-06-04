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
                'name' => 'Gonzalo',
                'last' => 'Lucio',
                'email' => 'glucio@unpa.edu.co',
                'password'  => '123456'
                ],
                [
                'name' => 'Julian',
                'last' => 'Nieto',
                'email' => 'nieto@unpa.edu.co',
                'password'  => '123456'
                ],
            ]
        );
    }
}
