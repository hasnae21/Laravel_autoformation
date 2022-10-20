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
        // Schema::create('test', function (Blueprint $table) {
        //     $table->id();
        //  $table->timestamps();
        // });
        
        Schema::create('tested', function (Blueprint $table) {

            //  $table->temporary();            deleted after adding
            //  $table->bigIncrements('iid');   id with auto_increment
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('integer');
            $table->binary('photo');
            $table->foreignUuid('user_id');
            //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tested');
    }
};
