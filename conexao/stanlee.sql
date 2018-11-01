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
		fun_cpf varchar(15),
		fun_rg varchar(25),
		fun_celular varchar(50),
		fun_telefone varchar(50),
		fun_funcao varchar(90),
		fun_salario varchar(20),
		fun_rua varchar(100),
		fun_numero varchar(5),
		fun_bairro varchar(100),
		fun_cep varchar(20),
		fun_cidade varchar(100),
		fun_estado varchar(100)
	);

	#Tabela Admin
	drop table if exists admin;
	create table if not exists admin (
		adm_cod int not null primary key auto_increment,
   		adm_email varchar(100),
		adm_senha varchar(100),
		adm_perguntaSeg varchar(200),
		adm_resposta varchar(200),
		fun_cod_fk int not null,
		foreign key (fun_cod_fk)
		references funcionario (fun_cod)
		on update cascade on delete restrict
	);

    insert into funcionario values (null, 'Eisen', '25/09/2000', 'Masculino','763.132.552-91', '145964 SSP/RO', '(69)9.9267-2897', '3422-8778', 'admin', '5.000,00', 'Rua Pitangueira', '071', 'Residencial Green Park', '76.901-870', 'Ji-Paraná','RO');
    insert into admin values (null, 'eisen.fonseca@gmail.com', '12345', 'Prato', 'Feijao', last_insert_id());

	select * from funcionario;
	select * from admin;
	select last_insert_id() from funcionario;
    
delimiter $$

$$ delimiter 
    insert into  funcionario values (null, 'Eisen', '25/09/2000', 'Masculino','763.132.552-91', '145964 SSP/RO', '(69)9.9267-2897', '3422-8778', 'admin', '5.000,00', 'Rua Pitangueira', '071', 'Residencial Green Park', '76.901-870', 'Ji-Paraná','RO');
    


