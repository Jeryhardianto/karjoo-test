<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AnnualLeave::class, 10)->create();
        factory(App\User::class, 10)->create();
    }
}
