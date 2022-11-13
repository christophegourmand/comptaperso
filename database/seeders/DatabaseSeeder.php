<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use \App\Models\User;
use \App\Models\Role;
use \App\Models\AccountType;
use \App\Models\BankAccount;
use \App\Models\PreferenceCategory;
use \App\Models\Preference;
use \App\Models\OperationCategory;
use \App\Models\OperationStatus;
use \App\Models\OperationType;
use \App\Models\OperationRecurring;
use \App\Models\Operation;


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

        //--- fill values for table `roles`
        $this->call([
            RoleSeeder::class
        ]);

        //--- create a special admin user:
        User::factory()->create([
            'name' => 'webadmin',
            'email' => 'webadmin@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);

        //--- add the role No 1 ('admin') for user No 1 ('webadmin')
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1
        ]);

        //--- create a user member:
        User::factory()->create([
            'name' => 'christophe',
            'email' => 'christophe@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);

        //--- add the role No 3 ('member') for user No 2 ('christophe')
        DB::table('role_user')->insert([
            'role_id' => 2, // = member
            'user_id' => 2
        ]);


        //--- list of seeder files to execute when using CLI commande `php artisan db:seed`
        $this->call([
            AccountTypeSeeder::class,
            PreferenceCategorySeeder::class,
            PreferenceSeeder::class,
            IconSeeder::class,
            OperationStatusSeeder::class,
            OperationTypeSeeder::class,
            OperationRecurringSeeder::class
        ]);
    }
}
