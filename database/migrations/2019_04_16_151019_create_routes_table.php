<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("type");#flight or bus
            $table->string("name")->nullable();
            $table->unsignedBigInteger("travel_firm_id");
            $table->unsignedBigInteger("from");
            $table->unsignedBigInteger("to");
            $table->double("price");
            $table->boolean("status")->default(false);
            $table->binary("image")->nullable();
            $table->timestamps();

            $table->foreign('from')
                ->references('id')
                ->on('towns')
                ->onDelete('cascade');

            $table->foreign('to')
                ->references('id')
                ->on('towns')
                ->onDelete('cascade');

            $table->foreign('travel_firm_id')
                ->references('id')
                ->on('travel_firms')
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
        Schema::dropIfExists('routes');
    }
}
