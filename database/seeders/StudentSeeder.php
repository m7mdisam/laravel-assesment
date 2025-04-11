<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\ParentModel;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $parent = ParentModel::first();
        Student::create(['parent_id' => $parent->id, 'name' => 'Ajmal Khan']);
        Student::create(['parent_id' => $parent->id, 'name' => 'Ajmal Kapoor']);
    }
}
