CREATE SCHEMA `agenda` DEFAULT CHARACTER SET utf8mb4 ;

-- selecciona la base de datos
USE agenda;

-- crea la tabla de categoría
CREATE TABLE `agenda`.`t_categorias` (
  `id_categoria` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `descripcion` VARCHAR(255) NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_categoria`));

-- crea la tabla de contactos
  CREATE TABLE `agenda`.`t_contactos` (
  `id_agenda` INT NOT NULL,
  `id_categoria` INT NOT NULL,
  `apellido` VARCHAR(255) NULL,
  `nombre` VARCHAR(255) NULL,
  `telefono` VARCHAR(155) NULL,
  `email` VARCHAR(155) NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_agenda`));

--llave foránea para contactos
ALTER TABLE `agenda`.`t_contactos` 
ADD INDEX `fkContactoCategoria_idx` (`id_categoria` ASC);
;
ALTER TABLE `agenda`.`t_contactos` 
ADD CONSTRAINT `fkContactoCategoria`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `agenda`.`t_categorias` (`id_categoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
