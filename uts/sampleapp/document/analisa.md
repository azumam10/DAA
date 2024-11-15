1. Analisis Kebutuhan Fungsional
Kebutuhan fungsional adalah fitur-fitur yang harus ada dalam sistem untuk memenuhi tujuan aplikasi. Berikut adalah analisis fungsional berdasarkan use case yang telah dibahas:

Mahasiswa Mendaftar ke Fakultas

Input: Nama, email, dan fakultas yang ingin didaftar.
Proses: Mahasiswa memilih fakultas yang tersedia, mengisi data pribadi, lalu mengirimkan formulir pendaftaran.
Output: Data pendaftaran mahasiswa disimpan ke dalam database, dan mahasiswa mendapatkan notifikasi keberhasilan pendaftaran.
Dosen Melihat Data Fakultas

Input: Akun dosen yang telah terdaftar.
Proses: Dosen login ke sistem dan hanya diberikan akses baca untuk melihat daftar fakultas yang ada.
Output: Menampilkan daftar fakultas dengan informasi terkait yang bisa dilihat oleh dosen.
Admin Mengelola Fakultas dan Pengguna

Input: Data fakultas baru atau data pengguna yang perlu dikelola (diubah atau dihapus).
Proses: Admin dapat menambah, mengedit, atau menghapus data fakultas. Admin juga bisa mengelola role dan user dalam sistem.
Output: Data fakultas yang telah diperbarui atau ditambahkan, perubahan pada hak akses pengguna.
2. Analisis Kebutuhan Non-Fungsional
Kebutuhan non-fungsional adalah faktor yang mendukung keberhasilan sistem namun tidak langsung terkait dengan fungsionalitas utama. Berikut adalah analisis kebutuhan non-fungsional untuk aplikasi ini:

Keamanan

Autentikasi: Menggunakan Laravel Breeze untuk login pengguna. Aplikasi harus memiliki sistem autentikasi yang aman untuk mencegah akses yang tidak sah.
Authorization: Menggunakan Spatie Laravel Permission untuk memastikan pengguna hanya dapat mengakses fitur sesuai dengan peran mereka (role-based access control).
Kinerja

Responsivitas: Aplikasi harus memiliki waktu respons yang cepat, terutama saat mengambil data fakultas atau ketika mahasiswa melakukan pendaftaran.
Scalability: Meskipun aplikasi ini mungkin dimulai dengan jumlah pengguna yang kecil, harus dipertimbangkan kemampuannya untuk berkembang seiring bertambahnya jumlah mahasiswa dan fakultas.
Usability

User Interface (UI): Aplikasi harus memiliki antarmuka pengguna yang intuitif dan ramah pengguna, memudahkan mahasiswa untuk mendaftar dan dosen untuk melihat data fakultas.
Mobile Compatibility: Meskipun ini adalah aplikasi berbasis web, antarmuka harus responsif dan dapat diakses dengan baik di perangkat mobile.
Pemeliharaan

Aplikasi harus dirancang dengan kode yang mudah untuk dipelihara dan diperbarui, dengan dokumentasi yang jelas untuk pengembang dan pengguna.
3. Analisis Pemangku Kepentingan
Pemangku kepentingan adalah individu atau kelompok yang akan terlibat langsung atau tidak langsung dalam penggunaan atau pengelolaan aplikasi ini. Berikut adalah analisis pemangku kepentingan untuk aplikasi:

Mahasiswa

Peran: Mahasiswa adalah pengguna utama aplikasi yang akan mendaftar ke fakultas. Mereka akan menggunakan aplikasi untuk memilih fakultas dan mengisi data diri.
Kebutuhan: Akses mudah untuk melihat daftar fakultas, mengisi data pribadi dengan cepat, dan mendapatkan konfirmasi pendaftaran.
Dosen

Peran: Dosen hanya dapat melihat data fakultas yang sudah terdaftar.
Kebutuhan: Tampilan data fakultas yang jelas, akses yang terbatas hanya untuk melihat informasi.
Admin

Peran: Admin memiliki hak akses penuh untuk mengelola data fakultas, pengguna, dan role dalam sistem.
Kebutuhan: Antarmuka untuk mengelola data fakultas, pengguna, dan pengaturan hak akses secara efisien.
Pengembang

Peran: Tim pengembang yang akan mengembangkan dan memelihara aplikasi.
Kebutuhan: Kode aplikasi yang terstruktur dengan baik, dokumentasi teknis yang jelas, dan alat pengembangan yang mudah digunakan.
4. Analisis Alur Proses
Berikut adalah alur proses untuk aplikasi ini:

Login dan Pengelolaan Akses

Pengguna melakukan login sesuai dengan perannya (mahasiswa, dosen, admin).
Sistem memeriksa kredensial dan hak akses pengguna berdasarkan peran yang ditetapkan (role-based access control).
Pendaftaran Mahasiswa

Mahasiswa melihat daftar fakultas yang tersedia dan memilih fakultas yang diinginkan.
Mahasiswa mengisi form pendaftaran dengan nama, email, dan fakultas yang dipilih.
Setelah mengirimkan formulir, data mahasiswa disimpan dalam database dan notifikasi pendaftaran berhasil diberikan.
Melihat Data Fakultas oleh Dosen

Dosen yang sudah login dapat melihat daftar fakultas yang terdaftar di sistem.
Dosen tidak dapat mengubah data, hanya dapat membaca data fakultas yang ada.
Pengelolaan Fakultas oleh Admin

Admin dapat mengelola data fakultas, baik dengan menambah, mengedit, atau menghapus data fakultas.
Admin juga dapat mengelola pengguna, mengubah role pengguna, atau menghapus pengguna jika diperlukan.
5. Analisis Risiko
Beberapa risiko yang perlu diperhatikan selama pengembangan aplikasi ini adalah:

Kesalahan Pengguna: Pengguna yang tidak familiar dengan sistem bisa mengalami kesulitan saat mendaftar atau melihat data fakultas.
Kesalahan Sistem: Bug atau kesalahan dalam pengelolaan data fakultas atau pendaftaran mahasiswa.
Keamanan Data: Data pribadi mahasiswa dan fakultas harus dijaga dengan baik, terutama dalam hal autentikasi dan penyimpanan data.
6. Keberlanjutan dan Pembaruan
Setelah aplikasi selesai, pemeliharaan harus dilakukan untuk memastikan bahwa aplikasi tetap berjalan dengan lancar, serta melakukan pembaruan ketika dibutuhkan (misalnya, penambahan fakultas baru, perubahan aturan pendaftaran, dll).