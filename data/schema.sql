CREATE TABLE contato (
  contato_id int(11) NOT NULL AUTO_INCREMENT,
  contato_nome varchar(128) NOT NULL,
  contato_telefone varchar(11) DEFAULT NULL,
  contato_celular varchar(11) DEFAULT NULL,
  contato_email varchar(128) DEFAULT NULL,
  contato_genero INT(11) NOT NULL,
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

