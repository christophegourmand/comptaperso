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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('preference_category_id')->unsigned()->nullable();
            $table->string('name')->unique();
            $table->smallInteger('position',false, true)->nullable();
            $table->timestamps();
        });

        Schema::table('preferences', function (Blueprint $table) {
            $table->foreign('preference_category_id')->references('id')->on('preference_categories')
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
        Schema::dropIfExists('preferences');
    }
};
