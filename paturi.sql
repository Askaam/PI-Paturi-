-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2021 às 16:22
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `paturi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `key_adm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `key_adm`) VALUES
(1, '1qa2ws3ed');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int(11) NOT NULL,
  `nome_cli` varchar(255) DEFAULT NULL,
  `desc_cli` varchar(255) DEFAULT NULL,
  `altura_cli` varchar(10) DEFAULT NULL,
  `comprimento_cli` varchar(10) DEFAULT NULL,
  `largura_cli` varchar(10) DEFAULT NULL,
  `volume_cli` varchar(10) DEFAULT NULL,
  `peso_cli` varchar(10) DEFAULT NULL,
  `qtdCaixa_cli` varchar(45) DEFAULT NULL,
  `caminho_img_cli` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cli`, `nome_cli`, `desc_cli`, `altura_cli`, `comprimento_cli`, `largura_cli`, `volume_cli`, `peso_cli`, `qtdCaixa_cli`, `caminho_img_cli`) VALUES
(1, 'Garrafa Nega Fulô', 'Garrafa em cerâmica de alta qualidade do cliente \"Nega Fulô\"', '15 cm', '9 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_7.jpg'),
(2, 'Garrafa Melgaço', 'Garrafa em cerâmica de alta qualidade do cliente \"Melgaço\"', '16 cm', '11 cm', '14 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_8.jpg'),
(3, 'Garrafa Araxá', 'Garrafa em cerâmica de alta qualidade cliente \"Araxá\"', '12 cm', '7 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_10.jpg'),
(4, 'Garrafa Brauberg', 'Garrafa em cerâmica de alta qualidade cliente \"Brauberg\"', '19 cm', '12 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_11.jpg'),
(5, 'Garrafa Velha Serrana', 'Garrafa em cerâmica de alta qualidade cliente \"Velha Serrana\"', '14 cm', '9 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_pro` int(11) NOT NULL,
  `nome_pro` varchar(255) DEFAULT NULL,
  `desc_pro` varchar(255) DEFAULT NULL,
  `altura_pro` varchar(10) NOT NULL,
  `comprimento_pro` varchar(10) NOT NULL,
  `largura_pro` varchar(10) NOT NULL,
  `volume_pro` varchar(10) NOT NULL,
  `peso_pro` varchar(10) NOT NULL,
  `qtdCaixa_pro` varchar(45) NOT NULL,
  `caminho_img_pro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_pro`, `nome_pro`, `desc_pro`, `altura_pro`, `comprimento_pro`, `largura_pro`, `volume_pro`, `peso_pro`, `qtdCaixa_pro`, `caminho_img_pro`) VALUES
(1, 'Garrafa Padrão 270ml', 'Garrafa em cerâmica de alta qualidade da 270ml', '15 cm', '9 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_1.jpg'),
(2, 'Garrafa Padrão 850ml', 'Garrafa em cerâmica de alta qualidade de 850ml', '16 cm', '11 cm', '14 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_2.jpg'),
(3, 'Garrafa Padrão 170ml', 'Garrafa em cerâmica de alta qualidade de 170ml', '12 cm', '7 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_3.jpg'),
(4, 'Garrafa Padrão 220ml', 'Garrafa em cerâmica de alta qualidade de 220ml', '19 cm', '12 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_4.jpg'),
(5, 'Garrafa Padrão 140ml', 'Garrafa em cerâmica de alta qualidade de 140ml', '14 cm', '9 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_5.jpg'),
(6, 'Garrafa Padrão 1000ml', 'Garrafa em cerâmica de alta qualidade de 1000ml', '15 cm', '10 cm', '3,5 cm', '120 ml', '270 g', '12 peças', 'assets/img/img_6.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
