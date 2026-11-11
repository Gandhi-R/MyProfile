<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill; // Wajib dipanggil

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ['name' => 'Kali Linux', 'icon' => 'icon-kali.svg'],
            ['name' => 'Python', 'icon' => 'icon-python.svg'],
            ['name' => 'PHP', 'icon' => 'icon-php.svg'],
            ['name' => 'Hackthebox', 'icon' => 'icon-hack.svg'],
            ['name' => 'C Programming', 'icon' => 'logo-c.svg'],
            ['name' => 'Laravel', 'icon' => 'icon-laravel.svg'],
            ['name' => 'React & Next.js', 'icon' => 'icon-react.svg'],
            ['name' => 'Github', 'icon' => 'icon-github.svg'],
            ['name' => 'Nmap', 'icon' => 'icon-nmap.svg'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}