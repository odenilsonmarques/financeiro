-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_financeiro
CREATE DATABASE IF NOT EXISTS `db_financeiro` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_financeiro`;

-- Copiando estrutura para tabela db_financeiro.lancamentos
CREATE TABLE IF NOT EXISTS `lancamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_lancamento` varchar(45) NOT NULL,
  `pessoa` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` decimal(16,2) NOT NULL,
  `data_vencimento` date NOT NULL,
  `situacao` varchar(45) NOT NULL,
  `data_pagamento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_financeiro.lancamentos: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `lancamentos` DISABLE KEYS */;
INSERT INTO `lancamentos` (`id`, `tipo_lancamento`, `pessoa`, `descricao`, `valor`, `data_vencimento`, `situacao`, `data_pagamento`) VALUES
	(1, 'Receita', 'Prefeitura', 'Salario ', 1200.00, '2020-10-01', 'Pendente', NULL),
	(2, 'Receita', 'Canopus', '3 parcela ', 250.00, '2020-10-05', 'Pendente', NULL),
	(3, 'Receita', 'valquiria', 'parcela cartão visa', 56.00, '2020-10-01', 'Pendente', NULL),
	(4, 'Receita', 'valquiria', 'parcela cartao pan', 50.00, '2020-10-01', 'Pendente', NULL),
	(5, 'Receita', 'valber', 'parcela cartão visa', 56.00, '2020-10-01', 'Pendente', NULL),
	(6, 'Receita', 'osvanilson', 'parcela cartão visa', 56.00, '2020-10-01', 'Pendente', NULL),
	(7, 'Receita', 'ana patricia', 'parcela cartão visa', 56.00, '2020-10-01', 'Pendente', NULL),
	(8, 'Receita', 'osvaldo canuto', 'aluguel', 300.00, '2020-10-01', 'Pendente', NULL),
	(9, 'Despesa', 'banco inter', 'parcela cartao inter', 161.61, '2020-10-10', 'Pendente', NULL),
	(10, 'Despesa', 'cartao pan', 'parcela cartao pan', 114.86, '2020-10-17', 'Pendente', NULL),
	(11, 'Despesa', 'escola de feliphe', 'mensalidade', 100.00, '2020-10-05', 'Pendente', NULL),
	(12, 'Despesa', 'davi vicosa', 'aluguel', 500.00, '2020-09-10', 'Pendente', NULL),
	(13, 'Despesa', 'banco do brasil', 'parcela cartão visa', 821.00, '2020-10-10', 'Pendente', NULL),
	(14, 'Despesa', 'banco do brasil', 'parcela cartão velo', 100.00, '2020-10-05', 'Pendente', NULL);
/*!40000 ALTER TABLE `lancamentos` ENABLE KEYS */;

-- Copiando estrutura para tabela db_financeiro.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_financeiro.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
