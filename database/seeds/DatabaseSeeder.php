<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        foreach (range(1, 1000) as $index) {
            DB::table('users')->insert([
                'nome' => $faker->name,
                'email' => $faker->email,
                'phone' => mt_rand(111111, 999999),
                'genero' => (mt_rand(0, 1) == 1 ? 'masc' : 'fem'),
                'nasc' => (mt_rand(1980, 2000) . '-'.mt_rand(1, 12).'-'.mt_rand(1, 31)),
                'password' => Hash::make('whatever'),
                // 'lembrar_senha' => (mt_rand(0, 1) == 1)
            ]);
            
            // DB::table('users')->insert([
            //     'nome' => 'Adriane Madeira',
            //     'email' => 'adriane3@outlook.com',
            //     'password' => Hash::make('whatever'),
            //     'phone' => '3333333',
            //     'genero' => 'fem',
            //     'nasc' => '1994-12-31',
            //     'lembrar_senha' => true
            // ]);
        }
    }
}
