DROP DATABASE IF EXISTS db_buscador_twitter;
CREATE DATABASE db_buscador_twitter;
USE db_buscador_twitter;

CREATE TABLE historial (id_palabra INT PRIMARY KEY AUTO_INCREMENT,
						palabra VARCHAR(50) NOT NULL, 
                        fecha DATE NOT NULL,
                        hora VARCHAR(10) NOT NULL);

/*SELECT * FROM historial;*/