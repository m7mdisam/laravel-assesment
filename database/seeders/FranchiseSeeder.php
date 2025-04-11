<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Franchise;

class FranchiseSeeder extends Seeder
{
    public function run(): void
    {
        Franchise::create(['name' => 'StroomX Dubai']);
        Franchise::create(['name' => 'StroomX India']);
    }
}
