-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23-Abr-2024 às 00:57
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_mod_livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `cd_cliente` int NOT NULL,
  `nm_cliente` varchar(45) NOT NULL,
  `nm_endereco` varchar(45) NOT NULL,
  `nr_endereco` int NOT NULL,
  `nr_CPF` char(11) DEFAULT NULL,
  `nr_cnpj` char(14) DEFAULT NULL,
  `nr_telefone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_compra`
--

CREATE TABLE `tb_compra` (
  `cd_compra` int NOT NULL,
  `dt_compra` date NOT NULL,
  `vl_compra` decimal(6,2) DEFAULT NULL,
  `fk_cd_cliente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_editora`
--

CREATE TABLE `tb_editora` (
  `cd_editora` int NOT NULL,
  `nm_editora` varchar(45) DEFAULT NULL,
  `nm_endereco` varchar(45) DEFAULT NULL,
  `nr_endereco` int DEFAULT NULL,
  `nm_bairro` varchar(30) DEFAULT NULL,
  `nr_telefone` varchar(11) DEFAULT NULL,
  `nm_gerente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_item_compra`
--

CREATE TABLE `tb_item_compra` (
  `cd_item_compra` varchar(45) NOT NULL,
  `fk_cd_compra` int DEFAULT NULL,
  `fk_isbn_livro` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro`
--

CREATE TABLE `tb_livro` (
  `isbn_livro` char(13) NOT NULL,
  `nm_livro` varchar(45) DEFAULT NULL,
  `nm_autor` varchar(45) DEFAULT NULL,
  `ds_assunto` varchar(45) DEFAULT NULL,
  `qt_estoque` int DEFAULT NULL,
  `fk_cd_editora` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`cd_cliente`);

--
-- Índices para tabela `tb_compra`
--
ALTER TABLE `tb_compra`
  ADD PRIMARY KEY (`cd_compra`),
  ADD KEY `fk_cd_cliente` (`fk_cd_cliente`);

--
-- Índices para tabela `tb_editora`
--
ALTER TABLE `tb_editora`
  ADD PRIMARY KEY (`cd_editora`);

--
-- Índices para tabela `tb_item_compra`
--
ALTER TABLE `tb_item_compra`
  ADD PRIMARY KEY (`cd_item_compra`),
  ADD KEY `fk_cd_compra` (`fk_cd_compra`),
  ADD KEY `fk_isbn_livro` (`fk_isbn_livro`);

--
-- Índices para tabela `tb_livro`
--
ALTER TABLE `tb_livro`
  ADD PRIMARY KEY (`isbn_livro`),
  ADD KEY `fk_cd_editora` (`fk_cd_editora`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `cd_cliente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_compra`
--
ALTER TABLE `tb_compra`
  MODIFY `cd_compra` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_editora`
--
ALTER TABLE `tb_editora`
  MODIFY `cd_editora` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_compra`
--
ALTER TABLE `tb_compra`
  ADD CONSTRAINT `tb_compra_ibfk_1` FOREIGN KEY (`fk_cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`);

--
-- Limitadores para a tabela `tb_item_compra`
--
ALTER TABLE `tb_item_compra`
  ADD CONSTRAINT `tb_item_compra_ibfk_1` FOREIGN KEY (`fk_cd_compra`) REFERENCES `tb_compra` (`cd_compra`),
  ADD CONSTRAINT `tb_item_compra_ibfk_2` FOREIGN KEY (`fk_isbn_livro`) REFERENCES `tb_livro` (`isbn_livro`);

--
-- Limitadores para a tabela `tb_livro`
--
ALTER TABLE `tb_livro`
  ADD CONSTRAINT `tb_livro_ibfk_1` FOREIGN KEY (`fk_cd_editora`) REFERENCES `tb_editora` (`cd_editora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
