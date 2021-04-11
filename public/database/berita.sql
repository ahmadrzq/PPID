-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2021 pada 13.05
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `author`, `isi`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Aminah Hadi Berharap PC Muslimat Bisa Berkolaborasi dengan TP PKK', 'PPID Kota Probolinggo', '<p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><strong style=\"box-sizing: inherit; font-weight: bold;\">WONOASIH</strong>&nbsp;– Pengurus Cabang (PC) Muslimat Nahdlatul Ulama (NU) Kota Probolinggo menggelar kegiatan Haul Akbar dan Peringatan Hari Lahir Muslimat NU ke 75 Tahun 2021, Senin (29/3), di lingkungan Ponpes An Nur Sumber Taman. Peringatan tersebut dihadiri Ketua Tim Penggerak PKK Kota Probolinggo Aminah Hadi Zainal Abidin.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">“Milad barokah, PC Muslimat NU ke 75. Semoga ke depan tambah kompak, serta bisa berkolaborasi dengan berbagai elemen termasuk juga PKK Kota Probolinggo,” kata Aminah Hadi, istri Wali Kota Habib Hadi Zainal Abidin.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Ketua PC Muslimat NU Kota Probolinggo Siti Aminah, dalam laporannya menyampaikan serangkaian kegiatan PC Muslimat NU Kota Probolinggo yang telah dilakukan. Diantaranya giat baksos bencana banjir Kabupaten Probolinggo, beberapa waktu lalu.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Selanjutnya, dilanjutkan dengan giat road show Ziarah Mu’asis NU se-Kota Probolinggo ke Sumber Taman, Jrebeng Lor, Kanigaran dan Kademangan. Lalu, pemantapan Aswaja Ahlussunnah Waljama’ah An Nadiyah.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">“Dan hari ini merupakan puncak dari harlah (hari lahir, red) ke 75.&nbsp;<em style=\"box-sizing: inherit;\">Alhamdulillah</em>&nbsp;kami bangga giat kami kali ini dihadiri langsung oleh Ibu Wali Kota sekaligus Ketua TP PKK Kota Probolinggo Ibu Aminah Habib Hadi Zainal Abidin,” serunya yang disambut tepuk tangan meriah hadirin.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Puncak giat siang itu juga dihadiri oleh Pimpinan DPRD Abdul Mudjib, Sekretaris PCNU Moh. Ilyas Rolis dan segenap pengurus PC Muslimat ranting se-Kota Probolinggo.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Sementara itu, Ketua PCNU melalui Sekretaris PCNU Moh. Ilyas Rolis mengatakan, berbagai kegiatan PCNU dalam hal ini bekerjasama dengan muslimat yang telah dilakukan secara swadaya. Termasuk keberadaan klinik PCNU yang sudah mulai beroperasi 2 bulan terakhir.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">“Klinik PCNU yang ada di Jalan Mastrip tak hanya melayani khitan, namun juga bisa dimanfaatkan oleh masyarakat yang akan melakukan KB (Keluarga Berencana, red), atau kebutuhan pengobatan lainnya. Semoga di harlah ke 75 ini, keberadaan PCNU terus bermanfaat dan mampu bersinergi dengan antar lembaga, seperti internal muslimat PCNU itu sendiri, dewan, banom dan terlebih dengan Pemkot Probolinggo,” katanya.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Pada kesempatan itu, juga diisi tausiyah dari Pengasuh Ponpes Zainul Islah Kanigaran Hj. Hakimah, yang membahas tentang sikap dan euforia menyambut Bulan Suci Ramadhan 1442 H.&nbsp;<strong style=\"box-sizing: inherit; font-weight: bold;\"><em style=\"box-sizing: inherit;\">(Sonea)</em></strong></p>', 'public/uploads/berita/1618049894WhatsApp-Image-2021-03-29-at-13.22.15-360x240.jpeg', '2021-04-10 10:18:14', '2021-04-10 10:18:14'),
(8, 'Beri Kemudahan Akses Permodalan dan Pemasaran, DKUPP Undang Pelaku UMKM', 'PPID Kota Probolinggo', '<p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><strong style=\"box-sizing: inherit; font-weight: bold;\">KANIGARAN</strong>&nbsp;– Perwakilan pelaku usaha di Kota Probolinggo menghadiri acara Fasilitasi Penguatan Akses Pembiayaan/Permodalan dan Kurasi Produk UMKM, Senin (29/3). Acara yang diselenggarakan oleh DKUPP tersebut menghadirkan BRI dan PT Indomarco Prismatama sebagai pembicara.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">“Acara ini diselenggarakan oleh kami (DKUPP) untuk memberikan pemahaman dan informasi tentang akses permodalan usaha melalui KUR bersama BRI. Selain itu juga untuk mengoptimalkan penyerapan dana KUR sehingga tepat sasaran, meningkatkan kapasitas daya saing pelaku usaha mikro melalui kurasi produk UMKM dan membuka akses pasar yang lebih luas dan mendorong memasuki pasar retail modern di outlet Indomaret,” jelas Moh Sulhan, Kepala Bidang Pemberdayaan Usaha Mikro dalam laporannya.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Dalam Permenko no 6 tahun 2020 tentang perlakuan khusus bagi penerima KUR yang terdampak Covid-19, pemerintah telah menyiapkan program KUR yaitu kebijakan pembiayan modal kerja berupa kredit bagi pelaku usaha untuk pengembangan usaha. Tujuan KUR sendiri untuk meningkatkan dan memperluas akses pembiayaan kepada usaha produktif, meningkatkan kapasitas daya saing usaha mikro, dan mendorong pertumbuhan ekonomi dan penyerapan tenaga kerja.</p><div><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">“Ini merupakan program dari pemerintah, jadi kami juga harus mensosialisasikan program ini kepada pelaku usaha. Apalagi yang terkena dampak&nbsp; Covid-19, penjualan menurun dan pergerakan terbatas jadi kami adakan acara ini untuk penguatan kembali UMKM,” kata Kepala DKUPP Fitriawati.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Berkaitan dengan kurasi produk UMKM yang menggandeng PT Indomarco Prismatama, DKUPP berharap salah satu jaringan minimarket terbesar di Indonesia ini dapat memberikan kesempatan pada pelaku UMKM memasarkan produk unggulan dalam pasar retail modern.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">“Saya harap produk-produk asli Kota Probolinggo terdapat di seluruh gerai Indomaret dan bisa lolos kurasi, karena ini akan menjadi peluang usaha yang lebih luas. Untuk dapat memenuhi kriteria pasar retail modern UMKM harus memiliki 3K yaitu Kualitas, Kuantitas, dan Kontinue. Untuk kualitas, produk UMKM Kota Probolinggo tidak perlu diragukan lagi. Tetapi untuk kuantitas dan kontinue ini perlu ada pembinaan lebih lanjut,” tambah Fitriawati.<strong style=\"box-sizing: inherit; font-weight: bold;\"><em style=\"box-sizing: inherit;\">&nbsp;(sita)</em></strong></p></div>', 'public/uploads/berita/1618049950WhatsApp-Image-2021-03-29-at-14.00.48-360x240.jpeg', '2021-04-10 10:19:10', '2021-04-10 10:19:10'),
(9, 'Pertanyaan Fraksi Jadi Masukan Positif Bagi Pemkot', 'PPID Kota Probolinggo', '<p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><strong style=\"box-sizing: inherit; font-weight: bold;\">ANIGARAN</strong>&nbsp;– Sabtu (3/4), Wali Kota Probolinggo Habib Hadi Zainal Abidin, mengikuti jalannya Rapat Paripurna DPRD setempat dengan acara Penyampaian jawaban DPRD terhadap pendapat wali kota atas 3 Rancangan Peraturan Daerah (Raperda) Inisiatif DPRD dan penyampaian kepala daerah terhadap pemandangan umum fraksi-fraksi tentang 4 Raperda Kota Probolinggo tahun 2021.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Penyampaian jawaban DPRD Kota Probolinggo terhadap pendapat Wali Kota Probolinggo atas 3 Rancangan Peraturan Daerah (Raperda) Inisiatif DRD Kota Probolinggo disampaikan oleh Wakil Ketua Komisi II dari Fraksi Demokrat Heru Istiadi, dihadapan 25 orang anggota dewan yang hadir di ruang sidang utama kantor DPRD.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Sementara itu, menanggapi jawaban pemandangan umum fraksi-fraksi, Wali Kota Habib Hadi Zainal Abidin menyampaikan bahwa, hal ini merupakan masukan yang positif dalam rangka penyempurnaan raperda yang diusulkan dalam kualitas penyelenggaraan pemerintah.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">“Kami sampaikan terima kasih dan penghargaan setinggi-tingginya atas pertanyaan dari masing-masing fraksi tersebut. Tentunya (hal itu) jadi masukan yang positif,” katanya.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Nah, dari penyampaian Wali Kota Habib Hadi tersebut, secara tekhnis akan menjadi acuan bagi pansus &nbsp;dalam membahas 7 Raperda Kota Probolinggo tahun 2021. Agenda pokok rapat paripurna dewan kali ini merupakan kelanjutan dari tahapan pembahasan, setelah mendengarkan tanggapan dan pertanyaan serta permintaan atau penjelasan fraksi-fraksi dalam pemandangan umumnya dan pendapat Wali Kota Probolinggo yang telah disampaikan sebelumnya.</p><p style=\"text-align: justify; box-sizing: inherit; color: rgb(102, 102, 102); line-height: 1.5; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Giat yang berlangsung sejak pagi hari itu menurut Ketua DPRD Kota Probolinggo Abdul Mujib, diharapkan bisa memberikan tambahan informasi serta kejelasan yang lebih komprehensif dan signifikan dalam rangka mendukung kelancaran dan obyektifitas pembahasan raperda dimaksud.&nbsp;<strong style=\"box-sizing: inherit; font-weight: bold;\"><em style=\"box-sizing: inherit;\">(Sonea).</em></strong></p>', 'public/uploads/berita/16180500291617440152_197ed0a8b2571a85a54e-360x240.jpeg', '2021-04-10 10:20:29', '2021-04-10 10:20:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
