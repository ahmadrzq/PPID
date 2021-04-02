<?php

use Illuminate\Database\Seeder;

class DokumenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Dokumen::create([
            'kategori_id' => 1,
            'jenis_id' => 3,
            'dinas_id' => 2,
            'status_dokumen_id' => 1,
            'tipe_id' => 1,
            'judul' => 'Laporan Pegawai',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi info info',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'kategori_id' => 2,
            'jenis_id' => 2,
            'dinas_id' => 1,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Laporan Uang',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi info info',
            'file' => 'laporan.docx',                        
        ]);
    }
}
