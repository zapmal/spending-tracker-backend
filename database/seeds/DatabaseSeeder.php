<?php

use Illuminate\Database\Seeder;
use App\Expense;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Expense::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Expense::create([
                'name' => $faker->bs,
                'amount' => $faker->numberBetween(-1000, 1000)
            ]);
        }
        // $this->call(UsersTableSeeder::class);
    }
}
