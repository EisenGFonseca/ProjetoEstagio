-- Criador: Eisen Guimarães da Fonseca
-- Turma: 4º B Informática
-- IFRO/2018

DROP DATABASE IF EXISTS stanlee;
CREATE DATABASE IF NOT EXISTS stanlee;
	USE stanlee;

	#Tabela funcionário
	DROP TABLE IF EXISTS funcionario;
	CREATE TABLE IF NOT EXISTS funcionario (
		fun_cod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		fun_nome VARCHAR(100),
		fun_dataNas VARCHAR(100),
		fun_sexo VARCHAR(100),
		fun_rg VARCHAR(100),
		fun_cpf VARCHAR(100),
		fun_telefone VARCHAR(100),
		fun_celular VARCHAR(100),
		fun_email VARCHAR(100),
		fun_rua VARCHAR(100),
		fun_numero VARCHAR(100),
		fun_bairro VARCHAR(100),
		fun_cep VARCHAR(100),
		fun_cidade VARCHAR(100),
		fun_estado VARCHAR(100),
		fun_funcao VARCHAR(100),
		fun_salario VARCHAR(100)
	);

	#Tabela Admin
	DROP TABLE IF EXISTS admin;
	CREATE TABLE IF NOT EXISTS admin (
		adm_cod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		adm_senha VARCHAR(100),
		fun_cod_fk INT NOT NULL,
		FOREIGN KEY (fun_cod_fk)
		REFERENCES funcionario (fun_cod)
		ON UPDATE cascade ON DELETE restrict
	);

    INSERT INTO funcionario VALUES (NULL, 'ROOT', '00/00/0000', 'Masculino','000.000.000-00', '0000000 SSP/**', '(00)0.0000-0000', '(00)0000-0000', 'admin', 'Rua Bacon', '0000', 'Residencial', '00.000-000', 'Jaru','RR', 'Administrador', '0.000,00');
    INSERT INTO admin VALUES (NULL, 'admin', last_insert_id());

DROP PROCEDURE IF EXISTS atualiza_fun;
DELIMITER $$
	CREATE PROCEDURE atualiza_fun ( fun_cod INT,
									fun_nome VARCHAR(100),
								    fun_dataNas VARCHAR(100),
									fun_sexo VARCHAR(100),
									fun_rg VARCHAR(100),
									fun_cpf VARCHAR(100),
									fun_telefone VARCHAR(100),
									fun_celular VARCHAR(100),
									fun_email VARCHAR(100),
									fun_rua VARCHAR(100),
									fun_numero VARCHAR(100),
									fun_bairro VARCHAR(100),
									fun_cep VARCHAR(100),
									fun_cidade VARCHAR(100),
									fun_estado VARCHAR(100))
		BEGIN
			UPDATE funcionario SET funcionario.fun_nome = fun_nome,
								   funcionario.fun_dataNas = fun_dataNas,
								   funcionario.fun_sexo = fun_sexo,
								   funcionario.fun_rg = fun_rg,
								   funcionario.fun_cpf = fun_cpf,
								   funcionario.fun_telefone = fun_telefone,
								   funcionario.fun_celular = fun_celular,
								   funcionario.fun_email = fun_email,
								   funcionario.fun_rua = fun_rua,
								   funcionario.fun_numero = fun_numero,
								   funcionario.fun_bairro = fun_bairro,
								   funcionario.fun_cep = fun_cep,
								   funcionario.fun_cidade = fun_cidade,
								   funcionario.fun_estado = fun_estado
								WHERE
								   funcionario.fun_cod = fun_cod;
		END ;
$$ DELIMITER ;

CALL atualiza_fun(3,'3', '00/00/0000', 'Masculino','000.000.000-00', '0000000 SSP/**', '(00)0.0000-0000', '(00)0000-0000', 'admin', 'Rua Bacon', '0000', 'Residencial', '00.000-000', 'Rio de janeiro','RR');

SELECT * FROM funcionario ;
SELECT * FROM funcionario INNER JOIN admin;
