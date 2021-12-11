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
            $table->unsignedBigInteger('id_question')->primary();
            $table->foreignId('id_level')
                ->references('id_level')
                ->on('levels')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->text('pertanyaan_kalimat');
            $table->text('pertanyaan_path_gambar');
            $table->text('kunci_jawaban');
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
        Schema::dropIfExists('sej12_questions');
    }
}
