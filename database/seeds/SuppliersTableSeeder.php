<?php

use App\Supplier;
use Illuminate\Database\Seeder;
use Tymon\JWTAuth\Facades\JWTAuth;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla categories
        Supplier::truncate();
        $faker = \Faker\Factory::create();

        $users = App\User::all();
        foreach ($users as $user) {
            JWTAuth::attempt(['email' => $user->email, 'password' => '123123']);

            //con este usuario, registramos algunos suppliers
            for ($j = 0; $j < 3; $j++){
                Supplier::create([
                    'name' => $faker->word,
                ]);
            }
        }
    }
}
