<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Places extends Migration
{
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->integer('responsible_id')->unsigned();

            $table->foreign('responsible_id')->references('id')->on('responsibles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->string('name');
            // $table->text('description')->nullable();
            // $table->string('image_path')->nullable();

            $table->string('condition');
            $table->string('type');
            $table->float('area')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('suites')->nullable();
            $table->integer('vacancies')->nullable();
            $table->integer('walk')->nullable();
            $table->float('rentValue');
            $table->string('condominium')->nullable();
            $table->float('iptu')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('places');
    }
}
