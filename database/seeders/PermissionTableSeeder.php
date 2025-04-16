<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
          
           'image-list',
           'image-create',
           'image-edit',          
           'image-delete',
           'itemRequest-list',
           'itemRequest-create',
           'itemRequest-edit',
           'itemRequest-delete',
            
           'category-list',
           'category-create',
           'category-edit',
           'category-delete',
          
           'setting-edit',
           
           'orderproduct-list',
           'orderproduct-create',
           'orderproduct-edit',
           'orderproduct-delete',

           'admin-list',
           'admin-create',
           'admin-edit',
           'admin-delete',
           'message-list',
           'message-delete',
           'message-reply',
           'order-list',
           'order-reply',
           'newsletter-list',
           'newsletter-delete',
           'newsletter-reply',
        

        //    
          
           'store-list',
           'store-create',
           'store-edit',
           'store-delete',
           
          
           'size-list',
           'size-create',
           'size-edit',
           'size-delete',
           'color-list',
           'color-create',
           'color-edit',
           'color-delete',
           'brand-list',
           'brand-create',
           'brand-edit',
           'brand-delete',
           'subcategory-list',
           'subcategory-create',
           'subcategory-edit',
           'subcategory-delete',

           'banner-list',
           'banner-create',
           'banner-edit',
           'banner-delete',

           'slider-list',
           'slider-create',
           'slider-edit',
           'slider-delete',
           'merchantRequest-list',
           'merchantRequest-delete',

           'newsletter-list',
           'newsletter-delete',

           'message-list',
           'message-delete',
           
           'chooseUs-list',
           'chooseUs-create',
           'chooseUs-edit',
           'chooseUs-delete',

           'service-list',
           'service-create',
           'service-edit',
           'service-delete',
        ];
        
     
        foreach ($permissions as $permission) {
             Permission::updateOrCreate(['name' => $permission,'guard_name'=>'admin']);
        }
    }
}