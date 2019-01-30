

CREATE TABLE Cidades (
id_cidade integer PRIMARY KEY auto_increment,
nome_cidade VARCHAR(100),
id_estado integer
);

CREATE TABLE Estados (
id_estado integer PRIMARY KEY auto_increment,
nome_estado VARCHAR(100),
sigla_estads CHAR(2)
);

CREATE TABLE tipo_carroceria (
id_tipo_carroceria  integer PRIMARY KEY auto_increment,
desc_tipo_carroceria VARCHAR(100)
);

CREATE TABLE Carroceria (
id_carroceria integer  PRIMARY KEY auto_increment,
desc_carroceria VARCHAR(100),
id_tipo_carroceria integer,
FOREIGN KEY(id_tipo_carroceria) REFERENCES tipo_carroceria (id_tipo_carroceria)
);

CREATE TABLE categoria (
id_categoria  integer  PRIMARY KEY auto_increment,
desc_categoria VARCHAR(100)
);

CREATE TABLE complemento_carga (
id_complemento_carga integer PRIMARY KEY auto_increment,
qtd_volume_uni integer,
peso_unitario_kg integer,
volume_unitario_m3 integer,
id_frete integer
);

CREATE TABLE veiculo_categoria (
id_veiculo_categoria integer PRIMARY KEY auto_increment,
desc_veiculo_categoria VARCHAR(100),
id_categoria integer,
FOREIGN KEY(id_categoria) REFERENCES categoria (id_categoria)
);

CREATE TABLE Frete (
id_frete integer PRIMARY KEY auto_increment,
Cidade_saida VARCHAR(100),
cidade_entrega VARCHAR(100),
nome_produto VARCHAR(100),
complemento CHAR(3),
informacoes_frete text,
preco_frete real,
id_carroceria integer,
id_forma_pagamento integer,
id_especie integer,
id_veiculo_categoria integer,
FOREIGN KEY(id_carroceria) REFERENCES Carroceria (id_carroceria),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria)
);

CREATE TABLE forma_pagamento (
id_forma_pagamento integer PRIMARY KEY auto_increment,
desc_forma_pagamento VARCHAR(10)
);

CREATE TABLE Especie (
id_especie integer PRIMARY KEY auto_increment,
desc_especie VARCHAR(100)
);

CREATE TABLE agregamento (
id_agregamento  integer PRIMARY KEY auto_increment,
rastreador CHAR(3),
quantidade_vagas integer,
qual_rastreador text,
telefone CHAR(11),
contato VARCHAR(80),
observacao text,
id_cidade integer,
id_veiculo_categoria integer,
id_carroceria integer,
FOREIGN KEY(id_cidade) REFERENCES Cidades (id_cidade),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria),
FOREIGN KEY(id_carroceria) REFERENCES Carroceria (id_carroceria)
);

CREATE TABLE gerenciamento_usuarios (
id_gerenciamento_usuarios integer PRIMARY KEY auto_increment,
nome VARCHAR(100),
email VARCHAR(60),
tipo_usuario VARCHAR(100),
Ultim_acesso datetime,
id_empresa integer
);

CREATE TABLE empresa_produto (
id_empresa_produto integer PRIMARY KEY auto_increment,
id_empresa integer,
id_produto integer
);

CREATE TABLE Ramo (
id_ramo integer PRIMARY KEY auto_increment,
desc_ramo VARCHAR(100)
);

CREATE TABLE produtos (
id_produto integer PRIMARY KEY auto_increment,
desc_produto VARCHAR(100)
);

CREATE TABLE Empresa (
id_empresa integer PRIMARY KEY auto_increment,
razao_social VARCHAR(80),
cnpj VARCHAR(40),
endereco VARCHAR(80),
bairro VARCHAR(100),
complemento VARCHAR(50),
nome_fantasia VARCHAR(100),
cartão VARCHAR(100),
inscricao_estadual VARCHAR(100),
cep CHAR(8),
site VARCHAR(200),
skype VARCHAR(100),
fax VARCHAR(100),
url_facebook VARCHAR(100),
id_cidade integer,
id_ramo integer,
FOREIGN KEY(id_cidade) REFERENCES Cidades (id_cidade),
FOREIGN KEY(id_ramo) REFERENCES Ramo (id_ramo)
);

CREATE TABLE contato (
id_contato integer PRIMARY KEY auto_increment,
contato VARCHAR(100),
telefone_comercial CHAR(11),
celular CHAR(11),
operadora VARCHAR(40),
contato1 VARCHAR(40),
celular2 CHAR(11),
operadora2 VARCHAR(40),
contato2 VARCHAR(40),
whatsapp CHAR(30),
whatsapp2 CHAR(30),
id_empresa integer,
FOREIGN KEY(id_empresa) REFERENCES Empresa (id_empresa)
);

CREATE TABLE Marca (
id_marca integer PRIMARY KEY auto_increment,
desc_marca VARCHAR(100)
);

CREATE TABLE checkin (
id_checkin integer PRIMARY KEY auto_increment,
estado VARCHAR(80),
destino VARCHAR(100),
id_veiculo integer
);

CREATE TABLE veiculos (
id_veiculo integer PRIMARY KEY auto_increment,
nome_proprietario VARCHAR(100),
endereço VARCHAR(100),
data_nascimento date,
email VARCHAR(50),
rastreador CHAR(3),
modelo VARCHAR(1000),
ano integer,
rntrc VARCHAR(60),
seguro CHAR(3),
cnh VARCHAR(20),
permissionado CHAR(3),
id_marca integer,
id_cidade integer,
id_carroceria integer,
id_veiculo_categoria integer,
FOREIGN KEY(id_marca) REFERENCES Marca (id_marca),
FOREIGN KEY(id_cidade) REFERENCES Cidades (id_cidade),
FOREIGN KEY(id_carroceria) REFERENCES Carroceria (id_carroceria),
FOREIGN KEY(id_veiculo_categoria) REFERENCES veiculo_categoria (id_veiculo_categoria)
);

CREATE TABLE telefone (
id_telefone integer PRIMARY KEY auto_increment,
telefone CHAR(11),
tipo VARCHAR(60),
id_veiculo integer,
FOREIGN KEY(id_veiculo) REFERENCES veiculos (id_veiculo)
);

ALTER TABLE Cidades ADD FOREIGN KEY(id_estado) REFERENCES Estados (id_estado);
ALTER TABLE complemento_carga ADD FOREIGN KEY(id_frete) REFERENCES Frete (id_frete);
ALTER TABLE Frete ADD FOREIGN KEY(id_forma_pagamento) REFERENCES forma_pagamento (id_forma_pagamento);
ALTER TABLE Frete ADD FOREIGN KEY(id_especie) REFERENCES Especie (id_especie);
ALTER TABLE gerenciamento_usuarios ADD FOREIGN KEY(id_empresa) REFERENCES Empresa (id_empresa);
ALTER TABLE empresa_produto ADD FOREIGN KEY(id_empresa) REFERENCES Empresa (id_empresa);
ALTER TABLE empresa_produto ADD FOREIGN KEY(id_produto) REFERENCES produtos (id_produto);
ALTER TABLE checkin ADD FOREIGN KEY(id_veiculo) REFERENCES veiculos (id_veiculo);;