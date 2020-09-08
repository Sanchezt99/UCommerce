<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up(){
        Schema::create('Wear', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('gender');
            $table->text('color');
            $table->text('brand');
            $table->text('category');
            $table->text('type');
            $table->foreignId("idBrand")->constrained();
            $table->foreignId("id")->constrained();
            $table->timestamps();

            /*
             * Relation foring key and primary key
             * */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('Wear');
    }
}
