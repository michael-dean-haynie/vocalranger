<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefineSchemas extends Migration
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

        // ensembles
        Schema:: create('ensembles', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->bigInteger('program_id');
            $table->boolean('active');
        });

        // ensemble_vocalist
        Schema:: create('ensemble_vocalist', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('ensemble_id');
            $table->bigInteger('vocalist_id');
        });

        // password_resets
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // programs
        Schema:: create('programs', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->bigInteger('default_system_id')->nullable();
            $table->boolean('active');
        });

        // ranges
        Schema:: create('ranges', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('low_key_no');
            $table->integer('high_key_no');
            $table->bigInteger('register_id');
            $table->bigInteger('recording_id');
        });

        // recordings
        Schema:: create('recordings', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('vocalist_id');
        });

        // registers
        Schema:: create('registers', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('sex');
            $table->bigInteger('system_id');
            $table->string('color');
        });

        // systems
        Schema:: create('systems', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
        });

        // users 
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('program_id')->nullable();
            // $table->boolean('admin');
            $table->boolean('super_admin');
            $table->string('given_name');
            $table->string('family_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
        });

        // vocalists
        Schema:: create('vocalists', function($table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('given_name');
            $table->string('family_name');
            $table->string('sex');
            $table->bigInteger('program_id');
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
        Schema::dropIfExists('ensembles');
        Schema::dropIfExists('ensemble_vocalist');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('programs');
        Schema::dropIfExists('ranges');
        Schema::dropIfExists('recordings');
        Schema::dropIfExists('registers');
        Schema::dropIfExists('systems');
        Schema::dropIfExists('users');
        Schema::dropIfExists('vocalists');
    }
}