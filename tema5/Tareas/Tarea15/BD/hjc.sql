CREATE DATABASE hjc;
USE tienda;
GRANT ALL ON hjc.* TO hjc;

CREATE TABLE login (
	user varchar(20) NOT NULL UNIQUE,
    contraseña varchar(45) NOT NULL,
    email varchar(50) NOT NULL,
    fecha_nacimiento date NOT NULL
) engine=innodb;

INSERT INTO login VALUES ('', '', '', '');
INSERT INTO login VALUES ('', '', '', '');


CREATE TABLE productos (
    cod_Pro int PRIMARY KEY auto_increment,
	descripcion varchar(45) NOT NULL,
    precio float NOT NULL,
    stock int NOT NULL
) engine=innodb;

INSERT INTO productos VALUES ('Casco', '250.00', '4');
INSERT INTO productos VALUES ('Casco', '300.00', '3');
INSERT INTO productos VALUES ('Casco', '259.99', '4');
INSERT INTO productos VALUES ('Casco', '149.99', '5');
INSERT INTO productos VALUES ('Casco', '99.99', '6');
INSERT INTO productos VALUES ('Casco', '49.99', '7');
INSERT INTO productos VALUES ('Casco', '110.00', '6');
INSERT INTO productos VALUES ('Casco', '199.99', '5');
INSERT INTO productos VALUES ('Casco', '350.00', '2');


CREATE TABLE venta (
    id int PRIMARY KEY auto_increment,
	usuario varchar(20) NOT NULL,
    fecha_compra date NOT NULL,
    cod_Pro int FOREIGN KEY,
    cantidad int NOT NULL,
    precio_total float NOT NULL
) engine=innodb;


CREATE TABLE almacen (
    id int PRIMARY KEY auto_increment,
    fecha_albaran date NOT NULL,
    cod_Pro int FOREIGN KEY,
    cantidad int NOT NULL,
    usuario varchar(20) NOT NULL,
) engine=innodb;