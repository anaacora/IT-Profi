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

CREATE TABLE register ( 
  Id Int(11) NOT NULL auto_increment, 
  --Anrede ENUM(Frau, Mann);
  Nachname VarChar(50) NOT NULL default '', 
  Vorname VarChar(50) NOT NULL default '', 
  EMail VarChar(100) NOT NULL default '', 
  Passwort VarChar(50) NOT NULL default '', 
  Telefon VarChar(50) NOT NULL default '', 
  Strasse VarChar(50) NOT NULL default '', 
  PLZ Int(4) NOT NULL, 
  Ort VarChar(50) NOT NULL default '', 
  PRIMARY KEY (Id) 
);