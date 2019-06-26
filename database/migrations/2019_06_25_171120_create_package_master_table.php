<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_id');
            $table->string('package_name');
            $table->string('package_description');
            $table->string('package_place');
            $table->string('package_start_date');
            $table->string('package_rate');
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
        Schema::dropIfExists('package_master');
    }
}
