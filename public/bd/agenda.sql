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


-- Crear la tabla categorias
CREATE TABLE `agenda`.`t_categorias` (
  `id_categoria` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` VARCHAR(255) NOT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categoria`)
)ENGINE = InnoDB;

-- Crear la tabla de contactos
CREATE TABLE `agenda`.`t_contactos` (
  `id_agenda` INT(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` INT(11) NOT NULL,
  `apellido` VARCHAR(255) NOT NULL,
  `nombre` VARCHAR(255) NOT NULL,
  `telefono` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_agenda`)
) ENGINE = InnoDB;

-- Clave foránea
ALTER TABLE `agenda`.`t_contactos`
ADD INDEX `fkContactoCategoria_idx` (`id_categoria` ASC);
;
ALTER TABLE `agenda`.`t_contactos`
ADD CONSTRAINT `fkContactoCategoria`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `agenda`.`t_categorias` (`id_categoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
