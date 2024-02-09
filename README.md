<h2 class="code-line" data-line-start=0 data-line-end=1 ><a id="Installation_0"></a>Installation</h2>
<p class="has-line-data" data-line-start="2" data-line-end="3">Ikuti langkah berikut ini untuk instalasi project test :</p>
<pre><code class="has-line-data" data-line-start="5" data-line-end="15" class="language-sh"> Git <span class="hljs-built_in">clone</span> [Dhimas46](https://github.com/Dhimas46/sprint_2.git) 
 <span class="hljs-built_in">cd</span> sprint_2
 composer install
 cp .env.example .env 
 php artisan key:generate
 php artisan db:seed (database sama dengan sprint_1)
 jalankan project menggunakan perintah : php artisan serve
 buka url http://<span class="hljs-number">127.0</span>.<span class="hljs-number">0.1</span>:<span class="hljs-number">8000</span>/
 jalankan API menggunakan dokumentasi yang telah disediakan atau dapat menggunakan postman
</code></pre>
<h2 class="code-line" data-line-start=15 data-line-end=16 ><a id="Akun_15"></a>Akun</h2>
<p class="has-line-data" data-line-start="16" data-line-end="18">Email : <a href="mailto:admin@gmail.com">admin@gmail.com</a><br>
Password : password</p>
<h2 class="code-line" data-line-start=19 data-line-end=20 ><a id="Konfigurasi_19"></a>Konfigurasi</h2>
<p class="has-line-data" data-line-start="20" data-line-end="29">Berikut adalah tampilan awal / dokumentasi API yang telah saya buat :<br>
<img src="https://github.com/Dhimas46/Sprint_2/assets/44389333/083f7791-9cf5-47b7-a3d1-b58f521c42d7" alt="dokumentasi"><br>
Untuk merubah konfigurasi metode swap dapat dilakukan pada file config/services.php. Terdapar 2 konfigurasi yakni : database dan rajaongkir<br>
<img src="https://github.com/Dhimas46/Sprint_2/assets/44389333/472b63f3-d16c-4154-8865-ecd2c73d30f2" alt="konfigurasi"><br>
Untuk dapat mengakses URL GET kita perlu melakukan authorization terlebih dahulu yaitu pergi ke dokumentasi auth login. Ketika kita berhasil login maka kita akan mendapatkan token seperti gambar dibawah :<br>
<img src="https://github.com/Dhimas46/Sprint_2/assets/44389333/9b75777b-23c0-4e10-b83d-9ba31f29c16e" alt="GET Token Pengguna"><br>
Setelah mendapatkan token kita dapat Authorize token tersebut pada button Authorize kemudian masukkan token yang telah didapatkan kemudian authorize maka selanjutnya kita dapat menggunakan API GET<br>
<img src="https://github.com/Dhimas46/Sprint_2/assets/44389333/c03e8d0f-10b5-46aa-9918-5f653b0967a1" alt="Authorization"><br>
Jika terdapat masalah atau data konfigurasi tidak berubah dapat menjalankan command artisan : php artisan optimize</p>
<h2 class="code-line" data-line-start=30 data-line-end=31 ><a id="URL_30"></a>URL</h2>
<p class="has-line-data" data-line-start="32" data-line-end="33">Akses url</p>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>METHOD</th>
<th>URL</th>
</tr>
</thead>
<tbody>
<tr>
<td>POST</td>
<td>[<a href="http://127.0.0.1:8000/api/auth/login">http://127.0.0.1:8000/api/auth/login</a>][POST data pengguna]</td>
</tr>
<tr>
<td>GET</td>
<td>[<a href="http://127.0.0.1:8000/api/search/provinces?id=%7Bprovince_id%7D">http://127.0.0.1:8000/api/search/provinces?id={province_id}</a>][GET Province By id]</td>
</tr>
<tr>
<td>GET</td>
<td>[<a href="http://127.0.0.1:8000/api/search/provinces">http://127.0.0.1:8000/api/search/provinces</a>][GET Province]</td>
</tr>
<tr>
<td>GET</td>
<td>[<a href="http://127.0.0.1:8000/api/search/cities?city_id=%7Bcity_id%7D">http://127.0.0.1:8000/api/search/cities?city_id={city_id}</a>][GET Cities By id]</td>
</tr>
<tr>
<td>GET</td>
<td>[<a href="http://127.0.0.1:8000/api/search/cities?province_id=%7Bprovince_id%7D">http://127.0.0.1:8000/api/search/cities?province_id={province_id}</a>][GET Cities By Province id]</td>
</tr>
</tbody>
</table>