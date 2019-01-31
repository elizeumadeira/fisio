<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            'nome' => 'Elizeu Madeira',
            'email' => 'elizeu.madeira@gmail.com',
            'password' => Hash::make('whatever'),
            'phone' => '1111111',
            'genero' => 'masc',
            'nasc' => '1989-06-25'
        ]);

        DB::table('users')->insert([
            'name' => 'Adriane Madeira',
            'email' => 'adriane3@outlook.com',
            'password' => Hash::make('whatever'),
            'phone' => '3333333',
            'gender' => 'fem',
            'nasc' => '1994-12-31'
        ]);
    }
}
