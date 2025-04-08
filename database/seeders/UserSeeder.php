<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'Victor B.',
            'email' => 'vicbotez@gmail.com',
            'password' => Hash::make(env('ADMIN_PASSWORD')),
            //'password' => Hash::make('111'),
            'role' => '0'
        ]);
    }
}
