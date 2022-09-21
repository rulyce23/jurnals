-- Database: `db_jurnal` --
-- Table `chat` --
CREATE TABLE `chat` (
  `nama` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `komen` varchar(120) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `cek` varchar(3) NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Table `jurnal` --
CREATE TABLE `jurnal` (
  `id_kategori` int(11) NOT NULL,
  `id_jurnal` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tgl_diajukan` date NOT NULL,
  `penulis` text NOT NULL,
  `nm_publisher` varchar(35) NOT NULL,
  `nm_editor` varchar(35) NOT NULL,
  `nm_reviewed` varchar(35) NOT NULL,
  `kata_kunci` varchar(60) NOT NULL,
  `volume` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `hal` int(11) NOT NULL,
  `thn` varchar(4) NOT NULL,
  `issn_isbn` varchar(13) NOT NULL,
  `berkas` text NOT NULL,
  `gambar` blob NOT NULL,
  `artikel` text NOT NULL,
  `abstraksi` text NOT NULL,
  `ket_editor` text NOT NULL,
  `ket_reviewer` text NOT NULL,
  `ket_admin` text NOT NULL,
  `status_editor` varchar(35) NOT NULL,
  `status_reviewer` varchar(35) NOT NULL,
  `status_admin` varchar(35) NOT NULL,
  `s_admin2` int(11) NOT NULL,
  `publikasi` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jurnal`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO `jurnal` (`id_kategori`, `id_jurnal`, `id_user`, `tgl_diajukan`, `penulis`, `nm_publisher`, `nm_editor`, `nm_reviewed`, `kata_kunci`, `volume`, `no`, `hal`, `thn`, `issn_isbn`, `berkas`, `gambar`, `artikel`, `abstraksi`, `ket_editor`, `ket_reviewer`, `ket_admin`, `status_editor`, `status_reviewer`, `status_admin`, `s_admin2`, `publikasi`) VALUES
(1, 1, 3, '2017-08-24', 'Ati Suci Dian Martha,Fauziyyah Hanif Basuki', 'admin', '', 'reviewer', 'Game', 5, 2, 6, '2014', '9841944', '6. Vol 5-2 Ati Suci Dian Martha & Fauziyyah.pdf', 'COVER.jpg', 'Perancangan Game Edukatif', 'Matematika merupakan ilmu universal yang memiliki peranan penting dalam perkembangan ilmu pengetahuan\r\ndan teknologi modern. Matematika sangat erat kaitannya dengan perkembangan pola pikir manusia yang\r\nberpengaruh bagi peningkatan kualitas sumber daya manusia. Proses pembelajaran matematika di sekolah pada\r\numumnya berkonsentrasi pada latihan menyelesaikan soal yang bersifat prosedural yang cenderung\r\nmembosankan daripada menanamkan pemahaman. Siswa hanya menerima konsep pemahaman secara\r\ninformatif, menerima contoh soal dan dituntut untuk menyelesaikan soal-soal latihan.\r\nPenyampaian materi yang cenderung membosankan akan mempengaruhi kurangnya semangat dan minat siswa\r\nuntuk mempelajari matematika sehingga akan berdampak negatif terhadap siswa yang bersangkutan. Sebagai\r\nupaya untuk meningkatkan minat siswa agar bersemangat dalam mengikuti pembelajaran matematika, salah\r\nsatunya dengan menggunakan media pembelajaran yang lebih menarik dan lebih interaktif. Berdasarkan\r\njenisnya, media pembelajaran dapat digolongkan menjadi empat jenis, yaitu: media pembelajaran visual, media\r\npembelajaran audial, media pembelajaran audiovisual, dan media pembelajaran multimedia.\r\nSalah satu media pembelajaran yang dapat digunakan yaitu game edukasi. Penggunaan game edukasi sebagai\r\nmedia pembelajaran membuat kegiatan pembelajaran menjadi lebih menarik dan dapat menambah motivasi serta\r\nmemancing minat siswa terhadap materi pembelajaran, sehingga siswa dapat lebih mudah memahami materi\r\nyang diajarkan.', '', 'Jurnal Tersebut Sudah Benar,Namun Ada Beberapa Kalimat Dengan kata Yang Harus Direvisi Seperti : Dalam Yang,Seperti,Tersebut dibuat dengan kata konstan tidak terlalu banyak kata berulang', 'Jurnal Anda Sudah Berhasil Diterbitkan & Layak By: Admin & Reviewer', '', 'Reviewed Need revision', 'APPROVED', 1, 'TERBIT'),
(1, 3, 1, '2017-08-25', 'Ruly Rizki Perdana', 'admin', '', 'reviewer', '1.Hough Transform,Connected Component Labeling', 5, 2, 6, '', '9841945', 'Sensor Pendeteksi Bahu Jalan.pdf\r\n', 'COVER.jpg', '1.Sistem Penerapan Sensor Pendeteksi Penggunaan Bahu Jalan Terhadap\r\nKendaraan Roda Empat Guna Meminimalisir Angka Kecelakaan Dan Meningkatkan Kualitas\r\nKeamanan Pelayanan Publik Pada Ruas Jalan Tol Dengan Menggunakan Metodelogi Hough Transform\r\n& Connected Component Labeling.\r\n', 'menyalip dari samping bahu jalan merupakan peraturan kebijakan yang sangat\r\ndilarang dan sangat tidak diperkenankan untuk seluruh mobil untuk selalu menyalip dari samping bahu\r\njalan,penyimpangan ini akan menjadi bahaya bagi semua pengendara yang lain, dan sebagian besar\r\nKemungkinan polisi selalu memberikan perhatian untuk tidak menggunakan bahu jalan dan\r\nmemberikan beberapa peringatan pelanggaran kepada semua pengendara mobil. Tapi semua itu selalu\r\nsaja tidak dipatuhi oleh kebanyakan pengendara mobil, bahkan sampai sekarang jumlah kecelakaan\r\nmasih berlanjut. Peningkatan selalu terjadi atas tambah meningkatnya jumlah korban kecelakaan di\r\njalan raya, karena sistem di jalan raya kurang aman dan selalu diabaikan oleh setiap pengendara mobil\r\ndi jalan tol. Oleh karena itu, pada topik penulis membuat sebuah ide penelitian yaitu tentang penerapan\r\nsensor deteksi pengguna bahu jalan untuk meminimalkan jumlah kecelakaan dan memberikan sanksi\r\nyang harus diterima bagi pengendara yang nakal dan tidak taat atau hormat terhadap peraturan\r\nkeselamatan berkendara di Jalan raya', '', 'Jurnal Anda Sudah Sesuai Aturan Dan Layak Untuk Dterbitkan oleh admin BY : Reviewer', 'Jurnal Anda Layak Diterbitkan Karena Sudah Sesuai Dengan Prosedur By : Admin & Reviewer', '', 'Reviewed Submit For Publish', 'APPROVED', 1, 'TERBIT'),
(0, 12, 2, '2017-08-31', 'Alvin Rizqi Koswara,Rully Ramdhani', '', '', '', 'levenshtein', 0, 0, 0, '', '', '8.pdf', '', 'levensthein algorithm', 'mengenai algoritma levenshtein', '', '', '', '', '', '', 0, ''),
(0, 13, 5, '2017-09-09', 'Cecep Ruddi Kusnadi Setiawan, Rian Hafrizal', '', '', '', 'Media Interaktif, Rambu – rambu lalu lintas', 0, 0, 0, '', '', '34.pdf', '', 'MEDIA PEMBELAJARAN INTERAKTIF PENGENALAN RAMBU – RAMBU LALU LINTAS\r\nUNTUK CALON PENGENDARA DI JALAN RAYA\r\nMENGGUNAKAN FLASH', 'Tingkat kepadatan lalu lintas di Indonesia sangat lahtinggi, terutama dikota-kota besar di Indonesia. Sehingga\r\nkecelakaan yang disebabkan oleh lalu lintas pun banyak dijumpai, tidak hanya di kota besar, di kota kecil pun\r\nsering dijumpai kecelakaan lalu lintas karena kelalaian atau pun karena keadaan jalan. Salah satu factor\r\npenyebab kecelakaan adalah factor manusia, factor ini adalah faktor yang dominan dalam penyebab kecelakaan,\r\nkarena hamper semua kecelakaan yang terjadi karena pelanggaran lalu lintas. Pelanggaran tersebut dapat terjadi\r\nkarena pengguna jalan sengaja melanggar atau tidak melihat ketentuan yang berlaku atau dalam hal ini adalah\r\nrambu-rambu lalu lintas.\r\nMedia informasi tentang rambu lalu lintas yang ada terdiri dari buku, iklan layanan masyarakat dan penyuluhan\r\noleh kepolisian. Namun media tersebut dianggap kurang efektif, kurang menarik dan kurang interaktif. Hal\r\ntersebut dipandang sebagai penyebab rendahnya tingkat kesadaran masyarakat tentang pentingnya mematuhi\r\nrambu lalu lintas guna meningkatkan keselamatan berkendara. Tujuan dari pembuatan Skripsi ini adalah untuk\r\nmemberikan suatu alternatif media berupa Media Pembelajaran interaktif tentang rambulalu lintas guna\r\nmeningkatkan kesadaran keselamatan berkendara', '', '', '', '', '', '', 0, '');

-- Table `kategori` --
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kategori` enum('Jurnal','Prosiding','Artikel','Buku') NOT NULL,
  `judul_kategori` varchar(35) NOT NULL,
  `tgl_publish` date NOT NULL,
  `id_jurnal` int(11) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`, `judul_kategori`, `tgl_publish`, `id_jurnal`) VALUES
(1, 'Jurnal', 'Komputer Bisnis', '2017-08-08', 1);

-- Table `t_berita` --
CREATE TABLE `t_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `jenis` enum('penelitian','pengabdian','pendidikan') NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `deskripsi_acara` text NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `b_gambar` text NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `t_berita` (`id_berita`, `id_user`, `jenis`, `penulis`, `deskripsi_acara`, `tanggal`, `judul`, `b_gambar`) VALUES
(1, 2, 'penelitian', 'Diqy Fakhrun Siddieq', 'acara tabble manner bagi para calon mahasiswa yang akan lulus & akan bekerja langsung ,tempat & pelaksanaaan terdapat di lokasi hotel horison', '2017-08-31', 'Prodi MI Event', 'home1.jpg');

-- Table `users` --
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_jurnal` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `email` varchar(65) NOT NULL,
  `pendidikan` varchar(21) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Dosen','Mahasiswa') NOT NULL,
  `level` enum('Admin','Reviewer','Editor','Author') NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nrp_nidn` varchar(10) NOT NULL,
  `picture` blob NOT NULL,
  `token` varchar(150) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id_user`, `id_jurnal`, `nama`, `jk`, `telepon`, `email`, `pendidikan`, `alamat`, `status`, `level`, `username`, `password`, `nrp_nidn`, `picture`, `token`) VALUES
(1, 0, 'Ruly', 'Laki-Laki', '08122053929', 'rulyce23@gmail.com', 'S1 Teknik Informatika', 'GBA 3 Blok B1 No 10', 'Mahasiswa', 'Author', 'ruly', '672cd026aec64e5876235cbba13019fc70cccec6', '6314089', 'WIN_20161208_14_11_10_Pro.jpg', '4c3803b5d6f2b7c5072dae5fb8d930ff'),
(2, 0, 'admin', 'Laki-Laki', '081321257629', 'rully700@gmail.com', 'S1 Teknik Informatika', 'Graha Rancamanyar\r\n', 'Dosen', 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '111000311', '', ''),
(3, 0, 'Alvin', 'Laki-Laki', '087823420377', 'alvinrizqikoswara.ark@gmail.com', 'S1 Teknik Informatika', 'Soreang Kabupaten', 'Dosen', 'Editor', 'alvin', '59d97cb9530a12325b70e648432cc8de75741c2c', '', '', ''),
(4, 0, 'Reviewer', 'Laki-Laki', '089681889629', 'ucokfahlevi@gmail.com', 'SMK', 'Kopo Sayati', 'Dosen', 'Reviewer', 'reviewer', '0b7cec9c67d6e0cfa008efe01c74ab89b5c5513f', '', '', ''),
(5, 0, 'Alvin.Ark', 'Laki-Laki', '08883714419', 'alvinrizqikoswara1.ark@gmail.com', 'S1 Teknik Informatika', 'Soreang Kabupaten', 'Dosen', 'Author', 'alvin.ark', '59d97cb9530a12325b70e648432cc8de75741c2c', '6314141', 'member.jpg', '');

