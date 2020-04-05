<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('type',['series','tv show']);
            $table->enum('airing_time_from',['saturday','sunday','monday','tuesday','wednesday','thursday','friday']);
            $table->enum('airing_time_to',['saturday','sunday','monday','tuesday','wednesday','thursday','friday']);
            $table->time('airing_time_hour');
            $table->string('logo')->default('logo-default');
            $table->string('cover_photo')->default('cover-photo-default');
            $table->string('image')->default('image-default');
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
        Schema::dropIfExists('series');
    }
}
