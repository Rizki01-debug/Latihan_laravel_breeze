<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::insert([
            [
                'name' => 'superadmin',
                'display_name' => 'Super Administrator',
                'description' => 'Memiliki semua akses tanpa batas',
            ],
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Mengelola pengguna dan konfigurasi',
            ],
            [
                'name' => 'user',
                'display_name' => 'Pengguna',
                'description' => 'Akses standar untuk aplikasi',
            ],
        ]);
    }
}
