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
        Schema::create('preference_user', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger('preference_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            // $table->timestamps();

            $table->primary(['preference_id', 'user_id']);
            $table->index(['preference_id', 'user_id']);
            $table->unique(['preference_id', 'user_id']);
        });

        Schema::table('preference_user', function (Blueprint $table) {
            $table->foreign('preference_id')->references('id')->on('preferences')
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
        Schema::dropIfExists('preference_user');
    }
};
