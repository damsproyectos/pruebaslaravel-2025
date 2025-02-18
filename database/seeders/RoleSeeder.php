<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creación de Roles y permisos

        // $role1 = Role::create(['name' => 'Admin']);
        // $role2 = Role::create(['name' => 'Editor']);

        // Permission::create(['name' => 'editor.post.index']);
        // Permission::create(['name' => 'editor.post.show']);
        // Permission::create(['name' => 'editor.post.create']);
        // Permission::create(['name' => 'editor.post.update']);
        // Permission::create(['name' => 'editor.post.destroy']);

        // Permission::create(['name' => 'editor.category.index']);
        // Permission::create(['name' => 'editor.category.show']);
        // Permission::create(['name' => 'editor.category.create']);
        // Permission::create(['name' => 'editor.category.update']);
        // Permission::create(['name' => 'editor.category.destroy']);

        // Permission::create(['name' => 'editor.user.index']);
        // Permission::create(['name' => 'editor.user.show']);
        // Permission::create(['name' => 'editor.user.create']);
        // Permission::create(['name' => 'editor.user.update']);
        // Permission::create(['name' => 'editor.user.destroy']);

        //asignación de roles a permisos
        // Permission::find(1)->assignRole(Role::find(1));
        // Permission::find(1)->assignRole(Role::find(2));


        // $role2 = Role::findById(2);
        // $role2 = Role::find(2);
        // Permission::find(1)->assignRole($role2);
        // Permission::find(2)->assignRole($role2);
        // Permission::find(3)->assignRole($role2);
        // Permission::find(4)->assignRole($role2);
        // Permission::find(5)->assignRole($role2);
        // Permission::find(6)->assignRole($role2);
        // Permission::find(7)->assignRole($role2);
        // Permission::find(8)->assignRole($role2);
        // Permission::find(9)->assignRole($role2);
        // Permission::find(10)->assignRole($role2);
        // Permission::find(11)->assignRole($role2);
        // Permission::find(12)->assignRole($role2);
        // Permission::find(13)->assignRole($role2);
        // Permission::find(14)->assignRole($role2);
        // Permission::find(15)->assignRole($role2);


        //asignación de permisos a roles
        $role2 = Role::find(2);
        $Permission1 = Permission::find(1);
        $Permission2 = Permission::find(2);
        $Permission3 = Permission::find(3);
        $Permission4 = Permission::find(4);
        $Permission5 = Permission::find(5);
        $Permission6 = Permission::find(6);
        $Permission7 = Permission::find(7);
        $Permission8 = Permission::find(8);
        $Permission9 = Permission::find(9);
        $Permission10 = Permission::find(10);
        $Permission11 = Permission::find(11);
        $Permission12 = Permission::find(12);
        $Permission13 = Permission::find(13);
        $Permission14 = Permission::find(14);
        $Permission15 = Permission::find(15);

        $role2->givePermissionTo($Permission1, $Permission2, $Permission3, $Permission4, $Permission5, $Permission6, $Permission7, $Permission8, $Permission9, $Permission10, $Permission11, $Permission12, $Permission13, $Permission14, $Permission15);
    }
}
