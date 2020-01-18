<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

    	// Truncate all the tables used to define roles
        DB::table('roles')->delete();
        DB::table('permissions')->delete();
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();

        // Get the predefined roles and permissions from the included
        // .json file
        $roles= json_decode(file_get_contents(
            database_path('roles_and_permissions.json')
        ));

        /**
         * Loop through the .json object and get each key value pair.
         * For the first level, the key is the role name and the value is an array of
         * permissions.
         */
        foreach($roles as $role => $permissions)
        {
            // First level, create roles
            $role = Role::create(['name' => $role]);

            // Loop through all permissions
            foreach ($permissions as $permission) {
                // Create a new permission or update an existing one
                $permission = Permission::updateOrCreate(
                    ['name' => $permission], ['name' => $permission]
                );
                
                // Assign each permission to the aforementioned role.
                $role->givePermissionTo($permission);
            }
        }
    }
}
