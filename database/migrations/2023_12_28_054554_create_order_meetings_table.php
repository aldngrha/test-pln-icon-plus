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
        Schema::create('order_meetings', function (Blueprint $table) {
            $table->id();
            $table->integer('meeting_room_id');
            $table->integer('user_id');
            $table->date('meeting date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('type_of_consumtion', ["Snack Pagi", "Makan Siang", "Snack Siang"]);
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
        Schema::dropIfExists('order_meetings');
    }
};
