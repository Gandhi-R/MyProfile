<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project; // Tambahkan ini biar Laravel kenal model Project

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Data Project 1
        Project::create([
            'title' => 'Arena Allocator',
            'description' => 'Custom memory management program built in C language using static stack memory allocation.',
            'image' => 'arena_alocator.png', // Nanti sesuaikan dengan nama file gambarmu di folder public/images
            'repo_link' => 'https://github.com/gandirmn/arena-allocator' // Link GitHub, bisa dikosongin
        ]);

        // Data Project 2
        Project::create([
            'title' => 'IVRD E-Commerce',
            'description' => 'A web application for e-commerce, built with modern tech stack focusing on responsive UI/UX and seamless experience.',
            'image' => 'ivrd.png', // Nanti sesuaikan dengan nama file gambarmu
            'repo_link' => 'https://github.com/gandirmn/ivrd-ecommerce'
        ]);
    }
}