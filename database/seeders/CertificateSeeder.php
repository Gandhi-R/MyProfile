<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $certificates = [
            [
                'title' => 'SISTEM MANAJEMEN DATABASE TERINTEGRASI UNTUK KASIR WARUNG KIKIL ABANG',
                'issuer' => 'HKI',
                'image' => 'sertif-database.jpg',
                'pdf_file' => 'sertif-database.pdf',
            ],
            [
                'title' => 'Aplikasi Katalog Online Mod Game Berbasis Web By Indonesian Virtual Rail Division',
                'issuer' => 'HKI',
                'image' => 'sertif-web.jpg',
                'pdf_file' => 'sertif-website.pdf',
            ],
        ];

        foreach ($certificates as $cert) {
            Certificate::create($cert);
        }
    }
}