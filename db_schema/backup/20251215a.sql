-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2025 at 10:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy_dream_hangul`
--

-- --------------------------------------------------------

--
-- Table structure for table `backlog_kurikulum`
--

CREATE TABLE `backlog_kurikulum` (
  `kurikulumId` int(11) NOT NULL,
  `seqno` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `date_backlog` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backlog_kurikulum`
--

INSERT INTO `backlog_kurikulum` (`kurikulumId`, `seqno`, `deskripsi`, `date_backlog`) VALUES
(15, 1, '3Ge7yQt5fB5hR52Q22PP2uIRmQrUtTCU4blSARjawGs11pW7Km', '2025-09-27'),
(15, 2, 'Ro5DJuiFaNd9icROAUddGaGTQkhagZyYCDcMtvaZPuNs7wJtvP', '2025-09-28'),
(15, 3, 'kdM0V618B6NYlawN53BWJTDvItYj0x2CV0MgWwBQSfwYfPrsbs', '2025-09-28'),
(15, 4, 'iAxHparH5vhRydRtnvXpenXEf9zn8bdLZRU8pQzcrtGFGKFcmg', '2025-09-28'),
(16, 1, 'r3A9s9nz948OXl4oA87QtZzMiUkrwvRMLzD6Mj8PXIzdYSU3DY', '2025-09-28'),
(16, 2, 'Lorem ipsum test feedback', '2025-10-06'),
(16, 3, 'third feedback', '2025-10-06'),
(26, 1, 'Komentar pertama untuk kurikulum ini', '2025-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_kelas`
--

CREATE TABLE `enrollment_kelas` (
  `kelasId` int(11) NOT NULL,
  `memberId` varchar(12) NOT NULL,
  `isPass` enum('0','1') DEFAULT '0',
  `date_pass` date DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollment_kelas`
--

INSERT INTO `enrollment_kelas` (`kelasId`, `memberId`, `isPass`, `date_pass`, `date_created`) VALUES
(1, '202509240030', NULL, NULL, '2025-10-12 21:15:34'),
(1, '202509244958', NULL, NULL, '2025-10-12 21:15:34'),
(1, '202509246499', NULL, NULL, '2025-10-12 21:15:34'),
(1, '202509247799', NULL, NULL, '2025-10-12 21:15:34'),
(1, '202509248754', NULL, NULL, '2025-10-12 21:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `file_kurikulum`
--

CREATE TABLE `file_kurikulum` (
  `kurikulumId` int(11) NOT NULL,
  `seqno` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_kurikulum`
--

INSERT INTO `file_kurikulum` (`kurikulumId`, `seqno`, `filename`, `date_upload`) VALUES
(26, 1, 'file_H7fETGWJX7UGEj9oRNLO_1759913015.pdf', '2025-10-08'),
(26, 2, 'file_Mawsb3lwnjIs9wW75My9_1759913193.pdf', '2025-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelasId` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `kapasitas` int(11) DEFAULT 0,
  `date_open` date NOT NULL,
  `date_close` date NOT NULL,
  `time_close` time NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `pengajar` varchar(255) NOT NULL,
  `isMulaiBelajar` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelasId`, `nama_kelas`, `nama_program`, `deskripsi`, `kapasitas`, `date_open`, `date_close`, `time_close`, `date_created`, `pengajar`, `isMulaiBelajar`) VALUES
(1, 'Kelas IR94', 'Aspernatur Sit Tempora', 'Inventore voluptatem aut quia suscipit et accusantium. Consectetur est rerum ducimus earum at quod et.', 8, '2025-09-06', '2025-09-20', '12:00:00', '2025-09-29 16:41:01', 'Jane Jane', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `kurikulumId` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `date_input` date NOT NULL,
  `isApprove` enum('0','1','2','3') DEFAULT '0',
  `date_approve` date DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `pic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`kurikulumId`, `nama`, `deskripsi`, `date_input`, `isApprove`, `date_approve`, `date_created`, `pic`) VALUES
(15, 'Optio doloremque temporibus.', 'Qui veritatis voluptate maxime accusamus. Facere ratione dolores nihil dicta consequatur ut dolor. Dolores odit vero esse voluptatum.', '2024-03-31', '3', '2020-10-30', '2025-09-27 10:58:44', 1),
(16, 'Ut ut sint.', NULL, '2025-01-24', '1', NULL, '2025-09-27 10:58:44', 1),
(17, 'Deserunt impedit atque voluptatem.', 'Vitae voluptatem eaque sunt totam voluptas aut enim omnis. Et adipisci doloremque rem at similique iste eius exercitationem. Ipsam qui numquam quae minima.', '2024-06-24', '0', NULL, '2025-09-27 10:58:44', 2),
(19, 'Vero vitae ducimus blanditiis.', 'Molestias rerum cumque soluta. Rerum ad et quis est delectus. Vitae culpa veritatis praesentium perferendis et sequi.', '2025-06-04', '3', '2020-12-10', '2025-09-27 10:58:44', 1),
(20, 'Esse sed.', 'Quo minima consectetur dolore. Explicabo qui aut ut molestias et non. Non eos quasi et quia voluptates non esse. Eum quis in voluptatibus.', '2024-06-17', '0', NULL, '2025-09-27 10:58:44', 1),
(21, 'Voluptas et.', 'Excepturi quia aut pariatur tempora. Adipisci vero nihil est delectus. Dolorem quia aut recusandae esse repellendus dolorem voluptas pariatur. Eaque consectetur qui quod repellat iusto modi.', '2025-04-30', '0', NULL, '2025-09-27 10:58:44', 1),
(22, 'Quis assumenda.', 'Autem libero aut doloremque fugiat. Est id qui veritatis sed sit. Fugit sed sit qui asperiores qui. Et modi sapiente inventore iste eos est assumenda reprehenderit.', '2024-10-27', '3', '2016-07-04', '2025-09-27 10:58:44', 1),
(23, 'Necessitatibus accusamus quis.', 'Dolorem incidunt eum ab ut ex. Reprehenderit magnam et magnam ut laboriosam hic. Reiciendis veritatis quibusdam et suscipit voluptas quidem.', '2025-02-07', '0', NULL, '2025-09-27 10:58:44', 2),
(24, 'Aliquid inventore iure dolore.', 'Magni quibusdam eum ut accusantium. Sed voluptas fuga aut nobis repellendus reprehenderit fugit. Natus laborum deleniti nisi. Consequatur dolorem eum dolorem natus cumque omnis. Sint quia laudantium ullam alias.', '2024-03-07', '2', '2020-03-25', '2025-09-27 10:58:44', 2),
(26, 'Kurikulum Baru v2 changed', 'Update terbaru deskripsi Kurikulum Baru V2', '2025-10-08', '1', NULL, '2025-10-08 15:43:35', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberId` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_registration` date NOT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberId`, `username`, `email`, `password`, `date_registration`, `date_created`) VALUES
('202509240030', 'adikara13', 'abyasa.wulandari@example.net', '$2y$10$tlnvN9BeanKVBDevuNVgZeaG5mIWRxXbeRyy3goUysdSaFtOmM5sK', '2025-09-24', '2025-09-24 08:26:01'),
('202509242285', 'mayasari.baktiono', 'unjani09@example.net', '$2y$10$uDANK28LzDCKnTQGedaY6Ow/Zo0lmxEXffLNRn3yTieHj0pklhXVO', '2025-09-24', '2025-09-24 08:26:01'),
('202509242645', 'tampubolon.rika', 'uyainah.kuncara@example.com', '$2y$10$Gu0TPwOPVCywTgneFf4xy.3oiDqPMTTupw2XLu1U3P8jbLFPmRPy6', '2025-09-24', '2025-09-24 08:26:02'),
('202509244958', 'taswir.wahyudin', 'irfan.kurniawan@example.net', '$2y$10$U3guT1Xi.g33q6XCIMPH5OoBRaA1Vk1PWeoAP.9ZcoW4BUQOB0Jpu', '2025-09-24', '2025-09-24 08:26:01'),
('202509246499', 'mnamaga', 'urahayu@example.net', '$2y$10$2nSXFAfopXMsbfNm5ZRudOhzqiucCtnMZQyfn374q2Pq6CUp.oGia', '2025-09-24', '2025-09-24 08:26:01'),
('202509246861', 'prima85', 'ciaobella.saputra@example.com', '$2y$10$oWfnsi6KvFg4Jt2guIa88uFrci8rWBWdsKGTwa2bCvEF5rnLx1PWa', '2025-09-24', '2025-09-24 08:26:01'),
('202509247799', 'gara04', 'fujiati.syahrini@example.org', '$2y$10$FCxh.BMHAARPBQy9wG14Ku6UsfwBSG.hhBvJtz0K1je4hhWGcF4cC', '2025-09-24', '2025-09-24 08:26:02'),
('202509248754', 'kuswandari.ulya', 'gilda77@example.org', '$2y$10$rxjWCGhu239INyfF.NY9wuwiHz9/et2DQVqB.u.DodZMmBzsu0jAe', '2025-09-24', '2025-09-24 08:26:01'),
('202509249954', 'gwaskita', 'nsaragih@example.net', '$2y$10$CiTLPTkbL8Xt..7rbtrz1eXq7rN3c3LaoZDHH/IdDQtlCjOVGim2K', '2025-09-24', '2025-09-24 08:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `noteId` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `date_post` date NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `userId` int(11) NOT NULL,
  `nama_pengajar` varchar(255) NOT NULL,
  `date_registration` date DEFAULT NULL,
  `date_approval` date DEFAULT NULL,
  `isApprove` enum('0','1') DEFAULT NULL,
  `isActive` enum('0','1') DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`userId`, `nama_pengajar`, `date_registration`, `date_approval`, `isApprove`, `isActive`, `date_created`) VALUES
(3, 'uwais.dinda', '2025-10-21', '2025-10-21', '1', '1', '2025-10-21 10:00:02'),
(4, 'lsihombing', '2025-10-21', '2025-10-21', '1', '1', '2025-10-21 10:00:02'),
(5, 'aharyanti', '2025-10-21', '2025-11-11', '1', '1', '2025-10-21 14:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `private_user`
--

CREATE TABLE `private_user` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `lvl` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_user`
--

INSERT INTO `private_user` (`userId`, `username`, `password`, `date_created`, `lvl`) VALUES
(1, 'cnadmin', '$2y$10$UI2hmmAwyNSTdJd/Mh5rM.9IGg3S1rQQNUi0j8pqkVf54/X0C3sry', '2025-09-18 08:47:52', '0'),
(2, 'dd', '$2y$10$MyV/kbuQIEe3scubXe3lX.2BYjqPZDJqZKii2kwDGSjjO7qjN21gK', '2025-09-21 21:12:50', '1'),
(3, 'winarsih.zamira', '$2y$10$ew4JKu.XxhiANhX1ku9hEeAouof1Lp/Wy8/yqqB2BwFaigEcKMZXu', '2025-10-21 10:00:02', '2'),
(4, 'pranawa.wulandari', '$2y$10$XDn3pDZEg22AscvI3dQrNufFvJwbOpX1OjnGdE5888PaLFkQLHGgC', '2025-10-21 10:00:02', '2'),
(5, 'septi.mangunsong', '$2y$10$dH65/I.Nu4paU92w82gtcOmWiQgJOcKkicKz1om5LmxsQDszmPD1a', '2025-10-21 14:25:09', '2'),
(6, 'asmuni.sihotang', '$2y$10$eeF3i9qwo4Wj/9.Pu8Ugau20jWocxCV01V.isOX36RRufRXRczZGq', '2025-10-21 14:25:09', NULL),
(7, 'testing', '$2y$10$5.1ZIjlO05.X6gibe8KwoOpcZLnWdiOb.HxaLJ9vu8qJ8nWJboin.', '2025-10-24 15:55:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `programId` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kurikulumId` int(11) DEFAULT NULL,
  `file_jadwal` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`programId`, `nama`, `deskripsi`, `kurikulumId`, `file_jadwal`, `date_created`) VALUES
(1, 'Aspernatur Sit Tempora', 'Sapiente possimus aut corporis. Soluta velit nisi et non. Assumenda qui at assumenda voluptas sint est.', 19, 'file_jadwal.pdf', '2025-09-29 15:25:59'),
(4, 'Id Placeat Consectetur', 'A ab nostrum officia nulla aut perspiciatis veniam. Accusantium assumenda pariatur aut sapiente ipsum. Enim dolor vel animi in aut alias. Necessitatibus voluptatem quidem vitae accusantium quia. Ut aut hic et tempora ullam exercitationem qui.', 22, 'file_jadwal.pdf', '2025-09-29 15:25:59'),
(5, 'Program Lorem Testing', 'Deskripsi tentang program lorem testing', 15, 'file_TcTsjCWKOK4jZ2vBAYle_1759136169.pdf', '2025-09-29 15:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_kelas`
--

CREATE TABLE `registrasi_kelas` (
  `kelasId` int(11) NOT NULL,
  `memberId` varchar(12) NOT NULL,
  `date_registration` date NOT NULL,
  `time_registration` time NOT NULL,
  `isApprove` enum('0','1') DEFAULT NULL,
  `date_approval` date DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `memberId` varchar(12) NOT NULL,
  `noSertifikat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date_issued` datetime NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`memberId`, `noSertifikat`, `date_issued`, `filename`, `date_created`) VALUES
('202509240030', 'ZODO7CKOWA', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509242285', 'FRVMPYNCXE', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509242645', 'XIE7GS4FJQ', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509244958', 'MW8V1NEBRX', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509246499', 'UQKTMCZYN5', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509246861', '123456789a', '2025-09-26 00:00:00', 'file_f01YIHHWzXGUblk5PWi5_1758871014.pdf', '2025-09-26 14:16:55'),
('202509246861', 'U2PSMESBXM', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509247799', 'TUQERF4KUC', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509248754', '5YIZAUTBUQ', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509249954', 'FDVPUA0GNA', '2025-09-26 09:47:30', 'course_certificate.pdf', '2025-09-26 16:47:30'),
('202509249954', 'wasft1133', '2025-09-27 00:00:00', 'file_2AY9dBSG0Rxx8hxQ9k6O_1758940338.pdf', '2025-09-27 09:32:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backlog_kurikulum`
--
ALTER TABLE `backlog_kurikulum`
  ADD KEY `fk_backlog_kurikulum` (`kurikulumId`);

--
-- Indexes for table `enrollment_kelas`
--
ALTER TABLE `enrollment_kelas`
  ADD PRIMARY KEY (`kelasId`,`memberId`),
  ADD KEY `fk_enrollment_kelas` (`memberId`);

--
-- Indexes for table `file_kurikulum`
--
ALTER TABLE `file_kurikulum`
  ADD KEY `fk_kurikulum_file` (`kurikulumId`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelasId`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`kurikulumId`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`noteId`),
  ADD KEY `fk_author_notifikasi` (`userId`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD KEY `fk_pengajar` (`userId`);

--
-- Indexes for table `private_user`
--
ALTER TABLE `private_user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`programId`);

--
-- Indexes for table `registrasi_kelas`
--
ALTER TABLE `registrasi_kelas`
  ADD PRIMARY KEY (`kelasId`,`memberId`),
  ADD KEY `fk_member_registrasi` (`memberId`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`memberId`,`noSertifikat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kelasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `kurikulumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `noteId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_user`
--
ALTER TABLE `private_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `programId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `backlog_kurikulum`
--
ALTER TABLE `backlog_kurikulum`
  ADD CONSTRAINT `fk_backlog_kurikulum` FOREIGN KEY (`kurikulumId`) REFERENCES `kurikulum` (`kurikulumId`) ON DELETE CASCADE;

--
-- Constraints for table `enrollment_kelas`
--
ALTER TABLE `enrollment_kelas`
  ADD CONSTRAINT `fk_enrollment_kelas` FOREIGN KEY (`memberId`) REFERENCES `member` (`memberId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_enrollment_kelas2` FOREIGN KEY (`kelasId`) REFERENCES `kelas` (`kelasId`);

--
-- Constraints for table `file_kurikulum`
--
ALTER TABLE `file_kurikulum`
  ADD CONSTRAINT `fk_kurikulum_file` FOREIGN KEY (`kurikulumId`) REFERENCES `kurikulum` (`kurikulumId`) ON DELETE CASCADE;

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `fk_author_notifikasi` FOREIGN KEY (`userId`) REFERENCES `private_user` (`userId`);

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `fk_pengajar` FOREIGN KEY (`userId`) REFERENCES `private_user` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `registrasi_kelas`
--
ALTER TABLE `registrasi_kelas`
  ADD CONSTRAINT `fk_member_registrasi` FOREIGN KEY (`memberId`) REFERENCES `member` (`memberId`),
  ADD CONSTRAINT `fk_registrasi_kelas` FOREIGN KEY (`kelasId`) REFERENCES `kelas` (`kelasId`) ON DELETE CASCADE;

--
-- Constraints for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `fk_member_sertifikat` FOREIGN KEY (`memberId`) REFERENCES `member` (`memberId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
