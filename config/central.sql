-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2017 às 16:42
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `central`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `sumario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `carga` int(3) NOT NULL,
  `duracao` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`codigo`, `nome`, `descricao`, `sumario`, `imagem`, `cod_categoria`, `carga`, `duracao`, `data_cadastro`) VALUES
(1, 'Rotinas Administrativas', '<h3>Sobre o Curso</h3>\r\n\r\n<p>Curso para difundir conceitos específicos e técnicas gerais de administração inseridos numa abordagem sistêmica de organização. Tem o objetivo de formar administradores e empreendedores capazes de terem iniciativas modernas e inovadoras que levem à resolução de problemas organizacionais, ou seja, profissionais que tenham a capacidade de tomar decisões. O curso também é indicado para quem pretende abrir o proprio negócio.\r\n</p>\r\n<h3>Mercado de trabalho</h3>\r\n<p>\r\nO crescimento da economia e a necessidade de melhoria nos processos produtivos nas empresas mantêm em alta a demanda por esse profissional. O administrador é procurado em todos os setores do mercado. A maioria das empresas contrata o profissional, durante o período do curso, como estagiários e muitos são efetivados depois de formados.\r\n</p>\r\n<h3>Profissão</h3>\r\n<p>\r\nO profissional pode agir em várias áreas, cuidar de todas as operações de uma empresa, desde a organização de seus recursos humanos, mercadológicos, materiais e financeiros até o desenvolvimento de estratégias de mercado. Organizar e coordenar as atividades financeiras de um estabelecimento, lidando com patrimônio, capital de giro, análise de orçamentos e fluxo de caixa e muito mais.\r\n</p>', '<h3>Sobre o Curso</h3>\r\n\r\n<p>Curso para difundir conceitos específicos e técnicas gerais de administração inseridos numa abordagem sistêmica de organização. Tem o objetivo de formar administradores e empreendedores capazes de terem iniciativas modernas e inovadoras que levem à resolução de problemas organizacionais, ou seja, profissionais que tenham a capacidade de tomar decisões. O curso também é indicado para quem pretende abrir o proprio negócio.\r\n</p>\r\n', 'rotinas-administrativas.jpg', 1, 180, '18 Meses', '2017-06-08 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
