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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bank_account_id')->unsigned();
            $table->bigInteger('operation_category_id')->unsigned()->nullable();
            $table->date('date_of_operation')->default( now() );
            $table->date('date_of_value')->nullable();
            $table->double('amount' , 24 , 8);
            $table->string('label' , 200);
            $table->mediumText('description')->nullable();
            $table->bigInteger('thirdparty_id')->unsigned()->nullable();
            $table->bigInteger('operation_type_id')->unsigned()->nullable();
            $table->bigInteger('operation_status_id')->unsigned()->nullable();
            $table->mediumText('comment')->nullable();
            $table->bigInteger('recurring_id')->unsigned()->default(1)->nullable()
                ->comment('Allow to choose how an operation is recurring (default on 1 mean unique)');
            $table->tinyInteger('recurring_x_days_interval', false , true)->nullable()->comment('min:1 , max: 365 days');
            $table->tinyInteger('recurring_j_day_of_the_month', false , true)->nullable()->comment('must be from 1 to 31');
            $table->tinyInteger('recurring_n_months_interval', false , true)->nullable()->comment(' from 1 to 48 months');
            $table->boolean('is_reconciliated')->default(false);
            $table->boolean('is_forecast')->nullable()
                ->comment('Indicate if this operation is forecast or theoric or prevision == didnt really happen.');
            $table->bigInteger('source_operation_id')->unsigned()->nullable()
                ->comment('When an operation is a copy from another');
            $table->timestamps();
        });

        Schema::table('operations', function(Blueprint $table) {
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('operation_category_id')->references('id')->on('operation_categories')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('thirdparty_id')->references('id')->on('thirdparties')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('operation_type_id')->references('id')->on('thirdparty_comments')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('operation_status_id')->references('id')->on('operation_statuses')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('recurring_id')->references('id')->on('operation_recurrings')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('source_operation_id')->references('id')->on('operations')
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
        Schema::dropIfExists('operations');
    }
};
