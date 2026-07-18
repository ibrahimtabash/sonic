<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'ibrahimtabash8@gmail.com')->exists()) {
            User::create([
                'name' => 'ibrahimtabash',
                'email' => 'ibrahimtabash8@gmail.com',
                'password' => Hash::make('i409360245@abc'),
            ]);
        }
    }
}
