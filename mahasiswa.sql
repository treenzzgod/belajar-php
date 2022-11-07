CREATE DATABASE fakultas;
USE fakultas;
-- Table: jurusan--
CREATE TABLE jurusan (
    id_jurusan int AUTO_INCREMENT,
    kode_jurusan char(4) NOT NULL,
    nama_jurusan varchar(50) NOT NULL,
    PRIMARY KEY (id_jurusan)
);
CREATE TABLE mahasiswa (
    id_mahasiswa int AUTO_INCREMENT,
    id_jurusan int NOT NULL,
    nim char(8) NOT NULL,
    nama varchar(50) NOT NULL,
    jenis_kelamin enum('L', 'P') NOT NULL,
    tempat_lahir varchar(50) NOT NULL,
    tanggal_lahir date NOT NULL,
    alamat varchar(100) NOT NULL,
    PRIMARY KEY (id_mahasiswa),
    foreign key (id_jurusan) references jurusan(id_jurusan)
);
--tambah data jurusan --
INSERT INTO jurusan (kode_jurusan, nama_jurusan) VALUES
('APBL','Administrasi Publik'),
('TI', 'Teknik Informatika'),
('SI', 'Sistem Informasi'),
('MI', 'Manajemen Informatika'),
('KA', 'Komputerisasi Akuntansi'),
('TK', 'Teknik Komputer');

--tambah data jurusan lagi--
INSERT INTO jurusan (kode_jurusan, nama_jurusan) VALUES
('AK', 'Akuntansi');

--tambah data mahasiswa--
INSERT INTO mahasiswa (id_mahasiswa,id_jurusan,nim,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) VALUES
('1','1','12345678','Rudi','L','Jakarta','1990-01-01','Jl. Jendral Sudirman');

--tambah data mahasiswa lagi--
INSERT INTO mahasiswa (id_mahasiswa,id_jurusan,nim,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) VALUES
('2','2','12345679','Rudi','L','Jakarta','1990-01-01','Jl. Jendral Sudirman');


--update data mahasiswa--
UPDATE mahasiswa SET nama = 'ani', jenis_kelamin = 'P' WHERE id_mahasiswa= 1;

--delete data mahasiswa--
DELETE FROM mahasiswa WHERE nama = 'rudi';