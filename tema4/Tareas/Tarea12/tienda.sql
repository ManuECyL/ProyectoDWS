CREATE DATABASE tienda;
CREATE USER tienda IDENTIFIED BY 'tiendaMala';
USE tienda;
GRANT ALL ON tienda.* TO tienda;

CREATE TABLE productos (
    id int PRIMARY KEY auto_increment,
	nombre varchar(45),
    precio float,
    unidades int,
    fecha_caducidad date NOT NULL
) engine=innodb;

INSERT INTO productos VALUES ('Pechuga de Pollo', 7, 6, '2022-12-28');
INSERT INTO productos VALUES ('Filete de Ternera', 8.50, 4, '2022-12-17');
INSERT INTO productos VALUES ('Arroz Blanco', 2.50, 15, '2023-10-01');
INSERT INTO productos VALUES ('Patatas', 5, 6, '2023-01-15');
INSERT INTO productos VALUES ('Hamburguesa de Pollo', 4.50, 5, '2023-01-02');
INSERT INTO productos VALUES ('Macarrones', 2, 12, '2023-11-13');
INSERT INTO productos VALUES ('Lubina', 16, 3, '2022-12-12');
INSERT INTO productos VALUES ('Pizza', 4.50, 8, '2023-04-22');