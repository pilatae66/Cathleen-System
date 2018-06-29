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
        factory(App\Staff::class, 10)->create();
        factory(App\Doctor::class, 10)->create();
        factory(App\Patient::class, 100)->create();
        factory(App\Schedule::class, 100)->create();
        factory(App\HealthRecord::class, 100)->create();
    }
}
