CREATE DATABASE IF NOT EXISTS `parcial_usuarios` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `parcial_usuarios`;

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `fecha_registro` DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`nombre`, `email`, `password`) VALUES
('Juan Pérez', 'juan.perez@davinci.edu.ar', '$2y$10$e886.K9fT9i1.Gv9KqJ8O.E61kLpT.yE638xZ4O9kZ.oN5Gf4bLqG'),
('Maria Gomez', 'maria.gomez@davinci.edu.ar', '$2y$10$e886.K9fT9i1.Gv9KqJ8O.E61kLpT.yE638xZ4O9kZ.oN5Gf4bLqG'),
('Carlos Lopez', 'carlos.lopez@davinci.edu.ar', '$2y$10$e886.K9fT9i1.Gv9KqJ8O.E61kLpT.yE638xZ4O9kZ.oN5Gf4bLqG'),
('Ana Martinez', 'ana.martinez@davinci.edu.ar', '$2y$10$e886.K9fT9i1.Gv9KqJ8O.E61kLpT.yE638xZ4O9kZ.oN5Gf4bLqG'),
('Lucas Diaz', 'lucas.diaz@davinci.edu.ar', '$2y$10$e886.K9fT9i1.Gv9KqJ8O.E61kLpT.yE638xZ4O9kZ.oN5Gf4bLqG'),
('Sofia Rodriguez', 'sofia.rodriguez@davinci.edu.ar', '$2y$10$e886.K9fT9i1.Gv9KqJ8O.E61kLpT.yE638xZ4O9kZ.oN5Gf4bLqG');