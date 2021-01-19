<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $cities =
            [
                'Москва',
                'Санкт-Петерубрг',
            ];

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'name' => $city,
            ]);

        }
    }
}
