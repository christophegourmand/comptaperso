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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Trying to fix error 1215.
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('account_type_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('reference')->nullable();
            $table->timestamps();

        });

        Schema::table('bank_accounts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('account_type_id')->references('id')->on('account_types')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
};
