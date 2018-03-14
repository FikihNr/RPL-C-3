 <html>
<body>
<div align="center"><h1>Software Design Document</h1></div>

<p align="center"><b>Version 1.2 </b><br>
<p align="center">11 Maret 2018</b>
<p align="center">
<img src="https://2.bp.blogspot.com/-dxdRgMQGbLk/WpA-Tp2rNGI/AAAAAAAAAh8/3_jBWFb7Cf48033QvB34D2WCwoN2sxZLgCLcBGAs/s1000/index.png"/>
</p>

<br><p align="center"><b> Sistem Informasi Akademik Bimbingan Belajar</b><br>
<p align="center"><b>Aplikasi Menggunakan CodeIgniter
</b>
<p align="center">Kelompok 3 <br>
 Fkih Nur Ramadan				(1603068)<br>
 Firda Faradila		(1603069)<br>
 Lulu Mukhoyyaroh			(1603075)<br>
 Widi Indriyani		(1603087) <br>
 Muhammad Bimo Abditama (1603078)	
<br><br><br>

<p align="center"><b>Jurusan Teknik Informatika</b><br>
<p align="center"><b>Politeknik Negeri Indramayu</b>
</p>
</body>
</html>



### 1. PENDAHULUAN ###


1.1 TUJUAN

Tujuan pembuatan SDD (Software Design Description) ini adalah untuk menjelaskan
langkah langkah desain dan proses-proses dalam pembuatan sistem aplikasi yang akan
diterapkan pada Aplikasi Sistem Informasi Akademik Bimbingan Belajar, dan juga memberi definisi kebutuhan
untuk sistem, spesifikasi kebutuhan fungsional.
Fungsi utama dari aplikasi ini adalah mempermudah user dalam memantau Nilai dan Absensi nya, dan juga memberikan kemudahan untuk melakukan bimbingan melalui fitur chat

Secara ringkas fungsi dari aplikasi ini diantaranya :


- user Login ke aplikasi jika belum terdaftar maka harus menghubungi Administrator terlebih dahulu.
- user dapat memantau Nilai dan Absensi nya
- pengajar berkehendak untuk memberikan nilai dan absensi kepada pelajar
- administrator memegang hak penuh dalam sistem



1.2 LINGKUP

     Fleksibel
     Hadirnya aplikasi sebagai sarana untuk memudahkan user untuk memberikan nilai dan absensi, SIMBEL haruslah mempertimbangkan 
     aspek fleksibilitas dalam penggunaan nya, salah satu yang harus tertanam adalah kemudahan 
     untuk melakukan bimbingan dengan fitur live chat 
    
     Informasi Detil
     Aplikasi SIAKAD yang baik adalah yang mampu memberikan infomasi secara komprehensif kepada user, 
     melalui media aplikasi tersebut administrator haruslah me-manage sistem tersebut dengan baik

     Komunikatif
     Tak hanya sebagai sarana penilaian dan absensi, aplikasi SIMBEL haruslah mampu menghadirkan komunikasi dua arah 
     antara pelajar dan pengajar, kehadirran fitur ini semata mata untuk memberikan kenyamanan pelajar
     Adanya fitur komunisi dua arah membuat pengajar mudah dalam
    memberikan bimbingan kepada pelajar. 

     pengawasan orangtua
     Melalui aplikasi, orangtua tentu dengan mudah memantau Nilai dan Absensi anak anak nya, tak ada salahnya memberikan informasi detil 
     lewat aplikasi kepada orang tua.

1.3 Definisi, akronim, singkatan

     SKPL      : Spesifikasi Kebutuhan Perangkat Lunak
     SKPL      : Spesifikasi Perangkat Lunak
     Administrator : pengelola sistem aplikasi.
	 User      : Pengguna Aplikasi
	 SIMBEL	   : Sistem informasi Akademik Bimbingan Belajar
	 Siakad    : Sistem informasi akademik

###2. Referensi

IEEE, IEEE Draft Standard for Software Design Descriptions. IEEE P1 01 6/D5.0; 1 2 December 2005

Eka Ismantohadi & Moh. Yani, Software Design Document (SDD). 2018

###3. Penjelasan Dekomposisi


3.1.1 Diagram Konteks

Diagram konteks adalah diagram yang terdiri dari suatu proses dan menggambarkan ruang lingkup suatu sistem. Diagram konteks merupakan level tertinggi dari DFD yang menggambarkan seluruh input ke dalam sistem atau output dari sistem yang memberi gambaran tentang keseluruhan sistem. Sistem dibatasi oleh boundary (Digambarkan dengan garis putus - putus). Dalam diagram konteks hanya ada satu proses, tidak boleh ada store dalam diagram konteks. Berikut ini adalah gambar diagram konteks dari Sistem Informasi Akademik Bimbingan Belajar.

![](http://i68.tinypic.com/2zno93d.jpg)
 

3.1.2 DFD Level 0

Data Flow Diagram atau biasa disingkat dengan DFD adalah salah satu cara untuk memodelkan proses dalam analisis dan perancangan perangkat lunak, khususnya dengan pendekatan terstruktur. Berikut DFD Level 0 Sistem Informasi Akademik Bimbingan Belajar. 

![](http://i67.tinypic.com/2cp7y3r.jpg)

###3.2 Dekommposisi Proses Konkuren

3.2.1 DFD Level 1 : Proses 1


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin yang Mengelolah data Siswa.

![](http://i64.tinypic.com/29p96d4.jpg)

3.2.2 DFD Level 1 : Proses 2


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin yang Mengelolah data Pengajar.

![](http://i65.tinypic.com/289a3hl.jpg)

3.2.3 DFD Level 1 : Proses 3


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin yang Mengelolah data Orang Tua.

![](http://i67.tinypic.com/2j0e0jl.jpg)

3.2.4 DFD Level 1 : Proses 4


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin yang Mengelolah data Kelas.

![](http://i68.tinypic.com/rrqomh.jpg)

3.2.5 DFD Level 1 : Proses 5


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin yang Mengelolah data Mata Pelajaran.

![](http://i64.tinypic.com/230c3k.jpg)

3.2.6 DFD Level 1 : Proses 6


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin yang Mengelolah data Jadwal Mata Pelajaran.

![](http://i64.tinypic.com/2ekomtj.jpg)

3.2.7 DFD Level 1 : Proses 7


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin yang Mengelolah data Jadwal Tryout.

![](http://i67.tinypic.com/25z564m.jpg)

3.2.8 DFD Level 1 : Proses 8


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Pengajar yang Mengelolah data Bimbingan.

![](http://i65.tinypic.com/243euly.jpg)

3.2.9 DFD Level 1 : Proses 9


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Pengajar yang Mengelolah data Nilai.

![](http://i64.tinypic.com/eqw1eo.jpg)

3.2.10 DFD Level 1 : Proses 10


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Pengajar yang Mengelolah data Absensi.

![](http://i63.tinypic.com/50f6rn.jpg)

3.2.11 DFD Level 1 : Proses 11


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Orang Tua yang melihat laporan Nilai dan Absensi.

![](http://i64.tinypic.com/vwwj78.jpg)


###3.3 Dekomposisi Data
* Data User Siswa, Pengajar dan Orang Tua

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
| 1	| NIS	| Digunakan untuk login siswa |
| 2	| NIP |Digunakan untuk login pelajar	
| 3	| NIK|Digunakan untuk login orang tua |



