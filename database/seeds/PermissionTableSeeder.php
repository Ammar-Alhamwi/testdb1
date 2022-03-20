<?php
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
    'browse_admin',
    'browse_bread',
    'browse_database',
    'browse_media',
    'browse_compass',
    'browse_menus',
    'read_menus',
    'edit_menu',
    'add_menus',
    'delete_menus',
    'browse_roles',
    'read_roles',
    'edit_roles',
    'add_roles',
    'delete_roles',
    'browse_users',
    'read_users',
    'edit_users',
    'add_users',
    'delete_users',
    'delete_users',
    'read_settings',
    'edit_settings',
    'add_settings',
    'delete_settings',
];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}
}
}
