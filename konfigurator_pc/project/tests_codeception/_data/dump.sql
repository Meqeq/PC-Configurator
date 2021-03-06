-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `case`
--

DROP TABLE IF EXISTS `case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `case` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compatibility` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `case`
--

LOCK TABLES `case` WRITE;
/*!40000 ALTER TABLE `case` DISABLE KEYS */;
INSERT INTO `case` VALUES (1,'SilentiumPC Signum SG1 TG','...',189.00,'ATX m-ATX Mini-ITX','SilentiumPC',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/2/pr_2019_2_27_13_16_21_251_00.jpg','{\"mbd\": {\"size\": [\"ATX\", \"m-ATX\", \"ITX\"]}}'),(2,'be quiet! Pure Base 500DX Black','...',479.00,'ATX m-ATX Mini-ITX','be quiet!',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/4/pr_2020_4_23_11_50_6_672_00.jpg','{\"mbd\": {\"size\": [\"ATX\", \"m-ATX\", \"ITX\"]}}'),(3,'Zalman Chasis T6','...',119.00,'ATX m-ATX Mini-ITX','Zalman',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/6/pr_2019_6_25_9_52_40_163_03.jpg','{\"mbd\": {\"size\": [\"ATX\", \"m-ATX\", \"ITX\"]}}');
/*!40000 ALTER TABLE `case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `configs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu_id` int NOT NULL,
  `gpu_id` int NOT NULL,
  `mbd_id` int NOT NULL,
  `ram_id` int NOT NULL,
  `drive_id` int NOT NULL,
  `pccase_id` int NOT NULL,
  `psu_id` int NOT NULL,
  `cooling_id` int NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `benchmark` double DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `public` tinyint(1) DEFAULT NULL,
  `share_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (1,'PREMIUM XXX',1,1,2,2,3,1,2,3,'Super config',0,7138.00,0,1,0,'',NULL,NULL),(2,'Ol\' an\' good',2,1,1,1,1,1,1,2,'Super config MIX',0,7648.00,1,1,1,'',NULL,NULL),(3,'Sven is HUGE',3,3,3,3,3,3,3,3,'Super config 3',0,7024.00,0,1,1,'',NULL,NULL),(4,'Sven is HUGE',3,3,3,3,3,3,3,3,'Super config 3',0,7024.00,0,1,1,'',NULL,NULL);
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cooling`
--

DROP TABLE IF EXISTS `cooling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cooling` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tpd` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooling`
--

LOCK TABLES `cooling` WRITE;
/*!40000 ALTER TABLE `cooling` DISABLE KEYS */;
INSERT INTO `cooling` VALUES (1,'SilentiumPC Fera 3 120mm','...',105.00,'SilentiumPC','AM4 AM3 1151 1200',100,NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/9/pr_2018_9_27_13_38_9_216_00.jpg'),(2,'be quiet! Pure Loop 360mm 3x120mm','...',529.00,'be quiet!','AM4 AM3 1151 1200',30,NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_2_12_3_25_33_04.jpg'),(3,'Noctua NH-D15 2x140mm','...',469.00,'Noctua','AM4 AM3 1151 1200',170,NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/10/pr_2017_10_12_11_24_1_915_00.jpg');
/*!40000 ALTER TABLE `cooling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpu`
--

DROP TABLE IF EXISTS `cpu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cpu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `cores` int NOT NULL,
  `frequency` int NOT NULL,
  `socket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpu`
--

LOCK TABLES `cpu` WRITE;
/*!40000 ALTER TABLE `cpu` DISABLE KEYS */;
INSERT INTO `cpu` VALUES (1,'Intel Core i5-10400F','Poznaj moc do dziesi??tej pot??gi. Nowy procesor Intel?? Core??? i5-10400F z rodziny Comet Lake zapewnia wysok?? wydajno????, kt??ra przek??ada si?? na wzrost produktywno??ci i fantastyczn?? rozrywk??. Intel Core i5 10-generacji oferuje m.in. cz??stotliwo???? dochodz??c?? do 4.3 GHz w trybie turbo, 6 rdzeni, 12 w??tk??w, a tak??e inteligentn?? optymalizacj?? systemu. Odkryj nowe ultramo??liwo??ci z procesorem Intel?? Core??? i5-10400F.',699.00,4,2900,'1200','Intel','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_15_54_11_386_00.jpg',NULL,NULL),(2,'AMD Ryzen 5 3600','Procesor AMD Ryzen 5 3600 korzysta z nowatorskiej architektury Zen 2. To dzi??ki niej CPU osi??ga znakomite wyniki w grach i podczas obs??ugi profesjonalnych aplikacji, utrzymuj??c stale wysok?? wydajno????. Jednostka posiada 6 rdzeni i 12 w??tk??w, a pami???? cache liczy 35 MB. Rdzenie taktowane s?? zegarami bazowymi 3,60 GHz, kt??re wzrasta w trybie Turbo do 4,20 GHz i dostarcza jeszcze wi??cej mocy do pracy oraz rozrywki.',949.00,6,3600,'AM4','AMD','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_19_9_27_42_99_00.jpg',NULL,NULL),(3,'Intel Core i5-9400F','Intel Core i5-9400F to zaawansowany procesor 9-tej generacji pozbawiony zintegrowanego uk??adu graficznego. CPU posiada 6 rdzeni, 6 w??tk??w, 9MB pami??ci SmartCache oraz cz??stotliwo???? bazow?? 2.90GHz, kt??r?? mo??na zwi??kszy?? do 4.10GHz w trybie Turbo. Poczuj moc 9. generacji procesor??w Intel Core.',559.00,6,2900,'1151','Intel','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_18_12_17_33_694_00.jpg',NULL,NULL),(4,'Intel Core i3-10100F','Poznaj moc do dziesi??tej pot??gi. Nowy procesor Intel?? Core??? i3-10100F z rodziny Comet Lake zapewnia wysok?? wydajno????, kt??ra przek??ada si?? na wzrost produktywno??ci i fantastyczn?? rozrywk??. Intel Core i3 10-generacji oferuje m.in. cz??stotliwo???? dochodz??c?? do 4.3 GHz w trybie turbo, 4 rdzenie, 8 w??tk??w, a tak??e inteligentn?? optymalizacj?? systemu. Odkryj nowe ultramo??liwo??ci z procesorem Intel?? Core??? i3-10100F.',399.00,4,3600,'1200','Intel','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_16_8_32_905_00.jpg',NULL,NULL),(5,'AMD Ryzen 5 3500X','Jednostka AMD Ryzen 5 3500X posiada 6 rdzeni i 6 w??tk??w, gotowych do pracy przy maksymalnym obci????eniu w grach i specjalistycznych aplikacjach. Pami???? cache tego procesora liczy ????cznie 35 MB. Bazowe taktowanie rdzeni otwiera cz??stotliwo???? 3,60 GHz, si??gaj??c 4,10 GHz w trybie Turbo. Moc jednostki mo??e jednak wzrosn???? dzi??ki odblokowanemu mno??nikowi. Czas na ogromn?? moc wspart?? przez nowatorsk?? architektur?? Zen 2.',769.00,6,3600,'AM4','AMD','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_19_9_49_52_151_00.jpg',NULL,NULL),(6,'AMD Ryzen 5 2600X',' Procesor AMD Ryzen 5 2600X 2. generacji bazuje na unowocze??nionej mikroarchitekturze Zen+, posiadaj??c 6 rdzeni, 12 w??tk??w i 19 MB pami??ci cache. Bazowe taktowanie zegar??w liczy 3.6 GHz, wzrastaj??c do 4.2 GHz w trybie Turbo. Ma??o tego, odblokowany mno??nik daje mo??liwo???? zwi??kszenia mocy, poprzez podkr??cenie cz??stotliwo??ci taktowania zegar??w CPU. Osi??gaj wi??cej z Ryzen 5 2600X. Wydajno???? procesora nap??dza gaming i stanowi gwarancj?? p??ynnej pracy z zaawansowanymi aplikacjami. Gdy b??dzie to potrzebne, przyspieszenie Precision Boost automatycznie zwi??kszy taktowanie rdzeni do maksimum, uwalniaj??c pe??en potencja?? CPU.',749.00,6,3600,'AM4','AMD','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/4/pr_2018_4_10_12_42_35_199_01.jpg',NULL,NULL),(7,'AMD Ryzen 7 5800X','Jednostka AMD Ryzen 7 5800X posiada 8 rdzeni i 16 w??tk??w, gotowych do pracy przy maksymalnym obci????eniu w grach i specjalistycznych aplikacjach. Pami???? cache tego procesora liczy ????cznie 36 MB, a bazowe taktowanie rdzeni otwiera cz??stotliwo???? 3,80 GHz, mog??ca si??ga?? a?? do 4,70 GHz w trybie Turbo. Moc jednostki mo??e jednak wzrosn???? dzi??ki odblokowanej mo??liwo??ci podkr??cania. Czas na ogromn?? moc wspart?? przez nowatorsk?? architektur?? Zen 3.',2149.00,8,3800,'AM4','AMD','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_9_13_47_7_306_00.jpg',NULL,NULL),(8,'Intel Core i7-10700K','Poznaj moc do dziesi??tej pot??gi. Nowy, odblokowany procesor Intel?? Core??? i7-10700K z rodziny Comet Lake zapewnia znacznie wy??sz?? wydajno????, kt??ra przek??ada si?? na wzrost produktywno??ci i fantastyczn?? rozrywk??. Intel Core i7 10-generacji oferuje m.in. cz??stotliwo???? dochodz??c?? do 5.1 GHz w trybie turbo, 8 rdzeni, 16 w??tk??w, a tak??e inteligentn?? optymalizacj?? systemu. Wbudowane inteligentne funkcje wydajno??ci ucz?? si?? i przystosowuj?? do nawyk??w u??ytkownika oraz dynamicznie kieruj?? moc, tam gdzie jest najbardziej potrzebna. Odkryj nowe ultramo??liwo??ci z procesorem Intel?? Core??? i7-10700K.',1649.00,8,3800,'1200','Intel','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_15_10_34_543_00.jpg',NULL,NULL),(9,'Intel Core i9-10900K','Poznaj moc do dziesi??tej pot??gi. Nowy, odblokowany procesor Intel?? Core??? i9-10900K z rodziny Comet Lake zapewnia znacznie wy??sz?? wydajno????, kt??ra przek??ada si?? na wzrost produktywno??ci i fantastyczn?? rozrywk??. Intel Core i9 10-generacji oferuje m.in. cz??stotliwo???? dochodz??c?? do 5.3 GHz w trybie turbo, 10 rdzeni, 20 w??tk??w, a tak??e inteligentn?? optymalizacj?? systemu. Wbudowane inteligentne funkcje wydajno??ci ucz?? si?? i przystosowuj?? do nawyk??w u??ytkownika oraz dynamicznie kieruj?? moc, tam gdzie jest najbardziej potrzebna. Odkryj nowe ultramo??liwo??ci z procesorem Intel?? Core??? i9-10900K.',2299.00,10,3700,'1200','Intel','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_14_49_13_604_01.jpg',NULL,NULL),(10,'AMD Ryzen 9 5950X','Jednostka AMD Ryzen 9 5950X posiada 16 rdzeni i 32 w??tki, gotowych do pracy przy maksymalnym obci????eniu w grach i specjalistycznych aplikacjach. Pami???? cache tego procesora liczy ????cznie 72 MB, a bazowe taktowanie rdzeni otwiera cz??stotliwo???? 3,40 GHz, mog??ca si??ga?? a?? do 4,90 GHz w trybie Turbo. Moc jednostki mo??e jednak wzrosn???? dzi??ki odblokowanej mo??liwo??ci podkr??cania. Czas na ogromn?? moc wspart?? przez nowatorsk?? architektur?? Zen 3.',4399.00,16,3400,'AM4','AMD','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_9_14_6_57_190_00.jpg',NULL,NULL);
/*!40000 ALTER TABLE `cpu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drive`
--

DROP TABLE IF EXISTS `drive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drive` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `capacity` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interface` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drive`
--

LOCK TABLES `drive` WRITE;
/*!40000 ALTER TABLE `drive` DISABLE KEYS */;
INSERT INTO `drive` VALUES (1,'Crucial MX500 500 GB 2.5\" SATA III','Obejrzyj poni??szy materia?? wideo i dowiedz si??, jakie zalety posiada dysk SSD Crucial MX500. W jedyne 60 sekund zapoznaj si?? z produktem i odkryj jego najwa??niejsze cechy.',265.00,500,'HDD','CRUCIAL','SATA','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/1/pr_2018_1_3_14_2_15_279_01.jpg',NULL,NULL),(2,'ADATA 2TB M.2 PCIe NVMe XPG SX8200 Pro ','Ten przeznaczony dla entuzjast??w PC oraz zapalonych graczy i overclocker??w dysk SSD jest wyposa??ony w bardzo szybki interfejs M.2 PCIe Gen3 x4, zapewniaj??cy utrzymywane maks. szybko??ci odczytu/zapisu na poziomie nawet 3500/3000 MB/s, pozostawiaj??c daleko w tyle mo??liwo??ci tradycyjnego nap??du HDD.',1019.00,2000,'SSD M.2','ADATA','M2','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/11/pr_2018_11_9_9_33_50_536_00.jpg',NULL,NULL),(3,'Toshiba P300 1TB 7200obr. 64MB OEM','Toshiba P300 to szybki, niezawodny i wszechstronny dysk. Je??eli potrzebujesz dodatkowej przestrzeni na zdj??cia, filmy, gry, czy muzyk??, to znalaz??e?? produkt idealny dla siebie. Ten uniwersalny dysk sprawdzi si?? idealnie jako magazyn plik??w dla Twojego domowego komputera. Wysoka pr??dko???? obrot??w pozwala na p??ynny dost??p do folder??w oraz niezak????cone dzia??anie podczas pracy.',175.00,1000,'HDD','Toshiba','SATA','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/7/pr_2017_7_26_14_15_32_657.jpg',NULL,NULL);
/*!40000 ALTER TABLE `drive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gpu`
--

DROP TABLE IF EXISTS `gpu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gpu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `pcie_int` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chipset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RAM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gpu`
--

LOCK TABLES `gpu` WRITE;
/*!40000 ALTER TABLE `gpu` DISABLE KEYS */;
INSERT INTO `gpu` VALUES (1,'MSI GeForce RTX 3070 Gaming X Trio 8GB GDDR6','Wyposa??ona w architektur?? NVIDIA Ampere oraz 8GB pami??ci GDDR6, karta graficzna MSI GeForce RTX 3070 Gaming X Trio 8GB zaoferuje Ci nowatorskie rozwi??zania z zakresu generowania grafiki oraz bezkompromisow?? wydajno????. Naciesz oczy fotorealistyczn?? grafik?? dzi??ki technologii Ray Tracing oraz graj w najnowsze produkcje z niespotykan?? p??ynno??ci??. A o stabilno???? i niezawodno???? pracy zadbaj?? m.in. nowe wentylatory TORX 4.0.',3999.00,'PCI Express 3.0 x16','MSI','Nvidia','8','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_8_12_9_10_401_00.jpg',NULL,NULL),(2,'Gigabyte GeForce GT 1030 2GB GDDR5',' Nowa karta graficzna Gigabyte GeForce GT1030 pozwoli Ci p??ynnie zagra?? w ka??d?? gr?? dost??pn?? na rynku. Przygotuje Ci?? r??wnie?? na nadchodz??ce premiery, umo??liwiaj??c gr?? na wysokich detalach. Nowy uk??ad dysponuje prze??omow?? architektur?? NVIDIA Pascal, oferuj??c najlepsze doznania wizualne, ogromn?? wydajno???? oraz sprawno???? energetyczn??. Sprawd??, jak Gigabyte GeForce GT1030 wygl??da w rzeczywisto??ci. Chwy?? zdj??cie poni??ej i przeci??gnij je w lewo lub prawo, aby obr??ci?? produkt, lub skorzystaj z przycisk??w nawigacyjnych.',319.00,'PCI Express 3.0 x16','Gigabyte','Nvidia','2','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/7/pr_2017_7_24_7_49_13_630.png',NULL,NULL),(3,'Gigabyte GeForce RTX 3060 Ti Gaming OC 8GB GDDR6','Graj na wysokim poziomie detali i p??ynno??ci oraz korzystaj z wyj??tkowych technologii, takich jak Ray Tracing. Oparta o architektur?? NVIDIA Turing karta graficzna Gigabyte GeForce RTX 3060 Ti Gaming OC to wydajna konstrukcja, kt??ra z powodzeniem sprosta wymaganiom zapalonych graczy. Dzi??ki mocnemu uk??adowi ch??odzenia WINDFORCE 3X, zawsze b??dzie pracowa?? w optymalnych temperaturach. Mo??esz te?? podkr??ca?? i monitorowa?? stan karty poprzez oprogramowanie Aorus Engine, a tak??e sterowa?? wbudowanym pod??wietleniem dzi??ki RGB Fusion 2.0.',3049.00,'PCI Express 3.0 x16','Gigabyte','Nvidia','8','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/12/pr_2020_12_1_15_30_31_98_07.jpg',NULL,NULL),(4,'Gigabyte Radeon RX 580 GAMING 8GB GDDR5 rev 2.0','Ciesz si?? p??ynn?? rozgrywk?? z kart?? Gigabyte Radeon RX 580 GAMING 8GB rev 2.0, opart?? o architektur?? Polaris oraz 8GB pami??ci GDDR5. Solidna konstrukcja, wykorzystuj??ca podzespo??y Ultra Durable, pozwala te?? na ??atwy i bezpieczny overclocking z poziomu aplikacji Aorus Engine. W najgor??tszych momentach mo??esz liczy?? na wsparcie uk??adu ch??odzenia Windforce 2X, kt??ry znakomicie rozprasza ciep??o. Tobie pozostaje skupi?? si?? na walce i zdobywa?? kolejne e-trofea.',1699.00,'PCI Express 3.0 x16','Gigabyte','Radeon','8','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/12/pr_2020_12_23_8_33_38_753_04.jpg',NULL,NULL),(5,'Gigabyte GeForce GTX 1660 OC 6GB GDDR5','Karta Gigabyte GeForce GTX 1660 OC oferuje w najnowszych grach wydajno???? por??wnywaln?? z osi??gami modelu GeForce GTX 1070. Dzi??ki wykorzystaniu nowoczesnej architektury NVIDIA Turing mo??esz cieszy?? si?? wyj??tkowo p??ynn?? rozgrywk??, o kt??rej stabilno???? zadba wyj??tkowo efektywny uk??ad ch??odzenia Windforce 2X. Zyskujesz te?? gwarancj?? d??ugiej niezawodno??ci, gdy?? kart?? zbudowano w oparciu o najwy??szej jako??ci komponenty oraz zabezpieczono stylowym backplatem.',1499.00,'PCI Express 3.0 x16','Gigabyte','Nvidia','6','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/3/pr_2019_3_13_19_31_2_889_05.jpg',NULL,NULL),(6,'ASUS Radeon RX 6900 XT 16GB GDDR6','Stworzona aby zapewni?? najwy??sz?? wydajno???? wszystkim graczom, wyj??tkowa karta ASUS RX 6900 XT 16GB GDDR6 wykorzystuje nowatorsk?? architektur?? AMD RDNA 2 oraz 16GB pami??ci GDDR6. Dzi??ki temu zapewnia wyj??tkow?? jako???? i p??ynno???? obrazu podczas gamingu w 4K oraz z wykorzystaniem najnowszych technologii graficznych. Ciesz si?? rozwi??zaniami od AMD, w tym r??wnie?? sprz??towym Ray Tracingiem i do??wiadcz gier w zupe??nie nowy spos??b.',6299.00,'PCI Express 3.0 x16','Asus','Radeon','16','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2021/1/pr_2021_1_5_13_35_35_353_05.jpg',NULL,NULL),(7,'PowerColor Radeon RX 550 Red Dragon 2GB GDDR5','Stworzona aby zapewni?? najwy??sz?? wydajno???? wszystkim graczom, wyj??tkowa karta ASUS RX 6900 XT 16GB GDDR6 wykorzystuje nowatorsk?? architektur?? AMD RDNA 2 oraz 16GB pami??ci GDDR6. Dzi??ki temu zapewnia wyj??tkow?? jako???? i p??ynno???? obrazu podczas gamingu w 4K oraz z wykorzystaniem najnowszych technologii graficznych. Ciesz si?? rozwi??zaniami od AMD, w tym r??wnie?? sprz??towym Ray Tracingiem i do??wiadcz gier w zupe??nie nowy spos??b.',499.00,'PCI Express 3.0 x16','PowerColor','Radeon','2','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2021/1/pr_2021_1_19_16_52_46_264_04.jpg',NULL,NULL);
/*!40000 ALTER TABLE `gpu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mbd`
--

DROP TABLE IF EXISTS `mbd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mbd` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `compatibility` json NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mbd`
--

LOCK TABLES `mbd` WRITE;
/*!40000 ALTER TABLE `mbd` DISABLE KEYS */;
INSERT INTO `mbd` VALUES (1,'Gigabyte B450 AORUS ELITE','Wybierz sprz??t nie wymuszaj??cy ??adnych kompromis??w i do????cz do elitarnego grona posiadaczy sprz??tu sygnowanego mark?? AORUS. Oferowana p??yta g????wna, nap??dzana chipsetem B450, umo??liwia wykorzystanie procesor??w AMD Ryzen 2. generacji oraz zintegrowanych z nimi uk??ad??w graficznych AMD Vega. Cztery sloty DIMM obs??u???? modu??y DDR4 o taktowaniu nawet 3200 MHz (O.C.), a slot M.2 umo??liwi pod????czenia najszybszych dysk??w SSD na rynku.','{\"cpu\": {\"socket\": [\"AM4\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"drive\": {\"interface\": [\"M2\", \"SATA\"]}}',419.00,'Gigabyte','AM4',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/9/pr_2018_9_7_7_30_44_651_02.jpg','ATX'),(2,'ASRock B460 Phantom Gaming 4','Wejd?? do ??wiata gamingu z nowymi procesorami Intel Core 10. generacji oraz p??yt?? g????wn?? ASRock B460 Phantom Gaming 4. Ta dedykowana graczom platforma wspiera pami??ci RAM DDR o taktowaniu nawet 2933 MHz oraz szybkie dyski SSD M.2. Dzi??ki wbudowanemu portowi HDMI mo??esz korzysta?? z wbudowanego w CPU uk??adu graficznego, a tak??e po????czy?? dwie karty graficzne dzi??ki technologii AMD CrossFireX.','{\"cpu\": {\"socket\": [\"1200\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"drive\": {\"interface\": [\"M2\", \"SATA\"]}}',419.00,'AsRock','1200',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_25_9_9_8_671_04.jpg','ATX'),(3,'MSI B450 TOMAHAWK MAX','Wyposa?? si?? w bro??, kt??ra zapewni maksymaln?? wydajno???? i stabilno???? ka??dej rozgrywki. MSI B450 TOMAHAWK MAX z serii Arsenal Gaming to wytrzyma??a i wydajna konstrukcja, wyposa??ona w socket AM4 oraz chipset B450. Umo??liwi Ci wykorzystanie procesor??w AMD Ryzen 3. lub 2. generacji oraz modu????w RAM DDR4 o taktowaniu nawet 4133 MHz (w trybie OC). Ponadto roz??wietlisz wn??trz obudowy stylowym blaskiem pod??wietlenia RGB.','{\"cpu\": {\"socket\": [\"AM4\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"drive\": {\"interface\": [\"M2\", \"SATA\"]}}',429.00,'MSI','AM4',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/8/pr_2019_8_2_12_56_4_381_00.jpg','ATX'),(4,'MSI Z490-A PRO','Seria p??yt g????wnych PRO skierowana jest przede wszystkim do wymagaj??cych u??ytkownik??w dla kt??rych wa??na jest wydajno???? oraz stabilno???? przy du??ych obci????eniach systemu. Zyskaj dzi??ki p??ycie MSI Z490-A PRO profesjonalne narz??dzie do najbardziej wymagaj??cych zastosowa??, zbuduj swoj?? stacj?? robocz??, kt??ra zapewni Ci optymaln?? i bezproblemow?? prac??.','{\"cpu\": {\"socket\": [\"1200\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"drive\": {\"interface\": [\"M2\", \"SATA\"]}}',769.00,'MSI','1200',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_5_21_41_43_403_00.jpg','ATX'),(5,'MSI MAG B460 TOMAHAWK','Seria p??yt g????wnych MAG narodzi??a si?? z pasji do gier stworzon?? j?? po to, aby zapewni?? graczom najbardziej efektywn?? i nieprzerwan?? rozgrywk??. MSI MAG B460 TOMAHAWK ,dzi??ki rygorystycznym testom jako??ci zosta??a symbolem solidno??ci i trwa??o??ci. Skoncentrowana na zapewnieniu jak najlepszych wra??e?? u??ytkownikom zapewnia szybk?? instalacj??, kt??ra w po????czeniu z przyjaznym interfejsem jest idealn?? propozycj?? zar??wno dla zaawansowanych jaki i pocz??tkuj??cych graczy.','{\"cpu\": {\"socket\": [\"1200\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"drive\": {\"interface\": [\"M2\", \"SATA\"]}}',569.00,'MSI','1200',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_27_12_19_16_814_00.jpg','m-ATX'),(6,'MSI B365M PRO-VH','Zyskaj doskona???? baz?? pod komputer do profesjonalnych zastosowa?? P??yta g????wna MSI B365M PRO-VH jest dedykowana do obs??ugi procesor??w Intel 9. i 8. generacji, kompatybilnych z socketem 1151. W po????czeniu z technologi?? Core Boost mo??esz wykorzysta?? pe??en potencja?? CPU, kt??ry wspomaga?? b??dzie pami???? RAM DDR4 o taktowaniu nawet 2666 MHz. Postaw na jako????, kt??ra nie zawiedzie Ci?? w ??adnej sytuacji.','{\"cpu\": {\"socket\": [\"1151\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"interface\": {\"type\": [\"SATA\"]}}',259.00,'MSI','1151',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_27_12_19_16_814_00.jpg','m-ATX'),(7,'Gigabyte X570 AORUS ELITE','Wyposa?? si?? w bro??, kt??ra zapewni maksymaln?? wydajno???? i stabilno???? ka??dej rozgrywki. MSI B450 TOMAHAWK MAX z serii Arsenal Gaming to wytrzyma??a i wydajna konstrukcja, wyposa??ona w socket AM4 oraz chipset B450. Umo??liwi Ci wykorzystanie procesor??w AMD Ryzen 3. lub 2. generacji oraz modu????w RAM DDR4 o taktowaniu nawet 4133 MHz (w trybie OC). Ponadto roz??wietlisz wn??trz obudowy stylowym blaskiem pod??wietlenia RGB.','{\"cpu\": {\"socket\": [\"AM4\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"drive\": {\"interface\": [\"M2\", \"SATA\"]}}',859.00,'Gigabyte','AM4',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_4_12_4_46_676_04.jpg','ATX'),(8,'ASUS PRIME Z390-P','Skorzystaj z mo??liwo??ci procesor??w Intel Core 8. i 9. generacji, wybieraj??c jako baz?? do swojego komputera t?? unikaln?? p??yt?? g????wn??. PRIME Z390-P umo??liwi Ci przy tym skorzystanie z uk??ad??w graficznych wbudowanych w CPU lub stworzenie konfiguracji AMD Crossfire. Aby Tw??j system pracowa?? jeszcze sprawniej, zainstaluj go na dysku SSD umieszczonym w z????czu M.2. Specjalna technologia OptiMem II usprawniaj??ca przekazywanie sygna????w sprawia, ??e pami???? RAM pracuje ze zwi??kszon?? stabilno??ci??, a ty mo??esz korzysta?? taktowania modu????w nawet 4266 MHz (O.C.).','{\"cpu\": {\"socket\": [\"1151\"]}, \"ram\": {\"type\": [\"DDR4\"]}, \"drive\": {\"interface\": [\"SATA\"]}}',569.00,'Asus','1151',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/10/pr_2018_10_5_10_11_28_406_00.jpg','ATX');
/*!40000 ALTER TABLE `mbd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_12_28_145042_create_configs_table',1),(5,'2020_12_28_145129_create_cpu_table',1),(6,'2020_12_28_145144_create_gpu_table',1),(7,'2020_12_28_145153_create_mbd_table',1),(8,'2020_12_28_145202_create_ram_table',1),(9,'2020_12_28_145210_create_drive_table',1),(10,'2020_12_28_145220_create_cooling_table',1),(11,'2020_12_28_145229_create_psu_table',1),(12,'2020_12_28_145237_create_case_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `psu`
--

DROP TABLE IF EXISTS `psu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `psu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `power` int NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `psu`
--

LOCK TABLES `psu` WRITE;
/*!40000 ALTER TABLE `psu` DISABLE KEYS */;
INSERT INTO `psu` VALUES (1,'SilentiumPC Vero L3 600W 80 Plus Bronze','Zasilacz ATX Vero L3 600 W to bardzo wysoka sprawno????, potwierdzona certyfikatem 80 PLUS Bronze 230V, nowoczesne i wydajne konwertery DC-DC, bardzo mocna pojedyncza linia +12 V, jak r??wnie?? bardzo ciche dzia??anie w du??ym zakresie obci????enia, a tak??e bogaty zestaw p??askiego i czarnego okablowania. Wysokie parametry zasilaczy komputerowych Vero L3 to efekt u??ycia w ich budowie sprawdzonych komponent??w wysokiej klasy, znanych dotychczas raczej z wy??szych segment??w.',239.00,600,'SilentiumPC',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/4/pr_2020_4_14_15_32_15_807_05.jpg'),(2,'be quiet! Straight Power 11 750W 80 Plus Gold','Zale??y Ci na bezkompromisowej stabilno??ci zasilania? Wybierz be quiet! Straight Power 11 750 W ??? zasilacz stworzony z my??l?? o zaawansowanych systemach, gdzie liczy si?? niezachwiana stabilno???? oraz superciche ch??odzenie. Dzi??ki japo??skim kondensatorom zasilacz odznacza si?? niezawodno??ci??, a tak??e wytrzyma??o??ci?? do 105??. Posiada r??wnie?? w pe??ni modularne zarz??dzanie przewodami, gwarantuj??ce maksymaln?? elastyczno???? konfiguracji oraz cztery, wysokowydajne linie 12V. be quiet! Straight Power 11 750 W zapewnia ponadto wsparcie dla najmocniejszych GPU z dwoma z????czami PCI-e.',619.00,750,'be quiet!',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/1/pr_2018_1_8_8_37_14_83_04.jpg'),(3,'SilentiumPC Elementum E2 450W 80 Plus (BULK)','Zasilacz Elementum E2 SI 450W 80plus EU zaprojektowano z my??l?? o integratorach komputer??w PC. Moc oraz okablowanie zosta??y dobrane tak, aby pozwoli?? na zbudowanie praktycznie dowolnego zestawu z pojedyncz?? kart?? graficzn?? wymagaj??c?? z????cza zasilania PCI-E 6 lub 8 pin..',155.00,450,'SilentiumPC',NULL,NULL,'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/7/pr_2018_7_31_13_9_54_183_00.jpg');
/*!40000 ALTER TABLE `psu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ram`
--

DROP TABLE IF EXISTS `ram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ram` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `capacity` int NOT NULL,
  `speed` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ram`
--

LOCK TABLES `ram` WRITE;
/*!40000 ALTER TABLE `ram` DISABLE KEYS */;
INSERT INTO `ram` VALUES (1,'G.SKILL 32GB (2x16GB) 3600MHz CL16 TridentZ RGB Neo','Modu??y pami??ci RAM DDR4 G.SKILL Trident Z Neo zosta??y zaprojektowane i zoptymalizowane pod k??tem pe??nej kompatybilno??ci z najnowszymi procesorami AMD Ryzen 3000 na p??ytach g????wnych z chipsetem AMD X570, Charakteryzuj??ce si?? unikatowym designem i wyj??tkowymi osi??gami, modu??y Neo dodadz?? wn??trzu Twojej obudowy agresywnego charakteru, a przy tym zapewni?? wydajno???? na potrzeby obs??ugi najbardziej wymagaj??cych aplikacji.',1059.00,32,3600,'DDR4','HyperX','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/9/pr_2019_9_19_11_11_26_260_02.jpg',NULL,NULL),(2,'Corsair 16GB (2x8GB) 3200MHz CL16 Vengeance RGB Pro',' Przetaktowana pami???? Corsair Vengeance RGB Pro to najwy??sza przepustowo???? i kr??tki czas reakcji. Zoptymalizowano je pod k??tem maksymalnej wydajno??ci na najnowszych p??ytach g????wnych obs??uguj??cych procesory Intel oraz AMD. Niestandardowa, wysokowydajna p??ytka drukowana zapewnia najwy??sz?? jako???? sygna??u, wydajno???? i stabilno????. Stylowe pod??wietlenie RGB poprawi estetyk?? Twojego komputera, jednocze??nie zapewniaj??c wyj??tkowo ??atw?? instalacj??, nie wymagaj??c?? pod????czania dodatkowych przewod??w.',509.00,16,3200,'DDR4','Corsair','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/7/pr_2018_7_24_18_16_10_97_06.jpg',NULL,NULL),(3,'G.SKILL 16GB (2x8GB) 3000MHz CL16 Aegis ','G.SKILL AEGIS oferuje natychmiastowy wzrost wydajno??ci i stabilno??ci dla wszystkich system??w gier PC. Pami??ci tej serii to jeden z najprostszych i najbardziej efektywnych kosztowo sposob??w, aby uaktualni?? swoje wra??enia w grach. Niezale??nie czy jest to gra typu first-person shooter (FPS), strategia czasu rzeczywistego (RTS) czy nawet MMORPG, pami??ci G.SKILL Aegis wyzwol?? prawdziw?? moc Twojego systemu gier bez wzgl??du na to w jakie gry grasz!',329.00,16,3000,'DDR4','G.SKILL','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/7/pr_2017_7_25_8_30_15_211.jpg',NULL,NULL),(4,'Patriot 16GB (2x8GB) 3200MHz CL16 Viper 4',' Seria Viper to pami??ci doskonale sprawdzaj??ce si?? przy podkr??caniu komputer??w wyposa??onych w procesory Intel Core. Pami??ci Viper s?? wykonane z najwy??szej jako??ci komponent??w i poddane zosta??y dok??adnym testom jako??ci oraz kompatybilno??ci. Oferuj?? taktowanie 3200MHz oraz op????nienie na poziomie CL16. Aluminiowe radiatory, zaprojektowane specjalnie dla pami??ci Viper, zapewniaj?? utrzymanie niskich temperatur, a do tego ??wietnie prezentuj?? si?? w obudowie gamingowego komputera. Gwarantuj?? wydajn?? i stabiln?? prac?? w ka??dych warunkach.',349.00,16,3200,'DDR4','Patriot','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/2/pr_2019_2_13_11_24_37_807_00.jpg',NULL,NULL),(5,'HyperX 8GB (1x8GB) 2666MHz CL16 Fury ','Zmodernizuj sw??j system dzi??ki ekonomicznej i wysokowydajnej pami??ci RAM DDR4 HyperX FURY, oferuj??cej taktowanie 2666 MHz oraz op????nienia na poziomie CL16. Ka??dy modu?? pami??ci FURY DDR4 przechodzi testy przy pe??nej szybko??ci i jest obj??ty wieczyst?? gwarancj??. To bezproblemowa i przyst??pna cenowo modernizacja Twojego systemu.',169.00,8,3200,'DDR4','HyperX','https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/8/pr_2019_8_14_10_28_45_513_00.jpg',NULL,NULL);
/*!40000 ALTER TABLE `ram` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John Doe','john.doe@gmail.com','normal',NULL,'$2y$10$cLhWf1jmDecmZRctoo7KeutqQ/DcQ5U4oL7ZotKugOnrIdf0nXYgq',NULL,NULL,NULL),(2,'Bartosz Chwala','chwala69@gmail.com','normal',NULL,'$2y$10$UZJYi4T9FFoSlgiOs4GPT.GBCcq1ZzthJkHWlA7ArWfMhkDwMCoTO',NULL,NULL,NULL),(3,'admin','admin31337@gmail.com','admin',NULL,'$2y$10$rhVvh396bjR8cUyq6H5Wd.yDOpZJMxB2/OZ.KAEJ3enIFVYYlYzzi',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-26 23:55:08
