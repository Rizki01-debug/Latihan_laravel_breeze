<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'superadmin',
            'display_name' => 'Super Administrator',
            'description' => 'Memiliki semua akses penuh',
        ]);

        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Mengelola sebagian besar fitur',
        ]);

        Role::create([
            'name' => 'user',
            'display_name' => 'Pengguna',
            'description' => 'Akses standar',
        ]);
    }
}
