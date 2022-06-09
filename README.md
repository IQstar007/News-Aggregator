<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## News-Aggregator
Projek akhir / Tugas Akhir dari Mata Kuliah Pemrograman Integratif

<h2> Tahap Awal Penginstalan Laravel </h2>
  <p> - Sebelum melakukan instalasi Laravel pada Windows, pastikan sudah menginstall beberapa aplikasi pendukung proses instalasi Laravel, yaitu:<br>
	*Aplikasi XAMPP (instalasi PHP sudah ter include disini)<br>
   *Composer 
  </p>
 <p> - Selanjutnya masuk ke command prompt (cara mudah klik Win+R, ketik kata "cmd") </p> 
  <p> - Kemudian arahkan Command Prompt atau terminal menuju direktori file server. Lokasi file server pada XAMPP secara default berada pada direktori xampp/htdocs. akan         tetapi pada kasus saya direktori xampp saya berada di D:\Programs\xampp\htdocs. Masukan perintah berikut ini pada jendela Command Prompt untuk masuk ke direktori         htdocs :<br>
	pertama tuliskan <code>d:</code> kemudian tuliskan <code>cd D:\Programs\xampp\htdocs</code> <= untuk kasus saya (harap sesuaikan folder xampp anda)</p> 
 <p> - Setelah direktori sudah berganti, langkah berikutnya Gunakan perintah berikut ini untuk melakukan request install laravel:<br>
	 <code>composer create-project laravel/laravel:^8.0 example-app nama_projectmu</code> <= angka 8 menunjukkan akan menginstall laravel versi 8 </p> 
  <p> - Jika sudah selesai install, kemudian cek apakah folder untuk projek laravel yang barusan dibuat apakah sudah ada (lihat pada direktori penginstalan). </p> 
<p> - Jika file/folder sudah ada, kemudian pada cmd/terminal kita coba <i>run</i> laravelnya dengan cara tulis <code>php artisan serve</code></p> 
<p> - Jika muncul tulisan Laravel development server started pada Command Prompt atau Terminal, langkah selanjutnya adalah membuka link yang telah disediakan oleh Laravel. Secara default alamat server,yaitu 127.0.0.1:8000. copy alamat / address tersebut dan buka pada browser favorit anda. <br> Maka instalasi Laravel telah selesai dan siap digunakan..</p><hr>
