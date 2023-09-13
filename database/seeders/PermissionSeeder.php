<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Role permissions
            ['name' => 'create-role', 'display_name' => 'Thêm vai trò', 'group' => 'role'],
            ['name' => 'edit-role', 'display_name' => 'Sửa vai trò', 'group' => 'role'],
            ['name' => 'show-role', 'display_name' => 'Hiện thị vai trò', 'group' => 'role'],
            ['name' => 'delete-role', 'display_name' => 'Xóa vai trò', 'group' => 'role'],
            // User group
            ['name' => 'create-user', 'display_name' => 'Thêm người dùng', 'group' => 'user'],
            ['name' => 'edit-user', 'display_name' => 'Sửa người dùng', 'group' => 'user'],
            ['name' => 'show-user', 'display_name' => 'Hiện thị người dùng', 'group' => 'user'],
            ['name' => 'delete-user', 'display_name' => 'Xóa người dùng', 'group' => 'user'],
            // Category
            ['name' => 'create-category', 'display_name' => 'Thêm danh mục', 'group' => 'category'],
            ['name' => 'edit-category', 'display_name' => 'Sửa danh mục', 'group' => 'category'],
            ['name' => 'show-category', 'display_name' => 'Hiện thị danh mục', 'group' => 'category'],
            ['name' => 'delete-category', 'display_name' => 'Xóa danh mục', 'group' => 'category'],
            // Product
            ['name' => 'create-product', 'display_name' => 'Thêm sản phẩm', 'group' => 'product'],
            ['name' => 'edit-product', 'display_name' => 'Sửa sản phẩm', 'group' => 'product'],
            ['name' => 'show-product', 'display_name' => 'Hiện thị sản phẩm', 'group' => 'product'],
            ['name' => 'delete-product', 'display_name' => 'Xóa sản phẩm', 'group' => 'product'],
            // Coupon
            ['name' => 'create-coupon', 'display_name' => 'Thêm mã giảm giá', 'group' => 'coupon'],
            ['name' => 'edit-coupon', 'display_name' => 'Sửa mã giảm giá', 'group' => 'coupon'],
            ['name' => 'show-coupon', 'display_name' => 'Hiện thị mã giảm giá', 'group' => 'coupon'],
            ['name' => 'delete-coupon', 'display_name' => 'Xóa mã giảm giá', 'group' => 'coupon'],
        ];
        foreach ($permissions as $permissionData) {
            $permission = Permission::where('name', $permissionData['name'])->first();
            if (!$permission) {
                Permission::create($permissionData);
            }
        }
    }
}
