<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dentist;

class DentistSeeder extends Seeder
{
    public function run()
    {
        Dentist::factory()
            ->count(5)
            ->create();
    }
}
