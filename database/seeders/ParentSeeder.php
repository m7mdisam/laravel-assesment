<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ParentModel;
use App\Models\Franchise;

class ParentSeeder extends Seeder
{
    public function run(): void
    {
        $franchise = Franchise::first();
        ParentModel::create(['franchise_id' => $franchise->id, 'name' => 'Mohamed Esam']);
        ParentModel::create(['franchise_id' => $franchise->id, 'name' => 'Ahmed Adel']);
    }
}
