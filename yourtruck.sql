-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2021 às 04:07
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `yourtruck`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `situacao` enum('ativo','bloqueado') DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome`, `email`, `senha`, `situacao`) VALUES
(1, 'Joshua o rei', 'primatadb', '12345', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT 'sem avaliação',
  `pontuacao` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id_avaliacao`, `descricao`, `pontuacao`) VALUES
(1, 'horrível', 0),
(2, 'excelente ', 5);

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `foto_usuario` varchar(45) DEFAULT NULL,
  `avaliacao_idavaliacao` int(11) NOT NULL,
  `situacao` enum('ativo','bloqueado') DEFAULT 'ativo',
  `data_nascimento` date DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `unique_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `senha`, `cpf`, `endereco`, `cep`, `foto_usuario`, `avaliacao_idavaliacao`, `situacao`, `data_nascimento`, `telefone`, `unique_id`) VALUES
(1, 'Julia Nakamura Mayumi ', 'mucalol@gmail.com', 'muca123', '383.256.380-60', '', '12224-450', 'e2e26ee5eef7186ecc8278c374d665ec663e64b4.jpg', 0, 'ativo', '1996-03-20', '61-80325-4966', 0),
(2, 'bruno Henrique ', 'brunoflasco@gmail.com', 'flamengo123', '746.029.640-60', '', '12240-350', 'ab8fc348999bd83cb01dcf1cfad31bf12bb62ecd.jpg', 0, 'ativo', '1998-05-22', '37-17391-1582', 0),
(3, 'Ivy Moraes', 'ivybbb21@gmail.com', 'bbb21', '516.245.210-61', '', '12247-680', 'b5a09a0453380d3b84623e474002e013b97e602c.jpg', 0, 'ativo', '1991-02-05', '49-87448-9049', 0),
(4, 'Pedro Pedroso', 'Pedro.222@gmail.com', 'pedro222', '442.442.230-53', '', '12227-720', 'c568f77fe82758527642c332695dea29d260b9c8.jpg', 0, 'ativo', '1999-07-31', '64-88409-5968', 0),
(5, 'João Batista Ferreira ', 'jferreira@gmail.com', 'ferreira21', '601.034.410-77', '', '12228-060', 'f0b5bf3e9961193f4a5a3f71d620ce557b584b91.jpg', 0, 'ativo', '1988-02-22', '22-24706-1430', 0),
(6, 'Pedro Zacarias', 'zaca@yahoo.com', 'zeca123', '4662352252', 'Rua Presidente Jair Messias Bolsonaro', '12243050', 'zeca,jpg', 3, 'ativo', '0000-00-00', '1239232749', 1154451212);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_veiculo`
--

CREATE TABLE `imagens_veiculo` (
  `id_imagem` int(11) NOT NULL,
  `foto_veiculo` varchar(150) DEFAULT NULL,
  `id_veiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagens_veiculo`
--

INSERT INTO `imagens_veiculo` (`id_imagem`, `foto_veiculo`, `id_veiculo`) VALUES
(1, '2c3a85b5e72a59b05e5bd79d229a5134b1f3fa53.jpg', 6),
(2, 'rager3.jpg', 5),
(3, '6f99e22e49fe4d2df3c12028c78cadff2d1cbb02.jpg', 6),
(5, 'ranger2.jpg', 5),
(9, '0fe38e7dc0b8275b99ba2a18ea131be445604f0a.jpg', 11),
(10, '9cc7757337.jpg', 4),
(14, 'c7586e01e305be1f3fce8e117c8a124f7599d884.jpg', 32),
(15, '8aaef4f21ddc135227e7b4f79b4d7eda16fe61f3.jpg', 33),
(16, 'da797005b36f2cdd43c421c88d0e71ac1e6c55c8.jpg', 34),
(17, 'sav2.jpg', 23),
(18, 'sav3.jpg', 23),
(19, 'b25015eb5950b2c80cd4c48c500251609dbf320d.jpg', 35),
(20, '5d77e5125d5b231737b2bc2b07ca5a74c5e66b98.jpg', 36),
(21, '72d671d37d2e5b31f4bcbc3a87f763f2f7474318.jpg', 37),
(22, '22d941847803f46128e7527daaff16e8f3c55897.jpg', 38),
(23, '5939c64c92d6f5004e5adb2dd62672f661fe9ed1.jpg', 39),
(24, '11a983601c64cb5137538c7b9a7a44e95073abdb.jpg', 40),
(25, 'azulao2.jpg', 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 750141575, 1401849622, 'oi lindo'),
(2, 1401849622, 750141575, 'a leva uma geladeira'),
(3, 1401849622, 750141575, 'a ta bom'),
(4, 1401849622, 750141575, 'a chego dboa'),
(5, 1401849622, 750141575, 'vlw');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id_motorista` int(11) NOT NULL,
  `avaliacao_idavaliacao` int(11) DEFAULT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cnh` varchar(45) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `situacao` enum('ativo','bloqueado') DEFAULT 'ativo',
  `foto_caminhoneiro` varchar(150) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `categoria` varchar(40) NOT NULL,
  `servico` enum('Disponível','Indisponível') NOT NULL DEFAULT 'Disponível',
  `assinatura` enum('Padrão','Motora VIP') NOT NULL DEFAULT 'Padrão'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id_motorista`, `avaliacao_idavaliacao`, `nome`, `email`, `senha`, `cnh`, `rg`, `cpf`, `telefone`, `cep`, `situacao`, `foto_caminhoneiro`, `data_nascimento`, `categoria`, `servico`, `assinatura`) VALUES
(7, 0, 'pedro', 'pedropedregulho@gmail.com', 'pedregulho', '1111111', '2222222', '33333334', '444444445', '5555555556', 'ativo', '6fef4046625bf8f513fc591dfdd7761bf0561e18.jpg', '2021-08-16', 'carreto', 'Disponível', ''),
(16, NULL, 'José Cleber', 'motorista@hotmail.com', '12345', '32326598', '5252507898-03', '528645486-24', '12991583756', '12243050', 'ativo', 'd70e992cace364ecdf5473a174282f233c4876ff.jpg', '1980-08-25', 'frete', 'Disponível', ''),
(20, NULL, 'Zeca', 'zeca@gmail.com', '12345', '1212124040', '525252825', '669696565', '129953823758', '12124040', 'ativo', 'bbb8d09adbe0c9195dc87f756843665476be05b4.jpg', '2000-05-24', 'frete', 'Disponível', ''),
(21, 5, 'Rogerio Veneza', 'raul@gmail.com', '12345', '1659598986', '25698632574', '525.681.418-40', '1298877474157', '12227785', 'ativo', 'e3896be8ec67117ac813428a870878af8f3c3c28.jpg', '2021-07-13', 'transporte', 'Indisponível', 'Padrão'),
(22, NULL, 'Tiringa Santos', 'tiringa@hotmail.com', '12345', '14323664456', '52 645 520-7', '252.065.966-33', '12-998533758', '12240-056', 'ativo', '28e684fae6477be9ece28de3c7962cd8ab911f87.jpg', '1988-09-08', 'entrega', 'Disponível', ''),
(23, NULL, 'Josue', 'josue@gmail.com', '12345', '23235525', '52525200', '11122266655', '12-998533758', '12240-057', 'ativo', '8569001606351dc8102d79fef75304cc3f644045.jpg', '2000-03-05', 'trasporte', 'Indisponível', 'Padrão'),
(24, NULL, 'Thiago', 'tisantos@hotmail.com', '123456', '56836953', '568696936', '56869693535', '12345678', '12256882', 'ativo', '2b624e7f09745bb629a518c9e6906731f7d23081.jpg', '1998-12-03', 'entrega', 'Disponível', ''),
(26, NULL, 'Maria', 'maria@hotmail.com', '123124', '56836953', '52525200', '454545454545', '3123123', '321312', 'ativo', 'cf24e9a22377f546c814a2e6d7f4a577d7a5a8ce.jpg', '1999-09-09', 'mudança', 'Disponível', ''),
(29, NULL, 'João', 'joao@gmail.com', '12345', '34424324', '343424234', '343434343', '123121212455', '1231234', 'ativo', '0559f955e5a93c52142ae719392cf4f9c2ab638b.jpg', '1998-09-09', 'frete', 'Disponível', ''),
(30, NULL, 'Alex', 'alex@gmail.com', '123143', '1312321', '1341231231', '1231231', '12313', '123213', 'ativo', 'b8a21a71c64e3e471c180c810df93a6d29475d7d.jpg', '9999-08-09', 'frete', 'Disponível', ''),
(43, NULL, 'Breno', 'breno@hotmail.com', '12345', '12334455', '123131', '2350990908', '1212134', '1224450', 'ativo', '887a2e1ce3468ee44979d2ff5999dfca6b4d6164.jpg', '1978-12-19', 'frete', 'Disponível', ''),
(49, NULL, 'Igor', 'igao@gmail.com', '1234', '5485893', '584858', '5848588', '12321344', '12243505', 'ativo', 'c53a8a78beb8e9afac35a207f81ced9039a0b56a.jpg', '1999-09-09', 'frete', 'Disponível', ''),
(55, NULL, 'Eliel', 'eliel@gmail.com', '12345', '3213123', '2332131', '234321333', '121323123', '12132321', 'ativo', '63360d10e1ec319baa62bd1c3ae668fddbb5db7d.jpg', '1897-05-05', 'mudança', 'Disponível', ''),
(58, NULL, 'Aldair', 'aldair@hotmail.com', '12345', '25369881143', '53 265 896-3', '862.636.885-14', '12-998622488', '12536-596', 'ativo', 'a561128c84b200754311cd8a1205049a01da5fe2.jpg', '1989-08-26', 'trasporte', 'Disponível', ''),
(59, NULL, 'Lucas', 'luquinha@gmail.com', '1452', '25263698996', '22 658 556-2', '859.362.547-52', '28-936639669', '12536-966', 'ativo', 'bd314dd655a11182d13909bcad432fe447bff916.jpg', '2000-07-26', 'entrega', 'Disponível', ''),
(60, NULL, 'Maria Eduarda', 'madu@hotmail.com', 'madu2015', '53620252000', '56 362 654-7', '698.933.251-46', '12-988963251', '12536-225', 'ativo', 'e5a8e3c7c018867118c93ab57834e0c7de6be1e6.jpg', '2001-03-05', 'trasporte', 'Disponível', ''),
(62, NULL, 'Vitor Lucas da Silva', 'vitinho@gmail.com', 'Vi12@', '74129546827', '44 371 709-6', '379.181.594-62', '98-982221287', '65032-580', 'ativo', '0f42762715283f9c3a7dfebd55b725ca1b5c6d63.jpg', '1998-10-19', 'frete', 'Disponível', 'Padrão'),
(63, NULL, 'Luiza Heloisa Natália Barros', 'luziaheloisa@trone.com.br', 'O0MnlCKpud', '74212909361', '18 900 859-3', '563.785.073-92', '81-991071925', '54320-261', 'ativo', 'c6cf5040f8ed902f9b7fbbe540966c955fc49be3.jpg', '1993-08-24', 'frete', 'Disponível', 'Padrão'),
(64, NULL, 'César Cauã Yuri Silveira', 'ccesarcauayurisilveira@tanet.com.br', 'tA8nreO4bO', '82552226903', '14 236 021-1', '898.656.299-50', '48-981396920', '88135-611', 'ativo', '4e536e27dc762f924dc1324fd9281b666df0c14b.jpg', '1970-09-01', 'trasporte', 'Disponível', 'Padrão'),
(65, NULL, 'Eduardo Anderson da Mota', 'eduardoandersondamota_@jammer.com.br', 'HzdcDWs8KL', '04001644815', '49 568 481-8', '143.282.984-02', '63-994049069', '77018-434', 'ativo', 'd90d3c318197a6e434e4bc49c9edbb4a3e801df8.jpg', '1978-09-26', 'entrega', 'Disponível', 'Padrão'),
(66, NULL, 'Anderson Augusto Viana', 'andersonaugustoviana@eccofibra.com', 'm3OoXCIz5R', '22914844217', '27 998 981-7', '070.484.481-80', '95-988182584', '69308-120', 'ativo', 'eb7c929ff7ba2077b241b7e7fcf1b98365dcd2b1.jpg', '1980-12-08', 'trasporte', 'Disponível', 'Padrão'),
(67, NULL, 'Benedito Pietro Felipe da Rosa', 'bbeneditopietrofelipedarosa@aliancacadeiras.c', 'yqiw2tnQbU', '15597541756', '44 329 585-2', '309.118.376-98', '38-992306835', '39400-099', 'ativo', '6979cab823ad1a2173301881b005ec5103c272d1.jpg', '1977-01-03', 'frete', 'Disponível', 'Motora VIP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 750141575, 'Enrico', 'Germano', 'enricogerano@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1633651561yoda.jpg', 'Offline now'),
(2, 1401849622, 'Marcos', 'Paulo', 'paulo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1633651890rafael-argentin-baixa-506x336.jpg', 'Offline now'),
(3, 406946445, 'André', 'Peres', 'andre@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1635293031zac.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id_veiculo` int(11) NOT NULL,
  `placa` varchar(45) NOT NULL,
  `capacidade` int(11) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `ano` int(11) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `id_motorista` int(11) DEFAULT NULL,
  `destaque` enum('S','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id_veiculo`, `placa`, `capacidade`, `modelo`, `ano`, `cor`, `categoria`, `id_motorista`, `destaque`) VALUES
(4, 'AGD-0660', 3000, 'Caminhão', 1998, 'azul', 'frete', 16, 'N'),
(5, 'NEL-1954', 550, 'Saveiro', 2006, 'Preto', 'entrega', 21, 'N'),
(6, 'NAM-4392', 100000, 'Caminhão Baú', 2003, 'Cinza', 'Transporte', 21, 'N'),
(11, 'VCH-5867', 3000, 'Caminhão Toco', 2006, 'Cinza', 'entrega', 16, 'N'),
(23, 'JNY-7123', 1000, 'Saveiro', 2000, 'Preta', 'frete', 49, 'S'),
(32, 'LCD-3030', 5000, 'Carreto', 2003, 'Cinza', 'trasporte', 58, 'S'),
(33, 'JNY-7123', 2000, 'Caminhonete', 2006, 'Preto', 'entrega', 59, 'N'),
(34, 'LGB-1425', 2000, 'VUC', 2010, 'Branco', 'trasporte', 60, 'S'),
(35, 'IAL-3834', 4000, 'Mercedes', 1999, 'Amarelo', 'mudança', 62, 'N'),
(36, 'MTM-4467', 3000, 'VolksWagen', 2014, 'Vermelho', 'frete', 63, 'N'),
(37, 'HOU-1245', 1000, 'KIA', 2006, 'Cinza', 'trasporte', 64, 'N'),
(38, 'JEJ-0661', 3000, 'Mercedes', 2015, 'Branco', 'entrega', 65, 'N'),
(39, 'NEL-3732', 2000, 'Hyundai', 2012, 'Branco', 'trasporte', 66, 'N'),
(40, 'BBG-6924', 5000, 'VolksWagen', 1998, 'Azul', 'trasporte', 67, 'S');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`);

--
-- Índices para tabela `carrouses`
--
ALTER TABLE `carrouses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `imagens_veiculo`
--
ALTER TABLE `imagens_veiculo`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `fk_id_veiculo` (`id_veiculo`);

--
-- Índices para tabela `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Índices para tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id_motorista`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id_veiculo`) USING BTREE,
  ADD KEY `categoria` (`categoria`),
  ADD KEY `fk_id_motorista` (`id_motorista`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carrouses`
--
ALTER TABLE `carrouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `imagens_veiculo`
--
ALTER TABLE `imagens_veiculo`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_motorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `imagens_veiculo`
--
ALTER TABLE `imagens_veiculo`
  ADD CONSTRAINT `fk_id_veiculo` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculo` (`id_veiculo`);

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_id_motorista` FOREIGN KEY (`id_motorista`) REFERENCES `motorista` (`id_motorista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
