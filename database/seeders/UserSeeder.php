<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        /*User::insert([
            [
                'name' => 'Alice',
                'email' => 'alice@example.com',
                'password' => Hash::make('123456'), // ✅ bien Hash::make
            ],
            [
                'name' => 'Bob',
                'email' => 'bob@example.com',
                'password' => Hash::make('123456'), // ✅ bien Hash::make
            ],
        ]);/*/
         User::factory()->count(10)->create();
    }
}
