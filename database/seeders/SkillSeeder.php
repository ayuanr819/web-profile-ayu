<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill; 

class SkillSeeder extends Seeder
{
    
    public function run(): void
    {
        $skills = [
            ['name' => 'UI/UX Design (Figma)', 'percentage' => 90, 'color' => 'pink'],
            ['name' => 'Web Development (Laravel)', 'percentage' => 75, 'color' => 'blue'],
            ['name' => 'Mobile Dev (Flutter/Kodular)', 'percentage' => 80, 'color' => 'pink'],
            ['name' => 'Henna Artistry', 'percentage' => 95, 'color' => 'blue'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}