<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_code')->nullable();
            $table->integer('version')->nullable()->unsigned()->default(1);
            $table->string('title');
            $table->string('description');
            $table->json('file_upload')->nullable();
            $table->json('file_url')->nullable();
            $table->integer('created_by')->nullable()->unsigned();
            $table->integer('updated_by')->nullable()->unsigned();
            $table->integer('document_type_id')->unsigned();
            $table->integer('workgroup_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('created_by')->references('id')->on('users');
            // $table->foreign('updated_by')->references('id')->on('users');
            // $table->foreign('document_type_id')->references('id')->on('document_types');
            // $table->foreign('workgroup_id')->references('id')->on('workgroups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documents');
    }
}
