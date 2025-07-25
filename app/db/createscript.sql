-- Step: 01
-- ***************************************************************
-- Doel : Maak een nieuwe database aan met de naam Mvc_smartphone_2408B
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           13-11-2024      Arjan de Ruijter    Smartphones
-- ***************************************************************

-- Verwijder database Mvc_smartphone_2408B
DROP DATABASE IF EXISTS `Mvc_smartphone_2408B`;

-- Maak een nieuwe database aan Mvc_smartphone_2408B
CREATE DATABASE `Mvc_smartphone_2408B`;

-- Gebruik database Mvc_smartphone_2408B
USE `Mvc_smartphone_2408B`;

-- Step: 02
-- ***************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ***************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-02-2025      Arjan de Ruijter    Tabel Smartphones
-- ****************************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem, 
-- Schermgrootte, Releasedatum, Gewicht, Simlockvrij
-- ****************************************************************************

CREATE TABLE Smartphones
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL
    ,Prijs              DECIMAL(6,2)                NOT NULL
    ,Geheugen           DECIMAL(4,0)                NOT NULL         
    ,Besturingssysteem  VARCHAR(25)                 NOT NULL
    ,Schermgrootte	    DECIMAL(4,2)			  NOT NULL
    ,Releasedatum	    DATE 					  NOT NULL     
    ,Gewicht            DECIMAL(3,0)                NOT NULL 
    ,Simlockvrij        BIT                         NOT NULL        DEFAULT 1           
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 03
-- ***************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-02-2025      Arjan de Ruijter    Vulling Smartphones
-- ***************************************************************

INSERT INTO Smartphones
(
      Merk
     ,Model
     ,Prijs
     ,Geheugen
     ,Besturingssysteem
     ,Schermgrootte
     ,Releasedatum
     ,Gewicht
     ,Simlockvrij
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Apple', 'iPhone 16 Pro', 1260, 512, 'iOS 18', 6.7, '2024-09-14', 234, 0,  1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Samsung', 'Galaxy S25 Ultra', 1324, 256, 'Android 15', 8.1, '2024-09-20', 123, 1,  1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Google', 'Pixel 9 Pro', 1152, 1000, 'Android 15', 9.0, '2025-01-20', 280, 1, 1, NULL, SYSDATE(6), SYSDATE(6));


 

-- Step: 04
-- *****************************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Sneakers
-- *****************************************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-02-2025      Arjan de Ruijter    Tabel Sneakers
-- *****************************************************************************************************
-- Onderstaande velden toevoegen aan de tabel Sneakers
-- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch), Gewicht, Releasedatum
-- *****************************************************************************************************

CREATE TABLE Sneakers
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL
    ,Type               VARCHAR(25)                 NOT NULL
    ,Prijs              DECIMAL(6,2)                NOT NULL	
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Sneakers_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 04
-- *****************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-02-2025      Arjan de Ruijter    Vulling Sneakers
-- *****************************************************************

INSERT INTO Sneakers
(
      Merk
     ,Model
     ,Type
     ,Prijs
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Nike', 'Air Jordan 1', 'Basketbal', '199,99', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Adidas', 'Yeezy Boost 350', 'Casual', '299,99', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('New Balance', 'Pixel 9 Pro', 'Hardloop', '149,99', 1, NULL, SYSDATE(6), SYSDATE(6));




-- Step: 12
-- *****************************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Zangeres
-- *****************************************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-03-2025      Arjan de Ruijter    Tabel Zangeres
-- *****************************************************************************************************
-- Onderstaande velden zelf toevoegen aan de tabel Zangeres
-- *****************************************************************************************************

CREATE TABLE Zangeres
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Naam               VARCHAR(50)                 NOT NULL
    ,Nettowaarde        SMALLINT        UNSIGNED    NOT NULL
    ,Land               VARCHAR(50 )                NOT NULL
    ,Mobiel             VARCHAR(30)                 NOT NULL
    ,Leeftijd           TINYINT         UNSIGNED    NOT NULL
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Zangeres_Id              PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 13
-- *****************************************************************
-- Doel : Vul de tabel Zangeres met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-3-2025      Arjan de Ruijter     Vulling Zangeres
-- *****************************************************************

INSERT INTO Zangeres
(
      Naam
     ,Nettowaarde
     ,Land
     ,Mobiel
     ,Leeftijd
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
  ('Rihanna', 1400,'Barbados', '+1246 2400 1862400', 36, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Madonna', 575,'Verenigde Staten', '+13425 182345', 65, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Taylor Swift', 570,'Verenigde Staten', '+13421 231356', 34, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Beyoncé', 420,'Verenigde Staten', '+18723 213481', 41, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Jennifer Lopez', 400,'Verenigde Staten', '+16254 751243', 54, 1, NULL, SYSDATE(6), SYSDATE(6));


 CREATE TABLE Horloges
     (
          Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
     ,Merk               VARCHAR(50)                 NOT NULL
     ,Model              VARCHAR(50)                 NOT NULL
     ,Prijs              DECIMAL(6,0)                NOT NULL	
     ,IsActief           BIT                         NOT NULL        DEFAULT 1
     ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
     ,DatumAangemaakt    DATETIME(6)                 NOT NULL
     ,DatumGewijzigd     DATETIME(6)                 NOT NULL
     ,CONSTRAINT         PK_Horloges_Id    PRIMARY KEY     CLUSTERED(Id)
     ) ENGINE=InnoDB;

     -- Step: 07
     -- *****************************************************************
     -- Doel : Vul de tabel Horloges met gegevens
     -- *****************************************************************
     -- Versie       Datum           Auteur              Omschrijving
     -- ******       *****           ******              ************
     -- 01           11-3-2025      Arjan de Ruijter    Vulling Horloges
     -- *****************************************************************

     INSERT INTO Horloges
     (
          Merk
          ,Model
          ,Prijs
          ,IsActief
          ,Opmerking
          ,DatumAangemaakt
          ,DatumGewijzigd
     )
     VALUES
     ('Rolex', 'Daytona 126500LN', 19800, 1, NULL, SYSDATE(6), SYSDATE(6)),
     ('Omega', 'Speedmaster Moonwatch Professional', 8500, 1, NULL, SYSDATE(6), SYSDATE(6)),
     ('Vacheron Constantin', 'Overseas Perpetual Calendar Ultra-Thin', 98000, 1, NULL, SYSDATE(6), SYSDATE(6)),
     ('Jaeger-LeCoultre', 'Reverso Tribute Duoface', 17000, 1, NULL, SYSDATE(6), SYSDATE(6));

 -- Step: 14
-- *****************************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Cyberaanval
-- *****************************************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           1-04-2025      Arjan de Ruijter    Tabel Cyberaanval
-- *****************************************************************************************************
-- Verbeter de dataypen van de onderstaande velden van de tabel Cyberaanval
-- *****************************************************************************************************

CREATE TABLE Cyberaanval
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Naam               VARCHAR(250)                NOT NULL
    ,Jaar               VARCHAR(10)                 NOT NULL
    ,AantalSlachtoffers BIGINT          UNSIGNED    NOT NULL
    ,TypeAanval         VARCHAR(300)                NOT NULL
    ,Schade             INT             UNSIGNED    NOT NULL
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Cyberaanval_Id           PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 15
-- *****************************************************************
-- Doel : Vul de tabel Cyberaanval met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           1-4-2025      Arjan de Ruijter     Vulling Cyberaanval
-- *****************************************************************

INSERT INTO Cyberaanval
(
      Naam
     ,Jaar
     ,AantalSlachtoffers
     ,TypeAanval
     ,Schade
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('WannaCry', '2017', 230, 'Ransomware', 4000, 1, NULL, SYSDATE(6), SYSDATE(6))
,('Yahoo Datalek', '2013', 3000, 'Datalek', 350, 1, NULL, SYSDATE(6), SYSDATE(6))
,('Equifax Hack', '2017', 147, 'Datalek', 700, 1, NULL, SYSDATE(6), SYSDATE(6))
,('Target Hack', '2013', 110, 'Creditcardgegevens gestolen', 18.5, 1, NULL, SYSDATE(6), SYSDATE(6))
,('Marriott Hack', '2014',  500, 'Datalek', 100, 1, NULL, SYSDATE(6), SYSDATE(6));