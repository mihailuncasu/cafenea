CREATE DATABASE  IF NOT EXISTS `cafenea` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cafenea`;
-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: cafenea
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `image_name` varchar(45) DEFAULT NULL,
  `incrediente` mediumtext,
  `descriere` longtext,
  `amount` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Espresso',10,50,'cafea','cafea5.png','espresso cu doza dubla de cafea ','Espresso este o cafea concentrată, cu o aromă intensă, pregătită sub presiune într-un aparat special numit espressor. A fost preparată pentru prima dată în Italia, iar numele provine de la timpul rapid de pregătire. ','150 ml'),(2,'Cappuccino clasic',12,50,'cafea','cafea4.png','apa, cappuccino clasic','Bautura instant pe baza de cafea solubila si lapte praf, cu gust de cappuccino classic italian. Usor de preparat, acest produs este excelent pentru acasa sau la birou. ','200 ml'),(3,'Cappuccino vienez',13,50,'cafea','cappuccinoV.png','apa, cappuccino vienez','Bautura instant pe baza de cafea solubila si lapte praf, cu gust de cappuccino classic italian. Usor de preparat, acest produs este excelent pentru acasa sau la birou. ','210 ml'),(4,'Cappuccino cu caramel',13,50,'cafea','cafea6.png','apa, cappuccino cu caramel','Bautura instant pe baza de cafea solubila si lapte praf, cu gust de cappuccino classic italian. Usor de preparat, acest produs este excelent pentru acasa sau la birou. ','250 ml'),(5,'Frappe',15,50,'cafea','frappe.png','apa, gheata, espresso','Dacă vă număraţi printre cei care adoră cafeaua rece, cu siguranţă această reţetă de frappe va fi pe gustul vostru în aceste zile calde de început de vară!','300 ml'),(6,'Iced coffe',10,50,'cafea','ice.png','apa, cafea, gheata','Cafeaua cu gheață este o băutură de cafea servită rece. Poate fi preparat fie prin prepararea cafelei în mod normal și apoi servirea pe gheață sau în lapte rece, fie prin prepararea rece a cafelei.','150 ml'),(7,'Cafea fara cofeina',10,50,'cafea','cafea3.jpg','apa, cafea fara cofeina','Una dintre băuturile preferate de români este cafeaua, chit că e cea de dimineață, sau cea de la prânz.','200 ml'),(8,'Cafea',10,50,'cafea','cafea7.png','apa, cafea','Cafeaua este una dintre cele mai îndrăgite și mai populare băuturi de pe glob. A treia într-un top al cantităților consumate, după apă și ceai, cafeaua are o istorie veche de sute de ani, deși începuturile consumului de cafea sunt învăluite în legende.','200 ml'),(9,'Cheesecake',8,100,'desert','cake12.jpg','Biscuiti, unt, crema de branza, sirop de vanilie, fulgi de ciocolata cu lapte','Cheesecake reteta clasica New York Style. O reteta de baza de cheesecake simplu. O prajitura cu branza fina si cremoasa, cu un blat din biscuiti zdrobiti si cu un topping de caramel. ','150 gr'),(10,'Prajitura cu ciocolata',6,100,'desert','cake2.png','ciocolata belgiana, smantana, unt, ou, faina, nuca, vanilie','O prajitura perfecta pentru iubitorii de ciocolatÄƒ. Un brownie delicios de ciocolatÄƒ belgianÄƒ fina, blat pufos si crocant, un gust care nu se uita. ','150 gr'),(11,'Foietaj cu visine si vanilie',7,100,'desert','cake7.jpg','Lapte, unt, ou, faina, visine, vanilie','Foietaj cu visine, un desert aromat ce iti aduce aminte de copilarie. Am pastrat reteta traditionala si gustul autentic. Foietaj pufos ce imbraca umplutura de visine bine coapte. ','150 gr'),(12,'Briosa cu ciocolata',7,100,'desert','b.png','ciocolata, lapte, praf de copt, ou','O prajitura perfecta pentru iubitorii de ciocolatÄƒ. Un brownie delicios de ciocolatÄƒ belgianÄƒ fina, blat pufos si crocant, un gust care nu se uita. ','150 gr'),(13,'Croissant cu ciocolata',10,50,'desert','cake6.jpg','CiocolatÄƒ belgianÄƒ, ou, fÄƒinÄƒ, lapte, zahar brun, crema de alune de padure','Un croissant fin pentru cei cu gusturi pretenÈ›ioase, o cascadÄƒ de ciocolatÄƒ delicioasÄƒ.','200 gr'),(14,'Merdenea',5,10,'desert','cake9.jpg','Branza, ou, fÄƒinÄƒ, lapte, unt, vanilie, zahar','Un aluat fraged umplut cu o cremÄƒ finÄƒ de brÃ¢nzÄƒ È™i acoperit cu un voal de zahÄƒr pudrÄƒ si vanilie.','200 gr'),(15,'Cornulete cu gem',3,10,'desert','cake10.jpg','Gem, faina, ulei de palmier, zahar','Asemenea celor mai plÄƒcute surprize, cornuleÈ›e cu gem, preparate din aluat fraged, Ã®È›i dau bunÄƒ dispoziÈ›ie È™i poftÄƒ de viaÈ›Äƒ. Aluatul fraged È™i umplutura pusÄƒ din belÈ™ug fac din aceste cornuleÈ›e desertul preferat al Ã®ntregii familii. Un produs de post preparat traditional.','50 gr'),(16,'Fresh de capsuni',8,100,'fresh','fresh1.png','Capsuni, apa, gheara, miere, menta','Un fresh racoritor pentru zilele calduroase de vara. Capsuni proaspat culese din gradinile producatorilor locali, stoarse cu multa grija, un fresh indulcit cu miere naturala.','200 ml'),(17,'Limonada',9,100,'fresh','fresh2.png','Lamai, apa, gheata, miere, menta','Un limonada racoritoare pentru zilele calduroase de vara. ','220 ml'),(18,'Fresh de portocale si zmeura',13,100,'fresh','fresh4.png','Portocale, zmeura, apa, gheata, miere, menta','Un fresh perfect pentru zilele calduroase de vara. Nu este doar gustus, ci si plin de vitamine, incarca-te de energie cu un fresh racoritor.','250 ml'),(19,'Limonada cu zmeura',10,100,'fresh','fresh5.png','Lamai, zmeura, apa, gheata, miere, menta','Un limonada la care am adaugat zmeura bine coapta, o bautura ideala pentru zilele calduroase de vara. ','220 ml'),(20,'Limonada cu menta',10,100,'fresh','fresh6.png','Lamai, menta, apa, gheata, miere','Un limonada cu gust intens de menta, o bautura ideala pentru zilele calduroase de vara. O bautura care isi da instant un boost de energie. ','250 ml'),(21,'Limonada cu menta si ghimbir',15,100,'fresh','fresh8.png','Lamai, menta, apa, gheata, miere','Un limonada cu gust intens de menta si ghimbir, o bautura ideala pentru zilele calduroase de vara. ','250 ml'),(22,'Fresh de rodie',14,50,'fresh','fresh7.png','Rodie, apa, gheata, miere, menta','Un fresh perfect pentru zilele calduroase de vara. Nu este doar gustus, ci si plin de vitamine, incarca-te de energie cu un fresh racoritor.','250 ml'),(23,'Fresh de cirese',14,50,'fresh','fresh9.png','Cirese, zmeura, apa, gheata, miere','Un fresh de sezon perfect pentru zilele calduroase de vara. Nu este doar gustus, ci si plin de vitamine.','250 ml'),(24,'Ceai de menta',8,50,'tea','tea1.jpg','Menta, lamaie, miere, apa ','Ceaiul de menta este unul din cele mai populare infuzii, fiind foarte rÄƒcoritor si un aliat de nadejde in prevenirea si tratarea a numeroase afectiuni. Ceaiul de mentÄƒ stimuleazÄƒ sistemul imunitar deoarece este bogat Ã®n nutrienÅ£i: fosfor, vitamina B, calciu, etc. AceÅŸti nutrienÅ£i Ã®ntÄƒresc sistemul imunitar ÅŸi reduc apariÅ£ie bolilor ÅŸi infecÅ£iilor Ã®n organism. ','150 ml'),(25,'Ceai de musetel',9,100,'tea','tea2.jpg','Musetel ','Daca ti-ai petrecut in copilarie macar o vacanta de iarna la bunici, cu siguranta ai avut parte de cel putin o ceasca aburinda de ceai de musetel. Aceasta planta este printre cele mai cunoscute in Romania, dar foarte putina lume stie care sunt toate proprietatile ei benefice si ce efecte are asupra organismului. Iata tot ceea ce trebuie sa stii despre musetel, de la proprietati la beneficii si la cum iti prepari ceasca perfecta de infuzie. ','150 ml'),(26,'Ceai de fenicul',9,100,'tea','tea3.jpg','Fenicul ','Feniculul este o planta aromatica, iar denumirea stiintifica este Foeniculum vulgare. Este intr-adevar utilizat pe scara larga in scop terapeutic. In principal, semintele de fenicul sunt utilizate in bucataria indiana, precum si in Orientul Mijlociu. Are numeroase avantaje pentru sanatate. Ceaiul de fenicul este un preparat obisnuit in scop medicinal. Este creat prin fierberea semintelor de fenicul zdrobite, impreuna cu alte proceduri normale de preparare a ceaiului. ','250 ml'),(27,'Ceai de soc',10,100,'tea','tea4.jpg','Flori de soc ','Ceaiul de soc este recomandat in cazul racelii, fiind un bun antiinflamator, antioxidant si ajutor pentru sistemul imunitar. Socul poate calma tusea si iritatia cailor respiratorii in raceala, gripa si bronsita. Mai mult, poate trata infectiile bacteriene care afecteaza sinusurile. ','200 ml'),(28,'Ceai de lamaie cu scortisoara',10,100,'tea','tea6.jpg','Lamaie, scortisoara, ghimbir, miere, apa ','Ceaiul de lÄƒmÃ¢ie este metoda naturalÄƒ prin care poÈ›i elimina toxinele din corp È™i alternativa sÄƒnÄƒtoasÄƒ pentru a trata gripa, rÄƒceala È™i durerile Ã®n gÃ¢t È™i de cap. ','50 ml'),(29,'Ceai de ghimbir',10,100,'tea','tea5.jpg','Ghimbir, miere, lamaie ','AceastÄƒ bÄƒuturÄƒ grozav de sanatoasa este recomandatÄƒ pentru tulburÄƒrile digestive, Ã®ntÄƒrirea sistemului imunitar ÅŸi calmarea greÅ£urilor matinale care apar Ã®n cazul unor femei Ã®nsÄƒrcinate. Ceaiul de ghimbir este foarte eficient impotriva unor tipuri de cancer, reduce inflamaÅ£iile articulare ÅŸi durerile reumatice, intareste imunitatea organismului si scade nivelul colesterolului rÄƒu ','350 ml'),(30,'Ceai de lamaie',7,100,'tea','tea7.jpg','Lamaie, ceai verde, miere ','Lamaile au jucat mult timp un rol important in dieta persoanelor din zonele cu clima temperata fiind din timpuri stravechi apreciate pentru virtutile lor medicinale. La fel ca cele mai multe fructe citrice, acestea sunt o sursa excelenta de vitaminele C si B6, iar pectina din lamaie ofera un tip foarte important de fibre dietetice. ','250 ml'),(31,'Ceai de trandafir',14,100,'tea','tea8.jpg','Boboci de trandafir, lamaie, bucati de merisoare, miere ','Ceaiul cu trandafiri, pe langa faptul ca este o bautura cu gust aromat si miros divin, prezinta si importante beneficii asupra sanatatii. Ceaiurile cu trandafiri pot fi gasite fie sub forma de boboci de trandafiri, petale de trandafiri, fie in combinatie cu bucati de fructe, ceea ce sporeste numarul de compusi benefici si imbogateste si mai mult aroma ceaiului. ','150 ml'),(32,'Fursec',4,100,'desert','cake11.jpg','Unt, lapte, faina, ulei de palmier, zahar, ciocolata','Un fursec fraged care se serveste alaturi de o cafea cu lapte.','50 gr');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin','admin@admin.com','0721666749','d033e22ae348aeb5660fc2140aec35850c4da997',1);
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

-- Dump completed on 2021-05-28  2:25:02
