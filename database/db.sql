DROP DATABASE ItProfi IF EXISTS;

CREATE DATABASE ItProfi;

USE ItProfi;

CREATE TABLE login ( 
  Id Int(11) NOT NULL auto_increment, 
  EMail VarChar(50) NOT NULL default '', 
  Kennwort VarChar(50) NOT NULL default '', 
  
  PRIMARY KEY (Id) 
);

CREATE TABLE register_personal ( 
  Id Int(11) NOT NULL auto_increment, 
  Anrede VarChar(10) NOT NULL default '', 
  Nachname VarChar(50) NOT NULL default '', 
  Vorname VarChar(50) NOT NULL default '', 
  Geburtsdatum date NOT NULL, 
  Nationalitaet VarChar(50) NOT NULL default '', 
  EMail VarChar(100) NOT NULL default '', 
  Passwort VarChar(50) NOT NULL default '', 
  Telefon VarChar(50), 
  Strasse VarChar(50) NOT NULL default '', 
  PLZ Int(4) NOT NULL, 
  Ort VarChar(50) NOT NULL default '', 
  Berufsbezeichnung VarChar(50) NOT NULL default '', 
  Arbeitgeber VarChar(50) NOT NULL default '', 
  Ausbildung VarChar(50) NOT NULL default '', 
  Student VarChar(50) NOT NULL default '', 

  PRIMARY KEY (Id) 
);

CREATE TABLE register_company( 
  Id Int(11) NOT NULL auto_increment, 
  Name VarChar(50) NOT NULL default '', 
  EMail VarChar(100) NOT NULL default '', 
  Passwort VarChar(50) NOT NULL default '', 
  Telefon VarChar(50) NOT NULL default '', 
  Strasse VarChar(50) NOT NULL default '', 
  PLZ Int(4) NOT NULL, 
  Ort VarChar(50) NOT NULL default '',
  Dienstleistungen VarChar(50) NOT NULL default '', 
  SucheNach VarChar(50) NOT NULL default '', 

  PRIMARY KEY (Id) 
);