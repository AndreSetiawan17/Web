-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: alpha
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jare`
--

DROP TABLE IF EXISTS `jare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jare` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `day` varchar(6) DEFAULT NULL,
  `time` varchar(12) DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jare`
--

LOCK TABLES `jare` WRITE;
/*!40000 ALTER TABLE `jare` DISABLE KEYS */;
INSERT INTO `jare` VALUES (1,'Mushoku Tensei II: Isekai Ittara Honki Dasu - Shugo Jutsushi Fitz','Senin','07:00',NULL),(2,'Eiyuu Kyoushitsu',NULL,NULL,NULL),(3,'Level 1 dakedo Unique Skill de Saikyou desu',NULL,NULL,NULL),(4,'Liar Liar',NULL,NULL,NULL),(5,'AI no Idenshi',NULL,NULL,NULL),(6,'Jidou Hanbaiki ni Umarekawatta Ore wa Meikyuu wo Samayou',NULL,NULL,NULL),(7,'Jitsu wa Ore, Saikyou deshita?',NULL,NULL,NULL),(8,'Okashi na Tensei','Rabu','05:30','Otakudesu'),(9,'Tonikaku Kawaii: Joshikou-hen',NULL,NULL,NULL),(10,'Seija Musou: Salaryman, Isekai de Ikinokoru Tame ni Ayumu Michi',NULL,NULL,NULL);
/*!40000 ALTER TABLE `jare` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kagejitsu`
--

DROP TABLE IF EXISTS `kagejitsu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kagejitsu` (
  `volume` tinyint DEFAULT NULL,
  `segment` varchar(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `paragraph` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kagejitsu`
--

LOCK TABLES `kagejitsu` WRITE;
/*!40000 ALTER TABLE `kagejitsu` DISABLE KEYS */;
INSERT INTO `kagejitsu` VALUES (1,'prolog','Prolog :  Mempersiapkan panggung yang sempurna!',NULL),(1,'chapter1','Chapter 1 : Memulai pelatihan Shadowbroker',NULL),(1,'chapter2','Chapter 2 : Mengasumsikan Peran Karakter Sampingan di Sekolah!',NULL),(1,'chapter3','Chapter 3 : Resmi , Aku Memulai sebagai Dalang Yang Beraksi! Bagian 1',NULL),(1,'chapter4','Chapter 4 : Resmi , Aku Memulai sebagai Dalang Yang Beraksi! Bagian 2',NULL),(1,'chapter5','Chapter 5 : Dua Sisi Shadow Garden ?!',NULL),(1,'chapter6','Chapter 6 : Menguasai Kehidupan Damai dari Tak Seorang Pun!',NULL),(1,'chapter7','Chapter 7 : Adegan Di Mana Teroris Mengambil Alih Sekolah',NULL),(1,'final','Final Chapter : Ideku tentang Komandan Shadow Tertinggi!',NULL),(1,'extra','Extra Chapter : Catatan Kejadian Master Shadow Lengkap',NULL),(2,'prolog','Prolog : Untuk Lindwurm, Tanah Suci!',NULL),(2,'chapter1','Chapter 1 : Saat-saat Menyenangkan di Ujian Dewi!',NULL),(2,'chapter2','Chapter 2 : Menyelidiki Tempat Suci!',NULL),(2,'chapter3','Chapter 3 : Ketika Segala Sesuatu Menjadi Membosankan, Saatnya Meledak!',NULL),(2,'chapter4','Chapter 4 : Situasi Ini Menyebutkan “Siapa Orang Itu ?!”',NULL),(2,'chapter5','Chapter 5 : Pertarungan untuk Menarik MVP Saja!',NULL),(2,'chapter6','Chapter 6 : Mastermind Selalu Memainkan Piano di Bawah Cahaya Bulan!',NULL),(2,'chapter7','Chapter 7 : Memamerkan Sedikit Kekuatanku sendiri!',NULL),(2,'chapter8','Chapter 8 : Arahkan Matamu Pada Kekuatan Sejatiku!',NULL),(2,'final','Final Chapter : Siapa Orang Keren Misterius Ini ?!',NULL),(3,'prolog','Prolog : Dalam perjalanan ke kota tanpa hukum saat liburan musim gugur',NULL),(3,'chapter1','Chapter 1 : Ayo berburu bandit di kota!',NULL),(3,'chapter2','Chapter 2 : Infiltrasi di menara merah!',NULL),(3,'chapter3','Chapter 3 : Pergi untuk Ratu Darah!',NULL),(3,'chapter4','Chapter 4 : Aku akan menghancurkan segalanya dan kemudian memperbaruinya!',NULL),(3,'chapter5','Chapter 5 : Membuat uang palsu diam-diam, sementaraMitsugoshi dan Asosiasi Perdagangan Besar saling bertarung!',NULL),(3,'chapter6','Chapter 6 : Ayo bagikan Uang Palsu itu!',NULL),(3,'epilog','Epilog : Uang palsu akan menghancurkan segalanya dan mengambilnya kembali.',NULL),(4,'prolog','Prolog : Perang di Kerajaan Oriana!',NULL),(4,'chapter1','Chapter 1 : Hindari Pernikahan Rose Oriana!',NULL),(4,'chapter2','Chapter 2 : Menerapkan Rencana untuk Menghentikan Pernikahan!',NULL),(4,'chapter3','Chapter 3 : Terlibat dalam Acara Pernikahan!',NULL),(4,'interlude','Interlude : Pemburu Bandit, Slayer the Graceful, memasuki tempat kejadian!',NULL),(4,'chapter4','Chapter 4 : Bersembunyi dalam Bayangan Jepang yang misterius!',NULL),(4,'chapter5','Chapter 5 : Dalam bayang-bayang Jepang nostalgia ku!',NULL),(4,'epilog','Epilog : Lihatlah Shadow Eminence yang Dikembangkan!',NULL),(5,'prolog','Prolog : Kegelapan yang mengintai di sekolah, kasus siswa yang hilang! ',NULL),(5,'chapter1','Chapter 1 : Kembalinya kakakku dan perkembangan penyakitnya…! ',NULL),(5,'chapter2','Chapter 2 : Pagi mengejutkan, pembunuhan di sekolah! ',NULL),(5,'chapter3','Chapter 3 : Kasusnya ditutup, ayo kita bicarakan tentang cerita lama! ',NULL),(5,'chapter4','Chapter 4 : Hari ini dunia kembali damai! ',NULL),(5,'chapter5','Chapter 5 : Teroris di akademi lagi!!!',NULL),(5,'epilog','Epilog : Jika aku bisa mendapatkannya, aku bisa menghancurkan dunia!',NULL);
/*!40000 ALTER TABLE `kagejitsu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `session` (
  `id` int NOT NULL,
  `kunci` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kunci` (`kunci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES (1,'5a4a3e0225296a7b9a84bad2f6e7a0d1d882542a30d140b2f1e6f75b7f2691c5e45df4ce1eebddda4c2cfa764a91fdc6687d4f6270f345c95c24ba0b411f60ae339f07cf21871fb858181c47c514847ae19e31b3cf2550b35167656baffdb61291abe5f8'),(2,'d5e1a2abfe9cb605f1a408f50b0a31d9d391a04b84dd5fba8b92575ab5022393051b0089f8eb6080b4eb0a8c2060bb766222b8c62e3ce92091ef34c9978cbff582bb014362317ae0a2f6c5702a7704405e12a984d2c7522bb1f36f94354e7f3bd3116617');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(6) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'andre','andre','$2y$10$TjgGoG5ScGFjVMpYWlfPz.wan.FyzIirODxLXvRbXyCkG0JrXlXda','male','2023-07-04');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-16 18:47:34
