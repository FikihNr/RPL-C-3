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
<b>1.1	Tujuan </b><br>
Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun ” Sistem Informasi Bimbingan Belajar”. Dokumen ini dibangun untuk memudahkan dalam melakukan proses pengolahan nilai, pengolahan absensi, lihat jadwal dan konsultasi bimbingan yang dilakukan oleh pengguna dan penyedia. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak ”SIMBEL” (Sistem Informasi Bimbingan Belajar).

<b>1.2	Lingkup Masalah </b>

SIMBEL merupakan aplikasi yang kami bangun untuk mempermudah pengguna dan penyedia dalam pengolahan nilai, pengolahan absens, lihat jadwal dan konsultasi bimbingan. Dengan bertujuan aplikasi yang kami buat ini supaya praktis dalam pengimputan data tanpa menggunakan kertas secara manual. Artinya dengan aplikasi ini kita tidak perlu repot - repot membuang kertas hanya untuk pengolahan absensi, pengolahan nilan dan sebagainya.

<b>1.3	Definisi, akronim, singkatan</b>

__Akronim dan Singkatan__ :

| No | Singkatan | Arti Kata |
|----|-----------|-----------|
| 1  | SIMBEL | Sistem Informasi Bimbingan Belajar | 
| 2  | SRS | Software Requirement Specification |

__Definisi :__ <br>

* Software Requirement Specification adalah perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasih pembuat dengan pengguna.

* use case adalah situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda.

<b>1.4	Referensi</b>

Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah:

* Praktikum Analisis dan Desain Sistem Informasi, 2009\

* Sistem Informasi Sekolah Terpadu, 2009

* http://yaniwid.wordpress.com/2008/10/16/kebutuhan-fungsional-vs-non-fungsional/

* http://www.academia.edu/23589245/DOKUMEN_SRS_SOFTWARE_REQUIRMENT_SPESIFICATION_APLIKASI_RANDOM_GRUP_Oleh_Kelompok_2_Ade_Mustofa_1403001_Aep_Saeful_Hidayat.\

<b>1.5	Overview</b>

Dokumen SRS ini dibagi menjadi tiga bagian utama, yaitu :
bagian pertama berisi penjelasan tentang dokumen SRS yang mencakup tujuan pembuatan dokumen ini, lingkup masalah yang diselesaikan oleh perangkat lunak yang dikembangkan, definisi, referensi dan deskripsi umum. Bagian kedua berisi penjelasan secara umum mengenai Sistem Informasi Bimbingan Belajar yang akan dibangun, meliputi fungsi dari perangkat lunak, karakteristik pengguna, batasan dan asumsi yang diambil dala pembuatan perangkat lunak. Bagian ketiga berisi uraian kebutuhan perangkat lunak secara lebih rinci.



## 2.	Gambaran Umum

Aplikasi sistem informasi bimbingan belajar pada umumnya berhubungan dengan menampilkan laporan hasil kegiatan dia selama bimbingan belajar seperti nilai try out, absensi kehadiran siswa, jadwal try out, fitur chat konsultasi bimbingan belajar dan juga orang tua siswa dapat mengetahui grafik kehadiran anaknya yang telah terdaftar pada lembaga bimbingan belajar.
Belum semua lembaga bimbingan belajar menggunakan aplikasi sistem informasi bimbingan belajar berbasis website. Pada aplikasi sistem informasi ini dapat di akses kapan pun dan di manapun tanpa harus datang langsung ke tempat bimbingan belajar. 

__2.1	Perspektif produk__

Perangkat lunak sistem informasi bimbingan belajar ini merupakan perangkat lunak yang digunakan untuk mempermudah proses pemberitahuan sebuah informasi dengan contoh pelaporan sebuah nilai dan absensi siswa, jadwal try out, fitur chat pada pengajar mengenai bimbingan konsultasi. Aplikasi sistem informasi berkaian dengan beberapa entitas lingkup lembaga bimbingan belajar yaitu siswa, pihak lembaga bimbingan belajar, dan orang tua siswa. Sistem informasi bimbingan belajar merupakan suatu web database application yang mengolah data dan melaporkan hasil study siswa pada saat kegiatan di lembaga bimbingan belajar.
Siswa mendapatkan informasi laporan nilai dan absensi, konsultasi mengenai bimbingan belajar kepada pengajar atau tenor, mendapatkan informasi jadwal mata pelajaran dan jadwal try out, dan juga mendapatkan informasi data pengajar. Orang tua siswa hanya mendapatkan sebuah informasi laporan grafik nilai dan absensi anak nya yang telah mengikuti kegiatan proses belajar di lembaga bimbingan belajar. Pengajar atau tenor berhak memberikan nilai siswa nya ketika mengikuti try out atau tugas lainnya dan pengajar pun berhak memberikan jawaban konsultasi bimbingan belajar kepada siswa nya melalui chat.

__2.1.1	Antarmuka sistem__

Dalam penggunaan, pengguna berinteraksi dengan sebuah aplikasi melalui browser pada HP, PC/Laptop. Aplikasi ini memiliki fungsi yang berbeda dari tiap-tiap usernya. Hal ini dimana user siswa dapat mengelola data pribadi, melihat hasil laporan absensi dan nilai, melakukan live chat dengan pengajar. User pengajar dapat mengelola data pribadi, memberikan hasil laporan absensi dan nilai siswanya, melakukan live chat dengan siswa. User Orang Tua dapat mengelola data pribadi, melihat hasil laporan absensi dan nilai anaknya selama mengikuti bimbingan belajar. Admin sendiri dapat melakukan pengolahan Data user dan pengolahan informasi.

![](http://i68.tinypic.com/f0dd6s.jpg)

__Deskripsi Modul User__

<b>Halaman utama</b><br>
Halaman Utama adalah halaman yang pertama kali dilihat oleh user ketika membuka wesite tersebut. di situ terdapat menu bar yang berisi Home, About, Data, dan Login.
Kemudian dibawah menu bar terdapat slide image yang berisi dokumentasi kegiatan dari Ganesha Operation tersebut.
Di bawah slide image terdapat ikon kalender, fasilitas, dan syarat untuk membuat akun. dan Sistem Informasi mengenai Ganesha Operation terletan dibawah icon.

![](http://i63.tinypic.com/15iap13.jpg)

<b>About</b><br/>
Halaman About adalah halaman tentang Ganesha Operation tersebut yang berisi Visi, Misi, Tujuan, Denah Lokasi dan kontak Ganesha Operation.

![](http://i66.tinypic.com/mcpw68.jpg)

<b>Data</b><br/>
jika user memilih data pada menu bar, maka terdapat pilihan jadwal Bimbel untuk melihat jadwal bimbel seluruh kelas, jadwal Try Out untuk melihat jadwal Try Out seluruh kelas, Data Pelajar untuk melihat pelajar yg mengikuti les di Ganesha Operation tersebut, Data Kelas untuk melihat data kelas pada Ganesha Operation dan Data Tentor untuk melihat siapa sajayang mengajar di ganesha Operation tersebut.

![](http://i68.tinypic.com/fdrgoj.jpg)

<b>Login</b><br/>
jika user ingin mengakses ke dashbor maka harus Login terlebih dahulu. pada menu bar, maka terdapat pilihan Login sebagai pelajar, Orangtua/Wali dan Tentor. Di form login terdapat Forgot Password, coba captcha lain dan Register Id.

![](http://i68.tinypic.com/2nbsim9.jpg)

__Deskripsi Modul Sistem__

<b>Login Admin</b><br/>
jika Admin ingin mengakses ke dashbor admin maka harus Login terlebih dahulu.Di form login terdapat Forgot Password, dan coba captcha lain.

![](http://i68.tinypic.com/2rc4wvr.jpg)

<b>Add User</b><br/>
admin dapat memilih add user di menu navigation yang ada di samping. 

![](http://i68.tinypic.com/s3dptx.jpg)

Add User Jika admin akan menambah akun maka sistem akan mengarahkan ke form pendaftaran yang harus mengisi identitas user dan yang paling penting mengisi alamat email. Di situ Admin bisa menambahkan user Pelajar, Tentor dan Orangtua/Wali.

![](http://i64.tinypic.com/mw5lir.jpg)

<b>Edit User</b><br/>
admin dapat memilih edit user di menu navigation yang ada di samping.

![](http://i67.tinypic.com/sywbqq.jpg)<br/>

Edit User Jika admin akan merubah atau mengedit akun maka sistem akan mengarahkan ke tabel user yang terdapat button edit, hapus, dan simpan. Di situ Admin bisa mengedit user Pelajar, Tentor dan Orangtua/Wali. 

![](http://i63.tinypic.com/212afz9.jpg)<br/>

<b>Edit dan Tambah Data</b><br/>
Edit dan Tambah Data Jika admin akan menambahkan atau mengedit data maka sistem akan mengarahkan ke fungsi masing-masing. Di situ Admin bisa mengedit atau menambah jadwal Bimbel, jadwal Try Out, Data Pelajar, Data Kelas, dan Data Tentor. halaman ini akan terhubung ke website user bagian data yg berada di menu bar.

![](http://i64.tinypic.com/wrnon4.jpg)

<b>Edit Informasi</b><br/>
Edit Informasi Jika admin akan menambahkan atau mengedit informasi yang berisi berita tentang Ganesha Operation tersebut. maka sistem akan mengarahkan ke halaman yang berisi berbagai macam berita, button edit, form untuk memasukan link, dan simpan. Di situ Admin bisa menambahkan informasi atau berita dengan memasukan link yang ada di form tersebut. secara otomatis berita tersebut akan ditampilkan di website user.

![](http://i63.tinypic.com/33tnfox.jpg)

__Antarmuka Proses__

Proses Antarmuka Pengguna merupakan penjelasan proses dari tampilan grafis dan fungsi-fungsinya yang berhubungan langsung dengan pengguna (user).

__Proses Modul User__

<b>Halaman utama</b><br>
Halaman Utama adalah halaman yang pertama kali dilihat oleh user ketika membuka wesite tersebut. di situ terdapat menu bar yang berisi Home, About, Data, dan Login. Kemudian dibawah menu bar terdapat slide image yang berisi dokumentasi kegiatan dari Ganesha Operation tersebut.
Di bawah slide image terdapat ikon kalender, fasilitas, dan syarat untuk membuat akun. dan Sistem Informasi mengenai Ganesha Operation terletan dibawah icon. 

![](http://i63.tinypic.com/15iap13.jpg)

<ul>
	<li>Kalender<br/>User dapat melihat kalender akademik melalui website tersebut </li>
</ul>![](http://i65.tinypic.com/s67g1u.jpg)
<ul>
	<li>Fasilitas<br/>User dapat melihat fasilitas yang ada di Ganesha Operation tersebut</li>
</ul>![](http://i65.tinypic.com/bj3et.jpg)
<ul>
	<li>Syarat membuat akun<br/>User Dapat melihat persyaratan untuk membuat akun</li>
</ul> ![](http://i64.tinypic.com/neevti.jpg)

<b>About</b><br/>
Halaman About adalah halaman tentang Ganesha Operation tersebut yang berisi Visi, Misi, Tujuan, Denah Lokasi dan kontak Ganesha Operation.

![](http://i66.tinypic.com/mcpw68.jpg)

<b>Data</b><br/>
jika user memilih data pada menu bar, maka terdapat pilihan jadwal Bimbel untuk melihat jadwal bimbel seluruh kelas, jadwal Try Out untuk melihat jadwal Try Out seluruh kelas, Data Pelajar untuk melihat pelajar yg mengikuti les di Ganesha Operation tersebut, Data Kelas untuk melihat data kelas pada Ganesha Operation dan Data Tentor untuk melihat siapa sajayang mengajar di ganesha Operation tersebut. 

![](http://i68.tinypic.com/fdrgoj.jpg)

<ul>
	<li>Jadwal Bimbel<br/>User dapat melihat jadwal bimbel yang berisi jadwal seluruh kelas, jadwal bimbel diinput dari admin tepatnya di edit dan tambah data->Jadwal Bimbel</li>
</ul> ![](http://i67.tinypic.com/309qc87.jpg)
<ul>
	<li>Jadwal Try Out<br/>User dapat melihat jadwal Try Out yang berisi jadwal Try Out seluruh kelas, jadwal Try Out diinput dari admin tepatnya di edit dan tambah data->Jadwal Try Out</li>
</ul>![](http://i63.tinypic.com/16avc02.jpg)
<ul>
	<li>Data Pelajar<br/>User dapat melihat Data Pelajar yang berisi pelajar yang mengikuti les di Ganesha Operation tersebut yang didalamnya berisi nama, kelas dan umur. Data Pelajar diinput dari admin tepatnya di edit dan tambah data->Data Pelajar</li>
</ul>![](http://i68.tinypic.com/whmflh.jpg)
<ul>
	<li>Data Kelas<br/>User dapat melihat Data Kelas yang berisi nama kelas dan jumlah pelajar yang mengikuti les di Ganesha Operation. Data Kelas diinput dari admin tepatnya di edit dan tambah data->Data Kelas</li>
</ul>![](http://i64.tinypic.com/29ymng9.jpg)
<ul>
	<li>Data Tentor<br/>User dapat melihat Data Tentor yang berisi nama tentor dan job title di Ganesha Operation. Data Tentor diinput dari admin tepatnya di edit dan tambah data->Data Tentor</li>
</ul>![](http://i67.tinypic.com/2eo8guw.jpg)

<b>Login</b><br/>
jika user ingin mengakses ke dashbor maka harus Login terlebih dahulu. pada menu bar, maka terdapat pilihan Login sebagai pelajar, Orangtua/Wali dan Tentor. Di form login terdapat Forgot Password, coba captcha lain dan Register Id. 

![](http://i68.tinypic.com/2nbsim9.jpg)

<ul>
	<li>Forgot Password<br/>jika user lupa password lalu memilih link Forgot Password maka sistem akan mengarahkan ke masukan email, kemudian si user mengecek kode verifikasi yang ada di kotak masuk email tersebut. user kembali ke halaman lalu masukan kode verifikasi ke dalam input text dan user dapat mengetikan kata sandi baru lalu simpan. kemudian sistem akan mengarahkan user ke halaman login</li>
</ul>![](http://i65.tinypic.com/231hex.jpg) ![](http://i65.tinypic.com/29bg4fc.jpg) ![](http://i67.tinypic.com/2remiz8.jpg)
<ul>
	<li>Coba Captcha Lain<br>jika user mengeklik link Coba Captcha lain maka kode Captcha yang ada di dalam kotak tersebut akan berbeda atau berubah.</li>
	<li>Login<br/>Button Login untuk mengakses ke halaman Dashbor User</li>
</ul>
<ul>
	<li>Register ID<br/>jika user mengeklik Button Register ID maka sistem akan mengarahkan user ke halaman persyaratan membuat akun, halaman ini juga terdapat pada home lalu ada icon add user. Di situ Persyaratan untuk membuat akun, bahwa user yang akan membuat akun harus menghubungi maintenance atau admin dan memberikan alamat emailnya untuk di daftarkan melalui admin. setelah admin selesai mendaftarkan akun, maka otomatis kata sandi Dashbor user akan dikirim ke email user masing-masing.</li>
</ul> ![](http://i64.tinypic.com/neevti.jpg)


<b>Dashbor Pelajar</b><br/>Di Dashbor ini Pelajar dapat melihat jadwal bimbel yang ada di kelasnya, jadwal Try Out, Melihat hasil nilai Try Out, Melihat Kehadiran, dan melakukan bimbingan terhadap tentor
<ul>
	<li>Jadwal Bimbel dan Try Out<br/>Pelajar dapat melihat jadwal Bimbel dan Try Out yang ada di kelasnya. Jadwal Bimbel dan Try Out Diinput langsung oleh admin</li>
</ul>![](http://i65.tinypic.com/24csh6w.jpg)
<ul>
	<li>Hasil Nilai<br/>Pelajar dapat melihat nilai hasil Try Out dimana saja dan kapan saja tanpa harus pergi ke tempat les atau bimbingan belajar tersebut. Hasil Nilai Di inputkan langsung oleh setiap tentor yang mengajar mata pelajaran tersebut.</li>
</ul>![](http://i64.tinypic.com/2s64g15.jpg)
<ul>
	<li>Kehadiran<br/>Pelajar dapat melihat kehadiran mereka sendiri, Kehadiran Di input langsung oleh tentor yang mengajar mata pelajaran tersebut ketika sebelum memulai kegiatan belajar.</li>
</ul>![](http://i66.tinypic.com/30wl9ty.jpg)
<ul>
	<li>Bimbingan<br/>Pelajar dapat melakukan bimbingan lewat chat yang tersedia pada website tersebut dengan tentor</li>
</ul>![](http://i64.tinypic.com/2eptuth.jpg)

<b>Dashbor Tentor</b><br/>Di Dashbor ini Tentor dapat melihat jadwal mengajar, Rekap Nilai, Rekap kehadiran, dan membalas bimbingan terhadap Pelajar.
<ul>
	<li>Jadwal Mengajar<br/>Tentor dapat melihat jadwal mengajarnya setiap saat, Jadwal Mengajar di input langsung oleh admin</li>
</ul>![](http://i64.tinypic.com/167qjiq.jpg)
<ul>
	<li>Rekap Nilai<br/>Tentor dapat menginput hasil Try Out atau nilai pada setiap pelajar yang nantinya akan muncul di Hasil Nilai Dashbor Pelajar masing-masing.</li>
</ul>![](http://i68.tinypic.com/1498bo0.jpg)
<ul>
	<li>Kehadiran<br/>Tentor dapat menginput kehadiran sebelum proses pembelajaran dimulai yang nantinya akan muncul di kehadiran Dashbor Pelajar masing-masing</li>
</ul>![](http://i66.tinypic.com/30wl9ty.jpg)
<ul>
	<li>Bimbingan<br/>Tentor dapat melakukan bimbingan dengan pelajar lewat chat yang tersedia di website tersebut. di dalam </li>
</ul>![](http://i67.tinypic.com/2i78tqv.jpg)

<b>Dashbor Orangtua/Wali</b><br/>Di Dashbor ini Orangtua atau wali dapat memonitoring anaknya dengan melihat hasil nilai dan kehadiran anaknya pada saat les atau bimbingan belajar di Ganesha Operation.
<ul>
	<li>Hasil Nilai<br/>Orangtua atau wali dapat melihat keseluruhan nilai pelajar tersebut yang sudah di inputkan oleh masing-masin tentor setiap mata pelajarannya</li>
</ul>![](http://i63.tinypic.com/14iivx3.jpg)
<ul>
	<li>Kehadiran<br>Orangtua atau wali dapat melihat kehadiran anaknya dalam bentuk grafik dan keterangan yang sudah di inputkan oleh masing-masing tentor setiap mata pelajarannya</li>
</ul>![](http://i63.tinypic.com/2nvz2b6.jpg)

__Proses Modul Sistem__

<b>Add User</b><br/>
admin dapat memilih add user di menu navigation yang ada di samping. 

![](http://i68.tinypic.com/s3dptx.jpg)

Add User Jika admin akan menambah akun maka sistem akan mengarahkan ke form pendaftaran yang harus mengisi identitas user dan yang paling penting mengisi alamat email. Di situ Admin bisa menambahkan user Pelajar, Tentor dan Orangtua/Wali.
<ul>
	<li>Add Pelajar<br/>Admin dapat membuat akun pelajar dengan mengisi form yang ada pada halaman berikut. pelajar wajib mengirimkan atau memberi tau alamat email ke admin untuk mengetahui password dashbor yang sudah Admin buat untuk pelajar tersebut.</li>
</ul>![](http://i64.tinypic.com/mw5lir.jpg)
<ul>
	<li>Add Tentor<br/>Admin dapat membuat akun Tentor dengan mengisi form yang ada pada halaman berikut. Tentor wajib memberitau alamat email kepada Admin untuk mengetahui password dashbor yang sudah Admin buat untuk Tentor tersebut</li>
</ul>![](http://i66.tinypic.com/1604q3p.jpg) 
<ul>
	<li>Add Orangtua/Wali<br/>Admin dapat membuat akun Oranngtua/Wali dengan mengisi form yang ada pada halaman berikut. Orangtua/Wali wajib memberitau alamat email kepada admin untuk mengetahui password dashbor yang sudah Admin buat untuk Orangtua/Wali tersebut</li>
</ul> ![](http://i66.tinypic.com/1js049.jpg)

<b>Edit User</b><br/>
admin dapat memilih edit user di menu navigation yang ada di samping.

![](http://i67.tinypic.com/sywbqq.jpg)<br/>

Edit User Jika admin akan merubah atau mengedit akun maka sistem akan mengarahkan ke tabel user yang terdapat button edit, hapus, dan simpan. Di situ Admin bisa mengedit user Pelajar, Tentor dan Orangtua/Wali. 
<ul>
	<li>Edit Pelajar<br/>Admin dapat merubah atau mengedit informasi yang berisi Kelas, Nama, umur dan tandai untuk menandai user. ada juga button edit, hapus dan simpan</li>
</ul>![](http://i63.tinypic.com/212afz9.jpg)
<ul>
	<li>Edit Tentor<br/>Admin dapat merubah atau mengedit informasi yang berisi Nama, Nik, Umur dan tandai untuk menandai user. ada juga button edit, hapus, dan simpan</li>
</ul>![](http://i65.tinypic.com/muzcrc.jpg)
<ul>
	<li>Edit Orangtua/Wali<br/>Admin dapat merubah atau mengedit informasi yang berisi Nama, Umur dan Tandai untuk menandai user. ada juga button edit, hapus, dan simpan</li>
</ul>![](http://i65.tinypic.com/n51vsg.jpg)

<b>Edit dan Tambah Data</b><br/>
Edit dan Tambah Data Jika admin akan menambahkan atau mengedit data maka sistem akan mengarahkan ke fungsi masing-masing. Di situ Admin bisa mengedit atau menambah jadwal Bimbel, jadwal Try Out, Data Pelajar, Data Kelas, dan Data Tentor. halaman ini akan terhubung ke website user bagian data yg berada di menu bar.

![](http://i64.tinypic.com/wrnon4.jpg)

<ul>
	<li>Jadwal Bimbel<br/>Admin dapat mengedit dan menambah jadwal bimbel seluruh kelas yang nantinya akan ditampilkan ke website user data. terdapat button tambah, edit dan simpan</li>
</ul>![](http://i66.tinypic.com/2qdcr3c.jpg)
<ul>
	<li>Jadwal Try Out<br/>Admin dapat mengedit dan menambah jadwal Try Out seluruh kelas yang nantinya akan ditampilkan ke website user data. terdapat button tambah, edit dan simpan</li>
</ul>![](http://i65.tinypic.com/350qc01.jpg)
<ul>
	<li>Data Pelajar<br/>Admin dapat menginput dan mengedit Data Pelajar yang berisi kelas, nama, umur dan terdapat button tambah, edit dan simpan.  Data pelajar akan ditampilkan ke website user->Data->Data Pelajar</li>
</ul>![](http://i66.tinypic.com/5k4qdy.jpg)
<ul>
	<li>Data Kelas<br/>Admin dapat menginput dan mengedit Data Kelas yang berisi kelas dan jumlah pelajar. Data kelas akan ditampilkan ke website user->Data->Data Kelas.juga terdapat button tambah, edit dan simpan</li>
</ul>![](http://i65.tinypic.com/2zstjxw.jpg)
<ul>
	<li>Data Tentor<br/>Admin dapat menginput dan mengedit Data Tentor yang berisi nama, jobtitle dan terdapat button tambah, edit dan simpan. Data Tentor akan ditampilkan ke website user->Data->Data Tentor</li>
</ul>![](http://i65.tinypic.com/2l8gks5.jpg)


<b>Edit Informasi</b><br/>
Edit Informasi Jika admin akan menambahkan atau mengedit informasi yang berisi berita tentang Ganesha Operation tersebut. maka sistem akan mengarahkan ke halaman yang berisi berbagai macam berita, button edit, form untuk memasukan link, dan simpan. Di situ Admin bisa menambahkan informasi atau berita dengan memasukan link yang ada di form tersebut. secara otomatis berita tersebut akan ditampilkan di website user.

![](http://i63.tinypic.com/33tnfox.jpg)

__2.1.3	Antarmuka perangkat keras__

Aplikasi ini berjalan diatas perangkat keras berupa beberapa PC/Laptop yang saling terhubung oleh jaringan internet dan berkomunikasi dengan protocol https. Dimana file aplikasi ditempatkan pada web hosting yang di operasikan oleh administrator. Kebutuhan minimum perangkat keras yang dapat digunakan oleh Sistem Informasi Bimbingan Belajar adalah :

- PC/Laptop
- Keyboard
- Mouse
- Modem

__2.1.4	Antarmuka perangkat lunak__

1. Sistem Operasi (Windows 7 or Higher)
2. Bahasa Pemograman (HTML, PHP, JavaScript)
3. Software Pengolah
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
| 3  | Tutup | Digunakan untuk menghapus aktivitas |
| 4  | Hapus | Digunakan untuk menghapus data yang ingin dihapus |
| 5  | Edit | Digunakan untuk mengedit data yang ingin di edit |
| 6  | Simpan | Digunakan untuk menyimpan data yang ingin disimpan |
| 7  | Tambah Pelajar | Digunakan untuk menambah pelajar |
| 8  | Tambah Tentor | Digunakan untuk menambah tentor |
| 9  | Tambah Orangtua | Digunakan untuk menambah orangtua |
| 10 | Tambah Mata Pelajaran | Digunakan untuk menambah mata pelajaran |
| 11 | Tambah Jadwal Try Out | Digunakan untuk menambah jadwal try out |
| 12 | Tambah Kelas | Digunakan untuk menambah data kelas |
| 13 | Daftar Pelajar | Digunakan untuk mendaftar bagi pelajar |
| 14 | Daftar Tentor | Digunakan untuk mendaftar bagi tentor |
| 15 | Daftar Orangtua | Digunakan untuk mendaftar bagi orangtua | 
| 16 | Detail | Digunakan untuk memberikan informasi detail tentang data |
| 17 | Lihat jadwal Mata Pelajaran | Digunakan untuk melihat jadwal mata pelajaran |
| 18 | Lihat jadwal Try Out | Digunakan untuk melihat jadwal try out | 
| 19 | Lihat Nilai | Digunakan untuk melihat data nilai |
| 20 | Lihat Absensi | Digunakan untuk melihat data absensi |  

**2.1.8 Kebutuhan-kebutuhan dalam tahap adaptasi**

##### 2.2. Spesifikasi kebutuhan fungsional

![](http://i66.tinypic.com/ke672o.jpg)

**2.2.1 Login**


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

|--|--|
| Nama fungsi  |Melihat Laporan Nilai dan Absensi |
|Ref|Bag 2.2, Melihat Laporan Nilai dan Absensi| 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Laporan dan Nilai|
|Basic Path|1. Orang Tua Login ke dalam Sistem <br>2. Orang tua Melihat Laporan Nilai dan Absensi <br>3.Sistem menampilkan Laporan Nilai dan Absensi|
|Alternative|Tidak Ada|
|Post Condition|Orang Tua dapat Melihat Laporan Nilai dan Absensi |
|Exception Push	|1. Tidak ada Koneksi |

**2.2.3 Melihat Data Mata Pelajaran**

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

|--|--|
| Nama fungsi  |CRUD Data Jadwal Try Out |
|Ref|Bag 2.2, CRUD Data Jadwal Try Out | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Data Jadwal Try Out|
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin Melakukan CRUD Data Jadwal Try Out <br>3.Sistem menampilkan CRUD Data Jadwal Try Out|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan CRUD Data Jadwal Try Out|
|Exception Push	|1. Tidak ada Koneksi |

**2.2.12 Melihat Data Aspek Penilaian**

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


__2.4. Karakteristik pengguna__

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

__2.5.  Batasan – Batasan__

1. Perangkat lunak hanya bisa di akses ketika terhubung dengan internet.

2. Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan.

3. Pengembangan perangkat lunak tidak akan merubah file - file ataupun database yang ada.

__2.6. Asumsi - asumsi dan ketergantungan/keterkaitan__

Orang yang sudah login ketika webrowsernya di keluar maka anda di minta untuk login kembali.

__2.7. Kebutuhan – kebutuhan penyeimbang__

Website akan dijalankan di server dengan kecepatan akses internet yang tinggi. Kecepatan koneksi akan tergantung pada hardware dan karakteristik dari sistem.Website akan compatible dengan beberapa browser yang umum digunakan oleh customer,seperti Internet Explorer, Mozilla Firefox, Opera, Chrome, Safari dan Netscape. SIstem iniakan menggunakan internet security yang sama dengan yang digunakan di BPS.


## 3.	Kebutuhan lain yang spesifik
Kebutuhan Fungsional adalah kebutuhan yang harus dipenuhi agar suatu sistem dapat berjalan atau dapat dikatakan kebutuhan tambahan yang memiliki input, proses, dan output. Kebutuhan fungsional yang harus ada dalam sistem yang akan dikembangkan ini adalah sebagai berikut:

* Sistem harus dapat mempermudah pengguna / user dalam menggunkan aplikasi ini.

__3.1. Persyaratan Antar Muka Eksternal__

Salah satu syarat untuk dapat mengakses website ini adalah dengan menjadi siswa - siswi bimbel, pendaftaran melalui admin bimbel tersebut. Login menggunakan username dan password masing - masing user. Kemudian Sistem akan mencocokkan username dan password dengan NISN atan NIK dari user untuk sinkronisasi data pada database. Setelah berhasil login masing-masing user dapat melakukan presensi.

__3.2. Fungsional Requirement__

Logika Struktur terdapat pada bagian 3.3.1

**3.2.1 Login**


|--|--|
| Nama fungsi  |Login  |
|Ref|Bag 2.2, Login | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Login untuk Pelajar, Pengajar, Orang tua dan Admin|
|Basic Path|1. User sudah terdaftar dan jika sudah terdaftar maka bisa langsung menggunakan aplikasi yang menampilkan Dashboard sebagai halaman utamanya <br>2. Sistem menampilkan halaman login user yang terdiri dari kolom username, kolom password dan kolom captcha. <br>3. User memasukkan username, password, dan captcha. <br>4. Sistem menampilkan halaman utama. |
|Alternative|Tidak Ada|
|Post Condition|User dapat melihat Halaman utama web dan dapat mengakses fungsi lainnya |
|Exception Push	|1. Tidak ada Koneksi <br> 2. user belum mendaftar|

**3.2.2 Melihat Laporan Nilai dan Absensi**

|--|--|
| Nama fungsi  |Melihat Laporan Nilai dan Absensi |
|Ref|Bag 2.2, Melihat Laporan Nilai dan Absensi| 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Laporan dan Nilai|
|Basic Path|1. Orang Tua Login ke dalam Sistem <br>2. Orang tua Melihat Laporan Nilai dan Absensi <br>3.Sistem menampilkan Laporan Nilai dan Absensi|
|Alternative|Tidak Ada|
|Post Condition|Orang Tua dapat Melihat Laporan Nilai dan Absensi |
|Exception Push	|1. Tidak ada Koneksi |

**3.2.3 Melihat Data Mata Pelajaran**

|--|--|
| Nama fungsi  |Melihat Data Mata Pelajaran  |
|Ref|Bag 2.2, Melihat Data Mata Pelajaran | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Mata Pelajaran |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Data Mata Pelajaran <br>3.Sistem menampilkan Data Mata Pelajaran|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Laporan Nilai dan Absensi |
|Exception Push	|1. Tidak ada Koneksi |

**3.2.4 CRUD Nilai dan Absensi**

|--|--|
| Nama fungsi  |CRUD Nilai dan Absensi  |
|Ref|Bag 2.2, CRUD Nilai dan Absensi | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Nilai dan Absensi |
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin CRUD Nilai dan Absensi <br>3.Sistem menampilkan nilai dan absensi|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Laporan Nilai dan Absensi |
|Exception Push	|1. Tidak ada Koneksi |

**3.2.5 Melihat Data Kelas**

|--|--|
| Nama fungsi  |Melihat Data Kelas  |
|Ref|Bag 2.2, Melihat Data Kelas | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Kelas |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Data Kelas <br>3.Sistem menampilkan Data Kelas|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Laporan Data Kelas |
|Exception Push	|1. Tidak ada Koneksi |

**3.2.6 Melihat Jadwal Try Out**

|--|--|
| Nama fungsi  |Melihat Jadwal Try Out  |
|Ref|Bag 2.2, Melihat Jadwal Try Out | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Jadwal Try Out |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Jadwal Try Out <br>3.Sistem menampilkan Jadwal Try Out|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Jadwal Try Out |
|Exception Push	|1. Tidak ada Koneksi |

**3.2.7 Melihat Data Jadwal Mata Pelajaran**

|--|--|
| Nama fungsi  |Melihat Data Jadwal Mata Pelajaran  |
|Ref|Bag 2.2, Melihat Data Jadwal Mata Pelajaran | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Jadwal Mata Pelajaran |
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melihat Data Jadwal Mata Pelajaran <br>3.Sistem menampilkan Data Jadwal Mata Pelajaran|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melihat Data Jadwal Mata Pelajaran |
|Exception Push	|1. Tidak ada Koneksi |

**3.2.8 Melakukan Bimbingan**

|--|--|
| Nama fungsi  |Melakukan Bimbingan  |
|Ref|Bag 2.2, Melakukan Bimbingan | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Bimbingan|
|Basic Path|1. User Login ke dalam Sistem <br>2. User Melakukan Bimbingan <br>3.Sistem menampilkan Data Bimbingan|
|Alternative|Tidak Ada|
|Post Condition|User dapat Melakukan Bimbingan Dan Melihat Data Bimbingan|
|Exception Push	|1. Tidak ada Koneksi |

**3.2.9 CRUD Data Pelajaran**

|--|--|
| Nama fungsi  |CRUD Data Pengajar  |
|Ref|Bag 2.2, CRUD Data Pengajar | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Data Pengajar|
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin Melakukan CRUD Data Pengajar <br>3.Sistem menampilkan CRUD Data Pengajar|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan CRUD Data Pengajar|
|Exception Push	|1. Tidak ada Koneksi |

**3.2.10 CRUD Data Pelajar**

|--|--|
| Nama fungsi  |CRUD Data Pelajar  |
|Ref|Bag 2.2, CRUD Data Pelajar | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Data Pelajar|
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin Melakukan CRUD Data Pelajar <br>3.Sistem menampilkan CRUD Data Pelajar|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan CRUD Data Pelajar|
|Exception Push	|1. Tidak ada Koneksi |

**3.2.11 CRUD Data Jadwal Try Out**

|--|--|
| Nama fungsi  |CRUD Data Jadwal Try Out |
|Ref|Bag 2.2, CRUD Data Jadwal Try Out | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan CRUD Data Jadwal Try Out|
|Basic Path|1. User Login ke dalam Sistem <br>2. Admin Melakukan CRUD Data Jadwal Try Out <br>3.Sistem menampilkan CRUD Data Jadwal Try Out|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan CRUD Data Jadwal Try Out|
|Exception Push	|1. Tidak ada Koneksi |

**3.2.12 Melihat Data Aspek Penilaian**

|--|--|
| Nama fungsi  |Melihat Data Aspek Penilaian  |
|Ref|Bag 2.2, Melihat Data Aspek Penilaian | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Data Aspek Penilaian|
|Basic Path|1. User Login ke dalam Sistem <br>2.Admin Melakukan Data Aspek Penilaian<br>3.Sistem menampilkan Data Aspek Penilaian|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan Data Aspek Penilaian|
|Exception Push	|1. Tidak ada Koneksi |

**3.2.13 Melihat Laporan Nilai Dan Absensi**

|--|--|
| Nama fungsi  |Melihat Laporan Nilai Dan Absensi |
|Ref|Bag 2.2,Melihat Laporan Nilai Dan Absensi | 
|Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar|
|Precondition|Menampilkan Laporan Nilai Dan Absensi|
|Basic Path|1. User Login ke dalam Sistem <br>2.Admin Melakukan Data Laporan Nilai Dan Absensi<br>3.Sistem menampilkan Data Laporan Nilai Dan Absensi|
|Alternative|Tidak Ada|
|Post Condition|Admin dapat Melakukan Data Laporan Nilai Dan Absensi|
|Exception Push	|1. Tidak ada Koneksi |

##3.3 Struktur Detail Kebutuhan Non - Fungsional

__3.3.1. Logika Struktur Data__

Struktur data logika pada sistem akademik bimbingan belajar menggunakan website terdapat struktur Database yang dijelaskan menggunakan ERD.

![](http://i67.tinypic.com/vijw9x.png)

<b>Pengajar</b>

|Data Item| Type | Deskripsi|
|--|--|--|
|Id_pengajar|Integer|1. Primary Key <br> 2. Nomor auto increment pengajar |
|Nama |Text  |Nama pengajar|
|NIP|Integer|Nomor Induk Pegawai |
|Alamat|Integer|Alamat Pengajar|
|Jenis Kelamin|Varchar|Jenis kelamin pengajar|
|Nomor Hp|Interger|No HP pengajar|
|Password|Varchar|Password login pengajar|
|Status|Varchar|Status aktif/tidak|
|Id_mapel|Integer|1. Foreign Key<br> 2. Nomor auto increment mata pelajaran|

<b>Mata Pelajaran</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Mapel|integer|1. Primary Key <br> 2. Nomor auto increment Mata Pelajaran|
|Nama Mapel|varchar|Nama mata pelajaran|

<b>Detail Mata Pelajaran</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Detail_Mapel|integer|1. Primary Key <br> 2. Nomor auto increment detail mata pelajaran|
|Id_Matpel|integer |1. Foreign Key <br> 2. Nomor auto increment mata pelajaran|
|Id_Kelas|integer|1. Foreign Key <br> 2. Nomor auto increment kelas|
|Id_Pengajar|integer|1. Foreign Key <br> 2. Nomor auto increment pengajar|
|Nama Mapel|varchar|Nama mata pelajaran|
|Tanggal|Date|Tanggal jadwal pelajaran|
|Hari|varchar|Hari jadwal pelajaran|

<b>Siswa</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_siswa|integer|1. Primary key <br> 2. Nomor auto increment siwa|
|Nama|varchar|Nama siswa|
|Alamat|varchar|Alamat siswa|
|NIS|integer|Nomor Induk Siswa|
|Nomor_Handphone|integer|Nomor handphone siswa|
|Jenis kelamin|varchar|Jenis kelamin siswa|
|Status|varchar|Status aktif/tidak|
|Password|varchar|Password login siswa|
|Id_Kelas|integer|1. Foreign Key <br> 2. Nomor auto increment kelas|


<b>Orang Tua</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_orang tua|integer|1. Primary key <br> 2. Nomor auto increment orang tua|
|Nama Orang tua|varchar|Nama orang tua|
|NIK|integer|Nomor induk kependudukan|
|Alamat|varchar|alamat orang tua|
|Password|varchar|Password login orang tua|
|Id_siswa|integer|1. Foreign key <br> 2. Nomor auto increment siswa|

<b>Kelas</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_kelas|integer|1. Primary key <br> 2. Nomor auto increment kelas|
|Id_mapel|integer|1. Foreign key <br> 2. Nomor auto increment mata pelajaran|
|Nama kelas|varchar|Nama kelas|

<b>Jadwal Try Out</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_jadwal_TO|integer|1. Primary Key <br> 2. Nomor auto increment jadwal_to|
|Tahun_Ajaran|integer|Tahun ajaran try out|

<b>Detail Jadwal Try Out</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Detail_jadwal_TO|integer|1. Primary Key <br> 2. Nomor auto increment detail_jadwal_to|
|Id_jadwal_TO|integer|1. Foreign Key <br> 2. Nomor auto increment jadwal_to|
|Id_Matpel|integer|1. Foreign Key <br> 2. Nomor auto increment matpel
|Tanggal|date|Tanggal try out|
|Hari|varchar|Hari try out|

<b>Absensi</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Absensi|integer|1. Primary Key <br> 2. Nomor auto increment absensi|
|Id_Matpel|integer|1. Foreign Key <br> 2. Nomor auto increment mata pelajaran|
|Id_Siswa|integer|1. Foreign Key <br> 2. Nomor auto increment siswa|
|Id_Pengajar|integer|1. Foreign Key <br> 2. Nomor auto increment pengajar|
|Id_Kelas|integer|1. Foreign Key <br> 2. Nomor auto increment kelas|

<b>Nilai</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Nilai|integer|1. Primary Key <br> 2.Nomor auto increment nilai|
|Id_Matpel|integer|1. Foreign Key <br> 2. Nomor auto increment mata pelajaran|
|Id_Siswa|integer|1. Foreign Key <br> 2. Nomor auto increment siswa|
|Id_Pengajar|integer|1. Foreign Key <br> 2. Nomor auto increment pengajar|
|Id_Kelas|integer|1. Foreign Key <br> 2. Nomor auto increment kelas|

<b>Bimbingan</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_Bimbingan|integer|1. Primary Key <br> 2. Nomor auto increment bimbingan|
|Id_Pengajar|integer|1. Foreign Key <br> 2. Nomor auto increment pengajar|
|Id_Siswa|integer|1. Foreign Key <br> 2. Nomor auto increment siswa|
|Tanggal|date|Tanggal bimbingan|
|Chat|text| Chat bimbingan|

<b>Users</b>

|Data Item| Type | Deskripsi |
|--|--|--|
|Id_users|integer|1. Primary Key <br> 2. Nomor auto increment users|
|Username|varchar|Username yang akan digunakan pada saat login akun|
|Password|varchar|Password yang akan digunakan pada saat login akun|
|Level|enum|Level ini digunakan untuk mengetahui level tertinggi user akun|
|Id_siswa|integer|1. Foreign Key <br> 2. Nomor auto increment siswa|
|Id_pengajar|integer|1. Foreign Key <br> 2. Nomor auto increment pengajar|
|Id_Orang_Tua|integer|1. Foreign Key <br> 2. Nomor auto increment orang tua|

