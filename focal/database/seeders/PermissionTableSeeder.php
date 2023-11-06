<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = [

            //here we have to put the permissions in our site







        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
