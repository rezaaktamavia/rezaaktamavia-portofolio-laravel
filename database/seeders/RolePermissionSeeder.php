<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // membuat beberapa role
        // membuat default untuk superadmin
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $studentRole = Role::create([
            'name' => 'student'
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);

        // akun super admin untuk mengelola data awal
        $userOwner = User::create([
            'name'       => 'Reza Akta Mavia',
            'occupation' => 'Educator',
            'avatar'     => 'images/default-avatar.png',
            'email'      => 'reza123@gmail.com',
            'password'   => bcrypt('reza12345')
        ]);

        $userOwner->assignRole($ownerRole);
    }
}