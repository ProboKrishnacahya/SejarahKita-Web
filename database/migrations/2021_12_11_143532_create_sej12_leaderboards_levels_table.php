<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej12LeaderboardsLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej12_leaderboards_levels', function (Blueprint $table) {
            $table->unsignedBigInteger('id_leaderboard_level')->primary();
            $table->timestamps();
        });

        Schema::table('sej12_leaderboards_levels', function (Blueprint $table) {
            $table->foreignId('id_leaderboard')
                ->references('id_leaderboard')
                ->on('sej12_leaderboards')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('id_level')
                ->references('id_level')
                ->on('sej12_levels')
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
        Schema::dropIfExists('sej12_leaderboards_levels');
    }
}
