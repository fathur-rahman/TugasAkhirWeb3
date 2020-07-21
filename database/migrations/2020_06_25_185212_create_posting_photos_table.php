<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posting_photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('caption');
            $table->bigInteger('posting_id')->unsigned()->index;

            $table->foreign('posting_id')->references('id')->on('postings');
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
        Schema::dropIfExists('posting_photos');
    }
}
