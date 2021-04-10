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
            'user_id' => 2,
            'kategori_id' => 1,
            'jenis_id' => 1,
            'dinas_id' => 13,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Struktur Organisasi BAKESBANGPOL',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi struktur organisasi bakesbangpol',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
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

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 2,
            'jenis_id' => 1,
            'dinas_id' => 27,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Program kegiatan Kecamatan Mayangan',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi info info',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 1,
            'jenis_id' => 2,
            'dinas_id' => 23,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Program dan Kegiatan Kominfo',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi info info',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 1,
            'jenis_id' => 4,
            'dinas_id' => 2,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'LKPD',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'Berisi tentang Laporan Keuangan Pemerintah Kota Probolinggo',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 2,
            'jenis_id' => 4,
            'dinas_id' => 9,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'RKA-PPKD',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'Berisi tentang informasi Rencana Kerja Anggaran Pejabat Pengeola Keuangan',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 3,
            'jenis_id' => 5,
            'dinas_id' => 1,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Laporan Akses Informasi Kota Probolinggo',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'Berisi tentang laporan akses informasi di Kota Probolinggo',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 2,
            'jenis_id' => 9,
            'dinas_id' => 4,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Peraturan Perundang-Undangan',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'Berisi tentang informasi Peraturan Perundang-Undangan',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 1,
            'jenis_id' => 8,
            'dinas_id' => 10,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Laporan Hasil Penelitian',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi hasil penelitian',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 2,
            'jenis_id' => 3,
            'dinas_id' => 18,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Laporan Kinerja Dishub',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi laporan kinerja dishub',
            'file' => 'laporan.docx',                        
        ]);

        \App\Dokumen::create([
            'user_id' => 2,
            'kategori_id' => 3,
            'jenis_id' => 7,
            'dinas_id' => 8,
            'status_dokumen_id' => 2,
            'tipe_id' => 1,
            'judul' => 'Laporan ULP (Unit Layanan Pengadaan Barang/Jasa Pemerintah) untuk Pengadaan Barang',
            'keterangan' => 'ini keterangan',
            'kandunganInfo' => 'berisi laporan ULP',
            'file' => 'laporan.docx',                        
        ]);
    }
}
