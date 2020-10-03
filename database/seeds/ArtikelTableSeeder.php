<?php

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('artikels')->insert([
            'title' => 'Java Disebut Masih Jadi Bahasa Pemrograman Terpopuler',
            'content' => 'Java, JavaScript, dan Python bisa dibilang merupakan tiga bahasa pemrograman terpopuler. Dari ketiganya, Java ternyata masih menjadi yang paling banyak populer. Hal tersebut diungkapkan oleh JetBrains, penyedia lingkungan pengembangan terpadu (IDE) yang melakukan survei terhadap 20.000 pengembang software dalam laporan State of Developer Ecosystem 2020. Dari sini ditemukan bahwa Java merupakan bahasa pemrograman terpopuler, tapi JavaScript lebih banyak dipakai. Ketika para developer ditanya soal bahasa pemrograman utama mereka, sebanyak 39 persen menjawab JavaScript, kemudian Java 37 persen, dan  Python 31 persen. Lalu kenapa Java dinobatkan sebagai bahasa pemrograman terpopuler, bukan JavaScript yang justru lebih banyak digunakan? JetBrains mengatakan bahwa banyak developer harus bersinggungan dengan JavaScript saat mengerjakan proyek, karena itulah angka penggunaannya tinggi. Namun, sebagaimana dihimpun KompasTekno dari The Register, Selasa (16/6/2020), ketika disinggung soal waktu pemakaian secara keseluruhan, angkanya menurun jauh. Tahun lalu, survei JetBrains mengungkap bahwa hanya 17 persen developer menggunakan JavaScript sebagai satu-satunya bahasa pemrograman mereka, dibandingkan Java sebesar 44 persen. Java sendiri pertama kali diperkenalkan pada 1995 dan semenjak itu selalu menjadi salah satu bahasa pemrograman terpopuler. Java adalah pilar utama sistem operasi Android, walaupun sebagian besar sistem operasi yang dibangun dari kernel Linux itu ditulis dalam bahasa C.',
            'image' => '/img/uploads/artikelJava.jpg',
            'writer' => 'Ridlo Shuhardi',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('artikels')->insert([
            'title' => 'Ini Bosque, Bahasa Pemrograman Baru dari Microsoft',
            'content' => 'Microsoft meluncurkan bahasa pemrograman open-source terbaru, Bosque. Kebetulan namanya sama dengan istilah kekininan yang sering diucapkan anak muda zaman now, " bosque" dari kata "bosku", sejenis dengan "panutanque" dari "panutanku" dan lain-lain. Bahasa pemrograman ini diluncurkan Microsoft sebagai upaya untuk membuat bahasa pemrograman yang lebih sederhana, jelas, dan mudah dimengerti, baik untuk programmer maupun untuk mesin (komputer). "Bahasa pemrograman Bosque dirancang untuk membuat kode sederhana dan mudah dicerna manusia dan mesin," ujar pihak Microsoft di dalam blog resminya. Tidak dijelaskan secara detail sesederhana apa Bosque dibandingkan dengan bahasa pemrograman lain seperti Java atu C++. Tujuan dibuatnya Bosque sendiri, menurut Microsoft, adalah untuk meningkatkan produktifitas programmer, meningkatkan kualitas software, serta memberikan tool dan pengalaman baru bagi para programmer. Meski begitu, untuk saat ini, pihak Microsoft menyarankan para pengembang agar tidak menggunakan Bosqueyang akan diwujudkan menjadi sebuah produk. Sebab, Bosque sendiri masih berada dalam tahap pengembangan awal. Dengan kata lain, di dalam Bosque, masih akan ditemui beberapa "bug" lantaran beberapa tool fungsional masih belum stabil, sebagaimana dihimpun KompasTekno dari halaman resmi bahasa pemrograman Bosque di Github, Rabu (24/4/2019).',
            'image' => '/img/uploads/bosque.png',
            'writer' => 'Ridlo Shuhardi',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('artikels')->insert([
            'title' => 'Ingin Belajar Data? Ini Alasan Bahasa Pemrograman Python Jadi Pilihan',
            'content' => 'Tahukah Kamu? Di dalam dunia pemrograman, ada satu bahasa yang biasa dipakai dan cukup mudah untuk diakses yaitu Python. Apa itu Python dan apa keunggulannya untuk praktisi data? Python adalah bahasa pemrograman yang dibuat pertama kalinya oleh Guido van Rossum. Pada dasarnya, sintak atau bahasa pemrograman yang dirancang oleh Guido van Rossum ini sebenarnya sangat banyak digunakan dalam pembuatan program yang sering dipakai oleh pemula untuk kamu yang ingin belajar data. Salah satu keunggulannya belajar Python adalah, bahasa pemrograman ini mudah untuk dipelajari. Keunggulan "Python"   Mengapa demikian? Struktur bahasa yang sediakan rapi dan lebih mudah dipahami dibandingkan bahasa pemrograman lainnya. Baca juga: DQLab Gelar DQLab Data Champion, Yuk Ikut untuk Mulai Karier Praktisi Data!   Jadi, bagi kamu yang ingin bergelut di bidang data dan ingin belajar coding, belajar menggunakan Python bisa menjadi langkah awal yang paling tepat. Kelebihan lainnya dari bahasa pemrograman Phyton dengan pemrograman lainnya adalah, mudah ditulis dan dibaca, sintaks Python yang hampir mendekati bahasa manusia yaitu bahasa Inggris, memberi kemudahan dalam penulisan kode program. Sebagai platform belajar Online, DQLab berkolaborasi dengan Adriyan sebagai salah satu member DQLab yang kini menjadi dosen teknik mesin di Sekolah Tinggi Teknologi Nasional. DQLab memberikan kesempatan untuk kamu yang ingin memulai belajar bahasa pemrograman Phyton dengan mengetahui permulaan dalam instalasi Phyton di perangkat lunak Window. “Belajar dan praktekkanlah, hanya itu yang membuat Anda memiliki keahlian,” ujar Adriyan.',
            'image' => '/img/uploads/blajarpython.jpeg',
            'writer' => 'Auliya Oni',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('artikels')->insert([
            'title' => 'Dicoding Gelar Pelatihan Pemrograman Android Gratis',
            'content' => 'Dicoding, startup penyedia platform digital yang menjembatani pengembang aplikasi dengan kebutuhan pasar, menawarkan program beasiswa pemrograman "Indonesia sehat, tetap produktif". Di tengah merebaknya temuan kasus positif Covid-19 Indonesia, Dicoding ingin memberi semangat agar para developer aplikasi Indonesia tetap produktif. “Semoga inisiatif beasiswa pemrograman ini dapat menjadi salah satu solusi agar negara kita tetap positif di tengah situasi endemi saat ini,” tutur Narenda.,” ujar CEO Dicoding Narenda Wicaksono, dalam keterangan pers yang diterima KompasTekno, Jumat (13/3/2020). Pelatihan yang diberikan mulai dari pengembangan aplikasi dan game Android, belajar machine learning via Python, hingga membuat filter Instagram dengan teknologi AR. Pada program beasiswa ini para pendaftar dipersilakan memilih satu dari lima pilihan beasiswa untuk kelas pemula, yaitu: Memulai pemrograman dengan Kotlin Memulai pemrograman dengan Python Belajar membuat aplikasi Kognitif Belajar membuat Augmented Reality Belajar membuat game untuk pemula Masing-masing kelas berdurasi 30 hari. Tidak ada kuota ataupun persyaratan khusus dalam program beasiswa ini. Karena seluruh proses pembelajaran hingga konsultasi dilakukan secara online di platform Dicoding maka dibutuhkan perangkat komputer/laptop dan koneksi internet untuk mengikuti program ini. Setiap pelamar beasiswa akan mendapatkan kelas pilihan masing-masing selama terdaftar sebagai anggota di dicoding.com. Untuk menjadi anggota Dicoding pun tidak dipungut bayaran sama sekali. "Harapan kami, meski mobilitas kian terbatas, seluruh peserta dari Sabang sampai Merauke bisa leluasa dapat belajar tanpa sekat ataupun batasan ruang," kata Narenda. Pendaftaran beasiswa pemrograman "Indonesia Sehat, Tetap Produktif" ini berlangsung pada 10-19 Maret 2020. Untuk informasi lebih lanjut silakan kunjungi laman ini, https://www.dicoding.com/blog/beasiswasehat/ atau media sosial Dicoding (IG: @ dicoding; FB: @dicoding; Twitter: @dicoding; Youtube: Dicoding Indonesia). Sebelumnya, Dicoding pernah menggelar program beasiswa untuk anak muda Indonesia dan mereka yang memiliki keterbatasan ekonomi. Program tersebut meraih sambutan positif dari ribuan pelamar.',
            'image' => '/img/uploads/dicoding-pelatihan.jfif',
            'writer' => 'Shouko chan',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('artikels')->insert([
            'title' => 'Milenial Pilih Belajar Bahasa Pemrograman Ketimbang Mandarin',
            'content' => 'Sebanyak 72 persen milenial mengatakan lebih penting belajar bahasa pemograman “Phyton” ketimbang Mandarin. Setidaknya begitu hasil survei bank investasi global Goldman Sachs terhadap 2.000-an milenial berusia 20 hingga 21 tahun yang berasal dari Asia, Amerika, Eropa, Timur Tengah, dan Afrika. Setiap tahun Goldman Sachs membuka kesempatan magang untuk ribuan anak muda dari seluruh penjuru dunia. Tahun ini perunding andal Wall Street tersebut sekaligus melakukan survei. Para milenial ditanya tentang hal-hal keseharian, mulai dari media sosial yang paling disukai, kebiasaan menghabiskan duit, hingga proyeksi masa depan.   Secara garis besar para milenial optimis akan masa depan yang lebih cerah. Mereka melihat ada kesempatan besar bagi pemerintah dan komunitas masyarakat untuk bekerja sama mewujudkannya.',
            'image' => '/img/uploads/milenal-pemrograman.jpg',
            'writer' => 'Reume chan',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
