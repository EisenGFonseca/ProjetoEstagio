drop database if exists stanlee;
create database if not exists stanlee;
	use stanlee;

	#Tabela funcionário
	drop table if exists funcionario;
	create table if not exists funcionario (
		fun_cod int not null primary key auto_increment,
		fun_nome varchar(100),
		fun_dataNas varchar(20),
		fun_sexo varchar(50),
		fun_rg varchar(25),
		fun_cpf varchar(15),
		fun_telefone varchar(50),
		fun_celular varchar(50),
		fun_email varchar(100),
		fun_rua varchar(100),
		fun_numero varchar(25),
		fun_bairro varchar(100),
		fun_cep varchar(20),
		fun_cidade varchar(100),
		fun_estado varchar(100),
		fun_funcao varchar(90),
		fun_salario varchar(20)
	);

	#Tabela Admin
	drop table if exists admin;
	create table if not exists admin (
		adm_cod int not null primary key auto_increment,
		adm_senha varchar(100),
		fun_cod_fk int not null,
		foreign key (fun_cod_fk)
		references funcionario (fun_cod)
		on update cascade on delete restrict
	);

    insert into funcionario values (null, 'ROOT', '00/00/0000', 'Masculino','000.000.000-00', '0000000 SSP/**', '(00)0.0000-0000', '0000-0000', 'admin', 'Rua Bacon', '0000', 'Residencial', '00.000-000', 'São Paulo','RR', 'Administração', '0.000,00');
    insert into admin values (null, 'admin', last_insert_id());

	select * from funcionario;
	select * from admin;
    
    
    select fun_nome from funcionario where last_insert_id();