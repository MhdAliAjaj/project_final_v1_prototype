<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{

    


    public function run()
    {

        $permissions = [

            'role-list',

            'role-create',

            'role-edit',

            'role-delete',

         
            'show-request',
            'edit-request',


        ];

        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);

        }

    }

}
