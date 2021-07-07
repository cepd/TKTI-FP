-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2021 at 12:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j_kuisioner`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `maturity` varchar(255) NOT NULL,
  `maturity_inginkan` varchar(255) NOT NULL,
  `pengisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `maturity`, `maturity_inginkan`, `pengisi`) VALUES
(1, '4', '5', 'sy2beah2kfnlwxqtcudogprjzvi3xm1');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_kuisioner` int(11) NOT NULL,
  `pengisi` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_kuisioner`, `pengisi`, `jawaban`) VALUES
(1, 1, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '0'),
(2, 2, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '0'),
(3, 3, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '0.33'),
(4, 4, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '0'),
(5, 5, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '0.33'),
(6, 6, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(7, 7, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(8, 8, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(9, 9, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(10, 10, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(11, 11, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(12, 12, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(13, 13, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(14, 14, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(15, 15, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(16, 16, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(17, 17, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(18, 18, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(19, 19, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(20, 20, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(21, 21, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(22, 22, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1'),
(23, 23, 'sy2beah2kfnlwxqtcudogprjzvi3xm1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`) VALUES
(1, 'Infrastruktur', 'infrastruktur'),
(2, 'Sumber Daya Manusia', 'sumber-daya-manusia'),
(3, 'Perencanaan', 'perencanaan'),
(5, 'Investasi dan Aset', 'investasi-dan-aset'),
(6, 'Manajemen Masalah dan Risiko', 'manajemen-masalah-dan-risiko'),
(7, 'Kontrol dan Perubahan', 'kontrol-dan-perubahan'),
(8, 'Tata Kelola', 'tata-kelola');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id`, `id_kategori`, `pertanyaan`, `level`) VALUES
(1, 3, 'Apakah pengelolaan infrastruktur teknologi pada PIKTI diakui sebagai topik yang cukup penting untuk ditangani?', 0),
(2, 3, 'Apakah apabila ada perubahan yang dilakukan pada infrastruktur PIKTI untuk setiap aplikasi baru, dilakukan dengan rencana keseluruhan?', 1),
(3, 3, 'Meskipun ada kesadaran bahwa infrastruktur TI PIKTI itu penting, apakah ada pendekatan keseluruhan yang konsisten?', 1),
(4, 3, 'Sudahkah aktivitas pemeliharaan TI PIKTI bereaksi terhadap kebutuhan jangka pendek?', 1),
(5, 3, 'Apakah pada PIKTI, lingkungan produksi adalah lingkungan pengujian?', 1),
(6, 3, 'Apakah ada konsistensi di antara pendekatan taktis saat memperoleh dan memelihara infrastruktur TI PIKTI?', 2),
(7, 3, 'Apakah akuisisi dan pemeliharaan infrastruktur TI PIKTI didasarkan pada strategi yang ditentukan dan mempertimbangkan kebutuhan aplikasi bisnis yang harus didukung?', 2),
(8, 3, 'Apakah ada pemahaman bahwa infrastruktur TI PIKTI itu penting, didukung oleh beberapa praktik formal?', 2),
(9, 3, 'Apakah pemeliharaan TI PIKTI dijadwalkan dan terkoordinasi?', 2),
(10, 3, 'Untuk beberapa lingkungan, apakah ada lingkungan pengujian terpisah?', 2),
(11, 3, 'Apakah ada proses yang jelas, terdefinisi, dan dipahami secara umum untuk memperoleh dan memelihara infrastruktur TI PIKTI?', 3),
(12, 3, 'Apakah proses tersebut mendukung kebutuhan aplikasi bisnis yang penting dan sejalan dengan TI PIKTI dan strategi bisnis PIKTI, yang diterapkan secara konsisten?', 3),
(13, 3, 'Sudahkah pemeliharaan direncanakan, terjadwal dan terkoordinasi?', 3),
(14, 3, 'Apakah ada lingkungan terpisah untuk pengujian dan produksi?', 3),
(15, 3, 'Apakah proses akuisisi dan pemeliharaan infrastruktur teknologi PIKTI telah berkembang ke titik di mana ia bekerja dengan baik untuk sebagian besar situasi, diikuti secara konsisten dan difokuskan pada dapat digunakan kembali?', 4),
(16, 3, 'Apakah Infrastruktur TI PIKTI cukup mendukung aplikasi bisnis?', 4),
(17, 3, 'Apakah prosesnya terorganisir dengan baik dan proaktif?', 4),
(18, 3, 'Sudahkah biaya dan waktu tunggu untuk mencapai tingkat skalabilitas, fleksibilitas, dan integrasi yang diharapkan sebagian dioptimalkan?', 4),
(19, 3, 'Sudahkah proses akuisisi dan pemeliharaan infrastruktur teknologi PIKTI bersifat proaktif dan selaras dengan aplikasi bisnis penting dan arsitektur teknologi?', 5),
(20, 3, 'Sudahkah praktik yang baik terkait solusi teknologi diikuti, dan organisasi PIKTI mengetahui perkembangan platform dan alat manajemen terbaru?', 5),
(21, 3, 'Sudahkah mengurangi biaya pengeluaran PIKTI dengan merasionalisasi dan menstandarisasi komponen infrastruktur dan dengan menggunakan otomatisasi?', 5),
(22, 3, 'Apakah tingkat kesadaran teknis yang tinggi dapat mengidentifikasi cara optimal untuk secara proaktif meningkatkan kinerja, termasuk pertimbangan opsi pengalihdayaan?', 5),
(23, 3, 'Apakah infrastruktur TI PIKTI dipandang sebagai pendorong utama untuk memanfaatkan penggunaan TI PIKTI?', 5),
(24, 5, 'Ada pengetahuan dan keahlian yang diperlukan untuk mengembangkan rencana infrastruktur teknologi?', 0),
(25, 5, 'Ada pemahaman pentingnya perencanaan teknologi perubahanan untuk mengalokasikan sumber daya secara efektif', 0),
(26, 5, 'Apakah PIKTI mempunyai kesadaran bahwa proses untuk memperoleh dan memelihara aplikasi diperlukan?', 0),
(27, 5, 'Apakah ada kesadaran bahwa proses untuk memperoleh dan mempertahankan aplikasi diperlukan?', 1),
(28, 5, 'Pendekatan untuk memperoleh dan memelihara perangkat lunak aplikasi bervariasi dari proyek ke proyek', 1),
(29, 5, 'Apakah beberapa solusi individu untuk kebutuhan bisnis tertentu kemungkinan diperoleh secara independen, sehingga menjadi efisien dengan pemeliharaan dan dukungan?', 1),
(30, 5, 'Ada proses yang berbeda, tetapi serupa, untuk memperoleh dan memelihara aplikasi berdasarkan keahlian dalam fungsi TI', 2),
(31, 5, 'Tingkat keberhasilan dengan aplikasi sangat tergantung pada keterampilan dan tingkat pengalaman di dalam IT', 2),
(32, 5, 'Perawatan biasanya bermasalah dan menderita ketika pengetahuan internal hilang dari organisasi', 2),
(33, 5, 'Adanya sedikit pertimbangan keamanan aplikasi dan ketersediaan dalam desain atau perolehan perangkat lunak aplikasi', 2),
(34, 5, 'Proses yang jelas, ditentukan dan umumnya dipahami ada untuk perolehan dan pemeliharaan perangkat lunak aplikasi', 3),
(35, 5, 'Proses selaras dengan IT dan strategi bisnis. Suatu upaya dilakukan untuk menerapkan proses yang terdokumentasi secara konsisten di seluruh berbeda aplikasi dan proyek', 3),
(36, 5, 'Metodologi umumnya harus fleksibel dan sulit diterapkan dalam semua kasus, sehingga langkah-langkahnya mungkin dilewati', 3),
(37, 5, 'Kegiatan perawatan direncanakan, dijadwalkan dan dikoordinasikan.', 3),
(38, 5, 'Apakah ada metodologi formal dan dipahami dengan baik yang mencakup proses desain dan spesifikasi, kriteria untuk akuisisi,proses untuk pengujian dan persyaratan dokumentasi?', 4),
(39, 5, 'Mekanisme persetujuan yang didokumentasikan dan disetujui ada untuk memastikan semuanya langkah-langkah diikuti dan pengecualian diizinkan.', 4),
(40, 5, 'Praktik dan prosedur berevolusi dan cocok untuk organisasi PIKTI, digunakan oleh semua staf dan berlaku untuk sebagian besar persyaratan aplikasi.', 4),
(41, 5, 'Perolehan perangkat lunak aplikasi dan praktik pemeliharaan diselaraskan dengan proses yang ditentukan.', 5),
(42, 5, 'Apakah penerapan perangkat lunak akuisisi dan pemeliharaan sesuai dengan proses yang ditetapkan?', 5),
(43, 5, '&quot;Akuisisi dan metodologi pemeliharaan juga canggih dan memungkinkan penyebaran cepat, memungkinkan responsif dan fleksibilitas yang tinggi menanggapi kebutuhan bisnis yang   berubah.&quot;', 5),
(44, 5, 'Akuisisi perangkat lunak aplikasi dan metodologi implementasi mengalami perbaikan terus menerus dan didukung oleh database pengetahuan internal dan eksternal yang mengandung referensi bahan dan praktik yang baik', 5),
(45, 5, 'Metodologi menciptakan dokumentasi dalam struktur yang telah ditentukan yang membuat produksi dan pemeliharaan efisien', 5),
(46, 6, 'Organisasi PIKTI menyadari pentingnya keamanan dari sistemnya', 0),
(47, 6, 'Ada pengaturan tanggung jawab dan akuntabilitas dalam pengamanan sistem', 0),
(48, 6, 'PIKTI memberikan support yang mendukung pengelolaan keamanan TI', 0),
(49, 6, 'PIKTI memiliki pelaporan keamanan TI dan tidak ada proses tanggapan untuk pelanggaran keamanan TI', 0),
(50, 6, 'Tidak ada kekurangan pada sistem administrasi keamaan pada PIKTI', 0),
(51, 6, 'Organisasi PIKTI sadar akan pentingnya keamanan sistem', 1),
(52, 6, 'Tanggapan terhadap pelanggaran keamanan TI mudah untuk diprediksi', 1),
(53, 6, 'Kesadaran akan pentingnya keamanan sistem pada PIKTI berlaku ke semua pihak dalam PIKTI', 1),
(54, 6, 'Sistem keamanan pada PIKTI ditangani secara reaktif', 1),
(55, 6, 'PIKTI memiliki sistem khusus untuk mengukur tingkat keamanan sistem', 1),
(56, 6, 'Adanya tanggung jawab yang jelas terhadap sistem keamanan PIKTI', 1),
(57, 6, 'Tanggung jawab dan akuntabilitas untuk keamanan sistem pada PIKTI diberikan kepada seorang koordinator keamanan TI, meskipun otoritas manajemen dari koordinator tersebut terbatas', 2),
(58, 6, 'Kesadaran akan kebutuhan keamanan di PIKTI luas dan tidak terpisah-pisah', 2),
(59, 6, 'Adakah sebuah analisa terhadap informasi yang relevan terhadap keamanan sistem pada PIKTI?', 2),
(60, 6, 'Layanan dari pihak ketiga memenuhi kebutuhan keamanan khusus organisasi PIKTI', 2),
(61, 6, 'Adanya pengembangan kebijakan keamanan yang dibantu dengan keterampilan dan alat yang memadai', 2),
(62, 6, 'Pelaporan keamanan PIKTI lengkap, tidak menyesatkan, dan relevan', 2),
(63, 6, 'Pelatihan keamanan sistem tersedia serta dilakukan secara wajib', 2),
(64, 6, 'Keamanan TI menjadi tanggung jawab tidak hanya pihak IT , tetapi juga pihak bisnis', 2),
(66, 6, 'Kesadaran keamanan ada pada PIKTI dan dipromosikan oleh manajemen', 3),
(67, 6, 'Prosedur keamanan TI ditentukan dan diselaraskan dengan kebijakan keamanan TI', 3),
(68, 6, 'Tanggung jawab untuk keamanan TI ditetapkan dan dipahami, serta ditegakkan secara konsisten', 3),
(69, 6, 'Adanya pengujian keamanan sistem pada PIKTI', 3),
(70, 6, 'Pelatihan keamanan tersedia untuk TI dan bisnis, dijadwalkan dan dikelola secara formal', 3),
(71, 6, 'Ada rencana keamanan TI yang dipadukan dengan solusi keamanan yang didorong oleh analisis risiko', 3),
(72, 6, 'Pelaporan tentang keamanan memuat fokus bisnis yang jelas', 3),
(73, 6, 'Tanggung jawab untuk keamanan TI ditetapkan, dikelola, dan ditegakkan dengan jelas.', 4),
(74, 6, 'Risiko keamanan TI dan analisis dampak dilakukan secara konsisten', 4),
(75, 6, 'Adanya kewajiban untuk mempromosikan kesadaran pentingnya keamanan sistem TI', 4),
(76, 6, 'Pengujian keamanan diselesaikan menggunakan proses standar dan formal, yang mengarah ke peningkatan tingkat keamanan', 4),
(77, 6, 'Proses keamanan TI dikoordinasikan dengan fungsi keamanan organisasi PIKTI secara keseluruhan', 4),
(78, 6, 'Pelaporan keamanan TI dihubungkan dengan tujuan bisnis', 4),
(79, 6, 'Pelatihan keamanan TI dilakukan baik dalam domain bisnis maupun domain TI', 4),
(80, 6, 'Pelatihan keamanan TI direncanakan dan dikelola dengan tujuan untuk menanggapi kebutuhan bisnis dan risiko keamanan yang ditetapkan', 4),
(81, 6, 'Sasaran dan metrik untuk manajemen keamanan telah ditentukan dan sudah diukur', 4),
(82, 6, 'Adanya standarisasi tersendiri terhadap Identifikasi pengguna, otentikasi dan otorisasi sistem PIKTI', 4),
(83, 6, 'Sertifikasi keamanan pada PIKTI diterapkan untuk anggota staf yang bertanggung jawab atas audit dan manajemen keamanan', 4),
(84, 5, 'Keamanan TI adalah tanggung jawab bersama antara bisnis dan manajemen TI dan terintegrasi dengan tujuan bisnis keamanan PIKTI', 5),
(85, 6, 'Persyaratan keamanan TI PIKTI didefinisikan dengan jelas, dioptimalkan, dan termasuk dalam rencana keamanan yang disetujui', 5),
(86, 6, 'Pengguna TI PIKTI semakin bertanggung jawab untuk menentukan persyaratan keamanan, dan fungsi keamanan PIKTI sudah  terintegrasi dengan aplikasi pada tahap desain', 5),
(87, 6, 'Insiden keamanan segera ditangani dengan prosedur respons insiden formal yang didukung oleh alat otomatis', 5),
(88, 6, 'Adanya penilaian keamanan secara berkala untuk mengevaluasi efektivitas implementasi rencana keamanan', 5),
(89, 6, 'Informasi tentang ancaman dan kerentanan pada sistem PIKTI dikumpulkan dan dianalisis secara sistematis', 5),
(90, 6, 'Kontrol yang memadai untuk memitigasi risiko segera dikomunikasikan dan diimplementasikan', 5),
(91, 6, 'Adanya pengujian keamanan, untuk menganalisa akar penyebab insiden keamanan, dan mengidentifikasi risiko proaktif yang selanjutnya digunakan untuk proses perbaikan sistem secara berkelanjutan', 5),
(92, 6, 'Proses dan teknologi keamanan terintegrasi di seluruh organisasi PIKTI', 5),
(93, 6, 'Metrik untuk manajemen keamanan diukur, dikumpulkan dan dikomunikasikan', 5),
(94, 6, 'Manajemen memiliki langkah-langkah tersendiri untuk mengukur dan mengatur rencana kemanan sistem PIKTI dalam proses peningkatan keamanan secara berkelanjutan', 5),
(95, 7, 'PIKTI belum mengimplementasikan proses monitoring terhadap modul pembelajaran jarak jauh.', 0),
(96, 7, 'Belum terdapat proses monitoring terhadap kompetensi mahasiswa lulusan PIKTI.', 0),
(97, 7, 'Belum terdapat Laporan-laporan yang berguna untuk menunjang proses monitoring modul pembelajaran jarak jauh.', 0),
(98, 7, 'Teknologi yang tersedia tidak bisa melakukan monitoring terhadap ketepatan modul pembelajaran jarak jauh.', 0),
(99, 7, 'Kebutuhan akan proses objektif yang dipahami secara jelas, belum terpahami', 0),
(100, 7, 'Pikti merupakan organisasi yang sadar akan pentingnya memiliki informasi mengenai proses monitoring dan evaluasi terhadap pelaksanaan pembelajaran jarak jauh.', 1),
(101, 7, 'PIKTI merupakan organisasi yang sadar akan pentingnya memiliki informasi mengenai proses monitoring dan evaluasiterhadap kompetensi mahasiswa lulusan PIKTI.', 1),
(102, 7, 'Standar pengumpulan dan pengkajian informasi terkait monitoring dan evaluasi terhadap pembelajaran jarak jauh dalam PIKTI belum didefinisikan dengan jelas.', 1),
(103, 7, 'Monitoring terhadap modul pembelajaran (khususnya pembelajaran jarak jauh) hanya dilakukan ketika terjadi hal-hal yang tidak diinginkan ketika pelaksanaan pembelajaran berlangsung.', 1),
(104, 7, 'Monitoring terhadap kompetensi mahasiswa lulusan PIKTI hanya dilakukan ketika terjadi hal-hal yang tidak diinginkan pasca kelulusan.', 1),
(105, 7, 'Terdapat standar terhadap apa saja yang harus dipantau terkait modul pembelajaran jarak jauh.', 2),
(106, 7, 'Terdapat standar terhadap apa saja yang harus dipantau terkait kompetensi mahasiswa lulusan PIKTI.', 2),
(107, 7, 'Terdapat Laporan Pengendalian pada PIKTI untuk melakukan tindakan perbaikan yang inisiatif pada Modul Pembelajaran', 2),
(108, 7, 'PIKTI mengalami peningkatan kesadaran dari pemantauan internal organisasi', 2),
(109, 7, 'Terdapat Layanan informasi manajemen PIKTI melakukan pemantauan terhadap efektifitas kinerja staff', 2),
(110, 7, 'Adanya alat bantu/sistem yang baru diimplemantasikan untuk monitoring SDM', 2),
(111, 7, 'Keterampilan SDM menentukan teknologi yang digunakan PIKTI', 2),
(112, 7, 'Organisasi memiliki dasar serta mengkomunikasikan standar-standar pelaksanaan monitoring terkait kompetensi mahasiswa lulusan PIKTI', 3),
(113, 7, 'Organisasi memiliki dasar serta mengkomunikasikan standar-standar pelaksanaan monitoring terkait modul pembelajaran jarak jauh', 3),
(114, 7, 'Terdapat sumber daya yang berkualitas untuk mendukung pelaksanaan proses monitoring terkait kompetensi mahasiswa lulusan PIKTI', 3),
(115, 7, 'Terdapat sumber daya yang berkualitas untuk mendukung pelaksanaan proses monitoringterkait modul pembelajaran jarak jauh', 3),
(116, 7, 'Terdapat framework yang digunakan sebagai standar operasional pada PIKTI', 3),
(117, 7, '&quot;Adanya penetapan kebijakan  manajemen risiko meliputi penerapan  kebijakan dan prosedur.&quot;', 3),
(118, 7, 'Adanya sistem yang terintegrasi yang dapat digunakan untuk memantau informasi operasional PIKTI', 4),
(119, 7, 'Apakah PIKTI memiliki standar tertentu dalam pelaporan hasil monitoring yang telah dilakukan terhadap pembelajaran jarak jauh?', 4),
(120, 7, 'Adanya evaluasi kinerja dengan kriteria tertentu yang telah disepakati dan disetujui stakeholder PIKTI.', 4),
(121, 7, 'Adanya upaya perbaharuan atau peningkatan kualitas perihal standar monitoring kompetensi lulusan PIKTI setiap tahunnya.', 5),
(122, 7, 'Adanya upaya perbaharuan atau peningkatan kualitas terhadap evaluasi dari pelaksanaan pembelajaran jarak jauh.', 5),
(123, 7, 'PIKTI melakukan benchmarking terhadap industri atau perusahaan lain dengan bidang yang sama.', 5),
(124, 7, 'Terdapat kerangka kerja khusus (IT Balanced Scorecard) untuk mengukur penyelenggaraan IT sesuai dengan peraturan perundang-undangan yang berlaku', 5),
(125, 8, 'PIKTI belum mempunyai program untuk memantau aktivitas pengendalian internal.', 0),
(126, 8, 'Belum adanya prosedur dalam melakukan pemantauan efektivitas pengendalian internal.', 0),
(127, 8, 'Belum adanya laporan-laporan yang berguna untuk menunjang proses pemantauan aktivitas pengendalian internal PIKTI.', 0),
(128, 8, 'Belum ada SDM yang bertanggungjawab terhadap pengendalian internal PIKTI.', 0),
(129, 8, 'Belum adanya pengetahuan umum akan pentingnya memiliki pemahaman terhadap pengendalian internal, termasuk dalam hal keamanan operasional IT dan jaminan terhadap pengendalian internal.', 0),
(130, 8, 'Belum adanya prosedur dalam hal menjaga keamanan operasional IT dan jaminan terhadap pengendalian internal.', 0),
(131, 8, 'Belum adanya teknologi yang bisa mengukur kinerja dari pihak manajemen dan pegawai dalam memantau dan melakukan pengendalian internal.', 0),
(132, 8, 'PIKTI merupakan organisasi yang sadar akan pentingnya memiliki manajemen dan jaminan pengendalian IT yang teratur.', 1),
(133, 8, 'Apakah penilaian kelengkapan pengendalian internal diterapkan secara ad hoc (tidak permanen dan pembentukannya sejak semula dimaksudkan hanya untuk sementara waktu dan untuk menangani peristiwa tertentu)?', 1),
(134, 8, 'Belum adanya tanggungjawab secara formal dalam memantau efektivitas pengendalian internal.', 1),
(135, 8, 'Standar pengkajian informasi yang dibutuhkan terkait pemantauan efektivitas pengendalian internal dalam PIKTI belum didefinisikan dengan jelas.', 1),
(136, 8, 'Penilaian pengendalian internal IT dilakukan sebagai bagian dari audit keuangan tradisional, dengan metodologi dan keahlian yang tidak mencerminkan kebutuhan fungsi layanan informasi.', 1),
(137, 8, 'Terdapat laporan pengendalian secara informal pada PIKTI untuk memulai inisiatif tindakan perbaikan/korektif terhadap aktivitas pengendalian internal.', 2),
(138, 8, 'Penilaian pengendalian internal pada PIKTI bergantung pada keahlian SDM kunci.', 2),
(139, 8, 'PIKTI mengalami peningkatan kesadaran dari pemantauan pengendalian internal.', 2),
(140, 8, 'Terdapat layanan informasi manajemen PIKTI untuk memantau efektifitas dari pengendalian internal yang bersifat kritis secara teratur.', 2),
(141, 8, 'Adanya metodologi dan alat bantu/sistem yang mulai digunakan untuk pengendalian internal, tetapI tidak digunakan sesuai rencana.', 2),
(142, 8, 'Keterampilan SDM menentukan teknologi yang digunakan PIKTI.', 2),
(143, 8, 'Terdapat lembaga khusus untuk melakukan pemantauan pengendalian internal.', 3),
(144, 8, 'Adanya kebijakan dan prosedur yang  dikembangkan untuk menilai dan melaporkan aktivitas pemantauan pengendalian internal.', 3),
(145, 8, 'Terdapat program pendidikan dan pelatihan untuk pemantauan pengendalian internal.', 3),
(146, 8, 'Terdapat sebuah aktivitas/proses yang digunakan untuk penilaian diri dan tinjauan jaminan pengendalian internal, dengan peranan untuk bisnis yang bertanggung jawab dan manajer IT.', 3),
(147, 8, 'Terdapat alat yang sedang digunakan untuk pengendalian internal tetapi belum tentu diintegrasikan ke dalam keseluruhan proses.', 3),
(148, 8, 'Terdapat kebijakan penilaian risiko proses IT yang sedang digunakan dalam framework pengendalian yang dikembangkan khusus untuk organisasi IT.', 3),
(149, 8, 'Adanya penetapan kebijakan  manajemen risiko meliputi penerapan kebijakan dan prosedur.', 3),
(150, 8, 'Terdapat framework yang digunakan untuk untuk pemantauan pengendalian internal IT.', 4),
(151, 8, 'Adanya standar tingkat toleransi yang ditetapkan untuk proses pemantauan pengendalian internal.', 4),
(152, 8, 'Adanya alat diterapkan untuk membakukan penilaian dan secara otomatis mendeteksi pengecualian kontrol.', 4),
(153, 8, 'PIKTI menetapkan fungsi pengendalian internal IT formal dengan profesional yang terspesialisasi dan bersertifikat yang menggunakan framework kontrol formal yang didukung oleh manajemen senior.', 4),
(154, 8, 'Adanya partisipasi secara rutin dari anggota staf IT  dalam penilaian pengendalian internal.', 4),
(155, 8, 'Adanya penetapan basis pengetahuan metrik untuk informasi historis pada pemantauan pengendalian internal.', 4),
(156, 8, 'Adanya tinjauan sejawat untuk pemantauan pengendalian internal.', 4),
(157, 8, 'Adanya program peningkatan berkelanjutan di seluruh organisasi yang memperhitungkan pembelajaran dan praktik industri yang baik untuk pemantauan pengendalian internal.', 5),
(158, 8, 'Adanya upaya pembaruan alat yang terintegrasi, yang memungkinkan penilaian efektif atas kontrol IT kritis dan deteksi cepat insiden pemantauan pengendalian IT.', 5),
(159, 8, 'PIKTI melakukan benchmarking terhadap industri atau perusahaan lain dengan bidang yang sama untuk fungsi layanan informasi.', 5),
(160, 8, 'PIKTI melakukan pembandingan terhadap standar industri dan praktik yang baik.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id`, `id_kategori`, `nama`) VALUES
(3, 1, 'Pemeliharaan Infrastruktur Teknologi (AI3)'),
(5, 1, 'Pemeliharaan Aplikasi dan Perangkat Lunak (AI2)'),
(6, 1, 'Sekuritas Sistem (DS5)'),
(7, 1, 'Evaluasi Performa IT (ME1)'),
(8, 1, 'Evaluasi Kontrol Internal (ME2)'),
(9, 2, 'Pengelolaan SDM Bidang IT (PO7)'),
(10, 2, 'Pelatihan Pengguna(DS7)'),
(11, 3, 'Pembentukan Strategi dan Rencana di Bidang IT (PO1)'),
(12, 3, 'Perencanaan Arah Teknologi (PO3)'),
(13, 3, 'Pengelolaan Proyek (PO10)'),
(14, 5, 'Pengelolaan Investasi di Bidang IT(PO5)'),
(16, 5, 'Pembentukan Proses IT, Organisasi dan Hubungan Kerja(PO4)'),
(17, 5, 'Manajemen Kualitas (PO8)'),
(18, 5, 'Pengelolaan Data(DS11)'),
(19, 5, 'Pengelolaan Lingkungan Fisik (DS12)'),
(20, 6, 'Penilaian dan Pengelolaan Risiko IT(PO9)'),
(21, 6, 'Pengelolaan Insiden (DS8)'),
(22, 6, 'Pengelolaan Masalah (DS10)'),
(23, 7, 'Manajemen Perubahan (AI6)'),
(24, 7, 'Pembentukan Solusi atas Perubahan (AI7)'),
(25, 7, 'Pengelolaan Konfigurasi (DS9)'),
(26, 7, 'Kepatuhan terhadap Kebutuhan Eksternal(ME3)'),
(27, 8, 'Komunikasi untuk Tujuan dan Arah Manajemen'),
(28, 8, 'Pengelolaan level layanan (DS1)'),
(29, 8, 'Pengelolaan Layanan pihak ketiga (DS2)'),
(30, 8, 'Kepastian Keberlanjutan Layanan(DS4)'),
(31, 8, 'Pengelolaan Biaya (DS6)'),
(32, 8, 'Ketersediaan Tata Kelola Teknologi Informasi(ME4)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kuisioner` (`id_kuisioner`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD CONSTRAINT `hapus subkategori` FOREIGN KEY (`id_kategori`) REFERENCES `sub_kategori` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `hapus` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
