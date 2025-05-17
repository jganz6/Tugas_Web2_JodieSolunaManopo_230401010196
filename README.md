# TUGAS WEB 2
![PHP Badge](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=fff&style=flat)
![MySQL Badge](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=fff&style=flat)
![Static Badge](https://img.shields.io/badge/JodieSolunaManopo-230401010196-blue?style=flat&color=orange)
![Static Badge](https://img.shields.io/badge/WEB2-IF402-blue?style=flat&labelColor=green)

> ### Personal Information
> * Nama: Jodie Soluna Manopo
> * NIM: 230401010196
> * Kelas: IF402
> * Prodi: PJJ Informatika
> * Matkul: Pemrograman WEB 2
> * Type: TUGAS

## CRUD PHP Product
Aplikasi berbasis web ini dibuat untuk memenuhi Tugas WEB 2. Aplikasi ini merupakan aplikasi yang mencakup fitur CRUD (create, read, update,delete) dari sebuah produk.

### I. Mysqli Procedural Style
---
mysqli procedural style adalah sebuah gaya penulisan secara prosedural yang diperuntukan dalam pembuatan aplikasi kecil. Saya menggunakan mysqli procedural style dikarenakan aplikasinya kecil hanya untuk fitur crud 1 tabel produk dan semua penulisan php yang saya terapkan secara prosedural sehingga lebih mudah dan lebih ringkas.

### II. Struktur Database
---
Queries
```sql
CREATE TABLE `produk` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(35) NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `produk` ADD UNIQUE (`nama_produk`);
```

### III. Alur Aplikasi
---
1. index.php -> file utama yang akan diakses pertama kali oleh browser yang berisikan tampilan view untuk table produk.
2. config.php -> file untuk konfigurasi koneksi database (file ini menerapkan konsep reusable yang nantinya akan digunakan setiap kali kita membutuhkan koneksi database).
3. Daftar Aksi
    1. CREATE
        - create.php [GET][handler] -> merupakan file yang berisikan form untuk membuat data produk baru (insert) yang nantinya akan melakukan aksi POST ke [create_aksi.php]
        - create_aksi.php [POST][models] -> merupakan file yang berisikan aksi query untuk insert dari data yang sudah didapat dari parameter yang disediakan.
    2. UPDATE
        - edit.php [GET][handler] -> merupakan file yang berisikan form untuk mengupdate data produk yang sudah kita pilih sebelumnya dari tombol edit yang ada di [index.php] yang nantinya akan melakukan aksi POST ke [update.php] 
        - update.php [POST][models] -> merupakan aksi query untuk update data berdasarkan data yang sudah di dapat dari parameter yang di sediakan.
    3. DELETE
        - delete.php [GET][models] -> merupakan aksi query untuk menghapus data berdasarkan parameter yang di dapat.

## HOW TO USE
### 1. Restore database
---
```console
   foo@bar:~$ sudo mysql -u db_username -p db_name < backup.sql
```
### 2. Setup Database Config
---
```console
    foo@bar:~$ sudo nano config.php
```

> **EXAMPLE**
>
> *filename* : **config.php**
>
>   ```php
>    $username ="root";
>    $password="";
>    $host="localhost";
>    $db = "unsia"; 
>   ```


### 3. Run Program
---
```console
   foo@bar:~$ php -S 127.0.0.1:8080
```
