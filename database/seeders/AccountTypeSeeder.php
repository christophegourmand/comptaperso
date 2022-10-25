<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\AccountType;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccountType::factory()->create( ['name' => 'individuel'] );
        AccountType::factory()->create( ['name' => 'épargne'] );
        AccountType::factory()->create( ['name' => 'titre'] );
        AccountType::factory()->create( ['name' => 'à terme'] );
        AccountType::factory()->create( ['name' => 'join'] );
        AccountType::factory()->create( ['name' => 'indivis'] );
    }
}
