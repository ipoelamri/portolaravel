<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\portofolio::create([
            'title' => 'BLOG PRIBADI',
            'image' => 'blog.png',
            'use' => 'LARAVEL',
            'link' => 'http://example.com',
        ]);

        // Tambahkan lebih banyak data di sini
    }
}
