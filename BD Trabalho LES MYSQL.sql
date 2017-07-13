CREATE  TABLE Cliente (
  CodCliente INT NOT NULL AUTO_INCREMENT,
  NomeCliente VARCHAR(50) NOT NULL,
  CPF VARCHAR(11) NOT NULL,  
  Telefone INT NULL,
  Email VARCHAR(50) NOT NULL,
  Rua VARCHAR(50) NULL,
  Numero INT NULL,
  Complemento VARCHAR(50) NULL,
  Bairro VARCHAR(50) NULL,
  CEP INT NULL,
  Cidade VARCHAR(45) NULL,
  Estado VARCHAR(2) NULL,
  Usuario VARCHAR(50) NOT NULL,
  Senha VARCHAR(50) NOT NULL,
  ConfirmaSenha VARCHAR(50) NOT NULL,
  
  CONSTRAINT PK_Cliente_CodCliente PRIMARY KEY (CodCliente)
)

CREATE  TABLE Gerente (
  CodGerente INT NOT NULL AUTO_INCREMENT,
  NomeGerente VARCHAR(50) NOT NULL,
  CPF VARCHAR(11) NOT NULL,  
  Telefone INT NULL,
  Email VARCHAR(50) NOT NULL,
  Rua VARCHAR(50) NULL,
  Numero INT NULL,
  Complemento VARCHAR(50) NULL,
  Bairro VARCHAR(50) NULL,
  CEP INT NULL,
  Cidade VARCHAR(45) NULL,
  Estado VARCHAR(2) NULL,
  Usuario VARCHAR(50) NOT NULL,
  Senha VARCHAR(50) NOT NULL,
  ConfirmaSenha VARCHAR(50) NOT NULL,
  
  CONSTRAINT PK_Gerente_CodGerente PRIMARY KEY (CodGerente)
)

CREATE  TABLE Atendente (
  CodAtendente INT NOT NULL AUTO_INCREMENT,
  NomeAtendente VARCHAR(50) NOT NULL,
  CPF VARCHAR(11) NOT NULL,  
  Telefone INT NULL,
  Email VARCHAR(50) NOT NULL,
  Rua VARCHAR(50) NULL,
  Numero INT NULL,
  Complemento VARCHAR(50) NULL,
  Bairro VARCHAR(50) NULL,
  CEP INT NULL,
  Cidade VARCHAR(45) NULL,
  Estado VARCHAR(2) NULL,
  Usuario VARCHAR(50) NOT NULL,
  Senha VARCHAR(50) NOT NULL,
  ConfirmaSenha VARCHAR(50) NOT NULL,
  
  CONSTRAINT PK_Atendente_CodAtendente PRIMARY KEY (CodAtendente)
)


CREATE  TABLE Filme (
  CodFilme INT NOT NULL AUTO_INCREMENT ,
  Nome VARCHAR(45) NOT NULL ,
  DataLancamento DATE NOT NULL ,
  Produtora VARCHAR(45) NOT NULL ,
  Diretor VARCHAR(45) NOT NULL,
  Preco FLOAT NOT NULL,
  ElencoPrincipal VARCHAR(200) NOT NULL ,
  Categoria VARCHAR(45) NOT NULL ,
  Midia VARCHAR(45) NOT NULL,
  Quantidade INT NOT NULL,
  Qtreserva INT NOT NULL,
  Sinopse VARCHAR(1000) NOT NULL,
  Foto VARCHAR(100) NOT NULL,
  
  CONSTRAINT PK_Filme_CodFilme PRIMARY KEY (CodFilme)
)


CREATE  TABLE ReservaCliente (
  CodReservaCliente INT NOT NULL AUTO_INCREMENT,
  CodCliente VARCHAR(45) NOT NULL ,
  CodFilme VARCHAR(45) NOT NULL ,
  DataRequisitada DATE NOT NULL ,
  DataFeitaReserva DATE NOT NULL ,
  Situacao VARCHAR(45) NOT NULL,
    
  CONSTRAINT PK_ReservaCliente PRIMARY KEY (CodReservaCliente, CodCliente, CodFilme, DataRequisitada)

)

CREATE  TABLE ReservaAtendente (
  CodReservaAtendente INT NOT NULL AUTO_INCREMENT,
  CodAtendente VARCHAR(45) NOT NULL ,
  CodCliente VARCHAR(45) NOT NULL ,
  CodFilme VARCHAR(45) NOT NULL ,
  DataRequisitada DATE NOT NULL ,
  DataFeitaReserva DATE NOT NULL ,
  Situacao VARCHAR(45) NOT NULL,
  
  CONSTRAINT PK_ReservaAtendente PRIMARY KEY (CodReservaAtendente, CodAtendente, CodCliente, CodFilme, DataRequisitada)

)

CREATE  TABLE Emprestimo (
  CodEmprestimo INT NOT NULL AUTO_INCREMENT,
  CodAtendente VARCHAR(45) NOT NULL ,
  CodFilme VARCHAR(45) NOT NULL ,
  CodCliente VARCHAR(45) NOT NULL ,
  DataEmprestimo DATE NOT NULL ,
  DataDevolucao DATE NULL ,
  Multa FLOAT NULL ,
  Situacao VARCHAR(45) NOT NULL,
  
  CONSTRAINT PK_Emprestimo PRIMARY KEY (CodEmprestimo, CodAtendente, CodFilme, CodCliente, DataEmprestimo)

)
