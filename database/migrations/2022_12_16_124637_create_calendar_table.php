<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->id();
            $table->jsonb('title')->nullable();
            $table->jsonb('description')->nullable();
            $table->datetime('event_time')->nullable();
            $table->jsonb('event_location')->nullable();
            $table->jsonb('link')->nullable();
            $table->date('published_at')->nullable();
            $table->boolean('enabled')->default(true);
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
        Schema::dropIfExists('calendar');
    }
}
