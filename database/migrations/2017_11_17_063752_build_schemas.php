<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildSchemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // // TABLENAME
        // Schema:: create('TABLENAME', function($table){
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        // });

        // ensenble
        Schema:: create('ensenble', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->bigInteger('program');
            $table->boolean('active');
        });

        // ensamble_vocalist
        Schema:: create('ensamble_vocalist', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('ensemble');
            $table->bigInteger('vocalist');
        });

        // program
        Schema:: create('program', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
        });

        // ranges
        Schema:: create('ranges', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('lowKeyNo');
            $table->integer('highKeyNo');
            $table->bigInteger('register');
            $table->bigInteger('recording');
        });

        // recordings
        Schema:: create('recordings', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('vocalist');
        });

        // vocalist
        Schema:: create('vocalist', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('given_name');
            $table->string('family_name');
            $table->bigInteger('program');
            // $table->string('external_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ensenble');
        Schema::dropIfExists('ensamble_vocalist');
        Schema::dropIfExists('program');
        Schema::dropIfExists('ranges');
        Schema::dropIfExists('recordings');
        Schema::dropIfExists('vocalist');
    }
}