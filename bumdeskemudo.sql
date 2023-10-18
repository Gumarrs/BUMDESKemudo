-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2022 pada 11.54
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bumdeskemudo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `achive`
--

CREATE TABLE `achive` (
  `id` varchar(12) NOT NULL,
  `achive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `achive`
--

INSERT INTO `achive` (`id`, `achive`) VALUES
('1', 'Penghargaan Desa Brilian Tahun 2021'),
('2', 'Penghargaan Dari Bupati Klaten 2019'),
('3', 'Juara 3 Desa Brilian 2021'),
('4', 'Penghargaan Oleh Kementrian Investasi 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` varchar(50) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul_artikel`, `deskripsi`, `tanggal`, `image`) VALUES
('1', 'Program Kegiatan BRI Menanam bersama Ibu Hj. Sri Mulyani S.M. Bupati Klaten di Balai Desa Kemudo', 'Pada tanggal 4 Oktober 2022 Ibu Bupati Hj. Sri Mulyani S.M. menghadiri kegiatan Bank Rakyat Indonesia (BRI) menanam untuk mendukung implementasi lingkungan di desa Kemudo, Kecamatan Prambanan, Kabupaten Klaten. Dalam sambutannya beliau menyampaikan betapa pentingnya meningkatkan kesadaran lingkungan baik melalui pendidikan formal maupun nonformal. Salah satunya adalah dengan mengajarkan dan membiasakan generasi muda untuk bertanggung jawab akan lingkungan. Hal ini bertujuan untuk menjaga keseimbangan ekosistem lingkungan, dan juga program ini juga mendorong tata Kelola baru yang bernilai ekonomis dan ekologis. Oleh karena itu, Bank BRI berupaya untuk hadir di tengah masyarakat, tidak hanya di dunia bisnis, tetapi juga secara sosial, dan budaya untuk mencapai Kerjasama yang harmonis.              Dengan Program Aksi tanam BRI merupakan upaya dalam membantu implementasi ESG (lingkungan, social dan pemerintahan ) dengan menanam tanaman yang produktif dapat mengurangi emiso karbon dan dapat meningkatkan nilai ekonomi masyarakat. Bentuk Kerjasama ini merupakan bentuk dukungan dari BRI untuk lebih mendukung pengembangan ekonomi pedesaan sesuai dengan kearifan lokal masyarakat desa. Bank BRI sebagai bank dengan nasabah kredit mikro terbesar di Indonesia sangat fokus memberikan kemudahan akses kepada masyrakat mikro. ', '2022-12-30', '63ae686e1bdb5.jpg'),
('2', 'Pembagian deviden BUMDes Kemudo Makmur kepada masyarakat secara simbolis', 'Jakarta, CNN Indonesia -- Desa Kemudo menjadi salah satu dari 15 pemenang utama Desa BRILian 2021 Batch 2. Desa yang berada di Prambanan, Klaten, Jawa Tengah ini memiliki inovasi yang dinilai positif untuk masyarakat. \"Kita bisa jadi pemenang, dalam penilaian Desa BRILian, tidak hanya apa yang jadi keunggulan. Tapi bagaimana me-manage desa itu menjadi desa yang kreatif dan inovatif dan meningkatkan ekonomi masyarakat desa,\" kata Kepala Desa Kemudo Hermawan Kristanto dalam keterangan tertulis.  Desa Kemudo bekerja sama dengan salah satu industri untuk mengelola dan mengolah limbah kering yang dihasilkan industri tersebut seperti plastik, kertas, karton dan kayu palet. Dari pengolahan ini limbah industri dapat diminimalisasi.   Hermawan menjelaskan inovasi pengolahan limbah kayu menjadi produk mebel ini sudah dilakukan sejak 2016 lalu. Desa Kemudo mengolah limbah industri padat menjadi produk-produk ekonomi kreatif.  Melalui dukungan Badan Usaha Milik Desa (BUMDes), pengembangan industri ekonomi kreatif dilakukan oleh warga dengan mengolah limbah kayu palet untuk dijadikan produk mebel yang layak jual.', '2022-12-29', '63ae69934882e.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(12) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `jenkel_dosen` varchar(10) NOT NULL,
  `alamat_dosen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama_dosen`, `jenkel_dosen`, `alamat_dosen`) VALUES
('100001', 'Heri Hermawan', 'Pria', 'Entah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `kota_kelahiran` varchar(30) NOT NULL,
  `tanggal_kelahiran` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `program_studi` varchar(20) NOT NULL,
  `tahun_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `kota_kelahiran`, `tanggal_kelahiran`, `alamat`, `program_studi`, `tahun_masuk`) VALUES
('1911010001', 'Heri Hermawan', 'Pria', 'Entah', '1990-01-01', 'Entah', 'Teknik Informatika', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matkul` varchar(12) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matkul`, `nama_matkul`, `sks`) VALUES
('111', 'Pemrograman Web Dasar', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id` varchar(12) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id`, `misi`) VALUES
('1', 'Pengoptimalan Aset dan Sumber Daya Alam di Desa Kemudo dalam Rangka Mencapai Kesejahteraan Kolektif'),
('4', 'Membangun Budaya Organisasi BUMDesa Sesuai Nilai Profesionalisme dan Nilai Sosial'),
('5', 'Memperluas Jaringan Kemitraan Usaha dan Non-Usaha'),
('6', 'Mendorong Sektor Pertanian Berkembang Menjadi Argoindustri Desa Kemudo'),
('7', 'Harmonisasi Hubungan dengan Sektor Industri di Desa Kemudo'),
('8', 'Jejepangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `kode_matkul` varchar(12) NOT NULL,
  `semester` int(2) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nim`, `kode_matkul`, `semester`, `nilai`) VALUES
(5, '1911010001', '111', 3, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `name`, `email`, `subjek`, `pesan`) VALUES
(1, 'Anggik Rindi Antika', 'anggikarararara@gmail.com', 'Saran', 'Terus semangat !!'),
(2, 'Agus Minerva', 'Agusmarsadu@gmail.com', 'Saran', 'Jangan Menyerah'),
(4, 'agus minerva', 'babijojo85@gmail.com', 'Saran', 'Kamu'),
(5, 'Naruto', 'Hallo@gmail.com', 'Saran', 'Jadilah Hokage'),
(16, 'Anggik', 'Rindi@gmail.com', 'Hallo', 'Semoga semkain sukses\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id`, `nama`, `jabatan`, `image`) VALUES
('1', 'Hermawan K. Sos', 'PENASEHAT', '63adb2a46785f.png'),
('2', 'H. Yulianto', 'KETUA PENGAWAS', '63adb2bb5577f.png'),
('3', 'Harsono, S.Pd', 'PENGAWAS', '63adb50c9f8f7.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha`
--

CREATE TABLE `usaha` (
  `id` int(12) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usaha`
--

INSERT INTO `usaha` (`id`, `nama_usaha`, `deskripsi`, `image`) VALUES
(1, 'WOOD PALLET', 'BUMDesa kemudo makmur juga menjual komoditas unggul berupa palet kayu jati belanda. Jenis kayu tersebut memiliki karakteristik dan corak yang unik sehingga cocok untuk bidang kerajinan, selain itu juga terdapat beberapa variasi ukuran yang tersedia di BUMDesa Kemudo Makmur.', '63ada9f55b9d7.jpg'),
(2, 'AFVAL INDUSTRI', 'Lini usaha afval industri merujuk pada usaha perdagangan dan pengelolaan limbah kering perusahaan. Komoditas limbah kering berupa kertas, karton, plastik, folding box, alumunium foil dan glondong diperoleh melalui skema kerja sama dengan PT. Sarihusada Generasi Mahardhika (SGM). Pengelolaan limbah kering oleh BUM Desa turut melibatkan masyarakat sebagai mitra dagang.', '63adaa05d2671.jpg'),
(3, 'KAMAJAYA MART', 'Kamajaya Mart hadir untuk melakukan kegiatan pelayanan umum melalui pemenuhan kebutuhan umum masyarakat. Dengan mengusung konsep one stop services ragam kebutuhan masyarakat dapat terpenuhi dalam satu lokasi. Kamajaya Mart juga merupakan ruang representasi bagi produk unggulan Desa Kemudo. Menggandeng sektor UMKM di Desa Kemudo, Kamajaya Mart menghadirkan produk - produk berupa olahan makanan dan kreasi batik Ciprat. Batik Ciprat kian bermakna karena dihasilkan melalui kegiatan pemberdayaan untuk kaum disabilitas.', '63adb037b3dcc.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` varchar(12) NOT NULL,
  `visi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `visi`) VALUES
('Visi1', 'Sinergis Dalam Mewujudkan Gerakan Pembagunan Kemudo Maju Jaya Sejahtera');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `achive`
--
ALTER TABLE `achive`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
