<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApprenantBrief extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              Schema::create('apprenants_briefs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('briefs_id');
            $table->foreign('briefs_id')->references('id')->on('briefs')->onDelete('cascade');
            $table->unsignedBigInteger('apprenants_id');
            $table->foreign('apprenants_id')->references('id')->on('apprenants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants_briefs');
        //
    }
}
