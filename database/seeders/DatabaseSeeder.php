<?php

namespace Database\Seeders;

use App\Models\pays;
use App\Models\region;
use App\Models\commune;
use App\Models\quartier;
use App\Models\departement;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        pays::factory(5)->create();
        region::factory(5)->create();
        departement::factory(25)->create();
        commune::factory(25)->create();
        

    }
}
