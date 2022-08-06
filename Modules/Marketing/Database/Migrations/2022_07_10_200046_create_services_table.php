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
            $table->string('name');
            $table->string('slug_name');
            $table->string('logo');
            $table->string('header_image')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->default(1);
            $table->boolean('is_active')->default(1);
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('whatsapp_text')->nullable();
            $table->string('address')->nullable();
            $table->text('embed_maps')->nullable();
            $table->string('cta_heading')->nullable();
            $table->string('cta_sub_heading')->nullable();
            $table->string('cta_button_text')->nullable();
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
        Schema::dropIfExists('services');
    }
}