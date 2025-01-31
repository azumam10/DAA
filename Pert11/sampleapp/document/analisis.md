ANALISIS TUGAS PERT 11
Tujuan analisis :
Melatih skil analisis terhadap projek yang sudah di tentukan
 Latar Belakang :
Aplikasi ini bertujuan untuk mempermudah proses mengorganisasi produk berdasarkan nama, harga, dan kategori. Sistem akan memanfaatkan tipe data yang sesuai untuk memastikan integritas data dan kemudahan pengelolaan..
 Lingkup proyek
•	Pembuatan dua jenis role: Admin dan bos
-	Admin bisa melihat, merubah, dan menghapus data.
-	Bos hanya bisa memantau produk yang dimiliki oleh perusahaan
•	Pembuatan fitur untuk menambahkan nama produk,harga,dan kategori
-	Nama produk menggunakan tipe data string, untuk memudahkan memasukan nama produk yang memiliki campuran angka dan kata,
-	Harga menggunakan tipe data integer, untuk memudahkan pengisian angka dan menjumlahkan harga masing masing barang
-	Kategori menggunakan tipe data enum, untuk memudahkan pengkategorian produk diantaranya ada kategori (baju,celana,sepatu)
•	Teknologi yang Digunakan:
-	Laravel untuk backend, yang membantu mengelola logika aplikasi dan database.
-	Database (MySQL) untuk menyimpan data produk.
-	Filament digunakan untuk membuat tampilan admin yang mudah digunakan untuk mengelola produk.
•	Enum untuk Kategori:
-	Keuntungan: Dengan enum, Anda memastikan hanya nilai yang valid yang bisa dimasukkan, misalnya kategori produk hanya bisa sepatu, baju, atau celana.
-	Keterbatasan: Jika Anda ingin menambah kategori baru, Anda perlu memperbarui kode dan menjalankan migrasi lagi.
•	Proses Pembuatan dan Pembaruan Produk:
-	Form Input Produk: memasukkan produk melalui form yang sudah disediakan.
-	Validasi Data: Pastikan data yang dimasukkan sesuai dengan aturan, misalnya harga harus angka, kategori harus salah satu dari yang sudah ditentukan.
-	Menyimpan Produk: Data produk yang sudah valid kemudian disimpan ke database.

