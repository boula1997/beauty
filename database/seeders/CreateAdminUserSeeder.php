<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Super Admin
        $user = Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'phone' => '01126785910',
            'password' => bcrypt('123456789'),
            'type' => 'admin',
        ]);

        $role1 = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'admin']);
      

        $permissions1 = Permission::pluck('id', 'id')->all();
      

        $role1->syncPermissions($permissions1);
       

        $user->assignRole([$role1->id]);
    }
}