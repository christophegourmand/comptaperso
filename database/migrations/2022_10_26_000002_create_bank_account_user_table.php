<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_account_user', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger('bank_account_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            // $table->timestamps();
            $table->primary(['bank_account_id', 'user_id']);
            $table->index(['bank_account_id', 'user_id']);
            $table->unique(['bank_account_id', 'user_id']);
        });

        Schema::table('bank_account_user', function (Blueprint $table) {
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_account_user');
    }
};
