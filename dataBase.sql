CREATE DATABASE `foundation` DEFAULT CHARACTER SET utf8 COLLATE 
utf8_turkish_ci; 

USE `sigin`; 

CREATE TABLE `` 
  ( 
     `id`           INT(11) NOT NULL auto_increment, 
    `username` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `adress`           VARCHAR(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `email`       VARCHAR(255) NOT NULL, 
    `pass`        VARCHAR(255) NOT NULL, 
    `confirmpass`        VARCHAR(255) NOT NULL,

     PRIMARY KEY (`id`) 
  );  
