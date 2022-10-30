<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // EXEMPLE 1 ---
        // \App\Models\User::factory(10)->create();

        // EXEMPLE 2 ---
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //--- create a numbers of fake users:
        User::factory()->count(20)->create();

        //--- list of seeder files to execute when using CLI commande `php artisan db:seed`
        $this->call([
            AccountTypeSeeder::class,
            PreferenceCategorySeeder::class,
            // --- then insert datas in tis order of tables
            // table `preferences`
            // table `user_preference` (pivot|jointure)
            // table `bank_accounts`
            //
        ]);
    }
}
