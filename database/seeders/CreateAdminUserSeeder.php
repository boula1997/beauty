<?php
  
namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        
        $user1 = Admin::create([
            'name' => 'Boula', 
            'email' => 'admin@gmail.com',
            'type' => 'admin',
            'password' => bcrypt('123456789')
        ]);
        $user2 = Admin::create([
            'name' => 'Kermina', 
            'email' => 'kermina@gmail.com',
            'type' => 'employee',
            'password' => bcrypt('123456789')
        ]);
        $user3 = Admin::create([
            'name' => 'Ibrahim', 
            'email' => 'ibrahim@gmail.com',
            'type' => 'employee',
            'password' => bcrypt('123456789')
        ]);
        $user4 = Admin::create([
            'name' => 'Konuz', 
            'email' => 'konuz@gmail.com',
            'type' => 'employee',
            'password' => bcrypt('123456789')
        ]);
        $user5 = Admin::create([
            'name' => 'Melad', 
            'email' => 'melad@gmail.com',
            'type' => 'employee',
            'password' => bcrypt('123456789')
        ]);
        $user6 = Admin::create([
            'name' => 'Tadros', 
            'email' => 'tadros@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    
        $role = Role::updateOrCreate(['name' => 'Admin','guard_name'=>'admin']);

        $role2 = Role::updateOrCreate(['name' => 'Employee','guard_name'=>'admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
        $role2->syncPermissions($permissions);
     
        $user1->assignRole([$role->id]);
        $user2->assignRole([$role2->id]);
        $user3->assignRole([$role2->id]);
        $user4->assignRole([$role2->id]);
        $user5->assignRole([$role2->id]);
        $user6->assignRole([$role2->id]);
    }
}