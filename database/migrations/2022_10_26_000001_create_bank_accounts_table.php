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
            $table->string('name', 50);
            $table->string('reference', 100)->nullable();
            $table->text('description')->nullable();
            $table->double('balance', 24, 8);
            $table->date('balance_date');
            // $table->string('icon_path')->nullable();
            $table->bigInteger('icon_id')->unsigned()->nullable();
            $table->string('icon_color_hexa', 7)->nullable();
            $table->timestamps();
        });

        Schema::table('bank_accounts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('account_type_id')->references('id')->on('account_types')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('icon_id')->references('id')->on('icons')
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
