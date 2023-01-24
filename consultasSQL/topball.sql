-- creación de la base de datos
create database if not exists topball;

-- selección de la base de datos
use topball;


/* ----------------------------------------------------------------
-- table: jugadores                                      
------------------------------------------------------------------*/
create table jugadores
(
    id_jugadores	        int not null auto_increment,
    id_personas			  INT NOT NULL,
    id_mundiales	        int not NULL,
    id_logros      		  int not NULL,
    id_nacionalidad       int not NULL,
    id_posicionCampo      int not NULL,
    id_equipo       		  int not NULL,
    nombre                varchar(50) not null,
    goles				  	  int not null,
    numero_camisa			  int not null,
    primary key (id_jugadores)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;
topball
/* ----------------------------------------------------------------
-- table: personas                                            
------------------------------------------------------------------*/
create table personas
(
    id_personas     int not null auto_increment,
    nombre          varchar(50) not null,
    edad         	  int not null,
    telefono		  VARCHAR (50) NOT NULL,
    primary key (id_personas)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;

/* ----------------------------------------------------------------
-- table: equipo                                              
------------------------------------------------------------------*/
create table equipo
(
    id_equipo            int not null auto_increment,
    nombre          		 varchar(50) not null,
    pais_representante   varchar(50) not null,
    primary key (id_equipo)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;

/* ----------------------------------------------------------------
-- table: nacionalidad                                           
------------------------------------------------------------------*/
create table nacionalidad
(
    id_nacionalidad       int not null auto_increment,
    nombre                varchar(50) not null,
    pais_nacimiento       varchar(50) not null,
    pais_residencia  	  varchar(50) not null,
    primary key (id_nacionalidad)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;

/* ----------------------------------------------------------------
-- table: logros                                             
------------------------------------------------------------------*/
create table logros
(
    id_logros       int not null auto_increment,
    nombre          varchar(50) not null,
    descripcion     varchar(500) not null,
    primary key (id_logros)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;

/* ----------------------------------------------------------------
-- table: posicionCampo                                            
------------------------------------------------------------------*/
create table posicionCampo
(
    id_posicionCampo      int not null auto_increment,
    nombre                varchar(50) not null,
    descripcion    		  varchar(500) not null,
    primary key (id_posicionCampo)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;

/* ----------------------------------------------------------------
-- table: mundiales                                         
------------------------------------------------------------------*/
create table mundiales
(
    id_mundiales	        int not null auto_increment,
    nombre                varchar(50) not null,
    fecha					  DATE NOT NULL,
    pais    		  		  varchar(50) not null,
    balon					varchar(50) not null,
    primary key (id_mundiales)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;

/* ----------------------------------------------------------------
-- table: usuarioAdmin                                         
------------------------------------------------------------------*/
create table usuarioAdmin
(
    id_usuarioAdmin	     int not null auto_increment,
    id_personas			  INT NOT NULL,
    correo                varchar(50) not null,
    contrasena				  VARCHAR(20) not null,
    activo					  bit NOT NULL,
    primary key (id_usuarioAdmin)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;


create table partidos
(
    id_partidos	     int not null auto_increment,
    nombre			     varchar(50) not null,
    equipo1            varchar(50) not null,
    equipo2				  varchar(50) not null,
    favorito			  varchar(50) not null,
    tiempos				  VARCHAR(50) not NULL,
    primary key (id_partidos)
) ENGINE = InnoDB DEFAULT charset = UTF8MB4;


/*----------------------------------------------------------------
--  Alteraciones de las tablas para las foreign keys             
----------------------------------------------------------------*/

alter table usuarioAdmin add constraint fk_usuarioAdmin_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;

alter table jugadores add constraint fk_jugadores_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;
   
alter table jugadores add constraint fk_jugadores_reference_mundiales foreign key (id_mundiales)
    references mundiales (id_mundiales) on delete restrict on update restrict;

alter table jugadores add constraint fk_jugadores_reference_logros foreign key (id_logros)
    references logros (id_logros) on delete restrict on update restrict;

alter table jugadores add constraint fk_jugadores_reference_nacionalidad foreign key (id_nacionalidad)
    references nacionalidad (id_nacionalidad) on delete restrict on update restrict;

alter table jugadores add constraint fk_jugadores_reference_posicionCampo foreign key (id_posicionCampo)
    references equipo (id_equipo) on delete restrict on update restrict;

alter table jugadores add constraint fk_jugadores_reference_equipo foreign key (id_equipo)
    references posicionCampo (id_posicionCampo) on delete restrict on update restrict;
    
