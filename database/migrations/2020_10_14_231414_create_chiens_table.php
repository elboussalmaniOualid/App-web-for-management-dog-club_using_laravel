<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chiens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->text('description');
             $table->string('titre');
              $table->integer('age');
             $table->string('categorie');
             $table->float('prix');
             $table->string('imagePrincipal');
             $table->string('image2');
              $table->string('image3');
               $table->string('image4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chiens');
    }
}
