/*
 Navicat Premium Data Transfer

 Source Server         : localhost_new3306
 Source Server Type    : MySQL
 Source Server Version : 80017
 Source Host           : localhost:3306
 Source Schema         : db_wp_app

 Target Server Type    : MySQL
 Target Server Version : 80017
 File Encoding         : 65001

 Date: 21/08/2020 16:03:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_13_191559_spp_karyawan', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_13_191624_spp_user', 1);
INSERT INTO `migrations` VALUES (6, '2019_12_13_191642_spp_kelas', 1);
INSERT INTO `migrations` VALUES (7, '2019_12_13_191705_spp_jurusan', 1);
INSERT INTO `migrations` VALUES (8, '2019_12_13_191755_spp_orangtua', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_13_191813_spp_transaksi', 1);
INSERT INTO `migrations` VALUES (10, '2019_12_13_191836_spp_status_transaksi', 1);
INSERT INTO `migrations` VALUES (11, '2019_12_13_191853_spp_role', 1);
INSERT INTO `migrations` VALUES (12, '2019_12_13_191956_spp_detail_user', 1);
INSERT INTO `migrations` VALUES (13, '2019_12_13_194906_spp_siswa', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for spp_detail_user
-- ----------------------------
DROP TABLE IF EXISTS `spp_detail_user`;
CREATE TABLE `spp_detail_user`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` bigint(20) NULL DEFAULT NULL,
  `nisn` bigint(20) NULL DEFAULT NULL,
  `id_orangtua` bigint(20) NULL DEFAULT NULL,
  `id_user` bigint(20) NULL DEFAULT NULL,
  `role` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_detail_user
-- ----------------------------
INSERT INTO `spp_detail_user` VALUES (2, NULL, 3257021109960019, 3275021109960022, 2, 2, '2019-12-26 05:59:26', '2019-12-26 05:59:26');
INSERT INTO `spp_detail_user` VALUES (3, 327021109980017, NULL, NULL, 3, 4, '2019-12-29 07:37:32', '2019-12-29 08:02:59');
INSERT INTO `spp_detail_user` VALUES (4, 327021109980017, NULL, NULL, 4, 4, '2019-12-29 07:37:54', '2019-12-29 08:02:59');
INSERT INTO `spp_detail_user` VALUES (5, NULL, 3257021109960019, 3275021109960022, 1, 1, '2019-12-26 05:59:25', '2019-12-27 18:33:28');
INSERT INTO `spp_detail_user` VALUES (6, 327021109980017, 3257021109960019, 3275021109960022, 5, 0, '2019-12-31 02:53:39', '2019-12-31 02:53:39');
INSERT INTO `spp_detail_user` VALUES (7, NULL, 3257021109960019, 3275021109960022, 6, 2, '2019-12-31 02:53:39', '2019-12-31 02:53:39');
INSERT INTO `spp_detail_user` VALUES (8, NULL, 317507261, 37162837493, 7, 1, '2020-01-03 18:27:21', '2020-01-03 18:27:21');
INSERT INTO `spp_detail_user` VALUES (9, NULL, 317507261, 37162837493, 8, 2, '2020-01-03 18:27:22', '2020-01-03 18:27:22');
INSERT INTO `spp_detail_user` VALUES (10, NULL, 317507261, 37162837493, 9, 1, '2020-01-03 18:29:57', '2020-01-03 18:29:57');
INSERT INTO `spp_detail_user` VALUES (11, NULL, 317507261, 37162837493, 10, 2, '2020-01-03 18:30:00', '2020-01-03 18:30:00');
INSERT INTO `spp_detail_user` VALUES (12, NULL, 301245879, 30124515452, 11, 1, '2020-01-27 13:59:38', '2020-01-27 13:59:38');
INSERT INTO `spp_detail_user` VALUES (13, NULL, 301245879, 30124515452, 12, 2, '2020-01-27 13:59:39', '2020-01-27 13:59:39');
INSERT INTO `spp_detail_user` VALUES (14, 3175070098, NULL, NULL, 13, 4, '2020-01-27 14:28:59', '2020-01-27 14:28:59');
INSERT INTO `spp_detail_user` VALUES (15, 317598658, NULL, NULL, 14, 3, '2020-01-27 15:01:54', '2020-01-27 15:01:54');

-- ----------------------------
-- Table structure for spp_jurusan
-- ----------------------------
DROP TABLE IF EXISTS `spp_jurusan`;
CREATE TABLE `spp_jurusan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jurusan_text` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_jurusan
-- ----------------------------
INSERT INTO `spp_jurusan` VALUES (2, 'Teknik Kendara Ringan', '2019-12-29 05:24:30', '2020-01-27 14:36:44');

-- ----------------------------
-- Table structure for spp_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `spp_karyawan`;
CREATE TABLE `spp_karyawan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` bigint(13) NULL DEFAULT NULL,
  `nama_karyawan_text` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tpt_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_karyawan
-- ----------------------------
INSERT INTO `spp_karyawan` VALUES (3, 3175070098, 'Ati Sahati', 'Kuningan', '2019-02-13', 'P', 'Jl. Bekasi Raya', '082165258987', '2020-01-27 14:28:59', '2020-01-27 14:28:59');
INSERT INTO `spp_karyawan` VALUES (4, 317598658, 'Sri Rahayu', 'Cirebon', '2019-02-06', 'P', 'Jl. Cipinang Muara', '082146578958', '2020-01-27 15:01:54', '2020-01-27 15:01:54');

-- ----------------------------
-- Table structure for spp_kelas
-- ----------------------------
DROP TABLE IF EXISTS `spp_kelas`;
CREATE TABLE `spp_kelas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kelas_text` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_kelas
-- ----------------------------
INSERT INTO `spp_kelas` VALUES (2, '10', NULL, '2019-12-29 05:06:54');
INSERT INTO `spp_kelas` VALUES (5, '11', '2019-12-29 05:00:24', '2019-12-29 05:07:00');
INSERT INTO `spp_kelas` VALUES (6, '12', '2019-12-29 05:07:25', '2019-12-29 05:07:25');

-- ----------------------------
-- Table structure for spp_orangtua
-- ----------------------------
DROP TABLE IF EXISTS `spp_orangtua`;
CREATE TABLE `spp_orangtua`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_orangtua_text` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_orangtua` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_orangtua
-- ----------------------------
INSERT INTO `spp_orangtua` VALUES (2, 'Ibnu Supriyanto', '3275021109960022', '0218865634', '2019-12-31 02:53:38', '2019-12-31 02:53:38');
INSERT INTO `spp_orangtua` VALUES (3, 'Sri', '37162837493', '081365289292', '2020-01-03 18:27:17', '2020-01-03 18:27:17');
INSERT INTO `spp_orangtua` VALUES (4, 'Sri', '37162837493', '081365289292', '2020-01-03 18:29:53', '2020-01-03 18:29:53');
INSERT INTO `spp_orangtua` VALUES (5, 'ayu', '30124515452', '08126542897', '2020-01-27 13:59:38', '2020-01-27 13:59:38');

-- ----------------------------
-- Table structure for spp_role
-- ----------------------------
DROP TABLE IF EXISTS `spp_role`;
CREATE TABLE `spp_role`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jabatan_text` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 100 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_role
-- ----------------------------
INSERT INTO `spp_role` VALUES (0, NULL, 'Admin', NULL, NULL);
INSERT INTO `spp_role` VALUES (1, '2', 'Siswa', NULL, NULL);
INSERT INTO `spp_role` VALUES (2, NULL, 'Wali Murid', NULL, NULL);
INSERT INTO `spp_role` VALUES (3, NULL, 'Kepala Sekolah', '2019-12-29 06:06:42', '2019-12-29 06:06:42');
INSERT INTO `spp_role` VALUES (4, '3', 'Tata Usaha', '2019-12-29 06:07:15', '2019-12-29 06:18:08');

-- ----------------------------
-- Table structure for spp_siswa
-- ----------------------------
DROP TABLE IF EXISTS `spp_siswa`;
CREATE TABLE `spp_siswa`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nisn` bigint(20) NOT NULL,
  `nama_siswa_text` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tpt_lahir` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` bigint(20) NULL DEFAULT NULL,
  `kelas` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_siswa
-- ----------------------------
INSERT INTO `spp_siswa` VALUES (4, 317507261, 'Agung Satriyo', 'Jakarta', '1996-09-26', 'Jl. Cipinang Muara 2 No. 14 RT/RW 009/02 Kel: Pondok Bambu, Kec: Duren Sawit Jakarta Timur', 'L', 2, 5, '2020-01-03 18:27:16', '2020-01-03 18:27:16');
INSERT INTO `spp_siswa` VALUES (5, 317507261, 'Agung Satriyo', 'Jakarta', '1996-09-26', 'Jl. Cipinang Muara 2 No. 14 RT/RW 009/02 Kel: Pondok Bambu, Kec: Duren Sawit Jakarta Timur', 'L', 2, 5, '2020-01-03 18:29:51', '2020-01-03 18:29:51');
INSERT INTO `spp_siswa` VALUES (6, 301245879, 'Ary WIdodo', 'Jakarta', '2017-08-09', 'Jl. Tebet Raya', 'L', 2, 2, '2020-01-27 13:59:37', '2020-01-27 13:59:37');

-- ----------------------------
-- Table structure for spp_status_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `spp_status_transaksi`;
CREATE TABLE `spp_status_transaksi`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status_text` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_status_transaksi
-- ----------------------------
INSERT INTO `spp_status_transaksi` VALUES (1, 'Draft', NULL, NULL);
INSERT INTO `spp_status_transaksi` VALUES (2, 'In Progress', NULL, NULL);
INSERT INTO `spp_status_transaksi` VALUES (3, 'Rejected', NULL, NULL);
INSERT INTO `spp_status_transaksi` VALUES (4, 'Approved', NULL, NULL);
INSERT INTO `spp_status_transaksi` VALUES (5, 'Deleted', NULL, NULL);

-- ----------------------------
-- Table structure for spp_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `spp_transaksi`;
CREATE TABLE `spp_transaksi`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `refid` bigint(20) NULL DEFAULT NULL,
  `kode_transaksi` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bayar` bigint(20) NOT NULL,
  `nama_siswa` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_orangtua` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `step` int(11) NOT NULL,
  `konseptor_nama` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `konseptor_jabatan` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approver_nama` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approver_jabatan` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(11) NULL DEFAULT NULL,
  `tahun_ajaran` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL,
  `tgl_submit` timestamp(0) NOT NULL,
  `tgl_approve` timestamp(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `bukti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for spp_user
-- ----------------------------
DROP TABLE IF EXISTS `spp_user`;
CREATE TABLE `spp_user`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spp_user
-- ----------------------------
INSERT INTO `spp_user` VALUES (5, '3257021109960019', 'superadmin', '$2y$12$aikjsWUsqXEB.A9U8VOCzuJF9QJSzUQHg3GAdvAiFkFhvPI0GJVGe', '2020-05-23 00:18:37', '2019-12-31 02:53:39', '2020-05-23 00:18:37');
INSERT INTO `spp_user` VALUES (6, '3275021109960022', '0218865634', '$2y$12$/gRG56nMZ8ByvEoEaBLEaOHErEnkbDm1aWrFXgAj2xosc5uuAJxbW', '2019-12-31 11:31:37', '2019-12-31 02:53:39', '2019-12-31 11:31:37');
INSERT INTO `spp_user` VALUES (7, '317507261', '317507261', '$2y$12$QafkaixnOmwJKgp/O3mHIOsXGIRExqb7WYu0yS4ePtjlYzDJ9CAKG', '2020-01-27 22:45:57', '2020-01-03 18:27:19', '2020-01-27 22:45:57');
INSERT INTO `spp_user` VALUES (8, '37162837493', '081365289292', '$2y$12$TBlsaJJYlvxH0qVNeyP9SOwptN.2oi6/p6ZlqUAIcEE//Ta684.hG', NULL, '2020-01-03 18:27:21', '2020-01-03 18:27:21');
INSERT INTO `spp_user` VALUES (9, '317507261', '317507261', '$2y$12$KC/HMfwHaSrWhA.L9FZKHOeeQmblqXRsiX6qL1UCVqUeGds0pQndm', NULL, '2020-01-03 18:29:55', '2020-01-03 18:29:55');
INSERT INTO `spp_user` VALUES (10, '37162837493', '081365289292', '$2y$12$bKYC.HbXH4Sh09cbNoAYVeX6AssJDqt/a3IJJ97nMPRKMavO5ch4W', NULL, '2020-01-03 18:29:56', '2020-01-03 18:29:56');
INSERT INTO `spp_user` VALUES (11, '301245879', '301245879', '$2y$12$p86Lk375F/XC4TfV0LYuLeV1zyOQqKv5qp1s3K2i.p4CkNtzJIv5S', '2020-02-08 01:21:44', '2020-01-27 13:59:38', '2020-02-08 01:21:44');
INSERT INTO `spp_user` VALUES (12, '30124515452', '08126542897', '$2y$12$BDw0ZNxgtoGwZO9GZ1gk0.9rOphgrsCk/J4oiEPeWGl7i1mPsjIYa', NULL, '2020-01-27 13:59:38', '2020-01-27 13:59:38');
INSERT INTO `spp_user` VALUES (13, '3175070098', '3175070098', '$2y$12$TfsyX0./egV.76bhNRiDEeZskh4oULK8F.I3Bb4lf/3Khi0YLowKm', '2020-01-27 22:06:07', '2020-01-27 14:28:59', '2020-01-27 22:06:07');
INSERT INTO `spp_user` VALUES (14, '317598658', '317598658', '$2y$12$j2dO7iedYTVMWX0u6RUSFOh8KA50yosi2qCNqaufqvj56eavXDUHu', '2020-01-27 22:02:48', '2020-01-27 15:01:53', '2020-01-27 22:02:48');

-- ----------------------------
-- Table structure for wp_hasil_matriks
-- ----------------------------
DROP TABLE IF EXISTS `wp_hasil_matriks`;
CREATE TABLE `wp_hasil_matriks`  (
  `id_matriks` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NULL DEFAULT NULL,
  `hasil_perhitungan` float NULL DEFAULT NULL,
  `date_create` timestamp(0) NULL DEFAULT NULL,
  `last_update` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_matriks`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wp_hasil_matriks
-- ----------------------------
INSERT INTO `wp_hasil_matriks` VALUES (1, 4, 2.70829, '2020-06-21 13:54:12', '2020-06-21 13:54:12');
INSERT INTO `wp_hasil_matriks` VALUES (2, 3, 2.70829, '2020-06-23 19:41:31', '2020-06-23 19:41:31');

-- ----------------------------
-- Table structure for wp_kategori
-- ----------------------------
DROP TABLE IF EXISTS `wp_kategori`;
CREATE TABLE `wp_kategori`  (
  `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomor` int(11) NULL DEFAULT NULL,
  `bobot` int(11) NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tipe_kategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_date` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `update_date` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wp_kategori
-- ----------------------------
INSERT INTO `wp_kategori` VALUES (6, NULL, 5, 'Kesesuaian proposal yang diajukan terhadap persyaratan PNPM', 'Benefit', '2020-06-13 02:43:20', '2020-06-13 02:43:20');
INSERT INTO `wp_kategori` VALUES (7, NULL, 4, 'Kegiatan yang diajukan mendesak untuk dilakukan', 'Benefit', '2020-06-13 02:44:02', '2020-06-13 02:44:02');
INSERT INTO `wp_kategori` VALUES (8, NULL, 4, 'Pendapatan per tahun masyarakat', 'Cost', '2020-06-13 02:44:30', '2020-06-13 02:44:30');
INSERT INTO `wp_kategori` VALUES (9, NULL, 3, 'Lokasi desa dilihat dari jarak dengan pusat pemerintahan', 'Benefit', '2020-06-13 02:47:37', '2020-06-13 02:47:37');
INSERT INTO `wp_kategori` VALUES (10, NULL, 5, 'Tingkat kemajuan desa', 'Benefit', '2020-06-13 02:50:09', '2020-06-13 02:50:09');

-- ----------------------------
-- Table structure for wp_nilai_kategori
-- ----------------------------
DROP TABLE IF EXISTS `wp_nilai_kategori`;
CREATE TABLE `wp_nilai_kategori`  (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` bigint(11) NULL DEFAULT NULL,
  `deskripsi_nilai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nilai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `update_date` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `created_date` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wp_nilai_kategori
-- ----------------------------
INSERT INTO `wp_nilai_kategori` VALUES (4, 6, 'nilai 5', '5', '2020-06-13 13:54:58', '2020-06-13 13:54:58');
INSERT INTO `wp_nilai_kategori` VALUES (5, 7, 'nilai 5', '5', '2020-06-13 14:29:00', '2020-06-13 14:29:00');
INSERT INTO `wp_nilai_kategori` VALUES (6, 8, 'nilai 5', '5', '2020-06-13 14:30:49', '2020-06-13 14:30:49');
INSERT INTO `wp_nilai_kategori` VALUES (7, 9, 'nilai 5', '5', '2020-06-13 14:33:41', '2020-06-13 14:33:41');
INSERT INTO `wp_nilai_kategori` VALUES (8, 10, 'nilai 5', '5', '2020-06-13 14:33:59', '2020-06-13 14:33:59');

-- ----------------------------
-- Table structure for wp_perhitungan
-- ----------------------------
DROP TABLE IF EXISTS `wp_perhitungan`;
CREATE TABLE `wp_perhitungan`  (
  `id_perhitungan` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_member` bigint(20) NULL DEFAULT NULL,
  `id_kategori` bigint(20) NULL DEFAULT NULL,
  `nilai_member_kategori` int(20) NULL DEFAULT NULL,
  `last_update` timestamp(0) NULL DEFAULT NULL,
  `created_date` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_perhitungan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wp_perhitungan
-- ----------------------------
INSERT INTO `wp_perhitungan` VALUES (1, 4, 6, 5, '2020-06-21 13:49:06', '2020-06-21 13:49:06');
INSERT INTO `wp_perhitungan` VALUES (2, 4, 7, 5, '2020-06-21 13:49:07', '2020-06-21 13:49:07');
INSERT INTO `wp_perhitungan` VALUES (3, 4, 8, 5, '2020-06-21 13:49:07', '2020-06-21 13:49:07');
INSERT INTO `wp_perhitungan` VALUES (4, 4, 9, 5, '2020-06-21 13:49:07', '2020-06-21 13:49:07');
INSERT INTO `wp_perhitungan` VALUES (5, 4, 10, 5, '2020-06-21 13:49:07', '2020-06-21 13:49:07');
INSERT INTO `wp_perhitungan` VALUES (6, 4, 6, 5, '2020-06-21 13:51:57', '2020-06-21 13:51:57');
INSERT INTO `wp_perhitungan` VALUES (7, 4, 7, 5, '2020-06-21 13:51:57', '2020-06-21 13:51:57');
INSERT INTO `wp_perhitungan` VALUES (8, 4, 8, 5, '2020-06-21 13:51:57', '2020-06-21 13:51:57');
INSERT INTO `wp_perhitungan` VALUES (9, 4, 9, 5, '2020-06-21 13:51:57', '2020-06-21 13:51:57');
INSERT INTO `wp_perhitungan` VALUES (10, 4, 10, 5, '2020-06-21 13:51:58', '2020-06-21 13:51:58');
INSERT INTO `wp_perhitungan` VALUES (11, 4, 6, 5, '2020-06-21 13:52:51', '2020-06-21 13:52:51');
INSERT INTO `wp_perhitungan` VALUES (12, 4, 7, 5, '2020-06-21 13:52:51', '2020-06-21 13:52:51');
INSERT INTO `wp_perhitungan` VALUES (13, 4, 8, 5, '2020-06-21 13:52:51', '2020-06-21 13:52:51');
INSERT INTO `wp_perhitungan` VALUES (14, 4, 9, 5, '2020-06-21 13:52:51', '2020-06-21 13:52:51');
INSERT INTO `wp_perhitungan` VALUES (15, 4, 10, 5, '2020-06-21 13:52:51', '2020-06-21 13:52:51');
INSERT INTO `wp_perhitungan` VALUES (16, 4, 6, 5, '2020-06-21 13:53:14', '2020-06-21 13:53:14');
INSERT INTO `wp_perhitungan` VALUES (17, 4, 7, 5, '2020-06-21 13:53:14', '2020-06-21 13:53:14');
INSERT INTO `wp_perhitungan` VALUES (18, 4, 8, 5, '2020-06-21 13:53:15', '2020-06-21 13:53:15');
INSERT INTO `wp_perhitungan` VALUES (19, 4, 9, 5, '2020-06-21 13:53:15', '2020-06-21 13:53:15');
INSERT INTO `wp_perhitungan` VALUES (20, 4, 10, 5, '2020-06-21 13:53:15', '2020-06-21 13:53:15');
INSERT INTO `wp_perhitungan` VALUES (21, 4, 6, 5, '2020-06-21 13:54:11', '2020-06-21 13:54:11');
INSERT INTO `wp_perhitungan` VALUES (22, 4, 7, 5, '2020-06-21 13:54:11', '2020-06-21 13:54:11');
INSERT INTO `wp_perhitungan` VALUES (23, 4, 8, 5, '2020-06-21 13:54:11', '2020-06-21 13:54:11');
INSERT INTO `wp_perhitungan` VALUES (24, 4, 9, 5, '2020-06-21 13:54:11', '2020-06-21 13:54:11');
INSERT INTO `wp_perhitungan` VALUES (25, 4, 10, 5, '2020-06-21 13:54:12', '2020-06-21 13:54:12');
INSERT INTO `wp_perhitungan` VALUES (26, 4, 6, 5, '2020-06-23 19:40:48', '2020-06-23 19:40:48');
INSERT INTO `wp_perhitungan` VALUES (27, 4, 7, 5, '2020-06-23 19:40:48', '2020-06-23 19:40:48');
INSERT INTO `wp_perhitungan` VALUES (28, 4, 8, 5, '2020-06-23 19:40:48', '2020-06-23 19:40:48');
INSERT INTO `wp_perhitungan` VALUES (29, 4, 9, 5, '2020-06-23 19:40:48', '2020-06-23 19:40:48');
INSERT INTO `wp_perhitungan` VALUES (30, 4, 10, 5, '2020-06-23 19:40:48', '2020-06-23 19:40:48');
INSERT INTO `wp_perhitungan` VALUES (31, 3, 6, 5, '2020-06-23 19:41:30', '2020-06-23 19:41:30');
INSERT INTO `wp_perhitungan` VALUES (32, 3, 7, 5, '2020-06-23 19:41:31', '2020-06-23 19:41:31');
INSERT INTO `wp_perhitungan` VALUES (33, 3, 8, 5, '2020-06-23 19:41:31', '2020-06-23 19:41:31');
INSERT INTO `wp_perhitungan` VALUES (34, 3, 9, 5, '2020-06-23 19:41:31', '2020-06-23 19:41:31');
INSERT INTO `wp_perhitungan` VALUES (35, 3, 10, 5, '2020-06-23 19:41:31', '2020-06-23 19:41:31');

-- ----------------------------
-- Table structure for wp_role
-- ----------------------------
DROP TABLE IF EXISTS `wp_role`;
CREATE TABLE `wp_role`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jabatan_text` varchar(169) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `jabatan_desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wp_role
-- ----------------------------
INSERT INTO `wp_role` VALUES (1, 'Member', NULL, '2020-05-23 05:42:18', '2020-05-23 05:42:18');
INSERT INTO `wp_role` VALUES (2, 'Admin', NULL, '2020-05-23 05:42:18', '2020-05-23 05:42:18');
INSERT INTO `wp_role` VALUES (3, 'Owner', NULL, '2020-05-23 05:42:18', '2020-05-23 05:42:18');

-- ----------------------------
-- Table structure for wp_sosmed
-- ----------------------------
DROP TABLE IF EXISTS `wp_sosmed`;
CREATE TABLE `wp_sosmed`  (
  `id_sosmed` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_member` bigint(20) NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone_number` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id_sosmed`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wp_sosmed
-- ----------------------------
INSERT INTO `wp_sosmed` VALUES (1, 4, 'ageng133', 'ageng Muhammad Wijayanto', '81211138331');

-- ----------------------------
-- Table structure for wp_user
-- ----------------------------
DROP TABLE IF EXISTS `wp_user`;
CREATE TABLE `wp_user`  (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jabatan` int(11) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_date` timestamp(0) NULL DEFAULT NULL,
  `last_updated` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wp_user
-- ----------------------------
INSERT INTO `wp_user` VALUES (2, 'Ageng Muhammad Wijayanto', 3, '$2y$12$fHQEzoMxCOmGgD/xGaIga.2N2p8aIUwpR5RPk4sJKHFRj0guGWn86', 'ageng133@wpapp.com', '2020-05-22 21:45:15', '2020-05-22 21:55:24');
INSERT INTO `wp_user` VALUES (3, 'Administrator', 2, '$2y$12$fHQEzoMxCOmGgD/xGaIga.2N2p8aIUwpR5RPk4sJKHFRj0guGWn86', 'ageng133@gmail.com', '2020-05-23 06:04:22', '2020-05-23 06:04:22');
INSERT INTO `wp_user` VALUES (4, 'Owner', 3, '$2y$12$fHQEzoMxCOmGgD/xGaIga.2N2p8aIUwpR5RPk4sJKHFRj0guGWn86', 'defega@wpapp.com', '2020-05-23 06:04:47', '2020-05-23 06:04:47');
INSERT INTO `wp_user` VALUES (5, 'Ageng MW', 2, '$2y$12$fHQEzoMxCOmGgD/xGaIga.2N2p8aIUwpR5RPk4sJKHFRj0guGWn86', 'ageng133@wpapp.co.id', '2020-05-24 02:55:13', '2020-05-24 02:55:13');

SET FOREIGN_KEY_CHECKS = 1;
