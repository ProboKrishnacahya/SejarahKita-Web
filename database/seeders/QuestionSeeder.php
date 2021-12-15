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
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Kelompok yang melancarkan propaganda anti pemerintah, memprovokasi para buruh untuk melakukan mogok kerja, dan melakukan pembunuhan - pembunuhan khususnya di madiun adalah kelompok..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Amir Muso',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 2,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Pada tanggal berapa Peristiwa G30S PKI terjadi?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '30 September 1965',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 3,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'PKI menyambut “Demokrasi Terpimpin” Sukarno dengan hangat dan anggapan bahwa dia mempunyai mandat untuk persekutuan Konsepsi yaitu antara Nasionalis, Agama dan Komunis yang dinamakan..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'NASAKOM',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 4,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Kesatuan pasukan gabungan TNI Angkatan Darat, Angkatan Laut, Angkatan Udara dan Kepolisian yang bertugas khusus menjaga keamanan Presiden RI pada zaman pemerintahan Presiden Soekarno adalah Resimen..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Cakrabirawa',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 5,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Salah satu peristiwa penting pada tahun 1949 yang meninggalkan bekas dalam catatan sejarah negeri ini adalah berdirinya..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Negara Islam Indonesia',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 6,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Siapakah pemimpin Operasi Gerakan Banteng Negara ke-1?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Letkol Sarbini',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 7,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Penurunan status Aceh dari Daerah Istimewa menjadi bagian Provinsi Sumatera Utara turut menurunkan jabatan Daud Beureueh sebagai..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Gubernur Militer',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 8,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Pemberontakan DI/TII di Sulawesi Selatan yang dipimpin Letnan Kolonel Kahar Muzakkar dilatarbelakangi perbedaan cara pandang antara pemerintah dengan Kahar Muzakar. Hal ini berkaitan dengan dukungan KGSS terhadap kebijakan..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Rera',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 9,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Siapakah mantan Jaksa yang mempertahankan berdirinya negara federal dan RIS pada tahun 1950?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Soumokil',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 10,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Siapakah yang memimpin pemberontakan APRA?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Westerling',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 11,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Rapat (pertemuan untuk berunding atau bertukar pendapat) mengenai suatu masalah yang dihadapi bersama disebut..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Konferensi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 12,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Paham (ajaran) untuk mencintai bangsa dan negara sendiri disebut sebagai..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Nasionalisme',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 13,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Nama organisasi semi militer yang dibentuk pada 3 April 1944 dengan tugas mengembalikan pemerintahan sipil dan hukum pemerintah kolonial Hindia Belanda selepas kapitulasi pasukan pendudukan Jepang di wilayah Hindia Belanda seusai Perang Dunia II yaitu Pasukan..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'NICA',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 14,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Sebuah pidato formal atau komunikasi oral formal yang disampaikan kepada khalayak ramai disebut..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Orasi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 15,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Orang yang menonjol karena keberanian dan pengorbanannya dalam membela kebenaran; pejuang yang gagah berani disebut sebagai..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Pahlawan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 16,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Sikap yang berani, pantang menyerah, dan rela berkorban demi bangsa dan negara adalah..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Patriotisme',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 17,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Kemampuan yang mempunyai kemungkinan untuk dikembangkan, kekuatan, kesanggupan, dan daya disebut..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Potensi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 18,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Sebagai salah satu pahlawan wanita, sangat berjasa dalam memperjuangkan kesetaraan hak kaum perempuan semasa hidupnya. Latar belakang bangsawan tak membuatnya tunduk kepada para penguasa yang konservatif. Beliau adalah..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'R.A. Kartini',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 19,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Operasi ini merupakan upaya Indonesia membebaskan Irian Barat (Papua) dari Belanda. Sejarah mencatat bahwa Presiden Soekarno mengumumkan seruan operasi ini dalam pidatonya pada 19 Desember 1961 di Yogyakarta. Operasi apakah yang dimaksud?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Trikora',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_question' => 20,
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Tokoh ini lahir di Bonjol, Pasaman, Sumatera Barat, Indonesia 1 Januari 1772 dan wafat dalam pengasingan dan dimakamkan di Lotta, Pineleng, Minahasa, 6 November 1864. Beliau merupakan seorang ulama yang berjuang melawan Belanda dalam peperangan yang dikenal dengan nama Perang Padri tahun 1803-1838. Wajahnya tercetak pada uang lembar 5000 Rupiah yang diterbitkan pada 6 November 2001. Siapakah Beliau?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Imam Bonjol',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
