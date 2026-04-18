<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin Account
        \App\Models\User::create([
            'name' => 'Admin TV9',
            'email' => 'admin@tv9.net',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'admin',
        ]);

        // Sample Schedules
        $today = date('N');
        \App\Models\Program::create([
            'title' => 'Kajian Pagi Nusantara',
            'description' => 'Inspirasi rohani pagi hari.',
            'category' => 'Religi',
            'start_time' => '05:00:00',
            'end_time' => '06:00:00',
            'day_of_week' => $today,
        ]);

        \App\Models\Program::create([
            'title' => 'Warta 9 Siang',
            'description' => 'Berita terkini dari seluruh pelosok negeri.',
            'category' => 'Berita',
            'start_time' => '12:00:00',
            'end_time' => '13:00:00',
            'day_of_week' => $today,
        ]);

        \App\Models\Program::create([
            'title' => 'Talkshow Budaya',
            'description' => 'Mengeksplorasi kekayaan budaya Nusantara.',
            'category' => 'Budaya',
            'start_time' => '19:00:00',
            'end_time' => '20:30:00',
            'day_of_week' => $today,
        ]);

        // Sample Catalogs
        \App\Models\Catalog::create([
            'title' => 'Dokumenter Wali Songo',
            'description' => 'Serial dokumenter sejarah penyebaran Islam.',
            'category' => 'Sejarah',
            'image_url' => 'https://api.dicebear.com/7.x/initials/svg?seed=WaliSongo',
        ]);
    }
}
