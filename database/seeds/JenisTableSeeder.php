<?php

use Illuminate\Database\Seeder;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Jenis::create([
            'nama' => "Profil Badan Publik"
        ]);

        \App\Jenis::create([
            'nama' => "Program dan Kegiatan"
        ]);

        \App\Jenis::create([
            'nama' => "Informasi Kinerja"
        ]);

        \App\Jenis::create([
            'nama' => "Laporan Keuangan"
        ]);

        \App\Jenis::create([
            'nama' => "Laporan dan prosedur akses informasi"
        ]);

        \App\Jenis::create([
            'nama' => "Pengaduan dan Pelanggaran"
        ]);

        \App\Jenis::create([
            'nama' => "Pengadaan barang dan jasa"
        ]);

        \App\Jenis::create([
            'nama' => "Informasi Darurat"
        ]);

        \App\Jenis::create([
            'nama' => "Hasil Penelitian"
        ]);

        \App\Jenis::create([
            'nama' => "Regulasi"
        ]);
    }
}
