<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()
    {

        $user = User::create([
            'firstName' => 'Hardik Savani',
            'lastName' => 'Hardik Savani',

            'gender' => 'male',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),

        ]);
        $role = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Employee']);
        $role3 = Role::create(['name' => 'Client']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
      
    }

}
