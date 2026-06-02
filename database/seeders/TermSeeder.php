<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Term;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Pemograman
        Term::create([
            'nama_istilah' => 'Variabel',
            'definisi' => 'Sebuah wadah atau tempat penyimpanan sementara di dalam memori komputer yang digunakan untuk menyimpan suatu nilai atau data (seperti angka atau teks). Nilai di dalam wadah ini bisa berubah-ubah selama program berjalan.',
            'pelafalan' => '/va-ri-a-bel/',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Pemograman',
            'sub_kategori' => 'Tipe Data',
            'penjelasan' => 'Variabel adalah konsep dasar dalam pemrograman yang berfungsi sebagai tempat penyimpanan data sementara di memori komputer. Nilai dalam variabel dapat berubah selama program dijalankan, sesuai dengan proses atau instruksi yang diberikan.

                            Contoh sederhana:

                            x = 5
                            x = 10 (nilai x berubah dari 5 menjadi 10)

                            1. Fungsi variabel antara lain:
                            2. Menyimpan data input dari user
                            3. Menyimpan hasil perhitungan
                            4. Memudahkan pengolahan data dalam program

                            Kelebihan yaitu membuat program lebih fleksibel dan memudahkan pengelolaan data, sedangkan kekurangannya yaitu Jika tidak dikelola dengan baik, bisa menyebabkan error atau kebingungan dalam program
                            ',
            'gambar' => 'image/variable.png',
            'id_kategori' => 1
        ]);

        Term::create([
            'nama_istilah' => 'Looping',
            'definisi' => 'Perintah yang digunakan untuk menjalankan sebaris kode program secara berulang-ulang selama suatu kondisi tertentu masih terpenuhi, sehingga programmer tidak perlu menulis kode yang sama berkali-kali. Biasanya menggunakan sintaks (for/while)',
            'pelafalan' => '/luːpɪŋ/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Pemograman',
            'sub_kategori' => 'Struktur Kontrol Program',
            'penjelasan' => 'Looping atau perulangan adalah salah satu struktur kontrol dalam pemrograman yang digunakan untuk mengeksekusi suatu blok kode secara berulang berdasarkan kondisi tertentu. Konsep ini memungkinkan program melakukan tugas yang sama berkali-kali tanpa perlu menuliskan kode yang berulang, sehingga proses pengembangan program menjadi lebih efisien dan terstruktur.

                            Fungsi:

                            Mengurangi penulisan kode yang berulang.
                            Membuat program lebih efisien dan mudah dikelola.
                            Membantu memproses data dalam jumlah banyak.

                            Jenis-Jenis Looping:

                            for → digunakan ketika jumlah perulangan sudah diketahui.
                            while → digunakan ketika perulangan bergantung pada suatu kondisi.
                            do-while → menjalankan kode minimal satu kali sebelum memeriksa kondisi.

                            Kelebihan:

                            Menghemat waktu penulisan kode.
                            Membuat program lebih ringkas.
                            Mempermudah pengolahan data berulang.

                            Kekurangan:

                            Dapat menyebabkan infinite loop (perulangan tanpa henti) jika kondisi tidak diatur dengan benar.
                            Terlalu banyak perulangan dapat memengaruhi performa program.

                            Contoh Penggunaan:

                            Menampilkan angka 1–100.
                            Menghitung total nilai dalam sebuah daftar.
                            Menampilkan data dari database atau array.
                            ',
            'gambar' => 'img/looping.png',
            'id_kategori' => 1
        ]);

        Term::create([
            'nama_istilah' => 'Syntax',
            'definisi' => 'Aturan penulisan kode, simbol, dan tata bahasa yang wajib diikuti dalam suatu bahasa pemrograman agar kode tersebut bisa dipahami oleh komputer. Jika ada salah ketik atau salah simbol, program akan mogok kerja.',
            'pelafalan' => 'sɪn.tæks',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Pemograman',
            'sub_kategori' => 'Struktur & Tata Bahasa Pemrograman',
            'penjelasan' => 'Setiap bahasa pemrograman (seperti Python, JavaScript, atau C++) memiliki aturan syntax yang unik dan kaku. Jika seorang programmer melanggar aturan ini misalnya lupa menulis tanda titik koma (;) atau salah menutup tanda kurung komputer akan memunculkan pesan Syntax Error. Akibatnya, kode tidak dapat dikompilasi atau dieksekusi sama sekali oleh sistem hingga kesalahan tersebut diperbaiki. 
                            ',
            'gambar' => 'image/syntax.png',
            'id_kategori' => 1
        ]);

        //UI/UX Design
        Term::create([
            'nama_istilah' => 'Typography',
            'definisi' => 'Typography adalah seni dan teknik dalam mengatur huruf (teks) agar terlihat rapi, mudah dibaca, dan menarik secara visual dalam desain.',
            'pelafalan' => '/təˈpɑːɡrəfi/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Yunani',
            'kategori_utama' => 'UI/UX Design',
            'sub_kategori' => 'Visual Design',
            'penjelasan' => 'Pengertian:
                            Typography merupakan elemen penting dalam desain yang berfokus pada pemilihan, pengaturan, dan penyusunan teks agar informasi dapat disampaikan secara efektif kepada pengguna. Dalam UI/UX Design, typography tidak hanya berfungsi sebagai media penyampai informasi, tetapi juga berperan dalam menciptakan hierarki visual, meningkatkan keterbacaan, serta memberikan identitas dan karakter pada suatu produk digital.

                            Fungsi:
                            Meningkatkan keterbacaan dan kenyamanan pengguna saat membaca.
                            Membantu menyusun hierarki informasi.
                            Memperkuat identitas visual suatu produk atau merek.
                            Meningkatkan pengalaman pengguna (User Experience).

                            Komponen Typography:
                            Font → kumpulan karakter dengan gaya tertentu.
                            Typeface → keluarga desain huruf, seperti Arial atau Times New Roman.
                            Font Size → ukuran teks.
                            Font Weight → ketebalan huruf (Light, Regular, Bold).
                            Line Height → jarak antar baris teks.
                            Letter Spacing → jarak antar huruf.

                            Kelebihan:

                            Membuat tampilan lebih profesional dan menarik.
                            Memudahkan pengguna memahami informasi.
                            Meningkatkan konsistensi desain.

                            Kekurangan:

                            Pemilihan font yang kurang tepat dapat mengurangi keterbacaan.
                            Terlalu banyak variasi font dapat membuat desain terlihat tidak konsisten.

                            Contoh Penggunaan:

                            Pemilihan font pada aplikasi mobile.
                            Pengaturan ukuran judul dan isi artikel pada website.
                            Desain tombol, menu navigasi, dan formulir dalam antarmuka pengguna.
                                                        ',
            'gambar' => 'image/typography.png',
            'id_kategori' => 2
        ]);

        Term::create([
            'nama_istilah' => 'User Interface (UI)',
            'definisi' => '',
            'pelafalan' => '',
            'singkatan' => 'UI',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'UI/UX Design',
            'sub_kategori' => 'Dasar UI/UX',
            'penjelasan' => 'Pengertian:
                            User Interface (UI) adalah bagian dari aplikasi, website, atau sistem digital yang menjadi media interaksi antara pengguna dan sistem. UI berfokus pada tampilan visual serta elemen-elemen yang digunakan pengguna untuk berinteraksi, seperti tombol, ikon, menu, formulir, warna, tipografi, dan tata letak. Tujuan utama UI adalah menciptakan tampilan yang menarik, konsisten, mudah dipahami, dan mendukung pengguna dalam menyelesaikan tugasnya.

                            Fungsi:

                            Menjadi penghubung antara pengguna dan sistem.
                            Menyajikan informasi secara visual.
                            Memudahkan pengguna dalam menjalankan fitur aplikasi atau website.
                            Meningkatkan kenyamanan dan kepuasan pengguna.

                            Komponen UI:

                            Button (Tombol) → digunakan untuk menjalankan suatu aksi.
                            Icon (Ikon) → simbol visual yang mewakili fungsi tertentu.
                            Typography → pengaturan teks agar mudah dibaca.
                            Color → memberikan identitas visual dan membantu navigasi.
                            Layout → mengatur posisi dan susunan elemen pada layar.
                            Form → media untuk memasukkan data oleh pengguna.

                            Kelebihan:

                            Membantu pengguna memahami cara menggunakan sistem.
                            Meningkatkan daya tarik visual aplikasi atau website.
                            Membuat interaksi menjadi lebih efisien dan intuitif.

                            Kekurangan:

                            UI yang terlalu rumit dapat membingungkan pengguna.
                            Desain yang kurang konsisten dapat menurunkan kualitas pengalaman pengguna.

                            Contoh Penggunaan:

                            Tombol "Login" pada aplikasi.
                            Menu navigasi pada website.
                            Ikon keranjang belanja pada aplikasi e-commerce.
                            Formulir pendaftaran akun.
                                                        ',
            'gambar' => 'image/ui.png',
            'id_kategori' => 2
        ]);

        Term::create([
            'nama_istilah' => 'User Experience (UX)',
            'definisi' => 'Bagaimana perasaan dan pengalaman pengguna saat menggunakan aplikasi tersebut. Apakah aplikasinya mudah digunakan? Apakah membingungkan? Apakah alurnya cepat untuk mencapai tujuan? UX fokus pada kenyamanan dan logika di balik sebuah desain.',
            'pelafalan' => '/ˌjuːzər ɪkˈspɪərɪəns/',
            'singkatan' => 'UX',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'UI/UX Design',
            'sub_kategori' => 'Dasar UI/UX',
            'penjelasan' => 'Pengertian :
                            User Experience (UX) adalah aspek desain yang berfokus pada pengalaman, persepsi, dan kepuasan pengguna saat berinteraksi dengan suatu produk digital. UX bertujuan memastikan bahwa pengguna dapat menggunakan aplikasi atau website dengan mudah, efektif, dan nyaman tanpa mengalami kebingungan atau hambatan. Oleh karena itu, UX tidak hanya memperhatikan tampilan visual, tetapi juga alur penggunaan, struktur informasi, navigasi, serta kebutuhan pengguna secara keseluruhan.

                            Fungsi:

                            Meningkatkan kenyamanan pengguna saat menggunakan produk.
                            Mempermudah pengguna mencapai tujuan yang diinginkan.
                            Mengurangi kebingungan dan kesalahan saat berinteraksi dengan sistem.
                            Meningkatkan kepuasan dan loyalitas pengguna.

                            Komponen UX:

                            User Research → memahami kebutuhan dan perilaku pengguna.
                            Information Architecture → menyusun informasi agar mudah ditemukan.
                            User Flow → merancang alur pengguna dalam menyelesaikan tugas.
                            Wireframe → kerangka dasar tampilan aplikasi atau website.
                            Usability Testing → menguji kemudahan penggunaan produk.

                            Kelebihan:

                            Membuat produk lebih mudah digunakan.
                            Meningkatkan kepuasan pengguna.
                            Membantu mencapai tujuan bisnis melalui pengalaman yang lebih baik.

                            Kekurangan:

                            Membutuhkan riset dan pengujian yang cukup banyak.
                            Proses perancangannya dapat memakan waktu dan biaya.

                            Contoh Penggunaan:

                            Menyederhanakan proses pendaftaran akun agar lebih cepat.
                            Merancang navigasi aplikasi yang mudah dipahami.
                            Mengurangi jumlah langkah yang diperlukan untuk melakukan pembayaran pada aplikasi e-commerce.
                            Menyediakan fitur pencarian yang memudahkan pengguna menemukan informasi.
                            ',
            'gambar' => 'image/ux.jpg',
            'id_kategori' => 2
        ]);

        //Jaringan Komputer
        Term::create([
            'nama_istilah' => 'Bandwidth',
            'definisi' => 'Bandwidth (bandwidth / lebar pita) adalah ukuran kapasitas maksimum suatu jaringan atau koneksi internet untuk mengirimkan data dalam waktu tertentu.',
            'pelafalan' => '/ˌjuːzər ɪkˈspɪərɪəns/',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Jaringan Komputer',
            'sub_kategori' => 'Komunikasi Data dan Kinerja Jaringan',
            'penjelasan' => 'Pengertian:
                            Bandwidth adalah kapasitas maksimum yang dimiliki suatu jaringan untuk mentransmisikan data dalam periode waktu tertentu. Semakin besar bandwidth yang tersedia, semakin banyak data yang dapat dikirim atau diterima dalam waktu yang sama. Bandwidth umumnya diukur dalam satuan bit per detik (bps), seperti Mbps (Megabit per second) atau Gbps (Gigabit per second).

                            Fungsi:

                            Menentukan kapasitas transfer data pada jaringan.
                            Mempengaruhi kecepatan akses internet.
                            Mendukung komunikasi data antar perangkat.

                            Kelebihan:

                            Memungkinkan transfer data lebih cepat.
                            Mendukung banyak pengguna atau perangkat secara bersamaan.

                            Kekurangan:

                            Bandwidth yang terbatas dapat menyebabkan koneksi lambat.
                            Kebutuhan bandwidth yang besar umumnya memerlukan biaya lebih tinggi.

                            Contoh Penggunaan:

                            Koneksi internet rumah dengan bandwidth 50 Mbps.
                            Jaringan kantor yang digunakan untuk konferensi video dan transfer file.
                            ',
            'gambar' => 'image/bandwith.jpg',
            'id_kategori' => 3
        ]);  
        
        Term::create([
            'nama_istilah' => 'Switch',
            'definisi' => 'Switch (dalam jaringan komputer) adalah perangkat yang berfungsi untuk menghubungkan banyak perangkat dalam satu jaringan lokal (LAN) dan mengatur supaya data bisa dikirim ke tujuan yang tepat.',
            'pelafalan' => '/swɪtʃ/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Jaringan Komputer',
            'sub_kategori' => 'Perangkat Jaringan',
            'penjelasan' => 'Pengertian:
                            Switch adalah perangkat jaringan yang digunakan untuk menghubungkan beberapa perangkat, seperti komputer, printer, atau server, dalam satu jaringan lokal (LAN). Switch bekerja dengan mengenali alamat MAC dari setiap perangkat yang terhubung sehingga data dapat dikirim langsung ke perangkat tujuan tanpa mengganggu perangkat lainnya. Hal ini membuat komunikasi data menjadi lebih cepat dan efisien dibandingkan penggunaan hub.

                            Fungsi:

                            Menghubungkan perangkat dalam jaringan LAN.
                            Mengirim data ke perangkat tujuan yang tepat.
                            Mengurangi tabrakan data (collision) pada jaringan.

                            Kelebihan:

                            Transfer data lebih efisien.
                            Meningkatkan performa jaringan.
                            Mendukung banyak perangkat dalam satu jaringan.

                            Kekurangan:

                            Harga lebih mahal dibandingkan hub.
                            Membutuhkan konfigurasi tambahan pada beberapa jenis switch.

                            Contoh Penggunaan:

                            Menghubungkan komputer di laboratorium komputer.
                            Menghubungkan perangkat jaringan di kantor atau kampus.
                            ',
            'gambar' => 'image/switch_353.png',
            'id_kategori' => 3
        ]);

        Term::create([
            'nama_istilah' => 'Router',
            'definisi' => 'Router adalah perangkat jaringan yang berfungsi untuk menghubungkan dua atau lebih jaringan yang berbeda dan mengarahkan (routing) data di antara jaringan tersebut.',
            'pelafalan' => '/ˈruː.tər/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Jaringan Komputer',
            'sub_kategori' => 'Perangkat Jaringan',
            'penjelasan' => 'Router adalah perangkat jaringan yang bertugas menghubungkan dua atau lebih jaringan yang berbeda serta menentukan jalur terbaik untuk mengirimkan paket data dari sumber ke tujuan. Router biasanya digunakan untuk menghubungkan jaringan lokal (LAN) dengan internet dan memungkinkan banyak perangkat berbagi koneksi internet yang sama. Selain itu, router dapat menyediakan fitur keamanan, manajemen lalu lintas jaringan, dan koneksi nirkabel (Wi-Fi).

                            Fungsi:

                            Menghubungkan jaringan yang berbeda.
                            Mengarahkan paket data ke tujuan yang tepat.
                            Membagikan koneksi internet ke banyak perangkat.
                            Mengelola lalu lintas data dalam jaringan.

                            Kelebihan:

                            Memungkinkan komunikasi antarjaringan.
                            Mendukung koneksi internet untuk banyak perangkat.
                            Memiliki fitur keamanan jaringan.

                            Kekurangan:

                            Konfigurasi lebih kompleks dibandingkan switch.
                            Performa dapat menurun jika menangani lalu lintas data yang sangat tinggi.

                            Contoh Penggunaan:

                            Router Wi-Fi di rumah.
                            Router yang menghubungkan jaringan kantor dengan internet.
                            Router pada penyedia layanan internet (ISP).
                            ',
            'gambar' => 'image/Router.png',
            'id_kategori' => 3
        ]);

        //Keamanan Sibet
        Term::create([
            'nama_istilah' => 'Buffer Overflow',
            'definisi' => 'Buffer Overflow adalah kondisi ketika sebuah program memasukkan data lebih banyak daripada kapasitas memori (buffer) yang disediakan, sehingga data “meluap” ke area memori lain.',
            'pelafalan' => '/ˈbʌf.ər ˌoʊ.vərˈfloʊ/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Keamanan Siber',
            'sub_kategori' => 'Kerentanan Perangkat Lunak (Software Vulnerability)',
            'penjelasan' => 'Pengertian:
                            Buffer Overflow merupakan kerentanan keamanan yang terjadi ketika sebuah program menerima atau menyimpan data melebihi kapasitas memori yang telah dialokasikan. Akibatnya, data yang berlebihan dapat menimpa area memori lain dan menyebabkan program mengalami kesalahan, crash, atau bahkan memungkinkan penyerang menjalankan kode berbahaya pada sistem.

                            Fungsi (dalam konteks pembelajaran):

                            Menjadi salah satu contoh kerentanan keamanan perangkat lunak.
                            Digunakan dalam studi keamanan aplikasi dan pengujian penetrasi.
                            Membantu pengembang memahami pentingnya validasi input.

                            Dampak:

                            Program dapat berhenti bekerja (crash).
                            Data dalam memori dapat rusak.
                            Penyerang dapat mengeksploitasi sistem untuk menjalankan kode berbahaya.

                            Pencegahan:

                            Melakukan validasi terhadap input pengguna.
                            Menggunakan fungsi pemrograman yang aman.
                            Menerapkan mekanisme perlindungan memori.

                            Contoh Penggunaan:

                            Kerentanan pada aplikasi yang tidak membatasi panjang data input.
                            Eksploitasi keamanan pada perangkat lunak lama yang tidak memiliki proteksi memori.
                            ',
            'gambar' => '-',
            'id_kategori' => 4
        ]);

        Term::create([
            'nama_istilah' => 'Phishing',
            'definisi' => 'Metode penipuan digital yang memancing korban agar memberikan data sensitif (seperti password atau kartu kredit) melalui email atau situs web palsu yang mirip aslinya. ',
            'pelafalan' => '/ˈfɪʃ.ɪŋ/',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Keamanan Siber',
            'sub_kategori' => 'Rekayasa Sosial',
            'penjelasan' => 'Pengertian:
                            Phishing adalah teknik serangan siber yang memanfaatkan manipulasi psikologis untuk menipu korban agar memberikan informasi rahasia. Pelaku biasanya menyamar sebagai pihak terpercaya, seperti bank, perusahaan teknologi, atau institusi resmi, lalu mengirimkan pesan yang berisi tautan menuju situs palsu yang dirancang menyerupai situs asli.

                            Tujuan:

                            Mencuri username dan password.
                            Mendapatkan data kartu kredit atau rekening bank.
                            Mengambil alih akun pengguna.
                            Menyebarkan malware ke perangkat korban.

                            Ciri-Ciri:

                            Menggunakan alamat email atau situs yang mencurigakan.
                            Meminta informasi pribadi secara mendesak.
                            Mengandung tautan yang mengarah ke halaman palsu.
                            Memanfaatkan rasa takut atau rasa penasaran korban.

                            Pencegahan:

                            Memeriksa alamat situs sebelum login.
                            Tidak mengklik tautan dari sumber yang tidak dikenal.
                            Mengaktifkan autentikasi dua faktor (2FA).
                            Memastikan keaslian pengirim pesan.

                            Contoh Penggunaan:

                            Email palsu yang mengatasnamakan bank dan meminta verifikasi akun.
                            Situs login media sosial palsu yang menyerupai tampilan aslinya.
                            ',
            'gambar' => '-',
            'id_kategori' => 4
        ]);

        Term::create([
            'nama_istilah' => 'Ransomware',
            'definisi' => 'Jenis malware (perangkat lunak berbahaya yang dirancang untuk merusak, mengganggu, atau mencuri data) yang mengunci atau mengenkripsi data pengguna, lalu pelaku meminta uang tebusan jika korban ingin data tersebut dikembalikan.',
            'pelafalan' => '/ˈræn.səm.weər/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Keamanan Siber',
            'sub_kategori' => 'Malware',
            'penjelasan' => 'Pengertian:
                            Ransomware adalah jenis perangkat lunak berbahaya yang dirancang untuk mengunci atau mengenkripsi file dan data korban sehingga tidak dapat diakses. Setelah proses enkripsi selesai, pelaku akan menampilkan pesan yang meminta pembayaran sejumlah uang sebagai tebusan dengan janji mengembalikan akses ke data yang terkunci. Ransomware dapat menyebar melalui email berbahaya, unduhan tidak aman, atau celah keamanan pada sistem.

                            Tujuan:

                            Memeras korban untuk memperoleh keuntungan finansial.
                            Menghambat akses terhadap data penting.
                            Menyebabkan gangguan operasional pada individu maupun organisasi.

                            Dampak:

                            Kehilangan akses terhadap data penting.
                            Kerugian finansial akibat pembayaran tebusan atau pemulihan sistem.
                            Gangguan operasional pada perusahaan atau institusi.

                            Pencegahan:

                            Melakukan backup data secara berkala.
                            Menghindari membuka lampiran dari sumber yang tidak dikenal.
                            Memperbarui sistem dan perangkat lunak secara rutin.
                            Menggunakan antivirus dan sistem keamanan yang terpercaya.

                            Contoh Penggunaan:

                            Serangan ransomware pada rumah sakit yang menyebabkan data pasien tidak dapat diakses.
                            Infeksi ransomware melalui lampiran email berbahaya yang menyamar sebagai dokumen penting.
                            ',
            'gambar' => '-',
            'id_kategori' => 4
        ]);

        //Komputasi Awan
        Term::create([
            'nama_istilah' => 'Hybrid Cloud',
            'definisi' => 'Strategi yang menggabungkan dua dunia cloud  antara Public Cloud dan Private Cloud. Perusahaan menggunakan Private Cloud untuk menyimpan data yang sangat rahasia, tetapi menggunakan Public Cloud untuk menjalankan aplikasi sehari-hari agar menghemat biaya. Konsepnya seperti memiliki mobil pribadi untuk kerja, tetapi naik kereta saat bepergian jauh ke luar kota.',
            'pelafalan' => '/ˈhaɪ.brɪd klaʊd/',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Komputasi Awan',
            'sub_kategori' => 'Model Development Cloud',
            'penjelasan' => 'Pengertian:
                            Hybrid Cloud adalah model komputasi awan yang menggabungkan penggunaan Public Cloud dan Private Cloud dalam satu lingkungan yang saling terhubung. Organisasi dapat menyimpan data atau aplikasi yang bersifat sensitif di Private Cloud untuk menjaga keamanan, sementara aplikasi atau layanan yang membutuhkan fleksibilitas dan biaya lebih rendah dapat dijalankan di Public Cloud. Pendekatan ini memungkinkan perusahaan memperoleh keseimbangan antara keamanan, kontrol, fleksibilitas, dan efisiensi biaya.

                            Fungsi:

                            Menggabungkan keunggulan Public Cloud dan Private Cloud.
                            Menjaga keamanan data sensitif.
                            Meningkatkan fleksibilitas penggunaan sumber daya komputasi.
                            Mengoptimalkan biaya operasional.

                            Kelebihan:

                            Lebih fleksibel dibandingkan hanya menggunakan satu jenis cloud.
                            Keamanan data penting lebih terjaga.
                            Biaya dapat dioptimalkan sesuai kebutuhan.

                            Kekurangan:

                            Pengelolaan infrastruktur lebih kompleks.
                            Membutuhkan integrasi antara berbagai layanan cloud.

                            Contoh Penggunaan:

                            Perusahaan menyimpan data pelanggan di Private Cloud dan menjalankan website di Public Cloud.
                            Institusi keuangan menggunakan Private Cloud untuk data transaksi dan Public Cloud untuk aplikasi pendukung.
                            ',
            'gambar' => '-',
            'id_kategori' => 5
        ]);

        Term::create([
            'nama_istilah' => 'Scalability',
            'definisi' => 'Kemampuan sistem cloud untuk memperbesar atau memperkecil kapasitas penyimpanan dan performa komputer secara otomatis sesuai dengan kebutuhan.',
            'pelafalan' => '/ˌskeɪ.ləˈbɪl.ə.ti/',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Komputasi Awan',
            'sub_kategori' => 'Karakteristik Cloud Computing',
            'penjelasan' => 'Pengertian:
                            Scalability adalah kemampuan suatu sistem atau layanan cloud untuk menyesuaikan kapasitas sumber daya, seperti penyimpanan, memori, bandwidth, dan daya pemrosesan, sesuai dengan perubahan kebutuhan. Ketika jumlah pengguna atau beban kerja meningkat, sistem dapat menambah sumber daya secara otomatis. Sebaliknya, saat kebutuhan menurun, sumber daya dapat dikurangi sehingga penggunaan menjadi lebih efisien.

                            Fungsi:

                            Menyesuaikan kapasitas sistem dengan kebutuhan.
                            Menjaga performa layanan saat terjadi lonjakan pengguna.
                            Mengoptimalkan penggunaan sumber daya komputasi.
                            Mengurangi pemborosan biaya operasional.

                            Kelebihan:

                            Fleksibel terhadap perubahan kebutuhan.
                            Meningkatkan efisiensi biaya.
                            Menjaga stabilitas dan performa sistem.

                            Kekurangan:

                            Membutuhkan konfigurasi dan pemantauan yang baik.
                            Penambahan sumber daya yang berlebihan dapat meningkatkan biaya.

                            Contoh Penggunaan:

                            Platform e-commerce yang menambah kapasitas server saat promo besar.
                            Layanan streaming yang menyesuaikan kapasitas ketika jumlah pengguna meningkat.
                            ',
            'gambar' => '-',
            'id_kategori' => 5
        ]);

        Term::create([
            'nama_istilah' => 'Cloud Storage',
            'definisi' => 'Media penyimpanan file digital yang letaknya bukan di dalam memori internal HP atau laptop kita, melainkan di dalam server internet. Kita bisa mengakses file tersebut dari perangkat mana saja asalkan terhubung ke internet.',
            'pelafalan' => '/klaʊd ˈstɔː.rɪdʒ/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Komputasi Awan',
            'sub_kategori' => 'Layanan Penyimpanan Cloud',
            'penjelasan' => 'Pengertian:
                            Cloud Storage adalah layanan penyimpanan data berbasis internet yang memungkinkan pengguna menyimpan, mengelola, dan mengakses file tanpa bergantung pada penyimpanan lokal perangkat. Data disimpan pada server milik penyedia layanan cloud dan dapat diakses kapan saja melalui berbagai perangkat yang memiliki koneksi internet. Teknologi ini memudahkan proses pencadangan data, berbagi file, dan sinkronisasi antar perangkat.

                            Fungsi:

                            Menyimpan file secara online.
                            Memudahkan akses data dari berbagai perangkat.
                            Mendukung pencadangan (backup) data.
                            Mempermudah berbagi file dengan pengguna lain.

                            Kelebihan:

                            Dapat diakses dari mana saja.
                            Mengurangi ketergantungan pada penyimpanan lokal.
                            Mendukung sinkronisasi data antarperangkat.
                            Memudahkan proses backup dan pemulihan data.

                            Kekurangan:

                            Membutuhkan koneksi internet untuk akses optimal.
                            Bergantung pada layanan penyedia cloud.
                            Berpotensi menimbulkan risiko privasi jika tidak dikelola dengan baik.

                            Contoh Penggunaan:

                            Menyimpan dokumen kuliah secara online.
                            Mencadangkan foto dan video dari smartphone.
                            Berbagi file proyek dengan anggota tim melalui layanan cloud.
                            ',
            'gambar' => '-',
            'id_kategori' => 5
        ]);

        //Basis Data
        Term::create([
            'nama_istilah' => 'Data Base Management System (DBMS)',
            'definisi' => 'DBMS (Database Management System) adalah perangkat lunak yang digunakan untuk membuat, mengelola, dan mengatur database (basis data).',
            'pelafalan' => '/ˌdiː.biː.emˈes/ ',
            'singkatan' => 'DBMS',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Basis Data',
            'sub_kategori' => 'Sistem Manajemen Basis Data',
            'penjelasan' => 'Pengertian:
                            Database Management System (DBMS) adalah perangkat lunak yang berfungsi untuk mengelola basis data sehingga data dapat disimpan, diakses, diperbarui, dan dihapus dengan mudah dan terstruktur. DBMS menjadi perantara antara pengguna atau aplikasi dengan database, sehingga proses pengelolaan data dapat dilakukan secara efisien, aman, dan konsisten.

                            Fungsi:

                            Membuat dan mengelola database.
                            Menyimpan serta mengorganisasi data.
                            Mengatur hak akses pengguna.
                            Menjaga keamanan dan integritas data.
                            Mempermudah pencarian dan pengolahan data.

                            Kelebihan:

                            Memudahkan pengelolaan data dalam jumlah besar.
                            Meningkatkan keamanan data.
                            Mengurangi duplikasi data.
                            Mendukung akses data oleh banyak pengguna.

                            Kekurangan:

                            Membutuhkan sumber daya komputer yang cukup besar.
                            Biaya implementasi dan pemeliharaan dapat tinggi.
                            Memerlukan keahlian khusus untuk pengelolaan.

                            Contoh Penggunaan:

                            Sistem akademik kampus.
                            Sistem perbankan.
                            Sistem manajemen inventaris perusahaan.
                            ',
            'gambar' => 'image/DBMS.png',
            'id_kategori' => 6
        ]);

        Term::create([
            'nama_istilah' => 'Software Development Life Cycle (SDLC)',
            'definisi' => 'Software Development Life Cycle (SDLC) adalah proses atau kerangka kerja yang digunakan untuk merencanakan, mengembangkan, menguji, menerapkan, dan memelihara perangkat lunak secara terstruktur.',
            'pelafalan' => '/ˌes.diː.elˈsiː/',
            'singkatan' => 'SDLC',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Basis Data',
            'sub_kategori' => 'Pengembangan Perangkat Lunak',
            'penjelasan' => 'Pengertian:
                            Software Development Life Cycle (SDLC) adalah serangkaian tahapan yang digunakan dalam proses pengembangan perangkat lunak, mulai dari analisis kebutuhan hingga pemeliharaan sistem setelah digunakan. SDLC bertujuan memastikan bahwa perangkat lunak yang dikembangkan memiliki kualitas yang baik, sesuai kebutuhan pengguna, dan dapat diselesaikan secara terencana.

                            Tahapan SDLC:

                            Analisis kebutuhan (Requirement Analysis).
                            Perencanaan (Planning).
                            Perancangan sistem (Design).
                            Pengembangan (Development).
                            Pengujian (Testing).
                            Implementasi (Deployment).
                            Pemeliharaan (Maintenance).

                            Kelebihan:

                            Proses pengembangan lebih terstruktur.
                            Memudahkan pengelolaan proyek.
                            Mengurangi risiko kesalahan dalam pengembangan.

                            Kekurangan:

                            Membutuhkan perencanaan yang matang.
                            Beberapa model SDLC kurang fleksibel terhadap perubahan kebutuhan.

                            Contoh Penggunaan:

                            Pengembangan aplikasi mobile.
                            Pembuatan website perusahaan.
                            Pengembangan sistem informasi akademik.
                            ',
            'gambar' => 'image/SDLC.png',
            'id_kategori' => 6
        ]);

        Term::create([
            'nama_istilah' => 'Agile Methodology',
            'definisi' => 'Salah satu metode kerja dalam SDLC yang berfokus pada kecepatan, fleksibilitas, dan kerja sama tim. Aplikasi dikembangkan sedikit demi sedikit dalam waktu singkat (disebut Sprint), lalu langsung ditunjukkan ke pengguna untuk meminta masukan agar bisa segera diperbaiki.',
            'pelafalan' => '/ˈædʒ.aɪl ˌmeθ.əˈdɒl.ə.dʒi/ ',
            'singkatan' => '-',
            'asal_bahasa' => 'Inggris',
            'kategori_utama' => 'Basis Data',
            'sub_kategori' => 'Metodologi Pengembangan Perangkat Lunak',
            'penjelasan' => 'Pengertian:
                            Agile Methodology adalah salah satu pendekatan dalam SDLC yang menekankan pengembangan perangkat lunak secara bertahap dan berulang (iteratif). Dalam metode ini, aplikasi dikembangkan dalam periode waktu singkat yang disebut Sprint, kemudian hasilnya dievaluasi bersama pengguna untuk mendapatkan masukan. Pendekatan ini memungkinkan tim untuk lebih cepat beradaptasi terhadap perubahan kebutuhan dan menghasilkan produk yang lebih sesuai dengan harapan pengguna.

                            Prinsip Utama:

                            Kolaborasi aktif antara tim dan pengguna.
                            Respons cepat terhadap perubahan kebutuhan.
                            Pengembangan bertahap melalui iterasi.
                            Fokus pada produk yang dapat digunakan.

                            Kelebihan:

                            Fleksibel terhadap perubahan.
                            Mempercepat proses pengembangan.
                            Meningkatkan keterlibatan pengguna.
                            Masalah dapat diketahui lebih awal.

                            Kekurangan:

                            Membutuhkan komunikasi yang intensif.
                            Sulit diterapkan jika kebutuhan proyek tidak jelas.
                            Membutuhkan komitmen tinggi dari seluruh anggota tim.

                            Contoh Penggunaan:

                            Pengembangan aplikasi startup.
                            Pembuatan aplikasi mobile yang terus diperbarui.
                            Proyek perangkat lunak dengan kebutuhan yang sering berubah.
                            ',
            'gambar' => '-',
            'id_kategori' => 6
        ]);

    }
}
