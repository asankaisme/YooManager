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
        $users = [
            [
                'name' => 'admin',
                'email' => 'itadmindiv@cbsl.lk',
                'password' => bcrypt('asanka123'),
            ],
            [
                'name' => 'anushka',
                'email' => 'anushkae@cbsl.lk',
                'password' => bcrypt('asanka123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}