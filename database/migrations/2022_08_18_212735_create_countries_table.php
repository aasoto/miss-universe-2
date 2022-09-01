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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string("code", 3);
            $table->string("name", 200);
            $table->string("iso3166_1_alpha2", 10);
            $table->string("iso3166_1_alpha3", 10);
            $table->string("iso3166_1_numeric", 10);
            $table->string("ioc", 10);
            $table->string("flips_10", 10);
            $table->string("license_plate", 10);
            $table->string("domain", 10);
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
        Schema::dropIfExists('countries');
    }
};
