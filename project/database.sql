-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.31 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela vmi.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `link` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `texto` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `posicao` int DEFAULT NULL,
  `status` int DEFAULT '0',
  `imagem` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `imagem_responsiva` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.banners: ~4 rows (aproximadamente)
INSERT INTO `banners` (`id`, `titulo`, `link`, `texto`, `posicao`, `status`, `imagem`, `imagem_responsiva`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(14, 'Neurologia Clinicia', '', '                          \r\n                        ', 1, 1, 'https://axonsneurologia.com.br/uploads/img/1676127695_c292a9a34de1b7649fa7.jpeg', NULL, '2023-02-11 11:01:35', '2023-02-11 11:02:05', '2023-02-11 11:02:05'),
	(15, 'Neurologia Clínica', '', '                                                                                                                                  \r\n                                                                                                                        ', 1, 1, 'https://axonsneurologia.com.br/uploads/img/1677605823_edaee83c72594814e7de.jpg', 'https://axonsneurologia.com.br/uploads/img/1677605823_b4a02c89654cc54ad2b4.jpg', '2023-02-11 11:01:53', '2023-02-28 13:37:03', NULL),
	(16, 'Especialistas', '', '                                                                                                        \r\n                                                                                                ', 2, 1, 'https://axonsneurologia.com.br/uploads/img/1677605846_d2f572c936755b7bf423.jpg', 'https://axonsneurologia.com.br/uploads/img/1677605846_7da774eae070cc441733.jpg', '2023-02-11 11:03:47', '2023-02-28 13:37:26', NULL),
	(17, 'Atendimento', '', '                                                                                                        \r\n                                                                                                ', 3, 1, 'https://axonsneurologia.com.br/uploads/img/1677605873_292f125d9e7f0f524a58.jpg', 'https://axonsneurologia.com.br/uploads/img/1677605873_6034449762c54e486a64.jpg', '2023-02-11 11:04:44', '2023-02-28 13:37:53', NULL);

-- Copiando estrutura para tabela vmi.email
CREATE TABLE IF NOT EXISTS `email` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assunto` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela vmi.email: 14 rows
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` (`id`, `email`, `assunto`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'site@axonsneurologia.com.br', 'Informações', '2023-02-16 11:06:35', '2023-02-16 11:51:04', '2023-02-16 11:51:04'),
	(2, 'contato@axonsneurologia.com.br', 'Informações', '2023-02-16 11:06:48', '2023-02-16 11:46:48', '2023-02-16 11:46:48'),
	(3, 'lucasrondon@gmail.com', 'Agendamento de Consulta', '2023-02-16 11:14:33', '2023-02-16 11:46:11', '2023-02-16 11:46:11'),
	(4, 'site@axonsneurologia.com.br', 'Agendamento de Consulta', '2023-02-16 11:14:48', '2023-02-16 11:51:08', '2023-02-16 11:51:08'),
	(5, 'site@axonsneurologia.com.br', 'Agendamento de Exame', '2023-02-16 11:32:01', '2023-02-16 11:51:12', '2023-02-16 11:51:12'),
	(6, 'site@axonsneurologia.com.br', 'Dúvidas', '2023-02-16 11:46:25', '2023-02-16 11:51:15', '2023-02-16 11:51:15'),
	(7, 'site@axonsneurologia.com.br', 'Sugestões', '2023-02-16 11:46:32', '2023-02-16 11:50:58', '2023-02-16 11:50:58'),
	(8, 'site@axonsneurologia.com.br', 'Agendamento de Exame', '2023-02-16 11:46:39', '2023-02-16 11:46:57', '2023-02-16 11:46:57'),
	(9, 'site@axonsneurologia.com.br', 'Informações', '2023-02-16 11:51:23', '2023-02-16 11:51:23', NULL),
	(10, 'site@axonsneurologia.com.br', 'Sugestões', '2023-02-16 11:51:27', '2023-02-16 11:51:27', NULL),
	(11, 'site@axonsneurologia.com.br', 'Reclamações', '2023-02-16 11:51:33', '2023-02-16 11:51:33', NULL),
	(12, 'site@axonsneurologia.com.br', 'Agendamento de Consulta', '2023-02-16 11:51:38', '2023-02-16 11:51:38', NULL),
	(13, 'site@axonsneurologia.com.br', 'Agendamento de Exame', '2023-02-16 11:51:44', '2023-02-16 11:51:44', NULL),
	(14, 'izabela@email.com.br', 'Reclamações', '2023-02-24 09:52:11', '2023-02-24 09:52:57', '2023-02-24 09:52:57');
/*!40000 ALTER TABLE `email` ENABLE KEYS */;

-- Copiando estrutura para tabela vmi.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idUsuario` int DEFAULT '0',
  `idCategoria` int DEFAULT NULL,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `capa` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galeria_usuarios` (`idUsuario`),
  KEY `galeria_categorias` (`idCategoria`),
  CONSTRAINT `galeria_categorias` FOREIGN KEY (`idCategoria`) REFERENCES `galeria_categorias` (`id`),
  CONSTRAINT `galeria_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.galeria: ~0 rows (aproximadamente)
INSERT INTO `galeria` (`id`, `idUsuario`, `idCategoria`, `titulo`, `capa`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 149, 8, 'Infraestrutura', 'https://axonsneurologia.com.br/uploads/img/1676131112.png', 1, '2023-02-11 11:57:56', '2023-02-11 11:58:34', NULL);

-- Copiando estrutura para tabela vmi.galeria_categorias
CREATE TABLE IF NOT EXISTS `galeria_categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.galeria_categorias: ~0 rows (aproximadamente)
INSERT INTO `galeria_categorias` (`id`, `titulo`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(8, 'Axons', '2023-02-11 11:57:31', '2023-02-11 11:57:31', NULL);

-- Copiando estrutura para tabela vmi.galeria_imagens
CREATE TABLE IF NOT EXISTS `galeria_imagens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idGaleria` int DEFAULT NULL,
  `imagem` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galeria_images` (`idGaleria`),
  CONSTRAINT `galeria_images` FOREIGN KEY (`idGaleria`) REFERENCES `galeria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.galeria_imagens: ~3 rows (aproximadamente)
INSERT INTO `galeria_imagens` (`id`, `idGaleria`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(103, 1, 'https://axonsneurologia.com.br/uploads/img/1676131216_e1c42f9cebca9ccc4934.webp', '2023-02-11 12:00:16', '2023-02-11 12:00:16', NULL),
	(104, 1, 'https://axonsneurologia.com.br/uploads/img/1676131216_17badd37d882cff3a60d.webp', '2023-02-11 12:00:16', '2023-02-11 12:00:16', NULL),
	(105, 1, 'https://axonsneurologia.com.br/uploads/img/1676131216_f85c946b992c5c91ca31.webp', '2023-02-11 12:00:16', '2023-02-11 12:00:16', NULL);

-- Copiando estrutura para tabela vmi.google_analytics
CREATE TABLE IF NOT EXISTS `google_analytics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `script` varchar(9999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.google_analytics: 1 rows
/*!40000 ALTER TABLE `google_analytics` DISABLE KEYS */;
INSERT INTO `google_analytics` (`id`, `script`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, NULL, '2023-02-08 00:00:00', '2023-02-08 00:00:00', NULL);
/*!40000 ALTER TABLE `google_analytics` ENABLE KEYS */;

-- Copiando estrutura para tabela vmi.leads
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela vmi.leads: 7 rows
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
INSERT INTO `leads` (`id`, `nome`, `email`, `telefone`, `cpf`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, NULL, 'lucasrondon@gmail.com', NULL, NULL, '2023-02-07 10:12:10', '2023-02-07 10:12:10', NULL),
	(2, NULL, 'lucasrondon@hotmail.com', NULL, NULL, '2023-02-07 10:39:59', '2023-02-07 10:39:59', NULL),
	(3, NULL, 'lucasrondon@email.com', NULL, NULL, '2023-03-01 22:26:11', '2023-03-01 23:22:22', '2023-03-01 23:22:22'),
	(4, NULL, 'site@axonsneurologia.com.br', NULL, NULL, '2023-03-01 22:45:12', '2023-03-01 23:22:16', '2023-03-01 23:22:16'),
	(5, 'LUCAS RAFAEL MUNIZ RONDON', 'rondonlucas@gmail.com', '65984518769', NULL, '2023-03-01 22:49:07', '2023-03-01 23:22:07', '2023-03-01 23:22:07'),
	(6, 'LUCAS RAFAEL MUNIZ RONDON', 'lucas_rondon@gmail.com', '(65) 98451-8769', NULL, '2023-03-01 23:18:48', '2023-03-01 23:19:05', '2023-03-01 23:19:05'),
	(7, NULL, 'lucas@email.com', NULL, NULL, '2023-06-19 15:04:32', '2023-06-19 15:04:32', NULL);
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;

-- Copiando estrutura para tabela vmi.meta_tags
CREATE TABLE IF NOT EXISTS `meta_tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(9999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `palavras_chave` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.meta_tags: 1 rows
/*!40000 ALTER TABLE `meta_tags` DISABLE KEYS */;
INSERT INTO `meta_tags` (`id`, `descricao`, `palavras_chave`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '###', '###', '2023-02-08 00:00:00', '2023-06-19 14:42:10', NULL);
/*!40000 ALTER TABLE `meta_tags` ENABLE KEYS */;

-- Copiando estrutura para tabela vmi.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idCategoria` int DEFAULT NULL,
  `idUsuario` int DEFAULT NULL,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `texto` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `capa` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `dataNoticia` date DEFAULT NULL,
  `status` int DEFAULT '0',
  `visualizacoes` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia-categoria` (`idCategoria`),
  KEY `noticia-usuario` (`idUsuario`),
  CONSTRAINT `noticia-categoria` FOREIGN KEY (`idCategoria`) REFERENCES `noticias_categorias` (`id`),
  CONSTRAINT `noticia-usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.noticias: ~3 rows (aproximadamente)
INSERT INTO `noticias` (`id`, `idCategoria`, `idUsuario`, `titulo`, `subtitulo`, `texto`, `capa`, `dataNoticia`, `status`, `visualizacoes`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(18, 10, 149, 'Notícia 1', '', '                                                    <span style="color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet leo tellus, ac egestas lectus feugiat eu. Nulla eu efficitur urna. Vivamus at massa sit amet nisl tincidunt vulputate sit amet non velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc lacinia justo ipsum, ut varius leo suscipit a. Morbi et fringilla risus. Ut dictum venenatis purus commodo porta.</span>                          \r\n                                                                        ', 'https://axonsneurologia.com.br/uploads/img/1675519769.png', '2023-02-03', 1, NULL, '2023-02-03 17:37:11', '2023-02-04 10:09:32', NULL),
	(19, 10, 149, 'Notícia 2', '', '                                                                              \r\n                                                                        ', 'https://axonsneurologia.com.br/uploads/img/1675519809.png', '2023-02-03', 1, NULL, '2023-02-03 17:37:41', '2023-02-04 10:10:11', NULL),
	(21, 10, 149, 'Notícia 3', '', '                                                    \r\n                                                ', 'https://axonsneurologia.com.br/uploads/img/1675519834.png', '2023-02-03', 1, NULL, '2023-02-03 17:38:52', '2023-02-04 10:10:37', NULL);

-- Copiando estrutura para tabela vmi.noticias_categorias
CREATE TABLE IF NOT EXISTS `noticias_categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.noticias_categorias: ~0 rows (aproximadamente)
INSERT INTO `noticias_categorias` (`id`, `titulo`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(10, 'Axons', '2023-02-03 17:36:40', '2023-02-03 17:36:40', NULL);

-- Copiando estrutura para tabela vmi.noticias_imagens
CREATE TABLE IF NOT EXISTS `noticias_imagens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idNoticia` int DEFAULT NULL,
  `imagem` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `noticia_images` (`idNoticia`) USING BTREE,
  CONSTRAINT `noticia_images` FOREIGN KEY (`idNoticia`) REFERENCES `noticias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.noticias_imagens: ~3 rows (aproximadamente)
INSERT INTO `noticias_imagens` (`id`, `idNoticia`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 18, 'https://axonsneurologia.com.br/uploads/img/1677245336_c46ab6811aaa156e828c.jpg', '2023-02-24 09:28:56', '2023-02-24 09:29:59', '2023-02-24 09:29:59'),
	(2, 18, 'https://axonsneurologia.com.br/uploads/img/1677245336_215dd96c9c8420783646.jpg', '2023-02-24 09:28:56', '2023-02-24 09:30:04', '2023-02-24 09:30:04'),
	(3, 18, 'https://axonsneurologia.com.br/uploads/img/1677245336_28ad11bc951f68613070.jpg', '2023-02-24 09:28:56', '2023-02-24 09:30:08', '2023-02-24 09:30:08');

-- Copiando estrutura para tabela vmi.paginas
CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idCategoria` int DEFAULT NULL,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `texto` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `capa` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `paginas-categorias` (`idCategoria`) USING BTREE,
  CONSTRAINT `paginas-categorias` FOREIGN KEY (`idCategoria`) REFERENCES `paginas_categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.paginas: ~8 rows (aproximadamente)
INSERT INTO `paginas` (`id`, `idCategoria`, `titulo`, `subtitulo`, `texto`, `capa`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'Dr° Bruno Reginato Gumiero', 'CRM-MT 6788 | Neurologista com especialização em epilepsia RQE 6786', '                                                    <h3 class="">Neurologista com especialização em epilepsia</h3><div>Possui graduação em Medicina pela Universidade de Cuiabá(2012), especialização em Neurofisiologia e epilepsia pela Universidade Estadual de Campinas(2017) e residencia-medicapela Universidade de Cuiabá(2016).</div><div><br></div><h1 class="">Formação Acadêmica</h1><div>Especialização - Residência médica - 2013 - 2016</div><div><b>Universidade de Cuiabá</b></div><div>Residência médica em: Neurologia</div><div>Número do registro: 245/2013.</div><div><br></div><div>Especialização em Neurofisiologia e epilepsia - 2016 - 2017</div><div><b>Universidade Estadual de Campinas</b></div><div><br></div><div>Especialização em andamento em Pós-graduação em Monitorização Neurológica intra-operatória (MNIO) - 2016 - Atual</div><div><b>Centro de Neurologia de Campinas</b></div><div><br></div><div>Graduação em Medicina - 2006 - 2012</div><div><b>Universidade de Cuiabá </b></div>                          \r\n                                                                        ', 'https://axonsneurologia.com.br/uploads/img/1676386705.png', 1, '2023-02-14 10:58:27', '2023-06-19 18:24:02', '2023-06-19 18:24:02'),
	(2, 1, 'Drª Larissa Kozow', 'CRM-MT 6362 | Neurologista com formação em dor crônica e neuropatias periféricas /neuromuscular', '<h3 class="">Neurologista com formação em dor crônica e neuropatias periféricas /neuromuscular                          \r\n                        </h3>', 'https://axonsneurologia.com.br/uploads/img/1676386929.png', 1, '2023-02-14 11:02:12', '2023-06-19 18:24:04', '2023-06-19 18:24:04'),
	(3, 1, 'Drº Luiz Henrique Muller', 'CRM-MT 7281 | Neurologista/ Neurofisiologista', '                          <h3 class="">Neurologista/ Neurofisiologista&nbsp;</h3><span id="docs-internal-guid-a1d4c364-7fff-0c17-c781-61c1fe959070"><h3 dir="ltr" style="line-height: 1.44; margin-top: 0pt; margin-bottom: 4pt;"><span style="font-size: 13pt; font-family: Roboto, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Médico pela Universidade de Cuiabá, UNIC</span></h3><h3 dir="ltr" style="line-height:1.44;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 4pt 0pt;"><span style="font-size:13pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Residência Médica em Neurologia - Hospital Geral, Cuiabá, MT.</span></h3><h3 dir="ltr" style="line-height:1.44;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 4pt 0pt;"><span style="font-size:13pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Pós-graduado em Neurofisiologia Clínica pelo Instituto Lauro de Souza Lima - ILSL, Bauru, SP.</span></h3><h3 dir="ltr" style="line-height:1.44;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 4pt 0pt;"><span style="font-size:13pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Membro Titular da Sociedade Brasileira de Neurofisiologia clínica.</span></h3><h3 dir="ltr" style="line-height: 1.44; margin-top: 0pt; margin-bottom: 4pt;"><span style="font-size: 13pt; font-family: Roboto, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"><span id="docs-internal-guid-9fdf2822-7fff-56c9-8081-163ad86cbf0c"></span></span></h3><h3 dir="ltr" style="line-height:1.44;background-color:#ffffff;margin-top:0pt;margin-bottom:4pt;"><span style="font-size:13pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Atua na área de eletroneuromiografia e potencial evocado.</span></h3></span>                        ', 'https://axonsneurologia.com.br/uploads/img/1676386982.png', 1, '2023-02-14 11:03:04', '2023-06-19 18:24:06', '2023-06-19 18:24:06'),
	(4, 1, 'Drª Leticia Cavalcante', 'CRM-MT 8407 | Infectologista e Hansenóloga', '<h3 class=""><span style="text-align: center;">Infectologista e Hansenóloga</span></h3>', 'https://axonsneurologia.com.br/uploads/img/1676387099.png', 1, '2023-02-14 11:05:01', '2023-06-19 18:24:10', '2023-06-19 18:24:10'),
	(5, 1, 'Drº Felipe Guardini', 'CRM-MT 6327 | Neurocirurgia/ Neurorradiologia/ Intervencionista', '<h3 class=""><span style="text-align: center;">Neurocirurgia/ Neurorradiologia/ Intervencionista</span></h3>', 'https://axonsneurologia.com.br/uploads/img/1676387140.png', 1, '2023-02-14 11:05:43', '2023-06-19 18:24:12', '2023-06-19 18:24:12'),
	(6, 1, 'Drª Bianca Araldi', 'CRM-MT 13870 | Neurologista', '                          <h3 class=""><span style="text-align: center;">Neurologista</span></h3>                        ', 'https://axonsneurologia.com.br/uploads/img/1677513710.png', 1, '2023-02-14 11:07:01', '2023-06-19 18:24:14', '2023-06-19 18:24:14'),
	(7, 2, 'VMI Soluções Web', '', '                                                                                                                                                                                                                                                                                                                                                  <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><font color="#000000" face="Arial"><span style="font-size: 16px; white-space-collapse: preserve;">Somos uma empresa líder em soluções e serviços de tecnologia web, dedicados a atender as demandas digitais de nossos clientes. Nossa expertise abrange uma ampla gama de serviços, incluindo consultoria personalizada, desenvolvimento de aplicativos e sistemas sob demanda, assim como a criação de sites de alto desempenho.</span></font></p><p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><font color="#000000" face="Arial"><span style="font-size: 16px; white-space-collapse: preserve;"><br></span></font></p><p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><font color="#000000" face="Arial"><span style="font-size: 16px; white-space-collapse: preserve;">Nossa equipe altamente experiente e talentosa está constantemente em busca de soluções inovadoras, utilizando as mais recentes tecnologias disponíveis no mercado. Através de um processo minucioso de mapeamento e estruturação de sistemas, trabalhamos em estreita colaboração com cada cliente, garantindo que suas necessidades específicas sejam atendidas de forma eficiente.</span></font></p><p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><font color="#000000" face="Arial"><span style="font-size: 16px; white-space-collapse: preserve;"><br></span></font></p><p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><font color="#000000" face="Arial"><span style="font-size: 16px; white-space-collapse: preserve;">Nosso compromisso principal é proporcionar excelência e impulsionar o sucesso digital de nossos clientes. Acreditamos que cada negócio é único e merece uma abordagem personalizada. Portanto, nos esforçamos para entender profundamente as metas e objetivos de cada cliente, adaptando nossas soluções para alcançar os melhores resultados possíveis.</span></font></p><p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><font color="#000000" face="Arial"><span style="font-size: 16px; white-space-collapse: preserve;"><br></span></font></p><p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><font color="#000000" face="Arial"><span style="font-size: 16px; white-space-collapse: preserve;">Seja qual for o desafio tecnológico que você esteja enfrentando, estamos prontos para oferecer soluções sob medida, combinando conhecimento técnico especializado com uma abordagem orientada ao cliente. Junte-se a nós e experimente o que é trabalhar com uma empresa apaixonada por tecnologia e comprometida com o sucesso dos negócios digitais.</span></font></p>                                                                                                                                                                                                                                                                                                                        ', 'http://local.vmi/uploads/img/1687473460.png', 1, '2023-02-14 11:13:05', '2023-06-22 18:37:42', NULL),
	(11, 1, 'Drº Marlon Figueiredo Alves Correa', 'CRM-MT 8052 | Neurologia geral, com subespecialidade em doenças desmielinizantes ', '                                                                              <div>Médico pela Universidade Federal do Mato Grosso (UFMT)</div><div>Residência Médica em Neurologia - Hospital Israelita Albert Einstein- São Paulo, SP.</div><div>Médico assistente do Hospital Israelita Albert Einstein- São Paulo, SP no centro de referência em Esclerose Múltipla 2018-2020</div><div>Membro Titular da Academia Brasileira de Neurologia</div><div>Título de Neurologista pela associação Brasileira de Neurologia</div>                          \r\n                                                                                                ', 'https://axonsneurologia.com.br/uploads/img/1677513362.png', 1, '2023-02-27 11:18:48', '2023-06-19 18:24:16', '2023-06-19 18:24:16');

-- Copiando estrutura para tabela vmi.paginas_categorias
CREATE TABLE IF NOT EXISTS `paginas_categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.paginas_categorias: ~2 rows (aproximadamente)
INSERT INTO `paginas_categorias` (`id`, `titulo`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Corpo Clínico', '2023-02-14 10:56:37', '2023-02-14 10:56:37', NULL),
	(2, 'PR PASSOS', '2023-02-14 11:09:03', '2023-06-19 17:02:32', NULL);

-- Copiando estrutura para tabela vmi.redes_sociais
CREATE TABLE IF NOT EXISTS `redes_sociais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `instagram` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `facebook` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `linkedin` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `youtube` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `tiktok` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.redes_sociais: 1 rows
/*!40000 ALTER TABLE `redes_sociais` DISABLE KEYS */;
INSERT INTO `redes_sociais` (`id`, `instagram`, `facebook`, `linkedin`, `youtube`, `whatsapp`, `tiktok`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '', '', '', '', '', '', '2023-02-08 00:00:00', '2023-06-19 14:41:39', NULL);
/*!40000 ALTER TABLE `redes_sociais` ENABLE KEYS */;

-- Copiando estrutura para tabela vmi.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `texto` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `capa` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `slug` varchar(999) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.servicos: ~10 rows (aproximadamente)
INSERT INTO `servicos` (`id`, `titulo`, `subtitulo`, `texto`, `capa`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(16, 'Doppler Transcraniano', '', '                                                                                                        <p class="">O exame Doppler Transcraniano é usado para avaliar o fluxo sanguíneo nas artérias que fornecem sangue ao cérebro. Ele é realizado usando um transdutor Doppler e um gel condutor, colocado na parte frontal da cabeça. O exame é indicado para avaliar o risco de derrames, identificar a presença de obstruções nas artérias cerebrais, monitorar a evolução de doenças cerebrovasculares, entre outros. É um exame não invasivo e seguro, geralmente realizado com pacientes acordados e conscientes.<br></p><div><br></div><h3 class="">Quando está indicado?</h3><ul><li>Síndrome de vasculite cerebral</li><li>Doenças cerebrovasculares</li><li>Hipertensão intracraniana</li><li>Aneurisma cerebral</li><li>Trombose venosa cerebral</li><li>Estenose arterial da artéria cerebral média.</li></ul><h3 class="">Como é feito o exame?</h3><p class="">O exame Doppler Transcraniano mede o fluxo sanguíneo nas artérias que fornecem sangue para o cérebro. Ele é realizado através de uma transdutora de alta frequência colocada na cabeça que emite ondas sonoras para avaliar o fluxo sanguíneo. O exame pode ser usado para avaliar o fluxo sanguíneo em pacientes com sintomas de insuficiência cerebral.<br></p><h3 class="">Existe alguma contra-indicação?</h3><p class="">Não há contra-indicações para a realização do exame.</p><h3 class="">Qual o preparo necessário para a realização do exame?</h3><p class="">Nenhum preparo especial é necessário para realização do exame.</p><div><br></div>                                                    \r\n                                                                                                                                                ', 'https://axonsneurologia.com.br/uploads/img/1675948512.png', NULL, 1, '2023-02-09 08:44:37', '2023-06-19 18:09:48', '2023-06-19 18:09:48'),
	(17, 'Eletroneuromiografia', '', '                                                                              <p class="">A eletroneuromiografia (ENMG) é um exame médico que avalia a função dos nervos e músculos. É feito através da inserção de agulhas finas nos músculos e a medição da atividade elétrica dos nervos responsáveis por controlá-los. A ENMG ajuda a diagnosticar problemas como neuropatias, miopatias e outras doenças musculoesqueléticas. É importante para guiar o tratamento e avaliar a progressão da doença. É geralmente indolor e dura cerca de 30 minutos.</p><h3 class="">Quando é indicado?</h3><p class=""></p><ul><li>Doenças nervosas, como neuropatias periféricas e esclerose lateral amiotrófica (ALS).</li><li>Doenças musculares, como distrofia muscular e miastenia grave.</li><li>Problemas com os nervos raquidianos, como radiculopatia e plexopatia.</li><li>Problemas de coordenação motora, como ataxia.</li><li>Lesões nervosas, como compressão de nervos por hérnia de disco.</li><li>Doenças desmielinizantes, como a esclerose múltipla.</li></ul><p></p><h3 class="">Como é feito o exame?</h3><p class="">A eletroneuromiografia é feita através da inserção de agulhas finas em músculos específicos e a medição da atividade elétrica dos nervos que controlam esses músculos. Durante o exame, o paciente pode ser solicitado a contrair o músculo ou realizar movimentos específicos para que a atividade elétrica possa ser registrada e analisada. O exame é geralmente indolor e dura cerca de 30 minutos.</p><h3 class="">Existe alguma contra-indicação?</h3><ul><li>Infecção ativa na área onde será realizado o exame.</li><li>Coagulopatias (problemas com a coagulação sanguínea).</li><li>Gravidez, especialmente no primeiro trimestre.</li><li>Reação alérgica ou sensibilidade aos eletrodos ou outros materiais usados durante o exame.</li></ul><h3 class="">Qual o preparo necessário para a realização do exame?</h3><p class="">Nenhum preparo especial é necessário para realização do exame.<br></p><p>                          \r\n                        </p>                                                                        ', 'https://axonsneurologia.com.br/uploads/img/1675948961.png', NULL, 1, '2023-02-09 09:31:21', '2023-06-19 18:09:50', '2023-06-19 18:09:50'),
	(18, 'Potencial Evocado Somatossensitivo', '', '<p class="">O Potencial Evocado Somatossensitivo (PES) é um tipo de exame neurológico que mede a velocidade com que os impulsos nervosos são conduzidos ao longo dos nervos sensoriais. O exame é realizado estimulando os nervos sensoriais com estímulos elétricos ou mecânicos, e registrando as respostas elétricas geradas pelos nervos. O PES é utilizado para avaliar a função dos nervos sensoriais e para diagnosticar condições como neuropatias periféricas, danos na medula espinhal e síndromes dolorosas crônicas. O exame é geralmente indolor e leva cerca de 30 minutos para ser concluído. O resultado do PES é comparado com as referências normais para determinar se há alguma anormalidade na condução nervosa.</p><h3 class="" style="">Quando é indicado?</h3><ul><li>Diagnóstico de neuropatias periféricas, como a neuropatia diabética.</li><li>Avaliação de danos na medula espinhal.</li><li>Diagnóstico de síndromes dolorosas crônicas, como a síndrome dolorosa regional complexa.</li><li>Avaliação de lesões nervosas, incluindo lesões por compressão, como a síndrome do túnel do carpo.</li><li>Monitoramento de doenças progressivas que afetam os nervos, como a esclerose múltipla.</li><li>Diagnóstico de distúrbios sensoriais, como a hipoestesia (diminuição da sensibilidade à dor ou ao toque).</li></ul><h3 class="" style="">Como é feito o exame?</h3><p class="">O Potencial Evocado Somatossensitivo (PES) é feito estimulando os nervos sensoriais com estímulos elétricos ou mecânicos e registrando as respostas elétricas geradas pelos nervos. Os eletrodos são colocados na pele do paciente acima da área que precisa ser examinada, e os estímulos são então aplicados. A resposta nervosa é registrada e avaliada para determinar a velocidade de condução dos impulsos nervosos. O exame é geralmente indolor e leva cerca de 30 minutos para ser concluído.</p><h3 class="">Existe alguma contra-indicação?</h3><p class="">Não há contra-indicações para a realização do exame.</p><h3 style="" class="">Qual o preparo necessário para a realização do exame?</h3><p class="" style="">Nenhum preparo especial é necessário para realização do exame.</p><p class="">                          \r\n                        </p>', 'https://axonsneurologia.com.br/uploads/img/1675950137.png', NULL, 1, '2023-02-09 09:48:40', '2023-06-19 18:09:52', '2023-06-19 18:09:52'),
	(19, 'Potencial Evocado Visual', '', '                                                    <p class="">O Potencial Evocado Visual (PEV) é um exame que avalia a função do nervo óptico e da retina, responsáveis pela transmissão de estímulos visuais para o cérebro. Durante o exame, o paciente olha para uma tela com flashs luminosos, enquanto eletrodos são colocados na superfície do olho e na testa. As respostas elétricas geradas pelo nervo óptico e retina são então registradas e avaliadas para determinar a velocidade e integridade da transmissão dos estímulos visuais para o cérebro. O PEV é uma forma não-invasiva de avaliar a saúde da retina e do nervo óptico, e pode ser útil no diagnóstico de doenças oculares, como degeneração da retina ou neuropatia óptica.</p><h3 class="" style="">Quando está indicado?</h3><ul><li>Doenças da retina, como degeneração da retina ou distrofia de retina.</li><li>Neuropatia óptica, incluindo neuropatia óptica isquêmica anterior.</li><li>Lesões do nervo óptico ou da retina.</li><li>Doenças inflamatórias dos olhos, como uveíte ou esclerite.</li><li>Tumores da retina ou do nervo óptico.</li><li>Avaliação de pacientes com visão reduzida, incluindo avaliação de pacientes com glaucoma ou catarata.</li></ul><h3 style="" class="">Como é feito o exame?</h3><p class="">O Potencial Evocado Visual (PEV) é feito com o paciente sentado em frente a uma tela com flashs luminosos. Eletrodos são colocados na superfície dos olhos e na testa para medir as respostas elétricas geradas pelo nervo óptico e retina. Durante o exame, o paciente olha para a tela e as respostas elétricas são registradas pelos eletrodos. O tempo de resposta e a amplitude das respostas elétricas são analisados para determinar a velocidade e integridade da transmissão dos estímulos visuais para o cérebro. O exame é geralmente indolor e leva cerca de 30 a 60 minutos para ser concluído.</p><h3 style="" class="">Existe alguma contra-indicação?</h3><p style="" class="">Não há contra-indicações para a realização do exame.</p><p style="" class=""><span style="color: inherit; font-family: inherit; font-size: 1.75rem;">Qual o preparo necessário para a realização do exame?</span></p><p style="" class="">Nenhum preparo especial é necessário para realização do exame.</p><p class="">                          \r\n                        </p>                                                ', 'https://axonsneurologia.com.br/uploads/img/1675950919.png', NULL, 1, '2023-02-09 09:57:44', '2023-06-19 18:09:54', '2023-06-19 18:09:54'),
	(20, 'Fibra Única', '', '<p class="">A Fibra Única (Single Fiber Electromyography, SFEMG) é um exame neurológico utilizado para avaliar a função dos nervos motores superficiais e dos músculos. O exame envolve a colocação de eletrodos finos e específicos na pele sobre o músculo que será avaliado. O paciente realiza contrações musculares suaves enquanto o médico registra a atividade elétrica das fibras musculares individuais. O exame ajuda a identificar problemas como fibras musculares muito fracas ou desordens neurológicas específicas, como a distrofia muscular. O SFEMG é um exame não invasivo e indolor que geralmente leva cerca de 30 minutos a 1 hora para ser concluído.</p><h3 class="" style="">Quando é indicado?</h3><ul><li>Distrofia muscular: para diagnosticar tipos específicos de distrofia muscular.</li><li>Miastenia gravis: para avaliar a função dos nervos motores e identificar o grau de comprometimento dos músculos.</li><li>Paralisia progressiva pseudobulbar: para identificar o grau de comprometimento dos músculos e avaliar a progressão da doença.</li><li>Síndrome de fibras pequenas: para avaliar a função das fibras musculares mais finas e identificar a presença de fibras muito fracas.</li><li>Paresia facial periférica: para avaliar a função dos nervos motores e identificar a causa da paralisia.</li><li>Polimiosite e dermatomiosite: para avaliar a função dos músculos e identificar a presença de fibras musculares muito fracas.</li></ul><h3 class="" style="">Como é feito o exame?</h3><p class="">A Fibra Única (Single Fiber Electromyography, SFEMG) é feita colocando-se eletrodos finos na pele sobre o músculo que será avaliado. O paciente realiza contrações musculares suaves enquanto o médico registra a atividade elétrica das fibras musculares individuais. O exame é não invasivo e indolor, e geralmente leva cerca de 30 minutos a 1 hora para ser concluído.</p><h3 style="" class="">Existe alguma contra-indicação?</h3><p style="">Não há contra-indicações para a realização do exame.</p><h3 style="" class="">Qual o preparo necessário para a realização do exame?</h3><p style="">Nenhum preparo especial é necessário para realização do exame.</p><p class="">                          \r\n                        </p>', 'https://axonsneurologia.com.br/uploads/img/1675951484.png', NULL, 1, '2023-02-09 10:09:35', '2023-06-19 18:09:57', '2023-06-19 18:09:57'),
	(21, 'Punção Liquórica', 'Procedimento', '                          <p class="">A Punção Liquórica é um procedimento médico invasivo que consiste na coleta de um pequeno volume de líquido cefalorraquiano (líquor) para análise. O líquor é um fluido claro e incolor que circula ao redor do cérebro e da medula espinhal, e pode conter informações sobre o estado de saúde do sistema nervoso central. A punção liquórica é indicada em uma ampla variedade de condições, incluindo infecções do sistema nervoso central, tumores, doenças autoimunes, meningites e encefalites. O exame é feito com o paciente deitado de lado e com a cabeça inclinada para frente, para facilitar a punção. O médico usa uma agulha fina para coletar o líquor, que é então enviado para análise em um laboratório. O exame pode causar desconforto temporário, mas geralmente é seguro e bem tolerado.</p><h3 class="" style="">Quando é indicado?</h3><ul><li>Infecções do sistema nervoso central, como meningites e encefalites</li><li>Suspeita de tumores cerebrais ou medulares</li><li>Doenças autoimunes como esclerose múltipla ou lúpus</li><li>Análise de proteínas ou células anormais no líquor</li><li>Avaliação de lesões traumáticas na cabeça ou coluna vertebral</li><li>Diagnóstico de doenças neurodegenerativas, como a doença de Alzheimer ou a doença de Huntington.</li></ul><h3 class="">Como é feito o procedimento?</h3><p class="">A Punção Liquórica é feita com o paciente deitado de lado e com a cabeça inclinada para frente. O médico usa uma agulha fina e uma seringa para coletar um pequeno volume de líquor da região subaracnoidea, que é então enviado para análise. O exame é geralmente bem tolerado, mas pode causar desconforto temporário. É importante que o paciente fique quieto durante a coleta para garantir a precisão dos resultados.</p><h3 class="" style="">Existe alguma contra-indicação?</h3><p class="">Existem algumas contra-indicações para a realização da punção liquórica, incluindo:</p><ul><li>Infecções na região da agulha</li><li>Coagulopatia ou outros problemas de coagulação sanguínea</li><li>Pressão intracraniana elevada</li><li>Abscesso cerebral ou hematoma subdural</li><li>Inflamação na região da agulha</li><li>Histórico de cirurgia na região da punção.</li></ul><h3 class="" style="">Qual o preparo necessário para a realização do procedimento?</h3><ul><li>Não comer ou beber nada por pelo menos 6 horas antes do procedimento.</li><li>Informe o seu médico sobre todos os medicamentos que você está tomando, incluindo medicamentos de venda livre e suplementos. Alguns medicamentos podem precisar ser interrompidos temporariamente antes do procedimento.</li><li>Não use cremes, loções ou outros produtos no local da punção.</li><li>Se você tem problemas de coagulação sanguínea, informe o seu médico antes do procedimento.</li><li>Se você estiver grávida, informe o seu médico imediatamente.</li></ul><p class="">                          \r\n                        </p>                        ', 'https://axonsneurologia.com.br/uploads/img/1677250198.png', NULL, 1, '2023-02-09 10:21:57', '2023-06-19 18:09:59', '2023-06-19 18:09:59'),
	(22, 'Consultoria', 'Consultoria e negócios no ramo de combustíveis', '                                                                                                                                                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum, enim vel ultrices volutpat, metus ligula ultricies enim, a interdum est est vitae lorem. Donec rutrum varius nunc, sed lacinia diam convallis eu. Suspendisse convallis massa vitae est consectetur, in fermentum est feugiat. Aliquam in tempor dui, sed consequat nisi. Morbi ac fringilla ipsum. Mauris fringilla facilisis turpis, id fermentum felis fringilla vitae. Mauris a dolor euismod, ullamcorper justo id, fringilla enim. Ut dictum nunc nec mi efficitur pulvinar. Donec pretium faucibus augue, at tristique mauris rutrum sit amet. Nulla facilisi. Suspendisse non nisi mauris. Aliquam et pulvinar purus, ac finibus lorem. Donec ullamcorper nisi vitae tellus elementum venenatis. Aenean dapibus tincidunt purus, ac faucibus enim aliquet at. Sed pulvinar, nisi ac consectetur dapibus, nunc dui pulvinar dui, sed consectetur ipsum neque et dolor.<br></p><p class="">                          \r\n                        </p>                                                                                                                                                ', 'http://local.prpassos/uploads/img/1687216215.png', 'consultoria', 1, '2023-02-09 10:31:24', '2023-06-23 14:05:46', NULL),
	(23, 'Engenharia de Software', 'Desenvolvimento e projetos de sistemas', '                                                                                                                                  <p class="">                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum, enim vel ultrices volutpat, metus ligula ultricies enim, a interdum est est vitae lorem. Donec rutrum varius nunc, sed lacinia diam convallis eu. Suspendisse convallis massa vitae est consectetur, in fermentum est feugiat. Aliquam in tempor dui, sed consequat nisi. Morbi ac fringilla ipsum. Mauris fringilla facilisis turpis, id fermentum felis fringilla vitae. Mauris a dolor euismod, ullamcorper justo id, fringilla enim. Ut dictum nunc nec mi efficitur pulvinar. Donec pretium faucibus augue, at tristique mauris rutrum sit amet. Nulla facilisi. Suspendisse non nisi mauris. Aliquam et pulvinar purus, ac finibus lorem. Donec ullamcorper nisi vitae tellus elementum venenatis. Aenean dapibus tincidunt purus, ac faucibus enim aliquet at. Sed pulvinar, nisi ac consectetur dapibus, nunc dui pulvinar dui, sed consectetur ipsum neque et dolor.                          \r\n                                                </p>                                                                                                                        ', 'http://local.prpassos/uploads/img/1687216075.png', 'engenharia-de-software', 1, '2023-06-19 18:15:22', '2023-06-23 14:11:27', NULL),
	(24, 'Engenharia Sanitária', 'Projetos de engenharia sanitária ', '                                                                                                        <p class="">                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum, enim vel ultrices volutpat, metus ligula ultricies enim, a interdum est est vitae lorem. Donec rutrum varius nunc, sed lacinia diam convallis eu. Suspendisse convallis massa vitae est consectetur, in fermentum est feugiat. Aliquam in tempor dui, sed consequat nisi. Morbi ac fringilla ipsum. Mauris fringilla facilisis turpis, id fermentum felis fringilla vitae. Mauris a dolor euismod, ullamcorper justo id, fringilla enim. Ut dictum nunc nec mi efficitur pulvinar. Donec pretium faucibus augue, at tristique mauris rutrum sit amet. Nulla facilisi. Suspendisse non nisi mauris. Aliquam et pulvinar purus, ac finibus lorem. Donec ullamcorper nisi vitae tellus elementum venenatis. Aenean dapibus tincidunt purus, ac faucibus enim aliquet at. Sed pulvinar, nisi ac consectetur dapibus, nunc dui pulvinar dui, sed consectetur ipsum neque et dolor.                          \r\n                                                </p>                                                                                                ', 'http://local.prpassos/uploads/img/1687216233.png', 'engenharia-sanitária', 1, '2023-06-19 18:15:58', '2023-06-23 14:11:32', NULL),
	(25, 'Geologia', 'Projetos de geologia', '                                                                              <p class="">                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum, enim vel ultrices volutpat, metus ligula ultricies enim, a interdum est est vitae lorem. Donec rutrum varius nunc, sed lacinia diam convallis eu. Suspendisse convallis massa vitae est consectetur, in fermentum est feugiat. Aliquam in tempor dui, sed consequat nisi. Morbi ac fringilla ipsum. Mauris fringilla facilisis turpis, id fermentum felis fringilla vitae. Mauris a dolor euismod, ullamcorper justo id, fringilla enim. Ut dictum nunc nec mi efficitur pulvinar. Donec pretium faucibus augue, at tristique mauris rutrum sit amet. Nulla facilisi. Suspendisse non nisi mauris. Aliquam et pulvinar purus, ac finibus lorem. Donec ullamcorper nisi vitae tellus elementum venenatis. Aenean dapibus tincidunt purus, ac faucibus enim aliquet at. Sed pulvinar, nisi ac consectetur dapibus, nunc dui pulvinar dui, sed consectetur ipsum neque et dolor.                        </p>                                                                        ', 'http://local.prpassos/uploads/img/1687215377.png', 'geologia', 1, '2023-06-19 18:16:21', '2023-06-23 14:11:36', NULL);

-- Copiando estrutura para tabela vmi.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `login` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Copiando dados para a tabela vmi.usuarios: ~0 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(149, 'Administrador', 'admin', '$2y$10$37aLjE0t8FBKXZD5E6amzuOsFjeV8RwflHI9NOpGDFCsCSFHCzcxK', '2023-01-17 16:00:03', '2023-02-03 15:43:34', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
