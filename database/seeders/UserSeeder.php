<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Petugas',
            'email' => 'petugas@klinik.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('petugas');

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@klinik.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('admin');
    }
}
