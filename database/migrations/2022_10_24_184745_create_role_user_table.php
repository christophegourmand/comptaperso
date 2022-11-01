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
        Schema::create('role_user', function (Blueprint $table) {
            // $table->id(); // NOTE: an `id` isn't required|adviced for a pivot table.
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            // $table->timestamps(); // NOTE: a `timestamp` isn't required for a pivot table.

            //--- we need to create a unique primary key based on 'role_id' and 'user_id'
                //LINK - https://stackoverflow.com/questions/34274998/any-advantages-of-adding-an-id-column-to-a-pivot-table-in-laravel
            $table->primary(['role_id', 'user_id']); //--- from forum above
            $table->index(['role_id', 'user_id']); //--- from Laravel doc.
            $table->unique(['role_id', 'user_id']); //--- from forum above
        });

        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')
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
        Schema::dropIfExists('role_user');
    }
};
