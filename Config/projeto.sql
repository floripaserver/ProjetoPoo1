-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Ago-2014 às 19:28
-- Versão do servidor: 5.5.38-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `projeto_fase_3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`) VALUES
(1, 'Paulo', 2222222, 'paulo@floripaserver.com'),
(2, 'Bruno', 2147483647, 'bruno@bruno.com.br'),
(3, 'Juliana', 2147483647, 'juliana@juliana.com.br'),
(4, 'Eduarda', 2147483647, 'duda@duda.com'),
(5, 'Luciane', 2147483647, 'lu@lu.combr'),
(6, '', 0, ''),
(11, 'Eduarda', 2147483647, 'duda@duda.na'),
(12, 'Bruno', 2147483647, 'bruno@bruno.com.br'),
(13, 'ertwret', 0, 'paulo@floripaserver.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_site` varchar(45) NOT NULL,
  `titulo_quem_somos` varchar(45) NOT NULL,
  `descricao_quem_somos` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `titulo_site`, `titulo_quem_somos`, `descricao_quem_somos`) VALUES
(1, 'Projeto Fase 3', 'Curso PHP', 'A nossa empresa e destinada ao estudo e desenvolvimento de software para gerenciamento.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(200) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'dfgvwerw', 'paulo@floripaserver', 'sdgvse', '                                                        fthybsrb                                                '),
(2, 'dfgvwerw', 'paulo@floripaserver', 'sdgvse', '                                                                                    fthybsrb                                                                        '),
(6, 'erte', 'df', 'sdfsf', '                                                                                   sdfsf                    '),
(7, 'erte', 'df', 'sdfsf', '                                                                                                               sdfsf                                            '),
(14, 'gfyurty', 'utybet', 'ybeybe', '                                                                                                        dtybe'),
(21, 'Paulo teste de model', 'paulo@floripaserver.com', 'Curso PHP', 'Projeto Fase 3 Curso PHP'),
(22, 'Paulo teste de model', 'paulo@floripaserver.com', 'Curso PHP', 'Projeto Fase 3 Curso PHP'),
(23, 'Paulo teste de model', 'paulo@floripaserver.com', 'Curso PHP', 'Projeto Fase 3 Curso PHP'),
(24, 'Paulo teste de model', 'paulo@floripaserver.com', 'Curso PHP', 'Projeto Fase 3 Curso PHP'),
(25, 'Paulo teste de model', 'paulo@floripaserver.com', 'Curso PHP', 'Projeto Fase 3 Curso PHP'),
(26, 'Paulo teste de model', 'paulo@floripaserver.com', 'Curso PHP', 'Projeto Fase 3 Curso PHP'),
(27, 'Paulinho', 'paulo@floripaserver.com', 'Teste cadastro email', 'retbyernyb                                                                                      '),
(28, 'Paulo', 'paulo@floripaserver.com', 'aaaaaa', 'jytbfynyuimj                                                                                      '),
(29, 'Paulo', 'paulo@floripaserver.com', 'aaaaaa', 'jytbfynyuimj                                                                                      '),
(30, 'ervtwbtw', 'paulo@floripaserver.com', 'hgfvur', 'ybt                                                                                      '),
(31, 'ervtwbtw', 'paulo@floripaserver.com', 'hgfvur', 'ybt                                                                                      '),
(32, 'ervtwbtw', 'paulo@floripaserver.com', 'hgfvur', 'ybt                                                                                      '),
(33, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(34, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(35, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(36, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(37, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(38, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(39, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(40, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(41, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(42, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(43, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(44, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(45, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(46, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(47, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(48, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(49, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(50, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(51, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(52, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(53, 'reybwe465b', 'hyyyypaulo@floripaserver.com', ',ubnn7i6y', 'noy7yoh                                                                                      '),
(54, 'Paulinhjh', 'paulo@floripaserver.com', 'tewvtwbetvwt', '                                                                                      qtrcreqwcrqcrq'),
(55, 'Paulinhjh', 'paulo@floripaserver.com', 'tewvtwbetvwt', '                                                                                      qtrcreqwcrqcrq'),
(56, 'Paulinhjh', 'paulo@floripaserver.com', 'tewvtwbetvwt', '                                                                                      qtrcreqwcrqcrq'),
(57, 'Paulinhjh', 'paulo@floripaserver.com', 'tewvtwbetvwt', '                                                                                      qtrcreqwcrqcrq');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_id` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `tipo_endereco` enum('1','2') NOT NULL COMMENT '1=residencial, 2=cobranca',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `pessoa_id`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `tipo_endereco`) VALUES
(1, 1, 'Brasil', 'Rio Grande do Sul', 'Porto Alegre', 'São Jorge', 'Avenida Brasil', '100', '1'),
(2, 2, 'Brasil', 'São Paulo', 'São Paulo', 'Centro', 'Rua João Paulo', '232', '1'),
(3, 9, 'Brasil', 'Santa Catarina', 'Florianópolis', 'Ingleses', 'Rua Rosa Ana da Conceição', '91', '1'),
(4, 19, 'Brasil', 'Parana', 'Curitiba', 'Capinas', 'Rua Cabral', '678', '2'),
(5, 21, 'Brasil', 'Mato Grosso', 'Cuiaba', 'Nova Brasilia', 'Rua Afredo Vagner', '44', '1'),
(6, 22, 'Brasil', 'Ceará', 'João Pessoa', 'Imigrantes', 'Rua das Rendeiras', '853', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_tipo` enum('0','1','2') NOT NULL COMMENT '0=vazio,1=Juridica, 2=fisica',
  `nome` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `pessoa_tipo`, `nome`, `cpf`, `rg`, `email`, `fone`) VALUES
(1, '1', 'Paulo Roberto', 2147483647, '56345g', 'roberto@paulo.com', 84647208),
(2, '1', 'Rodrigo', 2147483647, '2341', 'rodrigo@valinhos.com', 11333555),
(9, '1', 'Luciane Berner', 2147483647, '433412', 'Luciane@vapor.com', 84647208),
(19, '1', 'Luciane e Paulo', 2147483647, '2452t', 'Lu@sany.com', 88888888),
(21, '2', 'paulo', 2147483647, '4554', 'paulo@paulo.com', 0),
(22, '2', 'joada', 2147483647, '2433', 'joao@teste.com', 0),
(26, '1', 'João', 2147483647, '87887878', '26262633@aa.com.br', 0),
(27, '2', 'Fabio', 123456789, '87887878', 'pa@aa.com.br', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
