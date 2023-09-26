<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'provider',
            'email' => 'provider@gmail.com',
            'email_verified_at' => now(),
            'password' => 'provider',
        ])->assignRole('serviceProvider');
    }
}
