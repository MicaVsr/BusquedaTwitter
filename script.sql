DROP DATABASE IF EXISTS db_buscador_twitter;
CREATE DATABASE db_buscador_twitter;
USE db_buscador_twitter;

CREATE TABLE historial (id_palabra INT PRIMARY KEY AUTO_INCREMENT,
						palabra VARCHAR(50));
/*                        
SELECT * FROM historial;
*/