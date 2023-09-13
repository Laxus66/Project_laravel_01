<?php

namespace Database\Seeders;

use App\Models\Permission as ModelsPermission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'display_name' => 'Quản trị viên', 'group' => 'system'],
            ['name' => 'manager', 'display_name' => 'Quản lí', 'group' => 'system'],
            ['name' => 'staff', 'display_name' => 'Nhân viên', 'group' => 'system'],
            ['name' => 'user', 'display_name' => 'Người dùng', 'group' => 'outside'],
        ];
        foreach ($roles as $roleData) {
            $role = Role::where('name', $roleData['name'])->first();
            if (!$role) {
                Role::create($roleData);
            }
        }
    }
}
