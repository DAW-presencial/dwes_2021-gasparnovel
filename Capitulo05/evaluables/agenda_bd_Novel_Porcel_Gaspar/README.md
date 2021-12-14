# AGENDA CON BASE DE DATOS PGSQL

## Querys ejecutadas en pgAdmin para crear la estructura database en remoto.

### Crear database:
- CREATE DATABASE agenda_bd_novel_porcel_gaspar
    WITH 
    OWNER = gnovel
    ENCODING = 'UTF8'
    CONNECTION LIMIT = -1;

### Crear tabla:
- CREATE TABLE contactos (
	id serial PRIMARY KEY,
	name VARCHAR ( 15 ) NOT NULL,
	surname VARCHAR ( 15 ) NOT NULL,
	phone VARCHAR ( 9 ) NOT NULL
);

### Insertar valores en la tabla:
- INSERT INTO contactos (id, name, surname, phone)
VALUES (1, 'gaspar', 'novel', 639156819),
(2, 'toni', 'gomez.', 629156816),
(3, 'victoria', 'martinez', 638156811);

### Mostrar los valores de la tabla:
- select * from contactos

## Como Utilizar

- ### Pagina de Agregar Contacto:

- Para añadir pulsamos el boton Agregar Contacto que nos lleva a la pagina, rellenamos todos los campos y el teléfono tiene que tener 9 digitos y pulsamos el submit.

- ### Pagina de Actualizar Contacto:

- Para actualizar pulsamos el boton update que nos lleva a la pagina, escribimos todos los campos que coincidan con el contacto y cambiamos el que se quiere actualizar y pulsamos el update.

- ### Eliminar:

- Para eliminar pulsamos el boton delete y confirmamos que queremos eliminar el contacto (Puede que falle y haya que refrescar la pagina).

## Servidor

- Para probar la funcionalidad de la agenda tenemos que ir al siguiente enlace: [agenda_bd_Novel_Porcel_Gaspar](http://gnovel.ddns.net/Capitulo05/evaluables/agenda_bd_Novel_Porcel_Gaspar/)

