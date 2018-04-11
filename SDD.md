<body>
<div align="center"><h1>Software Design Document</h1></div>

<p align="center"><b>Version 1.2 </b><br>
<p align="center">11 Maret 2018</b>
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
</p>
</body>
</html>



### 1. PENDAHULUAN ###


#### 1.1 TUJUAN

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



##### 1.2 LINGKUP

Fleksibel<br>
Hadirnya aplikasi sebagai sarana untuk memudahkan user untuk memberikan nilai dan absensi, SIMBEL haruslah mempertimbangkan 
aspek fleksibilitas dalam penggunaan nya, salah satu yang harus tertanam adalah kemudahan untuk melakukan bimbingan dengan fitur live chat.
    
Informasi Detil<br>
Aplikasi SIAKAD yang baik adalah yang mampu memberikan infomasi secara komprehensif kepada user, melalui media aplikasi tersebut administrator haruslah me-manage sistem tersebut dengan baik.

Komunikatif<br>
Tak hanya sebagai sarana penilaian dan absensi, aplikasi SIMBEL haruslah mampu menghadirkan komunikasi dua arah antara pelajar dan pengajar, kehadirran fitur ini semata mata untuk memberikan kenyamanan pelajar Adanya fitur komunisi dua arah membuat pengajar mudah dalam memberikan bimbingan kepada pelajar. 

Pengawasan orangtua<br>
Melalui aplikasi, orangtua tentu dengan mudah memantau Nilai dan Absensi anak anak nya, tak ada salahnya memberikan informasi detil lewat aplikasi kepada orang tua.

##### 1.3 Definisi, akronim, singkatan

| No | Singkatan | Arti Kata |
|----|-----------|-----------|
| 1  | SKPL | Spesifikasi Kebutuhan Perangkat Lunak | 
| 2  | SKPL | Spesifikasi Perangkat Lunak |
| 3  | Administrator | Pengelola sistem aplikasi |
| 4  | User | Pengguna Aplikasi |
| 5  | SIMBEL | Sistem informasi Akademik Bimbingan Belajar |
| 6  | Siakad | Sistem informasi akademik |

#### 2. Referensi

* IEEE, IEEE Draft Standard for Software Design Descriptions. IEEE P1 01 6/D5.0; 1 2 December 2005

* Eka Ismantohadi & Moh. Yani, Software Design Document (SDD). 2018

#### 3. Penjelasan Dekomposisi


##### 3.1.1 Diagram Konteks

Diagram konteks adalah diagram yang terdiri dari suatu proses dan menggambarkan ruang lingkup suatu sistem. Diagram konteks merupakan level tertinggi dari DFD yang menggambarkan seluruh input ke dalam sistem atau output dari sistem yang memberi gambaran tentang keseluruhan sistem. Sistem dibatasi oleh boundary (Digambarkan dengan garis putus - putus). Dalam diagram konteks hanya ada satu proses, tidak boleh ada store dalam diagram konteks. Berikut ini adalah gambar diagram konteks dari Sistem Informasi Akademik Bimbingan Belajar.

![](http://i66.tinypic.com/20koaoh.jpg)
 

##### 3.1.2 DFD Level 0

Data Flow Diagram atau biasa disingkat dengan DFD adalah salah satu cara untuk memodelkan proses dalam analisis dan perancangan perangkat lunak, khususnya dengan pendekatan terstruktur. Berikut DFD Level 0 Sistem Informasi Akademik Bimbingan Belajar. 

![](http://i68.tinypic.com/5lc2me.jpg)

#### 3.2 Dekommposisi Proses Konkuren

##### 3.2.1 DFD Level 1 : Proses 1


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin dan Pengajar yang Mengelolah Data Nilai Dan Data Absensi.

![](http://i66.tinypic.com/90viv9.jpg)

##### 3.2.2 DFD Level 1 : Proses 2


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin, Pengajar dan Siswa yang Mengelolah Data Ortu, Data Pengajar, Data Siswa, Data Kelas, Data Mapel, Data Jadwal .

![](http://i67.tinypic.com/2lvyek3.jpg)

##### 3.2.3 DFD Level 1 : Proses 3


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin, Pengajar dan Siswa yang Mengelolah Data Bimbingan.

![](http://i63.tinypic.com/sfvw4g.jpg)

##### 3.2.4 DFD Level 1 : Proses 4


DFD Level 1 ini penjelasan dari DFD level 0 yang sebelumnya, Berikut DFD level 1 yg menjelaskan Admin, Pengajar, Siswa dan Ortu yang Mengelolah Laporan Nilai Dan Laporan Absensi.

![](http://i66.tinypic.com/ehywqe.jpg)

##### 3.2.5 DFD Level 2 : Proses 1


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Data Nilai dan  Pengajar dan Siswa yang melihat Data Nilai.

![](http://i68.tinypic.com/24pw4g3.jpg)

##### 3.2.6 DFD Level 2 : Proses 2


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Data Absensi dan  Pengajar dan Siswa yang melihat Data Absensi.

![](http://i65.tinypic.com/b4yd90.jpg)

##### 3.2.7 DFD Level 2 : Proses 3


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Data Siswa dan  Pengajar dan Siswa yang melihat Data Siswa.

![](http://i66.tinypic.com/4h3vhe.jpg)

##### 3.2.8 DFD Level 2 : Proses 4


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Data Kelas dan  Pengajar dan Siswa yang melihat Data Kelas.

![](http://i67.tinypic.com/mmvcsk.jpg)

##### 3.2.9 DFD Level 2 : Proses 5


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Data Mapel dan  Pengajar dan Siswa yang melihat Data Mapel.

![](http://i66.tinypic.com/1448ftu.jpg)

##### 3.2.10 DFD Level 2 : Proses 6


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Data Jadwal dan  Pengajar dan Siswa yang melihat Data Jadwal.

![](http://i65.tinypic.com/2zz0nxv.jpg)

##### 3.2.11 DFD Level 2 : Proses 7


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin, Pengajar dan Siswa yang mengelola Data Bimbingan.

![](http://i68.tinypic.com/1z48ty1.jpg)


##### 3.2.11 DFD Level 2 : Proses 8


DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Laporan Nilai dan  Pengajar, Siswa dan Ortu yang melihat Laporan Nilai.

![](http://i66.tinypic.com/3ylg2.jpg)

##### 3.2.11 DFD Level 2 : Proses 9

DFD Level 2 ini penjelasan dari DFD level 1 yang sebelumnya, Berikut DFD level 2 yg menjelaskan Admin yang Mengelolah Laporan Absensi dan  Pengajar, Siswa dan Ortu yang melihat Laporan Absensi.

![](http://i66.tinypic.com/2428ro1.jpg)

#### 3.3 Dekomposisi Data

* Data User Siswa, Pengajar dan Orang Tua

| No. | Data | Keterangan |
|-----|-----|-----|
|  1  | NIS	| Digunakan untuk login siswa |
|  2  | NIP | Digunakan untuk login pelajar |	
|  3  | NIK | Digunakan untuk login orang tua |

* Data Siswa

| No. | Data | Keterangan |
|-----|------|-----|
|  1  | id_siswa | primary key |
|  2  | Nama | Nama siswa |
|  3  | NIS | Nomor Induk siswa |
|  4  | id_kelas |	kelas |
|  5  | Alamat | Alamat rumah siswa	|
|  6  | No_hp | Nomor handpone siswa	|
|  7  | Status | Status siswa (Aktif/Tidak) |

* Data Pengajar

| No | Data | Keterangan |
|----|-----|-----|
| 1	 | id_pengajar | primary key |
| 2	 | Nama |Nama pengajar |	
| 3	 | NIP| Nomor Induk Pegawai |
| 4  | Alamat| Alamat rumah pengajar |
| 5  |No_hp| Nomor handpone pengajar | 
| 6  |Status | Status pengajar (Aktif/Tidak) |

* Data Orang Tua

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
| 1	| id_ortu| primary key 
| 2	| id_siswa | foreign key |
| 3	| NIK| Nomor Induk Kependudukan|
|4| Alamat| Alamat rumah orang tua	|
|5|No_hp| Nomor handpone orang tua |

* Data Kelas

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
| 1	| id_kelas| primary key 
| 2	|nama_kelas|nama kelas 

* Data Mata Pelajaran (Mapel)

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
| 1	| id_mapel| primary key 
| 2	|nama_mapel|nama mata pelajaran 

* Data Jadwal Mata Pelajaran

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
| 1	| id_jadwal_mapel| primary key 
| 2	|id_mapel|foreign key
|3|semeter|semester yang dijalani tahun ini
|4|tahun ajaran|tahun ajaran yang dijalani tahun ini

* Data Jadwal TryOut

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
| 1	| id_jadwal_to| primary key 
|2|tahun ajaran|tahun ajaran yang dijalani tahun ini

* Data Bimbingan

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
| 1	| id_bimbingan|primary key
|2|id_siswa|foreign key
|3|id_pengajar|foreign key
|4|tanggal|tanggal bimbingan|
|5|pesan_bimbingan |pesan bimbingan antara pengajar dan siswanya |

* Data Nilai

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
|1|id_nilai|primary key
|2|id_siswa|foreign key
|3|id_pengajar|foreign key
|4|id_kelas|foreign key
|5|id_mapel |foreign key

* Data Absensi

| No. |  Data	| Keterangan	  |
|-----|-----|-----|
|1|id_absensi|primary key |
|2|id_siswa|foreign key|
|3|id_pengajar|foreign key|
|4|id_kelas|foreign key|
|5|id_mapel |foreign key|


#### 3.3 Deskripsi  Rinci Modul 

Setiap modul pada rancangan global, dirinci satu per satu  

#### 3.3.1 Login

##### 3.3.1.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Login | From Entry Tabular | users |



##### 3.3.1.2 Spesifikasi Layar Utama

![](http://i64.tinypic.com/314yqh3.png)

prototype belum jadi

##### 3.3.1.3 Spesifikasi Query

|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
|QUE-01 | Masuk sebagai Admin | Select * From users where level = 'admin' |
|QUE-02 | Masuk sebagai Pelajar  | Select * From users where level = 'pelajar' |
|QUE-03 | Masuk sebagai Pengajar | Select * From users where level = 'pengajar' |
|QUE-04 | Masuk sebagai Orang Tua | Select * From users where level = 'ortu' |

##### 3.3.1.4 Spesifikasi Field Pada Data Layar <br>

|Label | Field | Tabel/Query | Validasi| Keterangan|
|---|--------|-------|---------------|-------------|
| username | username | select * from users |cek username|login|
| password | password | select * from users | cek password |login|

##### 3.3.1.5 Spesifikasi objek objek pada layar
|id_objek | jenis | keteranagan |
|---|--------|-------|
| username| input type text | memasukan username sesuai dengan database |
| password |input type password | memasukan password sesusai dengan database |
| btnSubmit | Button | Jika Diklik maka akan Diasosiasikan ke QUE-01, QUE-02, QUE-03 dan QUE-04 pada sub-bab 3.3.1.3 |

##### 3.3.1.6 Spesifikasi Proses/Algoritma
<id_proses> : login
Objek Terkait : username, password, btnSubmit
Event : Login

|Initial State (IS)|
|---|
| Form login masih kosong | 

|Initial State (IS)|
|---|
| menentukan otoritas user | 

|Spesifikasi Proses/Algoritma|
|---|
| 1. Buka Web Simbel |
|2. Masukan Username & Password|
|3. IF username & password sesuai, maka akan masuk kehalaman dashboard sesuai dengan level nya|
|   ELSE username & password tidak sesuai, maka akan muncul pesan "gagal login" |





#### 3.3.2 Input Data Pelajar

#### 3.3.2 Dashboard Admin

##### 3.3.2.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Input Data Pelajar | From Entry Tabular | siswa |

##### 3.3.2.2 Spesifikasi Layar Utama
![](http://i67.tinypic.com/11t98wm.png)
|--|-----------------|--------------------|------------|
|1 | CRUD Data Siswa | From Entry Tabular | Data Siswa |
|2 | CRUD Data Tentor | Form Entry Tabular | Data pengajar |
|3 | CRUD Jadwal Pelajaran | From Entry Tabular | Jadwal Mapel |
|4 | CRUD Data Kelas | Form Entry Tabular | Data Kelas |
|5 | Melihat Data Aspek Penilaian | Report Tabular | Data Nilai |
|6 | Melihat Data Laporan Absensi | Report Tabular | Data Absensi |
|7 | Melihat Data Laporan Nilai  | Report Tabular | Data Nilai |

##### 3.3.2.2 Spesifikasi Layar Utama

##### 3.3.2.3 Spesifikasi Query

|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
<<<<<<< HEAD
|QUE-05 | Input data Pelajar | insert into siswa values (id_siswa, NIS, 'nama','username','password','jenis_kelamin','alamat') |


##### 3.3.2.4 Spesifikasi Field Pada Data Layar <br>

|Label | Field | Tabel/Query | Validasi| Keterangan|
|---|--------|-------|---------------|-------------|
| nama | nama | select nama from siswa |input data berhasil |input data pelajar|
| nis | NIS | select NIS from siswa |input data berhasil |input data pelajar|
| username | username | select username from siswa |input data berhasil |input data pelajar|
| password | password | select password from siswa |input data berhasil |input data pelajar|
| jenis_kelamin | jenis_kelamin | select jenis_kelamin from siswa |input data berhasil |input data pelajar|
| alamat | alamat | select alamat from siswa |input data berhasil |input data pelajar|

##### 3.3.2.5 Spesifikasi objek objek pada layar
|id_objek | jenis | keteranagan |
|---|--------|-------|
| nama| input type text | memasukan nama ke database |
| nis |input type text | memasukan NIS ke database |
| username |input type text | memasukan username ke database |
| password |input type password  | memasukan password ke database |
| jenis_kelamin | select | memasukan jenis_kelamin ke database |
| alamat |input type text | memasukan alamat ke database |
| btnSubmit | Button | Jika Diklik maka akan Diasosiasikan ke QUE-05 pada sub-bab 3.3.2.3 |

##### 3.3.2.6 Spesifikasi Proses/Algoritma
<id_proses> : input_pelajar
Objek Terkait : nama, NIS, username, password, jenis_kelamin, password, jenis_kelamin, alamat, btnSubmit
Event : Input Data Pelajar

|Initial State (IS)|
|---|
| Tabel sudah dibuat strukturnya tetapi mungkin masih kosong | 

|Initial State (IS)|
|---|
| Menghasilkan tabel siswa yang telah ditambahkan satu rekord | 

|Spesifikasi Proses/Algoritma|
|---|
| 1. Cek apakah data yang dimasukkan ada |
|2.IF belum ada, tambahkan 1 record pada tabel siswa|
|   ELSE Jika sudah ada, maka tambahkan data yang berbeda |




=======
|QUE-05 | Memasukkan Data Siswa | insert into data_siswa values.. |
|QUE-06 | Mengubah Data Siswa | update data_siswa set... |
|QUE-07 | Menampilkan Data Orang tua | select * from data_orangtua|
|QUE-08 | Memasukkan Data Orang Tua | insert into data_orangtua values.. |
|QUE-09 | Mengubah Data Orang Tua | Update data_orangtua set.. |
|QUE-10 | Menampilkan Data Kelas | select * from data_kelas |
|QUE-11 | Memasukkan Data Kelas | insert into data_kelas values.. |
|QUE-12 | Mengubah Data Kelas | update data_kelas set.. |
|QUE-13 | Menampilkan Jadwal | select * from jadwal_mapel |
|QUE-14 | Memasukkan Jadwal | insert into jadwal_mapel values.. |
|QUE-15 | Mengubah Jadwal | update jadwal_mapel set.. |
|QUE-16 | Menampilkan Laporan Nilai | Select * from data_absensi where id_siswa = 'id_siswa' |
|QUE-17 | Menampilkan Data Tentor | Select * From data_pengajar |
|QUE-18 | Memasukkan Data Tentor  | insert into data_pengajar values.. |
|QUE-19 | Mengubah Data Tentor | Upadte data_pengajar set... |
|QUE-20 | Menampilkan Data siswa | select * from data_siswa |

##### 3.3.2.4 Spesifikasi Field Data Layar


##### 3.3.2.5 Spesifikasi Objek - Objek Pada Layar

##### 3.3.2.6 Spesifikasi Proses/Algoritma

#### 3.4 Matriks Keturunan