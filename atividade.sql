
--criaçao da tabela


CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  `cargo` varchar(120) NOT NULL,
  `datain` date NOT NULL,
  `dataout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

