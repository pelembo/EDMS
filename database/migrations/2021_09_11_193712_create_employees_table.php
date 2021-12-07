<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_code');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('gender');
            $table->date('birth_date');
            $table->integer('marital_status');
            $table->integer('state_of_origin')->unsigned();
            $table->string('email');
            $table->string('phone_number');
            $table->integer('workgroup_id')->unsigned();
            $table->integer('status');
            $table->integer('created_by')->nullable()->unsigned();
            $table->integer('updated_by')->nullable()->unsigned();
            $table->integer('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('state_of_origin')->references('id')->on('states');
            // $table->foreign('created_by')->references('id')->on('users');
            // $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
