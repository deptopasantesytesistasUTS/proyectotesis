
CREATE TABLE usuarios (
    id_usuario          INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres             VARCHAR(255) NOT NULL, 
    cargo               VARCHAR(255) NOT NULL, 
    email               VARCHAR(255) NOT NULL UNIQUE, 
    password            TEXT NOT NULL, 
    fyh_creacion        DATETIME NULL,
    fyh_actualizacion   DATETIME NULL,
    estado              VARCHAR(11)
) ENGINE=InnoDB;

INSERT INTO usuarios (nombres, cargo, email, password, fyh_creacion, estado)
VALUES ('Lynerken Leandro Mora Ortega', 'ADMINISTRADOR', 'admin@gmail.com', '0001000', '2025-05-06 01:55:30', '1');
