<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->dateTime('created_at')->useCurrent(true);
            $table->integer('sort')->default(10);
            $table->string('name', 100);
            $table->text('preview_text');
            $table->string('link_text', 50)->default('Learn More');
            $table->string('link')->default('#');
            $table->string('image_id')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
