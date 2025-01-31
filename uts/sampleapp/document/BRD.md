1. Executive Summary
Tujuan Proyek: Aplikasi ini bertujuan untuk memungkinkan mahasiswa mendaftar ke fakultas yang sudah ada,
dan memungkinkan dosen untuk melihat data fakultas yang ada.
Sasaran:
Mahasiswa dapat memilih fakultas dan mendaftar.
Dosen dapat melihat daftar fakultas dan data terkait.
2. Scope of Work
Lingkup Proyek:
Pembuatan aplikasi berbasis web dengan framework Laravel.
Pembuatan dua jenis role: Mahasiswa dan Dosen.
Pembuatan fitur untuk mendaftar ke fakultas oleh mahasiswa.
Pembuatan tampilan untuk dosen yang hanya dapat melihat data fakultas.
3. Functional Requirements
Mahasiswa:
Mahasiswa dapat melihat daftar fakultas yang ada.
Mahasiswa dapat memilih fakultas untuk mendaftar.
Mahasiswa dapat mendaftar menggunakan nama dan email.
Dosen:
Dosen dapat melihat daftar fakultas yang ada di sistem.
Dosen hanya memiliki akses baca terhadap data fakultas.
Admin:
Admin dapat menambah, mengedit, dan menghapus data fakultas.
Admin dapat menambah, mengedit, dan menghapus user dan role.
4. Non-Functional Requirements
Keamanan:
Autentikasi menggunakan Laravel Breeze untuk login dan pendaftaran pengguna.
Scalability:
Aplikasi harus mampu menangani 1000+ pengguna dalam waktu yang bersamaan.
Usability:
Tampilan antarmuka harus ramah pengguna dan mudah digunakan.
5. Acceptance Criteria
Mahasiswa dapat mendaftar ke fakultas dengan memasukkan data yang diperlukan.
Dosen hanya dapat melihat data fakultas yang ada tanpa bisa mengubahnya.
Admin dapat melakukan CRUD terhadap data fakultas.
6. Constraints
Proyek ini akan berjalan pada sistem berbasis web menggunakan Laravel.
Fitur login menggunakan autentikasi Laravel yang mendukung peran (role) menggunakan Spatie Laravel Permission.

