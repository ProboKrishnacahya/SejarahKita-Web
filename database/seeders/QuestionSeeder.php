<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
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
        //* Casual
        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Kelompok yang melancarkan propaganda anti pemerintah, memprovokasi para buruh untuk melakukan mogok kerja, dan melakukan pembunuhan - pembunuhan khususnya di Madiun adalah kelompok..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Amir Muso',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Pada tanggal berapa Peristiwa G30S PKI terjadi?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '30 September 1965',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'PKI menyambut “Demokrasi Terpimpin” Sukarno dengan hangat dan anggapan bahwa dia mempunyai mandat untuk persekutuan Konsepsi yaitu antara Nasionalis, Agama dan Komunis yang dinamakan..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'NASAKOM',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Kesatuan pasukan gabungan TNI Angkatan Darat, Angkatan Laut, Angkatan Udara dan Kepolisian yang bertugas khusus menjaga keamanan Presiden RI pada zaman pemerintahan Presiden Soekarno adalah Resimen..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Cakrabirawa',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Salah satu peristiwa penting pada tahun 1949 yang meninggalkan bekas dalam catatan sejarah negeri ini adalah berdirinya..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Negara Islam Indonesia',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Siapakah pemimpin Operasi Gerakan Banteng Negara ke-1?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Letkol Sarbini',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Penurunan status Aceh dari Daerah Istimewa menjadi bagian Provinsi Sumatera Utara turut menurunkan jabatan Daud Beureueh sebagai..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Gubernur Militer',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Pemberontakan DI/TII di Sulawesi Selatan yang dipimpin Letnan Kolonel Kahar Muzakkar dilatarbelakangi perbedaan cara pandang antara pemerintah dengan Kahar Muzakar. Hal ini berkaitan dengan dukungan KGSS terhadap kebijakan..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Rera',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Siapakah mantan Jaksa yang mempertahankan berdirinya negara federal dan RIS pada tahun 1950?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Soumokil',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Siapakah yang memimpin pemberontakan APRA?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Westerling',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Rapat (pertemuan untuk berunding atau bertukar pendapat) mengenai suatu masalah yang dihadapi bersama disebut..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Konferensi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Paham (ajaran) untuk mencintai bangsa dan negara sendiri disebut sebagai..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Nasionalisme',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Nama organisasi semi militer yang dibentuk pada 3 April 1944 dengan tugas mengembalikan pemerintahan sipil dan hukum pemerintah kolonial Hindia Belanda selepas kapitulasi pasukan pendudukan Jepang di wilayah Hindia Belanda seusai Perang Dunia II yaitu Pasukan..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'NICA',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Sebuah pidato formal atau komunikasi oral formal yang disampaikan kepada khalayak ramai disebut..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Orasi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Orang yang menonjol karena keberanian dan pengorbanannya dalam membela kebenaran; pejuang yang gagah berani disebut sebagai..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Pahlawan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Sikap yang berani, pantang menyerah, dan rela berkorban demi bangsa dan negara adalah..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Patriotisme',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Kemampuan yang mempunyai kemungkinan untuk dikembangkan, kekuatan, kesanggupan, dan daya disebut..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Potensi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Sebagai salah satu pahlawan wanita, sangat berjasa dalam memperjuangkan kesetaraan hak kaum perempuan semasa hidupnya. Latar belakang bangsawan tak membuatnya tunduk kepada para penguasa yang konservatif. Beliau adalah..',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'R.A. Kartini',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Operasi ini merupakan upaya Indonesia membebaskan Irian Barat (Papua) dari Belanda. Sejarah mencatat bahwa Presiden Soekarno mengumumkan seruan operasi ini dalam pidatonya pada 19 Desember 1961 di Yogyakarta. Operasi apakah yang dimaksud?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Trikora',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 1,
            'pertanyaan_kalimat' => 'Tokoh ini lahir di Bonjol, Pasaman, Sumatera Barat, Indonesia 1 Januari 1772 dan wafat dalam pengasingan dan dimakamkan di Lotta, Pineleng, Minahasa, 6 November 1864. Beliau merupakan seorang ulama yang berjuang melawan Belanda dalam peperangan yang dikenal dengan nama Perang Padri tahun 1803-1838. Wajahnya tercetak pada uang lembar 5000 Rupiah yang diterbitkan pada 6 November 2001. Siapakah Beliau?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Imam Bonjol',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        //* Easy
        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Partai politik pertama yang didirikan sesudah proklamasi adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Partai Komunis Indonesia',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Siapakah nama Gubernur yang gugur di Sungai Kakah dan namanya juga ditulis di tugu peringatan?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Soerjo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Perjanjian yang dilaksanakan pada 17 Januari 1948 dan dinilai sangat merugikan bangsa Indonesia yang baru merdeka karena wilayah Indonesia semakin sempit adalah perjanjian?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Renville',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Siapakah tokoh dalam sidang Politbiro PKI pada 13-14 Agustus 1948 yang menawarkan resolusi dengan sebutan “Jalan Baru untuk Republik Indonesia”?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Muso',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Pada tgl berapa Muso memproklamasikan Republik Soviet Indonesia?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '18 September 1948',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Pada awal pemberontakan PKI membantai rakyat dan tentara dan kaum santri yang melihat sepak terjang PKI yang sangat membahayakan khususnya bagi?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'NKRI',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Siapakah nama Jenderal yang ditugaskan Presiden Soekarno untuk menumpas pemberontakan PKI di Madiun adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Soedirman',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Peristiwa yang biasanya disebut dengan Gerakan 30 September yang merupakan salah satu peristiwa pemberontakan komunis yang terjadi pada bulan September sesudah beberapa tahun Indonesia merdeka adalah peristiwa?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'G30S/PKI',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Sebuah konflik kekerasan yang terjadi di Jawa Timur bulan September - Desember 1948. Peristiwa ini diawali dengan diproklamasikannya negara Soviet Republik Indonesia pada tanggal 18 September 1948 di Madiun oleh Muso, seorang tokoh Partai Komunis Indonesia yang didukung oleh Front demokrasi rakyat yang dibentuk oleh mantan Perdana Menteri Amir Syarifudin adalah peristiwa?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Madiun',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Siapakah nama ajudan yang melindungi Jenderal Nasution pada tragedi G30S/PKI?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Pierre Tendean',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Penolakan rencana pembentukan angkatan ke 5 yang dikemukakan oleh?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'PKI',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Setelah pembantaian 7 jenderal dalam gerakan 30 september jasad dari jendral tersebut dimasukan ke dalam?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Lubang Buaya',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Gerakan yang terjadi tanggal 30 September 1965 menimbulkan perubahan yang besar pada keberlangsungan Negara Indonesia. Salah satu dampak yang timbul dari gerakan tersebut adalah Munculnya Trikora dari?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Masyarakat',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tujuan utama G30S/PKI adalah untuk menggulingkan pemerintahan?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Soekarno',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Setelah bergabung dengan Kartosuwiryo, Amir Fatah kemudian diangkat sebagai komandan pertempuran Jawa Tengah dengan pangkat Mayor Jenderal Tentara Islam Indonesia. Untuk menghancurkan gerakan ini, Januari 1950 dibentuk Komando?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Gita Bahana Nusantara',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Organisasi yang berjuang atas nama Umat Islam yang ada di seluruh Indonesia adalah gerakan?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'DI/TII',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Gerakan DI/TII yang terjadi di masing-masing daerah mempunyai latar belakang yang berbeda-beda namun pemberontakan ini mempunyai tujuan yang dengan mendirikan negara Islam Indonesia di?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'NKRI',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Pemberontakan yang menjadi tragedi politik dan ideologi nasional, tepatnya di masa perjuangan Republik Indonesia dalam mempertahankan kemerdekaan adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'APRA',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Munculnya pemberontakan PRRI dan Permesta bermula dari adanya persoalan di dalam tubuh?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Angkatan Darat',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Bangsa Indonesia yang berbentuk negara kepulauan jika terdapat perbedaan ideologi, ketimpangan demografi, dan iklim politik yang buruk dapat berpotensi sebagai faktor terjadinya?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Disintegrasi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tokoh pejuang yang berperan dalam mempertahankan NKRI, beliau memimpin pemberontakan rakyat Biak pada maret 1948 untuk melawan pemerintah Hindia Belanda?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/92NdHZDcKFPb4GmUwGDjH9xOgn8UY7g0OOGY51Mr.jpg',
            'kunci_jawaban' => 'Frans Kaisiepo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tokoh pejuang yang berperan dalam mempertahankan NKRI, Laksamana Madya TNI bertugas di angkatan laut pada dua zaman. Ia bertugas sejak masa Pendudukan Jepang dan masa kemerdekaan. Beliau wafat dalam pertempuran di Laut Aru tanggal 15 Januari 1962. Ia meninggal ketika melaksanakan operasi rahasia untuk menyusupkan sukarelawan ke Irian menggunakan KRI Macan Tutul?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/D1RYHUX2sc4BonhDjiIr672dNkWWXY5cuN8n60JA.jpg',
            'kunci_jawaban' => 'Yos Sudarso',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tokoh intelektual karismatik yang terlibat dalam peristiwa-peristiwa penting dalam sejarah Indonesia. Menjadi proklamator kemerdekaan Indonesia bersama Mohammad Hatta pada tanggal 17 Agustus 1945?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/aUqKt8i1YFl3QARZ2g4KP6BJb95QQe9blkR7VvmB.jpg',
            'kunci_jawaban' => 'Soekarno',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Salah satu seorang pahlawan nasional yang berperan besar dalam proklamasi kemerdekaan Indonesia. Beliau bersama dengan Soekarno berperan penting dalam kemerdekaan republik Indonesia dari penjajahan Hindia Belanda dan kemudian memproklamasikan kemerdekaan Republik Indonesia pada tanggal 17 Agustus 1945?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/KFcL3Z2euQnljwIpwK8XMvsFP5uO2lG8xQlOzwhY.jpg',
            'kunci_jawaban' => 'Mohammad Hatta',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Jenderal yang memimpin pasukan untuk mengusir Sekutu dari Ambarawa. Pada saat terjadi Agresi Militer Belanda II, Jenderal Sudirman memimpin langsung pasukannya bergerilya melawan Belanda?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/INlY0tqRgEt9IHNPJTCZNCsxnTBew1jkLlWBTSQz.jpg',
            'kunci_jawaban' => 'Soedirman',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Sejarah mencatat, arek-arek Suroboyo telah berperan penting dalam mengusir penjajah dari Tanah Air. Peristiwa itu terjadi pada 10 November 1945 atau yang kemudian diabadikan menjadi Hari Pahlawan. Menyebut Hari Pahlawan, memori bangsa teringat dengan aksi heroik beliau dalam pertempuran di Surabaya melawan pasukan Inggris dan NICA-Belanda. Siapakah beliau?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Bung Tomo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Rasa cinta tanah air adalah faktor pendorong yang sangat kuat bagi para tokoh pejuang dalam mempertahankan kemerdekaan. Nilai cinta tanah air yang ditunjukkan oleh para tokoh dapat menimbulkan semangat?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Patriotisme',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Pada Tanggal 17 Agustus 1950, Indonesia kembali ke Negara Kesatuan Republik Indonesia yang sebelumnya berbentuk RIS. Hal ini membuktikan bahwa para pemimpin kita memiliki nilai persatuan dan?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Kesatuan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Untuk mengenang jasanya tokoh daerah ini kemudian namanya diabadikan sebagai nama Bandar Udara di Biak. Selain itu namanya juga di abadikan di salah satu KRI dan Pada tanggal 19 Desember 2016, ia diabadikan dalam uang kertas Rupiah baru pada pecahan Rp. 10.000. Tokoh yang dimaksud adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Frans Kaisiepo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tokoh ini adalah pahlawan yang berjuang untuk Maluku melawan VOC Belanda. Kedatangan kembali kolonial Belanda pada tahun 1817 mendapat tantangan keras dari rakyat. Hal ini disebabkan karena kondisi politik, ekonomi, dan hubungan kemasyarakatan yang buruk selama dua abad. Rakyat Maluku akhirnya bangkit mengangkat senjata di bawah pimpinan Beliau. Siapakah tokoh pahlawan yang dimaksud?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Pattimura',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Semua tindakan atau perilaku, baik secara fisik maupun verbal, yang dilakukan secara sengaja dan terencana dengan tujuan untuk menyakiti, merusak, menyengsarakan orang lain (individu maupun kelompok manusia)?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Agresi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Perwakilan atau utusan dengan proses penunjukan secara langsung maupun secara musyawarah untuk mengutusnya menjadi salah satu perwakilan suatu kelompok atau lembaga disebut?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Delegasi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Seni dan praktik bernegosiasi oleh seseorang (diplomat) yang biasanya mewakili sebuah negara atau organisasi disebut?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Diplomasi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Sebuah istilah mengenai pendapat atau tafsiran pada suatu masalah yang berkaitan dengan hukum Islam adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Fatwa',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Pengadaan, perawatan, distribusi, dan penyediaan (untuk mengganti) perlengkapan, perbekalan, dan ketenagaan disebut?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Logistik',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tradisi masyarakat di Bali, Indonesia yang berupa tindakan perlawanan bersenjata habis-habisan sampai mati demi kehormatan tanah air?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Puputan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Saat Indonesia merdeka, masih ada kerajaan-kerajaan yang berdaulat. Diantara para penguasa kerajaan-kerajaan tersebut ada yang lebih memilih untuk meleburkan kerajaan mereka ke dalam negara Republik Indonesia. Berada di daerah Pontianak, Kerajaan ini bernama?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Siak',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Pahlawan nasional wanita lahir dari keluarga priyayi Sunda pada tanggal 4 Desember 1884, ia bersikukuh untuk membuka Sekolah Istri atau sekolah perempuan pertama se-Hindia Belanda. Semangat Beliau dibuktikan dengan para perempuan lulusan sekolahnya yang memiliki kesamaan dalam kemampuan perempuan dengan laki-laki. Berkat jasanya dalam bidang pendidikan, Beliau mendapatkan bintang jasa oleh Pemerintah Hindia Belanda. Dan, pada 1 Desember 1966, ia diakui sebagai Pahlawan Nasional. Beliau adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Dewi Sartika',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Dalam pelaksanaan kongres Pemuda Kedua pada 27-28 Oktober 1928, Beliau ikut terlibat. Untuk pertama kalinya ia memperdengarkan lagu Indonesia Raya dengan iringan gesekan biolanya di depan seluruh peserta kongres sebelum dibacakannya Putusan Kongres Pemuda yang dikenal sebagai Sumpah Pemuda. Siapakah tokoh ini?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'W.R. Supratman',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 2,
            'pertanyaan_kalimat' => 'Tokoh ini adalah perintis Revolusi Kemerdekaan Indonesia. Beliau juga dikenal sebagai salah satu tokoh dari organisasi Kaoem Betawi yang pertama kali menjadi anggota Dewan Rakyat di Hindia Belanda, yang mewakili kelompok pribumi. Gambar Beliau juga akan terpampang di uang rupiah baru pecahan Rp2.000 kertas. Beliau adalah Mohammad Hoesni ...',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Thamrin',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        //* Hard
        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Peristiwa yang kelam dengan terenggutnya banyak nyawa terutama dari kaum Ulama adalah peristiwa?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'PKI 48',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Operasi penumpasan G30S/PKI dimulai sejak tanggal 1 Oktober 1965 sore hari. Gedung RRI pusat dan kantor pusat Telekomunikasi dapat direbut kembali tanpa pertumpahan darah oleh satuan RPKAD di bawah pimpinan Kolonel?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Sarwo Edhi Wibowo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Dikemukakan antara lain oleh John D. Legge, teori ini menyatakan bahwa tidak ada dalang tunggal dan tidak ada skenario besar dalam G30S. Kejadian ini hanya merupakan hasil dari perpaduan antara, seperti yang disebut Soekarno: “unsur-unsur Nekolim (negara Barat), pimpinan PKI yang keblinger serta oknum-oknum ABRI yang tidak benar”. Semuanya pecah dalam improvisasi di lapangan adalah teori?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Chaos',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Gerakan yang tujuan utamanya untuk menurunkan (mengkudeta) presiden RI pertama, Soekarno agar dapat menguasai Indonesia dan mengubah Indonesia menjadi negara komunis?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'G30S/PKI',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Dalam gerakan 30 september terdapat tujuh target yang merupakan jenderal TNI. Ketujuhnya yakni Ahmad Yani, M.T. Haryono, D.I. Panjaitan, Soeprapto, S. Parman, Sutoyo, dan target utamanya adalah Jendral?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Abdul Haris Nasution',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapakah nama pemimpin PKI pada saat terjadinya peristiwa G30S/PKI?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Dipa Nusantara Aidit',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Kapankah dilaksanakannya rapat terakhir PKI?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '29 september 1965',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapakah yang mendirikan Negara Islam Indonesia?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Kartosuwiryo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'NII juga dikenal dengan nama Darul Islam yang artinya adalah “Rumah Islam” adalah gerakan politik yang didirikan pada?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '7 Agustus 1949',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapakah nama komandan Laskar Hizbullah di daerah Tulangan, Sidoarjo, dan Mojokerto di Jawa Timur pada Pertempuran 10 November 1945?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Amir Fatah',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Upaya pemerintah dilakukan melalui jalan kooperatif antara lain dengan membuka dialog antara M. Hatta dengan kelompok?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Daud Beureuh',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapa pemimpin DI/TII Kalimantan Selatan?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Ibnu Hajar',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Upaya pemerintah dilakukan melalui jalan kooperatif antara lain dengan membuka dialog antara M Hatta dengan kelompok daud Beureuh dan selanjutnya ditindaklanjtuo dengan menyelenggarakan kerukunan Rakyat Aceh pada tanggal 17-28 Desember 1962 Hasil keputusan dalam musyawarah tersebut dituangkan dalam Keputusan Perdana Menteri RI No.1/ Misi/ 1959 tanggal?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '26 Mei 1959',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapa pemimpin DI/TII Aceh?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Daud Beareuh',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapa Pemimpin DI/TII Sulawesi Selatan?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Kahar Muzakkar',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Penghimpunan pasukan yang dilakukan dengan memanfaatkan kepercayaan rakyat pada suatu ramalan dimanfaatkan oleh kelompok yang dipimpin oleh?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Westerling',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapakah yang memproklamirkan berdirinya Republik Maluku Selatan pada tanggal 25 April 1950?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Christian Robert Soumokil',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Pada tanggal berapa pemberontakan APRA terjadi?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '23 Januari 1950',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Pada tanggal berapa peristiwa Andi Aziz terjadi?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '15 April 1950',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Pada tgl berapa PRRI berdiri?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => '15 Februari 1958',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh pejuang yang berperan dalam mempertahankan NKRI, menyatakan Kesultanan Yogyakarta sebagai bagian dari RI (dalam Amanat 5 September 1945). Sebelumnya, Belanda menawarkan beliau menjadi Raja Jawa jika tidak bergabung dengan RI. Beliau adalah Sultan ...',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/UaiDW5T5bysx7X2my0bDUtNRg6dZ5u2WVtfthAmM.jpg',
            'kunci_jawaban' => 'Hamengkubowono IX',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh pejuang yang berperan dalam mempertahankan NKRI, namun bukan dari kalangan tentara dan sipil melainkan tokoh ulama. Beliau mengumandangkan Resolusi Jihad di pertemuan wakil-wakil cabang NU (Jawa dan Madura) di Surabaya pada 22 Oktober 1945?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/XlcJaQPD40wkNt16qPJqJIRT51lBwZXwlAeSHniT.jpg',
            'kunci_jawaban' => 'Hasyim Asyari',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh pejuang yang berperan dalam mempertahankan NKRI, Jenderal TNI (Purn.), Beliau lahir di Sumpiuh, Banyumas, Jawa Tengah, 10 Oktober 1907. Beliau juga dikenal sebagai tentara yang aktif di tiga zaman. Tokoh ini juga pernah menjadi Tentara Hindia Belanda (KNIL), pada masa pendudukan Jepang, dan pasca Indonesia merdeka beliau berperan dalam menumpas pemberontakan PKI?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/qmsOboMISVe3ekBULPRl2epAjVNNSAFIHh8bEtHr.jpg',
            'kunci_jawaban' => 'Gatot Soebroto',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Dikenal sebagai seorang diplomat dan salah satu pemimpin Indonesia di perang kemerdekaan Indonesia. Beliau juga sangat berjasa dalam memperjuangkan pengakuan Indonesia di dunia melalui sejumlah perjanjian dan konferensi?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/0m9xQ9ulzKY9sLi7yvWCcM4SFJ09DXOWvuiqaT91.jpg',
            'kunci_jawaban' => 'Mohammad Roem',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Beliau lahir pada tanggal 19 Juni 1922 di Jenar, Purworejo, Jawa Tengah. Beliau mengawali karir militernya dengan pangkat Sersan dengan mengikuti pendidikan militer pada Dinas Topografi Militer di Malang dan secara lebih intensif di Bogor. Prestasi telah diraihnya di masa perang kemerdekaan. Beliau juga berhasil menyita senjata Jepang di Magelang. Setelah Tentara Keamanan Rakyat (TKR) terbentuk, Dia diangkat menjadi Komandan TKR Purwokerto?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/qZG5eM6m1GO53x5uiHSvG5H95dFGxHVkcJ3n28qu.png',
            'kunci_jawaban' => 'Ahmad Yani',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Lagu-lagu buatan beliau yang sarat dengan nilai-nilai perjuangan yang menggugah rasa kecintaan terhadap tanah air dan bangsa, antara lain Halo-Halo Bandung (1946) yang diciptakan ketika terjadi peristiwa Bandung Lautan Api, Selendang Sutera (1946) yang diciptakan pada saat revolusi kemerdekaan untuk membangkitkan semangat juang pada waktu itu dan Sepasang Mata Bola (1946) yang menggambarkan harapan rakyat untuk merdeka. Siapakah beliau?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/APWInbOuxDDsG0da8nHq9l500388z4HiJ6A2e7WO.jpg',
            'kunci_jawaban' => 'Ismail Marzuki',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh ini membentuk Komite Nasional Indonesia di Siak, Tentara Keamanan Rakyat (TKR) dan Barisan Pemuda Republik. Ia juga segera mengadakan rapat umum di istana serta mengibarkan bendera Merah-Putih, dan mengajak raja-raja di Sumatera Timur lainnya agar turut memihak republik. Beliau adalah Sultan ….. II?',
            'pertanyaan_path_gambar' => 'pertanyaan_path_gambar/LRO5XkmtM7ccfiS4O8CftCxvQIl6paKc2W2K1tdd.jpg',
            'kunci_jawaban' => 'Syarif Kasim',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Pahlawan asal Bali yang berjasa besar dalam perjuangan mengusir penjajah Belanda dari Indonesia. Bergelar kolonel di angkatan tentara Indonesia. Beliau memimpin resimen Ciung Wanara dalam melumpuhkan Netherlands-Indies Civil Administration (NICA)?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'I Gusti Ngurah Rai',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh ini membentuk Komite Indonesia Merdeka (KIM) hanya sekitar sebulan setelah Indonesia merdeka. Tujuan KIM yang dibentuk pada bulan September 1945 ini adalah untuk menghimpun kekuatan dan mengatur gerak langkah perjuangan dalam membela dan mempertahankan proklamasi 17 Agustus 1945. Beliau juga berusaha keras agar Papua menjadi bagian dari Republik Indonesia. Tahun 1962 ia mewakili Irian Barat duduk sebagai anggota delegasi RI dalam Perundingan New York antara Indonesia-Belanda?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Silas Papare',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh ini adalah seorang anggota polisi Hindia Belanda sebelum Jepang masuk ke Indonesia. Namun jabatan ini bukan berarti melunturkan sikap nasionalismenya. Sejak tahun 1946 Beliau menjadi Ketua Partai Indonesia Merdeka (PIM). Ia lalu memimpin sebuah aksi protes yang didukung delegasi 12 Kepala Suku terhadap keinginan Belanda yang ingin memisahkan Papua dari Indonesia ...',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Marthen Indey',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Dalam upaya mempertahankan kemerdekaan Indonesia, Jenderal Soedirman walaupun dalam keadaan sakit tetap berjuang memimpin perang gerilya, dengan satu paru-paru yang berfungsi . Sikap yang ditunjukkan oleh tokoh nasional Jenderal Soedirman lebih mencerminkan nilai ...',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Rela Berkorban',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Sebagai warga negara Indonesia kita kita harus dapat mengimplementasikan nilai nilai perjuangan para tokoh dalam mempertahankan keutuhan negara dan bangsa Indonesia dengan berupaya mengisi kemerdekaan sesuai dengan beban tugas, potensi dan kemampuan yang kita miliki. Hal ini mencerminkan nilai ...',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Tanggung Jawab',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Siapakah tokoh pada uang kertas pecahan Rp 20.000,00 baru yang didominasi warna hijau, menampilkan sosok Gerungan yang dimana beliau seorang politikus, penulis dan guru dari Sulawesi Utara. Beliau juga mendapatkan gelar doktor (Ph.D) nya di Zurich, Swiss dan satu almamater dengan Albert Einstein?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Sam Ratulangi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Pangeran ini berperan besar dalam memimpin Perang Jawa yang terjadi dalam kurun waktu lima tahun, yaitu pada tahun 1825 hingga 1830. Walaupun berakhir dengan kemenangan Belanda, Beliau sempat membuat Belanda mengalami kesulitan dan kerugian akibat gugurnya ribuan serdadu Belanda. Beliau adalah Pangeran ...',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Diponegoro',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Dijuluki sebagai Ayam Jantan dari Timur, Beliau adalah salah satu pahlawan kemerdekaan Indonesia yang berasal dari Sulawesi Selatan. Setelah naik tahta menjadi sultan dari Kerajaan Gowa, ia berupaya menggabungkan kerajaan-kerajaan kecil Indonesia Timur dan memberikan perlawanan yang cukup sengit kepada pihak Kompeni Belanda. Siapakah beliau?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Sultan Hasanuddin',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Mengawali karier sebagai wartawan, pada masa mudanya Beliau sudah aktif ikut pergerakan nasional untuk memperjuangkan kemerdekaan Indonesia. Dalam perjalanan kariernya, Beliau sempat menjadi wakil presiden ke-3 sebelum menjabat sebagai ketua parlemen. Beliau juga diangkat sebagai Pahlawan Nasional pada tahun 1998 lalu. Siapakah tokoh ini?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Adam Malik',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Saat Indonesia merdeka, masih ada kerajaan-kerajaan yang berdaulat. Diantara para penguasa kerajaan-kerajaan tersebut ada yang lebih memilih untuk meleburkan kerajaan mereka ke dalam negara Republik Indonesia. Berada di daerah Yogyakarta, Kerajaan ini bernama …. Hadiningrat?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Ngayogyakarta',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Pahlawan nasional wanita lahir di Aceh tahun 1848, merupakan sosok wanita tangguh yang berani memimpin pasukan terhadap Belanda saat Perang Aceh. Penyebab Beliau ikut berperang untuk menghentikan penjajahan Belanda karena mendiang suaminya Ibrahim Lamnga yang tewas berjuang melawan Belanda. Beliau adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Cut Nyak Dhien',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh ini tergambar dalam uang rupiah pecahan Rp 5.000,00 baru. Beliau merupakan pahlawan dari Kalimantan Selatan. Ia merupakan politikus yang cukup berpengaruh. Beliau juga menjabat sebagai Wakil Perdana Menteri Indonesia pada kabinet Djuanda. Siapakah beliau?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Idham Chalid',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_questions')->insert([
            'id_level' => 3,
            'pertanyaan_kalimat' => 'Tokoh dari Pirak, Aceh Utara yang berdasarkan Surat Keputusan Presiden Nomor 107/1964 telah menetapkan beliau sebagai Pahlawan Nasional Indonesia dan wajahnya juga akan hadir di uang rupiah baru 1000 rupiah adalah?',
            'pertanyaan_path_gambar' => '-',
            'kunci_jawaban' => 'Tjut Meutia',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
