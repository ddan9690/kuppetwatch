<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Super Admin
        User::firstOrCreate(
            ['phone' => '0711317235'],
            [
                'name' => 'Dancan Okeyo',
                'email' => 'dancanokeyo@kuppethomabay',
                'password' => Hash::make('kuppethomabay'),
                'role' => 'super-admin',
            ]
        );

        // Admin
        User::firstOrCreate(
            ['phone' => '0729683807'],
            [
                'name' => 'Churchil Aroko',
                'email' => 'churchilaroko@kuppethomabay',
                'password' => Hash::make('kuppethomabay'),
                'role' => 'admin',
            ]
        );

        // Normal User
        User::firstOrCreate(
            ['phone' => '0725584601'],
            [
                'name' => 'Kevin Ochieng',
                'email' => 'kevinochieng@kuppethomabay',
                'password' => Hash::make('kuppethomabay'),
                'role' => 'user',
            ]
        );
    }
}