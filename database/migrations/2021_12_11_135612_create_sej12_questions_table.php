<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej12QuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej12_questions', function (Blueprint $table) {
            $table->id('id_question');
            $table->text('pertanyaan_kalimat');
            $table->text('pertanyaan_path_gambar')->nullable(true);
            $table->text('kunci_jawaban');
            $table->timestamps();
        });

        Schema::table('sej12_questions', function (Blueprint $table) {
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
        Schema::dropIfExists('sej12_questions');
    }
}
