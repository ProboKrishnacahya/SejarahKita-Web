<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sej12_questions')->insert([
            'id_question' => 1,
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tokoh pejuang yang berperan dalam mempertahankan NKRI, beliau memimpin pemberontakan rakyat Biak pada maret 1948 untuk melawan pemerintah Hindia Belanda.',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Frans Kaisiepo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
