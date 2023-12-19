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
        User::factory()->create([
            'name' => 'sujan',
            'email' =>'sujan@sujan.com',
            'roll' => 'Admin'
        ]);
        User::factory()->create([
            'name' => 'sujan1',
            'email' =>'sujan1@sujan.com',
            'roll' => 'User'
        ]);
    }
}
