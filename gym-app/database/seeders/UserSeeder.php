<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'  => 'member',
            'email' => 'member@test.com'
        ]);

        User::factory()->create([
            'name'  => 'instructor',
            'email' => 'instructor@test.com',
            'role'  => 'instructor'
        ]);

        User::factory()->create([
            'name'  => 'admin',
            'email' => 'admin@test.com',
            'role'  => 'admin'
        ]);
        
        User::factory()->count(10)->create();
    }
}
