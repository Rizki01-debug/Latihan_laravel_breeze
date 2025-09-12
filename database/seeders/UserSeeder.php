<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
User::create([
    'username' => 'superadmin',
    'name' => 'Super Admin',
    'email' => 'superadmin@example.com',
    'password' => bcrypt('password'),
    'role_id' => 1,
]);
    }
}
