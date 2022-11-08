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
        Schema::create('icons', function (Blueprint $table) {
            $table->id();
            $table->string('category', 50)->nullable();
            $table->string('google_icon_ref', 50);
            $table->smallInteger('position',false, true)->nullable();
            $table->timestamps();

            $table->index(['category','google_icon_ref']);
            $table->unique(['category','google_icon_ref']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icons');
    }
};
