/*
 Navicat Premium Data Transfer

 Source Server         : localbodo
 Source Server Type    : MySQL
 Source Server Version : 80021
 Source Host           : localhost:3306
 Source Schema         : mbtni

 Target Server Type    : MySQL
 Target Server Version : 80021
 File Encoding         : 65001

 Date: 03/08/2020 10:13:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for auth
-- ----------------------------
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `nik` bigint(0) NULL DEFAULT NULL,
  `uname` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'using case sensitive',
  `pwd` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'using SHA1 and case sensitive',
  `hak_akses` int(0) NULL DEFAULT NULL COMMENT '1. Admin IT\r\n2. user',
  `stat` int(0) NULL DEFAULT NULL COMMENT '1. aktif\r\n2. delete',
  `syscreateuser` int(0) NULL DEFAULT NULL,
  `syscreatedate` datetime(0) NULL DEFAULT '1970-01-01 00:00:00',
  `sysupdateuser` int(0) NULL DEFAULT NULL,
  `sysupdatedate` datetime(0) NULL DEFAULT '1970-01-01 00:00:00',
  `sysdeleteuser` int(0) NULL DEFAULT NULL,
  `sysdeletedate` datetime(0) NULL DEFAULT '1970-01-01 00:00:00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of auth
-- ----------------------------
INSERT INTO `auth` VALUES (1, 1, 'admin', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for personal_information
-- ----------------------------
DROP TABLE IF EXISTS `personal_information`;
CREATE TABLE `personal_information`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tempat_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '1970-01-01',
  `pekerjaan_jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `pangkat_gol_nrp_nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `kesatuan_instansi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `telepon` bigint(0) NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `fotos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `stat` int(0) NULL DEFAULT NULL,
  `syscreateuser` int(0) NULL DEFAULT NULL,
  `syscreatedate` datetime(0) NULL DEFAULT '1970-01-01 00:00:00',
  `sysupdateuser` int(0) NULL DEFAULT NULL,
  `sysupdatedate` datetime(0) NULL DEFAULT '1970-01-01 00:00:00',
  `sysdeleteuser` int(0) NULL DEFAULT NULL,
  `sysdeletedate` datetime(0) NULL DEFAULT '1970-01-01 00:00:00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_information
-- ----------------------------
INSERT INTO `personal_information` VALUES (1, 'PRIYAMBODO', 'JAKARTA', '1994-03-13', 'ACPM', 'OAC', 'APMSC', 89613219201, 'ASPMCAPSCM', '2020_08_02_17:06:06.jpg', 1, 1, '2020-08-02 17:06:06', NULL, '1970-01-01 00:00:00', NULL, '1970-01-01 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
