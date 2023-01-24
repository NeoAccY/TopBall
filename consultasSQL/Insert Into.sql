USE topball;


insert into `personas` (`id_personas`, `nombre`, `edad`, `telefono`) VALUES
(1, 'Hector', 20, '9933458789'), (2,'Lionel', 35, 'XXXXXXXXX'), (3,'Diego', 90, 'XXXXXXXXX'),
(4,'Franz', 85, 'XXXXXXXXX'), (5,'Edson', 85, 'XXXXXXXXX'), (6,'Hendrik', 85, 'XXXXXXXXX'),
(7,'Michel', 75, 'XXXXXXXXX'), (8,'Zinedine', 55, 'XXXXXXXXX'), (9,'Ronaldo', 35, 'XXXXXXXXX'),
(10,'Oliver', 61, 'XXXXXXXXX'), (11,'Paolo', 35, 'XXXXXXXXX');

insert into `usuarioAdmin` (`id_usuarioAdmin`, `id_personas`, `correo`, `contrasena`, `activo`) values
(1, 1, 'admin', 'admin', 1);

insert into `mundiales` (`id_mundiales`, `nombre`, `fecha`, `pais`, `balon`) values
(1, 'Qatar2020', '2020-01-20', 'Mexico', 'Brazuka'), (2, 'Mundial 1992', '1992-01-20', 'Alemania', 'Limbo'), (3, 'Mundial 1980', '1980-01-20', 'Alemania', 'Baloncito'),
(4, 'Qatar2012', '2012-01-20', 'Japon', 'Jordan'), (5, 'Qatar2008', '2008-01-20', 'Rusia', 'Ron');


insert into `logros` (`id_logros`, `nombre`, `descripcion`) values
(1, '3 copas', 'Este logro solo lo han obtenido 2 jugadores en el mundo'),
(2, '7 balones', 'Este logro es unico'),
(3, '2 Mundiales', 'Este logro solo lo han obtenido 2 jugadores en el mundo'),
(4, 'Jugador estrella', 'Lo obtuvo por 4 temporadas'),
(5, '3 mundiales', 'Este logro solo lo han obtenido 1 jugador en el mundo');


insert into `nacionalidad` (`id_nacionalidad`, `nombre`, `pais_nacimiento`, `pais_residencia`) values
(1, 'Mexicana', 'Mexico', 'America'), (2, 'Argentino', 'Argentina', 'Argentina'),
(3, 'Aleman', 'Alemania', 'Alemania'), (4, 'Brasileño', 'Brasil', 'Brasil'),
(5, 'Paises B.', 'Paises B.', 'Paises B.'), (6, 'Frances', 'Francia', 'Francia'),
(7, 'Italiano', 'Italia', 'Italia');


insert into `posicionCampo` (`id_posicionCampo`, `nombre`, `descripcion`) values
(1, 'Delantero', 'Encargado de ser la ofensiva principal'),
(2, 'Medio campo', 'Encargado de la parte central'),
(3, 'Guardameta', 'Encargado de ser el soporte del portero'),
(4, 'Defensa', 'Encargado proteger la linea');


insert into `equipo` (`id_equipo`, `nombre`, `pais_representante`) values
(1, 'Barca', 'Barcelona'),
(2, 'Liga BR', 'Brasil'),
(3, 'Liga AL', 'Alemania'),
(4, 'Liga FR', 'Francia'),
(5, 'Liga PB', 'Paises Bajos'),
(6, 'Liga AR', 'Argentina'),
(7, 'Liga IT', 'Italia');

insert into `jugadores` (`id_jugadores`, `id_personas`, `id_mundiales`, `id_logros`, `id_nacionalidad`, `id_posicionCampo`,`id_equipo`, `nombre`, `goles`, `numero_camisa`) values 
(1, 2, 2, 2, 2, 1, 1, 'Messi', 785, 11),
(2, 3, 3, 1, 2, 2, 4, 'Maradona', 343, 1),
(3, 4, 4, 4, 3, 4, 3, 'Albert', 74, 13),
(4, 5, 4, 5, 4, 1, 2, 'DO', 767, 8),
(5, 6, 3, 4, 5, 1, 2, 'Cruijff', 371, 5),
(6, 7, 1, 1, 6, 2, 4, 'Platini', 300, 7),
(7, 8, 2, 3, 6, 2, 4, 'Yazid', 160, 12),
(8, 9, 3, 4, 4, 1, 2, 'CR7', 343, 7),
(9, 10, 4, 3, 3, 3, 3, 'Rolf', 0, 4),
(10, 11, 1, 2, 7, 4, 2, 'Maldini', 32, 3);

INSERT INTO  `partidos` (`id_partidos`, `nombre`, `equipo1`, `equipo2`, `favorito`,`tiempos`) values
(1, 'Mexico-Argentina', 'Mexico', 'Argentina', 'Argentina', 'Doble'),
(2, 'A.Saudita-Argentina', 'Arabia Saudita', 'Argentina', 'Argentina', 'Doble'),
(3, 'Polonia-Mexico', 'Polonia', 'Mexico', 'Mexico', 'Doble'),
(4, 'Ecuador-Qatar', 'Ecuador', 'Qatar', 'Ecuador', 'Doble');



