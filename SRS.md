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

![](http://i68.tinypic.com/10x83v7.jpg)

__2.1.2 Antarmuka Pengguna__

__Deskripsi Modul User__

<table border="1">
<tr align="center">
<td><b>Halaman utama</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-7vdnUNCMM8M/Ws1UfXfFalI/AAAAAAAAD_E/vdPf_xzVgzUWgN1FniiBlSDwkeXn7MJZQCLcBGAs/s1600/home1.jpg" height="350" width="500" /><br><p align="justify">Halaman Utama adalah halaman yang pertama kali dilihat oleh user ketika membuka wesite tersebut. di situ terdapat menu bar yang berisi Home, About, Data, dan Login.
Kemudian dibawah menu bar terdapat slide image yang berisi dokumentasi kegiatan dari Ganesha Operation tersebut.
Di bawah slide image terdapat ikon kalender, fasilitas, dan syarat untuk membuat akun. dan Sistem Informasi mengenai Ganesha Operation terletan dibawah icon.</p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>About</b><br></td></tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-JJRlXuSCf8Y/WszsRfdCZBI/AAAAAAAAD-0/JLQ6CkSLdvElI5Ok2eDSOpAnqk2RrUxcACLcBGAs/s1600/44.jpg" width="500px" height="350px" /><br><p align="justify">
Halaman About adalah halaman tentang Ganesha Operation tersebut yang berisi Visi, Misi, Tujuan, Denah Lokasi dan kontak Ganesha Operation.</p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Data</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-WnGkIMoxbAg/Ws2Gawj1sXI/AAAAAAAAECI/AYwaf5l0gmI3ASdmTGQRi--1iiiaxo_FACLcBGAs/s1600/MENUdata.jpg" height="350" width="500" /><br><p align="justify">
jika user memilih data pada menu bar, maka terdapat pilihan jadwal Bimbel untuk melihat jadwal bimbel seluruh kelas, jadwal Try Out untuk melihat jadwal Try Out seluruh kelas, Data Pelajar untuk melihat pelajar yg mengikuti les di Ganesha Operation tersebut, Data Kelas untuk melihat data kelas pada Ganesha Operation dan Data Tentor untuk melihat siapa sajayang mengajar di ganesha Operation tersebut.</p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Login</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-YLvsBVR15FE/Ws2HYBpLLGI/AAAAAAAAECU/NT6qT9hi0c4En8YSJ7YBab5XVHFCo8HswCLcBGAs/s1600/MENUlogin.jpg" height="350" width="500" /><br><p align="justify">
jika user ingin mengakses ke dashbor maka harus Login terlebih dahulu. pada menu bar, maka terdapat pilihan Login sebagai pelajar, Orangtua/Wali dan Tentor. Di form login terdapat Forgot Password, coba captcha lain dan Register Id. </p></td></tr></table>


__Deskripsi Modul Sistem__

<table border="1">
<tr align="center">
<td><b>Login Admin</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-cGyaVZPiE4k/Ws2IM4KILOI/AAAAAAAAECg/OJRVMbdmp7s7UywcBQXHZWjAm7uwrw6QwCLcBGAs/s1600/form%2Blogin%2BAdmin%2Bcopy.jpg" height="350" width="500" /><br><p align="justify">
jika Admin ingin mengakses ke dashbor admin maka harus Login terlebih dahulu.Di form login terdapat Forgot Password, dan coba captcha lain. </p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Login User</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-Bva-KWdAguU/Ws2I_5j2J8I/AAAAAAAAECs/dHcZHX-i6D41Vw175LTmDDEs8V_sScD3gCLcBGAs/s1600/menu+add+user.jpg" height="350" width="500" /><br><br><p align="justify">
admin dapat memilih add user di menu navigation yang ada di samping. </p></td></tr><br><br>

<tr align="center">
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-2wPvbiAMG-8/Ws2KLYR8ZSI/AAAAAAAAEC4/4KZxRzE3oy0lRHmM_NbXdQJieZ4ongd9ACLcBGAs/s1600/form+add+tentor.jpg" height="350" width="500" /><br><br><p align="justify">
Add User Jika admin akan menambah akun maka sistem akan mengarahkan ke form pendaftaran yang harus mengisi identitas user dan yang paling penting mengisi alamat email. Di situ Admin bisa menambahkan user Pelajar, Tentor dan Orangtua/Wali. </p></td></tr></table>



<table border="1">
<tr align="center">
<td><b>Edit User</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-VHsgSECyySA/Ws2LG7ZthYI/AAAAAAAAEDE/UMm3boix4sszbCmJoWRsjtRP7Qcyl1s1QCLcBGAs/s1600/menu+edit+user.jpg" height="350" width="500" /><br><p align="justify">
admin dapat memilih edit user di menu navigation yang ada di samping. </p></td></tr><br>

<tr align="center">
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-8Ag1EtG6lLY/Ws2MCWFNSwI/AAAAAAAAEDQ/nYlnEdG1QSUHtdjkhaUpucTM2N9GXVpSQCLcBGAs/s1600/Edit+user+pelajar.jpg" height="350" width="500" /><br><p align="justify">
Edit User Jika admin akan merubah atau mengedit akun maka sistem akan mengarahkan ke tabel user yang terdapat button edit, hapus, dan simpan. Di situ Admin bisa mengedit user Pelajar, Tentor dan Orangtua/Wali. </p></td></tr></table>



<table border="1">
<tr align="center">
<td><b>Edit dan Tambah Data</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-NZERHtwflX0/Ws2NMymJEDI/AAAAAAAAEDc/0SzCyEffEGMRAQHc3N8cSgY8YVz6PMCnACLcBGAs/s1600/menu%2Bedit%2Bdan%2Btambah%2Bdata.jpg" height="350" width="500" /><br><p align="justify">
Edit dan Tambah Data Jika admin akan menambahkan atau mengedit data maka sistem akan mengarahkan ke fungsi masing-masing. Di situ Admin bisa mengedit atau menambah jadwal Bimbel, jadwal Try Out, Data Pelajar, Data Kelas, dan Data Tentor. halaman ini akan terhubung ke website user bagian data yg berada di menu bar. </p></td></tr></table>



<table border="1">
<tr align="center">
<td><b>Edit Informasi</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-bI0TBiJucbA/Ws2N73Qf9kI/AAAAAAAAEDo/1-Uokln6Zlc2aRahc-VxwGdptv5hdyA_gCLcBGAs/s1600/Edit+informasi.jpg" height="350" width="500" /><br><p align="justify">
Edit Informasi Jika admin akan menambahkan atau mengedit informasi yang berisi berita tentang Ganesha Operation tersebut. maka sistem akan mengarahkan ke halaman yang berisi berbagai macam berita, button edit, form untuk memasukan link, dan simpan. Di situ Admin bisa menambahkan informasi atau berita dengan memasukan link yang ada di form tersebut. secara otomatis berita tersebut akan ditampilkan di website user. </p></td></tr></table>



__Antarmuka Proses__

Proses Antarmuka Pengguna merupakan penjelasan proses dari tampilan grafis dan fungsi-fungsinya yang berhubungan langsung dengan pengguna (user).

__Proses Modul User__

<table border="1">
<tr align="center">
<td><b>Halaman Utama</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-7J38qDqgjZo/Ws2QqJWDG7I/AAAAAAAAED0/z7FFoKIWSUw7OYJSbaNywQB4fnXxACyUgCLcBGAs/s1600/home1.jpg" height="350" width="500" /><br><p align="justify">
Halaman Utama adalah halaman yang pertama kali dilihat oleh user ketika membuka wesite tersebut. di situ terdapat menu bar yang berisi Home, About, Data, dan Login. Kemudian dibawah menu bar terdapat slide image yang berisi dokumentasi kegiatan dari Ganesha Operation tersebut.
Di bawah slide image terdapat ikon kalender, fasilitas, dan syarat untuk membuat akun. dan Sistem Informasi mengenai Ganesha Operation terletan dibawah icon. </p></td></tr></table>


<table border="1">
<tr align="center">
<td><b>Kalender</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-jCmHdK0gmzQ/Ws2RkRrsWlI/AAAAAAAAED8/yXoT_6Z367sfi6Qqei98k0xDG62X44hhwCLcBGAs/s1600/kalender.jpg" height="350" width="500" /><br><p align="justify">
User dapat melihat kalender akademik melalui website tersebut </p></td></tr></table>


<table border="1">
<tr align="center">
<td><b>Fasilitas</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-wsKvbzqrzOc/Ws2SGdo6lLI/AAAAAAAAEEI/ObM0HHQ-2gIjLQeoahu8_9mmspDZzBWRgCLcBGAs/s1600/fasilitas.jpg" height="350" width="500" /><br><p align="justify">
User dapat melihat fasilitas yang ada di Ganesha Operation tersebut</p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Syarat Membuat Akun</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-nK9FWiR-Ev8/Ws2S38uwOXI/AAAAAAAAEEU/5xm6BoZCEj0PQUrv0XK0zNJWBSRvSLYAwCLcBGAs/s1600/Persyaratan+Add+User.jpg" height="350" width="500" /><br><p align="justify">
User Dapat melihat persyaratan untuk membuat akun </p></td></tr></table>


<table border="1">
<tr align="center">
<td><b>About</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-l9DvXHPe7HE/Ws2TY43qXvI/AAAAAAAAEEc/8oCfVqZQbCw4N6fdDNnLb_OXJdv9xfOPQCLcBGAs/s1600/About.jpg" height="350" width="500" /><br><p align="justify">
Halaman About adalah halaman tentang Ganesha Operation tersebut yang berisi Visi, Misi, Tujuan, Denah Lokasi dan kontak Ganesha Operation. </p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Data</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-9NhcZV0s1y4/Ws2T5vl-owI/AAAAAAAAEEg/d_J5SK9yid0JymlAB8o72grv5SofXOKPwCLcBGAs/s1600/MENUdata.jpg" height="350" width="500" /><br><p align="justify">
jika user memilih data pada menu bar, maka terdapat pilihan jadwal Bimbel untuk melihat jadwal bimbel seluruh kelas, jadwal Try Out untuk melihat jadwal Try Out seluruh kelas, Data Pelajar untuk melihat pelajar yg mengikuti les di Ganesha Operation tersebut, Data Kelas untuk melihat data kelas pada Ganesha Operation dan Data Tentor untuk melihat siapa sajayang mengajar di ganesha Operation tersebut. </p></td></tr></table>


<table border="1">
<tr align="center">
<td><b>Jadwal Bimbel</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-donQoekQpQU/Ws2UbMYuqsI/AAAAAAAAEEs/2KB3wmDk7Og1yaXD-smxbFQ7R6zx4d8IQCLcBGAs/s1600/Jadwal+Bimbel.jpg" height="350" width="500" /><br><p align="justify">
User dapat melihat jadwal bimbel yang berisi jadwal seluruh kelas, jadwal bimbel diinput dari admin tepatnya di edit dan tambah data->Jadwal Bimbel. </p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Jadwal Try Out</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-DTUhJiGGswg/Ws2a5OwddLI/AAAAAAAAEE8/q_BsTqbuJ8Qq_w4NkYrXjEEvrONiFNRfgCLcBGAs/s1600/Jadwal+TO.jpg" height="350" width="500" /><br><p align="justify">
User dapat melihat jadwal Try Out yang berisi jadwal Try Out seluruh kelas, jadwal Try Out diinput dari admin tepatnya di edit dan tambah data->Jadwal Try Out.</p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Data Pelajar</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-MH9isxbJ6Sg/Ws2cDgFA4EI/AAAAAAAAEFM/y1m2OfkwNhY9b1pkKH7gCY3EZrC7-EojACLcBGAs/s1600/Data+Pelajar.jpg" height="350" width="500" /><br><p align="justify">
User dapat melihat Data Pelajar yang berisi pelajar yang mengikuti les di Ganesha Operation tersebut yang didalamnya berisi nama, kelas dan umur. Data Pelajar diinput dari admin tepatnya di edit dan tambah data->Data Pelajar.</p></td></tr></table>


<table border="1">
<tr align="center">
<td><b>Data Kelas</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-i_UO9YWh-ZU/Ws2dRdB0UTI/AAAAAAAAEFs/cSzADLnSssEqduIgb_bZkeS7a7DBR8YXACLcBGAs/s1600/Data+Kelas.jpg" height="350" width="500" /><br><p align="justify">
User dapat melihat Data Kelas yang berisi nama kelas dan jumlah pelajar yang mengikuti les di Ganesha Operation. Data Kelas diinput dari admin tepatnya di edit dan tambah data->Data Kelas.</p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Data Tentor</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-tFIdp7U4_gE/Ws2eEkpudoI/AAAAAAAAEF4/VLrlLnT_vQop0xNY-tDi250r7waxzSM9gCLcBGAs/s1600/Data+Tentor.jpg" height="350" width="500" /><br><p align="justify">
User dapat melihat Data Tentor yang berisi nama tentor dan job title di Ganesha Operation. Data Tentor diinput dari admin tepatnya di edit dan tambah data->Data Tentor.</p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Login</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-YLvsBVR15FE/Ws2HYBpLLGI/AAAAAAAAECU/NT6qT9hi0c4En8YSJ7YBab5XVHFCo8HswCLcBGAs/s1600/MENUlogin.jpg" height="350" width="500" /><br><p align="justify">
jika user ingin mengakses ke dashbor maka harus Login terlebih dahulu. pada menu bar, maka terdapat pilihan Login sebagai pelajar, Orangtua/Wali dan Tentor. Di form login terdapat Forgot Password, coba captcha lain dan Register Id. </p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Forgot Password</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-m0R50aWr4e0/Ws2fM2KGvEI/AAAAAAAAEGE/GYwnUD8PRts3-j_vA7IzP9KPR5NrIyeFACEwYBhgL/s1600/forgot+password+part+1.jpg" height="350" width="500" /><br><br><img src="https://1.bp.blogspot.com/-UYY0QxLjOTI/Ws2gvuqMKeI/AAAAAAAAEGQ/6KPzmzVkXZE29ITnYl4KpzZkHNxeF-OtwCLcBGAs/s1600/after+forgot+password.jpg" height="350" width="500"/><br><br><img src="https://2.bp.blogspot.com/-0lDRxLgkOA4/Ws2hHaeh-1I/AAAAAAAAEGU/e2uC1vbQszM0TGBcuKQQ2LXqdLVNXE_MACLcBGAs/s1600/forgot+password+part+2.jpg"height="350" width="500"/><br><p align="justify">
jika user lupa password lalu memilih link Forgot Password maka sistem akan mengarahkan ke masukan email, kemudian si user mengecek kode verifikasi yang ada di kotak masuk email tersebut. user kembali ke halaman lalu masukan kode verifikasi ke dalam input text dan user dapat mengetikan kata sandi baru lalu simpan. kemudian sistem akan mengarahkan user ke halaman login.</p></td></tr>
<tr align="center">
<td><b>Coba Captcha Lain</b><br></td>
</tr>
<tr valign="top" align="center">
<td>
<p>jika user mengeklik link Coba Captcha lain maka kode Captcha yang ada di dalam kotak tersebut akan berbeda atau berubah.<br></p></td></tr>
<tr align="center">
<td><b>Login</b><br></td>
</tr>
<tr valign="top" align="center"><td><p>
Button Login untuk mengakses ke halaman Dashbor User.<br></p></td></tr></table>

<table border="1">
<tr align="center">
<td><b>Forgot Password</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-IlV1Fv6p5Us/Ws3sEMzLwiI/AAAAAAAAEGs/JIr3YXIodjMUAxfzCEJ8PuwaVMVyt6uOgCLcBGAs/s1600/Persyaratan+Add+User.jpg"height="350" width="500"/><br><p align="justify">
jika user mengeklik Button Register ID maka sistem akan mengarahkan user ke halaman persyaratan membuat akun, halaman ini juga terdapat pada home lalu ada icon add user. Di situ Persyaratan untuk membuat akun, bahwa user yang akan membuat akun harus menghubungi maintenance atau admin dan memberikan alamat emailnya untuk di daftarkan melalui admin. setelah admin selesai mendaftarkan akun, maka otomatis kata sandi Dashbor user akan dikirim ke email user masing-masing.</p></td></tr></table>
<table border="1">
<tr align="center">
<td><b>Dashbor Pelajar</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-IlV1Fv6p5Us/Ws3sEMzLwiI/AAAAAAAAEGs/JIr3YXIodjMUAxfzCEJ8PuwaVMVyt6uOgCLcBGAs/s1600/Persyaratan+Add+User.jpg"height="350" width="500"/><br><p align="justify">
Di Dashbor ini Pelajar dapat melihat jadwal bimbel yang ada di kelasnya, jadwal Try Out, Melihat hasil nilai Try Out, Melihat Kehadiran, dan melakukan bimbingan terhadap tentor<br></p></td></tr>


<tr align="center">
<td><b><li>Jadwal Bimbel dan Try Out</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-RLaawgbgi8g/Ws3u87gsqlI/AAAAAAAAEG4/IkRJtK0wfe4xxqKvXDSeq-M0E2fqAcMEACLcBGAs/s1600/Dashbor+Pelajar.jpg" height="350" width="500"/><br><p align="justify">
Pelajar dapat melihat jadwal Bimbel dan Try Out yang ada di kelasnya. Jadwal Bimbel dan Try Out Diinput langsung oleh admin</li>
</p></td></tr>

<tr align="center">
<td><b><li>Hasil Nilai</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-eih2haIFulA/Ws3y1W5wBTI/AAAAAAAAEHE/uR3f5j4Xf4s2P-y-cYgiC3G3QA7VxBlhwCLcBGAs/s1600/hasil+nilai.jpg" height="350" width="500"/><br><p align="justify">
Pelajar dapat melihat nilai hasil Try Out dimana saja dan kapan saja tanpa harus pergi ke tempat les atau bimbingan belajar tersebut. Hasil Nilai Di inputkan langsung oleh setiap tentor yang mengajar mata pelajaran tersebut.</li>
</p></td></tr>

<tr align="center">
<td><b><li>Kehadiran</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-VVyUhqFJcqU/Ws30zQx4ChI/AAAAAAAAEHQ/HbrPgkleik0ubZuW6Um_XgBBKZOvOonOgCLcBGAs/s1600/kehadiran.jpg" height="350" width="500"/><br><p align="justify">
Pelajar dapat melihat kehadiran mereka sendiri, Kehadiran Di input langsung oleh tentor yang mengajar mata pelajaran tersebut ketika sebelum memulai kegiatan belajar.</li>
</p></td></tr>


<tr align="center">
<td><b><li>Bimbingan</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-EQMIO6808rE/Ws31fGSpNiI/AAAAAAAAEHY/68SufLlDOGUiOD7PIrZsVMahZJCIPO05QCLcBGAs/s1600/bimbingan.jpg" height="350" width="500"/><br><p align="justify">
Pelajar dapat melakukan bimbingan lewat chat yang tersedia pada website tersebut dengan tentor</li>
</p></td></tr></table>


<table border="1">
<tr align="center">
<td><b>Dashbor Tentor</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-IlV1Fv6p5Us/Ws3sEMzLwiI/AAAAAAAAEGs/JIr3YXIodjMUAxfzCEJ8PuwaVMVyt6uOgCLcBGAs/s1600/Persyaratan+Add+User.jpg"height="350" width="500"/><br><p align="justify">
Di Dashbor ini Tentor dapat melihat jadwal mengajar, Rekap Nilai, Rekap kehadiran, dan membalas bimbingan terhadap Pelajar.<br>


<tr align="center">
<td><b><li>Jadwal Mengajar</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-3EzNNqJyZ1c/Ws33eXu6-iI/AAAAAAAAEHk/97QMThOavjMzIReKKVMKyQVlZGtrM2uqgCLcBGAs/s1600/jadwal+mengajar.jpg" height="350" width="500"/><br><p align="justify">
Tentor dapat melihat jadwal mengajarnya setiap saat, Jadwal Mengajar di input langsung oleh admin</li>
</p></td></tr>



<tr align="center">
<td><b><li>Rekap Nilai</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-H20KCm6bM9Y/Ws34C98sqcI/AAAAAAAAEHs/6gm3VbEWk60Vrfsgc6rS8Nw6F3yWs3kQACLcBGAs/s1600/Dashbor+Tentor+rekap+nilai.jpg" height="350" width="500"/><br><p align="justify">
Tentor dapat menginput hasil Try Out atau nilai pada setiap pelajar yang nantinya akan muncul di Hasil Nilai Dashbor Pelajar masing-masing.</li>
></p></td></tr>


<tr align="center">
<td><b><li>Kehadiran</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-VVyUhqFJcqU/Ws30zQx4ChI/AAAAAAAAEHQ/HbrPgkleik0ubZuW6Um_XgBBKZOvOonOgCLcBGAs/s1600/kehadiran.jpg" height="350" width="500"/><br><p align="justify">
Tentor dapat menginput kehadiran sebelum proses pembelajaran dimulai yang nantinya akan muncul di kehadiran Dashbor Pelajar masing-masing</li>
</p></td></tr>




<tr align="center">
<td><b><li>Bimbingan</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-iIRY8Dni3NI/Ws35NlJqbtI/AAAAAAAAEH4/YmcDqFHrJV051FC0yL1QBlF4q_2MuzDyQCEwYBhgL/s1600/Dashbor+Tentor++bimbingan.jpg" height="350" width="500"/><br><p align="justify">
Tentor dapat melakukan bimbingan dengan pelajar lewat chat yang tersedia di website tersebut. di dalam </li></p></td></tr>

<table border="1">
<tr align="center">
<td><b>Dashbor Orang Tua</b><br></td>
</tr>
<tr valign="top" align="center">
<td><br><p align="justify">
Di Dashbor ini Orangtua atau wali dapat memonitoring anaknya dengan melihat hasil nilai dan kehadiran anaknya pada saat les atau bimbingan belajar di Ganesha Operation.
</p></td></tr><br>


<tr align="center">
<td<b><li>Hasil Nilai</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-eih2haIFulA/Ws3y1W5wBTI/AAAAAAAAEHE/uR3f5j4Xf4s2P-y-cYgiC3G3QA7VxBlhwCLcBGAs/s1600/hasil%2Bnilai.jpg" height="350" width="500"/><br><p align="justify">
Orangtua atau wali dapat melihat keseluruhan nilai pelajar tersebut yang sudah di inputkan oleh masing-masin tentor setiap mata pelajarannya</li>
</p></td></tr><br>



<tr align="center">
<td><b><li>Kehadiran</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-VVyUhqFJcqU/Ws30zQx4ChI/AAAAAAAAEHQ/HbrPgkleik0ubZuW6Um_XgBBKZOvOonOgCLcBGAs/s1600/kehadiran.jpg" height="350" width="500"/><br><p align="justify">
Orangtua atau wali dapat melihat kehadiran anaknya dalam bentuk grafik dan keterangan yang sudah di inputkan oleh masing-masing tentor setiap mata pelajarannya</li>
</p></td></tr><br></table>

__Proses Modul Sistem__

<table border="1">
<tr align="center">
<td><b>Add User</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-Bva-KWdAguU/Ws2I_5j2J8I/AAAAAAAAECs/dHcZHX-i6D41Vw175LTmDDEs8V_sScD3gCLcBGAs/s320/menu+add+user.jpg"height="350" width="500"/><br><p align="justify">
admin dapat memilih add user di menu navigation yang ada di samping.</p></td></tr><br>
<tr>
<p align="justify">
Add User Jika admin akan menambah akun maka sistem akan mengarahkan ke form pendaftaran yang harus mengisi identitas user dan yang paling penting mengisi alamat email. Di situ Admin bisa menambahkan user Pelajar, Tentor dan Orangtua/Wali.</p></tr>



<tr align="center">
<td><b><li>Add Pelajar</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-keu8em7JTww/Ws38Zz2PirI/AAAAAAAAEIE/SgtqXqRFmKodPDTpz0-r7sKrD7IrR8L4QCLcBGAs/s1600/add+pelajar.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat membuat akun pelajar dengan mengisi form yang ada pada halaman berikut. pelajar wajib mengirimkan atau memberi tau alamat email ke admin untuk mengetahui password dashbor yang sudah Admin buat untuk pelajar tersebut.</li>
</p></td></tr>



<tr align="center">
<b>
<td><b><li>Add Tentor</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-A-7h3Xd4-BQ/Ws39JDzCfoI/AAAAAAAAEIQ/sw1g0rXx-echnb7G6HLz3ggcu6L2HuZfgCLcBGAs/s1600/add+tentor.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat membuat akun Tentor dengan mengisi form yang ada pada halaman berikut. Tentor wajib memberitau alamat email kepada Admin untuk mengetahui password dashbor yang sudah Admin buat untuk Tentor tersebut</li>
</p></td></tr>



<tr align="center">
<td><b><li>Add Orangtua/Wali</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-imycasfU7Tg/Ws39qKv1RhI/AAAAAAAAEIY/A9l66dXs2-c5sC61BoNdG8D-qV8HCp43wCLcBGAs/s1600/add+ortu.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat membuat akun Oranngtua/Wali dengan mengisi form yang ada pada halaman berikut. Orangtua/Wali wajib memberitau alamat email kepada admin untuk mengetahui password dashbor yang sudah Admin buat untuk Orangtua/Wali tersebut</li></p></td></tr></table>


<table border="1">
<tr align="center">
<td><b>Edit User</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-UpRX6-SpA0M/Ws3-jjFEtaI/AAAAAAAAEIk/Pyj03JKdj3oMbURGqxSTrz6BtoH7jpjlACLcBGAs/s1600/edit+user.jpg"height="350" width="500"/><br><p align="justify">
admin dapat memilih edit user di menu navigation yang ada di samping.<br>
Edit User Jika admin akan merubah atau mengedit akun maka sistem akan mengarahkan ke tabel user yang terdapat button edit, hapus, dan simpan. Di situ Admin bisa mengedit user Pelajar, Tentor dan Orangtua/Wali. </p></td></tr>



<tr align="center">
<td><b><li>Edit Pelajar</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-YKDT7s_7frA/Ws3_UjdqUqI/AAAAAAAAEIw/Hn_Z6dtAjYoDazmDeHVHQp-0QU1n1ZXjACLcBGAs/s1600/edit+pelajar.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat merubah atau mengedit informasi yang berisi Kelas, Nama, umur dan tandai untuk menandai user. ada juga button edit, hapus dan simpan</li>
</p></td></tr>




<tr align="center">
<td><b><li>Edit Tentor</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-jKWIvfakCpY/Ws3_0mCfyBI/AAAAAAAAEI0/M2GQFT0DO5QGOw0NscBBIhfQ0dl6hJ24ACLcBGAs/s1600/edit+tentor.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat merubah atau mengedit informasi yang berisi Nama, Nik, Umur dan tandai untuk menandai user. ada juga button edit, hapus, dan simpan</li>
</p></td></tr>


<tr align="center">
<td><b><li>Edit Orang Tua/wali</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/--rarM2JNCRM/Ws4AfJ_ppDI/AAAAAAAAEJA/8cduye5pUpcFs0vlH-kl_ZiAkx1bjPhRACLcBGAs/s1600/edit+ortu+atau+wali.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat merubah atau mengedit informasi yang berisi Nama, Umur dan Tandai untuk menandai user. ada juga button edit, hapus, dan simpan</li>
</p></td></tr></table>



<table border="1">
<tr align="center">
<td><b>Edit dan Tambah Data</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://4.bp.blogspot.com/-RYCdiKRSU5k/Ws4BI-pBgaI/AAAAAAAAEJI/gg6m7Er6qfgFfiKzwjXiP8kkQdFbAtuGACLcBGAs/s1600/edit%2Bdan%2Btambah%2Bdata.jpg"height="350" width="500"/><br><p align="justify">
Edit dan Tambah Data Jika admin akan menambahkan atau mengedit data maka sistem akan mengarahkan ke fungsi masing-masing. Di situ Admin bisa mengedit atau menambah jadwal Bimbel, jadwal Try Out, Data Pelajar, Data Kelas, dan Data Tentor. halaman ini akan terhubung ke website user bagian data yg berada di menu bar.<br></p></td></tr>



<tr align="center">
<td><b><li>Jadwal Bimbel</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-NTEc9-ssaVQ/Ws4BrGxwk8I/AAAAAAAAEJQ/1Qi7i5aOACU8TE04nln62KKKdXE2ZdnkACLcBGAs/s1600/jadwal+bimbel.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat mengedit dan menambah jadwal bimbel seluruh kelas yang nantinya akan ditampilkan ke website user data. terdapat button tambah, edit dan simpan</li>
<br></p></td></tr>




<tr align="center">
<td><b><li>Jadwal Try Out</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://3.bp.blogspot.com/-AtVuq6gYDD4/Ws4CWnxfYJI/AAAAAAAAEJY/uWevYrf3NHE-Q_3FItiQcnwWP7GP9A41wCLcBGAs/s1600/jadwal+try+out.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat mengedit dan menambah jadwal Try Out seluruh kelas yang nantinya akan ditampilkan ke website user data. terdapat button tambah, edit dan simpan</li>
<br></p></td></tr>



<tr align="center">
<td><b><li>Data Pelajar</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-Lm_iBpGg5Pg/Ws4DLUuOalI/AAAAAAAAEJk/9egQ1ZliZOEZN4XBl4sb55-IKUVXFWRPgCLcBGAs/s1600/data+pelajar.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat menginput dan mengedit Data Pelajar yang berisi kelas, nama, umur dan terdapat button tambah, edit dan simpan.  Data pelajar akan ditampilkan ke website user->Data->Data Pelajar</li>
</ul><br></p></td></tr>



<tr align="center">
<td><b><li>Data Kelas</b></td><br>
</tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-P0ogO-LtZXc/Ws4D1MyIBGI/AAAAAAAAEJs/7AWDmeQUSCM8B4gwpmmA6EuLyOT31UBBwCLcBGAs/s1600/data+kelas.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat menginput dan mengedit Data Kelas yang berisi kelas dan jumlah pelajar. Data kelas akan ditampilkan ke website user->Data->Data Kelas.juga terdapat button tambah, edit dan simpan</li>
<br></p></td></tr>




<tr align="center">
<td><b><li>Data Tentor</td></b><br></tr>
<tr valign="top" align="center">
<td><img src="https://1.bp.blogspot.com/-qilsfOrLxis/Ws4ETHoXroI/AAAAAAAAEJw/437NTEMvHi8gswF6TUXT5mj0ATlBT_FjgCLcBGAs/s1600/data+tentor.jpg" height="350" width="500"/><br><p align="justify">
Admin dapat menginput dan mengedit Data Tentor yang berisi nama, jobtitle dan terdapat button tambah, edit dan simpan. Data Tentor akan ditampilkan ke website user->Data->Data Tentor</li>
<br></p></td></tr>
</table>

<table border="1">
<tr align="center">
<td><b>Edit Informasi</b><br></td>
</tr>
<tr valign="top" align="center">
<td><img src="https://2.bp.blogspot.com/-mAbHllud24g/Ws4E-aD0JNI/AAAAAAAAEKA/MP3XKvIQ3_wyif5zeg3IJ6VMjcDIRMnJwCLcBGAs/s1600/edit+informasi.jpg"height="350" width="500"/><br><p align="justify">
Edit Informasi Jika admin akan menambahkan atau mengedit informasi yang berisi berita tentang Ganesha Operation tersebut. maka sistem akan mengarahkan ke halaman yang berisi berbagai macam berita, button edit, form untuk memasukan link, dan simpan. Di situ Admin bisa menambahkan informasi atau berita dengan memasukan link yang ada di form tersebut. secara otomatis berita tersebut akan ditampilkan di website user.<br></p></td></tr></table>


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

|--|--| | Nama fungsi |Login | |Ref|Bag 2.2, Login | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Login untuk Pelajar, Pengajar, Orang tua dan Admin| |Basic Path|1. Users sudah terdaftar dan jika sudah terdaftar maka bisa langsung menggunakan aplikasi yang menampilkan Dashboard sebagai halaman utamanya 
2. Sistem menampilkan halaman login user yang terdiri dari kolom username, kolom password dan kolom captcha. 
3. Users memasukkan username, password, dan captcha. 
4. Sistem menampilkan halaman utama. | |Alternative|Tidak Ada| |Post Condition|User dapat melihat Halaman utama web dan dapat mengakses fungsi lainnya | |Exception Push	|1. Tidak ada Koneksi 
2. user belum mendaftar|

**3.2.2 Laporan Nilai dan Absensi**

|--|--| | Nama fungsi |Laporan Nilai dan Absensi | |Ref|Bag 2.2, Laporan Nilai dan Absensi| |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan Data Laporan dan Nilai| |Basic Path|1. Users Login ke dalam Sistem 
2. Users Melihat Laporan Nilai dan Absensi 
3.Sistem menampilkan Laporan Nilai dan Absensi| |Alternative|Tidak Ada| |Post Condition|Users dapat Melihat Laporan Nilai dan Absensi | |Exception Push	|1. Tidak ada Koneksi |

**3.2.3 Data Mata Pelajaran**

|--|--| | Nama fungsi |Data Mata Pelajaran | |Ref|Bag 2.2, Data Mata Pelajaran | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan Data Mata Pelajaran | |Basic Path|1. Users Login ke dalam Sistem 
2. User Melihat Data Mata Pelajaran 
3.Sistem menampilkan Data Mata Pelajaran| |Alternative|Tidak Ada| |Post Condition|Users dapat Melihat Data Mata Pelajaran | |Exception Push	|1. Tidak ada Koneksi |

**3.2.4 CRUD Nilai dan Absensi**

|--|--| | Nama fungsi |CRUD Nilai dan Absensi | |Ref|Bag 2.2, CRUD Nilai dan Absensi | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan CRUD Nilai dan Absensi | |Basic Path|1. Admin Login ke dalam Sistem 
2. Admin CRUD Nilai dan Absensi 
3.Sistem menampilkan nilai dan absensi| |Alternative|Tidak Ada| |Post Condition|User dapat Melihat Laporan Nilai dan Absensi dan Admin dapat mengCRUD Data Nilai dan Absensi| |Exception Push |1. Tidak ada Koneksi |

**3.2.5 Data Kelas**

|--|--| | Nama fungsi |Data Kelas | |Ref|Bag 2.2, Data Kelas | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan Data Kelas | |Basic Path|1. Users Login ke dalam Sistem 
2. Users Melihat Data Kelas 
3.Sistem menampilkan Data Kelas| |Alternative|Tidak Ada| |Post Condition|Users dapat Melihat Laporan Data Kelas | |Exception Push	|1. Tidak ada Koneksi |

**3.2.6 Jadwal Try Out**

|--|--| | Nama fungsi |Jadwal Try Out | |Ref|Bag 2.2, Jadwal Try Out | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan Jadwal Try Out | |Basic Path|1. Users Login ke dalam Sistem 
2. Users Melihat Jadwal Try Out 
3.Sistem menampilkan Jadwal Try Out| |Alternative|Tidak Ada| |Post Condition|Users dapat Melihat Jadwal Try Out | |Exception Push	|1. Tidak ada Koneksi |

**3.2.7 Data Jadwal Mata Pelajaran**

|--|--| | Nama fungsi |Data Jadwal Mata Pelajaran | |Ref|Bag 2.2, Data Jadwal Mata Pelajaran | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan Data Jadwal Mata Pelajaran | |Basic Path|1. Users Login ke dalam Sistem 
2. Users Melihat Data Jadwal Mata Pelajaran 
3.Sistem menampilkan Data Jadwal Mata Pelajaran| |Alternative|Tidak Ada| |Post Condition|Users dapat Melihat Data Jadwal Mata Pelajaran | |Exception Push	|1. Tidak ada Koneksi |
3.2.8 Data Bimbingan
|--|--| | Nama fungsi |Bimbingan | |Ref|Bag 2.2, Bimbingan | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan Data Bimbingan| |Basic Path|1. Users Login ke dalam Sistem 
2. Users Melakukan Bimbingan 
3.Sistem menampilkan Data Bimbingan| |Alternative|Tidak Ada| |Post Condition|Users dapat Melakukan Bimbingan Dan Melihat Data Bimbingan| |Exception Push	|1. Tidak ada Koneksi |

**3.2.9 CRUD Data Pelajaran**

|--|--| | Nama fungsi |CRUD Data Pengajar | |Ref|Bag 2.2, CRUD Data Pengajar | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan CRUD Data Pengajar| |Basic Path|1. Admin Login ke dalam Sistem 
2. Admin Melakukan CRUD Data Pengajar 
3.Sistem menampilkan CRUD Data Pengajar| |Alternative|Tidak Ada| |Post Condition|Admin dapat Melakukan CRUD Data Pengajar dan Melihat Data Pengajar| |Exception Push	|1. Tidak ada Koneksi |

**3.2.10 CRUD Data Pelajar**

|--|--| | Nama fungsi |CRUD Data Pelajar | |Ref|Bag 2.2, CRUD Data Pelajar | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan CRUD Data Pelajar| |Basic Path|1. Admin Login ke dalam Sistem 
2. Admin Melakukan CRUD Data Pelajar 
3.Sistem menampilkan CRUD Data Pelajar| |Alternative|Tidak Ada| |Post Condition|Admin dapat Melakukan CRUD Data Pelajar dan Melihat Data Pelajaran| |Exception Push	|1. Tidak ada Koneksi |

**3.2.11 CRUD Data Jadwal Try Out**

|--|--| | Nama fungsi |CRUD Data Jadwal Try Out | |Ref|Bag 2.2, CRUD Data Jadwal Try Out | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan CRUD Data Jadwal Try Out| |Basic Path|1. Admin Login ke dalam Sistem 
2. Admin Melakukan CRUD Data Jadwal Try Out 
3.Sistem menampilkan CRUD Data Jadwal Try Out| |Alternative|Tidak Ada| |Post Condition|Admin dapat Melakukan CRUD Data Jadwal Try Out dan Melihat Data Jadwal Try Out| |Exception Push	|1. Tidak ada Koneksi |

**3.2.12 Laporan Nilai Dan Absensi**

|--|--| | Nama fungsi |Laporan Nilai Dan Absensi | |Ref|Bag 2.2, Laporan Nilai Dan Absensi | |Trigger|Membuka web aplikasi SIMBEL, sudah terdaftar| |Precondition|Menampilkan Laporan Nilai Dan Absensi| |Basic Path|1. User Login ke dalam Sistem 
2.Admin Melakukan Data Laporan Nilai Dan Absensi
3.Sistem menampilkan Data Laporan Nilai Dan Absensi| |Alternative|Tidak Ada| |Post Condition|Admin dapat Melakukan Data Laporan Nilai Dan Absensi dan Melihat Data Laporan dan Absensi| |Exception Push	|1. Tidak ada Koneksi |

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

