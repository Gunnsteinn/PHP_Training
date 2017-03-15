
CREATE TABLE empleado (
                id_usuario INT AUTO_INCREMENT NOT NULL PRIMARY KEY COMMENT'id usuario',
                usuario VARCHAR(20) NOT NULL, 
                clave VARCHAR(20) NOT NULL, 
                nombre VARCHAR(20) NOT NULL,
                apellido VARCHAR(20) NOT NULL, 
                edad INT UNSIGNED, 
                email VARCHAR(40) NOT NULL,  
                sitio_web VARCHAR(40)
                );