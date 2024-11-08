/*create table usuario(

codUsuario integer auto_increment,
nome varchar(100),
cpf integer,
endereço varchar(100),
email varchar(100),
telefone integer,
categoria integer,
senha varchar(8),
primary key(codUsuario)
);

-- Criação da tabela biomedico
create table biomedico (
codBiomedico integer auto_increment,
crbm integer,
codUsuario integer,
primary key (codbiomedico),
foreign key (codUsuario) references usuario(codUsuario)
);

-- Criação da tabela medico
create table medico (
codMedico integer auto_increment,
crm integer,
codUsuario integer,
primary key (codMedico),
foreign key (codUsuario) references usuario(codUsuario)
);

-- Criação da tabela paciente
create table paciente (
codPaciente integer auto_increment,
doencasExistentes text,
codUsuario integer,
primary key (codPaciente),
foreign key (codUsuario) references usuario(codUsuario)
);

-- Criação da tabela secretario
create table secretario (
codSecretario integer auto_increment,
formacao text,
codUsuario integer,
primary key (codSecretario),
foreign key (codUsuario) references usuario(codUsuario)
);

create table agendamento(
codAgendamento integer auto_increment,
dataAgendamento datetime,
tipoExame integer,
codPaciente integer,
codMedico integer,
codSecretario integer,
primary key (codAgendamento),
foreign key (codPaciente) references paciente(codPaciente),
foreign key (codMedico) references medico(codMedico),
foreign key (codSecretario) references secretario(codSecretario)
);

create table resultado(
codResultado integer auto_increment,
dataResultado datetime,
tipoExame integer,
codPaciente integer,
codMedico integer,
codBiomedico integer,
primary key(codResultado),
foreign key (codPaciente) references paciente(codPaciente),
foreign key (codMedico) references medico(codMedico),
foreign key (codBiomedico) references biomedico(codBioMedico)
);

-- Inserindo dados na tabela usuario
INSERT INTO usuario (nome, cpf, endereço, email, telefone, categoria, senha)
VALUES
('João Silva', 12345678901, 'Rua das Flores, 123', 'joao.silva@email.com', 11987654321, 1, 'senha123'),
('Maria Oliveira', 98765432100, 'Avenida Central, 456', 'maria.oliveira@email.com', 11912345678, 2, 'senha456');

-- Inserindo dados na tabela biomedico
INSERT INTO biomedico (crbm, codUsuario)
VALUES
(12345, 1),
(67890, 2);

-- Inserindo dados na tabela medico
INSERT INTO medico (crm, codUsuario)
VALUES
(54321, 1),
(98765, 2);

-- Inserindo dados na tabela paciente
INSERT INTO paciente (doencasExistentes, codUsuario)
VALUES
('Hipertensão', 1),
('Diabetes', 2);

-- Inserindo dados na tabela secretario
INSERT INTO secretario (formacao, codUsuario)
VALUES
('Administração em Saúde', 1),
('Secretariado Executivo', 2);

-- Inserindo dados na tabela agendamento
INSERT INTO agendamento (dataAgendamento, tipoExame, codPaciente, codMedico, codSecretario)
VALUES
('2024-10-01 10:00:00', 1, 1, 1, 1),
('2024-10-02 11:00:00', 2, 2, 2, 2);

-- Inserindo dados na tabela resultado
INSERT INTO resultado (dataResultado, tipoExame, codPaciente, codMedico, codBiomedico)
VALUES
('2024-10-01 15:00:00', 1, 1, 1, 1),
('2024-10-02 16:00:00', 2, 2, 2, 2);
*/

select * from paciente where codPaciente =2