<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'download-backup', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete-backup', 'guard_name' => 'web']);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ])->givePermissionTo('download-backup');
    }
}
