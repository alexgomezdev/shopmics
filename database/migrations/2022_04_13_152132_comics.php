<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('isbn')->nullable()->unique()->default(null);
            $table->integer('stock')->default(0);
            $table->timestamps();
            $table->string('ean')->nullable()->unique()->default(null);
            $table->string('issn')->nullable()->unique()->default(null);
            $table->string('upc')->nullable()->unique()->default(null);
            
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
}
