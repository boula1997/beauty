<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

/**
 * Makes coupons and shipping settings visible/editable in the admin dashboards.
 *
 * - Blade dashboard: the sidebar + controllers are gated by Spatie permissions
 *   (coupon-* / shipping-*) that were never created on production. Create them
 *   and grant them to the "admin" role.
 * - Table dashboard (API GeneralController): each admin's `permissions` JSON is
 *   the list of tables they can manage. Add "coupons" and "shippings" to it.
 */
return new class extends Migration
{
    private array $permissions = [
        'coupon-list', 'coupon-create', 'coupon-edit', 'coupon-delete',
        'shipping-list', 'shipping-create', 'shipping-edit', 'shipping-delete',
    ];

    private array $tables = ['coupons', 'shippings'];

    public function up(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        foreach ($this->permissions as $name) {
            Permission::firstOrCreate(['name' => $name, 'guard_name' => 'admin']);
        }

        $role = Role::where('name', 'admin')->where('guard_name', 'admin')->first();
        if ($role) {
            $role->givePermissionTo($this->permissions);
        }

        if (Schema::hasColumn('admins', 'permissions')) {
            DB::table('admins')->select('id', 'permissions')->orderBy('id')->each(function ($admin) {
                $current = json_decode($admin->permissions ?? '[]', true);
                if (!is_array($current)) {
                    $current = [];
                }
                $merged = array_values(array_unique(array_merge($current, $this->tables)));
                if ($merged !== $current) {
                    DB::table('admins')->where('id', $admin->id)->update(['permissions' => json_encode($merged)]);
                }
            });
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function down(): void
    {
        // Intentionally left as a no-op: removing access could drop permissions
        // that were granted manually before this migration ran.
    }
};
