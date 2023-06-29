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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->string('image')->nullable();
            $table->string('first_title');
            $table->string('first_content');
            $table->string('second_title');
            $table->string('second_content');
            $table->string('third_title');
            $table->string('third_content');
            $table->string('fourth_title');
            $table->string('fourth_content');
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
        Schema::dropIfExists('about_us');
    }
};
