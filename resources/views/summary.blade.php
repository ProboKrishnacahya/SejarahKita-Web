@extends('layout.sejarahKita')

@section('title', 'Summary')

@section('content')
    <div class="alert alert-primary justify-content-between pt-3 pb-2">
        <h5 class="text-center">Persiapkan diri dengan mendalami Rangkuman Materi Pembelajaran pada Bab-bab berikut:</h5>
    </div>

    <div class="d-flex pilihan-bab gap-3">
        <div class="bg-primary bg-gradient rounded-3 w-100 p-3">
            <div class="text-center">
                <i class="bi bi-check-circle fs-4"></i>
            </div>
            <br>
            {{ 'Perjuangan Bangsa Indonesia dalam Menghadapi Ancaman Disintegrasi dari Ideologi, Kepentingan, dan Sistem Pemerintahan.' }}
            <button type="button" class="btn btn-primary d-flex mx-auto mt-5 mb-2" data-bs-toggle="modal"
                data-bs-target="#bab">
                <i class="bi bi-book"></i>&emsp;{{ __('Pelajari Selengkapnya') }}
            </button>

            <div class="modal fade text-white" id="bab" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="babLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="d-flex mb-3">
                                <h5 class="modal-title" id="babLabel">Perjuangan Bangsa Indonesia dalam Menghadapi
                                    Ancaman Disintegrasi dari Ideologi, Kepentingan, dan Sistem Pemerintahan</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a class="navbar-brand" href="{{ route('user') }}">
                                    <img src="{{ url('assets/img/logo.svg') }}" alt="Logo" class="nav-logo pe-2">
                                    <span class="nav-brand">SejarahKita</span>
                                </a>
                            </div>
                            <div class="card mt-3 mb-4 px-4 pt-3 pb-4 gap-4 text-center">
                                <strong>Objek Pembahasan</strong>
                                <div class="d-flex gap-4 objek">
                                    <div class="bg-primary bg-gradient rounded w-100 p-3">Partai Komunis Indonesia (PKI)
                                        Madiun 1948 dan
                                        Gerakan 30 September Partai Komunis Indonesia (G30S PKI)</div>
                                    <div class="bg-primary bg-gradient rounded w-100 p-3">Darul Islam/Tentara Islam
                                        Indonesia (DI/TII)
                                    </div>
                                    <div class="bg-primary bg-gradient rounded w-100 p-3">Angkatan Perang Ratu Adil (APRA)
                                    </div>
                                </div>
                                <div class="d-flex gap-4 objek">
                                    <div class="bg-primary bg-gradient rounded w-100 p-3">Andi Azis</div>
                                    <div class="bg-primary bg-gradient rounded w-100 p-3">Republik Maluku Selatan (RMS)
                                    </div>
                                    <div class="bg-primary bg-gradient rounded w-100 p-3">Pemerintah Revolusioner Republik
                                        Indonesia (PRRI) dan Perjuangan Rakyat Semesta (Permesta)</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 summary">
                                    <div class="sticky-top">
                                        <div id="list-daftarIsi" class="list-group">
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-1">Definisi</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-2">Penyebab</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-3">Contoh</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-4">Dampak</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-5">Pencegahan</a>
                                        </div>
                                        <a href="{{ url('assets/pdf/Perjuangan Bangsa Indonesia dalam Menghadapi Ancaman Disintegrasi dari Ideologi, Kepentingan, dan Sistem Pemerintahan.pdf') }}"
                                            download>
                                            <button class="btn btn-primary w-100 my-5">
                                                <i class="bi bi-download"></i>&emsp;{{ __('Unduh Materi (.pdf)') }}
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9 summary">
                                    <div data-bs-spy="scroll" data-bs-target="#list-daftarIsi" data-bs-smooth-scroll="true"
                                        class="scrollspy-daftarIsi" tabindex="0">
                                        <strong id="list-item-1">Definisi</strong>
                                        <p>Menurut Kamus Besar Bahasa Indonesia, Disintegrasi adalah keadaan tidak bersatu
                                            padu; keadaan
                                            terpecah belah; hilangnya keutuhan atau persatuan; perpecahan.
                                        </p>
                                        <p>Indonesia tergolong rentan mengalami disintegrasi nasional karena masyarakatnya
                                            yang heterogen (beraneka ragam perbedaan) secara suku, ras, agama, bahasa,
                                            kebudayaan, dan aspek latar belakang lainnya berdasarkan daerah asal masyarakat.
                                            Disintegrasi sangat berbahaya karena dapat mengancam stabilitas suatu negara.
                                        </p>
                                        <hr>
                                        <strong id="list-item-2">Penyebab</strong>
                                        <p>Banyak faktor yang berpotensi memicu terjadinya disintegrasi, diantaranya yaitu:
                                        <ol>
                                            <li>Adanya serangan dari ideologi lain terhadap ideologi Pancasila yang dianut
                                                oleh Warga Negara Indonesia.</li>
                                            <li>Rendahnya rasa menghargai dan menghormati keanekaragaman perbedaan latar
                                                belakang antar masyarakat.</li>
                                            <li>Tidak ada kesadaran pada masyarakat terhadap ancaman dan gangguan dari luar
                                                negeri, misalnya terorisme ataupun masuknya budaya asing yang bertentangan
                                                dengan nilai budaya lokal.
                                            </li>
                                            <li>Ketidakpuasan karena adanya ketimpangan hasil-hasil pembangunan.</li>
                                        </ol>
                                        </p>
                                        <hr>
                                        <strong id="list-item-3">Contoh</strong>
                                        <p>Telah terjadi beberapa kasus disintegrasi pada beberapa tahun lalu, contohnya
                                            seperti:</p>
                                        <ol>
                                            <li>Partai Komunis Indonesia (PKI) Madiun 1948 dan
                                                Gerakan 30 September Partai Komunis Indonesia (G30S PKI)</li>
                                            <img src="{{ url('assets/img/PKI.jpeg') }}" alt="Andi Azis" loading="lazy"
                                                class="content-img d-block mx-auto rounded shadow-sm my-2" />
                                            <ul>
                                                <li>Latar Belakang &#8594;</li>
                                                <p>Peristiwa Partai Komunis Indonesia (PKI) Madiun 1948 merupakan
                                                    konflik kekerasan antara Front Demokrasi Rakyat (FDR) terhadap
                                                    Pemerintah Indonesia. Bermula dari pemberhentian kabinet Amir
                                                    Syarifuddin yang gagal dalam Perundingan Renville dan dibentuknya
                                                    Kabinet Mohammad Hatta. Amir Syarifuddin
                                                    yang sakit hati pun merespons dengan mendirikan FDR berisi 3 partai
                                                    besar komunis dengan tujuan menggulingkan Kabinet Mohammad Hatta.
                                                    Sedangkan, Gerakan 30 September Partai Komunis Indonesia (G30S PKI)
                                                    merupakan gerakan sabotase yang dipimpin oleh D. N. Aidit terhadap
                                                    Tentara Nasional Indonesia Angkatan
                                                    Darat (TNI-AD) dengan menculik dan membunuh 6 Jenderal dan 1 Perwira
                                                    TNI-AD, yaitu
                                                    Letnan Jenderal Anumerta Ahmad Yani, Mayor Jenderal Raden Soeprapto,
                                                    Mayor Jenderal Mas Tirtodarmo Haryono, Mayor Jenderal Siswondo Parman,
                                                    Brigadir Jenderal Donald Isaac Panjaitan, Brigadir Jenderal Sutoyo
                                                    Siswodiharjo, dan Lettu Pierre Andreas Tendean. karena
                                                    usulan pembentukan angkatan ke-5 oleh PKI ditolak.</p>
                                                <li>Tujuan &#8594;</li>
                                                <p>Pembentukan PKI Madiun 1948 ditujukan untuk mendirikan negara Republik
                                                    Indonesia Soviet, menggeser Pancasila menjadi komunis, dan mengajak para
                                                    buruh dan petani untuk mendukung aksi pemberontakan. Sedangkan, G30S PKI
                                                    bertujuan untuk mengkudeta kepemimpinan Presiden
                                                    pertama RI,
                                                    yaitu Dr. Ir. H. Soekarno agar dapat menguasai Indonesia
                                                    dan mengubahnya menjadi negara komunis.</p>
                                                <li>Tindakan Penyelesaian &#8594;</li>
                                                <p>Untuk mengatasi pemberontakan PKI Madiun 1948, Dr. Ir. H. Soekarno
                                                    meminta rakyat untuk memilih Soekarno-Hatta atau Muso-Amir. Selain itu,
                                                    adanya pengutusan Kolonel Gatot Subroto di Jawa Tengah dan Kolonel
                                                    Sungkono di Jawa Timur oleh Panglima Besar Sudirman untuk menjalankan
                                                    operasi penumpasan dengan dibantu para Santri. Akhirnya, pada 20
                                                    September 1948 dilakukan operasi penumpasan yang dipimpin oleh Jendral
                                                    Abdul Harris Nasution. Dalam operasi ini, Muso, Amir Syarifuddin, dan
                                                    para tokoh komunis lainnya dijatuhi hukuman mati. Sedangkan, untuk
                                                    mengatasi pemberontakan G30S PKI, dijalankanlah Operasi Bandar Udara
                                                    Halim Perdana Kusuma, Operasi Trisula di
                                                    Blitar Selatan, serta Operasi Kikis di perbatasan Jawa Tengah dan Jawa
                                                    Timur yang membuahkan hasil bahwa para tokoh PKI berhasil ditangkap. D.
                                                    N. Aidit juga ditemukan tewas tertembak akibat operasi tersebut. Lalu,
                                                    tokoh PKI lainnya dikenakan hukuman mati.</p>
                                            </ul>
                                            <li>Darul Islam/Tentara Islam Indonesia (DI/TII)</li>
                                            <img src="{{ url('assets/img/DI_TII.jpg') }}" alt="DI/TII" loading="lazy"
                                                class="content-img d-block mx-auto content-img d-block mx-auto rounded shadow-sm my-2" />
                                            <ul>
                                                <li>Latar Belakang &#8594;</li>
                                                <p>Di Jawa Barat, pemberontakan DI/TII dilatarbelakangi oleh kekecewaan
                                                    pasukan Hisbullah dan Fisabillilah terhadap hasil perundingan Renville
                                                    karena diperintahkan untuk hengkang dari Jawa Barat. Kemudian, di Jawa
                                                    Tengah,
                                                    dilatarbelakangi oleh keinginan untuk bergabung dengan Negara Islam
                                                    Indonesia (NII)
                                                    yang dipimpin Kartosuwiryo. Selanjutnya, di Sulawesi Selatan
                                                    dilatarbelakangi oleh kekecewaan Kahar Muzakar karena pasukannya yang
                                                    tergabung dalam
                                                    Komando Griliya tidak dimasukkan ke Angkatan Perang Republik
                                                    Indonesia (APRIS). Lalu, di Kalimantan Selatan dilatarbelakangi
                                                    oleh keinginan untuk bergabung dengan NII yang dipimpin Kartosuwiryo.
                                                    Selain itu, di Aceh dilatarbelakangi oleh
                                                    kekecewaan rakyat Aceh karena status Aceh yang diturunkan menjadi
                                                    Keresidenan dibawah Sumatera Utara.
                                                </p>
                                                <li>Tujuan &#8594;</li>
                                                <p>Di Jawa Barat, bertujuan untuk mendirikan negara dengan dasar syariat
                                                    Islam berupa Al-Qur’an dan Hadist di Indonesia, menolak Perjanjian
                                                    Renville, dan mengatasi dominasi Komunis dan Sosialis. Kemudian, di Jawa
                                                    Tengah bertujuan untuk mendirikan negara berbasis syariat Islam demi
                                                    mengatasi
                                                    komunis dan sosialisme. Selanjutnya, di Sulawesi Selatan
                                                    bertujuan untuk mengukuhkan Syariat Islam sebagai dasar negara dan tidak
                                                    dapat menerima hasil bahwa anggota Tentara Kesatuan Gerilya Sulawesi
                                                    Selatan ditolak bergabung sebagai Tentara RI. Lalu, di
                                                    Kalimantan Selatan bertujuan untuk menyalurkan aspirasi rakyat agar
                                                    diperhatikan oleh pemerintahan Orde Lama. Selain itu, di Aceh
                                                    bertujuan untuk mengembalikan Otonomi Aceh, mencegah kekuasaan
                                                    Uleebalang kembali, dan menegakkan Syariat Islam.</p>
                                                <li>Tindakan Penyelesaian &#8594;</li>
                                                <p>Di Jawa Barat, diatasi dengan Operasi Pagar Betis dengan strategi militer
                                                    yang melibatkan kekuatan rakyat. Pada Juni 1962, pasukan Divisi
                                                    Siliwangi berhasil menangkap Kartosuwiryo untuk divonis hukuman mati.
                                                    Kemudian, di Jawa
                                                    Tengah diatasi dengan pembentukan komando Operasi Militer pada Januari
                                                    1950 oleh Pemerintah, yaitu Gerakan Benteng Nasional yang berhasil
                                                    mengalahkan DI/TII pada Juni 1954. Selanjutnya, di Sulawesi Selatan
                                                    diatasi dengan serbuan pasukan Batalyon 330/Kujang Siliwangi yang
                                                    berhasil menembak mati Kahar
                                                    Muzakar. Lalu, di Kalimantan Selatan diatasi dengan cara operasi militer
                                                    yang
                                                    berhasil membuat Ibnu Hajar tertangkap. Selain itu, di Aceh diatasi
                                                    dengan mendatangkan pasukan
                                                    dari Sumatra Utara dan Sumatra Tengah yang berhasil memukul mundur
                                                    pasukan TII Aceh hingga ke hutan serta Daud Beureueh menerima hasil
                                                    musyawarah dari Musyawarah Kerukunan Rakyat Aceh yang diadakan pada 17
                                                    s.d. 28 Desember 1962.
                                                </p>
                                            </ul>
                                            <li>Angkatan Perang Ratu Adil (APRA)</li>
                                            <img src="{{ url('assets/img/APRA.jpg') }}" alt="APRA" loading="lazy"
                                                class="content-img d-block mx-auto rounded shadow-sm my-2" />
                                            <ul>
                                                <li>Latar Belakang &#8594;</li>
                                                <p>Angkatan Perang Ratu Adil (APRA) adalah kelompok milisi pro-Belanda yang
                                                    muncul di era Revolusi Nasional. Pemberontakan ini terjadi di Bandung
                                                    pada 23 Januari 1950 dibawah kendali
                                                    Kapten Raymond Westerling. Pemicu meletusnya pemberontakan ini yakni
                                                    hasil keputusan dari Konferensi Meja Bundar (KMB) pada Agustus 1949
                                                    mengenai Kerajaan Belanda akan menarik pasukan KL dari Indonesia dan
                                                    Koninklijk Nederlandsch-Indische Leger (KNIL) akan dibubarkan untuk
                                                    digabungkan dengan Tentara Nasional Indonesia (TNI). Disamping itu, juga
                                                    terdapat niat Belanda yaitu berupa kepentingan ekonomi di Indonesia
                                                    melalui eksploitasi sumber daya untuk mempertahankan keadaan ekonominya.
                                                </p>
                                                <li>Tujuan &#8594;</li>
                                                <p>Mempertahankan bentuk negara federal di Indonesia, yaitu negara Pasundan.
                                                    Pada saat itu, banyak negara bagian yang lain membubarkan diri dan
                                                    melebur dengan Negara Kesatuan Republik Indonesia (NKRI). Selain itu,
                                                    juga bermaksud untuk mengganggu proses pengakuan kedaulatan NKRI oleh
                                                    Belanda dan mempertahankan keberadaan Tentara APRA sebagai Tentara di
                                                    Pasundan.
                                                </p>
                                                <li>Tindakan Penyelesaian &#8594;</li>
                                                <p>Kegagalan kudeta yang dilakukan Kapten Raymond Westerling terhadap RIS
                                                    menyebabkan demoralisasi anggota milisi dan ia pun terpaksa
                                                    melarikan diri ke Belanda, sehingga APRA pun runtuh karena kehilangan
                                                    sosok pemimpin seperti Kapten Raymond Westerling dan dihapuskan pada
                                                    Februari 1950.</p>
                                            </ul>
                                            <li>Andi Azis</li>
                                            <img src="{{ url('assets/img/Andi_Azis.jpg') }}" alt="Andi Azis" loading="lazy"
                                                class="content-img d-block mx-auto rounded shadow-sm my-2" />
                                            <ul>
                                                <li>Latar Belakang &#8594;</li>
                                                <p>Peristiwa pemberontakan ini terjadi pada 5 April 1950 di
                                                    Makassar. Tokoh yang terlibat sebagai pemicu dalam peristiwa
                                                    pemberontakan ini ialah Kapten Andi Abdul Azis yang merupakan mantan
                                                    Perwira Koninklijk Nederlandsch-Indische Leger (KNIL).</p>
                                                <li>Tujuan &#8594;</li>
                                                <p>Menolak masuknya Tentara Nasional Indonesia (TNI) dan Angkatan Perang
                                                    Republik Indonesia Serikat (APRIS) karena bertekad mempertahankan
                                                    keutuhan Negara Indonesia Timur (NIT) dan tidak ingin
                                                    bergabung dengan Negara Kesatuan Republik Indonesia (NKRI).</p>
                                                <li>Tindakan Penyelesaian &#8594;</li>
                                                <p>Pada 8 April 1950, Pemerintah Indonesia mengeluarkan ultimatum yang
                                                    memerintahkan Andi Azis untuk segera melaporkan diri dan
                                                    mempertanggungjawabkan perbuatannya ke Jakarta dalam waktu 4 x 24 jam
                                                    sekaligus menarik seluruh pasukannya dan menyerahkan senjata beserta
                                                    membebaskan para sandera. Karena Andi
                                                    Azis tidak memedulikan ultimatum tersebut, maka pada 26 April 1950
                                                    dikerahkanlah pasukan militer yang dipimpin oleh Kolonel Inf. (Purn.)
                                                    Alexander Evert Kawilarang untuk menumpas Andi Azis, sehingga pada saat
                                                    itu terjadi peperangan dalam waktu yang cukup singkat. Akhirnya,
                                                    pemberontakan Andi Azis pun berhasil ditaklukkan. Kemudian, Ir. P. D
                                                    Diapri yang kala itu menjabat sebagai Perdana Menteri NIT mengundurkan
                                                    diri karena tidak setuju dengan pemberontakan Andi Azis serta Sukawati
                                                    sebagai Wali Negara NIT menyatakan bahwa NIT bersedia bergabung dengan
                                                    NKRI. Pada 8 Agustus 1950, terjadi kesepakatan antara Kolonel Inf.
                                                    (Purn.) Alexander Evert Kawilarang terhadap Mayor Jenderal Scheffelaar
                                                    dari KNIL/KL berupa penghentian tembak menembak, KNIL/KL harus hengkang
                                                    dari Makassar dan meninggalkan senjatanya. Seminggu kemudian, Andi Azis
                                                    ditangkap dan
                                                    dijatuhi hukuman kurungan penjara selama 15 tahun.</p>
                                            </ul>
                                            <li>Republik Maluku Selatan (RMS)</li>
                                            <img src="{{ url('assets/img/RMS.jpg') }}" alt="RMS" loading="lazy"
                                                class="content-img d-block mx-auto rounded shadow-sm my-2" />
                                            <ul>
                                                <li>Latar Belakang &#8594;</li>
                                                <p>Republik Maluku Selatan (RMS) adalah sebuah Republik di Kepulauan Maluku
                                                    yang diproklamasikan oleh seorang mantan Jaksa Agung Negara Indonesia
                                                    Timur (NIT), yaitu Dr. Christiaan Robbert Steven Soumokil pada 25 April
                                                    1950. RMS dikelola oleh pimpinan dari J.H Manuhutu sebagai Presiden,
                                                    Dr. J.P. Nikijuluw sebagai Wakil Presiden, dan
                                                    Albert Wairisal sebagai Perdana Menteri.</p>
                                                <li>Tujuan &#8594;</li>
                                                <p>Untuk memisahkan wilayah Maluku dari Negara Kesatuan Republik Indonesia
                                                    (NKRI), mempertahankan status
                                                    Negara Republik Indonesia Serikat (RIS) di Indonesia, dan menginginkan
                                                    hanya Koninklijk Nederlandsch-Indische Leger (KNIL) saja yang menjadi
                                                    inti dari keamanan Negara RIS.</p>
                                                <li>Tindakan Penyelesaian &#8594;</li>
                                                <p>Pengutusan Johannes Leimena, Politikus, Dokter, Pendeta, dan Wartawan
                                                    oleh Pemerintah untuk menempuh jalur damai
                                                    dengan mengadakan perundingan kepada RMS untuk bergabung di NKRI, namun
                                                    ditolak. Pemerintah pun mengerahkan kekuatan militer yang dikomando oleh
                                                    Kolonel Inf. (Purn.) Alexander Evert Kawilarang hingga terjadi perang
                                                    antara kedua
                                                    belah pihak. Hasilnya, Ambon berhasil dikuasai APRIS pada November 1950.
                                                    Menanggapi kekalahan tersebut, RMS memilih meninggalkan kota
                                                    pertahanannya dan melaksanakan
                                                    perang gerilya. Akhirnya, Dr. Christiaan Robbert Steven Soumokil
                                                    ditangkap pada 12 Desember 1963 dan
                                                    divonis hukuman mati pada 12 April 1966. Di sisi lain, Komandan Letnan
                                                    Kolonel Slamet Riyadi dan Letnan Kolonel Soediarto gugur tertembak
                                                    akibat pemberontakan tersebut.</p>
                                            </ul>
                                            <li>Pemerintah Revolusioner Republik Indonesia (PRRI) dan Perjuangan Rakyat
                                                Semesta (Permesta)</li>
                                            <img src="{{ url('assets/img/PRRI_Permesta.jpg') }}" alt="PRRI Permesta"
                                                loading="lazy" class="content-img d-block mx-auto rounded shadow-sm my-2" />
                                            <ul>
                                                <li>Latar Belakang &#8594;</li>
                                                <p>Bermula dari kekecewaan angkatan militer daerah terhadap pusat, terutama
                                                    di Pulau Sumatera dan Sulawesi mengenai rendahnya tingkat kesejahteraan
                                                    dan ketidakadilan yang dialami
                                                    warga sipil dan militer di wilayah tersebut. Pasalnya, hal ini juga
                                                    dipengaruhi oleh kondisi pemerintahan yang belum stabil di masa awal
                                                    kemerdekaan. Kesenjangan pembangunan di Pulau Jawa dan pulau-pulau
                                                    lainnya menimbulkan
                                                    sentimen bahwa wilayah Sumatera dan Sulawesi "dianaktirikan", sehingga
                                                    memicu upaya revolusi di daerah-daerah.</p>
                                                <li>Tujuan &#8594;</li>
                                                <p>Secara perekonomian dan otonomi daerah, menuntut agar Pemerintah
                                                    memperhatikan alokasi biaya pembangunan daerah untuk didistribusikan
                                                    dengan adil dan merata.
                                                    Selain itu,
                                                    juga menuntut agar Kabinet Djuanda dibubarkan dan Dr. Ir. H. Soekarno
                                                    kembali ke posisi konstitusionalnya.</p>
                                                <li>Tindakan Penyelesaian &#8594;</li>
                                                <p>Pemerintah membentuk operasi gabungan dari Angkatan Darat, Angkatan Laut,
                                                    Angkatan Udara, dan Angkatan Perang RI (APRI) untuk mengatasi
                                                    pemberontakan PRRI/Permesta dengan cara gencatan senjata. Gerakan PRRI
                                                    di Sumatera mampu dimusnahkan oleh Tentara Nasional Indonesia (TNI)
                                                    dalam
                                                    waktu sekejap. Sementara itu, Permesta di Sulawesi juga dapat dipadamkan
                                                    meskipun didukung bantuan dari Amerika Serikat, Jepang, Taiwan, dan
                                                    Filipina. Akhirnya PRRI/Permesta
                                                    mampu dilumpuhkan pada Agustus 1958. Selanjutnya, Dr. Ir. H. Soekarno
                                                    membuka kesempatan kepada mantan anggota PRRI/Permesta pada 1961 untuk
                                                    kembali ke NKRI dan diberikan amnesti.</p>
                                            </ul>
                                        </ol>
                                        <p></p>
                                        <hr>
                                        <strong id="list-item-4">Dampak</strong>
                                        <p>Jika terjadi disintegrasi, maka akan mengakibatkan banyak dampak negatif, yaitu:
                                        </p>
                                        <ol>
                                            <li>Hubungan antar individu ataupun kelompok menjadi tidak harmonis.</li>
                                            <li>Terjadinya diskriminasi.</li>
                                            <li>Timbulnya situasi yang tidak aman dan tidak tentram.</li>
                                            <li>Hilangnya nyawa dan rusaknya harta benda.</li>
                                            <li>Meningkatnya angka kemiskinan.</li>
                                            <li>Hilangnya rasa cinta terhadap tanah air, toleransi, serta persatuan dan
                                                kesatuan.</li>
                                            <li>Memicu adanya Separatisme (paham atau gerakan untuk memisahkan diri dengan
                                                mendirikan negara sendiri).</li>
                                        </ol>
                                        <hr>
                                        <strong id="list-item-5">Pencegahan</strong>
                                        <p>Guna menanggulangi terjadinya disintegrasi yang merugikan bangsa, berikut upaya
                                            yang dapat dilakukan:
                                        <ol>
                                            <li>Membangun kesadaran, komitmen, dan tindakan nyata dalam meningkatkan
                                                nasionalisme dan toleransi.</li>
                                            <li>Perumusan hukum, kebijakan, maupun regulasi harus berdasarkan Pancasila
                                                dengan pelaksanaan secara disiplin dan tegas.</li>
                                            <li>Melakukan penataan struktur dan sistem di sektor politik, ekonomi, dan
                                                lain-lainnya secara konsisten dan bertanggung jawab.</li>
                                            <li>Membasmi Primordialisme (pandangan yang memegang teguh hal-hal yang dibawa
                                                sejak kecil, baik tradisi, adat istiadat, kepercayaan, maupun segala sesuatu
                                                yang ada di dalam lingkungan pertama) dan Etnosentrisme (sikap atau
                                                pandangan yang berpangkal pada masyarakat dan kebudayaan sendiri, biasanya
                                                disertai dengan sikap dan pandangan yang meremehkan masyarakat dan
                                                kebudayaan lain).</li>
                                            <li>Melestarikan budaya lokal dan selektif terhadap budaya asing.</li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-success bg-gradient rounded-3 w-100 p-3">
            <div class="text-center">
                <i class="bi bi-check-circle fs-4"></i>
            </div>
            <br>
            {{ 'Peran dan Nilai-nilai Perjuangan Tokoh Nasional serta Tokoh Daerah dalam Mempertahankan Keutuhan Negara dan Bangsa Indonesia pada Masa 1945–1965.' }}
            <button type="button" class="btn btn-primary d-flex mx-auto mt-5 mb-2" data-bs-toggle="modal"
                data-bs-target="#bab2">
                <i class="bi bi-book"></i>&emsp;{{ __('Pelajari Selengkapnya') }}
            </button>

            <div class="modal fade text-white" id="bab2" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="babLabel2" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="d-flex mb-3">
                                <h5 class="modal-title" id="babLabel">Peran dan Nilai-nilai Perjuangan Tokoh Nasional
                                    serta Tokoh Daerah dalam Mempertahankan Keutuhan Negara dan Bangsa Indonesia pada Masa
                                    1945–1965</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a class="navbar-brand" href="{{ route('user') }}">
                                    <img src="{{ url('assets/img/logo.svg') }}" alt="Logo" class="nav-logo pe-2">
                                    <span class="nav-brand">SejarahKita</span>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3 summary">
                                    <div class="sticky-top">
                                        <div id="list-daftarIsi" class="list-group">
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-1">Definisi</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-2">Penyebab</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-3">Contoh</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-4">Dampak</a>
                                            <a class="list-group-item list-group-item-action bg-dark"
                                                href="#list-item-5">Pencegahan</a>
                                        </div>
                                        <a href="{{ url('assets/pdf/Peran dan Nilai-nilai Perjuangan Tokoh Nasional serta Tokoh Daerah dalam Mempertahankan Keutuhan Negara dan Bangsa Indonesia pada Masa 1945–1965.') }}"
                                            download>
                                            <button class="btn btn-primary w-100 my-5">
                                                <i class="bi bi-download"></i>&emsp;{{ __('Unduh Materi (.pdf)') }}
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9 summary">
                                    <div data-bs-spy="scroll" data-bs-target="#list-daftarIsi"
                                        data-bs-smooth-scroll="true" class="scrollspy-daftarIsi" tabindex="0">
                                        <h1>Coming Soon</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
