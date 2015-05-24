-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Mei 2015 pada 10.51
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `kartu menuju sehat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE IF NOT EXISTS `balita` (
  `ID Balita` varchar(10) NOT NULL,
  `ID Petugas` varchar(3) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Tanggal Lahir` date NOT NULL,
  `Jenis Kelamin` varchar(100) NOT NULL,
  PRIMARY KEY (`ID Balita`),
  KEY `ID Petugas` (`ID Petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `balita`
--

INSERT INTO `balita` (`ID Balita`, `ID Petugas`, `Nama`, `Tanggal Lahir`, `Jenis Kelamin`) VALUES
('B01', 'P01', 'Mardiana Sekarsari', '2015-04-01', 'Perempuan'),
('B02', 'P02', 'Adian Latifa', '2014-06-02', 'Laki-laki'),
('B03', 'P03', 'Yuna Sugianela', '2014-11-02', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `ID FAQ` varchar(3) NOT NULL,
  `ID Petugas` varchar(3) DEFAULT NULL,
  `Pertanyaan` varchar(1024) NOT NULL,
  `Jawaban` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID FAQ`),
  KEY `ID Petugas` (`ID Petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`ID FAQ`, `ID Petugas`, `Pertanyaan`, `Jawaban`) VALUES
('F01', 'P02', 'Bayi saya sudah 2 hari ini tidak mau minum susu, dia berumur 6 bulan, saya hanya memberinya air putih, saya khawatir, apa yang terjadi dengan bayi saya?', 'Ada beberapa kemungkinan: kurang sehat, kesakitan, tersumbat hidungnya, sariawan, sedang tumbuh gigi, mengantuk, bingung puting, tidak mampu mengambil cukup ASI untuk memenuhi kebutuhannya, posisinya tidak menyenangkan bagi si bayi, terganggu isapanya, dibatasi jawdal isapannya, terganggu semburan ASI, merasa terganggu oleh perubahan. Cobalah dicek alasan alasan tersebut, mana yang paling sesuai dengan kondisi ibu dan anaknya. Tetapi yang jelas, teruslah berusaha, dan berikan ketenangan pada ibunya, karena ibu yang gelisah juga akan mempengaruhi bayinya, mungkin baik juga mengajaknya si anak bermain-main dulu.\r\n'),
('F02', 'P01', 'Kenapa Bayi saya sering menangis dan tak kunjung berhenti?', 'Bayi Anda sering menangis? Mungkin ia mengalami fase baby milestones. Saat fase ini bayi akan memiliki kemampuan berkomunikasi, berbahasa, sosial, dan memiliki kemampuan motorik. Namun sayangnya, banyak bayi yang ketika mengalami fase ini menangis tanpa henti. Penelitian dari Kanada menunjukkan bahwa pada lima bulan pertama, bayi baru lahir akan mengalami periode di mana bayi akan terus menangis selama dua jam. Dalam sehari, bayi akan menangis sebanyak lima jam. Hal ini tidak tentu, karena beberapa bayi mungkin tipe yang diam, beberapa lagi diantaranya, dan beberapa sering menangis berjam-jam, ujar Ronald Barr, M.D., professor dari University of British Columbia di Vancouver (bayi dalam periode ini akan memiliki kolik). Fase di mana bayi mengalami hal itu dinamakan "the period of PURPLE crying” oleh Dr. Barr. Dengan memberikannya nama “PURPLE”, Dr. Barr berharap orangtua akan memahami bahwa tangisan bayi yang terus-menerus bukan kesalahan Anda semata-mata. Bicaralah dengan dokter untuk mengurangi penyebab med'),
('F03', 'P03', 'Saya ibu muda, saya ingin tahu jenis-jenis penyakit kulit pada bayi serta penanganannya harus bagaimana? Terima Kasih', 'Jenis penyakit kulit dan pengobatannya untuk bayi juga berbeda beda tergantung apa jenis penyakit kulit yang menyerang bayi. Jika terkena biang keringat sebaiknya bayi diberi pakaian yang longgar sehingga ruam pada bayi akan berangsur-angsur kurang. Penyebab biang keringat adalah udara yang terlalu panas ataupun lembab. Berbeda lagi jika bayi anda terkena intertigo. Cara mengobati intertigo pada bayi dengan menggunakan krim penghalang zinc oxide atau petroluemm jelly pada bayi. Caranya dengan membasuh lipatan kulit bayi dan memberinya krim tersebut. Sedang kan untuk eksim dan demartitis sebaiknya berkonsultasi pada dokter. Pasalnya bayi membutuhkan antibiotik untuk mengobati penyakit kulitnya. Untuk seborrhea anda bisa menggunakan baby oil untuk dioleskan pada bagian yang terkena. Penyakit kulit tak hanya menyerang orang dewasa. Bayi malah sangat rentan terkena penyakit kulit pasalnya struktur sel masih lemah dan ikatan sel yang belum solid. Sehingga jika terlihat gejala gejala kulit kemerahan dan menimbulkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal imunisasi`
--

CREATE TABLE IF NOT EXISTS `jadwal imunisasi` (
  `ID jadwal` varchar(3) NOT NULL,
  `ID petugas` varchar(3) NOT NULL,
  `Tanggal` date NOT NULL,
  `Memo` varchar(1024) NOT NULL,
  `Tipe` varchar(700) NOT NULL,
  PRIMARY KEY (`ID jadwal`),
  KEY `ID petugas` (`ID petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal imunisasi`
--

INSERT INTO `jadwal imunisasi` (`ID jadwal`, `ID petugas`, `Tanggal`, `Memo`, `Tipe`) VALUES
('J01', 'P01', '2015-06-16', 'Imunisasi Campak I', 'Wajib'),
('J02', 'P02', '2015-07-31', 'Imunisasi Campak II', 'Wajib (Bagi yang belum imunisasi campak I)'),
('J03', 'P03', '2015-05-30', 'Imunisasi Polio', 'Wajib'),
('J04', 'P01', '2015-05-31', 'Imunisasi Polio', 'Wajib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkembangan balita`
--

CREATE TABLE IF NOT EXISTS `perkembangan balita` (
  `ID Balita` varchar(10) NOT NULL,
  `Berat Badan` int(11) NOT NULL,
  `Tinggi/Panjang` int(11) NOT NULL,
  `Catatan` varchar(1024) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `ID Balita` (`ID Balita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perkembangan balita`
--

INSERT INTO `perkembangan balita` (`ID Balita`, `Berat Badan`, `Tinggi/Panjang`, `Catatan`, `Timestamp`) VALUES
('B01', 3, 70, 'Naik 0.5 Kg dari bulan lalu', '2015-05-24 06:06:46'),
('B02', 6, 50, 'Berat badan ideal', '2015-05-24 06:08:05'),
('B03', 11, 100, 'Cukup Kurus', '2015-05-24 06:08:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `ID Petugas` varchar(3) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `No Telp` varchar(20) DEFAULT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID Petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`ID Petugas`, `Nama`, `No Telp`, `Password`) VALUES
('P01', 'Kharisma Nur Annisa', '0821219293', '5113100026'),
('P02', 'Fandy Ahmad', '08219887212', '5112100047'),
('P03', 'Djuned Fernando Djusdek', '08291721921', '5112100071');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
  `ID Saran` varchar(3) NOT NULL,
  `ID Petugas` varchar(3) NOT NULL,
  `Saran` varchar(1024) NOT NULL,
  PRIMARY KEY (`ID Saran`),
  KEY `ID Petugas` (`ID Petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`ID Saran`, `ID Petugas`, `Saran`) VALUES
('S01', 'P01', 'Pastikan bayi Anda telah mendapatkan Imunisasi Wajib'),
('S02', 'P02', 'Saat imunisasi pastikan kondisi bayi Anda dalam keadaan sehat'),
('S03', 'P03', 'Beri makanan yang biasa dimakan oleh keluarga 3 kali sehari yang terdiri dari nasi, lauk pauk, sayur dan buah. Beri makanan selingan 2 kali sehari diantara waktu makan seperti bubur kacang hijau, biskuit, nagasari. Jangan berikan makanan yang manis dan lengket diantara waktu makan'),
('S04', 'P01', 'Beri Asi setiap kali bayi menginginkan. Tambahkan telur/ayam/ikan/tempe/tahu/daging sapi/wortel/bayam/kacang hijau/santan/minyak pada bubur nasi. Beri bubur nasi 3 kali sehari. Setiap kali makan diberikan sesuai umur:\r\n6 bulan : 6 sendok makan, 7 bulan : 7 sendok makan, 8 bulan : 8 sendok makan, 9 bulan : 9 sendok makan, 10 bulan : 10 sendok makan, 11 bulan : 11 sendok makan. Beri makanan selingan 2 kali sehari diantaranya waktu makan seperti bubur kacang hijau, pisang, biskuit, nagasari dan sebagainya.Beri buah-buahan atau sari buah'),
('S05', 'P02', 'Beri Asi setiap kali bayi menginginkan sedikitnya 8 kali sehari, pagi, maupun malam\r\nJangan berikan makanan atau minuman lain selain ASI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
