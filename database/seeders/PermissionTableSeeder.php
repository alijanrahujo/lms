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
           'access-usermanagment',
           'access-institute',
           'access-teacher',
           'access-student',
           'access-parent',
           'access-academic',
           'access-account',
           'create-teacher',
           'edit-teacher',
           'delete-teacher',
           'access-pseb',
           'access-attendence'
          
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}