<html>
<body>
<div align="center"><h1>Software Testing Document Plan</h1></div>

<p align="center"><b>Version 1.0 </b><br>
<p align="center">2 Maret 2018</b>
<p align="center">
<img src="https://2.bp.blogspot.com/-dxdRgMQGbLk/WpA-Tp2rNGI/AAAAAAAAAh8/3_jBWFb7Cf48033QvB34D2WCwoN2sxZLgCLcBGAs/s1000/index.png"/>
</p>

<br><p align="center"><b> Sistem Informasi Akademik Bimbingan Belajar<br>
<p align="center">Kelompok 3 <br></b>
 Fkih Nur Ramadan				(1603068)<br>
 Firda Faradila		(1603069)<br>
 Lulu Mukhoyyaroh			(1603075)<br>
 Widi Indriyani		(1603087) <br>
 Muhammad Bimo Abditama (1603078)	
<br><br><br>

<p align="center"><b>Jurusan Teknik Informatika</b><br>
<p align="center"><b>Politeknik Negeri Indramayu</b>
<p align="center"><b>2018</b>
</p>
</body>
</html>


--------

--------

## Pendahuluan 

### 1.1.Tujuan Pembuatan Dokumen

Dokumen ini digunakan sebagai panduan untuk melakukan pengujian
terhadap perangkat lunak Sistem Informasi Bimbingan Belajar. Dokumen ini
dipakai untuk melihat kemampuan dari program yang telah dirancang agar sesuai
dengan keinginan dari pengguna. Pembuatan dokumen ini ditujukan untuk
menguji perangkat lunak Sistem Informasi Bimbingan Belajar yang merupakan
bagian dari tugas mata kuliah Rekayasa Perangkat Lunak.

### 1.2.Deskripsi Umum Sistem

Perangkat lunak yang akan diuji adalah “Sistem Informasi Akademik Bimbingan Belajar”. Perangkat lunak ini adalah perangkat lunak yang digunakan untuk
melakukan bimbingan belajar secara terorganisir, seperti mempermudah pengguna dan penyedia dalam pengolahan nilai, pengolahan absens, lihat jadwal dan konsultasi bimbingan. Sistem ini diimplementasikan melalui komunikasi di media antara sesama pengguna dengan
sistem.

### 1.3.Deskripsi Dokumen (Ikhtisar)

Dalam dokumen ini berisi 3 bagian utama yaitu Pendahuluan, Identifikasi
dan Rencana Pengujian, Deskripsi dan Uji Hasil.

### 1.4.Definisi dan Singkatan

| No | Singkatan | Arti Kata |
|------|----|--------|
| 1 | SKPL | Spesifikasi Kebutuhan Perangkat Lunak, atau dalam bahasa Inggris-nya sering juga disebut sebagai Software Requirements Spesification (SRS), dan merupakan spesifikasi dari perangkat lunak yang akan dikembangkan. |
| 2 | SKPL-SK.K-xxxx | Kode yang digunakan untuk merepresentasikan kebutuhan (requirement) pada SK, dengan SK merupakan kode perangkat lunak, SK.K adalah kode fase, dan xxxx adalah digit/nomor kebutuhan (requirement). |
| 3 | DFD | Data Flow Diagram, diagram dan notasi yang digunakan untuk menunjukkan aliran data pada perangkat lunak. |
| 4 | ERD | Entity Relationship Diagram, diagram dan notasi yang digunakan untuk merepresentasikan struktur data statis pada perangkat lunak. |
| 5  | DPPL-Akkses.K-xxxx | Kode yang digunakan untuk mengimplementasikan perancangan pada Akkses, dengan Akkses merupakan kode perangkat lunak, Akkses.Kadalah kode fase, dan xxxx adalahdigit/nomor perancangan. |

### 1.5.Dokumen Referensi

* Ernita H. GL03. Dokumen Uji Perangkat Lunak (DUPL) SDS. Bogor.
* Sistem Pentiketan Elektronik Konser.2013. Spesifikasi Kebutuhan Perangkat
Lunak (SKPL)SPEK. Bogor.
* Sistem Pentiketan Elektronik Konser.2013. Dokumen Perancangan Perangkat
Lunak (DPPL)SPEK. Bogor.

## 2. Lingkungan Pengujian Perangkat Lunak  

### 2.1 Perangkat Lunak Pengujian  

Perangkat lunak ini (SIMBEL) diujikan dengan beberapa perangkat lunak lain, yaitu :  
  
|Sistem Operasi | Windows 7|  
|------|-------|  
| Bahasa Pemrograman | PHP, CSS, HTML, MYSQL, Javascript|  
| Framework | CodeIgniter|  
| Database | XAMPP|  
| Text Editor | Sublime|  
| Web Browser | Modzila, Firefox, Google Chrome, Opera Browser dll.|  
| Web Server | Apache|  
  
### 2.2 Perangkat Keras Pengujian  

Perangkat keras yang diperlukan untuk menguji website SIMBEL ini adalah satu set computer.  
  
### 2.3 Material Pengujian  

Pada program “Sistem Informasi Bimbingan Belajar Akademik” ini siusers dapat melihat data orang tua, guru, siswa, mata elajaran, jadwal, kelas, laporan atau rekap nilai dan absensi tanpa melalui guru atau admin. Admin sendiri dapat menginputkan semua data tersebut. Siuser dapat melihat data tersebut hanya dengan membuka website ini kemudian login selain itu guru dan siswa dapat melakukan bimbingan lewat chat yang telah disedikan tanpa harus meluangkan waktu untuk bertemu. Orang tua pun dapat melakukan chat dengan guru tersebut untuk memantau anaknya tanpa harus ke tempatnya langsung.  

### 2.4 Sumber Daya Manusia  

Persyaratan sumberdaya manusia yang akan terlibat dalam proses pengujian perangkat lunak ini adalah :  

* Memahami konsep pemrograman berorientasi objek dalam PHP.  
* Memahami konsep framework dalam CodeIgniter.  
* Memahami proses pengujian perangkat lunak berorientasi objek.  
* Memhami konsep pemrograman database XAMPP.

### 2.5 Prosedur Umum Pengujian

#### 2.5.1 Pengenalan dan Latihan

Penguji aplikasi ini hanya diberikan latihan kembali tentang SQL, dan pengenalan lebih lanjut tentang Sublime text. Pada dasarnya penguji telah memiliki pengetahuan tentang hal yang disebutkan sebelumnya tetapi latihan yang diberikan hanya bersifat penyegaran kembali.

#### 2.5.2 Persiapan Awal
  
##### 2.5.2.1 Persiapan Prosedural  

Pengujian ini dilakukan di luar lingkungan kampus. Dimana pengujian ini dilakukan oleh tim penguji yang telah di tentukan oleh Dosen mata kuliah Rekayasa Perangkat Lunak (RPL). Alat yang digunakan 1 buah laptop dengan software yang telah di instalasi.  

##### 2.5.2.2 Persiapan Perangkat Keras  

Sebuah perangkat komputer yang dilengkapi dengan :    

* Processor: Intel Core i7 
* Memory: 2-4GB 
* Harddisk  

##### 2.5.2.3 Persiapan Perangkat Lunak
  
Sebuah perangkat lunak yang dilengkapi dengan :  
<ol>  
<li> Persiapan sistem operasi Microsoft Windows.</li>  
<li> Perangkat lunak yang akan di uji di copy ke sebuah direktori, misalkan C:\XAMPP\htdocs.</li>  
<li> Browser Google Chrome </li>  
<li> Database di import ke phpMyAdmin di database </li?  
<li> Sublime text untuk melihat source code</li>  
</ol>  

#### 2.5.3 Pelaksanaan

Pelaksanaan pengujian dilakukan dengan mengeksekusi perangkat lunak SRS dengan mengikuti skenario tertentu yang dibuat berdasarkan skenario yang terdapat pada dokumen Software Requirement Specification (SRS).  

#### 2.5.4 Pelaporan Hasil

Dokumen hasil uji dari aplikasi ini akan diberikan kepada asisten praktikum dan dievaluasi oleh asisten dan kelompok lain yang bertindak sebagai klien daro kelompok kami. Sehingga aplikasi mendapatkan umpan balik dalam pengembangan perangkat lunak ini selanjutnya.

## 3. Identifikasi dan Rencana Pengujian

### Tabel 1 Identifikasi dan Rencana Pengujian

| Kelas Uji | Butir Uji |Identifikasi| Tingkat Pengujian | Jenis Pengujian | Penguji|
|-----|-----|-----|-----|-----|-----|
|Pengujian Login |Pengujian nama pengguna dan kata sandi untuk semua user|DUPL - 01|Pengujian sistem| Black Box | Bimo|
||Kebenaran nama pengguna dan kata sandi untuk semua user|DUPL - 02|
|Pengujian Menambahkan Data Siswa |Pengujian Penambahan Data Siswa|DUPL - 03 | Pengujian sistem|Black Box|Firda|
||Kebenaran Penambahan Data Siswa | DUPL - 04|
|Pengujian Melihat Data Siswa |Pengujian Melihat Data Siswa|DUPL - 05 | Pengujian sistem|Black Box|Firda|
||Kebenaran dalam menampilkan data siswa | DUPL - 06|
|Pengujian Update Data Siswa |Pengujian Update Data Siswa|DUPL - 07 | Pengujian sistem|Black Box|Firda|
||Kebenaran Update Data Siswa | DUPL - 08|
|Pengujian Hapus Data Siswa |Pengujian Hapus Data Siswa|DUPL - 09 | Pengujian sistem|Black Box|Firda|
||Kebenaran Hapus Data Siswa | DUPL - 10|
|Pengujian Menambahkan Data Pengajar |Pengujian Penambahan Data Pengajar|DUPL - 11 | Pengujian sistem|Black Box|Lulu|
||Kebenaran Penambahan Data Pengajar | DUPL - 12|
|Pengujian Melihat Data Pengajar |Pengujian Melihat Data Pengajar|DUPL - 13 | Pengujian sistem|Black Box|Lulu|
||Kebenaran dalam menampilkan data pengajar | DUPL - 14|
|Pengujian Update Data Pengajar |Pengujian Update Data Pengajar|DUPL - 15 | Pengujian sistem|Black Box|Lulu|
||Kebenaran Update Data Pengajar | DUPL - 16|
|Pengujian Hapus Data Pengajar |Pengujian Hapus Data Pengajar|DUPL - 17 | Pengujian sistem|Black Box|Lulu|
||Kebenaran Hapus Data Pengajar | DUPL - 18|
|Pengujian Menambahkan Data Orang Tua |Pengujian Penambahan Data Orang Tua|DUPL - 19 | Pengujian sistem|Black Box|Fikih|
||Kebenaran Penambahan Data Orang Tua | DUPL - 20|
|Pengujian Melihat Data Orang Tua |Pengujian Melihat Data Orang Tua|DUPL - 21 |Pengujian sistem|Black Box|Fikih|
||Kebenaran dalam menampilkan data orang tua | DUPL - 22|
|Pengujian Update Data Orang Tua |Pengujian Update Data Orang Tua|DUPL - 23 | Pengujian sistem|Black Box|Fikih|
||Kebenaran Update Data Orang Tua | DUPL - 24|
|Pengujian Hapus Data Orang Tua |Pengujian Hapus Data Orang Tua|DUPL - 25 | Pengujian sistem|Black Box|Fikih|
||Kebenaran Hapus Data Orang Tua | DUPL - 26|
|Pengujian Menambahkan Mata Pelajaran |Pengujian Penambahan Data Mata Pelajaran|DUPL - 27 | Pengujian sistem|Black Box|Widi|
||Kebenaran Penambahan Data Mata Pelajaran | DUPL - 28|
|Pengujian Melihat Data Mata Pelajaran |Pengujian Melihat Data Mata Pelajaran|DUPL - 29 |Pengujian sistem|Black Box|Widi|
||Kebenaran dalam menampilkan data mata pelajaran | DUPL - 30|
|Pengujian Update Data Mata Pelajaran |Pengujian Update Data Mata Pelajaran|DUPL - 31 | Pengujian sistem|Black Box|Widi|
||Kebenaran Update Data Mata Pelajaran | DUPL - 32|
|Pengujian Hapus Data Mata Pelajaran |Pengujian Hapus Data Mata Pelajaran|DUPL - 33 | Pengujian sistem|Black Box|Widi|
||Kebenaran Hapus Data Mata Pelajaran | DUPL - 34|
|Pengujian Menambahkan Data Kelas |Pengujian Penambahan Data Kelas|DUPL - 35 | Pengujian sistem|Black Box|Bimo|
||Kebenaran Penambahan Data Kelas | DUPL - 36|
|Pengujian Melihat Data Kelas |Pengujian Melihat Data Kelas|DUPL - 37 |Pengujian sistem|Black Box|Bimo|
||Kebenaran dalam menampilkan data kelas | DUPL - 38|
|Pengujian Update Data Kelas |Pengujian Update Data Kelas|DUPL - 39 | Pengujian sistem|Black Box|Bimo|
||Kebenaran Update Data Kelas | DUPL - 40|
|Pengujian Hapus Data Kelas |Pengujian Hapus Data Kelas|DUPL - 41 | Pengujian sistem|Black Box|Bimo|
||Kebenaran Hapus Data Kelas | DUPL - 41|
|Pengujian Menambahkan Data Jadwal |Pengujian Penambahan Data Jadwal|DUPL - 42 | Pengujian sistem|Black Box|Fikih|
||Kebenaran Penambahan Data Jadwal | DUPL - 43|
|Pengujian Melihat Data Jadwal |Pengujian Melihat Data Jadwal|DUPL - 44 |Pengujian sistem|Black Box|Fikih|
||Kebenaran dalam menampilkan data jadwal | DUPL - 45|
|Pengujian Update Data Jadwal |Pengujian Update Data Jadwal|DUPL - 46 | Pengujian sistem|Black Box|Fikih|
||Kebenaran Update Data Jadwal | DUPL - 47|
|Pengujian Hapus Data Jadwal |Pengujian Hapus Data Jadwal|DUPL - 48 | Pengujian sistem|Black Box|Fikih|
||Kebenaran Hapus Data Jadwal | DUPL - 49|
|Pengujian Melihat Laporan Nilai |Pengujian Melihat Laporan Nilai|DUPL - 50 | Pengujian sistem|Black Box|Firda|
||Kebenaran Melihat Laporan Nilai | DUPL - 51|
|Pengujian Menambahkan Data Nilai |Pengujian Penambahan Data Nilai|DUPL - 52 | Pengujian sistem|Black Box|Firda|
||Kebenaran Penambahan Data Nilai | DUPL - 53|
|Pengujian Hapus Data Nilai |Pengujian Hapus Data Nilai|DUPL - 54 | Pengujian sistem|Black Box|Bimo|
||Kebenaran Hapus Data Nilai | DUPL - 55|
|Pengujian Update Data Nilai |Pengujian Update Data Nilai|DUPL - 56|Pengujian sistem|Black Box|Bimo|
||Kebenaran Update Data Nilai | DUPL - 57|
|Pengujian Melihat Laporan Absensi |Pengujian Melihat Laporan Absensi|DUPL - 58 | Pengujian sistem|Black Box|Lulu|
||Kebenaran Melihat Laporan Absensi | DUPL - 59|
|Pengujian Menambahkan Data Absensi |Pengujian Penambahan Data Absensi|DUPL - 60 | Pengujian sistem|Black Box|Lulu|
||Kebenaran Penambahan Data Absensi | DUPL - 61|
|Pengujian Live Chat |Pengujian Live Chat|DUPL - 62 | Pengujian sistem|Black Box|Firda|
||Kebenaran Live Chat | DUPL - 63|


## 4. Deskripsi dan Hasil Uji 

|Identifikasi | DUPL-1 | 
| ----- | -------|
| Nama Butir Uji | Login |
| Tujuan | Memerikasa apakah user dapat masuk kedalam sistem|
| Kondisi Awal | From Login sudah ada dan masih Kosong |
|| Pengguna sudah membuka halaman web |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan Username & Password |
|| 2. Tekan Tombol Sign in jika Username & Password  sudah di isi |
|Hasil
| Data yang diberikan | Username = Admin 
|| Password = Admin |
| Yang Diharapkan | Pengguna dapat Masuk kedalam sistem |
| Pengamatan | Username dan Password tidak boleh kosong |
|| Data yang dimasukkan harus sesuai dengan Database |
|| Jika data yang dimasukkan salah, Maka akan muncul peringatan |
| Kesimpulan | Diterima |
| Catatan | Login Sukses, Karena Mengikuti Prosedur yang ada di Use Cases |

|Identifikasi | DUPL-1 | 
| ----- | -------|
| Nama Butir Uji | Login |
| Tujuan | Memerikasa apakah user dapat masuk kedalam sistem|
| Kondisi Awal | From Login sudah ada dan masih Kosong |
|| Pengguna sudah membuka halaman web |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan Username & Password |
|| 2. Tekan Tombol Sign in jika Username & Password  sudah di isi |
|Hasil
| Data yang diberikan | Username = xzyxz 
|| Password = zxvcx |
| Yang Diharapkan | Pengguna dapat Masuk kedalam sistem |
| Pengamatan | Username dan Password tidak sesuai dengan database |
| Kesimpulan | Tidak Diterima |
| Catatan | Data yang dimasukkan tidak sesuai dengan database, maka Login Gagal |

|Identifikasi | DUPL-1 | 
| ----- | -------|
| Nama Butir Uji | Login |
| Tujuan | Memerikasa apakah user dapat masuk kedalam sistem|
| Kondisi Awal | From Login sudah ada dan masih Kosong |
|| Pengguna sudah membuka halaman web |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan Username & Password |
|| 2. Tekan Tombol Sign in jika Username & Password  sudah di isi |
|Hasil
| Data yang diberikan | Username = kosong 
|| Password = kosong |
| Yang Diharapkan | Pengguna dapat Masuk kedalam sistem |
| Pengamatan | Username dan Password Masih Kosong dan harus di isi |
| Kesimpulan | Tidak Diterima |
| Catatan | Tidak ada data yang dimasukkan atau from login masih kosong, maka Login Gagal |


| Identifikasi | DUPL-2|
|---|---|
|Nama Butir Uji | Penambahan data induk siswa dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk siswa |
|Kondisi Awal | Tabel Induk Siswa sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk siswa |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Muhammad Bimo Abditama
|| NIS = 1603078 |
|| Username = bimo |
|| Password = bimo |
|| Jenis Kelamin = Laki Laki |
|| Alamat = Tukdana |
|| NO HP = 08966098278 |
| Yang Diharapkan | Data siswa terrekam ke tabel siswa |
| Pengamatan | Tombol Simpan dapat di-klik jika field nama, nis, username, password, jenis kelamin, no hp sudah terisi |
| Kesimpulan | Diterima |
| Catatan | Data berhasil disimpan karena mengikuti prosedur yang ada di Use Case|

| Identifikasi | DUPL-2|
|---|---|
|Nama Butir Uji | Penambahan data induk siswa dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk siswa |
|Kondisi Awal | Tabel Induk Siswa sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk siswa |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Muhammad Bimo Abditama
|| NIS = satu enam nol tiga nol tujuh delapan |
|| Username = bimo |
|| Password = bimo |
|| Jenis Kelamin = Laki Laki |
|| Alamat = Tukdana |
|| NO HP = 08966098278 |
| Yang Diharapkan | Data siswa terrekam ke tabel siswa |
| Pengamatan | Tidak bisa menyimpan data Karena field NIS di isi dengan Varchar, seharus nya dengan int (angka) |
| Kesimpulan | Tidak diterima |
| Catatan | Gagal Menyimpan Data, karena Data yang dimasukkan tidak sesuai dengan tipe data yang ada di database |


| Identifikasi | DUPL-2|
|---|---|
|Nama Butir Uji | Penambahan data induk siswa dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk siswa |
|Kondisi Awal | Tabel Induk Siswa sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk siswa |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Muhammad Bimo Abditama
|| NIS = 1603078 |
|| Username = kosong |
|| Password = kosong |
|| Jenis Kelamin = Laki Laki |
|| Alamat = Tukdana |
|| NO HP = 08966098278 |
| Yang Diharapkan | Data siswa terrekam ke tabel siswa |
| Pengamatan | Tidak bisa menyimpan data Karena ada filed yang masih kosong (belum diisi) |
| Kesimpulan | Tidak diterima |
| Catatan | Gagal Menyimpan Data, karena Masih ada data yang kosong (belum diisi) |

| Identifikasi | DUPL-3|
|---|---|
|Nama Butir Uji | Penambahan data induk pengajar dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk pengajar |
|Kondisi Awal | Tabel Induk pengajar sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk pengajar |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Fikih Nur Ramadan
|| NIP = 1603068 |
|| Username = fikih |
|| Password = fikih |
|| Jenis Kelamin = Laki Laki |
|| Alamat = Bangkir |
|| NO HP = 087727675654 |
| Yang Diharapkan | Data pengajar terrekam ke tabel pengajar |
| Pengamatan | Tombol Simpan dapat di-klik jika field nama, nip, username, password, jenis kelamin, no hp sudah terisi |
| Kesimpulan | diterima |
| Catatan | Data berhasil disimpan karena mengikuti prosedur yang ada di Use Case |

| Identifikasi | DUPL-3|
|---|---|
|Nama Butir Uji | Penambahan data induk pengajar dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk pengajar |
|Kondisi Awal | Tabel Induk pengajar sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk pengajar |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Fikih Nur Ramadan
|| NIP = satu enam nol tiga nol enam delapan |
|| Username = fikih |
|| Password = fikih |
|| Jenis Kelamin = Laki Laki |
|| Alamat = Bangkir |
|| NO HP = 087727675654 |
| Yang Diharapkan | Data pengajar terrekam ke tabel pengajar |
| Pengamatan |  Tidak bisa menyimpan data Karena field NIP di isi dengan Varchar, seharus nya dengan int (angka) |
| Kesimpulan | Tidak diterima |
| Catatan | Gagal Menyimpan Data, karena Data yang dimasukkan tidak sesuai dengan tipe data yang ada di database |

| Identifikasi | DUPL-3|
|---|---|
|Nama Butir Uji | Penambahan data induk pengajar dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk pengajar |
|Kondisi Awal | Tabel Induk pengajar sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk pengajar |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Fkih Nur Ramadan
|| NIP = 1603068|
|| Username = kosong |
|| Password = kosong |
|| Jenis Kelamin = Laki Laki |
|| Alamat = Bangkir |
|| NO HP = 087727675654 |
| Yang Diharapkan | Data pengajar terrekam ke tabel pengajar |
| Pengamatan | Tidak bisa menyimpan data Karena ada filed yang masih kosong (belum diisi) |
| Kesimpulan | Tidak diterima |
| Catatan | Gagal Menyimpan Data, karena Masih ada data yang kosong (belum diisi) |

| Identifikasi | DUPL-4|
|---|---|
|Nama Butir Uji | Penambahan data induk orang tua dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk orang tua |
|Kondisi Awal | Tabel Induk orang tua sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk orang tua |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Firda Faradila
|| NIP = 1603069 |
|| Username = firda |
|| Password = firda |
|| Jenis Kelamin = perempuan |
|| Alamat = Cirebon |
|| NO HP = 0817827678276 |
| Yang Diharapkan | Data orang tua terrekam ke tabel orang tua |
| Pengamatan | Tombol Simpan dapat di-klik jika field nama, username, password, jenis kelamin, no hp sudah terisi |
| Kesimpulan | diterima |
| Catatan | Data berhasil disimpan karena mengikuti prosedur yang ada di Use Case |

| Identifikasi | DUPL-4|
|---|---|
|Nama Butir Uji | Penambahan data induk orang tua dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk orang tua |
|Kondisi Awal | Tabel Induk orang tua sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk orang tua |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Firda Faradila |
|| Username = firda |
|| Password = firda |
|| Jenis Kelamin = perempuan |
|| Alamat = Cirebon |
|| NO HP = kosong delapan satu enam enam dua tiga satu satu dua tiga empat |
| Yang Diharapkan | Data orang tua terrekam ke tabel orang tua |
| Pengamatan | Tidak dapat menyimpan data, karena Filed No Hp diisi dengan Varchar, seharusnya dengan INT (angka) |
| Kesimpulan | Tidak diterima |
| Catatan | Data gagal disimpan karena tipe data tidak sesuai dengan Database |

| Identifikasi | DUPL-4|
|---|---|
|Nama Butir Uji | Penambahan data induk orang tua dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk orang tua |
|Kondisi Awal | Tabel Induk orang tua sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk orang tua |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = Firda Faradila |
|| Username = kosong |
|| Password = kosong |
|| Jenis Kelamin = perempuan |
|| Alamat = Cirebon |
|| NO HP = kosong delapan satu enam enam dua tiga satu satu dua tiga empat |
| Yang Diharapkan | Data orang tua terrekam ke tabel orang tua |
| Pengamatan | Tidak dapat menyimpan data, karena Filed username dan password masih kosong dan harus diisi |
| Kesimpulan | Tidak diterima |
| Catatan | Data gagal disimpan karena masih ada field yang tidak diisi |

| Identifikasi | DUPL-5|
|---|---|
|Nama Butir Uji | Penambahan data induk kelas dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk kelas |
|Kondisi Awal | Tabel Induk kelas sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk kelas |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Lulu Mukhoyyaroh |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = TI2C |
| Yang Diharapkan | Data kelas terrekam ke tabel kelas |
| Pengamatan | Tombol Simpan dapat di-klik jika field nama sudah terisi |
| Kesimpulan | diterima |
| Catatan | Data berhasil disimpan karena mengikuti prosedur yang ada di Use Case |


| Identifikasi | DUPL-5|
|---|---|
|Nama Butir Uji | Penambahan data induk kelas dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk kelas |
|Kondisi Awal | Tabel Induk kelas sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk kelas |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Lulu Mukhoyyaroh |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = kosong |
| Yang Diharapkan | Data kelas terrekam ke tabel kelas |
| Pengamatan | Tombol Simpan tidak dapat diklik karena form nama masih kosong |
| Kesimpulan | tidak diterima |
| Catatan | Data tidak berhasil disimpan karena field masih kosong |

| Identifikasi | DUPL-5|
|---|---|
|Nama Butir Uji | Penambahan data induk kelas dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk kelas |
|Kondisi Awal | Tabel Induk kelas sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk kelas |
| Tanggal Pengujian | 14/05/2018 |
| Penguji | Lulu Mukhoyyaroh |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama = huruf lebih dari jumlah yang ditentukan di database  |
| Yang Diharapkan | Data kelas terrekam ke tabel kelas |
| Pengamatan | Data Tersimpan, tetapi huruf nya terpotong kareana jumlah karakter yang di masukkan lebih dari jumlah yang di tentukan di database |
| Kesimpulan | tidak diterima |
| Catatan | Data Tersimpan, Tetapi huruf terpotong, karena di database jumlah karakter varchar(20), tetapi yang dimasukkan lebih dari 20 |

| Identifikasi | DUPL-6|
|---|---|
|Nama Butir Uji | Penambahan data induk mata pelajaran dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk mata pelajaran|
|Kondisi Awal | Tabel Induk mata pelajaran sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk mata pelajaran |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama Mata Pelajaran = Matematika |
| Yang Diharapkan | Data mata pelajaran terrekam ke tabel mata pelajaran |
| Pengamatan | Tombol Simpan dapat di-klik jika field nama mata pelajaran sudah terisi |
| Kesimpulan | diterima |
| Catatan | Data berhasil disimpan karena mengikuti prosedur yang ada di Use Case |

| Identifikasi | DUPL-6|
|---|---|
|Nama Butir Uji | Penambahan data induk mata pelajaran dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk mata pelajaran|
|Kondisi Awal | Tabel Induk mata pelajaran sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk mata pelajaran |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama Mata Pelajaran = kosong |
| Yang Diharapkan | Data mata pelajaran terrekam ke tabel mata pelajaran |
| Pengamatan | Data tidak dapat disimpan karena field nama mata pelajaran masih kosong |
| Kesimpulan |tidak diterima |
| Catatan | Data tidak dapat dismpan karena filed mata pelajaran masih kosong |

| Identifikasi | DUPL-6|
|---|---|
|Nama Butir Uji | Penambahan data induk mata pelajaran dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk mata pelajaran|
|Kondisi Awal | Tabel Induk mata pelajaran sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk mata pelajaran |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama Mata Pelajaran = 123762 |
| Yang Diharapkan | Data mata pelajaran terrekam ke tabel mata pelajaran |
| Pengamatan | Data tidak dapat disimpan karena tipe data yang di isi berbeda dengan yang di tentukan di database |
| Kesimpulan | tidak diterima |
| Catatan | Data tidak dapat disimpan karena tipe data yang di isi berbeda dengan yang di tentukan di database |

| Identifikasi | DUPL-7|
|---|---|
|Nama Butir Uji | Penambahan data induk jadwal dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk jadwal|
|Kondisi Awal | Tabel Induk jadwal sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk jadwal |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama Mata Pelajaran = Matematika |
||tanggal =  	07-03-2018 |
||jam =  	8:00 - 10:00 WIB |
||detail = Tryout|
| Yang Diharapkan | Data jadwal terrekam ke tabel jadwal |
| Pengamatan | Tombol Simpan dapat di-klik jika field nama jadwal sudah terisi |
| Kesimpulan | diterima |
| Catatan | Data berhasil disimpan karena mengikuti prosedur yang ada di Use Case |

| Identifikasi | DUPL-7|
|---|---|
|Nama Butir Uji | Penambahan data induk jadwal dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk jadwal|
|Kondisi Awal | Tabel Induk jadwal sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk jadwal |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama Mata Pelajaran = kosong |
||tanggal =  	07-03-2018 |
||jam =  	8:00 - 10:00 WIB |
||detail = kosong|
| Yang Diharapkan | Data jadwal terrekam ke tabel jadwal |
| Pengamatan | Tombol Simpan tidak dapat di-klik karena ada field yang masih kosong |
| Kesimpulan | Tidak diterima |
| Catatan | Data tidak berhasil disimpan karena tidak mengikuti prosedur yang ada di Use Case |

| Identifikasi | DUPL-7|
|---|---|
|Nama Butir Uji | Penambahan data induk jadwal dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk jadwal|
|Kondisi Awal | Tabel Induk jadwal sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk jadwal |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nama Mata Pelajaran = huruf lebih dari jumlah yang ditentukan di database |
||tanggal =  	07-03-2018 |
||jam =  	8:00 - 10:00 WIB |
||detail = Tryout|
| Yang Diharapkan | Data jadwal terrekam ke tabel jadwal |
| Pengamatan | Data Tersimpan, tetapi huruf nya terpotong kareana jumlah karakter yang di masukkan lebih dari jumlah yang di tentukan di database |
| Kesimpulan | Tidak diterima |
| Catatan | Data Tersimpan, Tetapi huruf terpotong, karena di database jumlah karakter varchar(20), tetapi yang dimasukkan lebih dari 20 |

| Identifikasi | DUPL-8|
|---|---|
|Nama Butir Uji | Penambahan data induk nilai dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk nilai|
|Kondisi Awal | Tabel Induk nilai sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk nilai |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nilai = 100 |
| Yang Diharapkan | Data data terrekam ke tabel nilai |
| Pengamatan | Tombol Simpan dapat di-klik jika field nilai sudah terisi |
| Kesimpulan | diterima |
| Catatan | Data berhasil disimpan karena mengikuti prosedur yang ada di Use Case |

| Identifikasi | DUPL-8|
|---|---|
|Nama Butir Uji | Penambahan data induk nilai dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk nilai|
|Kondisi Awal | Tabel Induk nilai sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk nilai |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nilai = seratus |
| Yang Diharapkan | Data data terrekam ke tabel nilai |
| Pengamatan | Tombol Simpan dapat di-klik tetapi data tidak dapat disimpan |
| Kesimpulan | Tidak diterima |
| Catatan | Data Tersimpan, Tetapi huruf berubah menjadi nol karena di database menggunakan integer |

| Identifikasi | DUPL-8|
|---|---|
|Nama Butir Uji | Penambahan data induk nilai dengan data yang baru |
| Tujuan | Memeriksa apakah data baru yang ditambahkan terrekam ke tabel induk nilai|
|Kondisi Awal | Tabel Induk nilai sudah ada |
|| Pemakai (administrator) sudah memilih (membuka) halaman web untuk penambahan data induk nilai |
| Tanggal Pengujian | 16/05/2018 |
| Penguji | Muhammad Bimo Abditama |
| Skenario | 1. Ketikkan data yang akan direkam (ditambahkan) |
|| 2. Klik tombol Simpan jika data sudah selesai diketik secara lengkap dan benar |
| Hasil |
| Data yang diberikan | Nilai = kosong |
| Yang Diharapkan | Data data terrekam ke tabel nilai |
| Pengamatan | Tombol Simpan dapat di-klik tetapi data tidak dapat disimpan |
| Kesimpulan | Tidak diterima |
| Catatan | Data Tersimpan, Tetapi nilai menjadi nol karena di database menggunakan integer |


