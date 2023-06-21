create table dolar_diario(
id_dolar serial primary key not null,
dia varchar  (2) not null;
dolar NUMERIC(9,2) not null
);

create table dolar_mes(
id_mes serial primary key not null,
precio NUMERIC(9,2) not null,
mensualidad NUMERIC(9,2) not null,
mensualidad_dolar NUMERIC(9,2) not null,
mes text not null,
anio varchar (4)not null 
); 
 
create table apartamentos(
id_apartamento serial primary key not null,
nombre text not null,
ubicacion text not null,
capacidad varchar (2) not null,
mes text not null,
descripcion text,
estado text
); 



-- ---------------------------------------

create table deuda (
id_deuda serial primary key not null,
id_apartamento serial not null,

ids_dolar text not null,

total_bolivar NUMERIC(9,2) not null, 
total_dolar NUMERIC(9,2) not null,

constraint id_apartamento foreign key (id_apartamento) 
references apartamentos MATCH SIMPLE 
ON UPDATE CASCADE ON DELETE CASCADE

);

create table pagos (
id_pago serial primary key not null,
id_deuda  not null,


constraint id_deuda foreign key (id_deuda) 
references deuda MATCH SIMPLE 
ON UPDATE CASCADE ON DELETE CASCADE
);



create table deuda_apartamento (
id_deuda_apartamento serial primary key not null,
id_apartamento  not null,
id_deuda  not null,

constraint id_apartamento foreign key (id_apartamento) 
references apartamentos MATCH SIMPLE 
ON UPDATE CASCADE ON DELETE CASCADE,

constraint id_deuda foreign key (id_deuda) 
references deuda MATCH SIMPLE 
ON UPDATE CASCADE ON DELETE CASCADE

);
