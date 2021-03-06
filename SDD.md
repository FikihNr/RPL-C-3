<html>
<body>
<div align="center"><h1>Software Design Document</h1></div>

<p align="center"><b>Version 1.3 </b><br>
<p align="center">13 April 2018</b>
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
Fungsi utama dari aplikasi ini adalah mempermudah user dalam memantau Nilai dan Absensi nya, dan juga memberikan kemudahan untuk melakukan bimbingan melalui fitur chat. Secara ringkas fungsi dari aplikasi ini diantaranya :


- User Login ke aplikasi jika belum terdaftar maka harus menghubungi Administrator terlebih dahulu.
- User dapat memantau Nilai dan Absensi nya
- Pengajar berkehendak untuk memberikan nilai dan absensi kepada pelajar
- Administrator memegang hak penuh dalam sistem

#### 1.2 LINGKUP

Fleksibel<br>
Hadirnya aplikasi sebagai sarana untuk memudahkan user untuk memberikan nilai dan absensi, SIMBEL haruslah mempertimbangkan 
aspek fleksibilitas dalam penggunaan nya, salah satu yang harus tertanam adalah kemudahan untuk melakukan bimbingan dengan fitur live chat.
    
Informasi Detil<br>
Aplikasi SIAKAD yang baik adalah yang mampu memberikan infomasi secara komprehensif kepada user, melalui media aplikasi tersebut administrator haruslah me-manage sistem tersebut dengan baik.

Komunikatif<br>
Tak hanya sebagai sarana penilaian dan absensi, aplikasi SIMBEL haruslah mampu menghadirkan komunikasi dua arah antara pelajar dan pengajar, kehadirran fitur ini semata mata untuk memberikan kenyamanan pelajar Adanya fitur komunisi dua arah membuat pengajar mudah dalam memberikan bimbingan kepada pelajar. 

Pengawasan orangtua<br>
Melalui aplikasi, orangtua tentu dengan mudah memantau Nilai dan Absensi anak anak nya, tak ada salahnya memberikan informasi detil lewat aplikasi kepada orang tua.

#### 1.3 Definisi, akronim, singkatan

| No | Singkatan | Arti Kata |
|----|-----------|-----------|
| 1  | SKPL | Spesifikasi Kebutuhan Perangkat Lunak| 
| 2  | SKPL | Spesifikasi Perangkat Lunak |
| 3  | Administrator | Pengelola sistem aplikasi |
| 4  | User | Pengguna Aplikasi |
| 5  | SIMBEL | Sistem informasi Akademik Bimbingan Belajar |
| 6  | Siakad | Sistem informasi akademik |

### 2. Referensi

* IEEE, IEEE Draft Standard for Software Design Descriptions. IEEE P1 01 6/D5.0; 1 2 December 2005

* Eka Ismantohadi & Moh. Yani, Software Design Document (SDD). 2018

### 3. Penjelasan Dekomposisi
#### 3.1.1 Diagram Konteks
Diagram konteks adalah diagram yang terdiri dari suatu proses dan menggambarkan ruang lingkup suatu sistem. Diagram konteks merupakan level tertinggi dari DFD yang menggambarkan seluruh input ke dalam sistem atau output dari sistem yang memberi gambaran tentang keseluruhan sistem. Sistem dibatasi oleh boundary (Digambarkan dengan garis putus - putus). Dalam diagram konteks hanya ada satu proses, tidak boleh ada store dalam diagram konteks. Berikut ini adalah gambar diagram konteks dari Sistem Informasi Akademik Bimbingan Belajar.

![](http://i66.tinypic.com/20koaoh.jpg)

#### 3.1.2 DFD Level 0

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

id_proses : login <br>
Objek Terkait : username, password, btnSubmit <br>
Event : Login


|Initial State (IS)|
|---|
| Form login masih kosong 

<<<<<<< HEAD
|Final State (FS)|
=======
<<<<<<< HEAD
|Final State (FS)|
=======
<<<<<<< HEAD
|Final State (FS)|
=======
|Initial State (IS)|
>>>>>>> 5434e14010e1a4c1b0080d18cdf5165524afc015
>>>>>>> e01a31bbb23b1ca894a11010f2a7108824aead7c
>>>>>>> 06027f80f2ef6a8360c2a2eff44e9e17b0d1ae6c
|---|
| menentukan otoritas user

|Spesifikasi Proses/Algoritma|
|---|
| 1. Buka Web Simbel |
|2. Masukan Username & Password|
|3. IF username & password sesuai, maka akan masuk kehalaman dashboard sesuai dengan level nya|
|   ELSE username & password tidak sesuai, maka akan muncul pesan "gagal login" |


#### 3.3.2 Input Data Pelajar

##### 3.3.2.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Input Data Pelajar | From Entry Tabular | siswa |

##### 3.3.2.2 Spesifikasi Layar Utama
![](http://i67.tinypic.com/11t98wm.png)

##### 3.3.2.3 Spesifikasi Query
|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
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
<<<<<<< HEAD
|id_objek | jenis | keterangan |
=======
<<<<<<< HEAD
|id_objek | jenis | keterangan |
=======
<<<<<<< HEAD
|id_objek | jenis | keterangan |
=======
|id_objek | jenis | keteranagan |
>>>>>>> 5434e14010e1a4c1b0080d18cdf5165524afc015
>>>>>>> e01a31bbb23b1ca894a11010f2a7108824aead7c
>>>>>>> 06027f80f2ef6a8360c2a2eff44e9e17b0d1ae6c
|---|--------|-------|
| nama| input type text | memasukan nama ke database |
| nis |input type text | memasukan NIS ke database |
| username |input type text | memasukan username ke database |
| password |input type password  | memasukan password ke database |
| jenis_kelamin | select | memasukan jenis_kelamin ke database |
| alamat |input type text | memasukan alamat ke database |
| btnSubmit | Button | Jika Diklik maka akan Diasosiasikan ke QUE-05 pada sub-bab 3.3.2.3 |

##### 3.3.2.6 Spesifikasi Proses/Algoritma
id_proses : input_pelajar<br>
Objek Terkait : nama, NIS, username, password, jenis_kelamin, password, jenis_kelamin, alamat, btnSubmit <br>
Event : Input Data Pelajar

|Initial State (IS)|
|---|
| Tabel sudah dibuat strukturnya tetapi mungkin masih kosong |

<<<<<<< HEAD
|Final State (FS)|
=======
<<<<<<< HEAD
|Final State (FS)|
=======
<<<<<<< HEAD
|Final State (FS)|
=======
|Initial State (IS)|
>>>>>>> 5434e14010e1a4c1b0080d18cdf5165524afc015
>>>>>>> e01a31bbb23b1ca894a11010f2a7108824aead7c
>>>>>>> 06027f80f2ef6a8360c2a2eff44e9e17b0d1ae6c
|---|
| Menghasilkan tabel siswa yang telah ditambahkan satu rekord |

|Spesifikasi Proses/Algoritma|
|---|
| 1. Cek apakah data yang dimasukkan ada |
|2.IF belum ada, tambahkan 1 record pada tabel siswa|
|   ELSE Jika sudah ada, maka tambahkan data yang berbeda |


<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e01a31bbb23b1ca894a11010f2a7108824aead7c
>>>>>>> 06027f80f2ef6a8360c2a2eff44e9e17b0d1ae6c
#### 3.3.3 Input Data Pengajar

##### 3.3.3.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Input Data Pengajar | From Entry Tabular | pengajar |

##### 3.3.3.2 Spesifikasi Layar Utama
![](http://i64.tinypic.com/2mxnypd.png)

##### 3.3.3.3 Spesifikasi Query
|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
|QUE-06 | Input data Pengajar | insert into pengajar values (id_pengajar, NIP, 'nama','username','password','jenis_kelamin','alamat') |

##### 3.3.3.4 Spesifikasi Field Pada Data Layar <br>

|Label | Field | Tabel/Query | Validasi| Keterangan|
|---|--------|-------|---------------|-------------|
| nama | nama | select nama from pengajar |input data berhasil |input data pengajar|
| nip | NIP | select NIP from pengajar |input data berhasil |input data pengajar|
| username | username | select username from pengajar |input data berhasil |input data pengajar|
| password | password | select password from pengajar |input data berhasil |input data pengajar|
| jenis_kelamin | jenis_kelamin | select jenis_kelamin from pengajar |input data berhasil |input data pengajar|
| alamat | alamat | select alamat from pengajar |input data berhasil |input data pengajar|

##### 3.3.3.5 Spesifikasi objek objek pada layar
|id_objek | jenis | keterangan |
|---|--------|-------|
| nama| input type text | memasukan nama ke database |
| nip |input type text | memasukan NIP ke database |
| username |input type text | memasukan username ke database |
| password |input type password  | memasukan password ke database |
| jenis_kelamin | select | memasukan jenis_kelamin ke database |
| alamat |input type text | memasukan alamat ke database |
| btnSubmit | Button | Jika Diklik maka akan Diasosiasikan ke QUE-06 pada sub-bab 3.3.3.3 |

##### 3.3.3.6 Spesifikasi Proses/Algoritma
id_proses : input_pengajar<br>
Objek Terkait : nama, NIP, username, password, jenis_kelamin, password, jenis_kelamin, alamat, btnSubmit <br>
Event : Input Data Pengajar

|Initial State (IS)|
|---|
| Tabel sudah dibuat strukturnya tetapi mungkin masih kosong |

|Final State (FS)|
|---|
| Menghasilkan tabel pengajar yang telah ditambahkan satu rekord |

|Spesifikasi Proses/Algoritma|
|---|
| 1. Cek apakah data yang dimasukkan ada |
|2.IF belum ada, tambahkan 1 record pada tabel pengajar|
|   ELSE Jika sudah ada, maka tambahkan data yang berbeda |


#### 3.3.4 Input Data Orangtua

##### 3.3.4.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Input Data orangtua | From Entry Tabular | orangtua |

##### 3.3.4.2 Spesifikasi Layar Utama
![](http://i63.tinypic.com/a6mhe.png)

##### 3.3.4.3 Spesifikasi Query
|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
|QUE-07 | Input data Pengajar | insert into pengajar values (id_ortu, 'nama','username','password','jenis_kelamin','alamat') |

##### 3.3.4.4 Spesifikasi Field Pada Data Layar <br>

|Label | Field | Tabel/Query | Validasi| Keterangan|
|---|--------|-------|---------------|-------------|
| nama | nama | select nama from orangtua |input data berhasil |input data orangtua|
| username | username | select username from orangtua |input data berhasil |input data orangtua|
| password | password | select password from pengajar |input data berhasil |input data orangtua|
| jenis_kelamin | jenis_kelamin | select jenis_kelamin from orangtua |input data berhasil |input data orangtua|
| alamat | alamat | select alamat from pengajar |input data berhasil |input data orangtua|

##### 3.3.4.5 Spesifikasi objek objek pada layar
|id_objek | jenis | keterangan |
|---|--------|-------|
| nama| input type text | memasukan nama ke database |
| username |input type text | memasukan username ke database |
| password |input type password  | memasukan password ke database |
| jenis_kelamin | select | memasukan jenis_kelamin ke database |
| alamat |input type text | memasukan alamat ke database |
| btnSubmit | Button | Jika Diklik maka akan Diasosiasikan ke QUE-07 pada sub-bab 3.3.4.3 |

##### 3.3.4.6 Spesifikasi Proses/Algoritma
id_proses : input_orangtua<br>
Objek Terkait : nama, username, password, jenis_kelamin, password, jenis_kelamin, alamat, btnSubmit <br>
Event : Input Data Orangtua

|Initial State (IS)|
|---|
| Tabel sudah dibuat strukturnya tetapi mungkin masih kosong |

|Final State FS)|
|---|
| Menghasilkan tabel orangtua yang telah ditambahkan satu rekord |

|Spesifikasi Proses/Algoritma|
|---|
| 1. Cek apakah data yang dimasukkan ada |
|2.IF belum ada, tambahkan 1 record pada tabel orangtua|
|   ELSE Jika sudah ada, maka tambahkan data yang berbeda |


#### 3.3.5 Input Data Kelas

##### 3.3.5.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Input Data kelas | From Entry Tabular | kelas |

##### 3.3.5.2 Spesifikasi Layar Utama
![](http://i65.tinypic.com/oum9o8.png)

##### 3.3.5.3 Spesifikasi Query
|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
|QUE-08 | Input data kelas | insert into kelas values (id_kelas, 'nama') |

##### 3.3.5.4 Spesifikasi Field Pada Data Layar <br>

|Label | Field | Tabel/Query | Validasi| Keterangan|
|---|--------|-------|---------------|-------------|
| nama | nama | select nama from kelas |input data berhasil |input data kelas|

##### 3.3.5.5 Spesifikasi objek objek pada layar
|id_objek | jenis | keterangan |
|---|--------|-------|
| nama| input type text | memasukan nama ke database |
| btnSubmit | Button | Jika Diklik maka akan Diasosiasikan ke QUE-08 pada sub-bab 3.3.5.3 |

##### 3.3.5.6 Spesifikasi Proses/Algoritma
id_proses : input_kelas<br>
Objek Terkait : nama, btnSubmit <br>
Event : Input Data kelas

|Initial State (IS)|
|---|
| Tabel sudah dibuat strukturnya tetapi mungkin masih kosong |

|Final State (FS)|
|---|
| Menghasilkan tabel kelas yang telah ditambahkan satu rekord |

|Spesifikasi Proses/Algoritma|
|---|
| 1. Cek apakah data yang dimasukkan ada |
|2.IF belum ada, tambahkan 1 record pada tabel kelas|
|   ELSE Jika sudah ada, maka tambahkan data yang berbeda |

#### 3.3.6 Input Data Mata Pelajaran

##### 3.3.6.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Input Data Mata Pelajaran | From Entry Tabular | mata_pelajaran |

##### 3.3.6.2 Spesifikasi Layar Utama
![](http://i65.tinypic.com/1zc2t8x.png)

##### 3.3.6.3 Spesifikasi Query
|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
|QUE-09 | Input data mata pelajaran | insert into mata_pelajaran values (id_mapel, 'nama_mapel') |

##### 3.3.6.4 Spesifikasi Field Pada Data Layar <br>

|Label | Field | Tabel/Query | Validasi| Keterangan|
|---|--------|-------|---------------|-------------|
| nama | nama | select nama from mata_pelajaran |input data berhasil |input mata pelajaran|

##### 3.3.6.5 Spesifikasi objek objek pada layar
|id_objek | jenis | keterangan |
|---|--------|-------|
| nama| input type text | memasukan nama ke database |
| btnSubmit | Button | Jika Diklik maka akan Diasosiasikan ke QUE-09 pada sub-bab 3.3.6.3 |

##### 3.3.6.6 Spesifikasi Proses/Algoritma
id_proses : input_mapel<br>
Objek Terkait : nama, btnSubmit <br>
Event : Input Data Mata Pelajaran

|Initial State (IS)|
|---|
| Tabel sudah dibuat strukturnya tetapi mungkin masih kosong |

|Final State (FS)|
|---|
| Menghasilkan tabel mata_pelajaran yang telah ditambahkan satu rekord |

|Spesifikasi Proses/Algoritma|
|---|
| 1. Cek apakah data yang dimasukkan ada |
|2.IF belum ada, tambahkan 1 record pada tabel mata_pelajaran|
|   ELSE Jika sudah ada, maka tambahkan data yang berbeda |

#### 3.3.7 Bimbingan denga Pengajar melalui Chat

##### 3.3.7.1 Fungsi Modul

|No | Fungsi | Jenis | Tabel Terkait |
|---|--------|-------|---------------|
|1 | Kirim Pesan | From Entry Tabular | chat |

##### 3.3.7.2 Spesifikasi Layar Utama
![](http://i63.tinypic.com/20p0kp.png)

##### 3.3.7.3 Spesifikasi Query
|ID Query| Deskripsi| Ekspresi Query|
|--------|----------|---------------|
|QUE-10 | Kirim Pesan | insert into chat values (chat_id, send_to, send_by, 'message', time) |

##### 3.3.7.4 Spesifikasi Field Pada Data Layar <br>

|Label | Field | Tabel/Query | Validasi| Keterangan|
|---|--------|-------|---------------|-------------|
| user | send_to | select send_to from chat |kirim pesan berhasil |menampilkan user yang ingin dikirimi pesan|

##### 3.3.7.5 Spesifikasi objek objek pada layar
|id_objek | jenis | keterangan |
|---|--------|-------|
| getChats| CI_Controller | menerima dan menampilkan pesan |
| sendMessage | CI_Controller | Jika di tekan enter maka akan Diasosiasikan ke QUE-10 pada sub-bab 3.3.7.3 |

##### 3.3.7.6 Spesifikasi Proses/Algoritma
id_proses : chat<br>
Objek Terkait : user, getChats, sendMessage <br>
Event : Kirim Pesan

|Initial State (IS)|
|---|
| Memilih User yang akan dikirimi pesan |

|Final State (FS)|
|---|
| Pesan Berhasil terkirim dan tersampaikan kepada user yang dipilih tadi |

|Spesifikasi Proses/Algoritma|
|---|
| 1. Ppilih user yang akan dikirim pesan |
|2.IF Pesan berhasil dikirim, maka pesan akan sampai ke user|
|   ELSE Jika gagal, maka pesan tidak sampai ke user |

#### 3.4 Matriks Kerunutan
|id_kebutuhan | modul | keterangan |
|---|--------|-------|
| login  | 3.3.1 login | menentukan otoritas user |
| input_data_pelajar | 3.3.2 input data pelajar | memasukan data pelajar ke database|
|input_data_pengajar | 3.3.3 input data pengajar | memasukan data pengajar ke database |
input_data_orang_tua | 3.3.4 input data orang tua | memasukan data orangtua ke database |
| input_data_kelas | 3.3.5 input data kelas | memasukan data kelas ke database |
| input_data_mata_pelajaran | 3.3.6 input data mata pelajaran | memasukan data mata pelajaran ke database |
|chat | 3.3.7 bimbingan dengan pengajar melalui chat | mengirimkan pesan kepada pengajar |



<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
##### 3.3.2.4 Spesifikasi Field Data Layar


##### 3.3.2.5 Spesifikasi Objek - Objek Pada Layar

##### 3.3.2.6 Spesifikasi Proses/Algoritma

#### 3.4 Matriks Keturunan
>>>>>>> 5434e14010e1a4c1b0080d18cdf5165524afc015
>>>>>>> e01a31bbb23b1ca894a11010f2a7108824aead7c
>>>>>>> 06027f80f2ef6a8360c2a2eff44e9e17b0d1ae6c
