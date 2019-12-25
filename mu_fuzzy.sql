-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2017 at 10:59 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mu_fuzzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE IF NOT EXISTS `analisa` (
  `no_ktp` varchar(25) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(25) NOT NULL DEFAULT '',
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `harapan` varchar(100) NOT NULL,
  `pelayana` varchar(100) NOT NULL,
  `kepuasan` varchar(100) NOT NULL,
  PRIMARY KEY (`no_ktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa`
--

INSERT INTO `analisa` (`no_ktp`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `harapan`, `pelayana`, `kepuasan`) VALUES
('10130120060589', 'Willy Fernando', '1988-12-20', 'Laki-laki', 'Wiraswasta', 'sangat baik', 'tercapai', 'memuaskan'),
('12564353323768', 'Laura Hikmah Izzatin Niss', '1998-02-12', 'Perempuan', 'Pelajar', 'cukup baik', 'tidak tercapai', 'tidak memuaskan'),
('00130120060589', 'Robby Prihandaya', '1989-05-06', 'Laki-laki', 'Freelance', 'sangat baik', 'tercapai', 'memuaskan'),
('10130120060534', 'Tommy Utama', '1985-08-18', 'Laki-laki', 'Swasta', 'tidak baik', 'tidak tercapai', 'tidak memuaskan'),
('31123291829329', 'Sarjana Komedi', '1981-10-13', 'Laki-laki', 'Download Source Code', 'cukup baik', 'tidak tercapai', 'tidak memuaskan');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_berita` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=119 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `hari`, `tanggal`, `jam`, `dibaca`) VALUES
(105, 'Serge yang dilihat dulu penampilannya di piala Gubernur Jawa Timur', 'Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tp&nbsp;pengen nulis &amp; cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,&nbsp;setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di.<br />\r\n	Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tp&nbsp;pengen nulis &amp; cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,&nbsp;setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di\r\n', 'Sabtu', '2012-05-19', '11:09:14', 24),
(102, 'Dont forget to share our great website to your friend', 'Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tp&nbsp;pengen nulis &amp; cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,&nbsp;setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di.<br />\r\n	\r\n	Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tp&nbsp;pengen nulis &amp; cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,&nbsp;setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di\r\n', 'Jumat', '2011-12-16', '03:00:48', 12),
(106, 'family throught social media and forum, it will help us to grow', 'Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tp&nbsp;pengen nulis &amp; cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,&nbsp;setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di.<br />\r\n	\r\n	Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tp&nbsp;pengen nulis &amp; cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,&nbsp;setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di\r\n', 'Sabtu', '2012-05-19', '17:45:17', 10),
(107, 'Fixed Nation Streetwear available at www.fixednation.com', 'Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tpÂ pengen nulis & cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,Â setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di.<br />\r\n	\r\n	Gw masih bisa bernafas sampai malam ini, mudah2an bsok juga masih bisa bangun dari tdor. sebenarnya udah ngantuk tpÂ pengen nulis & cerita dulu di blog. tadi siang skitar jam 2 an waktu gw maen komp tiba-tiba terjadi gempa yang krasa cukup lama,Â setelah lihat berita dan browsing ternyta berpusat di aceh dengan kekuatan 8.9 SR yang terjadi berulang kali. mungkin klo untk di padang, gempa bumi bukan hal yang luar biasa lagi, soalnya disini (padang) emang kota gempa yang sering bergoyang dan padang juga termasuk kota yang sangat berpotensi/rawan terjadi gempa di antara kota-kota di\r\n', 'Sabtu', '2012-05-19', '17:46:59', 70),
(118, 'salah satu dari enam klub kontestan kompetisi Indonesia Super League', 'Persijap Jepara adalah salah satu dari enam klub kontestan kompetisi Indonesia Super League (ISL) musim 2014 yang dinyatakan persatuan Sepak Bola Seluruh Indonesia (PSSI) masih memiliki catatan utang. Persijap Jepara adalah salah satu dari enam klub kontestan kompetisi Indonesia Super League (ISL) musim 2014 yang dinyatakan persatuan Sepak Bola Seluruh Indonesia (PSSI) masih memiliki catatan utang. Persijap Jepara adalah salah satu dari enam klub kontestan kompetisi Indonesia Super League (ISL) musim 2014 yang dinyatakan persatuan Sepak Bola Seluruh Indonesia (PSSI) masih memiliki catatan utang.\r\n\r\nPersijap Jepara adalah salah satu dari enam klub kontestan kompetisi Indonesia Super League (ISL) musim 2014 yang dinyatakan persatuan Sepak Bola Seluruh Indonesia (PSSI) masih memiliki catatan utang.Persijap Jepara adalah salah satu dari enam klub kontestan kompetisi Indonesia Super League (ISL) musim 2014 yang dinyatakan persatuan Sepak Bola Seluruh Indonesia (PSSI) masih memiliki catatan utang.Persijap Jepara adalah salah satu dari enam klub kontestan kompetisi Indonesia Super League (ISL) musim 2014 yang dinyatakan persatuan Sepak Bola Seluruh Indonesia (PSSI) masih memiliki catatan utang.', 'Selasa', '2013-12-24', '02:15:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `direktur`
--

CREATE TABLE IF NOT EXISTS `direktur` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `direktur`
--

INSERT INTO `direktur` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `alamat_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Direktur Rumah Sakit', 'admin.sejahtera@gmail', '081363166640', 'direktur', '');

-- --------------------------------------------------------

--
-- Table structure for table `harapan`
--

CREATE TABLE IF NOT EXISTS `harapan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `harapan`
--

INSERT INTO `harapan` (`id`, `pertanyaan`) VALUES
(1, 'Pelayan memberi pelayanan yang cepat dan akurat.'),
(2, 'Karyawan selalu baik dalam berkomunikasi dengan wajib pajak.'),
(3, 'Karyawan mampu meyakinkan dan dapat dipercaya oleh wajib pajak'),
(4, 'Karyawan cepat dan tangkap dalam menerima complen wajib pajak'),
(5, 'Etika keramahan semua karyawan terhadap wajib pajak'),
(6, 'Procedure pemberian informasi pelayanan terhadapwajib pajak'),
(7, 'Kenamanan ruang tunggu dalam kantor '),
(8, 'Kenyamanan pada lapangan parkir dan toilet'),
(9, 'Teknologi yang digunakan kantor.'),
(10, 'Pakaian yang digunakan karyawan sudah rapi');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=86 ;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(79, 'Administrator', 'saya@ikbal.com', 'Konfirmasi_Pembayaran', 'Kami bukan puasa trofi, tapi gagal untuk memenangkan Premier League. Jika anda berhasil menjuarai Piala Liga, maka itu tidak akan merubah apapun', '2012-12-09'),
(84, 'Imel Buruak', 'imel_buruak@gmail.com', 'Halooo Direktur', 'Kami bukan puasa trofi, tapi gagal untuk memenangkan Premier League. Jika anda berhasil menjuarai Piala Liga, maka itu tidak akan merubah apapun', '2013-11-17'),
(85, 'Yurnalis', 'yurnalis.berdalisa@gmail.com', 'Halooo direktur', 'Kami bukan puasa trofi, tapi gagal untuk memenangkan Premier League. Jika anda berhasil menjuarai Piala Liga, maka itu tidak akan merubah apapun', '2013-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pelayanan` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `pelayanan`) VALUES
(1, 'Pelayanan yang cepat dan mudah'),
(2, 'Karyawan mampu menunjukkan sifat sopan dan ramah terhadap wajib pajak'),
(3, 'Karyawan mampu menanggapi keluhan wajib pajak'),
(4, 'Karyawan berada ditempat saat dibutuhkan wajib pajak'),
(5, 'Pengetahuan dan kecakapan karyawan dalam menjalankan tugas'),
(6, 'Ketelitian karyawan dalam menjalankan tugas'),
(7, 'Pelayanan tidak membedakan status sosial wajib pajak'),
(8, 'Kebersihan dan kenyamanan kantor'),
(9, 'sistem antrian yang teratur tampa membedakan status tiap nasabah'),
(10, 'Jasa yang diberikan karyawan sudah tercapai');

-- --------------------------------------------------------

--
-- Table structure for table `statis`
--

CREATE TABLE IF NOT EXISTS `statis` (
  `judul` varchar(255) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statis`
--

INSERT INTO `statis` (`judul`, `halaman`, `detail`) VALUES
('Selamat Datang di Kantor Catatan Sipil Kabupaten Solok', 'home', '<p style="text-align: justify;">PT.MUSIMAS merupakan PT yang didirikan dipasir pengaraian Kab.Rokan Hulu Kecamatan Rambah Hilir(RIAU) pada tahun 1995, PT MUSIMAS  bergerak dibidang perkebunan kelapa sawit yang menghasilkan bahan pokok kelapa sawit dan proses pengolahan produk minyak mentah</p>\r\n\r\n<p style="text-align: justify;">Untuk mendapatkan bahan bakar minyak masyarakat atau konsumen harus mengambil surat rekomendasi yang ditandatangani oleh PT. Pertamina UPMS VII Makassar.</p>\r\n\r\n<p style="text-align: justify;">Alasan dari pertamina untuk memberlakukan keputusan ini untuk menghindari masyarakat untuk membeli bahan bakar minyak dengan menggunakan derigen. </p>\r\n\r\n<p style="text-align: justify;">Atas dasar itulah PT.Sinar Indah cahaya yang merupakan agen dari PT.Patra Niaga Untuk Memenuhi kebutuhan masyarakat terhadap bahan bakar minyak berskala besar maupun kecil yang digunakan untuk genset ataupun untuk industry kecil.</p>\r\n'),
('Profil Kantor Catatan Sipil Kabupaten Solok', 'profil', '<p style="text-align: justify;">PT. Sinar Indah Cahaya adalah Agen tunggal Patra Niaga untuk wilayah Indonesia timur, pemasok BBM jenis solar (High Speed Diesel) dan marine fuel oil ke konsumen industri, Bunker transportasi laut. Tujuan didirikannya agar lebih mendekatakan dan memudahkan pelanggan untuk mendapatkan produk BBM industry dengan kualitas yang dijamin oleh Pertamina.</p>\r\n<p style="text-align: justify;">Perubahan yang signifikan pada pendistribusian bahan bakar minyak khususnya dalam layanan pemasaran ke Perusahaan Perindustrian dan Perkapalan yang dulunya menggunakan harga subsidi telah beralih dengan harga keekonomian atau harga pasar (harga non subsidi), telah mendorong pemain lain untuk berusaha masuk dalam pemasaran bahan bakar minyak ini , dan mereka belum dapat memanfaatkan secara optimal pengembangan bisnisnya sehingga kurang dapat melihat prospek / peluang bisnis yang terbuka pada pemasaran bahan bakar minyak untuk Industri & Marine yang lagi berkembang, mengingat kondisi perekomian global. .</p>\r\n\r\n<p style="text-align: justify;">Banyak tawaran kegiatan kepengusahaan dalam dunia bisnis tetapi potensi pemasaran bahan bakar minyak untuk Industri & Marine pada saat sekarang ini telah menjadi peluang profit dan sekaligus menjadi pasar terbuka sehingga mereka enggan untuk berkiprah didalamnya karena belum dapat bersaing secara kompetensi dengan pemain asing. .</p>\r\n\r\n<p style="text-align: justify;">Hal tersebut justru merupakan peluang PT.Sinar Indah Cahaya untuk terjun dan bergelut dengan gigih memasarkan dan merebut pangsa pasar bahan bakar minyak untuk Industri & Marine dan sekaligus dapat meningkatkan penghasilan daerah secara signifikan. .</p>\r\n\r\n<p style="text-align: justify;">Banyak tawaran kegiatan kepengusahaan dalam dunia bisnis tetapi potensi pemasaran bahan bakar minyak untuk Industri & Marine pada saat sekarang ini telah menjadi peluang profit dan sekaligus menjadi pasar terbuka sehingga mereka enggan untuk berkiprah didalamnya karena belum dapat bersaing secara kompetensi dengan pemain asing. .</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
