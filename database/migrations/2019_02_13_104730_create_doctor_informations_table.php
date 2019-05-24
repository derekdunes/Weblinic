<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_informations', function (Blueprint $table) {
            $table->increments('doctor_id');
            $table->string('username',50)->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('password',50);
            $table->string('email',50);
            $table->string('contact_number',50);
            $table->text('address');
            $table->string('qualification',50);
            $table->text('bio');
            $table->string('speciality',50);
            $table->string('location',50);
            $table->string('Fees',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_informations');
    }
}
