<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->dateTime('created_at')->useCurrent(true);
            $table->integer('sort')->default(100);
            $table->string('name', 100);
            $table->text('short_description')->nullable(true);
            $table->text('full_description')->nullable(true);
            $table->integer('preview_image')->nullable(true);
            $table->integer('detail_image')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
