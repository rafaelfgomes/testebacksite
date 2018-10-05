-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: db_noticias
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `rafaelfgomes_tbl_categories`
--

DROP TABLE IF EXISTS `rafaelfgomes_tbl_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rafaelfgomes_tbl_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rafaelfgomes_tbl_categories`
--

LOCK TABLES `rafaelfgomes_tbl_categories` WRITE;
/*!40000 ALTER TABLE `rafaelfgomes_tbl_categories` DISABLE KEYS */;
INSERT INTO `rafaelfgomes_tbl_categories` VALUES (1,'Tecnologia'),(2,'Esportes'),(3,'Entretenimento'),(4,'Economia'),(5,'Destaque'),(6,'Populares'),(7,'Mais vistas');
/*!40000 ALTER TABLE `rafaelfgomes_tbl_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rafaelfgomes_tbl_news`
--

DROP TABLE IF EXISTS `rafaelfgomes_tbl_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rafaelfgomes_tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_description` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_keywords` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category` (`category_id`),
  CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `rafaelfgomes_tbl_categories` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rafaelfgomes_tbl_news`
--

LOCK TABLES `rafaelfgomes_tbl_news` WRITE;
/*!40000 ALTER TABLE `rafaelfgomes_tbl_news` DISABLE KEYS */;
INSERT INTO `rafaelfgomes_tbl_news` VALUES (1,'Paralamas Rock in Rio','A banda Paralamas do Sucesso vai se apresentar...','paralamas-no-rock-in-rio','paralamas, música, rockinrio','A banda Paralamas do Sucesso vai se apresentar no Palco Mundo do Rock in Rio em 2019. A informação foi confirmada nesta terça-feira (2) por Roberto Medina, presidente do evento, em um encontro especial com Herbert Vianna, Bi Ribeiro e João Barone.','entertainment/c8642c6cb4a83c72fd9b94c4b9c5cb89.jpg',3,'2018-10-03 04:26:14','2018-10-03 04:26:14'),(2,'Internet mais rápida','Nova tecnologia permite internet mais rápida','internet-mais-rapida','internet, tecnologia, revolução','Uma nova tecnologia vai permitir que você navegue em velocidades mais rápidas na internet no futuro. Em estudo publicado na revista Nature, pesquisadores da Universidade de Hong Kong e de Harvard, em parceira com laboratórios de tecnologia da informação, relatam que conseguiram fazer um novo \"modulador óptico\".','technology/c821f2bf111a3c7edfe7b224fa042e84.jpg',1,'2018-10-03 04:32:03','2018-10-03 04:32:03'),(3,'Queda do dólar','Dólar cai 2,08% e fecha a R$ 3,935.','queda-do-dolar','queda, dólar, mercado','O dólar comercial emendou o segundo recuo seguido e fechou em queda de 2,08% nesta terça-feira (2), a R$ 3,935 na venda, menor valor desde 17 de agosto (R$ 3,915). É a maior queda percentual diária em mais de três meses, desde 15 de junho (-2,15%).','economy/b096a3d0d92f7060c8282cd7956a84aa.png',4,'2018-10-03 04:37:37','2018-10-03 04:37:37'),(4,'Calendário 2019','Calendário 2019 repete problemas com data-Fifa','calendario-2019','calendario, esportes, brasil','A CBF divulgou nesta quarta-feira (3) o calendário do futebol brasileiro em 2019. De modo geral, a temporada terá os problemas já conhecidos: os campeonatos não param em datas-Fifa, que podem ter influência direta nas disputas por títulos do Brasileirão e da Copa do Brasil — exatamente como neste ano. A novidade é uma janela para a Copa América, a exemplo do que acontece em anos de Copa do Mundo.','sports/24258d282978444bf64de1b5cf5b8207.jpg',2,'2018-10-03 23:54:32','2018-10-03 23:54:32'),(5,'Caminhonete bate em carro de passeio','Aconteceu no cruzamento no Campo Grande','caminhonete-bate-em-carro-de-passeio','acidente, cruzamento, caminhonete','Uma caminhonete bateu em um carro de passeio na tarde desta quarta-feira (3), no Campo Grande, em Santos. Ninguém ficou ferido mas, devido ao acidente, o cruzamento entre as ruas Carlos Gomes e Almirante Barroso precisou ser interditado.','popularnews/cc8d6c2689d140c7777d2b1efbebd1ff.jpg',6,'2018-10-04 00:04:47','2018-10-04 00:04:47'),(6,'Vagas temporárias','Categoria projeta que 46% devem contratar','vagas-temporarias','vagas, emprego, temporarios','As lojas de rua na região devem abrir até 5 mil vagas temporárias para dar suporte ao aumento nas vendas para o Natal e o Ano-Novo, de acordo com estimativa do Sindicato do Comércio Varejista da Baixada Santista. Pesquisa feita pela entidade mostra que 46% dos entrevistados devem contratar trabalhadores temporários e a maioria planeja aumentar o quadro com dois novos funcionários.','popularnews/ae691d7bfe85772b3f1bf4d162d76f7c.jpg',6,'2018-10-04 02:53:14','2018-10-04 02:53:14'),(7,'Capturado homem mais procurado da França','Redoine Faid usou helicóptero para fugir de prisão','capturado-homem-mais-procurado-da-franca','procurado, frança, fuga','O homem mais procurado da França, Redoine Faid, foi detido na madrugada desta quarta-feira (3), três meses depois de sua espetacular fuga de helicóptero de uma prisão onde cumpria pena de 25 anos. Este fã de filmes de gângsteres, especializado no roubo de carros-fortes, foi detido às 4h da madrugada (hora local), em um apartamento em Créteil, ao norte de Paris, onde nasceu e cresceu.','featured/ef4e64f5e643dcec9b422407feb499c0.jpg',5,'2018-10-04 03:03:05','2018-10-04 03:03:05'),(8,'Atentado Major Costa e Silva','Carro de candidato é alvo de disparos','atentado-major-costa-e-silva','atentado, disparos, candidato','O carro do candidato da Democracia Cristã (DC) ao governo do estado de São Paulo, Major Costa e Silva, foi alvo de disparos na noite desta terça-feira (3) na Estrada Cooperativa, em Ribeirão Pires, na Grande São Paulo. O caso foi registrado na delegacia do município.','mostviewed/ceec7c6a33c3e925d9c2129666768e96.jpg',7,'2018-10-04 04:33:30','2018-10-04 04:33:30'),(9,'Acidente em Santos','Operário atingido tem traumatismo craniano','acidente-em-santos','acidente, operário, traumatismo','Os dois operários que sobreviveram após placas de mármore caírem sobre eles, na noite da última quarta-feira (3), em frente a uma loja em Santos, no litoral de São Paulo, estão internados na Santa Casa da cidade.','noimage.png',6,'2018-10-04 23:41:19','2018-10-04 23:45:01');
/*!40000 ALTER TABLE `rafaelfgomes_tbl_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_noticias'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-04 20:49:47
