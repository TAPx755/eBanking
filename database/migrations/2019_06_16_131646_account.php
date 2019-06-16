<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('acc_IBAN')->unique();
            $table->string('acc_BIC')->unique();
            $table->integer('acc_verfueger')->unique();
            $table->double('acc_kontostand');
            $table->string('acc_einzahlungen');
            $table->string('acc_auszahlungen');
            $table->timestamps();
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
