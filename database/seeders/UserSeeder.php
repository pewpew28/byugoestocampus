<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'), // Sesuaikan dengan password yang Anda inginkan
            'email_verified_at' => now(),
        ]);

        $admin->assignRole('admin');

        $peserta = User::create([
            'nama' => 'Revangga Prakusya Damanik',
            'email' => 'peserta@gmail.com',
            'password' => bcrypt('12345678'), 
            'email_verified_at' => now(),
        ]);

        $peserta->assignRole('peserta');
    }
}
