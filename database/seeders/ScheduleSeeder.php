<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;
use App\Models\Franchise;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $franchise = Franchise::first();
        Schedule::create(['franchise_id' => $franchise->id, 'name' => 'Morning Schedule']);
        Schedule::create(['franchise_id' => $franchise->id, 'name' => 'Evening Schedule']);
    }
}
