<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Preference;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* RAPPEL DES CATEGORIES
            1: 'formats monétaires',
            2: 'comptes',
            3: 'transferts',
            4: 'prévisionnel',
            5: 'couleurs',
            6: 'affichage',
            7: 'modules'
        */

        // 1: 'formats monétaires'
        $preferencesForCat1 = [
            'séparer les milliers par un espace'
            //....continuer
            // NOTE : problème, dans une table (ou la même) il faudrait aussi une colonne indiquant la valeur customisée de la preference.
        ];

        // 2: 'comptes'
        $preferencesForCat2 = [];

        // 3: 'transferts'
        $preferencesForCat3 = [];

        // 4: 'prévisionnel'
        $preferencesForCat4 = [];

        // 5: 'couleurs'
        $preferencesForCat5 = [];

        // 6: 'affichage'
        $preferencesForCat6 = [];

        // 7: 'modules'
        $preferencesForCat7 = [];






        Preference::factory()->create(
            [
                'preference_category_id' => 1,
                'name' => '',
                'position' => 1
            ]
        );
    }
}
