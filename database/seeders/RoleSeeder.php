<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdmin = Role::firstOrCreate([
            'name' => 'super admin',
            'guard_name' => 'web'
        ]);

        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        $user = Role::firstOrCreate([
            'name' => 'user',
            'guard_name' => 'web'
        ]);

        // Super admin gets all permissions
        $superAdmin->givePermissionTo(Permission::all());

        // Admin limited permissions
        $admin->givePermissionTo([
            'view users',
            'create users',
            'edit users',
            'view reports'
        ]);

        // Normal user permissions
        $user->givePermissionTo([
            'view reports'
        ]);
    }
}