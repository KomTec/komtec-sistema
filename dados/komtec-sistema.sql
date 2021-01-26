-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela komtec-sistema.clientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`cliente_id`, `cliente_data_cadastro`, `cliente_tipo`, `cliente_nome`, `cliente_sobrenome`, `cliente_data_nascimento`, `cliente_cpf_cnpj`, `cliente_rg_ie`, `cliente_email`, `cliente_telefone`, `cliente_celular`, `cliente_cep`, `cliente_endereco`, `cliente_numero_endereco`, `cliente_bairro`, `cliente_complemento`, `cliente_cidade`, `cliente_estado`, `cliente_ativo`, `cliente_obs`, `cliente_data_alteracao`) VALUES
	(1, '2021-01-11 11:11:49', 2, 'Roberson', 'Santos', '1971-06-03', '34.446.363/0001-77', '706265', 'komtec.komatsu@gmail.com', '(62) 3577-2346', '(62) 99325-6371', '74491-607', 'Rua JC305', '7A', 'Jardins do Cerrado 7', 'Quadra 21 Cond. Lotus Interfone 71', 'Goiânia', 'GO', NULL, 'Cliente da Ana Laura', '2021-01-25 15:27:46'),
	(3, '2021-01-20 17:06:05', 1, 'Rosangela', 'Rosa Santos', '1982-08-07', '590.434.630-19', '33.109.106-9', 'rogelarrs@gmail.com', '(62) 3577-2347', '(62) 99325-6370', '74491-607', 'Rua JC305', '7A', 'Jardins do Cerrado 7', 'Quadra 21 Condomínio Lótus Interfone 71', 'Goiânia', 'GO', 0, '', '2021-01-21 12:34:31'),
	(4, '2021-01-23 18:24:44', 1, 'Pedro Paulo', 'Oliveira Veiga', '1980-09-09', '636.184.530-35', '31.461.085-6', 'pedropaulo@gmail.com', '', '(62) 99325-6386', '74491-607', 'Rua JC305', '7A', 'Jardins do Cerrado 7', 'Quadra 21 Condomínio Lótus Interfone 71', 'Goiânia', 'GO', NULL, 'Cliente do vendedor André', '2021-01-25 15:26:53');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.fornecedores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`fornecedor_id`, `fornecedor_data_cadastro`, `fornecedor_razao`, `fornecedor_nome_fantasia`, `fornecedor_cnpj`, `fornecedor_ie`, `fornecedor_telefone`, `fornecedor_celular`, `fornecedor_email`, `fornecedor_contato`, `fornecedor_cep`, `fornecedor_endereco`, `fornecedor_numero_endereco`, `fornecedor_bairro`, `fornecedor_complemento`, `fornecedor_cidade`, `fornecedor_estado`, `fornecedor_ativo`, `fornecedor_obs`, `fornecedor_data_alteracao`) VALUES
	(1, '2021-01-23 08:50:15', 'Roberson Dias dos Santos', 'KomTec Peças e Serviços', '02.809.303/0001-85', '108043320', '(62) 3577-2346', '(62) 99325-6370', 'komtec.komatsu@gmail.com', 'Roberson', '74491-607', 'JC305', '7A', 'Jardins do Cerrado 7', 'Quadra 21', 'Goiânia', 'GO', NULL, 'Novo fornecedor ativo', '2021-01-25 15:26:14');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.groups: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'vendedor', 'Vendedor'),
	(3, 'gerente', 'Gerente'),
	(4, 'financeiro', 'Financeiro'),
	(5, 'comprador', 'Comprador'),
	(6, 'tecnico', 'Tecnico'),
	(7, 'almoxarife', 'Almoxarife');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.login_attempts: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.produtos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`produto_id`, `produto_codigo`, `produto_data_cadastro`, `produto_categoria_id`, `produto_marca_id`, `produto_fornecedor_id`, `produto_descricao`, `produto_unidade`, `produto_codigo_barras`, `produto_ncm`, `produto_preco_custo`, `produto_preco_venda`, `produto_estoque_minimo`, `produto_qtde_estoque`, `produto_ativo`, `produto_obs`, `produto_data_alteracao`) VALUES
	(1, '72495380', NULL, 1, 1, 1, 'Notebook gamer', 'UN', '4545', '5656', '1.800,00', '15.031,00', '2', '3', 1, '', '2020-02-28 22:01:44'),
	(2, '50412637', NULL, 1, 1, 1, 'Fone de ouvido gamer', 'UN', '9999', '9999', '112,00', '125.844,00', '1', '46', 1, '', '2020-02-20 21:45:57'),
	(3, '41697502', NULL, 1, 1, 1, 'Mouse usb', 'UN', '9999', '5555', '9,99', '15,22', '2', '3', 1, '', '2020-02-21 21:46:57');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.servicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` (`servico_id`, `servico_nome`, `servico_preco`, `servico_descricao`, `servico_ativo`, `servico_data_alteracao`) VALUES
	(1, 'Limpeza geral', '50,00', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem', 1, '2020-02-21 22:22:20'),
	(2, 'Solda elétrica', '80,00', 'Solda elétrica', 1, '2020-02-13 19:10:21'),
	(3, 'Restauração de componentes', '120,00', 'Restauração de componentes', 1, '2020-02-13 19:11:29');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.sistema: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema` DISABLE KEYS */;
INSERT INTO `sistema` (`sistema_id`, `sistema_razao_social`, `sistema_nome_fantasia`, `sistema_cnpj`, `sistema_ie`, `contato`, `sistema_telefone_fixo`, `sistema_telefone_movel`, `sistema_email`, `sistema_site_url`, `sistema_cep`, `sistema_endereco`, `sistema_numero`, `sistema_cidade`, `sistema_estado`, `sistema_txt_ordem_servico`, `sistema_data_alteracao`) VALUES
	(1, 'Roberson Dias dos Santos50337904120', 'Komtec Peças e Serviços', '22.489.735/0001-63', '11.613.811-4', 'Roberson Santos', '6235772346', '62993256370', 'komtec.komatus@gmail.com', 'http://localhost/komtec-sistem', '74491607', 'Rua JC305', '7A', 'Goiânia', 'GO', NULL, '2021-01-10 15:19:35');
/*!40000 ALTER TABLE `sistema` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.users: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `user_data_alteracao`, `cell_phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2y$12$IljNYXtRC.04ulgPtJDStexdCjY.1PtF/UQS996T/vuNcfsaH6.H.', 'admin@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1611599138, 1, 'Admin', 'Santos', 'Admin', '0', '2021-01-25 15:25:38', NULL),
	(2, '127.0.0.1', 'gerente', '$2y$10$3yV9IeJXGwMrw/V/mwk8AehVpOe7oElxuHbnlvKKQeK7zIm/UpXF2', 'robersonupc@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1609542065, NULL, 1, 'Roberson', 'Santos', 'KomTec', '(NULL)', '2021-01-17 15:11:59', '62993256370'),
	(3, '127.0.0.1', 'AnaLaura', '$2y$10$kF950ECP8Qxz6cDrsz9YXufPS/JC3T2aE9uWx9eJcYSn1KPpruyA6', 'analrosad@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1609597997, NULL, 0, 'Ana Laura', 'Santos', 'KomTec', NULL, '2021-01-17 15:17:09', NULL),
	(4, '127.0.0.1', 'cicerojunior', '$2y$10$KXP0R8UV4KYcVI7apK4XeeDm3M3Kt4bMlKK49ngOAfAzDv7Qsn1lG', 'cicerojunior@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1609677102, NULL, 0, 'Cícero', 'Junior', 'KomTec', NULL, '2021-01-17 15:17:21', '62993256370');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.users_groups: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(26, 1, 1),
	(22, 2, 3),
	(23, 3, 4),
	(24, 4, 6);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.vendedores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` (`vendedor_id`, `vendedor_codigo`, `vendedor_data_cadastro`, `vendedor_nome_completo`, `vendedor_cpf`, `vendedor_rg`, `vendedor_telefone`, `vendedor_celular`, `vendedor_email`, `vendedor_cep`, `vendedor_endereco`, `vendedor_numero_endereco`, `vendedor_complemento`, `vendedor_bairro`, `vendedor_cidade`, `vendedor_estado`, `vendedor_ativo`, `vendedor_obs`, `vendedor_data_alteracao`) VALUES
	(1, '09842571', '2020-01-27 22:24:17', 'Lucio Antonio de Souza', '946.873.070-00', '36.803.319-3', '', '(41) 99999-9999', 'vendedor@gmail.com', '80530-000', 'Rua das vendas', '45', '', 'Centro', 'Curitiba', 'PR', 1, '', '2020-01-27 22:24:17'),
	(2, '03841956', '2020-01-29 19:22:27', 'Sara Betina', '582.071.790-23', '25.287.429-8', '', '(41) 88884-4444', 'sara@gmail.com', '80540-120', 'Rua das vendas', '45', '', 'Centro', 'Joinville', 'SC', 0, '', '2020-01-29 19:22:27');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
