<html>
<body>
<HEAD>
<div align="center"><h1> Software Requirements Spesification</h1></div>

<p align="center"><b>Version 1.4 </b><br>
<p align="center">2 Maret 2018</b>
<p align="center">
<img src="https://2.bp.blogspot.com/-dxdRgMQGbLk/WpA-Tp2rNGI/AAAAAAAAAh8/3_jBWFb7Cf48033QvB34D2WCwoN2sxZLgCLcBGAs/s1000/index.png"/>
</p>

<br><p align="center"><b> SISTEM INFORMASI AKADEMIK BIMBINGAN BELAJAR<br>
<p align="center">Kelompok 3 <br></b>
 Fikih Nur Ramadan 				(1603068)<br>
 Firda Faradila		(1603069)<br>
 Lulu Mukhoyyaroh			(1603075)<br>
 Muh. Bimo Abditama		(1603078)<br>
 Widi Indriyani		(1603087)<br><br><br>

<p align="center"><b>Jurusan Teknik Informatika</b><br>
<p align="center"><b>Politeknik Negeri Indramayu</b>
<p align="center"><b>2018</b>
</p>
</body>
</html>


----------


----------

## 1.	Pendahuluan

#### 1.1	Tujuan <br>
Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun ” Sistem Informasi Bimbingan Belajar”. Dokumen ini dibangun untuk memudahkan dalam melakukan proses pengolahan nilai, pengolahan absensi, lihat jadwal dan konsultasi bimbingan yang dilakukan oleh pengguna dan penyedia. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak ”SIMBEL” (Sistem Informasi Bimbingan Belajar).

####1.2	Lingkup Masalah

SIMBEL merupakan aplikasi yang kami bangun untuk mempermudah pengguna dan penyedia dalam pengolahan nilai, pengolahan absens, lihat jadwal dan konsultasi bimbingan. Dengan bertujuan aplikasi yang kami buat ini supaya praktis dalam pengimputan data tanpa menggunakan kertas secara manual. Artinya dengan aplikasi ini kita tidak perlu repot - repot membuang kertas hanya untuk pengolahan absensi, pengolahan nilan dan sebagainya.

####1.3	Definisi, akronim, singkatan

__Akronim dan Singkatan__ :

| No | Singkatan | Arti Kata |
|----|-----------|-----------|
| 1  | SIMBEL | Sistem Informasi Bimbingan Belajar | 
| 2  | SRS | Software Requirement Specification |

__Definisi :__ <br>

* Software Requirement Specification adalah perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasih pembuat dengan pengguna.

* use case adalah situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda.

####1.4	Referensi

Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah:

* Praktikum Analisis dan Desain Sistem Informasi, 2009\

* Sistem Informasi Sekolah Terpadu, 2009

* http://yaniwid.wordpress.com/2008/10/16/kebutuhan-fungsional-vs-non-fungsional/

* http://www.academia.edu/23589245/DOKUMEN_SRS_SOFTWARE_REQUIRMENT_SPESIFICATION_APLIKASI_RANDOM_GRUP_Oleh_Kelompok_2_Ade_Mustofa_1403001_Aep_Saeful_Hidayat.\

####1.5	Overview

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

__Add Jadwal Mapel__

![](http://i65.tinypic.com/24glox5.png)


__Add Jadwal Try Out__

![](http://i67.tinypic.com/10fde6h.png)

__Add Kelas__

![](http://i68.tinypic.com/33ysxah.png)

__Add Tenor__

![](http://i63.tinypic.com/3484jrl.png)

__Add User Pelajar__

![](http://i66.tinypic.com/35jlbu8.png)

__Add User__

![](http://i67.tinypic.com/2mzb77m.png)

__Edit Pelajar__

![](http://i66.tinypic.com/2daely0.png)

__Form Pendaftaran Pada Admin__

![](http://i68.tinypic.com/zwj3ox.png)

__Index Edit Data__

![](http://i63.tinypic.com/rcontj.png)

__Index Edit Info__

![](http://i65.tinypic.com/ayowlx.png)

__Index Edit Jadwal__

![](http://i64.tinypic.com/2ilzcle.png)

__Index Edit User__

![](http://i66.tinypic.com/ndmtf9.png)

__Log In Admin__

![](http://i66.tinypic.com/2zi3a4z.png)

__Dashboard Absensi__

![](http://i67.tinypic.com/24e2ubo.png)

__Dashboard Bimbingan__

![](http://i66.tinypic.com/ycxno.png)

__Dashboard Pelajar Hasil Nilai__

![](http://i65.tinypic.com/2edw1s8.png)

__Dashboard Pelajar__

![](http://i64.tinypic.com/1zz573n.jpg)

__Data Kelas__

![](http://i63.tinypic.com/2j0zjhx.png)

__Data Pelajar__

![](http://i64.tinypic.com/20sc9y8.png)

__Data Tenor__

![](http://i67.tinypic.com/2mh7sb8.png)

__Data__

![](http://i68.tinypic.com/2v3r676.png)

__Edit Data__

![](http://i66.tinypic.com/284b2h.png)

__Form Login Pelajar__

![](http://i64.tinypic.com/ml57iq.png)

__Form Login Tenor__

![](http://i63.tinypic.com/2drt2kj.png)

__Form Pendaftaran Pada Admin__

![](http://i68.tinypic.com/zwj3ox.jpg)

__Home__

![](http://i66.tinypic.com/fc1r3d.jpg)

__Jadwal Mata Pelajaran__

![](http://i64.tinypic.com/1zmi4jd.png)

__Jadwal Try Out__

![](http://i67.tinypic.com/2q19k5h.png)

__Login Orang Tua__

![](http://i67.tinypic.com/m9oy81.png)

__Syarat Add User__

![](http://i68.tinypic.com/207nbds.png)

__Informasi__

![](http://i67.tinypic.com/2uhl0u0.png)

__Log In__

![](http://i63.tinypic.com/2sbk5ya.png)

__About__

![](http://i66.tinypic.com/jskcps.png)

__Home__

![](http://i66.tinypic.com/fc1r3d.png)

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

**2.1.5 **Antar muka komunikasi****

Proses komunikasi dalam sistem ini menggunakan Bimbingan konsultasi yang terdapat pada fitur web sistem informasi bimbingan belajar Ganesha Operation, dimana Pelajar dan Tenorsaling berkomunikasi.

**2.1.6 Batasan-batasan memori**

Web Sistem Informasi Bimbingan Belajar bisa jalankan di Windows (XP,vista,7,8,server 2008 dll). Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan. Pengembangan perangkat lunak tidak akan merubah file-file ataupun database yang ada pada saat ini tanpa adanya user.

**2.1.7 Operasi-operasi**

| No | Operasi | Fungsi |
|----|---------|--------|
| 1  | Login | Digunakan untuk masuk akses aplikasi | 
| 2  | Mulai | Digunakan untuk memulai operasi |

**2.1.8 Kebutuhan-kebutuhan dalam tahap adaptasi**



#####2.2. Spesifikasi kebutuhan fungsional
![](http://i66.tinypic.com/t0oi8n.jpg)

**2.2.1 Login**

|  |  |
|--|--|
| Nama fungsi  |Login  |
|Ref|Bag 2.2, Login | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Login untuk Pelajar, Pengajar, Orang tua dan Admin|
|Basic Path|1. User sudah terdaftar dan jika sudah terdaftar maka bisa langsung menggunakan aplikasi yang menampilkan Dashboard sebagai halaman utamanya|
|Alternative|Tidak Ada|
|Post Condition|User dapat melihat Halaman utama web dan dapat mengakses fungsi lainnya |
|Exception Push	|1. Tidak ada Koneksi <br> 2. user belum mendaftar|

**2.2.2 Melihat Laporan Nilai dan Absensi**

|  |  |
|--|--|
| Nama fungsi  |Melihat Laporan Nilai dan Absensi  |
|Ref|Bag 2.2, Melihat Laporan Nilai dan Absensi | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Laporan dan Nilai|
|Basic Path|1. Orang Tua Login ke dalam Sistem <br>2. Orang tua Melihat Laporan Nilai dan Absensi <br>3.Sistem menampilkan Laporan Nilai dan Absensi|
|Alternative|Tidak Ada|
|Post Condition|Orang Tua dapat Melihat Laporan Nilai dan Absensi |
|Exception Push	|1. Tidak ada Koneksi |

**2.2.3 Melihat Data Mata Pelajaran**

|  |  |
|--|--|
| Nama fungsi  |Melihat Data Mata Pelajaran  |
|Ref|Bag 2.2, Melihat Data Mata Pelajaran | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Mata Pelajaran |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Data Mata Pelajaran <br>3.Sistem menampilkan Data Mata Pelajaran|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Laporan Nilai dan Absensi |
|Exception Push	|1. Tidak ada Koneksi |

**2.2.4 CRUD Nilai dan Absensi**

|  |  |
|--|--|
| Nama fungsi  |CRUD Nilai dan Absensi  |
|Ref|Bag 2.2, CRUD Nilai dan Absensi | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Nilai dan Absensi |
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin CRUD Nilai dan Absensi <br>3.Sistem menampilkan nilai dan absensi|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Laporan Nilai dan Absensi |
|Exception Push	|1. Tidak ada Koneksi |

**2.2.5 Melihat Data Kelas**

|  |  |
|--|--|
| Nama fungsi  |Melihat Data Kelas  |
|Ref|Bag 2.2, Melihat Data Kelas | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Kelas |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Data Kelas <br>3.Sistem menampilkan Data Kelas|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Laporan Data Kelas |
|Exception Push	|1. Tidak ada Koneksi |

**2.2.6 Melihat Jadwal Try Out**

|  |  |
|--|--|
| Nama fungsi  |Melihat Jadwal Try Out  |
|Ref|Bag 2.2, Melihat Jadwal Try Out | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Jadwal Try Out |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Jadwal Try Out <br>3.Sistem menampilkan Jadwal Try Out|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Jadwal Try Out |
|Exception Push	|1. Tidak ada Koneksi |

**2.2.7 Melihat Data Jadwal Mata Pelajaran**

|  |  |
|--|--|
| Nama fungsi  |Melihat Data Jadwal Mata Pelajaran  |
|Ref|Bag 2.2, Melihat Data Jadwal Mata Pelajaran | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Jadwal Mata Pelajaran |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Data Jadwal Mata Pelajaran <br>3.Sistem menampilkan Data Jadwal Mata Pelajaran|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Data Jadwal Mata Pelajaran |
|Exception Push	|1. Tidak ada Koneksi |

**2.2.8 Melakukan Bimbingan**

|  |  |
|--|--|
| Nama fungsi  |Melakukan Bimbingan  |
|Ref|Bag 2.2, Melakukan Bimbingan | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Bimbingan|
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melakukan Bimbingan <br>3.Sistem menampilkan Data Bimbingan|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melakukan Bimbingan Dan Melihat Data Bimbingan|
|Exception Push	|1. Tidak ada Koneksi |

**2.2.9 CRUD Data Pelajaran**

|  |  |
|--|--|
| Nama fungsi  |CRUD Data Pengajar  |
|Ref|Bag 2.2, CRUD Data Pengajar | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Data Pengajar|
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin Melakukan CRUD Data Pengajar <br>3.Sistem menampilkan CRUD Data Pengajar|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan CRUD Data Pengajar|
|Exception Push	|1. Tidak ada Koneksi |

**2.2.10 CRUD Data Pelajar**

|  |  |
|--|--|
| Nama fungsi  |CRUD Data Pelajar  |
|Ref|Bag 2.2, CRUD Data Pelajar | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Data Pelajar|
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin Melakukan CRUD Data Pelajar <br>3.Sistem menampilkan CRUD Data Pelajar|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan CRUD Data Pelajar|
|Exception Push	|1. Tidak ada Koneksi |

**2.2.11 CRUD Data Jadwal Try Out**

|  |  |
|--|--|
| Nama fungsi  |CRUD Data Jadwal Try Out  |
|Ref|Bag 2.2, CRUD Data Jadwal Try Out | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Data Jadwal Try Out|
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin Melakukan CRUD Data Jadwal Try Out <br>3.Sistem menampilkan CRUD Data Jadwal Try Out|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan CRUD Data Jadwal Try Out|
|Exception Push	|1. Tidak ada Koneksi |

**2.2.12 Melihat Data Aspek Penilaian**

|  |  |
|--|--|
| Nama fungsi  |Melihat Data Aspek Penilaian  |
|Ref|Bag 2.2, Melihat Data Aspek Penilaian | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Aspek Penilaian|
|Basic Path|1. User Login ke dalam Sistem <br>2.Admin Melakukan Data Aspek Penilaian<br>3.Sistem menampilkan Data Aspek Penilaian|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan Data Aspek Penilaian|
|Exception Push	|1. Tidak ada Koneksi |

**2.2.13 Melihat Laporan Nilai Dan Absensi**

|  |  |
|--|--|
| Nama fungsi  |Melihat Laporan Nilai Dan Absensi |
|Ref|Bag 2.2,Melihat Laporan Nilai Dan Absensi | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Laporan Nilai Dan Absensi|
|Basic Path|1. User Login ke dalam Sistem <br>2.Admin Melakukan Data Laporan Nilai Dan Absensi<br>3.Sistem menampilkan Data Laporan Nilai Dan Absensi|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan Data Laporan Nilai Dan Absensi|
|Exception Push	|1. Tidak ada Koneksi |

__2.3. Spesifikasi kebutuhan non-fungsional__

Dalam sistem informasi ini, kebutuhan yang mendukung kelancaran fungsi-fungsi utama dapat didefinisikan pada Tabel 1.

Tabel 1 Kebutuhan Non Fungsional

Parameter | Requirement
----------| ----------------
Availability |	24 jam nonstop, kecuali ada maintenance / perbaikan sistem
Reliability |	Kegagalan yang ditolerir sekitar 5%
Ergonomy	| Sistem informasi ini harus user friendly
Portability	| Aplikasi ini berjalan pada platform atau sistem operasi apa
saja yang mendukung aplikasi berbasis web
Memory	| Minimum memory 128 MB
Security|	Login (manajemen user) dan validasi data sangat penting
Bahasa	|Menggunakan bahasa Indonesia, kecuali ada penambahan
Komunikasi|	Fasilitas untuk menggunakan bahasa lain selain bahasa Indonesia
Halaman Utama|	Halaman utama harus menampilkan logo dari perusahaan yang bersangkutan

__2.4. Logika Struktur Data__

![](http://i68.tinypic.com/23kvjbn.jpg)

<b>Pengajar</b>


|Data Item| Type | Deskripsi|
|--|--|--|
|Nama |Text  |Nama pengajar|
|Id_pengajar|Integer|Nomor auto increment pengajar |
|NIP|Integer|Nomor Induk Pegawai |
|Alamat|Integer|Alamat Pengajar|
|Jenis Kelamain|Varchar|Jenis kelamin pengajar|
|Nomor Hp|Interger|No HP pengajar|
|Password|Varchar|Password pengajar|
|Email|Varchar|Email Pengajar|

<b>Jadwal Pelajaran</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Jadwal Mapel|integer|nomor auto increment Jadwal Mapel|
|Nama Mapel|varchar|Nama mata pelajaran|

<b>Detail Jadwal Pelajaran</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Detail_Jadwal Mapel|integer|nomor auto increment Detail Jadwal Mapel|
|Nama Mapel|varchar|Nama mata pelajaran|
|Id_Matpel|integer|nomor auto increment mata pelajaran|
|Id_Pengajar|integer|nomor auto increment pengajar|
|Tanggal|Date|Tanggal jadwal pelajaran|
|Hari|varchar|Hari jadwal pelajaran|

<b>Siswa</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_siswa|integer|nomor auto increment siwa|
|NIS|integer|Nomor Induk Siswa|
|Email|varchar|Email siswa|
|Jenis kelamin|varchar|Jenis kelamin siswa|
|Alamat|varchar|Alamat siswa|
|Password|varchar|Password siswa|
|Nama|varchar|Nama siswa|

<b>Orang Tua</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_siswa|integer|nomor auto increment siswa|
|Id_orang tua|integer|nomor auto increment orang tua|
|NIK|integer|Nomor induk kependudukan|
|Alamat|varchar|alamat orang tua|
|Jabatan|varchar|jabatan orang tua|
|Email|varchar|Email orang tua|
|Password|varchar|Password orang tua|
|Nama Orang tua|varchar|Nama orang tua|

<b>Kelas</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_kelas|integer|nomor auto increment kelas|
|Nama kelas|varchar|Nama kelas|

<b>Jadwal Try Out</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_jadwal_TO|integer|nomor auto increment jadwal_to|
|Tahun_Ajaran|integer|Tahun ajaran try out|

<b>Detail Jadwal Try Out</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Detail_jadwal_TO|integer|nomor auto increment detail_jadwal_to|
|Id_jadwal_TO|integer|nomor auto increment jadwal_to|
|Id_Matpel|integer|nomor auto increment matpel
|Tanggal|date|Tanggal try out|
|Hari|varchar|Hari try out|

<b>Absensi</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Absensi|integer|nomor auto increment absensi|
|Id_Matpel|integer|nomor auto increment mata pelajaran|
|Id_Siswa|integer|nomor auto increment siswa|
|Id_Pengajar|integer|nomor auto increment pengajar|
|Id_Kelas|integer|nomor auto increment kelas|

<b>Nilai</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Nilai|integer|nomor auto increment nilai|
|Id_Matpel|integer|nomor auto increment mata pelajaran|
|Id_Siswa|integer|nomor auto increment siswa|
|Id_Pengajar|integer|nomor auto increment pengajar|
|Id_Kelas|integer|nomor auto increment kelas|

__2.5. Karakteristik pengguna__

Dalam website SIMBEL ini. Terdapat empat user berdasarkan (privilege) dalam system, antara lain :

__1. Administrator__

* Memiliki hak penuh terhadap system, mampu merubah isi system.
* Memiliki hak akses secara langsung pada database system.
* User ini ada untuk melakukan maintenance terhadap system (jika diperlukan dan keadaan darurat).

__2.Pengajar (Tentor)__

* Memberikan pengajaran terhadap pelajar (siswa) setelah melakukan keikut sertaan dalam kerja sama.
* Memberikan laporan data penilaian dan absensi yang dapat diinformasikan kepada user melalui SIMBEL.
* Menjawab konsultasi bimbingan yang diberikan oleh pelajar (tenor).
* Tidak memiliki hak penuh terhadap system dan database secara langsung.

__3.Pelajar (Siswa)__

* Haknya sangat terbatas, user ini hanya diizinkan untuk melihat nilai, mata pelajaran, jadwal try out, sarana dan prasarana dan data absensi yang di berikan oleh pengajar (tenor) melalui SIMBEL.
* Memberikan konsultasi bimbingan kepada pengajar (tenor).
* Tidak memiliki hak akses apapun.

__4.Orang Tua__
 
* Haknya sangat terbatas, eser ini hanya diizinkan melihat nilai, mata pelajaran, jadwal try out, sarana dan prasarana dan data absensi yang di berikan oleh pengajar (tenor) melalui SIMBEL.
* Tidak memiliki hak akses apapun.

__2.6.  Batasan – Batasan__

1. Perangkat lunak hanya bisa di akses ketika terhubung dengan internet.

2. Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan.

3. Pengembangan perangkat lunak tidak akan merubah file - file ataupun database yang ada.

__2.7. Asumsi - asumsi dan ketergantungan/keterkaitan__

Orang yang sudah login ketika webrowsernya di keluar maka anda di minta untuk login kembali.

__2.8. Kebutuhan – kebutuhan penyeimbang__

Website akan dijalankan di server dengan kecepatan akses internet yang tinggi. Kecepatan koneksi akan tergantung pada hardware dan karakteristik dari sistem.Website akan compatible dengan beberapa browser yang umum digunakan oleh customer,seperti Internet Explorer, Mozilla Firefox, Opera, Chrome, Safari dan Netscape. SIstem iniakan menggunakan internet security yang sama dengan yang digunakan di BPS.


##3.	Kebutuhan lain yang spesifik
Kebutuhan Fungsional adalah kebutuhan yang harus dipenuhi agar suatu sistem dapat berjalan atau dapat dikatakan kebutuhan tambahan yang memiliki input, proses, dan output. Kebutuhan fungsional yang harus ada dalam sistem yang akan dikembangkan ini adalah sebagai berikut:

-	Sistem harus dapat mempermudah pengguna / user dalam menggunkan aplikasi ini.

##4.	Informasi pendukung




 


