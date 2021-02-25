-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela komtec-sistema.carros
CREATE TABLE IF NOT EXISTS `carros` (
  `carro_id` int(11) NOT NULL AUTO_INCREMENT,
  `carro_nome` varchar(45) DEFAULT NULL,
  `carro_modelo` varchar(45) DEFAULT NULL,
  `carro_marca_id` int(11) NOT NULL,
  `carro_placa` varchar(8) DEFAULT NULL,
  `carro_descricao` tinytext,
  `carro_ativo` tinyint(1) DEFAULT NULL,
  `carro_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`carro_id`),
  KEY `fk_carro_marca_id` (`carro_marca_id`),
  CONSTRAINT `fk_carro_marca_id` FOREIGN KEY (`carro_marca_id`) REFERENCES `marcas` (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.carros: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `carros` DISABLE KEYS */;
INSERT INTO `carros` (`carro_id`, `carro_nome`, `carro_modelo`, `carro_marca_id`, `carro_placa`, `carro_descricao`, `carro_ativo`, `carro_data_alteracao`) VALUES
	(1, 'Caminhonete', 'S10', 12, 'ABC-1234', NULL, 1, '2021-02-14 00:46:44'),
	(2, 'Caminhonete', 'Strada', 14, 'ABC-2345', NULL, 0, '2021-02-20 16:30:44'),
	(3, 'Caminhonete', 'Saveiro', 13, 'ABC-3456', NULL, 1, '2021-02-14 00:48:12'),
	(4, 'Caminhonete', 'Hyullux', 15, 'ABC-4567', NULL, 1, '2021-02-14 00:50:14'),
	(5, 'Passeio', 'HB20S', 4, 'QTS-8907', NULL, 1, '2021-02-22 09:08:27');
/*!40000 ALTER TABLE `carros` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_nome` varchar(45) NOT NULL,
  `categoria_ativa` tinyint(1) DEFAULT NULL,
  `categoria_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.categorias: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`categoria_id`, `categoria_nome`, `categoria_ativa`, `categoria_data_alteracao`) VALUES
	(1, 'Motor', 1, '2021-02-01 22:59:30'),
	(2, 'Sistema Hidráulico', 1, '2021-02-01 09:30:38'),
	(3, 'Sistema de Freio', 0, '2021-01-28 12:00:43'),
	(4, 'Sistema Elétrico', 0, '2021-01-28 12:01:01'),
	(5, 'Transmissão', 1, '2021-02-06 10:23:07'),
	(6, 'Diferencial', 0, '2021-02-01 22:59:21'),
	(7, 'Combustível', 1, '2021-02-02 14:36:15');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `cliente_id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cliente_tipo` tinyint(1) DEFAULT NULL,
  `cliente_nome` varchar(45) NOT NULL,
  `cliente_sobrenome` varchar(150) NOT NULL,
  `cliente_data_nascimento` date NOT NULL,
  `cliente_cpf_cnpj` varchar(20) NOT NULL,
  `cliente_rg_ie` varchar(20) NOT NULL,
  `cliente_email` varchar(50) NOT NULL,
  `cliente_telefone` varchar(20) NOT NULL,
  `cliente_celular` varchar(20) NOT NULL,
  `cliente_cep` varchar(10) NOT NULL,
  `cliente_endereco` varchar(155) NOT NULL,
  `cliente_numero_endereco` varchar(20) NOT NULL,
  `cliente_bairro` varchar(45) NOT NULL,
  `cliente_complemento` varchar(145) NOT NULL,
  `cliente_cidade` varchar(105) NOT NULL,
  `cliente_estado` varchar(2) NOT NULL,
  `cliente_nome_pai` varchar(45) NOT NULL,
  `cliente_nome_mae` varchar(45) NOT NULL,
  `cliente_ativo` tinyint(1) NOT NULL,
  `cliente_obs` tinytext,
  `cliente_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cliente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.clientes: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`cliente_id`, `cliente_data_cadastro`, `cliente_tipo`, `cliente_nome`, `cliente_sobrenome`, `cliente_data_nascimento`, `cliente_cpf_cnpj`, `cliente_rg_ie`, `cliente_email`, `cliente_telefone`, `cliente_celular`, `cliente_cep`, `cliente_endereco`, `cliente_numero_endereco`, `cliente_bairro`, `cliente_complemento`, `cliente_cidade`, `cliente_estado`, `cliente_nome_pai`, `cliente_nome_mae`, `cliente_ativo`, `cliente_obs`, `cliente_data_alteracao`) VALUES
	(1, '2021-01-28 11:02:25', 1, 'Roberson', 'Dias dos Santos', '1971-02-03', '118.306.330-07', '44.366.218-6', 'komtec.komatsu@gmail.com', '(62) 3577-2346', '(62) 99325-6370', '74491-607', 'JC305', '7A', 'Jardim do Cliente', 'Quadra do Cliente', 'Goiânia', 'GO', '', '', 1, 'Novo cliente', '2021-02-06 14:39:42'),
	(2, '2021-02-06 13:08:50', 1, 'Ana Laura', 'Rosa Dias', '1982-03-06', '338.841.960-49', '22.364.812-7', 'analrosad@gmail.com', '(62) 3577-7722', '(62) 9922-2221', '78934-470', 'JC305', '7A', 'Jardim do Nova Esperança', 'Quadra 22', 'Cuiabá', 'MT', '', '', 1, '', '2021-02-06 13:08:50'),
	(3, '2021-02-06 13:12:57', 2, 'Komatsu do Brasil', 'Komatsu do Brasil', '1945-02-01', '45.764.619/0001-00', '386.198.535.610', 'compras@komatsu.com.br', '(11) 3333-3333', '(11) 96123-4444', '02324-005', 'Via de Pedestre Césio', '17536', 'Jardim Ataliba Leonel', '', 'São Paulo', 'SP', '', '', 1, 'Cliente de peças e serviços Komatsu', '2021-02-06 13:12:57');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.contas_pagar
CREATE TABLE IF NOT EXISTS `contas_pagar` (
  `conta_pagar_id` int(11) NOT NULL AUTO_INCREMENT,
  `conta_pagar_fornecedor_id` int(11) DEFAULT NULL,
  `conta_pagar_data_vencimento` date DEFAULT NULL,
  `conta_pagar_data_pagamento` datetime DEFAULT NULL,
  `conta_pagar_valor` varchar(15) DEFAULT NULL,
  `conta_pagar_status` tinyint(1) DEFAULT NULL,
  `conta_pagar_obs` tinytext,
  `conta_pagar_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`conta_pagar_id`),
  KEY `fk_conta_pagar_id_fornecedor` (`conta_pagar_fornecedor_id`),
  CONSTRAINT `fk_conta_pagar_id_fornecedor` FOREIGN KEY (`conta_pagar_fornecedor_id`) REFERENCES `fornecedores` (`fornecedor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='		';

-- Copiando dados para a tabela komtec-sistema.contas_pagar: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contas_pagar` DISABLE KEYS */;
INSERT INTO `contas_pagar` (`conta_pagar_id`, `conta_pagar_fornecedor_id`, `conta_pagar_data_vencimento`, `conta_pagar_data_pagamento`, `conta_pagar_valor`, `conta_pagar_status`, `conta_pagar_obs`, `conta_pagar_data_alteracao`) VALUES
	(1, 1, '2021-02-08', '2021-02-06 12:52:53', '950.00', 1, 'Cliente solicitou alterar a data do pagamento para segunda-feira 08/02/2021', '2021-02-06 09:52:53'),
	(2, 2, '2021-02-18', NULL, '231.50', 0, 'APÓS VENCIMENTO SERÁ COBRA JUROS DE R$ 0,76 AO DIA E PROTESTADO APÓS 5 DIAS APÓS O VENCIMENTO', '2021-02-06 10:53:22');
/*!40000 ALTER TABLE `contas_pagar` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.contas_receber
CREATE TABLE IF NOT EXISTS `contas_receber` (
  `conta_receber_id` int(11) NOT NULL AUTO_INCREMENT,
  `conta_receber_cliente_id` int(11) NOT NULL,
  `conta_receber_data_vencimento` date DEFAULT NULL,
  `conta_receber_data_pagamento` datetime DEFAULT NULL,
  `conta_receber_valor` varchar(20) DEFAULT NULL,
  `conta_receber_status` tinyint(1) DEFAULT NULL,
  `conta_receber_obs` tinytext,
  `conta_receber_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`conta_receber_id`),
  KEY `fk_conta_receber_id_cliente` (`conta_receber_cliente_id`),
  CONSTRAINT `fk_conta_receber_id_cliente` FOREIGN KEY (`conta_receber_cliente_id`) REFERENCES `clientes` (`cliente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.contas_receber: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `contas_receber` DISABLE KEYS */;
INSERT INTO `contas_receber` (`conta_receber_id`, `conta_receber_cliente_id`, `conta_receber_data_vencimento`, `conta_receber_data_pagamento`, `conta_receber_valor`, `conta_receber_status`, `conta_receber_obs`, `conta_receber_data_alteracao`) VALUES
	(1, 1, '2021-03-01', '2020-02-28 17:48:21', '150.226,22', 0, 'Cliente pediu para alterar vencimento para 01/03/2021', '2021-02-06 15:39:37'),
	(2, 2, '2020-02-21', '2020-02-28 18:33:19', '350,00', 1, NULL, '2021-02-06 15:39:42'),
	(3, 3, '2020-02-28', '2020-02-28 17:22:47', '56,00', 1, NULL, '2021-02-06 15:39:47'),
	(4, 1, '2021-02-06', NULL, '1.005,00', 0, 'Cliente deve pagar em 08/02/2021', '2021-02-06 15:44:51');
/*!40000 ALTER TABLE `contas_receber` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.equipamentos
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `equipamento_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipamento_marca_id` int(11) NOT NULL,
  `equipamento_codigo` varchar(45) DEFAULT NULL,
  `equipamento_data_cadastro` datetime DEFAULT NULL,
  `equipamento_hodometro` varchar(20) DEFAULT NULL,
  `equipamento_serie_motor` varchar(25) DEFAULT NULL,
  `equipamento_nome` varchar(145) DEFAULT NULL,
  `equipamento_modelo` varchar(45) DEFAULT NULL,
  `equipamento_serie` varchar(145) DEFAULT NULL,
  `equipamento_ativo` tinyint(1) DEFAULT NULL,
  `equipamento_obs` tinytext,
  `equipamento_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`equipamento_id`),
  KEY `fk_equipamento_marca_id` (`equipamento_marca_id`),
  CONSTRAINT `fk_equipamento_marca_id` FOREIGN KEY (`equipamento_marca_id`) REFERENCES `marcas` (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.equipamentos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `equipamentos` DISABLE KEYS */;
INSERT INTO `equipamentos` (`equipamento_id`, `equipamento_marca_id`, `equipamento_codigo`, `equipamento_data_cadastro`, `equipamento_hodometro`, `equipamento_serie_motor`, `equipamento_nome`, `equipamento_modelo`, `equipamento_serie`, `equipamento_ativo`, `equipamento_obs`, `equipamento_data_alteracao`) VALUES
	(1, 2, '09842572', '2021-02-21 18:59:15', '4034', '12345678', 'Escavadeira Hidráulica', 'PC200-8', 'B10234', 1, NULL, '2021-02-21 19:00:27'),
	(2, 2, '47162085', NULL, NULL, NULL, 'Carregadeiras de Rodas', 'WA200-5', NULL, 1, '', '2021-02-21 19:01:12'),
	(3, 2, '37084569', NULL, NULL, NULL, 'Trator de Esteiras', 'D61EX-15E0', NULL, 1, '', '2021-02-21 19:01:31'),
	(4, 2, '52918430', NULL, NULL, NULL, 'Motoniveladora', 'GD655-5', NULL, 1, '', '2021-02-21 19:01:58');
/*!40000 ALTER TABLE `equipamentos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.formas_pagamentos
CREATE TABLE IF NOT EXISTS `formas_pagamentos` (
  `forma_pagamento_id` int(11) NOT NULL AUTO_INCREMENT,
  `forma_pagamento_nome` varchar(45) DEFAULT NULL,
  `forma_pagamento_aceita_parc` tinyint(1) DEFAULT NULL,
  `forma_pagamento_ativa` tinyint(1) DEFAULT NULL,
  `forma_pagamento_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`forma_pagamento_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.formas_pagamentos: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `formas_pagamentos` DISABLE KEYS */;
INSERT INTO `formas_pagamentos` (`forma_pagamento_id`, `forma_pagamento_nome`, `forma_pagamento_aceita_parc`, `forma_pagamento_ativa`, `forma_pagamento_data_alteracao`) VALUES
	(1, 'Cartão de crédito 1X', 1, 1, '2021-02-07 10:48:55'),
	(2, 'Dinheiro', 0, 1, '2021-02-07 09:59:21'),
	(3, 'Boletos 28 Dias', 1, 1, '2021-02-07 10:38:07'),
	(4, 'Cartão  de Débito', 0, 1, '2021-02-07 10:35:48'),
	(5, 'A Vista', 0, 1, '2021-02-07 10:36:33'),
	(6, 'Boleto 28/56 Dias', 1, 1, '2021-02-07 10:37:54'),
	(7, 'Boleto 28/56/72 Dias', 1, 1, '2021-02-07 10:40:30'),
	(8, 'Cartão de Crédito 2X', 1, 1, '2021-02-07 10:49:23'),
	(9, 'Cartão de Crédito 3X', 1, 1, '2021-02-07 10:49:53'),
	(10, 'Transferência Bancária', 0, 1, '2021-02-07 10:50:50');
/*!40000 ALTER TABLE `formas_pagamentos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.fornecedores
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `fornecedor_id` int(11) NOT NULL AUTO_INCREMENT,
  `fornecedor_data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fornecedor_razao` varchar(200) DEFAULT NULL,
  `fornecedor_nome_fantasia` varchar(145) DEFAULT NULL,
  `fornecedor_cnpj` varchar(20) DEFAULT NULL,
  `fornecedor_ie` varchar(20) DEFAULT NULL,
  `fornecedor_telefone` varchar(20) DEFAULT NULL,
  `fornecedor_celular` varchar(20) DEFAULT NULL,
  `fornecedor_email` varchar(100) DEFAULT NULL,
  `fornecedor_contato` varchar(45) DEFAULT NULL,
  `fornecedor_cep` varchar(10) DEFAULT NULL,
  `fornecedor_endereco` varchar(145) DEFAULT NULL,
  `fornecedor_numero_endereco` varchar(20) DEFAULT NULL,
  `fornecedor_bairro` varchar(45) DEFAULT NULL,
  `fornecedor_complemento` varchar(45) DEFAULT NULL,
  `fornecedor_cidade` varchar(45) DEFAULT NULL,
  `fornecedor_estado` varchar(2) DEFAULT NULL,
  `fornecedor_ativo` tinyint(1) DEFAULT NULL,
  `fornecedor_obs` tinytext,
  `fornecedor_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fornecedor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.fornecedores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`fornecedor_id`, `fornecedor_data_cadastro`, `fornecedor_razao`, `fornecedor_nome_fantasia`, `fornecedor_cnpj`, `fornecedor_ie`, `fornecedor_telefone`, `fornecedor_celular`, `fornecedor_email`, `fornecedor_contato`, `fornecedor_cep`, `fornecedor_endereco`, `fornecedor_numero_endereco`, `fornecedor_bairro`, `fornecedor_complemento`, `fornecedor_cidade`, `fornecedor_estado`, `fornecedor_ativo`, `fornecedor_obs`, `fornecedor_data_alteracao`) VALUES
	(1, '2021-01-28 11:05:11', 'Roberson Dias dos Santos', 'KomTec Peças e Serviços', '37.112.322/0001-32', '10.944.755-7', '(62) 3577-2346', '(62) 99325-6370', 'komtec.komatsu@gmail.com', 'Roberson', '74491-607', 'JC305', '7A', 'Jardim do Fornecedor', 'Quadra do Fornecedor', 'Goiânia', 'GO', 1, 'Novo Fornecedor', '2021-02-01 08:13:15'),
	(2, '2021-02-06 10:48:30', 'Tem Tratorpeças Ltda', 'Tem Tratorpeças Ltda', '28.197.247/0001-69', '892.254.190.487', '(11) 3466-3333', '(11) 96186-9826', 'paulo.sales@temtratorpecas.com.br', 'Paulo', '09635-010', 'Av. Lauro Gomes', '5049', 'Vila Vivaldi', '', 'São Bernardo do Campo', 'SP', 0, 'Fornecedor de peças KOmatsu', '2021-02-07 08:15:43');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela komtec-sistema.groups: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.login_attempts
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela komtec-sistema.login_attempts: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `marca_id` int(11) NOT NULL AUTO_INCREMENT,
  `marca_nome` varchar(45) NOT NULL,
  `marca_ativa` tinyint(1) DEFAULT NULL,
  `marca_data_alteracao` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.marcas: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`marca_id`, `marca_nome`, `marca_ativa`, `marca_data_alteracao`) VALUES
	(2, 'Komatsu', 1, '2021-01-28 10:46:06'),
	(3, 'Caterpillar', 1, '2021-02-08 11:47:38'),
	(4, 'Hyundai', 1, '2021-02-08 11:47:56'),
	(5, 'Case', 1, '2021-02-08 11:48:04'),
	(6, 'Foton', 1, '2021-02-08 11:48:12'),
	(7, 'XCMG', 1, '2021-01-28 16:33:29'),
	(8, 'YTO', 1, '2021-02-08 11:48:21'),
	(9, 'JCB', 1, '2021-02-08 11:48:30'),
	(10, 'New Holland', 0, '2021-02-20 17:29:10'),
	(11, 'Gates', 1, '0000-00-00 00:00:00'),
	(12, 'Chevrolet', 1, '2021-02-13 23:39:49'),
	(13, 'Volkswagem', 1, '2021-02-13 23:39:58'),
	(14, 'Fiat', 1, '2021-02-13 23:40:05'),
	(15, 'Toyota', 1, '2021-02-14 00:50:01');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.ordem_tem_servicos
CREATE TABLE IF NOT EXISTS `ordem_tem_servicos` (
  `ordem_ts_id` int(11) NOT NULL AUTO_INCREMENT,
  `ordem_ts_id_servico` int(11) DEFAULT NULL,
  `ordem_ts_id_ordem_servico` int(11) DEFAULT NULL,
  `ordem_ts_quantidade` int(11) DEFAULT NULL,
  `ordem_ts_valor_unitario` varchar(45) DEFAULT NULL,
  `ordem_ts_valor_desconto` varchar(45) DEFAULT NULL,
  `ordem_ts_valor_total` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ordem_ts_id`),
  KEY `fk_ordem_ts_id_servico` (`ordem_ts_id_servico`),
  KEY `fk_ordem_ts_id_ordem_servico` (`ordem_ts_id_ordem_servico`),
  CONSTRAINT `fk_ordem_ts_id_ordem_servico` FOREIGN KEY (`ordem_ts_id_ordem_servico`) REFERENCES `ordens_servicos` (`ordem_servico_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_ordem_ts_id_servico` FOREIGN KEY (`ordem_ts_id_servico`) REFERENCES `servicos` (`servico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1 COMMENT='Tabela de relacionamento entre as tabelas servicos e ordem_servico';

-- Copiando dados para a tabela komtec-sistema.ordem_tem_servicos: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `ordem_tem_servicos` DISABLE KEYS */;
INSERT INTO `ordem_tem_servicos` (`ordem_ts_id`, `ordem_ts_id_servico`, `ordem_ts_id_ordem_servico`, `ordem_ts_quantidade`, `ordem_ts_valor_unitario`, `ordem_ts_valor_desconto`, `ordem_ts_valor_total`) VALUES
	(77, 1, 7, 15, ' 150.00', '0 ', ' 2250.00'),
	(78, 2, 7, 1318, ' 2.30', '0 ', ' 3031.40'),
	(79, 3, 7, 13, ' 65.00', '80 ', ' 169.00'),
	(83, 1, 8, 13, ' 150.00', '0 ', ' 1950.00'),
	(84, 1, 1, 10, ' 150.00', '0 ', ' 1500.00'),
	(85, 2, 1, 1000, ' 2.30', '0 ', ' 2300.00'),
	(86, 3, 1, 10, ' 65.00', '0 ', ' 650.00');
/*!40000 ALTER TABLE `ordem_tem_servicos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.ordens_servicos
CREATE TABLE IF NOT EXISTS `ordens_servicos` (
  `ordem_servico_id` int(11) NOT NULL AUTO_INCREMENT,
  `ordem_servico_forma_pagamento_id` int(11) DEFAULT NULL,
  `ordem_servico_cliente_id` int(11) DEFAULT NULL,
  `ordem_servico_equipamento_id` int(11) DEFAULT NULL,
  `ordem_servico_tecnico_id` int(11) DEFAULT NULL,
  `ordem_servico_marca_id` int(11) DEFAULT NULL,
  `ordem_servico_carro_id` int(11) DEFAULT NULL,
  `ordem_servico_data_emissao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ordem_servico_data_inicio` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ordem_servico_data_fechamento` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ordem_servico_data_conclusao` varchar(100) DEFAULT NULL,
  `ordem_servico_equipamento_serie` varchar(45) DEFAULT NULL,
  `ordem_servico_equipamento_serie_motor` varchar(25) DEFAULT NULL,
  `ordem_servico_equipamento_hodometro` varchar(20) DEFAULT NULL,
  `ordem_servico_equipamento_modelo` varchar(80) DEFAULT NULL,
  `ordem_servico_equipamento_pecas` tinytext,
  `ordem_servico_equipamento_defeito` tinytext,
  `ordem_servico_servico_executado` tinytext,
  `ordem_servico_valor_desconto` varchar(25) DEFAULT NULL,
  `ordem_servico_valor_total` varchar(25) DEFAULT NULL,
  `ordem_servico_status` tinyint(1) DEFAULT NULL,
  `ordem_servico_obs` tinytext,
  `ordem_servico_data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ordem_servico_id`),
  KEY `fk_ordem_servico_id_cliente` (`ordem_servico_cliente_id`),
  KEY `fk_ordem_servico_id_forma_pagto` (`ordem_servico_forma_pagamento_id`),
  KEY `fk_ordem_servico_id_equipamento` (`ordem_servico_equipamento_id`),
  KEY `fk_ordem_servico_id_tecnico` (`ordem_servico_tecnico_id`),
  KEY `fk_ordem_servico_id_marca` (`ordem_servico_marca_id`),
  KEY `fk_ordem_servico_id_carro` (`ordem_servico_carro_id`),
  CONSTRAINT `fk_ordem_servico_id_carro` FOREIGN KEY (`ordem_servico_carro_id`) REFERENCES `carros` (`carro_id`),
  CONSTRAINT `fk_ordem_servico_id_cliente` FOREIGN KEY (`ordem_servico_cliente_id`) REFERENCES `clientes` (`cliente_id`),
  CONSTRAINT `fk_ordem_servico_id_equipamento` FOREIGN KEY (`ordem_servico_equipamento_id`) REFERENCES `equipamentos` (`equipamento_id`),
  CONSTRAINT `fk_ordem_servico_id_forma_pagto` FOREIGN KEY (`ordem_servico_forma_pagamento_id`) REFERENCES `formas_pagamentos` (`forma_pagamento_id`),
  CONSTRAINT `fk_ordem_servico_id_marca` FOREIGN KEY (`ordem_servico_marca_id`) REFERENCES `marcas` (`marca_id`),
  CONSTRAINT `fk_ordem_servico_id_tecnico` FOREIGN KEY (`ordem_servico_tecnico_id`) REFERENCES `tecnicos` (`tecnico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.ordens_servicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `ordens_servicos` DISABLE KEYS */;
INSERT INTO `ordens_servicos` (`ordem_servico_id`, `ordem_servico_forma_pagamento_id`, `ordem_servico_cliente_id`, `ordem_servico_equipamento_id`, `ordem_servico_tecnico_id`, `ordem_servico_marca_id`, `ordem_servico_carro_id`, `ordem_servico_data_emissao`, `ordem_servico_data_inicio`, `ordem_servico_data_fechamento`, `ordem_servico_data_conclusao`, `ordem_servico_equipamento_serie`, `ordem_servico_equipamento_serie_motor`, `ordem_servico_equipamento_hodometro`, `ordem_servico_equipamento_modelo`, `ordem_servico_equipamento_pecas`, `ordem_servico_equipamento_defeito`, `ordem_servico_servico_executado`, `ordem_servico_valor_desconto`, `ordem_servico_valor_total`, `ordem_servico_status`, `ordem_servico_obs`, `ordem_servico_data_alteracao`) VALUES
	(1, 6, 2, 1, 1, 2, 1, '2021-02-21 21:07:12', '2021-02-21 21:07:12', '2021-02-21 21:07:12', '21/02/2021', 'B10123', '123456', '4034', 'PC200-8', 'Kit Revisão de 4000 horas', 'Revisão de 4000 horas vencida', 'Executado a revisão de 4000 horas conforme manual de operação e manutenção', 'R$ 0.00', '4,450.00', 0, 'Testando novamente.', '2021-02-24 00:27:29'),
	(7, 2, 3, 2, 2, 2, 4, '2021-02-24 00:21:45', '2021-02-24 00:21:45', '2021-02-24 00:21:45', NULL, 'B10432', '23456789', '2001', 'WA200-5', 'Kit Revisão 2000 horas', 'Revisão de 2000 horas vencida', 'Executada revisão de 2000 horas conforme manual de operação e manutenção', 'R$ 676.00', '5,450.40', 1, 'Operador Pedro acompanhou o serviço', '2021-02-24 00:26:18'),
	(8, NULL, 3, 4, 3, 2, 5, '2021-02-24 00:54:00', '2021-02-24 00:54:00', '2021-02-24 00:54:00', NULL, 'B13456', '23456789', '5798', 'GD655-5', '', 'Equipamento não engata marchas', 'Foi limpo os conectores do módulo da transmissão, conferido as pressões e corrigido falha elétrica no chicote da transmissão.', 'R$ 0.00', '1,950.00', 0, 'Equipamento foi testado por 120 minutos e liberado para o trabalho.', NULL);
/*!40000 ALTER TABLE `ordens_servicos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `produto_id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_categoria_id` int(11) NOT NULL,
  `produto_marca_id` int(11) NOT NULL,
  `produto_fornecedor_id` int(11) NOT NULL,
  `produto_codigo` varchar(45) DEFAULT NULL,
  `produto_codigo_original` varchar(25) DEFAULT NULL,
  `produto_data_cadastro` datetime DEFAULT NULL,
  `produto_nome` varchar(45) DEFAULT NULL,
  `produto_descricao` varchar(145) DEFAULT NULL,
  `produto_unidade` varchar(25) DEFAULT NULL,
  `produto_codigo_barras` varchar(45) DEFAULT NULL,
  `produto_ncm` varchar(15) DEFAULT NULL,
  `produto_preco_custo` varchar(45) DEFAULT NULL,
  `produto_preco_venda` varchar(45) DEFAULT NULL,
  `produto_estoque_minimo` varchar(10) DEFAULT NULL,
  `produto_qtde_estoque` varchar(10) DEFAULT NULL,
  `produto_ativo` tinyint(1) DEFAULT NULL,
  `produto_obs` tinytext,
  `produto_data_alteracao` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`produto_id`),
  KEY `fk_produto_id_categoria` (`produto_categoria_id`),
  KEY `fk_produto_id_marca` (`produto_marca_id`),
  KEY `fk_produto_id_forncedor` (`produto_fornecedor_id`),
  CONSTRAINT `fk_produto_id_categoria` FOREIGN KEY (`produto_categoria_id`) REFERENCES `categorias` (`categoria_id`),
  CONSTRAINT `fk_produto_id_forncedor` FOREIGN KEY (`produto_fornecedor_id`) REFERENCES `fornecedores` (`fornecedor_id`),
  CONSTRAINT `fk_produto_id_marca` FOREIGN KEY (`produto_marca_id`) REFERENCES `marcas` (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.produtos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`produto_id`, `produto_categoria_id`, `produto_marca_id`, `produto_fornecedor_id`, `produto_codigo`, `produto_codigo_original`, `produto_data_cadastro`, `produto_nome`, `produto_descricao`, `produto_unidade`, `produto_codigo_barras`, `produto_ncm`, `produto_preco_custo`, `produto_preco_venda`, `produto_estoque_minimo`, `produto_qtde_estoque`, `produto_ativo`, `produto_obs`, `produto_data_alteracao`) VALUES
	(2, 1, 2, 1, '76034289', '6754-79-6140', NULL, 'Filtro', 'Filtro Principal de Combustível', 'UN', '3202902913418608456654177', '1234567890', '27,00', '69,00', '5', '20', 1, 'Falta o NCM do produto', '2021-02-24 08:16:55');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `servico_id` int(11) NOT NULL AUTO_INCREMENT,
  `servico_descricao` varchar(145) DEFAULT NULL,
  `servico_preco` varchar(15) DEFAULT NULL,
  `servico_nome` tinytext,
  `servico_ativo` tinyint(1) DEFAULT NULL,
  `servico_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`servico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.servicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` (`servico_id`, `servico_descricao`, `servico_preco`, `servico_nome`, `servico_ativo`, `servico_data_alteracao`) VALUES
	(1, 'Hora Trabalhadas', '150,00', 'Hora trabalhada no serviço', 1, '2021-02-16 02:45:40'),
	(2, 'KM', '2,30', 'KM em deslocamento', 1, '2021-02-16 02:46:01'),
	(3, 'Hora de deslocamento', '65,00', 'Hora de deslocamento', 1, '2021-02-13 17:58:53');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.sistema
CREATE TABLE IF NOT EXISTS `sistema` (
  `sistema_id` int(11) NOT NULL AUTO_INCREMENT,
  `sistema_razao_social` varchar(145) DEFAULT NULL,
  `sistema_nome_fantasia` varchar(145) DEFAULT NULL,
  `sistema_cnpj` varchar(25) DEFAULT NULL,
  `sistema_ie` varchar(25) DEFAULT NULL,
  `sistema_telefone_fixo` varchar(25) DEFAULT NULL,
  `sistema_telefone_movel` varchar(25) NOT NULL,
  `sistema_email` varchar(100) DEFAULT NULL,
  `sistema_site_url` varchar(100) DEFAULT NULL,
  `sistema_cep` varchar(25) DEFAULT NULL,
  `sistema_endereco` varchar(145) DEFAULT NULL,
  `sistema_numero` varchar(25) DEFAULT NULL,
  `sistema_bairro` varchar(45) DEFAULT NULL,
  `sistema_cidade` varchar(45) DEFAULT NULL,
  `sistema_estado` varchar(2) DEFAULT NULL,
  `sistema_txt_ordem_servico` tinytext,
  `sistema_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sistema_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.sistema: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema` DISABLE KEYS */;
INSERT INTO `sistema` (`sistema_id`, `sistema_razao_social`, `sistema_nome_fantasia`, `sistema_cnpj`, `sistema_ie`, `sistema_telefone_fixo`, `sistema_telefone_movel`, `sistema_email`, `sistema_site_url`, `sistema_cep`, `sistema_endereco`, `sistema_numero`, `sistema_bairro`, `sistema_cidade`, `sistema_estado`, `sistema_txt_ordem_servico`, `sistema_data_alteracao`) VALUES
	(1, 'Komtec Peças e Serviços', 'Komtec Peças e Serviços', '13.874.213/0001-94', '10.964.084-5', '(62) 3456-78900', '(62) 99933-4455', 'komtec.komatsu@gmail.com', 'http://localhost/komtec-sistem', '74075-060', 'Rua 4 A', '12345', 'Setor Aeroporto', 'Goiânia', 'GO', 'Seu equipamento em boas mãos', '2021-02-20 22:42:31');
/*!40000 ALTER TABLE `sistema` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.tecnicos
CREATE TABLE IF NOT EXISTS `tecnicos` (
  `tecnico_id` int(11) NOT NULL AUTO_INCREMENT,
  `tecnico_codigo` varchar(10) NOT NULL,
  `tecnico_data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tecnico_nome_completo` varchar(145) DEFAULT NULL,
  `tecnico_cpf` varchar(25) DEFAULT NULL,
  `tecnico_rg` varchar(25) DEFAULT NULL,
  `tecnico_telefone` varchar(15) DEFAULT NULL,
  `tecnico_celular` varchar(15) DEFAULT NULL,
  `tecnico_email` varchar(45) DEFAULT NULL,
  `tecnico_cep` varchar(15) DEFAULT NULL,
  `tecnico_endereco` varchar(45) DEFAULT NULL,
  `tecnico_numero_endereco` varchar(25) DEFAULT NULL,
  `tecnico_complemento` varchar(45) DEFAULT NULL,
  `tecnico_bairro` varchar(45) DEFAULT NULL,
  `tecnico_cidade` varchar(45) DEFAULT NULL,
  `tecnico_estado` varchar(2) DEFAULT NULL,
  `tecnico_ativo` tinyint(1) DEFAULT NULL,
  `tecnico_obs` tinytext,
  `tecnico_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tecnico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.tecnicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tecnicos` DISABLE KEYS */;
INSERT INTO `tecnicos` (`tecnico_id`, `tecnico_codigo`, `tecnico_data_cadastro`, `tecnico_nome_completo`, `tecnico_cpf`, `tecnico_rg`, `tecnico_telefone`, `tecnico_celular`, `tecnico_email`, `tecnico_cep`, `tecnico_endereco`, `tecnico_numero_endereco`, `tecnico_complemento`, `tecnico_bairro`, `tecnico_cidade`, `tecnico_estado`, `tecnico_ativo`, `tecnico_obs`, `tecnico_data_alteracao`) VALUES
	(1, '09842571', '2020-01-27 22:24:17', 'Cícero Assis Junior', '94.687/3070-00', '36.803.319-3', '', '(62) 99999-9988', 'cicero.a.junior@gmail.com', '80530-000', 'Rua do Cicero', '45', '', 'Centro', 'Goiânia', 'GO', 1, 'Técnico especialista em Komatsu / Dynapac', '2021-02-07 18:31:19'),
	(2, '03841956', '2020-01-29 19:22:27', 'Wagner Santos', '58.207/1790-23', '25.287.429-8', '', '(62) 99999-9999', 'wagner.santos@gmail.com', '74432-092', 'Rua do Wagner', '45', '', 'Centro', 'Goiânia', 'GO', 1, 'Técnico especialista em XCMG / Foton / New Holland / Case / Bobcat', '2021-02-07 18:37:19'),
	(3, '97380254', '2021-02-07 18:44:40', 'Roberson Dias dos Santos', '91.980/7180-75', '28.924.857-7', '(62) 3455-1234', '(62) 98812-3321', 'robersonupc@gmail.com', '74491-607', 'Rua JC305', '7A', 'Quadra 21 Interfone 71 Condomínio Lótus', 'Jardins do Cerrado 7', 'Goiânia', 'GO', 1, 'Técnico especialista em PHP / JAVA / Vendas de Peças e Serviços', '2021-02-07 18:50:10');
/*!40000 ALTER TABLE `tecnicos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cell_phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela komtec-sistema.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `cell_phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2y$12$URk6yGldU9FdWW3Q7FyipOn1R7TU8CeTgw1VJexqvCEn3.MPXHvV6', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1614215321, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL),
	(2, '::1', 'admin', '$2y$10$WLu02bqWFGC31TtappiZme82ki3/dshNmdrgVbE94EW4GPK8LeIvW', 'komtec.komatsu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1611832895, NULL, 0, 'Roberson', 'Santos', 'KomTec', '', '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela komtec-sistema.users_groups: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `venda_id` int(11) NOT NULL AUTO_INCREMENT,
  `venda_cliente_id` int(11) DEFAULT NULL,
  `venda_forma_pagamento_id` int(11) DEFAULT NULL,
  `venda_vendedor_id` int(11) DEFAULT NULL,
  `venda_tipo` tinyint(1) DEFAULT NULL,
  `venda_status` tinyint(1) DEFAULT NULL,
  `venda_data_emissao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `venda_valor_desconto` varchar(25) DEFAULT NULL,
  `venda_valor_total` varchar(25) DEFAULT NULL,
  `venda_data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`venda_id`),
  KEY `fk_venda_cliente_id` (`venda_cliente_id`),
  KEY `fk_venda_forma_pagto_id` (`venda_forma_pagamento_id`),
  KEY `fk_venda_vendedor_id` (`venda_vendedor_id`),
  CONSTRAINT `fk_venda_cliente_id` FOREIGN KEY (`venda_cliente_id`) REFERENCES `clientes` (`cliente_id`),
  CONSTRAINT `fk_venda_forma_pagto_id` FOREIGN KEY (`venda_forma_pagamento_id`) REFERENCES `formas_pagamentos` (`forma_pagamento_id`),
  CONSTRAINT `fk_venda_vendedor_id` FOREIGN KEY (`venda_vendedor_id`) REFERENCES `vendedores` (`vendedor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.vendas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` (`venda_id`, `venda_cliente_id`, `venda_forma_pagamento_id`, `venda_vendedor_id`, `venda_tipo`, `venda_status`, `venda_data_emissao`, `venda_valor_desconto`, `venda_valor_total`, `venda_data_alteracao`) VALUES
	(1, 1, 1, 1, NULL, NULL, '2021-02-24 12:53:19', NULL, '69.00', '2021-02-24 12:55:56');
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.venda_produtos
CREATE TABLE IF NOT EXISTS `venda_produtos` (
  `id_venda_produtos` int(11) NOT NULL AUTO_INCREMENT,
  `venda_produto_id_venda` int(11) DEFAULT NULL,
  `venda_produto_id_produto` int(11) DEFAULT NULL,
  `venda_produto_quantidade` varchar(15) DEFAULT NULL,
  `venda_produto_valor_unitario` varchar(20) DEFAULT NULL,
  `venda_produto_desconto` varchar(10) DEFAULT NULL,
  `venda_produto_valor_total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_venda_produtos`),
  KEY `fk_venda_produtos_id_produto` (`venda_produto_id_produto`),
  KEY `fk_venda_produtos_id_venda` (`venda_produto_id_venda`),
  CONSTRAINT `fk_venda_produtos_id_produto` FOREIGN KEY (`venda_produto_id_produto`) REFERENCES `produtos` (`produto_id`),
  CONSTRAINT `fk_venda_produtos_id_venda` FOREIGN KEY (`venda_produto_id_venda`) REFERENCES `vendas` (`venda_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.venda_produtos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `venda_produtos` DISABLE KEYS */;
INSERT INTO `venda_produtos` (`id_venda_produtos`, `venda_produto_id_venda`, `venda_produto_id_produto`, `venda_produto_quantidade`, `venda_produto_valor_unitario`, `venda_produto_desconto`, `venda_produto_valor_total`) VALUES
	(1, 1, 2, '1', '69.00', NULL, '69.00');
/*!40000 ALTER TABLE `venda_produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela komtec-sistema.vendedores
CREATE TABLE IF NOT EXISTS `vendedores` (
  `vendedor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendedor_codigo` varchar(10) NOT NULL,
  `vendedor_data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `vendedor_nome_completo` varchar(145) NOT NULL,
  `vendedor_cpf` varchar(25) NOT NULL,
  `vendedor_rg` varchar(25) NOT NULL,
  `vendedor_telefone` varchar(15) DEFAULT NULL,
  `vendedor_celular` varchar(15) DEFAULT NULL,
  `vendedor_email` varchar(45) DEFAULT NULL,
  `vendedor_cep` varchar(15) DEFAULT NULL,
  `vendedor_endereco` varchar(45) DEFAULT NULL,
  `vendedor_numero_endereco` varchar(25) DEFAULT NULL,
  `vendedor_complemento` varchar(45) DEFAULT NULL,
  `vendedor_bairro` varchar(45) DEFAULT NULL,
  `vendedor_cidade` varchar(45) DEFAULT NULL,
  `vendedor_estado` varchar(2) DEFAULT NULL,
  `vendedor_ativo` tinyint(1) DEFAULT NULL,
  `vendedor_obs` tinytext,
  `vendedor_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`vendedor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela komtec-sistema.vendedores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` (`vendedor_id`, `vendedor_codigo`, `vendedor_data_cadastro`, `vendedor_nome_completo`, `vendedor_cpf`, `vendedor_rg`, `vendedor_telefone`, `vendedor_celular`, `vendedor_email`, `vendedor_cep`, `vendedor_endereco`, `vendedor_numero_endereco`, `vendedor_complemento`, `vendedor_bairro`, `vendedor_cidade`, `vendedor_estado`, `vendedor_ativo`, `vendedor_obs`, `vendedor_data_alteracao`) VALUES
	(1, '09842571', '2020-01-27 22:24:17', 'Lucio Antonio de Souza', '946.873.070-00', '36.803.319-3', '', '(41) 99999-9999', 'vendedor@gmail.com', '80530-000', 'Rua das vendas', '45', '', 'Centro', 'Curitiba', 'PR', 1, '', '2020-01-27 22:24:17'),
	(2, '03841956', '2020-01-29 19:22:27', 'Sara Betina', '58.207/1790-23', '25.287.429-8', '', '(41) 88884-4444', 'sara@gmail.com', '80540-120', 'Rua das vendas', '45', '', 'Centro', 'Joinville', 'SC', 1, 'Editado', '2021-02-02 12:02:27');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
