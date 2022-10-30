<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PreferenceCategory;

class PreferenceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valuesForFieldName = [
            'formats monétaires',
            'comptes',
            'transferts',
            'prévisionnel',
            'couleurs',
            'affichage',
            'modules'
        ];

        for ($i=0 ; $i < count ($valuesForFieldName) ; $i++)
        {
            PreferenceCategory::factory()->create([
                'name' => $valuesForFieldName[$i],
                'position' => $i
            ]);
        }
    }
}
