<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('c_name');
            $table->text('b_of_company');
            $table->text('line1');
            $table->text('line2');
            $table->text('line3');
            $table->text('c_state');
            $table->text('c_city');
            $table->text('c_locality');
            $table->text('pemail');
            $table->text('pphone');
            $table->text('pdesignation');
            $table->text('kemail');
            $table->text('kphone');
            $table->text('kdesignation');
            $table->text('email');
            $table->text('phone');
            $table->text('name_entrepreneur');
            $table->text('name_director');
            $table->text('turnover');
            $table->text('key_issue');
            $table->text('meeting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('businesses');
    }
}
