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
        $superAdmin = User::firstOrCreate(
            ['phone' => '0711317235'],
            [
                'name' => 'Dancan Okeyo',
                'email' => 'dancanokeyo@kuppethomabay',
                'password' => Hash::make('kuppethomabay')
            ]
        );

        $superAdmin->assignRole('super admin');


        // Admin
        $admin = User::firstOrCreate(
            ['phone' => '0729683807'],
            [
                'name' => 'Churchil Aroko',
                'email' => 'churchilaroko@kuppethomabay',
                'password' => Hash::make('kuppethomabay')
            ]
        );

        $admin->assignRole('admin');


        // Normal User
        $user = User::firstOrCreate(
            ['phone' => '0725584601'],
            [
                'name' => 'Kevin Ochieng',
                'email' => 'kevinochieng@kuppethomabay',
                'password' => Hash::make('kuppethomabay')
            ]
        );

        $user->assignRole('user');
    }
}