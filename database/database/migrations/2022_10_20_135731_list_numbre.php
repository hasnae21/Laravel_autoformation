<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    // Schema::create('categories', function (Blueprint $table) {
    //     $table->increments("id_categorie");
    //     $table->string('nom_categorie')->nullable();
    //     $table->string('description_categorie')->nullable();
    //     $table->string('photo_categorie')->nullable();
    //     $table->timestamps();

    // });
    // Schema::create('categories_exerices', function (Blueprint $table) {
    //     $table->increments("id_categorie_exercice");
    //     $table->string('nom_categorie_exercice')->nullable();
    //     $table->string('photo_categorie_exercice')->nullable();
    //     $table->timestamps();

    // });
    // Schema::create('exercices', function (Blueprint $table) {
    //     $table->increments("id_exercice")->nullable();
    //     $table->string('nom_exercice')->nullable();
    //     $table->unsignedInteger('categorie_exercice')->nullable();
    //     $table->string('description_exercice')->nullable();
    //     $table->string('repetition_exercice')->nullable();
    //     $table->string('photo_exercice')->nullable();
    //     $table->foreign('categorie_exercice')
    //     ->references('id_categorie_exercice')
    //     ->on('categories_exerices')
    //     ->onDelete('cascade');
    //     $table->timestamps();

    // });

    // Schema::create('jours', function (Blueprint $table) {
    //     $table->increments("id_jour")->nullable();
    //     $table->string('jour')->nullable();        
    //     $table->string('description_jour')->nullable();        
    //     $table->timestamps();
       
       

    // });
    // Schema::create('exercices_de_jours', function (Blueprint $table) {
    //     $table->string('id_programme')->nullable();        
    //     $table->unsignedInteger("categorie_id")->nullable();     
    //     $table->unsignedInteger("jour_id")->nullable();
    //     $table->unsignedInteger("exercice_id")->nullable();
    //     $table->timestamps();
    //     $table->foreign('categorie_id')
    //     ->references('id_categorie')
    //     ->on('categories')
    //     ->onDelete('cascade');
    //     $table->foreign('jour_id')
    //     ->references('id_jour')
    //     ->on('jours')
    //     ->onDelete('cascade');
    //     $table->foreign('exercice_id')
    //     ->references('id_exercice')
    //     ->on('exercices')
    //     ->onDelete('cascade');
    // });
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Telephone', function (Blueprint $table) {
            
            $table->increments('id_phone');
            $table->string('Phone')->nullable();
             
                });

                Schema::create('ContactPerson', function (Blueprint $table) {
                        $table->increments("id");
                        $table->string('Nom')->nullable();
                        $table->unsignedInteger('Phone')->nullable();
                        $table->foreign('Phone')
                        ->references('id_phone')
                        ->on('Telephone')
                        ->onDelete('cascade');
                    });
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
};
