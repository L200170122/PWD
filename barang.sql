CREATE TABLE gudang (
    kode_gudang int(11) PRIMARY KEY NOT NULL,
    nama_gudang varchar(50) NOT NULL,
    lokasi varchar(50) NOT NULL
);




CREATE TABLE barang (
    kode_barang int(11) PRIMARY KEY NOT NULL,
    nama_barang varchar(50) NOT NULL,
    kode_gudang int(11) NOT NULL,
    FOREIGN KEY(kode_gudang) REFERENCES gudang(kode_gudang) ON DELETE CASCADE ON UPDATE CASCADE
);
