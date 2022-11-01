<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesToCreate = ['admin', 'member'];

        foreach ($rolesToCreate as $role)
        {
            Role::factory()->create(['name' => $role]);
        }
    }
}
