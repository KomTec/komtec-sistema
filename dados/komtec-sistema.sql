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

-- Copiando dados para a tabela komtec-sistema.categorias: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`categoria_id`, `categoria_nome`, `categoria_ativa`, `categoria_data_alteracao`) VALUES
	(1, 'Motor', 1, '2021-01-28 11:47:40'),
	(2, 'Sistema Hidráulico', 1, '2021-01-28 12:00:22'),
	(3, 'Sistema de Freio', 0, '2021-01-28 12:00:43'),
	(4, 'Sistema Elétrico', 0, '2021-01-28 12:01:01'),
	(5, 'Transmissão', 0, '2021-01-28 12:01:21'),
	(6, 'Diferencial', 1, '2021-01-31 10:56:12');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`cliente_id`, `cliente_data_cadastro`, `cliente_tipo`, `cliente_nome`, `cliente_sobrenome`, `cliente_data_nascimento`, `cliente_cpf_cnpj`, `cliente_rg_ie`, `cliente_email`, `cliente_telefone`, `cliente_celular`, `cliente_cep`, `cliente_endereco`, `cliente_numero_endereco`, `cliente_bairro`, `cliente_complemento`, `cliente_cidade`, `cliente_estado`, `cliente_nome_pai`, `cliente_nome_mae`, `cliente_ativo`, `cliente_obs`, `cliente_data_alteracao`) VALUES
	(1, '2021-01-28 11:02:25', 1, 'Roberson', 'Dias dos Santos', '1971-02-03', '118.306.330-07', '44.366.218-6', 'komtec.komatsu@gmail.com', '(62) 3577-2346', '(62) 99325-6370', '74491-607', 'JC305', '7A', 'Jardim do Cliente', 'Quadra do Cliente', 'Goiânia', 'GO', '', '', 1, 'Novo cliente', '2021-01-28 11:02:25');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.fornecedores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`fornecedor_id`, `fornecedor_data_cadastro`, `fornecedor_razao`, `fornecedor_nome_fantasia`, `fornecedor_cnpj`, `fornecedor_ie`, `fornecedor_telefone`, `fornecedor_celular`, `fornecedor_email`, `fornecedor_contato`, `fornecedor_cep`, `fornecedor_endereco`, `fornecedor_numero_endereco`, `fornecedor_bairro`, `fornecedor_complemento`, `fornecedor_cidade`, `fornecedor_estado`, `fornecedor_ativo`, `fornecedor_obs`, `fornecedor_data_alteracao`) VALUES
	(1, '2021-01-28 11:05:11', 'Roberson Dias dos Santos', 'KomTec Peças e Serviços', '37.112.322/0001-32', '10.944.755-7', '(62) 3577-2346', '(62) 99325-6370', 'komtec.komatsu@gmail.com', 'Roberson', '74491-607', 'JC305', '7A', 'Jardim do Fornecedor', 'Quadra do Fornecedor', 'Goiânia', 'GO', 0, 'Novo Fornecedor', '2021-01-31 10:34:47');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.groups: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.login_attempts: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.marcas: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`marca_id`, `marca_nome`, `marca_ativa`, `marca_data_alteracao`) VALUES
	(2, 'Komatsu', 1, '2021-01-28 10:46:06'),
	(3, 'Caterpillar', 1, '2021-01-28 16:36:08'),
	(4, 'Hyundai', 0, '2021-01-31 00:25:31'),
	(5, 'Case', 0, '2021-01-31 00:35:51'),
	(6, 'Foton', 1, '2021-01-28 16:35:47'),
	(7, 'XCMG', 1, '2021-01-28 16:33:29'),
	(8, 'YTO', 0, '2021-01-31 00:25:23'),
	(9, 'JCB', 0, '2021-01-31 00:24:47'),
	(10, 'New Holland', 0, '2021-01-31 00:24:37');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.produtos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`produto_id`, `produto_nome`, `produto_codigo`, `produto_codigo_original`, `produto_data_cadastro`, `produto_categoria_id`, `produto_marca_id`, `produto_fornecedor_id`, `produto_descricao`, `produto_unidade`, `produto_codigo_barras`, `produto_ncm`, `produto_preco_custo`, `produto_preco_venda`, `produto_estoque_minimo`, `produto_qtde_estoque`, `produto_ativo`, `produto_obs`, `produto_data_alteracao`) VALUES
	(1, 'Notebook gamer', '72495380', '20Y1513442', '2021-01-30 08:14:19', 1, 2, 1, 'Notebook gamer', 'UN', '4545', '5656', '1.800,00', '15.031,00', '2', '2', 0, '', '2021-01-31 12:05:09'),
	(2, 'Fone de ouvido gamer', '50412637', '20Y1513442', '2021-01-30 08:14:21', 2, 2, 1, 'Fone de ouvido gamer', 'UN', '9999', '9999', '112,00', '125.844,00', '1', '46', 1, '', '2021-01-31 09:52:43'),
	(3, 'Mouse usb', '41697502', '20Y1513442', '2021-01-30 08:14:22', 2, 7, 1, 'Mouse usb', 'UN', '9999', '5555', '9,99', '15,22', '2', '3', 1, '', '2021-01-31 09:53:43');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.servicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` (`servico_id`, `servico_nome`, `servico_preco`, `servico_descricao`, `servico_ativo`, `servico_data_alteracao`) VALUES
	(1, 'Limpeza geral', '250,00', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem', 1, '2021-01-28 11:06:35'),
	(2, 'Solda elétrica', '180,00', 'Solda elétrica', 1, '2021-01-28 11:06:45'),
	(3, 'Restauração de componentes', '220,00', 'Restauração de componentes', 1, '2021-01-28 11:06:26');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.sistema: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema` DISABLE KEYS */;
/*!40000 ALTER TABLE `sistema` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `cell_phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2y$12$URk6yGldU9FdWW3Q7FyipOn1R7TU8CeTgw1VJexqvCEn3.MPXHvV6', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1612094923, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL),
	(2, '::1', 'admin', '$2y$10$WLu02bqWFGC31TtappiZme82ki3/dshNmdrgVbE94EW4GPK8LeIvW', 'komtec.komatsu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1611832895, NULL, 0, 'Roberson', 'Santos', 'KomTec', '', '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.users_groups: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

-- Copiando dados para a tabela komtec-sistema.vendedores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` (`vendedor_id`, `vendedor_codigo`, `vendedor_data_cadastro`, `vendedor_nome_completo`, `vendedor_cpf`, `vendedor_rg`, `vendedor_telefone`, `vendedor_celular`, `vendedor_email`, `vendedor_cep`, `vendedor_endereco`, `vendedor_numero_endereco`, `vendedor_complemento`, `vendedor_bairro`, `vendedor_cidade`, `vendedor_estado`, `vendedor_ativo`, `vendedor_obs`, `vendedor_data_alteracao`) VALUES
	(1, '09842571', '2020-01-27 22:24:17', 'Lucio Antonio de Souza', '946.873.070-00', '36.803.319-3', '', '(41) 99999-9999', 'vendedor@gmail.com', '80530-000', 'Rua das vendas', '45', '', 'Centro', 'Curitiba', 'PR', 1, '', '2020-01-27 22:24:17'),
	(2, '03841956', '2020-01-29 19:22:27', 'Sara Betina', '58.207/1790-23', '25.287.429-8', '', '(41) 88884-4444', 'sara@gmail.com', '80540-120', 'Rua das vendas', '45', '', 'Centro', 'Joinville', 'SC', 0, 'Editado', '2021-01-28 11:05:55');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
