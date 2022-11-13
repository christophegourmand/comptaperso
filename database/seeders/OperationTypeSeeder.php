<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OperationType;


class OperationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operationTypesToCreate = [
            // outcomes (money out):
            'virement',
            'virement permanent',
            'chèque',
            'retrait',
            'CB',
            'CB Virtuelle',
            'paiement web',

            // incomes (money in) :
            'remboursement',
            'prélèvement',
            'prélèvement (mandat)',
        ];

        sort($operationTypesToCreate);

        foreach ($operationTypesToCreate as $operationType)
        {
            OperationType::factory()->create(['name' => $operationType]);
        }
    }
}
