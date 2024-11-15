<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data fakultas yang ingin dimasukkan ke dalam tabel
        $fakultas = [
            [
                'Nama' => 'Abiyan Zaki, S.Kom, M.T.',
                'Fakultas' => 'Ilmu Komputer',
            ],
            [
                'Nama' => 'John Doe, M.Kom.',
                'Fakultas' => 'Teknik Informatika',
            ],
            // Tambahkan data lainnya jika diperlukan
        ];

        // Loop untuk menyimpan data ke dalam tabel 'fakultas'
        foreach ($fakultas as $dataclass) {
            Fakultas::firstOrCreate([
                'Nama' => $dataclass['Nama'],
                'Fakultas' => $dataclass['Fakultas'],
            ]);
        }
    }
}
