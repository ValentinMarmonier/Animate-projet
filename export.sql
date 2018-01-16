-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: ProjetAnimate
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `article_blog`
--

DROP TABLE IF EXISTS `article_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `video` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_blog`
--

LOCK TABLES `article_blog` WRITE;
/*!40000 ALTER TABLE `article_blog` DISABLE KEYS */;
INSERT INTO `article_blog` VALUES (18,'ANIMATE DE RETOUR DES ENTRETIENS D’ORTHOPHONIE 2017','Cette année, AniMate a proposé d’animer un baromètre de la satisfaction des participants au congrès des Entretiens d’Orthophonie 2017. Par le biais de 4 pictogrammes émotions distribués au cours du congrès, chaque congressiste a ainsi pu donner son ressenti général à l’issue des deux journées de conférences.\r\n\r\nVoici les résultats obtenus :','DiagrammeBlog1.jpg','blog',''),(19,'TÉMOIGNAGE DE BARBARA BODARD','Découvrez notre première vidéo d’introduction aux tutoriels vidéo, avec Barbara Bodard notre partenaire orthophoniste :','','blog','<iframe src=\"https://player.vimeo.com/video/194894506\" width=\"640\" height=\"360\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),(20,'ANIMATE AU PREMIER FORUM ASPERGER FAMILY À SAINTE ADRESSE (76)','Hello les amis,\r\n\r\nAniMate participait samedi dernier au premier forum sur l’autisme organisé par Asperger Family à Sainte Adresse près du Havre.\r\n\r\nNous en profitons pour remercier chaleureusement l’association et en particulier Stéphanie Audebert pour nous avoir permis de participer à ce forum, mais aussi toutes celles et ceux qui sont venus échanger avec nous sur notre stand.\r\n\r\nPour plus d’informations :  https://www.facebook.com/AspergerFamily/','EricBlog.jpg','',''),(21,'LE KIT DE PICTOGRAMMES « BESOINS PRIMAIRES » DISPONIBLE.','LE KIT DE PICTOGRAMMES « BESOINS PRIMAIRES » DISPONIBLE.\r\nIl est désormais possible de personnaliser son avatar Animate avec le kit « besoins primaires » qui peuvent être parfois forts utiles.\r\n\r\nFaim, malade, besoin pressant, froid etc… il est désormais encore plus facile de s’exprimer avec ce kit.','BesoinPrimaireBlog.jpg','Blog','');
/*!40000 ALTER TABLE `article_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cibles`
--

DROP TABLE IF EXISTS `cibles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cibles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `video` longtext COLLATE utf8_unicode_ci NOT NULL,
  `temoignage` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cibles`
--

LOCK TABLES `cibles` WRITE;
/*!40000 ALTER TABLE `cibles` DISABLE KEYS */;
/*!40000 ALTER TABLE `cibles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cibles_description`
--

DROP TABLE IF EXISTS `cibles_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cibles_description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chapeau` longtext COLLATE utf8_unicode_ci NOT NULL,
  `thematique` longtext COLLATE utf8_unicode_ci NOT NULL,
  `en_savoir_plus` longtext COLLATE utf8_unicode_ci NOT NULL,
  `atouts` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cibles_description`
--

LOCK TABLES `cibles_description` WRITE;
/*!40000 ALTER TABLE `cibles_description` DISABLE KEYS */;
/*!40000 ALTER TABLE `cibles_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nom` longtext COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date_message` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'dede@jon.fr','jaja22','fgrgsdwefwsd','2018-01-15 11:22:34'),(2,'valentin.marmonier@free.fr','John','test post','2018-01-15 11:24:47');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kits`
--

DROP TABLE IF EXISTS `kits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_kit` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contenu_kit` longtext COLLATE utf8_unicode_ci NOT NULL,
  `info_complementaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagefiche` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kits`
--

LOCK TABLES `kits` WRITE;
/*!40000 ALTER TABLE `kits` DISABLE KEYS */;
INSERT INTO `kits` VALUES (1,'Kit AniMate \"classique\"','Ce kit AniMate, conçu en partenariat avec nos partenaires scientifiques, est centré autour de la thématique des émotions.\r\n\r\nIl comporte également quelques pictogrammes symboliques (OK, Non, J’aime, …) et pictogrammes vierges pour l’aide à la communication non verbale.\r\n\r\nIl comporte enfin une casquette vierge à coller sur la tête de l’avatar pour réaliser des mises en situation, par exemple dans le cadre de groupes d’habiletés sociales.\r\n\r\n \r\n\r\nKit assemblé et conditionné en ESAT (La Chrysalide à Marseille).','- Une figurine / Avatar Animate\r\n- Un socle\r\n- Une boite de cartes avec support porte-cartes\r\n -Plusieurs jeux de cartes pictogrammes\r\n  - 12 cartes pictogrammes messages, dont 2 vierges\r\n  - 19 cartes émotions comprenant 6 émotions primaires, 7 émotions « fines » et 6 visages de douleurs\r\n  - 1 carte « casquette » pour réaliser des mises en situation\r\n  - 1 étiquette porte-nom\r\n- Un marqueur\r\n- Une valisette de rangement du kit Animate','Poids : 2kg',150,'kitClassique.png','kit','kitClassiqueFiche.jpg'),(2,'Kit découverte pour les familles','','','',75,'kitDecouverte.jpg','kit','kitDecouverteFiche.png'),(3,'Kit AniMate simple','Sur demande de nos clients, nous proposons ce kit simple pour permettre une utilisation du kit à plusieurs / en groupe, en mutualisant les pictogrammes.','','',75,'kitAnimateSimple.jpg','kit','kitAnimateSimpleFiche.jpg');
/*!40000 ALTER TABLE `kits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20171227143115'),('20171227144042'),('20171227144637'),('20180104111332'),('20180104112002'),('20180104113227'),('20180104124225'),('20180107130147'),('20180110092731'),('20180110125125'),('20180111142347');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictogrammes`
--

DROP TABLE IF EXISTS `pictogrammes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pictogrammes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagefiche` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictogrammes`
--

LOCK TABLES `pictogrammes` WRITE;
/*!40000 ALTER TABLE `pictogrammes` DISABLE KEYS */;
INSERT INTO `pictogrammes` VALUES (1,'Schéma corporel adulte\r\n','Les mêmes pictogrammes que le Schéma Corporel Enfant, mais en version adulte – homme et femme.',50,'pictoCorporelAdulte.png','pictogramme','pictoCorporelAdulteFiche.jpg'),(2,'Schéma corporel enfant\r\n','Travaillez efficacement sur le schéma corporel avec ces pictogrammes Puzzle, qui se fixent sur la figurine AniMate.',50,'pictoCorporelEnfant.jpg','pictogramme','pictoCorporelEnfantFiche.jpg'),(3,'Kit Vêtements\r\n','Kit de vêtements AniMate®, 34 pictogrammes',45,'pictoVetements.jpg','pictogramme','pictoVetementsFiche.png'),(4,'Hygiène Corporelle\r\n','Utilisez ces pictogrammes pour travailler le thème de l’hygiène corporelle avec la figurine AniMate et développez ainsi l’autonomie et le maintien des acquis sur tout ce qui concerne :\r\n\r\n- la toilette quotidienne\r\n- l’hygiène élémentaire\r\n- le soin du visage\r\n…',40,'pictoHygiene.jpg','pictogramme','pictoHygieneFiche.jpg'),(5,'Kit Déguisements\r\n','Personnalisez votre avatar AniMate avec des déguisements\r\n\r\n \r\n\r\nL’utilisation des déguisement est recommandée notamment pour :\r\n\r\n- Réaliser des séquences de jeu pour favoriser l’appropriation de l’outil\r\n- « Briser la glace », entrer en relation\r\n- Conduire des séquences de travail autour de la créativité et l’imaginaire',35,'pictoDeguisement.jpg','pictogramme','pictoDeguisementFiche.jpg'),(6,'Kit visage\r\n','En orthophonie ou en psychomotricité, ces accessoires permettront de travailler efficacement sur les éléments constitutifs du visage.\r\n\r\nIls permettront notamment de faciliter leur localisation, leur organisation mais aussi de travailler sur les éléments de symétrie du visage.\r\n\r\nUn enseignant pourra également s’emparer de ce kit pour faciliter l’apprentissage des éléments du visage.',30,'pictoVisage.png','pictogramme','pictoVisageFiche.png'),(7,'Kit Puberté et Sexualité\r\n','Des pictogrammes essentiels pour comprendre les transformations de son corps\r\n\r\n \r\n\r\nCes 11 pictogrammes seront très utiles sur le plan éducatif pour :\r\n\r\n- mieux comprendre son corps et la puberté\r\n- découvrir la sexualité',25,'pictoPuberte.jpg','pictogramme','pictoPuberteFiche.jpg'),(8,'Kit modules personnalisables\r\n','Ces deux modules personnalisables sont proposés pour permettre l’utilisation de tout type de visage ou pictogramme avec le kit AniMate.\r\n\r\nIl suffit d’insérer le visage ou le pictogramme souhaité – au préalable découpé au bon format – à l’intérieur du module personnalisable.\r\n\r\nVous pourrez ainsi utiliser les photos de personnes de l’entourage de l’enfant ou de la personne prise en charge, mais aussi réutiliser le code de communication adapté à ce dernier (images, makaton, pecs,…).',15,'pictoPersonnalisable.png','pictogramme','pictoPersonnalisableFiche.png'),(9,'Kit Météo\r\n','Ces cartes seront très pratiques pour l’apprentissage du climat ainsi que des saisons.\r\n\r\nElles pourront être aisément combinées avec les cartes « vêtement » pour adapter l’habillage au temps qu’il fait à l’extérieur.',15,'pictoMeteo.png','pictogramme','pictoMeteoFiche.png'),(10,'Kit Besoins primaires\r\n','Permettez à votre avatar AniMate d’exprimer des besoins primaires\r\n \r\n\r\nApplications\r\nCe kit peut être utilisé dans les cas suivants :\r\n\r\n– Aide à la communication de besoins primaires\r\n\r\n– Reconnaissance d’émotions\r\n\r\n– Reconnaissance de ressentis physiques\r\n\r\n \r\n\r\nContenu du kit\r\nCe kit contient 12 pictogrammes (6 visages et 6 pictogrammes simples) :\r\n\r\n- J’ai froid\r\n- J’ai chaud\r\n- Je suis malade\r\n- J’ai besoin d’aller aux toilettes (x2)\r\n- J’ai soif\r\n- J’ai faim',15,'pictoBesoinsPrimaires.jpg','pictogramme','pictoBesoinPrimaireFiche.jpg'),(11,'Kit émotions fines\r\n','',14,'pictoEmotionsFines.png','pictogramme','pictoEmotionsFinesFiche.jpg'),(12,'Kit émotions douleur\r\n','',12,'pictoEmotionsDouleur.png','pictogramme',''),(13,'Kit émotions primaires\r\n','',12,'pictoEmotionsPrimaires.png','pictogramme',''),(14,'Kit Viscères\r\n','Des pictogrammes viscères pour mieux découvrir son corps\r\n\r\n \r\n\r\nCes 6 pictogrammes seront particulièrement utiles pour :\r\n\r\n- travailler sur le schéma corporel\r\n- objectiver un ressenti physique\r\n- exprimer une éventuelle douleur',10,'pictoVisceres.jpg','pictogramme','pictoViscereFiche.jpg'),(15,'Kit Douleur\r\n','Utilisez les pictogrammes « douleur » pour mieux localiser un ressenti physique\r\n\r\n \r\n\r\nCes pictogrammes peuvent être utilisés notamment avec un médecin ou un(e) infirmier(e) pour :\r\n\r\n- localiser une douleur\r\n- mesurer son intensité\r\n- en identifier la cause',8,'pictoDouleur.jpg','pictogramme','pictoDouleurFiche.jpg'),(16,'Kit Ecole\r\n','Facilitez la communication entre un élève et son professeur à l’école\r\n\r\n \r\n\r\nCes 4 pictogrammes permettront à un élève de mieux exprimer son niveau de suivi par rapport à la leçon proposée par le professeur, et seront ainsi très utile pour le professeur pour identifier les difficultés et les compétences de ce dernier.\r\n\r\nUtilisé à l’école l’avatar sert d’allié pour les élèves en inclusion ou plus simplement en difficulté, pour dédramatiser et faciliter la communication avec le professeur et son entourage.',7,'pictoEcole.jpg','pictogramme','pictoEcoleFiche.jpg'),(17,'Kit Théorie de l’esprit\r\n','La bulle de pensée et la bulle de parole seront utiles pour la conduite de plusieurs exercices autour de la théorie de l’esprit.',5,'pictoEsprit.jpg','pictogramme','pictoEspritFiche.jpg');
/*!40000 ALTER TABLE `pictogrammes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_admin`
--

DROP TABLE IF EXISTS `user_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `niveau` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_admin`
--

LOCK TABLES `user_admin` WRITE;
/*!40000 ALTER TABLE `user_admin` DISABLE KEYS */;
INSERT INTO `user_admin` VALUES (1,'testadmin@mail.me','01234',9),(2,'adminanimate','$2y$10$/QRezzbAIvJrP7ywIo2IdOQBIPxQ3f2IlQGFGamvU3.',9),(7,'animate','$2y$10$NFXZZU1oJNDdqo575jkfpuRx8UWMItL5ZRcIQGY.Led',9),(8,'adminanimate','$2y$10$d.na0Id0JDASF1zJu8AyTeoUi9Eb2YPFEzte4Kl8C/JIUmDkw5mVe',9),(9,'testadmin','$2y$10$YuwC7yjGXA6tN/D.Uj2wZeOF7Y7RdHga9ERxyBM3v3Rxu1SlcuYpm',9);
/*!40000 ALTER TABLE `user_admin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-16 11:17:54
