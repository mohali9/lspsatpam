# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22)
# Database: lspta
# Generation Time: 2019-07-26 17:42:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table beranda
# ------------------------------------------------------------

DROP TABLE IF EXISTS `beranda`;

CREATE TABLE `beranda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gambar` varchar(191) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `beranda` WRITE;
/*!40000 ALTER TABLE `beranda` DISABLE KEYS */;

INSERT INTO `beranda` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`)
VALUES
	(36,'Tujuan','<ul>\r\n	<li>Memberikan pelayanan uji kompetensi yang prima dengan mengutamakan pencapaian mutu sesuai standar dan kepuasan pelanggan serta cepat, tepat, dan akurat dalam pelaksanaan uji kompetensi.</li>\r\n	<li>Mendorong tersedianya tenaga kerja yang kompeten dan tersertifikasi untuk sektor sekuriti.</li>\r\n	<li>Mengembangkan standar kompetensi bidang sekuriti dengan memperhatikan aspek nasional dan internasional</li>\r\n	<li>Mengembangkan jejaring kerjasama dengan mitra terkait dalam proses dan prosedur uji kompetensi, termasuk pelaksanaan sertifikasi kompetensi kerja bagi tenaga kerja sekuriti yang profesional.</li>\r\n	<li>Membangun sinergi antara Badan Nasional Sertifikasi Profesi dan para pemangku kepentingan.</li>\r\n</ul>','gambars/PoCmiHg7rHHvSVAQx7Ki2oDqPP0AK62roJW3Q9F9.png','2019-04-24 03:28:01','2019-05-07 13:31:03');

/*!40000 ALTER TABLE `beranda` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_foreign` (`post_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table formulir
# ------------------------------------------------------------

DROP TABLE IF EXISTS `formulir`;

CREATE TABLE `formulir` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIK` bigint(20) NOT NULL,
  `nama_depan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(62) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(62) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `flag` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci,
  `ktp` text COLLATE utf8mb4_unicode_ci,
  `ijazah` text COLLATE utf8mb4_unicode_ci,
  `ijazah_satpam` text COLLATE utf8mb4_unicode_ci,
  `kk` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `formulir` WRITE;
/*!40000 ALTER TABLE `formulir` DISABLE KEYS */;

INSERT INTO `formulir` (`id`, `NIK`, `nama_depan`, `nama_belakang`, `gender`, `alamat`, `tempat_lahir`, `tgl_lahir`, `tinggi`, `berat`, `pendidikan_terakhir`, `no_hp`, `email`, `password`, `user_id`, `flag`, `created_at`, `updated_at`, `cv`, `ktp`, `ijazah`, `ijazah_satpam`, `kk`, `foto`, `biaya`)
VALUES
	(1,1231231212312312,'Johan','Ali','l','Jl Lidah Wetan Tengah Gg 1 RT/RW 3/1 Belakang warkop limolas, bapak umar es cincau\r\nNo 5','Kota Surabaya','2019-05-14','123','131','sma','085233573875','eawdawd@fas.csa','123asdasd',0,NULL,'2019-05-14 15:50:31','2019-05-14 15:50:31',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(2,1234567891234567,'Dede','Syarif','l','Jl Lidah Wetan Tengah Gg 1 RT/RW 3/1 Belakang warkop limolas, bapak umar es cincau\r\nNo 5','Kota Surabaya','2019-05-08','160','160','sma','085233573875','ali@gmail.com','adsadsadsa',0,NULL,'2019-05-14 15:54:43','2019-05-14 15:54:43',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(3,1234567891234567,'Dolar','fdsafd','p','Jl Lidah Wetan Tengah Gg 1 RT/RW 3/1 Belakang warkop limolas, bapak umar es cincau\r\nNo 5','Kota Surabaya','2019-05-08','160','160','d3','085233573875','ali@gmail.com','fsdafdsfdsa',0,NULL,'2019-05-14 15:57:27','2019-05-14 15:57:27',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(4,1234567891234562,'Rifa','Juleha','p','Jl Lidah Wetan Tengah Gg 1 RT/RW 3/1','Kota Surabaya','2019-05-09','163','163','sma','085233573873','ali1@gmail.com','fggfdsgfsgf',0,NULL,'2019-05-15 06:32:20','2019-05-15 06:32:20',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(5,1234567891234562,'Maulana','Ya','l','Jl Lidah Wetan Tengah Gg 1 RT/RW 3/1 Belakang warkop limolas, bapak umar es cincau\r\nNo 5','Kota Surabaya','2019-05-09','160','160','d3','085233573875','ali@gmail.com','dasdsdsa',0,NULL,'2019-05-15 06:35:07','2019-05-15 06:35:07',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(6,1234567891234568,'John','Cena','p','Jl Pucang','Surabaya','2019-05-16','160','160','s1','085233573872','johncena@gmail.com','johncena',0,NULL,'2019-05-17 14:28:31','2019-05-17 14:28:31',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(7,1234567891234561,'Randi','Martin','l','Jl keputih','surabaya','2019-05-02','170','170','s1','085233573871','randi@gmail.com','randi',0,NULL,'2019-05-19 06:22:23','2019-05-19 06:22:23',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(8,1234567891234561,'Orio','cokelat','l','jl ngagel','surabaya','2019-05-08','160','160','d3','085233573871','orio@gmail.com','orio',2,NULL,'2019-05-21 16:40:11','2019-05-21 16:40:11',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(9,1234567891234562,'roti','kukus','l','jl pucang','surabaya','2019-05-07','160','160','s1','085233573872','roti@gmail.com','roti',3,NULL,'2019-05-22 21:16:42','2019-05-22 21:16:42',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(10,1234567891234565,'deni','wiraguna','p','Jl Bekasi','Surabaya','2019-05-21','160','160','d3','08523357381','deni@gmail.com','deni',7,NULL,'2019-05-28 12:40:01','2019-05-28 12:40:01',NULL,NULL,NULL,NULL,NULL,NULL,''),
	(11,1234567891234562,'iwak','lele','l','jl bekasi','bekasi','2019-05-01','160','160','s1','085233573872','lele@gmail.com','lele',10,NULL,'2019-05-28 13:08:28','2019-05-28 13:08:28','cvs/qyxqKn1QBzL5inCB26wbiF3qCfVTJ9VKIgBqZkBk.pdf','ktps/JfTM6pvOP20DEGWOuI8yVgDUKr8azlbJrd7wCfjt.pdf','ijazahs/LmI3WYPxRxzfnfyX3a6LGup2up80CVjY8cddObuD.pdf','ijazah_satpams/4LUo2PmD689WYOWKoTJreJwKDJPD1Amr51rFMvkE.pdf','kks/tWdgbxRkwcMdGn2UQfqIhjnv37XhrAvD6a3q78fe.pdf','fotos/Ae3TjJ2w16OqMCerOr62wlPdTFZvYGHUeg5eRR0u.jpeg',''),
	(12,1234567891234567,'Johan','3123124','l','Jl Lidah Wetan Tengah Gg 1 RT/RW 3/1 Belakang warkop limolas, bapak umar es cincau\r\nNo 5','Kota Surabaya','1010-10-10','10','10','sma','085233573875','cokelat@gmail.com','123456',12,NULL,'2019-06-17 14:34:02','2019-06-17 14:34:02','cvs/XxC5JRSYSN9yBHz09SPS9FlFXdCFbSdoqNtWSTN1.docx','ktps/HakY28xgTnXOz2gu6aRcyoiw5LXO6HkjVwFy6mp3.jpeg','ijazahs/uOw6HwyOsInYMh6NpZSxsapUgKQa9UTqBciavaiL.pdf','ijazah_satpams/i9gUcyaUPz7CULLXKdoindZfheMvMemR2HyAKfze.jpeg','kks/fOcGEt0Tskd0Bpc58Am7edYBa7UGH65rd8USq8AX.png','fotos/b7IXQUIcSP4FafrAgNFIJ4xtXd8RdpRjQB7xAYPs.jpeg',''),
	(13,1234567891234567,'Testing','test','l','Jl Lidah Wetan Tengah Gg 1 RT/RW 3/1 Belakang warkop limolas, bapak umar es cincau\r\nNo 5','Kota Surabaya','2010-10-10','10','10','sma','085233573875','cs@telkomsel.co.id','123456',13,NULL,'2019-06-17 14:35:09','2019-06-17 14:35:09','cvs/V9gu771CoyjmJqwztp1LAloc63h338bFeEYE5s0p.pdf','ktps/88KUHDCIvSwq1g8CaoHW00h4CXieKONZRJixZzT7.png','ijazahs/uWkL097O3kF0kjxt75VghZXd3WLAS4roT7jxFdDF.png','ijazah_satpams/z7xT1dwdomkNcm0dB1pbHH5fBnf7PrfU7iZhswxH.png','kks/NJ4RdXoAOHF6BFyPRqgcYZiHI97nS2NH7DqpBCjB.png','fotos/p3Gq2BooiUQaUslHFnW7g5ExEZkPbXHYEDIup2Hu.png',''),
	(14,1234567891234569,'bianca','jodie','p','yogyakarta','yogyakarta','1996-01-01','158','150','s1','031233573875','jodie@gmail.com','jodie',14,NULL,'2019-06-18 04:19:04','2019-06-18 04:19:04','cvs/sBbIOTEoRwvFR27yzy8XY6nZVnVp9MEnvFTyBFo6.pdf','ktps/F1hjn3QYTGU93tOV5ttHA1ByPYcrZg2FQpRkK6JM.png','ijazahs/8zQGyEDPdGuXxMNPcX8CsecpfHEdrLmD9gkawcfc.png','ijazah_satpams/eEucJQxaDiCDCICxxTwgOQFD6DRyRzXR8S2s687p.png','kks/dpSpmDmryZFR0E8dssB79nnyTS8Nk2JGBwestkvF.png','fotos/msKVLFOMF5ZMKqVrQvfYPqqVWt1YMo9LJOnxnMtr.png','1,000,000'),
	(15,1234567891234562,'siti','badriah','p','Jl. srikandi bandung','bandung','2018-01-01','150','60','s1','085233573872','siti@gmail.com','siti',15,NULL,'2019-06-27 04:11:49','2019-06-27 04:11:49','cvs/6JFtM3NPzTFSKGzcFCqyiBnGsGzFfeZjXIc677rj.pdf','ktps/Wnfkn230TNNlL2W4UM9ewt7Dp6vx7vCJ0hJoDxjb.jpeg','ijazahs/294rWOhaRRVYaMZ4mEX1eVUi5G9T4MOgPwgEmbWM.jpeg','ijazah_satpams/H0KqF8VBiZpZGV6WF27YA2mJOzquioutGDEHKf3e.jpeg','kks/sxV3jHVj5raW8yn6zAF9VDvxWjPaVY7nnni5oLy4.jpeg','fotos/bgBkYowFM1Crd8mryxHevGieJbm476G6lRut6IdX.jpeg',''),
	(16,1234567891234561,'Reka','123','p','Lakarsantri 123','Kota Surabaya','2019-07-01','160','160','s1','085233573871','reka@gmail.com','reka',27,NULL,'2019-07-04 17:08:30','2019-07-04 17:08:30','cvs/U1iNNTxljZxjCsC0W0L8we48hQnQVvwgYFxbB5J3.pdf','ktps/ghUXJngncQNnQt9DB8CgOdZqI0J3vWssNJw5vUL1.pdf','ijazahs/GiUoJRlEdWXInZ2yTz3AFvObhE82bIxP0sn4WWoQ.pdf','ijazah_satpams/UpsgMCBNPHCKvdvfOhqGNJcPl0vuLwFLQbtBPiNh.pdf','kks/q3T2QeZwAdZZKHQ6WT0JYhNcXDOkFH0uG4Iqjez1.pdf','fotos/T0JMjXhqwQ67s5SwWh1u4TPcsrEDQbc48QgwHWYG.png','1,000,000'),
	(17,1234567891234562,'Renal','Di','l','Jeruk Lakar','Surabaya','2019-07-01','160','160','s1','085233573872','renal@gmail.com','renal',28,NULL,'2019-07-04 17:11:23','2019-07-04 17:11:23','cvs/q0v7oBjewVhzofTCtjScGI35IRrz3Gfx7y84Ip5c.pdf','ktps/M3n2xI1kyi0Hk9HpS2TcIhLfOdP8vFgCeUQdWyte.pdf','ijazahs/IrAqe51Ak5erFCnG8xp7ThAFkw5ncZCYGGAjauYh.pdf','ijazah_satpams/7YfAdW4bUsA0UvAkSSG3Umv769iFxZydewc72lFt.pdf','kks/3iRr5eVcCoAZZKouvb1yCHZmZFU0BIPb09fpnRsp.pdf','fotos/pYDWCwY1hX2a04i0CVrkpwIaQyoUcT9e5pSWvMmV.png','1,000,000'),
	(18,1234567891234561,'Dilan','Badriah','l','Jl Pepaya','Malang','2019-02-01','160','160','s1','085233573871','dilan@gmail.com','dilan',29,NULL,'2019-07-09 17:29:57','2019-07-09 17:29:57','cvs/LDwTiBpQK6a9Mv5dgLbiCaZyz6W4PqWnocm5iI1b.pdf','ktps/acm74f3FdUby9QNww64LZJzwMZk0NOT31rZqZauu.pdf','ijazahs/PQVqrYGpjOpshgP5b2NF7oRIZ5oiBZ3YDerKLv8O.pdf','ijazah_satpams/AuAba8B7A8xkW97yxAlGq8u8gyLzd5pCbQ3fo9By.pdf','kks/UibFQ1r2LzyV05EtPnjlc7z9Wv6mU6qDn9kZJba2.pdf','fotos/akSusbDKo63REDiwo4a4YtZLWaUkbvX0A1QNaqrL.png','900000'),
	(19,1234567891234563,'Jaka','Tingkir','l','Jl Semolowaru','Bangkalan','2019-07-01','160','160','s1','085233573872','jaka@gmail.com','jaka',30,NULL,'2019-07-09 17:53:08','2019-07-09 17:53:08','cvs/Vtil9SBedtNecv8jVyIybCJfVnh0EwSYF5zVTEg8.pdf','ktps/Skkg2cfbAK2wA8ZROqFlJFvzGta4f8ZeJnv0r7xu.pdf','ijazahs/koyBVSfNPIXmwk6MbL0rZ9gqIynsvEaeqcXlbjE4.pdf','ijazah_satpams/kmsRbmqOVfu9FjY1UOrbrDTN1ckicQa9UIdhz7ie.pdf','kks/tsx9YA0e4XKznoQeTnd4tRXGbscRPOKlMA5RAUUH.pdf','fotos/XicvsXJRamtgaC1J41nj3aZgIBsVcWePNcUligsJ.png','700000'),
	(20,1234567891234565,'Sintia','Agustin','p','Jl Keramat Krampung','Surabaya','2019-01-01','160','160','s1','085233573871','sintia@gmail.com','sintia',31,NULL,'2019-07-09 17:59:13','2019-07-09 17:59:13','cvs/TCVTEP26TllZAKevEkjkIqFecInTlpzOJ07taoOd.pdf','ktps/0Zetw0u3R0EyurgMxLTsuobrJl0GRthieRKTG4CC.pdf','ijazahs/5kOXEEgaSTA7FgnzeoEvqQ6C4isfEAl0ehcScbnI.pdf','ijazah_satpams/uejrqNE8OxxbmCuCQqLnEMpQlwb7nIoE3KzECnnC.pdf','kks/Jf1VDhhOc5FCM4FfmOy0Yi2BQBWyL5Ugi1APCq6a.pdf','fotos/8QLLnwqS7laYLUmhF19MpX2ITR95y7ypVhLbHxrg.png','700000'),
	(21,1234567891234562,'Mirdas','Kowich','l','Gresik','Gresik','2019-07-01','170','170','s1','085233573872','mirdas@gmail.com','mirdas',32,NULL,'2019-07-09 18:02:29','2019-07-09 18:02:29','cvs/kG2o3JrKOOdNU6P45XEZ45qaWQiZi4pXq8iRw1JR.pdf','ktps/X7yN4jwx9gMz1hBy2Hof7TUAqcdR4BWvbNYJeuvN.png','ijazahs/qtER5vYFyNMOw30sZq4xhqCCbPQGe89Z0y5Vz09d.pdf','ijazah_satpams/nY5CVuLj6SPJi7exhMXoG05flqR5UdYvbHYYPTun.png','kks/Cx2WadNnkwSwSxHo4vpQjb7UUqML02D4mnEZFE8W.pdf','fotos/OnqB8maz8XxctkfxjZMoPnIMGzWDSms5I9XA73md.png','800000'),
	(22,1234567891234561,'Rangga','Rangan','l','Gunung Kidul','Surabaya','2019-01-01','160','160','s1','085233573871','rangga@gmail.com','rangga',33,NULL,'2019-07-09 18:06:59','2019-07-09 18:06:59','cvs/LIDNMxLErf9K6GSN4szKBAun7jqgJmDB8KT9GlKb.pdf','ktps/cLt5rUOCCbRNDIpAyTihHoQ3hfpENEogWvQBOnpb.pdf','ijazahs/0ZroiaMq7o0LfDGhOLhDKIr6cKwZEkDpxmrApa7b.pdf','ijazah_satpams/41W2shylcc6DzqvAUS88Ho8ID58CeQVJH3UwXmPt.pdf','kks/qQPxJT2QMxP58v5PAKoMl4Uqj3vfF8tRNOPQY3LY.pdf','fotos/HhvgK6K1c4q9sJB9pa9Ijbf9J0PX3WUzAxMvGVTQ.png','900000'),
	(23,1234567891234565,'Gilang','Lanang','l','Jl Semolo','Jombang','1995-01-01','165','165','sma','085233573878','gilang@gmail.com','gilang',34,NULL,'2019-07-15 23:45:57','2019-07-15 23:45:57','cvs/ArHxoflt6698t9z15dmscNhNNgj7nu5fNLUSpB5q.pdf','ktps/sXJCiTWMSKlPfuFNdKVKZMzpZZ4i4fJCYl7q9OjU.pdf','ijazahs/sMOGiGvoqfxWSjd44DoutTijv3pmTKy1e5oXc7hx.pdf','ijazah_satpams/tHsP6CadsovNd33DPfu3WD7Hv2eTK2XsxGY9vnGK.pdf','kks/vW7xS7xPr20IgP7ixbqsFl6QTLlWkjkpX3PqJOnl.pdf','fotos/3veM4bqjBGHTlrCDn5eBnRcZE7tyEXmfFB0YJCAJ.png','900000'),
	(24,1234567891234569,'Rio','Stope','l','Jl Kalibrata No 4','Bandung','1996-01-01','165','65','s1','085233573873','rio@gmail.com','rio',35,NULL,'2019-07-18 05:42:28','2019-07-18 05:42:28','cvs/qOlwdtblZsWSOrTDTBASlKpJi3GdWlFndkDQNYFR.pdf','ktps/Yj96Imd2yGum633bBOVFdmYpCoi148eY80PYRB5Q.pdf','ijazahs/HMxJ4U2qlY8l82VvX04gENKgKTEXQ4YsP285o3DZ.pdf','ijazah_satpams/ajqMS19ndkCtKdOO2x9ahEYiuUo5KcvBLctT21WH.pdf','kks/ZIlSF92qRyyw5uinWsvxbNTOOmrDo2xzZvv2MN5o.png','fotos/pczN88iN9AVC774pNWnU2cmBzpQlIYG057HNcHyh.png','900000'),
	(25,1234567890,'Rima','Ali','p','Semolo Waru No 20','Surabaya','2019-07-26','165','65','d3','085233573872','rima@gmail.com','rima',36,NULL,'2019-07-26 17:23:47','2019-07-26 17:23:47','cvs/xQpT7p6fqHHzf9SZBnAsYrPMyx5QBOIZF1yOikLb.pdf','ktps/DJeppESZlxaNC3PfwxjZQYaPyl9F32skbJY0VWU6.pdf','ijazahs/gi5Ea5lhSahxuZuvj5JB17BGEWyK95Bg7mChl2AE.pdf','ijazah_satpams/0J22oWZvKYwsfSgCHOg0TO4BnRnN23ncpsB8fKFm.pdf','kks/r8ZmXwEuehQCSrayb5pg9FxzYYY3xRmxjwRvyYw7.pdf','fotos/rq6sjNd68fIPFQGQkiGTNBYCQLvObyE5xuSzeCgs.jpeg','700000');

/*!40000 ALTER TABLE `formulir` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table galleri
# ------------------------------------------------------------

DROP TABLE IF EXISTS `galleri`;

CREATE TABLE `galleri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table jadwal_pendaftarans
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jadwal_pendaftarans`;

CREATE TABLE `jadwal_pendaftarans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sertifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `jadwal_pendaftarans` WRITE;
/*!40000 ALTER TABLE `jadwal_pendaftarans` DISABLE KEYS */;

INSERT INTO `jadwal_pendaftarans` (`id`, `sertifikasi`, `tgl`, `kegiatan`, `gambar`, `created_at`, `updated_at`)
VALUES
	(1,'Gada Pratama','2019-07-20','Pendaftaran Online','gambars/eLsaaReBpxp7zuQ7X9dGTkEC1GdjCSPQVO8fMtpX.png','2019-07-19 17:34:22','2019-07-22 16:58:36'),
	(2,'Gada Madya','2019-07-22','Pendaftaran Online','gambars/Xy8q8NKTkgRvuNSQCKnlUfuVUKXUhXFR4C3cfQUc.jpeg','2019-07-20 05:56:01','2019-07-20 05:56:01'),
	(3,'Gada Utama','2019-07-23','Pendaftaran Online','gambars/tvHucvWQR5yFvtwxsbk8GWEjeUnvpgL3JJxUWeBz.jpeg','2019-07-20 13:00:30','2019-07-22 09:08:05');

/*!40000 ALTER TABLE `jadwal_pendaftarans` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jadwal_tuks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jadwal_tuks`;

CREATE TABLE `jadwal_tuks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hari` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `start_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_uji` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `jadwal_tuks` WRITE;
/*!40000 ALTER TABLE `jadwal_tuks` DISABLE KEYS */;

INSERT INTO `jadwal_tuks` (`id`, `hari`, `tanggal`, `start_time`, `end_time`, `daftar_uji`, `tuk`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,'Selasa','2019-05-17','10:00','12:00','Gada Utama','Jl Semolowaru No 50','30','2019-07-15 18:33:59','2019-07-15 18:33:59'),
	(2,'Rabu','2019-10-10','10:00','12:00','Gada Pratama','Semolo Waru No 50','34','2019-07-15 23:51:14','2019-07-15 23:51:14'),
	(3,'Rabu','2019-07-15','11:00','12:00','Gada Pratama','Jl Nginden No 8','31','2019-07-16 14:29:32','2019-07-16 14:29:32'),
	(4,'Kamis','2019-07-15','11:00','12:00','Gada Pratama','Jl Semolowaru No 501','34','2019-07-17 14:12:13','2019-07-17 14:12:13'),
	(5,'Jumat','2019-07-18','10:10','12:00','Gada Pratama','Jl Ngangel No 2','30','2019-07-17 16:47:59','2019-07-17 16:47:59'),
	(6,'Jumat','2019-07-19','10:00','11:00','Gada Madya','Jl Diponegoro','29','2019-07-18 03:49:49','2019-07-18 03:49:49'),
	(7,'Senin','2019-07-22','09:00','11:00','Gada Utama','Jl Jagir No 50','35','2019-07-18 05:50:44','2019-07-18 05:50:44'),
	(8,'Senin','2019-07-31','08:00','10:00','Gada Pratama','Jl Semolowaru No 50','36','2019-07-26 17:26:45','2019-07-26 17:26:45');

/*!40000 ALTER TABLE `jadwal_tuks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kontak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` int(15) NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kontak` WRITE;
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;

INSERT INTO `kontak` (`id`, `nama`, `email`, `tlp`, `pesan`, `gambar`, `created_at`, `updated_at`)
VALUES
	(1,'Joh cena','johncena@gmail.com',8533311,'<p>tes johncena</p>','gambars/dmJGeybkGPfJnNH0ilf96vZZ3KdIvlHHjskw6LvX.png','2019-04-22 15:33:21','2019-07-17 08:17:24'),
	(3,'kalajengking','kal@gmail.com',12312,'<p>kekeklamfea</p>','gambars/NUGGprPx8NZ029DAUm00erOEpvVDIevesqhLNgQU.png','2019-04-24 03:28:53','2019-06-28 05:37:03'),
	(6,'Rico','rico@gmail.com',823432,'<p>rico tiek</p>','gambars/kTmk4o3CPGfBeYnudQz2PeS5AcCMc1JNyHe8NMYN.png','2019-05-17 14:17:43','2019-07-17 08:17:38'),
	(7,'tes','dia@gmail.com',430214324,'okelahbro','gambars/y9ZGRfIxQBeqbrWB0N3MepBJADqN8TWTPNXo4WJI.png','2019-07-15 16:27:26','2019-07-15 16:27:26');

/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table layanan_kamis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `layanan_kamis`;

CREATE TABLE `layanan_kamis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(8,'2014_10_12_000000_create_users_table',1),
	(9,'2014_10_12_100000_create_password_resets_table',1),
	(10,'2019_03_17_201353_create_categories_table',1),
	(11,'2019_03_18_110609_create_posts_table',1),
	(12,'2019_03_18_111809_create_comments_table',1),
	(13,'2019_04_14_082230_create_beranda_table',1),
	(17,'2019_04_21_162103_create_flights_table',2),
	(18,'2019_04_21_163010_create_layanan_kamis_table',3),
	(19,'2019_04_17_151815_create_kontak_table',4),
	(21,'2019_05_10_135141_create__formulir_table',5),
	(23,'2019_05_28_122918_add_column_files',6),
	(27,'2019_06_26_165456_create_skemapendaftarans_table',7),
	(28,'2019_07_04_163140_add_column_to_formulir',8),
	(34,'2019_06_07_073700_create_pembayaran_table',9),
	(39,'2019_07_13_164244_create_galleri_table',12),
	(40,'2019_07_12_014145_create_jadwal_tuks_table',13),
	(43,'2019_07_16_125402_create_sertifikasis_table',14),
	(44,'2019_07_19_163412_create_jadwal_pendaftarans_table',15);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table pembayaran
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyetor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_kartu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `pembayaran` WRITE;
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;

INSERT INTO `pembayaran` (`id`, `user_id`, `nama_penyetor`, `nomor_kartu`, `cvc`, `bulan`, `tahun`, `biaya`, `created_at`, `updated_at`)
VALUES
	(1,'29','Dilan Badriah','4242424242424242','123','10','2020','900000','2019-07-12 01:48:05','2019-07-12 01:48:05'),
	(2,'30','Jaka Tingkir','4565533650055022','123','10','2020','700000','2019-07-12 17:28:47','2019-07-12 17:28:47'),
	(3,'34','Gilang Lanang','4242424242424242','123','05','2020','900000','2019-07-15 23:48:48','2019-07-15 23:48:48'),
	(4,'31','Sintia Agustin','4242424242424242','123','10','2020','700000','2019-07-16 13:34:53','2019-07-16 13:34:53'),
	(5,'35','Rio Stope','4000056655665556','123','10','2020','900000','2019-07-18 05:47:17','2019-07-18 05:47:17'),
	(6,'36','Rima Diana','4242424242424242','123','10','2020','700000','2019-07-26 17:25:22','2019-07-26 17:25:22');

/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table penduduks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `penduduks`;

CREATE TABLE `penduduks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIK` bigint(20) NOT NULL,
  `nama_depan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `penduduks` WRITE;
/*!40000 ALTER TABLE `penduduks` DISABLE KEYS */;

INSERT INTO `penduduks` (`id`, `NIK`, `nama_depan`, `nama_belakang`, `gender`, `alamat`, `tempat_lahir`, `tgl_lahir`, `created_at`, `updated_at`)
VALUES
	(1,1234567890,'Rima','Diana','P','Semolo Waru No 20','surabaya','2019-07-26','2019-07-26 23:47:33','2019-07-26 23:47:33'),
	(2,1234567890123457,'Adipati ','Dolken','L','Wonokromo Gang 2','Surabaya','2019-07-27','2019-07-27 00:20:59','2019-07-27 00:20:59');

/*!40000 ALTER TABLE `penduduks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_category_id_foreign` (`category_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table sertifikasis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sertifikasis`;

CREATE TABLE `sertifikasis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jadwal_tuks_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `pembayaran_id` int(10) unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sertifikasis` WRITE;
/*!40000 ALTER TABLE `sertifikasis` DISABLE KEYS */;

INSERT INTO `sertifikasis` (`id`, `jadwal_tuks_id`, `user_id`, `pembayaran_id`, `status`, `created_at`, `updated_at`)
VALUES
	(1,2,31,4,'kompeten','2019-07-16 14:56:01','2019-07-17 16:44:38'),
	(2,4,34,3,NULL,'2019-07-17 14:12:13','2019-07-17 14:12:13'),
	(3,5,30,2,'belumkompeten','2019-07-17 16:47:59','2019-07-17 16:52:16'),
	(4,6,29,1,NULL,'2019-07-18 03:49:49','2019-07-18 03:49:49'),
	(5,7,35,5,'kompeten','2019-07-18 05:50:44','2019-07-18 05:52:20'),
	(6,8,36,6,'kompeten','2019-07-26 17:26:45','2019-07-26 17:27:40');

/*!40000 ALTER TABLE `sertifikasis` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skemapendaftarans
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skemapendaftarans`;

CREATE TABLE `skemapendaftarans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `skemapendaftarans` WRITE;
/*!40000 ALTER TABLE `skemapendaftarans` DISABLE KEYS */;

INSERT INTO `skemapendaftarans` (`id`, `judul`, `gambar`, `info`, `skema`, `biaya`, `created_at`, `updated_at`)
VALUES
	(1,'Gada Pratama','gambars/quUJKzcMvfXGYpzqjGCMdYApkETiKPUv000RdS2i.jpeg','Spesifikasi level ini adalah memahami dan mengerjakan tugas, fungsi dan peranan sekuriti sebagai pelaksana tugas pengamanan','<p><strong>Level I Dasar&nbsp; -&nbsp; Gada Pratama</strong></p>\r\n\r\n<p>1. SEC.PM01.001.01 - Melaksanakan persiapan untuk menjalankan tugas sebagai petugas sekuriti</p>\r\n\r\n<p>2. SEC.PM01.002.01 - Melakukan baris-berbaris dan Penghormatan Militer</p>\r\n\r\n<p>3. SEC.PM01.003.01 - Melakukan beladiri</p>\r\n\r\n<p>4. SEC.PM01.004.01 - Melakukan Pencatatan dan pelaporan</p>\r\n\r\n<p>5. SEC.PM01.005.01 - Berkomunikasi melalui telepon</p>','700000','2019-06-27 10:41:23','2019-07-16 08:12:24'),
	(2,'Gada Madya','gambars/bXQfAtaZeJx1ILtZUWxmKxJzKBNfJqfelBJONN2B.jpeg','Spesifikasi level ini adalah memahami dan melaksanakan tugas sebagai Supervisor dalam mengatur tugas, fungsi dan peran sekuriti. Untuk memperoleh sertifikat kompetensi level II, maka seorang peserta UJK mutlak harus memiliki terlebih dahulu sertifikat kompetensi level I','<p><strong>Level II &ndash; Supervisor atau disebut juga Gada Madya</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1 SEC.PM01.001.01 - Melaksanakan persiapan untuk menjalankan tugas sebagai petugas sekuriti</p>\r\n\r\n<p>2. SEC.PM01.002.01 - Melakukan baris-berbaris dan Penghormatan Militer</p>\r\n\r\n<p>3. SEC.PM01.003.01 - Melakukan beladiri</p>\r\n\r\n<p>4. SEC.PM01.004.01 - Melakukan Pencatatan dan pelaporan</p>\r\n\r\n<p>5. SEC.PM01.005.01 - Berkomunikasi melalui telepon</p>\r\n\r\n<p>6. SEC.PMO2.001.01 - Mengenal senjata api dan bahan peledak&nbsp;</p>\r\n\r\n<p>7. SEC.PMO2.002.01 - Mengatur dan menegakkan tata tertib yang berlaku di lingkungan kerja&nbsp;</p>\r\n\r\n<p>8. SEC.PMO2.003.01 - Melakukan penjagaan untuk mengawasi dan mengamankan keluar masuknya lalu-lintas orang dan barang&nbsp;</p>\r\n\r\n<p>9. SEC.PMO2.004.01 - Melakukan perondaan patroli di sekitar kawasan kerja&nbsp;</p>\r\n\r\n<p>10. SEC.PMO2.005.01 - Mengawal uang, barang-barang berharga dan tahanan&nbsp;</p>\r\n\r\n<p>11. SEC.PMO2.006.01 - Melakukan tindakan pertama di Tempat Kejadian Perkara/ Tindak Pidana&nbsp;</p>\r\n\r\n<p>12. SEC.PMO2.007.01 - Menjaga, menggunakan sistem perlindungan dan pendeteksian&nbsp;</p>\r\n\r\n<p>13. SEC.PMO2.008.01 - Melakukan pencegahan bahaya kebakaran dan ancaman peledakan born&nbsp;</p>\r\n\r\n<p>14. SEC.PMO2.009.01 - Menginterpretasikan informasi tanda bahaya&nbsp;</p>\r\n\r\n<p>15. SEC.PMO2.010.01 - Menentukan dan menggunakan petugas sekuriti yang memadai untuk mengawasi akses menuju dan keluar lokasi&nbsp;</p>\r\n\r\n<p>16. SEC.PMO2.011.01 - Melakukan Intelijen Dasar</p>\r\n\r\n<p>17. SEC.PMO2.012.01 - Melakukan Administrasi di kantor</p>\r\n\r\n<p>18. SEC.PMO2.016.01 - Mengoperasikan perlengkapan dasar komunikasi</p>\r\n\r\n<p>19. SEC.PM03.001.01 - Berkomunikasi dalam Bahasa Inggris</p>\r\n\r\n<p>20. SEC.PM03.002.01 - Melakukan komunikasi dengan bahasa sandi dan bahasa isyarat</p>\r\n\r\n<p>21. SEC.PM03.004.01 -&nbsp;Menangani anjing-anjing untuk patroli&nbsp;</p>','800000','2019-06-27 10:46:14','2019-07-16 08:27:59'),
	(3,'Gada Utama','gambars/exJCSoKbQpmdFBlPAyOFfTRZpXSkdJc4XJNIs38X.jpeg','Spesifikasi pada level ini adalah memahami dan mengamati, menjelaskan, mendengar, meringkas dan umpan balik serta memecahkan masalah, selanjutnya membangun kerjasama serta melakukan analisa. Untuk memperoleh sertifikat kompetensi level III, maka seorang peserta UJK mutlak harus memiliki terlebih dahulu sertifikat kompetensi level II, sehingga peserta UJK yang bersangkutan harus menguasai dan lulus unit-unit kompetensi berikut :','<p><strong>Level III &ndash; Manajer atau disebut juga Gada Utama</strong></p>\r\n\r\n<p>1 SEC.PM01.001.01 - Melaksanakan persiapan untuk menjalankan tugas sebagai petugas sekuriti</p>\r\n\r\n<p>2. SEC.PM01.002.01 - Melakukan baris-berbaris dan Penghormatan Militer</p>\r\n\r\n<p>3. SEC.PM01.003.01 - Melakukan beladiri</p>\r\n\r\n<p>4. SEC.PM01.004.01 - Melakukan Pencatatan dan pelaporan</p>\r\n\r\n<p>5. SEC.PM01.005.01 - Berkomunikasi melalui telepon</p>\r\n\r\n<p>6. SEC.PMO2.001.01 - Mengenal senjata api dan bahan peledak&nbsp;</p>\r\n\r\n<p>7. SEC.PMO2.002.01 - Mengatur dan menegakkan tata tertib yang berlaku di lingkungan kerja&nbsp;</p>\r\n\r\n<p>8. SEC.PMO2.003.01 - Melakukan penjagaan untuk mengawasi dan mengamankan keluar masuknya lalu-lintas orang dan barang&nbsp;</p>\r\n\r\n<p>9. SEC.PMO2.004.01 - Melakukan perondaan patroli di sekitar kawasan kerja&nbsp;</p>\r\n\r\n<p>10. SEC.PMO2.005.01 - Mengawal uang, barang-barang berharga dan tahanan&nbsp;</p>\r\n\r\n<p>11. SEC.PMO2.006.01 - Melakukan tindakan pertama di Tempat Kejadian Perkara/ Tindak Pidana&nbsp;</p>\r\n\r\n<p>12. SEC.PMO2.007.01 - Menjaga, menggunakan sistem perlindungan dan pendeteksian&nbsp;</p>\r\n\r\n<p>13. SEC.PMO2.008.01 - Melakukan pencegahan bahaya kebakaran dan ancaman peledakan born&nbsp;</p>\r\n\r\n<p>14. SEC.PMO2.009.01 - Menginterpretasikan informasi tanda bahaya&nbsp;</p>\r\n\r\n<p>15. SEC.PMO2.010.01 - Menentukan dan menggunakan petugas sekuriti yang memadai untuk mengawasi akses menuju dan keluar lokasi&nbsp;</p>\r\n\r\n<p>16. SEC.PMO2.011.01 - Melakukan Intelijen Dasar</p>\r\n\r\n<p>17. SEC.PMO2.012.01 - Melakukan Administrasi di kantor</p>\r\n\r\n<p>18. SEC.PMO2.016.01 - Mengoperasikan perlengkapan dasar komunikasi</p>\r\n\r\n<p>19. SEC.PM03.001.01 - Berkomunikasi dalam Bahasa Inggris</p>\r\n\r\n<p>20. SEC.PM03.002.01 - Melakukan komunikasi dengan bahasa sandi dan bahasa isyarat</p>\r\n\r\n<p>21. SEC.PM03.004.01 -&nbsp;Menangani anjing-anjing untuk patroli</p>\r\n\r\n<p>22. SEC.PMO2.017.01 - Melakukan K3</p>\r\n\r\n<p>23. SEC.PMO2.018.01 - Melakukan sistem penilaian kerja</p>\r\n\r\n<p>24. SEC.PMO2.019.01 - Merencanakan sistem dan prosedur</p>\r\n\r\n<p>25. SEC.PMO2.020.01 - Menyediakan keamanan untuk tamu VIP</p>\r\n\r\n<p>26. SEC.PM03.001.01 - Berkomunikasi dalam Bahasa Inggris</p>\r\n\r\n<p>27. SEC.PM03.002.01 - Melakukan komunikasi dengan bahasa sandi dan bahasa isyarat</p>\r\n\r\n<p>28. SEC.PM03.003.01 - Mengkoordinasikan anak buah dalam upaya memimpin regu atau peleton</p>\r\n\r\n<p>29. SEC.PM03.004.01 - Menangani anjing-anjing untuk patroli&nbsp;<br />\r\n&nbsp;</p>','900000','2019-06-27 10:53:08','2019-07-16 08:25:05');

/*!40000 ALTER TABLE `skemapendaftarans` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`)
VALUES
	(1,'admin','ali','ali@gmail.com','$2y$10$jLaWD3QXO9yJPuy5UUlYHuU3NQ8FK6krkOvQbOUV0kJi1o0f1VE6y','1e3GdKD8VRoMYifVq6UGB2XP1diSUPKTCGRF7vxl4sxuoQuiEwQVERnTZhig',NULL,'2019-04-17 16:18:17','2019-04-17 16:18:17'),
	(2,'user','Orio','orio@gmail.com','$2y$10$Ll.orAKBRs5LD/x2ogDWJu1wk5M089jmiRLZ16sYuSBtThXfHZX/K','0gol2wGCNpHlMa9HxfpAIKm4CaJ7xfQFnQUPpPshbGopV2bUkp872OgG62er',NULL,'2019-05-21 16:40:11','2019-05-21 16:40:11'),
	(3,'user','roti','roti@gmail.com','$2y$10$FffZJ6KFiqWE.gpM/Z8.muyYt/OujeiIuuwrPT8Um/iGb/mJjxz2.','4wbZNQGmhZAgT5x2ASGWLBgBmjBefbQUWjRydwlx9FCtWovecTb3a7CLJjoR',NULL,'2019-05-22 21:16:42','2019-05-22 21:16:42'),
	(6,'admin','kipasangin','kipasangin@gmail.com','$2y$10$j2lrs3E5UPZ.LBPlGr13/OwwosmJemigegjnUIrGSeuAvtK.zlSsa','kp6NDJcUSwohFDeIYyFBXvCAv6jwqAJSwDQvBI47n5zCHdyFRvgRGdD2XgF4',NULL,'2019-05-22 21:25:57','2019-05-22 21:25:57'),
	(7,'user','deni','deni@gmail.com','$2y$10$UukqWeG1mhxXi.9BC15EcuD/8CC4P/ZY97N4C9UXX0zaFBK1DQPni',NULL,NULL,'2019-05-28 12:40:01','2019-05-28 12:40:01'),
	(8,'user','iwak','iwak@gmail.com','$2y$10$A41yMcx1nSjNOphPVNdZGOywg9bvtywJhpwYCMHJn/V1ZBgfh6m1u',NULL,NULL,'2019-05-28 13:05:15','2019-05-28 13:05:15'),
	(10,'user','iwak','lele@gmail.com','$2y$10$LixdtVXLEh.zWPnmEoJZfeYG0EP.xhKEbtr.aqXZ8neihtGzCD0Le','I07iZwADp2JEbeIndatZapqkviHPiR5q6C1Majai3XmpHx9kAQ2lYSOCUwFr',NULL,'2019-05-28 13:08:28','2019-05-28 13:08:28'),
	(11,NULL,'nanas','nanas@gmail.com','$2y$10$NwCh4YST1IFSZbW1fwj0j.jfLRsCAzDisi9x1SEwnZxDTM3Z9oIdS','7HEAx17cGBVpRzyV2nJWyEd6a7pqGLHaEmLnAqBf21iaS2XHvRcpv9GSsiqF','2019-05-29 12:56:31','2019-05-29 12:55:49','2019-05-29 12:56:31'),
	(12,'user','Johan','cokelat@gmail.com','$2y$10$01Yu4UC/ehBBkWF627F.heS.xGQFZpgk3Z.2PzSQSb8YQTPpIIJWm','Vig7omTxG2jX7AkpKuDFa28Ezzn9kOxwIR9btcmZ5yFLG8ra2tYxgxC6AGB6',NULL,'2019-06-17 14:34:02','2019-06-17 14:34:02'),
	(13,'user','Testing','cs@telkomsel.co.id','$2y$10$ba6LTbwWjeqqJsGpO17.zuGUqyqsVJwvBp9dUeg7Lw7WbZ3nhd7Xu',NULL,NULL,'2019-06-17 14:35:09','2019-06-17 14:35:09'),
	(14,'user','bianca','jodie@gmail.com','$2y$10$rdigPZgpb33uIq2YZ4yOW.f5Itmp3RZXTS83QT0LGe1LxFFuvWkg.','RIa8qn3HNK1WWhuD3s1sZNmlnPwX5udUl3y4rQAjT7381C1y80YcWUUx2C2i',NULL,'2019-06-18 04:19:04','2019-06-18 04:19:04'),
	(15,'user','siti','siti@gmail.com','$2y$10$hmdxn1c8D4MsoMjZVNihpu1PMVVaL5jVbQu1TfXcSajdyYc3Ih87a','eWO8u4rAWsfAzUuqlsGZ3zhgP1ZozTTnmXhVmFgKkfpGCY5jvy2My9S7LAZW',NULL,'2019-06-27 04:11:49','2019-06-27 04:11:49'),
	(16,'user','Cinta','laura@gmail.com','$2y$10$NJlhRhf17Kyu.uuZvZIfGOMxAN2GeMq3EdKM1evdwBhja6mz8Y/56',NULL,NULL,'2019-07-04 16:53:42','2019-07-04 16:53:42'),
	(18,'user','Cinta','cinta@gmail.com','$2y$10$Kd/e0LEoh9mscXenLW5VqOzuNGZps3OT/1j4L8ZdjUJYBIGEjfDTK',NULL,NULL,'2019-07-04 16:54:48','2019-07-04 16:54:48'),
	(20,'user','Ariel','tatum@gmail.com','$2y$10$rgr9/PH2Vy.7h9umLHsBouObbCDAxWlloC3QxQam.mHSD0K7f8jOa',NULL,NULL,'2019-07-04 16:59:51','2019-07-04 16:59:51'),
	(21,'user','Ariel','tatum1@gmail.com','$2y$10$M/2k8.Eec.0HniMcB9N3R.m2A/pvihlNTB9IKNDZW/TtAxAQ/O90e',NULL,NULL,'2019-07-04 17:01:29','2019-07-04 17:01:29'),
	(22,'user','Nina','nina@gmail.com','$2y$10$jtiaQIond4WBl5iyw2BLC.9zi4iH635HzU8Ks1Y/DnvS1KHzHCLeG',NULL,NULL,'2019-07-04 17:04:43','2019-07-04 17:04:43'),
	(25,'user','Nina','nina1@gmail.com','$2y$10$w.3vyPo/vVODxutfh0oht.ujcEq5PccH7qRAnbzVEVWPZm08N4Ju.',NULL,NULL,'2019-07-04 17:06:34','2019-07-04 17:06:34'),
	(27,'user','Reka','reka@gmail.com','$2y$10$WGitY7C2y8aECxEbcMwF6eC5RT.tWa.SyIGce2u2LTMSffFD8kIPa','bTU0CCBOHrB8SnzdNP95scW8jJmjlNYdFSjvqvUjsixIs6wo7IYnSvOCaNpB',NULL,'2019-07-04 17:08:30','2019-07-04 17:08:30'),
	(28,'user','Renal','renal@gmail.com','$2y$10$puu0v0Np6x8fHu1wSygwm.F1kWpOXUh2EGaBPguOfpPzGkiwEJ11C','QVFZavDuk384WBwDeerKI0tM2xeZUER7YSJrSpb0HYCSKi0zhygr9xAa9Yxf',NULL,'2019-07-04 17:11:23','2019-07-04 17:11:23'),
	(29,'user','Dilan','dilan@gmail.com','$2y$10$JgnNLS6LnGiKZLpFFKSK2unjLWaWO6N32DOXjsFtqGAgOHqAdJ4Pu','dE55Y9dDJpR1Hw9q2eRMjr98szKvtIbsTh0GUCHqSgOWWwiI8Am9AmEixiKq',NULL,'2019-07-09 17:29:57','2019-07-09 17:29:57'),
	(30,'user','Jaka','jaka@gmail.com','$2y$10$Xg2B4k6eF6FEK.zfEHBj4OWXH/KB5FXXz8tJjGfyIoG9bqxSg9wYi','MmrgCQjWMSMhl1Vl4DmSWASAB1WuYklLl28dCRZRVkbcbTxVLexip4ss0HW9',NULL,'2019-07-09 17:53:08','2019-07-09 17:53:08'),
	(31,'user','Sintia','sintia@gmail.com','$2y$10$CiGB/N6flE9TxYbVeqrV9.rdUjwmA/MlIAMFdcY9D3vWwgA7fCkSe','jMkoC4JVeLSWW9MBjgkFm0FL90QGUvesYx3Ob8YUULMPRQ3J67DzZNb3e3j9',NULL,'2019-07-09 17:59:13','2019-07-09 17:59:13'),
	(32,'user','Mirdas','mirdas@gmail.com','$2y$10$dDOr/fE4tPhtiePmr60uuOf8WPS2Jbr0nDkEh4xC1f7EhiLG86Yg2','NWMJorX6yzwJov6dhWztV37xosF4ne4SQEeNG6dcZc7b3sPVrC9nefSzdfMN',NULL,'2019-07-09 18:02:29','2019-07-09 18:02:29'),
	(33,'user','Rangga','rangga@gmail.com','$2y$10$sGmt65aLNoSjkKGEaTyTX.PrywcbO/zaIiLcL9s8TztyC9jodbEbq',NULL,NULL,'2019-07-09 18:06:59','2019-07-09 18:06:59'),
	(34,'user','Gilang','gilang@gmail.com','$2y$10$MK/emMemV6NO7TbLQdwL7.ffINNpM4t0UIpX/9vO.bPsqmgHjhuse','nGIW9vP6vmzu0arKk807oQ8DBgQbVcZNl6DqCxkfgmdLe0sz3NS3TxWx8wKm',NULL,'2019-07-15 23:45:57','2019-07-15 23:45:57'),
	(35,'user','Rio','rio@gmail.com','$2y$10$/HGqopCd3bnz3ygOIzAoEeJ4jw8gQoXEutiaXwXKo90rr67J6r7dO',NULL,NULL,'2019-07-18 05:42:27','2019-07-18 05:42:27'),
	(36,'user','Rima','rima@gmail.com','$2y$10$kge2Nvel6sAHYwjSxx8uReb5RayuA5.UNJlQiRs2DQ7Tlt9TVtEDa','oK1ZTLNtYBWbTN6xazMsAOut61kOqrI6Mpa9y2BsyqT4r2kZKo3W1IgF70LM',NULL,'2019-07-26 17:23:47','2019-07-26 17:23:47');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
