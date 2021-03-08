-- Crear la tabla categorias
CREATE TABLE `watch`.`peliculas` (
  `id_pelicula` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pelicula`)
)ENGINE = InnoDB;

-- Crear la tabla de contactos
CREATE TABLE `watch`.`series` (
  `id_serie` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `temporada` VARCHAR(255) NOT NULL,
  `episodio` VARCHAR(255) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_serie`)
) ENGINE = InnoDB;

-- -- Clave foránea
-- ALTER TABLE `agenda`.`t_contactos`
-- ADD INDEX `fkContactoCategoria_idx` (`id_categoria` ASC);
-- ;
-- ALTER TABLE `agenda`.`t_contactos`
-- ADD CONSTRAINT `fkContactoCategoria`
--   FOREIGN KEY (`id_categoria`)
--   REFERENCES `agenda`.`t_categorias` (`id_categoria`)
--   ON DELETE NO ACTION
--   ON UPDATE NO ACTION;
