<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            0 => [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123123'),
            ],
            
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
