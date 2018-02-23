1.	Pendahuluan

1.1	Tujuan
Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun ” Sistem Informasi Bimbingan Belajar”. Dokumen ini dibangun untuk memudahkan dalam melakukan proses pengolahan nilai, pengolahan absensi, lihat jadwal dan konsultasi bimbingan yang dilakukan oleh pengguna dan penyedia. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak ”SIMBEL” (Sistem Informasi Bimbingan Belajar).

1.2	Lingkup Masalah

SIMBEL merupakan aplikasi yang kami bangun untuk mempermudah pengguna dan penyedia dalam pengolahan nilai, pengolahan absens, lihat jadwal dan konsultasi bimbingan. Dengan bertujuan aplikasi yang kami buat ini supaya praktis dalam pengimputan data tanpa menggunakan kertas secara manual. Artinya dengan aplikasi ini kita tidak perlu repot - repot membuang kertas hanya untuk pengolahan absensi, pengolahan nilan dan sebagainya.

1.3	Definisi, akronim, singkatan

Akronim dan Singkatan :

•	SIMBEL 	: Sistem Informasi Bimbingan Belajar

•	SRS 	: Software Requirement Specification

Definisi :
•	Software Requirement Specification adalah perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasih pembuat dengan pengguna.

•	use case adalah situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda.

1.4	Referensi

Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah:

•	Praktikum Analisis dan Desain Sistem Informasi, 2009\

•	Sistem Informasi Sekolah Terpadu, 2009

•	http://yaniwid.wordpress.com/2008/10/16/kebutuhan-fungsional-vs-non-fungsional/

•	http://www.academia.edu/23589245/DOKUMEN_SRS_SOFTWARE_REQUIRMENT_SPESIFICATION_APLIKASI_RANDOM_GRUP_Oleh_Kelompok_2_Ade_Mustofa_1403001_Aep_Saeful_Hidayat.\

1.5	Overview

Dokumen SRS ini dibagi menjadi tiga bagian utama, yaitu :
bagian pertama berisi penjelasan tentang dokumen SRS yang mencakup tujuan pembuatan dokumen ini, lingkup masalah yang diselesaikan oleh perangkat lunak yang dikembangkan, definisi, referensi dan deskripsi umum. Bagian kedua berisi penjelasan secara umum mengenai Sistem Informasi Bimbingan Belajar yang akan dibangun, meliputi fungsi dari perangkat lunak, karakteristik pengguna, batasan dan asumsi yang diambil dala pembuatan perangkat lunak. Bagian ketiga berisi uraian kebutuhan perangkat lunak secara lebih rinci.



##2.	Gambaran Umum

Aplikasi sistem informasi bimbingan belajar pada umumnya berhubungan dengan menampilkan laporan hasil kegiatan dia selama bimbingan belajar seperti nilai try out, absensi kehadiran siswa, jadwal try out, fitur chat konsultasi bimbingan belajar dan juga orang tua siswa dapat mengetahui grafik kehadiran anaknya yang telah terdaftar pada lembaga bimbingan belajar.
Belum semua lembaga bimbingan belajar menggunakan aplikasi sistem informasi bimbingan belajar berbasis website. Pada aplikasi sistem informasi ini dapat di akses kapan pun dan di manapun tanpa harus datang langsung ke tempat bimbingan belajar. 

__2.1	Perspektif produk__

Perangkat lunak sistem informasi bimbingan belajar ini merupakan perangkat lunak yang digunakan untuk mempermudah proses pemberitahuan sebuah informasi dengan contoh pelaporan sebuah nilai dan absensi siswa, jadwal try out, fitur chat pada pengajar mengenai bimbingan konsultasi. Aplikasi sistem informasi berkaian dengan beberapa entitas lingkup lembaga bimbingan belajar yaitu siswa, pihak lembaga bimbingan belajar, dan orang tua siswa. Sistem informasi bimbingan belajar merupakan suatu web database application yang mengolah data dan melaporkan hasil study siswa pada saat kegiatan di lembaga bimbingan belajar.
Siswa mendapatkan informasi laporan nilai dan absensi, konsultasi mengenai bimbingan belajar kepada pengajar atau tenor, mendapatkan informasi jadwal mata pelajaran dan jadwal try out, dan juga mendapatkan informasi data pengajar. Orang tua siswa hanya mendapatkan sebuah informasi laporan grafik nilai dan absensi anak nya yang telah mengikuti kegiatan proses belajar di lembaga bimbingan belajar. Pengajar atau tenor berhak memberikan nilai siswa nya ketika mengikuti try out atau tugas lainnya dan pengajar pun berhak memberikan jawaban konsultasi bimbingan belajar kepada siswa nya melalui chat.

__2.1.1	Antarmuka sistem__

Dalam penggunaan, pengguna berinteraksi dengan sebuah aplikasi melalui browser pada HP, PC/Laptop

__2.1.2	Antarmuka pengguna__

Aplikasi sistem informasi bimbingan belajar ini menggunakan antarmuka berbasis web, dan pengguna mengoperasikannya menggukan sebuah PC/Laptop dengan sistem operasi Windows dan linux serta dapat diakses menggunakan perangkat mobile seperti HP, PDA, dan lain-lain 

__2.1.3	Antarmuka perangkat keras__

Aplikasi ini berjalan diatas perangkat keras berupa beberapa PC/Laptop yang saling terhubung oleh jaringan internet dan berkomunikasi dengan protocol https. Dimana file aplikasi ditempatkan pada web hosting yang di operasikan oleh administrator. Kebutuhan minimum perangkat keras yang dapat digunakan oleh Sistem Informasi Bimbingan Belajar adalah :

- PC/Laptop
- Keyboard
- Mouse
- Modem

__2.1.4	Antarmuka perangkat lunak__

1. Sistem Operasi (Windows 7 or Higher)
2. Bahasa Pemograman (HTML, PHP, JavaScript)
3. Software Pengolah (--)
4. Database Enginee (MySQL/SQL)
5. Software Pendukung (Framework CodeIgniter)

__2.2. Fungsi – fungsi produk__

Perangkat lunak system informasi bimbingan belajar ini mempunyai beberapa fungsi utama, antara lain :

1.	Fungsi administrasi 
Fungsi utama yang melayani admin untuk mengakses dan mengelola data system.
 
Terdiri dari beberapa subfungsi :

•	Subfungsi Insert Data

Subfungsi ini digunakan untuk memasukan data ke dalam database system.

•	Subfungsi Update Data

Subfungsi ini digunakan untuk mengubah data di dalam database system.

•	Subfungsi Delete Data

Subfungsi ini digunakan untuk menghapus data dari dalam database sistem.

__2.3. Karakteristik pengguna__

Dalam website SIMBEL ini. Terdapat empat user berdasarkan (privilege) dalam system, antara lain :

1.	Administrator

•	Memiliki hak penuh terhadap system, mampu merubah isi system.

•	Memiliki hak akses secara langsung pada database system.

•	User ini ada untuk melakukan maintenance terhadap system (jika diperlukan dan keadaan darurat).

2.	Pengajar (Tenor)

•	Memberikan pengajaran terhadap pelajar (siswa) setelah melakukan keikut sertaan dalam kerja sama.

•	Memberikan laporan data penilaian dan absensi yang dapat diinformasikan kepada user melalui SIMBEL.

•	Menjawab konsultasi bimbingan yang diberikan oleh pelajar (tenor).

•	Tidak memiliki hak penuh terhadap system dan database secara langsung.

3.	Pelajar (Siswa)

•	Haknya sangat terbatas, user ini hanya diizinkan untuk melihat nilai, mata pelajaran, jadwal try out, sarana dan prasarana dan data absensi yang di berikan oleh pengajar (tenor) melalui SIMBEL.

•	Memberikan konsultasi bimbingan kepada pengajar (tenor).

•	Tidak memiliki hak akses apapun.

4.	Orang Tua
 
•	Haknya sangat terbatas, eser ini hanya diizinkan melihat nilai, mata pelajaran, jadwal try out, sarana dan prasarana dan data absensi yang di berikan oleh pengajar (tenor) melalui SIMBEL.

•	Tidak memiliki hak akses apapun.

__2.4.  Batasan – Batasan__

1. Perangkat lunak hanya bisa di akses ketika terhubung dengan internet.

2. Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan.

3.Pengembangan perangkat lunak tidak akan merubah file - file ataupun database yang ada.

__2.5. Asumsi - asumsi dan ketergantungan/keterkaitan__

Orang yang sudah login ketika webrowsernya di keluar maka anda di minta untuk login kembali.

__2.6. Kebutuhan – kebutuhan penyeimbang__

Website akan dijalankan di server dengan kecepatan akses internet yang tinggi. Kecepatan koneksi akan tergantung pada hardware dan karakteristik dari sistem.Website akan compatible dengan beberapa browser yang umum digunakan oleh customer,seperti Internet Explorer, Mozilla Firefox, Opera, Chrome, Safari dan Netscape. SIstem iniakan menggunakan internet security yang sama dengan yang digunakan di BPS.





 


