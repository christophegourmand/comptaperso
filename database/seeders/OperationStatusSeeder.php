<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OperationStatus;

class OperationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusesToCreate = ['En attente', 'Effectué'];

        foreach ($statusesToCreate as $status)
        {
            OperationStatus::factory()->create(['name' => $status]);
        }
    }
}
