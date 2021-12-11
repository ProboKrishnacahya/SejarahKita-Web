<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej12LeaderboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej12_leaderboards', function (Blueprint $table) {
            $table->unsignedBigInteger('id_leaderboard')->primary();
            $table->integer('ranked_point');
            $table->timestamps();
        });

        Schema::table('sej12_leaderboards', function (Blueprint $table) {
            $table->foreignId('id_student')
                ->references('id')
                ->on('students')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sej12_leaderboards');
    }
}
