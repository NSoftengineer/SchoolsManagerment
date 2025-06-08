/*
 Navicat Premium Dump SQL

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : schoolmanagerment

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 07/06/2025 10:52:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache
-- ----------------------------
INSERT INTO `cache` VALUES ('laravel_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:67:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"user create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"user update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:11:\"user delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"personalprofile\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:22:\"personalprofile create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:22:\"personalprofile update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:22:\"personalprofile delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:6:\"income\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:13:\"income create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:13:\"income update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:13:\"income delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:8:\"expenses\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:15:\"expenses create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:15:\"expenses update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:15:\"expenses delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:6:\"report\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:13:\"report export\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:7:\"setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:14:\"setting create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:14:\"setting update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:14:\"setting delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:17:\"roleandpermission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:24:\"roleandpermission create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:24:\"roleandpermission update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:24:\"roleandpermission delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:9:\"employees\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:16:\"employees create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:16:\"employees update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:16:\"employees delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:8:\"students\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:15:\"students create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:15:\"students update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:15:\"students delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:19:\"setting study level\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:26:\"setting study level create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:26:\"setting study level update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:26:\"setting study level delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:18:\"setting study room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:25:\"setting study room create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:25:\"setting study room update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:25:\"setting study room delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:19:\"setting type income\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:26:\"setting type income create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:26:\"setting type income update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:26:\"setting type income delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:21:\"setting type expenses\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:28:\"setting type expenses create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:28:\"setting type expenses update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:28:\"setting type expenses delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:19:\"setting study items\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:26:\"setting study items create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:26:\"setting study items update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:26:\"setting study items delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:20:\"setting type teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:27:\"setting type teacher create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:27:\"setting type teacher update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:27:\"setting type teacher delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:18:\"setting study year\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:25:\"setting study year create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:25:\"setting study year update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:25:\"setting study year delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:18:\"setting study cost\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:25:\"setting study cost create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:25:\"setting study cost update\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:25:\"setting study cost delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"supperadmin\";s:1:\"c\";s:3:\"web\";}}}', 1749353210);

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------

-- ----------------------------
-- Table structure for classrooms
-- ----------------------------
DROP TABLE IF EXISTS `classrooms`;
CREATE TABLE `classrooms`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of classrooms
-- ----------------------------
INSERT INTO `classrooms` VALUES (1, 'ຫ້ອງ ປ 1 ກ', NULL, '2025-05-24 04:03:22', '2025-05-24 04:04:05');
INSERT INTO `classrooms` VALUES (2, 'ຫ້ອງ ປ 1 ຂ', NULL, '2025-05-24 04:03:37', '2025-05-24 04:03:37');
INSERT INTO `classrooms` VALUES (3, 'ທົດສອບ', '2025-05-24 04:04:50', '2025-05-24 04:04:14', '2025-05-24 04:04:50');

-- ----------------------------
-- Table structure for coststudies
-- ----------------------------
DROP TABLE IF EXISTS `coststudies`;
CREATE TABLE `coststudies`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `classrooms_id` int NOT NULL COMMENT 'ລະຫັດຫ້ອງຮຽນ',
  `yearstudies_id` int NOT NULL COMMENT 'ລະຫັດສົກຮຽນ',
  `groupitems_id` int NOT NULL COMMENT 'ລະຫັດກູ່ມລາຍການອຸປະກອນເສີມ',
  `price` float NOT NULL DEFAULT 0 COMMENT 'ຄ່າຮຽນ',
  `type_payment` int NOT NULL DEFAULT 0 COMMENT 'ວີທີການຈ່າຍຄ່າຮຽນ 0 = ເປັນເດືອນ, 1 = ເປັນພາກຮຽນ, 2 = ເປັນເດືອນ ແລະ ເປັນພາກຮຽນ',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of coststudies
-- ----------------------------
INSERT INTO `coststudies` VALUES (1, 1, 1, 1, 3000000, 1, NULL, '2025-05-24 12:16:46', '2025-05-24 12:29:51');

-- ----------------------------
-- Table structure for districts
-- ----------------------------
DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `province_id` int NOT NULL,
  `name_la` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `taget` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of districts
-- ----------------------------

-- ----------------------------
-- Table structure for educationals
-- ----------------------------
DROP TABLE IF EXISTS `educationals`;
CREATE TABLE `educationals`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `education_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of educationals
-- ----------------------------

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `single` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ethnic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phones` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int NOT NULL,
  `height` int NOT NULL,
  `clothes_size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` int NOT NULL,
  `district` int NOT NULL,
  `village` int NOT NULL,
  `active` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of employees
-- ----------------------------

-- ----------------------------
-- Table structure for expenses
-- ----------------------------
DROP TABLE IF EXISTS `expenses`;
CREATE TABLE `expenses`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `date_at` date NULL DEFAULT NULL,
  `typeexpenses_id` int NOT NULL,
  `amount` float NOT NULL DEFAULT 0,
  `price` float NOT NULL DEFAULT 0,
  `status` int NOT NULL DEFAULT 1,
  `user_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of expenses
-- ----------------------------
INSERT INTO `expenses` VALUES (6, 'ບີກ', 'ກຫກ', NULL, 1, 10, 150000, 1, 1, NULL, '2025-06-06 11:17:35', '2025-06-06 14:21:56');
INSERT INTO `expenses` VALUES (7, 'ປື້ມ', 'ກດດ', NULL, 1, 3, 50000, 1, 1, NULL, '2025-06-06 11:18:22', '2025-06-06 11:18:22');
INSERT INTO `expenses` VALUES (8, 'ສໍ', 'ກຫັກດຫກດ', NULL, 1, 5, 15000, 1, 1, NULL, '2025-06-06 11:19:35', '2025-06-06 11:19:35');
INSERT INTO `expenses` VALUES (9, 'ລາຍການ01', 'ໝາຍເຫດໝາຍເຫດ', NULL, 1, 5, 500000, 1, 1, NULL, '2025-06-07 03:27:35', '2025-06-07 03:27:35');
INSERT INTO `expenses` VALUES (10, 'ລາຍການ02', 'ໝາຍເຫດໝາຍເຫດໝາຍເຫດໝາຍເຫດ', NULL, 1, 5, 100000, 1, 1, NULL, '2025-06-07 03:27:51', '2025-06-07 03:27:51');
INSERT INTO `expenses` VALUES (11, 'ລາຍການ03', 'ລາຍການໝາຍເຫດໝາຍເຫດໝາຍເຫດ', NULL, 1, 5, 25000, 1, 1, NULL, '2025-06-07 03:28:07', '2025-06-07 03:28:07');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for floorstudies
-- ----------------------------
DROP TABLE IF EXISTS `floorstudies`;
CREATE TABLE `floorstudies`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of floorstudies
-- ----------------------------
INSERT INTO `floorstudies` VALUES (1, 'ຊັ້ນປະຖົມ', NULL, '2025-05-24 05:48:08', '2025-05-24 05:48:30');
INSERT INTO `floorstudies` VALUES (2, 'FloorstudyData', '2025-05-24 05:48:42', '2025-05-24 05:48:15', '2025-05-24 05:48:42');

-- ----------------------------
-- Table structure for groupitems
-- ----------------------------
DROP TABLE IF EXISTS `groupitems`;
CREATE TABLE `groupitems`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of groupitems
-- ----------------------------
INSERT INTO `groupitems` VALUES (1, 'ລາຍການສຳລັບປະຖົມ', NULL, '2025-05-24 06:17:30', '2025-05-24 06:21:05');
INSERT INTO `groupitems` VALUES (2, 'ປື້ມແບບຮຽນ', '2025-05-24 07:12:14', '2025-05-24 06:53:53', '2025-05-24 07:12:14');

-- ----------------------------
-- Table structure for itemforregisters
-- ----------------------------
DROP TABLE IF EXISTS `itemforregisters`;
CREATE TABLE `itemforregisters`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `groupitems_id` int NOT NULL COMMENT 'ລະຫັດກຸ່ມລາຍການເສີ່ມ',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `default` int NOT NULL DEFAULT 0 COMMENT 'default 0 = ເລືອກກະໄດ-ບໍ່ເລືອກກະໄດ້, 1 = ຕ້ອງເລືອກເທົ່ານັ້ນ',
  `type_items` int NOT NULL COMMENT 'type_items 0 = ທົ່ວໄປ, 1 = ສ່ວນລົດ',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of itemforregisters
-- ----------------------------
INSERT INTO `itemforregisters` VALUES (1, 1, 'ປື້ມແບບຮຽນ ຊັ້ນປະຖົມ', 150000, 1, 0, NULL, '2025-05-24 06:57:26', '2025-05-24 06:57:26');
INSERT INTO `itemforregisters` VALUES (2, 1, 'ຊູດນັກຮຽນ', 300000, 0, 0, NULL, '2025-05-24 07:01:15', '2025-05-24 07:01:15');
INSERT INTO `itemforregisters` VALUES (3, 1, 'ເກິບ', 200000, 0, 0, '2025-05-24 07:13:56', '2025-05-24 07:05:36', '2025-05-24 07:13:56');

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int NULL DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED NULL DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2025_04_04_080405_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (5, '2025_05_23_084027_create_floorstudies_table', 2);
INSERT INTO `migrations` VALUES (6, '2025_05_23_084112_create_classrooms_table', 2);
INSERT INTO `migrations` VALUES (7, '2025_05_23_084139_create_typeincomes_table', 2);
INSERT INTO `migrations` VALUES (8, '2025_05_23_084153_create_typeexpenses_table', 2);
INSERT INTO `migrations` VALUES (9, '2025_05_23_084215_create_itemforregisters_table', 2);
INSERT INTO `migrations` VALUES (10, '2025_05_23_084241_create_typeteachers_table', 2);
INSERT INTO `migrations` VALUES (11, '2025_05_23_084256_create_yearstudies_table', 2);
INSERT INTO `migrations` VALUES (12, '2025_05_23_084308_create_coststudies_table', 2);
INSERT INTO `migrations` VALUES (13, '2025_05_23_093245_create_groupitems_table', 2);
INSERT INTO `migrations` VALUES (14, '2025_05_24_140259_create_expenses_table', 3);
INSERT INTO `migrations` VALUES (15, '2025_06_04_135447_create_provinces_table', 4);
INSERT INTO `migrations` VALUES (16, '2025_06_04_135452_create_districts_table', 4);
INSERT INTO `migrations` VALUES (17, '2025_06_04_135457_create_villages_table', 4);
INSERT INTO `migrations` VALUES (18, '2025_06_04_135503_create_students_table', 4);
INSERT INTO `migrations` VALUES (19, '2025_06_04_140343_create_student_classes_table', 4);
INSERT INTO `migrations` VALUES (20, '2025_06_06_022033_create_employees_table', 5);
INSERT INTO `migrations` VALUES (21, '2025_06_06_022042_create_educationals_table', 5);
INSERT INTO `migrations` VALUES (22, '2025_06_06_022431_create_teaching_histories_table', 5);
INSERT INTO `migrations` VALUES (23, '2025_06_06_032912_create_teaching_currents_table', 5);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 71 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'dashboard', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (2, 'user', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (3, 'user create', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (4, 'user update', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (5, 'user delete', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (6, 'personalprofile', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (7, 'personalprofile create', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (8, 'personalprofile update', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (9, 'personalprofile delete', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (10, 'income', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (11, 'income create', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (12, 'income update', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (13, 'income delete', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (14, 'expenses', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (15, 'expenses create', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (16, 'expenses update', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (17, 'expenses delete', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (18, 'report', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (19, 'report export', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (20, 'setting', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (21, 'setting create', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (22, 'setting update', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (23, 'setting delete', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (24, 'roleandpermission', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (25, 'roleandpermission create', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (26, 'roleandpermission update', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (27, 'roleandpermission delete', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `permissions` VALUES (28, 'employees', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (29, 'employees create', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (30, 'employees update', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (31, 'employees delete', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (32, 'students', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (33, 'students create', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (34, 'students update', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (35, 'students delete', 'web', '2025-04-26 07:22:24', '2025-04-26 07:22:24');
INSERT INTO `permissions` VALUES (39, 'setting study level', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (40, 'setting study level create', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (41, 'setting study level update', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (42, 'setting study level delete', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (43, 'setting study room', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (44, 'setting study room create', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (45, 'setting study room update', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (46, 'setting study room delete', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (47, 'setting type income', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (48, 'setting type income create', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (49, 'setting type income update', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (50, 'setting type income delete', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (51, 'setting type expenses', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (52, 'setting type expenses create', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (53, 'setting type expenses update', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (54, 'setting type expenses delete', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (55, 'setting study items', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (56, 'setting study items create', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (57, 'setting study items update', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (58, 'setting study items delete', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (59, 'setting type teacher', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (60, 'setting type teacher create', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (61, 'setting type teacher update', 'web', '2025-05-24 05:12:09', '2025-05-24 05:12:09');
INSERT INTO `permissions` VALUES (62, 'setting type teacher delete', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (63, 'setting study year', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (64, 'setting study year create', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (65, 'setting study year update', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (66, 'setting study year delete', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (67, 'setting study cost', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (68, 'setting study cost create', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (69, 'setting study cost update', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');
INSERT INTO `permissions` VALUES (70, 'setting study cost delete', 'web', '2025-05-24 05:12:10', '2025-05-24 05:12:10');

-- ----------------------------
-- Table structure for provinces
-- ----------------------------
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE `provinces`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_la` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `taget` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of provinces
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (2, 1);
INSERT INTO `role_has_permissions` VALUES (3, 1);
INSERT INTO `role_has_permissions` VALUES (4, 1);
INSERT INTO `role_has_permissions` VALUES (5, 1);
INSERT INTO `role_has_permissions` VALUES (6, 1);
INSERT INTO `role_has_permissions` VALUES (7, 1);
INSERT INTO `role_has_permissions` VALUES (8, 1);
INSERT INTO `role_has_permissions` VALUES (9, 1);
INSERT INTO `role_has_permissions` VALUES (10, 1);
INSERT INTO `role_has_permissions` VALUES (11, 1);
INSERT INTO `role_has_permissions` VALUES (12, 1);
INSERT INTO `role_has_permissions` VALUES (13, 1);
INSERT INTO `role_has_permissions` VALUES (14, 1);
INSERT INTO `role_has_permissions` VALUES (15, 1);
INSERT INTO `role_has_permissions` VALUES (16, 1);
INSERT INTO `role_has_permissions` VALUES (17, 1);
INSERT INTO `role_has_permissions` VALUES (18, 1);
INSERT INTO `role_has_permissions` VALUES (19, 1);
INSERT INTO `role_has_permissions` VALUES (20, 1);
INSERT INTO `role_has_permissions` VALUES (21, 1);
INSERT INTO `role_has_permissions` VALUES (22, 1);
INSERT INTO `role_has_permissions` VALUES (23, 1);
INSERT INTO `role_has_permissions` VALUES (24, 1);
INSERT INTO `role_has_permissions` VALUES (25, 1);
INSERT INTO `role_has_permissions` VALUES (26, 1);
INSERT INTO `role_has_permissions` VALUES (27, 1);
INSERT INTO `role_has_permissions` VALUES (28, 1);
INSERT INTO `role_has_permissions` VALUES (29, 1);
INSERT INTO `role_has_permissions` VALUES (30, 1);
INSERT INTO `role_has_permissions` VALUES (31, 1);
INSERT INTO `role_has_permissions` VALUES (32, 1);
INSERT INTO `role_has_permissions` VALUES (33, 1);
INSERT INTO `role_has_permissions` VALUES (34, 1);
INSERT INTO `role_has_permissions` VALUES (35, 1);
INSERT INTO `role_has_permissions` VALUES (39, 1);
INSERT INTO `role_has_permissions` VALUES (40, 1);
INSERT INTO `role_has_permissions` VALUES (41, 1);
INSERT INTO `role_has_permissions` VALUES (42, 1);
INSERT INTO `role_has_permissions` VALUES (43, 1);
INSERT INTO `role_has_permissions` VALUES (44, 1);
INSERT INTO `role_has_permissions` VALUES (45, 1);
INSERT INTO `role_has_permissions` VALUES (46, 1);
INSERT INTO `role_has_permissions` VALUES (47, 1);
INSERT INTO `role_has_permissions` VALUES (48, 1);
INSERT INTO `role_has_permissions` VALUES (49, 1);
INSERT INTO `role_has_permissions` VALUES (50, 1);
INSERT INTO `role_has_permissions` VALUES (51, 1);
INSERT INTO `role_has_permissions` VALUES (52, 1);
INSERT INTO `role_has_permissions` VALUES (53, 1);
INSERT INTO `role_has_permissions` VALUES (54, 1);
INSERT INTO `role_has_permissions` VALUES (55, 1);
INSERT INTO `role_has_permissions` VALUES (56, 1);
INSERT INTO `role_has_permissions` VALUES (57, 1);
INSERT INTO `role_has_permissions` VALUES (58, 1);
INSERT INTO `role_has_permissions` VALUES (59, 1);
INSERT INTO `role_has_permissions` VALUES (60, 1);
INSERT INTO `role_has_permissions` VALUES (61, 1);
INSERT INTO `role_has_permissions` VALUES (62, 1);
INSERT INTO `role_has_permissions` VALUES (63, 1);
INSERT INTO `role_has_permissions` VALUES (64, 1);
INSERT INTO `role_has_permissions` VALUES (65, 1);
INSERT INTO `role_has_permissions` VALUES (66, 1);
INSERT INTO `role_has_permissions` VALUES (67, 1);
INSERT INTO `role_has_permissions` VALUES (68, 1);
INSERT INTO `role_has_permissions` VALUES (69, 1);
INSERT INTO `role_has_permissions` VALUES (70, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'supperadmin', 'web', '2025-04-26 02:29:34', '2025-04-26 02:29:34');
INSERT INTO `roles` VALUES (2, 'admin', 'web', '2025-04-26 05:37:11', '2025-04-26 05:37:11');
INSERT INTO `roles` VALUES (3, 'user', 'web', '2025-04-26 05:37:11', '2025-04-26 05:37:11');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id` ASC) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('4qpLxoXBk2z9ICTRl80byf7I1osM0QSpxYpphHHr', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU1J0QnZCT3ZoNmFKWGZ6ZHJwbVpTSlJqTWRycnJyZmJSMk92Zk8yOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9leHBlbnNlcz90eXBlPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1749219745);
INSERT INTO `sessions` VALUES ('JwAGdKqC9gF4rPHYCFdjefMuNsaeO3x2hZh3wKzj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZldpZVE2N24yb0cyQ3BZY0dUVWl4TEVibWZTQkt4SFE5WHlOZW53dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZXJzb25hbC1wcm9maWxlL2VtcGxveWVlcy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1749267004);

-- ----------------------------
-- Table structure for student_classes
-- ----------------------------
DROP TABLE IF EXISTS `student_classes`;
CREATE TABLE `student_classes`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `yearstudies_id` int NOT NULL,
  `classrooms_id` int NOT NULL,
  `status` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student_classes
-- ----------------------------

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ethnic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `village_id` int NOT NULL,
  `district_id` int NOT NULL,
  `province_id` int NOT NULL,
  `mother` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of students
-- ----------------------------

-- ----------------------------
-- Table structure for teaching_currents
-- ----------------------------
DROP TABLE IF EXISTS `teaching_currents`;
CREATE TABLE `teaching_currents`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teaching_currents
-- ----------------------------

-- ----------------------------
-- Table structure for teaching_histories
-- ----------------------------
DROP TABLE IF EXISTS `teaching_histories`;
CREATE TABLE `teaching_histories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `teaching_room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `teaching` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `teaching_years` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `teaching_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teaching_histories
-- ----------------------------

-- ----------------------------
-- Table structure for typeexpenses
-- ----------------------------
DROP TABLE IF EXISTS `typeexpenses`;
CREATE TABLE `typeexpenses`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of typeexpenses
-- ----------------------------
INSERT INTO `typeexpenses` VALUES (1, 'ຫ້ອງການ', NULL, '2025-05-24 01:51:07', '2025-05-24 02:22:08');
INSERT INTO `typeexpenses` VALUES (2, 'ຫ້ອງຄົວ', NULL, '2025-05-24 01:51:14', '2025-05-24 01:51:14');
INSERT INTO `typeexpenses` VALUES (3, 'test', '2025-05-24 02:58:15', '2025-05-24 02:27:26', '2025-05-24 02:58:15');

-- ----------------------------
-- Table structure for typeincomes
-- ----------------------------
DROP TABLE IF EXISTS `typeincomes`;
CREATE TABLE `typeincomes`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of typeincomes
-- ----------------------------
INSERT INTO `typeincomes` VALUES (1, 'ສະໜັບສະໜຸນ', NULL, '2025-05-24 03:49:32', '2025-05-24 03:50:21');
INSERT INTO `typeincomes` VALUES (2, 'abcd', '2025-05-24 03:50:38', '2025-05-24 03:50:33', '2025-05-24 03:50:38');

-- ----------------------------
-- Table structure for typeteachers
-- ----------------------------
DROP TABLE IF EXISTS `typeteachers`;
CREATE TABLE `typeteachers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of typeteachers
-- ----------------------------
INSERT INTO `typeteachers` VALUES (1, 'ຄູປະຖົມ', NULL, '2025-05-24 07:25:51', '2025-05-24 07:29:16');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'ndev', 'ndev@gmail.com', NULL, '$2y$12$0pMdCnrRSZN2p4OE3U84PeXdjCeoaLFszhc7oCGorXn8KpEJiZ2Xe', NULL, '2025-04-26 02:29:34', '2025-04-26 02:29:34', NULL);

-- ----------------------------
-- Table structure for villages
-- ----------------------------
DROP TABLE IF EXISTS `villages`;
CREATE TABLE `villages`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `district_id` int NOT NULL,
  `name_la` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of villages
-- ----------------------------

-- ----------------------------
-- Table structure for yearstudies
-- ----------------------------
DROP TABLE IF EXISTS `yearstudies`;
CREATE TABLE `yearstudies`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of yearstudies
-- ----------------------------
INSERT INTO `yearstudies` VALUES (1, '2025-2026', NULL, '2025-05-24 07:59:34', '2025-05-24 08:01:11');

SET FOREIGN_KEY_CHECKS = 1;
