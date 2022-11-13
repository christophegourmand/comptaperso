<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\OperationRecurring;


class OperationRecurringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeOfRecurringsToCreate = [
            'unique',
            'tous les X jours',
            'jour No J tous les N mois'
        ];

        foreach ($typeOfRecurringsToCreate as $typeOfRecurring)
        {
            OperationRecurring::factory()->create(['type_of_recurring' => $typeOfRecurring]);
        }
    }
}
