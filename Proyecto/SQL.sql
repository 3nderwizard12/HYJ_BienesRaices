CREATE DATABASE R_Usuario;
Use R_Usuario;

Create Table REGISTRO(
idusuario int identity(1,1) primary key,
nombre varchar(100),
correo varchar(100),
contrasena varchar(100),
);

CREATE DATABASE R_Cliente;
Use R_Cliente;

create table Reg_Cliente(
idcliente int identity(1,1) primary key,
nombre varchar(100),
edad int,
telefono varchar(100),
direccion varchar(100),
costo varchar(100),
f_contrato date,
Observaciones varchar(100),
);

create table Costo_Cliente(
idcostocliente int identity(1,1) primary key,
enganche double,
letras varchar(100),
f_pago date,
metododepago varchar(20),
metros double,
intereses float,
Totalmts double,
Costototal double,
);

create table Monto_Cliente(
idmontocliente int identity(1,1) primary key,
fijas double,
minimas double,
);

create table Ubicacion_Cliente(
idUbicacioncliente int identity(1,1) primary key,
estatus varchar(100),
mzn double,
lote int,
segmento varchar(100);
);

create table Colaboradores_Cliente(
idcolabcliente int identity(1,1) primary key,
nombre varchar(100),
segmento double,
);




