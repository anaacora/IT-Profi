DROP DATABASE ItProfi IF EXISTS;

CREATE DATABASE ItProfi;

USE ItProfi;


CREATE TABLE login ( 
  Id Int(11) NOT NULL auto_increment, 
  Nickname VarChar(50) NOT NULL default '', 
  Kennwort VarChar(50) NOT NULL default '', 
  Nachname VarChar(50) NOT NULL default '', 
  Vorname VarChar(50) NOT NULL default '', 
  PRIMARY KEY (Id) 
);