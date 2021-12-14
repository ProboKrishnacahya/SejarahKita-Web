<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej12PlayingHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej12_playing_history', function (Blueprint $table) {
            $table->unsignedBigInteger('id_playing_history')->primary();
            $table->foreignId('id_student')
                ->references('id')
                ->on('students')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('id_level')
                ->references('id_level')
                ->on('sej12_levels')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
                
            $table->integer('skor')->nullable();
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
        Schema::dropIfExists('sej12_playing_history');
    }
}
