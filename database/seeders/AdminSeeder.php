<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                's_number' => 'ADMIN',
                'user_type' => 'Admin',
                'password' => Hash::make('123456789'),
            ]
        ];

        foreach ($admins as $admin) {
            User::create($admin);
        }
    }
}
