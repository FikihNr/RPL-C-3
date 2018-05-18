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

# Pendahuluan #

#### 1.1.Tujuan Pembuatan Dokumen

Dokumen ini digunakan sebagai panduan untuk melakukan pengujian
terhadap perangkat lunak Sistem Informasi Bimbingan Belajar. Dokumen ini
dipakai untuk melihat kemampuan dari program yang telah dirancang agar sesuai
dengan keinginan dari pengguna. Pembuatan dokumen ini ditujukan untuk
menguji perangkat lunak Sistem Informasi Bimbingan Belajar yang merupakan
bagian dari tugas mata kuliah Rekayasa Perangkat Lunak.

#### 1.2.Deskripsi Umum Sistem

Perangkat lunak yang akan diuji adalah “Sistem Informasi Akademik Bimbingan Belajar”. Perangkat lunak ini adalah perangkat lunak yang digunakan untuk
melakukan bimbingan belajar secara terorganisir, seperti mempermudah pengguna dan penyedia dalam pengolahan nilai, pengolahan absens, lihat jadwal dan konsultasi bimbingan. Sistem ini diimplementasikan melalui komunikasi di media antara sesama pengguna dengan
sistem.

#### 1.3.Deskripsi Dokumen (Ikhtisar)

Dalam dokumen ini berisi 3 bagian utama yaitu Pendahuluan, Identifikasi
dan Rencana Pengujian, Deskripsi dan Uji Hasil.

#### 1.4.Definisi dan Singkatan

| No | Singkatan | Arti Kata |
|------|----|--------|
| 1 | SKPL | Spesifikasi Kebutuhan Perangkat Lunak, atau dalam bahasa Inggris-nya sering juga disebut sebagai Software Requirements Spesification (SRS), dan merupakan spesifikasi dari perangkat lunak yang akan dikembangkan. |
| 2 | SKPL-SK.K-xxxx | Kode yang digunakan untuk merepresentasikan kebutuhan (requirement) pada SK, dengan SK merupakan kode perangkat lunak, SK.K adalah kode fase, dan xxxx adalah digit/nomor kebutuhan (requirement). |
| 3 | DFD | Data Flow Diagram, diagram dan notasi yang digunakan untuk menunjukkan aliran data pada perangkat lunak. |
| 4 | ERD | Entity Relationship Diagram, diagram dan notasi yang digunakan untuk merepresentasikan struktur data statis pada perangkat lunak. |
| 5  | DPPL-Akkses.K-xxxx | Kode yang digunakan untuk mengimplementasikan perancangan pada Akkses, dengan Akkses merupakan kode perangkat lunak, Akkses.Kadalah kode fase, dan xxxx adalahdigit/nomor perancangan. |

#### 1.5.Dokumen Referensi

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
