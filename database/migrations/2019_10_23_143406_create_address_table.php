<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userid');
            $table->string('type');
            $table->string('houseno');
            $table->string('line1');
            $table->string('line2');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('pincode');
            $table->string('mobileno');
            $table->string('altmobileno')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('address');
    }

}
