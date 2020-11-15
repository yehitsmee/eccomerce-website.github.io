# ecommerce_website
Ecommerce website to purchase books online


Begin by clicking on index.html.

Databases need to be created.

Database to be created:eccomerce

Tables to be created in the database 'eccomerce' are:
action,admin,auto,comic,fantasy,images,imagesaction,imagesauto,imagescomic,imagescience,imagesthriller,register,science,thriller

SQL commands to create the tables:
create table action(id int(11),name varchar(225),author varchar(225),price int(11));
create table admin(email varchar(40),user varchar(225),password varchar(225));
create table auto(id int(11),name varchar(225),author varchar(225),price int(11));
create table comic(id int(11),name varchar(225),author varchar(225),price int(11));
create table fantasy(id int(11),name varchar(225),author varchar(225),price int(11));
create table images(id  int(11) NOT NULL AUTO_INCREMENT,file_name  varchar(255) COLLATE utf8_unicode_ci NOT NULL,uploaded_on datetime NOT NULL,status  enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',PRIMARY KEY (id) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci);
create table imagesaction(id  int(11) NOT NULL AUTO_INCREMENT,file_name  varchar(255) COLLATE utf8_unicode_ci NOT NULL,uploaded_on datetime NOT NULL,status  enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',PRIMARY KEY (id)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci);
create table imagesauto(id  int(11) NOT NULL AUTO_INCREMENT,file_name  varchar(255) COLLATE utf8_unicode_ci NOT NULL,uploaded_on datetime NOT NULL,status  enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',PRIMARY KEY (id)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci);
create table imagescomic(id  int(11) NOT NULL AUTO_INCREMENT,file_name  varchar(255) COLLATE utf8_unicode_ci NOT NULL,uploaded_on datetime NOT NULL,status  enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',PRIMARY KEY (id)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci);
create table imagesscience(id  int(11) NOT NULL AUTO_INCREMENT,file_name  varchar(255) COLLATE utf8_unicode_ci NOT NULL,uploaded_on datetime NOT NULL,status  enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',PRIMARY KEY (id)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci);
create table imagesthriller(id  int(11) NOT NULL AUTO_INCREMENT,file_name  varchar(255) COLLATE utf8_unicode_ci NOT NULL,uploaded_on datetime NOT NULL,status  enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',PRIMARY KEY (id)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci);
create table register(username varchar(225),email varchar(40),password varchar(225));
create table science(id int(11),name varchar(225),author varchar(225),price int(11));
create table thriller(id int(11),name varchar(225),author varchar(225),price int(11));
