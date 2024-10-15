<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@gmail.com',
                's_number' => 'T1001',
                'user_type' => 'teacher',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@gmail.com',
                's_number' => 'T1002',
                'user_type' => 'teacher',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Emily Johnson',
                'email' => 'emily.johnson@gmail.com',
                's_number' => 'T1003',
                'user_type' => 'teacher',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@gmail.com',
                's_number' => 'T1004',
                'user_type' => 'teacher',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Olivia Davis',
                'email' => 'olivia.davis@gmail.com',
                's_number' => 'T1005',
                'user_type' => 'teacher',
                'password' => Hash::make('123456789'),
            ],
        ];

        foreach ($teachers as $teacher) {
            User::create($teacher);
        }
    }
}
