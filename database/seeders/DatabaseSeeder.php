<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ObjectType;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Object types
        foreach (['Type A', 'Type B', 'Type C'] as $type) {
            ObjectType::firstOrCreate(['name' => $type]);
        }

        // Custom seeders
        $this->call([
            FranchiseSeeder::class,
            ScheduleSeeder::class,
            ParentSeeder::class,
            StudentSeeder::class
        ]);
    }
}
