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

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('category_name',50);
            $table->string('category_id',50);
            $table->string('title',50);
            $table->string('description',50);
            $table->string('date',50);
            $table->text('image');
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

        Schema::dropIfExists('blogs');
    }
};
