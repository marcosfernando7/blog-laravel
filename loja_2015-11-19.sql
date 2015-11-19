# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.26)
# Database: loja
# Generation Time: 2015-11-19 18:42:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categoria` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id_categoria`, `nome`, `created_at`, `updated_at`)
VALUES
	(10,'Esportes','2015-11-05 22:08:28','2015-11-06 00:08:28');

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comentarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comentarios`;

CREATE TABLE `comentarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `nome` varchar(255) DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `post_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_comentarios_post_id` (`post_id`),
  CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `conteudo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `categoria_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_idx` (`categoria_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `titulo`, `conteudo`, `created_at`, `updated_at`, `categoria_id`)
VALUES
	(133,'Com Messi de olho, show de Neymar e Suárez é ofuscado por protestos','Liga dos Campeões é Liga dos Campeões, mas o caráter pouco decisivo e o adversário de menor expressão fizeram o duelo entre Barcelona e Bate Borisov uma oportunidade perfeita para a torcida catalã se preocupar com outras coisas, que nada têm a ver com futebol. Confiantes na vitória e tranquilizados pelo bom entrosamento da dupla formada por Neymar e Suarez - autores dos três gols da noite - os fãs roubaram a cena: vaias, protestos, bandeiras “proibidas”, insultos à Uefa e à Fifa marcaram uma noite em que a torcida culé declarou \"guerra\" à entidade europeia do futebol. \r\n\r\nAs vaias começaram antes mesmo do começo do jogo, durante a entrada dos times em campo e do hino da Champions. O coro de protesto dos torcedores foi de tal maneira alto e uníssono que impediu a percepção da famosa melodia. Símbolo do movimento separatista, a bandeira da Catalunha - a Estelada - estava em cada canto do Camp Nou. A Uefa havia já multado duas vezes o Barcelona pela exposição do símbolo, mas os catalães recorreram e aguardam decisão. Enquanto isso, a torcida decidiu enfrentar a autoridade continental distribuindo gratuitamente 30 mil bandeiras antes do jogo. Ninguém do Barcelona impediu o ato, que marcou a \"guerra\" declarada à Uefa. ','2015-11-06 00:11:32','2015-11-06 00:11:32',10),
	(134,'Brasil goleia Guatemala e encaminha classificação à semifinal do Grand Prix','A torcida que compareceu ao Centro Olímpico de Uberaba na expectativa de mais um show do craque Falcão acabou voltando para casa vendo o camisa 12 em quadra por apenas alguns minutos. Poupado pelo técnico Serginho Schiochet, ele viu do banco de reservas a seleção brasileira aplicar mais uma goleada no Grand Prix. Depois dos 11 a 2 sobre Zâmbia, a vítima desta quinta-feira foi a Guatemala, que levou 9 a 0 do time canarinho, gols de Diego (dois), Betão (dois), Xuxa, Dimas, Thiaguinho, Gian e Caio. Líder do grupo A com seis pontos e 18 gols de saldo, o Brasil encaminhou a classificação à semifinal do Grand Prix. Nesta sexta, a seleção enfrenta o Paraguai pela última rodada às 21h, com transmissão ao vivo do SporTV. Na outra partida da chave, a Guatemala pega a Zâmbia às 19h45. Os paraguaios e os guatemaltecos somam três pontos cada e seguem com chances de classificação.','2015-11-06 01:05:19','2015-11-06 01:05:19',10);

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id_tag` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id_tag`, `nome`, `updated_at`, `created_at`)
VALUES
	(6,'marcos','2015-10-25 21:49:54','2015-10-25 21:49:54'),
	(7,'fernando','2015-10-25 21:49:54','2015-10-25 21:49:54'),
	(8,'ola','2015-10-25 21:51:14','2015-10-25 21:51:14'),
	(9,'mundo','2015-10-25 21:51:14','2015-10-25 21:51:14'),
	(10,'raquel','2015-10-25 22:16:42','2015-10-25 22:16:42'),
	(11,'rodrigues','2015-10-25 22:16:42','2015-10-25 22:16:42'),
	(12,'lua','2015-10-25 22:23:30','2015-10-25 22:23:30'),
	(13,'terraa','2015-10-25 22:23:51','2015-10-25 22:23:51'),
	(14,'sol','2015-10-25 22:37:09','2015-10-25 22:37:09'),
	(15,'marte','2015-10-26 11:02:41','2015-10-26 11:02:41'),
	(16,'planeta','2015-10-26 11:02:41','2015-10-26 11:02:41'),
	(17,'teste','2015-10-26 11:12:26','2015-10-26 11:12:26'),
	(18,'santa fé do sul','2015-10-27 17:28:25','2015-10-27 17:28:25'),
	(19,'bonita','2015-10-27 17:28:25','2015-10-27 17:28:25'),
	(20,'jabutibaca','2015-10-27 17:51:43','2015-10-27 17:51:43'),
	(21,'liga dos campeões','2015-11-06 00:11:32','2015-11-06 00:11:32'),
	(22,'messi','2015-11-06 00:11:32','2015-11-06 00:11:32'),
	(23,'futebol','2015-11-06 00:11:32','2015-11-06 00:11:32'),
	(24,'Brasil','2015-11-06 01:05:19','2015-11-06 01:05:19'),
	(25,'Guatemada','2015-11-06 01:05:19','2015-11-06 01:05:19'),
	(26,'futsal','2015-11-06 01:05:19','2015-11-06 01:05:19');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags_posts`;

CREATE TABLE `tags_posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) unsigned DEFAULT NULL,
  `tag_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tag_idx` (`tag_id`),
  KEY `post_idx` (`post_id`),
  CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tags_posts` WRITE;
/*!40000 ALTER TABLE `tags_posts` DISABLE KEYS */;

INSERT INTO `tags_posts` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`)
VALUES
	(36,133,21,'2015-11-05 22:11:32','0000-00-00 00:00:00'),
	(37,133,22,'2015-11-05 22:11:32','0000-00-00 00:00:00'),
	(38,133,23,'2015-11-05 22:11:32','0000-00-00 00:00:00'),
	(39,134,24,'2015-11-05 23:05:19','0000-00-00 00:00:00'),
	(40,134,25,'2015-11-05 23:05:19','0000-00-00 00:00:00'),
	(41,134,26,'2015-11-05 23:05:19','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `tags_posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `senha` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id_user`, `nome`, `email`, `senha`)
VALUES
	(1,'Marcos','marcosfernando7@gmail.com','');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
