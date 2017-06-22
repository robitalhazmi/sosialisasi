-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-06-21 03:19:09.84

-- tables
-- Table: agendas
CREATE TABLE agendas (
    id int NOT NULL,
    tanggal int NOT NULL,
    kegiatan text NOT NULL,
    kontak varchar(13) NOT NULL,
    petugas_id int NOT NULL,
    kotas_id int NOT NULL,
    CONSTRAINT agendas_pk PRIMARY KEY (id)
);

-- Table: jabatans
CREATE TABLE jabatans (
    id int NOT NULL AUTO_INCREMENT,
    nama varchar(7) NOT NULL,
    CONSTRAINT jabatans_pk PRIMARY KEY (id)
);

-- Table: kotas
CREATE TABLE kotas (
    id int NOT NULL AUTO_INCREMENT,
    nama varchar(22) NOT NULL,
    provinsis_id int NOT NULL,
    CONSTRAINT kotas_pk PRIMARY KEY (id)
);

-- Table: laporans
CREATE TABLE laporans (
    id int NOT NULL AUTO_INCREMENT,
    detail text NOT NULL,
    kendala text NOT NULL,
    dokumen text NOT NULL,
    agendas_id int NOT NULL,
    CONSTRAINT laporans_pk PRIMARY KEY (id)
);

-- Table: petugass
CREATE TABLE petugass (
    id int NOT NULL AUTO_INCREMENT,
    nama text NOT NULL,
    telepon varchar(13) NOT NULL,
    gender varchar(6) NOT NULL,
    tgl_lahir date NOT NULL,
    berkas text NULL,
    users_id int NOT NULL,
    jabatans_id int NOT NULL,
    CONSTRAINT petugass_pk PRIMARY KEY (id)
);

-- Table: provinsis
CREATE TABLE provinsis (
    id int NOT NULL AUTO_INCREMENT,
    nama varchar(28) NOT NULL,
    CONSTRAINT provinsis_pk PRIMARY KEY (id)
);

-- Table: users
CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    email varchar(320) NOT NULL,
    password text NOT NULL,
    status bool NOT NULL,
    created_at timestamp NOT NULL,
    updated_at timestamp NOT NULL,
    remember_token varchar(100) NULL,
    CONSTRAINT users_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: agendas_kotas (table: agendas)
ALTER TABLE agendas ADD CONSTRAINT agendas_kotas FOREIGN KEY agendas_kotas (kotas_id)
    REFERENCES kotas (id);

-- Reference: agendas_petugas (table: agendas)
ALTER TABLE agendas ADD CONSTRAINT agendas_petugas FOREIGN KEY agendas_petugas (petugas_id)
    REFERENCES petugass (id);

-- Reference: kotas_provinsis (table: kotas)
ALTER TABLE kotas ADD CONSTRAINT kotas_provinsis FOREIGN KEY kotas_provinsis (provinsis_id)
    REFERENCES provinsis (id);

-- Reference: laporans_agendas (table: laporans)
ALTER TABLE laporans ADD CONSTRAINT laporans_agendas FOREIGN KEY laporans_agendas (agendas_id)
    REFERENCES agendas (id);

-- Reference: petugas_jabatans (table: petugass)
ALTER TABLE petugass ADD CONSTRAINT petugas_jabatans FOREIGN KEY petugas_jabatans (jabatans_id)
    REFERENCES jabatans (id);

-- Reference: petugas_users (table: petugass)
ALTER TABLE petugass ADD CONSTRAINT petugas_users FOREIGN KEY petugas_users (users_id)
    REFERENCES users (id);

-- End of file.

