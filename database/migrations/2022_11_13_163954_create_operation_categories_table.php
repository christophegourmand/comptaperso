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
        Schema::create('operation_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name', 50);
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_counted_in_balance')->default(true);
            $table->bigInteger('icon_id')->unsigned()->nullable();
            $table->string('icon_color_hexa', 7)->nullable();
            $table->double('monthly_limit' , 24 , 7)->nullable()
                ->comment('Use that field as a budget limit (to stay under) for the month.');
            $table->double('annual_limit' , 24 , 7)->nullable()
                ->comment('Use that field as a budget limit (to stay under) for the year.');
            $table->timestamps();

            $table->index(['user_id','name']);
            $table->unique(['user_id','name']);
        });

        Schema::table('operation_categories', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('operation_categories');
    }
};
