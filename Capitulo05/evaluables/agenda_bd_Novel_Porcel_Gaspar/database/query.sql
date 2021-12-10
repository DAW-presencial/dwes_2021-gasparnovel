/* Ejecutamos toda esta query para empezar con la database*/

/* Creamos la databases */
create database agenda;

/* Usamos la databases */
use agenda;

/* Creamos la tabla */
create table contacto
(
    `nombre` varchar(15) not null,
    `primer_apellido` varchar(15) not null,
    `segundo_apellido` varchar(15) not null,
    `telefono`    varchar(9) primary key
);
/* Insertamos datos */
insert into contacto(nombre, primer_apellido, segundo_apellido, telefono)
values ('Gaspar', 'Novel', 'Porcel', '639156819'),
('Pablo', 'Ruiz', 'Martinez', '629156816'),
('Alex', 'Torres', 'Sanchez', '638156811');


