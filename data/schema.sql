CREATE TABLE contato (
  contato_id int(11) NOT NULL AUTO_INCREMENT,
  contato_nome varchar(128) NOT NULL,
  contato_telefone varchar(11) DEFAULT NULL,
  contato_celular varchar(11) DEFAULT NULL,
  contato_email varchar(128) DEFAULT NULL,
  contato_genero INT(11) NOT NULL,
  contato_registro datetime NOT NULL
  PRIMARY KEY (contato_id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE usuario (
  usuario_id int(11) NOT NULL AUTO_INCREMENT,
  usuario_login varchar(60) NOT NULL,
  usuario_senha varchar(128) NOT NULL,
  PRIMARY KEY (usuario_id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


--SENHA 123456
INSERT INTO usuario (usuario_login, usuario_senha) VALUES ('admin', 'e10adc3949ba59abbe56e057f20f883e');


INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Maria Aparecida', '4832547865', '47999625478', 'maparecida@gmail.com', 2, '2017-09-15 09:47');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro )
VALUES('Maria Isolete', '4832741569', '18999651245', 'misolete@gmail.com', 2, '2017-09-15 08:45');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro )
VALUES('Amanda Nunes', '4832225487', '48997124565', 'anunes@gmail.com', 2, '2017-11-15 09:45');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Roberta Miranda', '4832547861', '47999215874', 'rmiranda@gmail.com', 2, '2017-08-15 09:45');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Cláudia Leite', '4832549865', '82999784123', 'cleite@bahia.com', 2, '2018-09-15 09:45');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Suzana Maria', '4832543264', '49996321234', 'smaria@gmail.com', 2, '2017-09-15 09:49');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('João Martins', '4832548867', '21999784125', 'jm@hotmail.com', 1, '2017-09-11 09:45');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Leonardo Antunes', '', '47889965478', 'lantunes@yahoo.com', 1, '2017-09-15 09:40');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Otávio de Jesus', '', '47991234785', 'ojesus@gmail.com', 1, '2017-02-15 09:45');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Arthur Espíndola', '', '21999231923', 'aespindola@gmail.com', 1, '2017-09-15 09:45');
INSERT INTO contato (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
VALUES('Pablo Aloísio', '', '11991625832', 'maloisio@hotmail.com', 1, '2017-10-01 08:25');


