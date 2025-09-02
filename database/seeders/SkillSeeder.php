<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'PHP', 'slug' => 'php'],
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'Guitar', 'slug' => 'guitar'],
            ['name' => 'English', 'slug' => 'english'],
            ['name' => 'Marketing', 'slug' => 'marketing'],
        ];
        Skill::upsert($skills, ['slug']);
    }
}
