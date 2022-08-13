<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_slides', function (Blueprint $table) {
            $table->id();
            $table->dateTime('created_at')->useCurrent(true);
            $table->string('name', 100);
            $table->string('button_text', 50)->default('Learn More');
            $table->text('link')->default('#');
            $table->integer('image_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('header_slides');
    }
}
