<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Carbon\Carbon;
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
        // \App\Models\User::factory(10)->create();
        Configuration::create([
            'visitors' => 1,
            "total_inspection" => 0,
            "increment_by" => 0,
        ]);
    }
}
