
--
-- Base de datos:  lenguajes_b21190 
--
use [IF5100_2017_B21190]; 
GO
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbaccount 
--

/*CREATE TABLE  tbaccount  (
   idAccount  int NOT NULL,
   typeAccount  int NOT NULL,
   numberCard  varchar(20) NOT NULL,
   DateExpiration  date NOT NULL,
   CSC  varchar(5) NOT NULL,
   idClient  int NOT NULL,
   active  char(1) DEFAULT NULL,
   direction  varchar(300) DEFAULT NULL
) ; 
GO*/

--
-- Volcado de datos para la tabla  tbaccount 
--
/**
INSERT INTO  tbaccount  ( idAccount ,  typeAccount ,  numberCard ,  DateExpiration ,  CSC ,  idClient ,  active ,  direction ) VALUES
--(1, 1, '4380989503922722', '2017-02-02', '876', 1, '1', 'Direccion de prueba'),
--(2, 2, '4380989503922722', '2017-02-03', '655', 1, '1', 'Direccion de prueba'),
--(3, 1, '4380989503922722', '2017-02-02', '634', 1, '1', 'Direccion de prueba'),
--(4, 1, '4380989503922722', '2017-02-02', '654', 1, '1', 'Direccion de prueba'),
(5, 1, '4380989503922722', '2019-02-02', '876', 1, '1', 'Direccion de prueba'),
(6, 1, '4380989503922722', '2019-02-02', '765', 1, '1', 'Direccion de prueba');
 GO*/

-- --------------------------------------------------------
/**
--
-- Estructura de tabla para la tabla  tbadministrator 

CREATE TABLE  tbadministrator  (
   idAdministrator  int NOT NULL,
   nameAdministrator  varchar(30) NOT NULL,
   surname1Administrator  varchar(30) NOT NULL,
   surname2Administrator  varchar(30) NOT NULL,
   emailAdministrator  varchar(100) NOT NULL,
   userAdministrator  varchar(39) NOT NULL,
   passwordAdministrator  varchar(30) NOT NULL,
   idStore  int NOT NULL
) ; 
GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbcanceledsales 
--

CREATE TABLE  tbcanceledsales  (
   idcanceledsales  int NOT NULL,
   idclient  int DEFAULT NULL,
   idproduct  int DEFAULT NULL
) ; 
GO

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbclient 
--
--drop table tbclient;
CREATE TABLE  tbclient  (
   idClient  int NOT NULL identity(1,1) primary key,
   emailClient  varchar(40) NOT NULL,
   userClient  varchar(40) NOT NULL,
   passwordClient  varchar(40) NOT NULL,
   nameClient  varchar(30) NOT NULL,
   surname1Client  varchar(30) NOT NULL,
   surname2Client  varchar(30) NOT NULL,
   bornClient  date NOT NULL,
   sexClient  varchar(20) NOT NULL,
   telephoneClient  varchar(15) NOT NULL,
   provinceClient  varchar(50) NOT NULL,
   cantonClient  varchar(50) NOT NULL,
   districtClient  varchar(50) NOT NULL,
   addressClient1  varchar(100) NOT NULL,
   addressClient2  varchar(300) NOT NULL,
   active  char(1) DEFAULT NULL,
   userType int not null default 0
) ; 
GO

--
-- Volcado de datos para la tabla  tbclient 
--

INSERT INTO  tbclient  (  emailClient ,  userClient ,  passwordClient ,  nameClient ,  surname1Client ,  surname2Client ,  bornClient ,  sexClient ,  telephoneClient ,  provinceClient ,  cantonClient ,  districtClient ,  addressClient1 ,  addressClient2 ,  active, userType ) VALUES
('admin@gmail.com', 'admin', 'admin', 'Admin', 'Admin', 'Admin', '2017-02-06', 'Masculino', '12345678', 'Cartago', 'Turrialba', 'Turrialba', 'UCR', 'campus', '1',1),
('client@hotmail.com', 'client', 'client', 'client', 'client', 'client', '1993-09-01', 'Masculino', '8618246', 'Puntarenas', 'Buenos+aires', 'Flores', 'Rafael+Camacho', '100m+N+del+estadio', '1',2),
('socio@gmail', 'socio', 'socio', 'socio', 'socio', 'socio', '2017-02-06', 'Masculino', '12345678', 'Cartago', 'Turrialba', 'Turrialba', 'UCR', 'campus', '1',3); 
GO
*/
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbcomment 
--
/**
CREATE TABLE  tbcomment  (
   idComment  int NOT NULL,
   idProduct  int NOT NULL,
   commentProduct  varchar(200) NOT NULL,
   idClient  int NOT NULL,
   date  date NOT NULL
) ; 
GO*/

--
-- Volcado de datos para la tabla  tbcomment 
--
/*
INSERT INTO  tbcomment  ( idComment ,  idProduct ,  commentProduct ,  idClient ,  date ) VALUES
(1, 1, 'Todo bien', 1, '2017-02-07'),
(2, 1, 'No jamas', 1, '2017-02-07'),
(3, 1, 'Jamas', 5, '2017-02-07');
 GO
 */
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbconcretesales 
--
/**
CREATE TABLE  tbconcretesales  (
   idconcretesales  int NOT NULL,
   idclient  int DEFAULT NULL,
   idproduct  int DEFAULT NULL,
   idSale  int DEFAULT NULL
) ; 
GO
*/
--
-- Volcado de datos para la tabla  tbconcretesales 
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbcustomershopping 
--
/*
CREATE TABLE  tbcustomershopping  (
   idSale  int NOT NULL,
   idClient  int DEFAULT NULL,
   dateSale  date NOT NULL,
   totalSale  int NOT NULL,
   active  char(1) DEFAULT 1
) ; 
GO

--
-- Volcado de datos para la tabla  tbcustomershopping 
--

INSERT INTO  tbcustomershopping  ( idSale ,  idClient ,  dateSale ,  totalSale ,  active ) VALUES
(1, 1, '2017-01-27', 1234567, '0'),
(2, 2, '2017-01-27', 78787878, '1'),
(3, 1, '2017-01-27', 44444, '0'),
(4, 1, '2017-01-30', 1200, '1'),
(5, 1, '2017-01-30', 1200, '0'),
(6, 1, '2017-01-30', 1111, '0'),
(7, 1, '2017-01-31', 23456, '0'); 
  GO
*/
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbdistrict 
--
/*
CREATE TABLE  tbdistrict  (
   idDistrict  int NOT NULL,
   nameDistrict  varchar(30) NOT NULL,
   idCanton  int NOT NULL
) ; 
  GO
*/
--
-- Volcado de datos para la tabla  tbdistrict 
--
/*/
INSERT INTO  tbdistrict  ( idDistrict ,  nameDistrict ,  idCanton ) VALUES
(1, 'Juan Vinas', 1),
(2, 'La suiza', 2),
(3, 'San Miguel', 3),
(4, 'San isidro', 4),
(5, 'Ciudad quesada', 5),
(6, 'Aguas claras', 6),
(7, 'Santo domingo', 7),
(8, 'San Juan', 8),
(9, 'Tenerife', 9),
(10, 'Monte bagaces', 10),
(11, 'Golfito', 11),
(12, 'Flores', 12); 
  GO
*/
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbfrecuency 
--
/*
CREATE TABLE  tbfrecuency  (
   idfrecuency  int NOT NULL,
   date  date NOT NULL,
   idClient  int NOT NULL,
   participationwall  int NOT NULL,
   viewproduct  int NOT NULL,
   searchproduct  int NOT NULL
) ; 
GO
*/
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbimageproduct 
--
/*
CREATE TABLE  tbimageproduct  (
   idImage  int NOT NULL,
   pathImage  varchar(100) NOT NULL,
   idProduct  int NOT NULL
) ; 
GO

--
-- Volcado de datos para la tabla  tbimageproduct 
--

INSERT INTO  tbimageproduct  ( idImage ,  pathImage ,  idProduct ) VALUES
(1, '../../images/p8.jpg', 1),
(2, '../../images/p81.jpg', 1),
(3, '../../images/p802.jpg', 1),
(4, '../../images/p803.jpg', 1),
(5, '../../images/p901.jpg', 5),
(6, '../../images/p902.jpeg', 5),
(7, '../../images/p903.jpg', 5),
(8, '../../images/p904.jpg', 5),
(9, '../../images/p905.jpg', 5),
(10, '../../images/iph1.jpg', 3),
(11, '../../images/iph2.jpg', 3),
(12, '../../images/iph3.jpg', 3),
(13, '../../images/iph4.jpg', 3),
(14, '../../images/lk01.jpg', 4),
(15, '../../images/lk02.jpg', 4),
(16, '../../images/lk03.jpg', 4),
(17, '../../images/lk04.jpg', 4),
(18, '../../images/s701.jpg', 2),
(19, '../../images/s702.jpg', 2),
(20, '../../images/s703.jpg', 2),
(21, '../../images/s705.jpg', 2); 
GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tblike 
--

CREATE TABLE  tblike  (
   idlike  int NOT NULL identity (1,1) primary key,
   iduser  int NOT NULL,
   state  varchar(30) NOT NULL,
   idcomment  int NOT NULL
) ; 
GO

--
-- Volcado de datos para la tabla  tblike 
--

INSERT INTO  tblike  ( idlike ,  iduser ,  state ,  idcomment ) VALUES
(25, 1, 'checked', 1),
(26, 5, 'checked', 1),
(27, 1, 'checked', 2),
(28, 5, 'checked', 3),
(29, 5, '', 2),
(30, 1, 'checked', 3); 
  GO

-- --------------------------------------------------------
*/
--
-- Estructura de tabla para la tabla  tboffer 
--
/*
CREATE TABLE  tboffer  (
   idOffer  int NOT NULL,
   descriptionOffer  varchar(100) NOT NULL,
   discountPercentage  int NOT NULL,
   dateStar  date NOT NULL,
   dateEnd  date NOT NULL,
   idProduct  int NOT NULL
) ; 
GO

-- --------------------------------------------------------
*/
--
-- Estructura de tabla para la tabla  tboutlay 
--
/*
CREATE TABLE  tboutlay  (
   idOutlay  int NOT NULL,
   purchase  char(1) NOT NULL,
   idPurchase  int NOT NULL,
   dateOutlay  date NOT NULL
) ; 
GO
/*
--
-- Volcado de datos para la tabla  tboutlay 
--
/*
INSERT INTO  tboutlay  ( idOutlay ,  purchase ,  idPurchase ,  dateOutlay ) VALUES
(1, '1', 5, '2017-03-05'),
(2, '1', 2, '2017-03-05'),
(3, '1', 3, '2017-03-05'),
(4, '0', 2, '2017-03-05'),
(5, '1', 2, '2017-03-05'),
(6, '0', 3, '2017-03-05'),
(7, '0', 5, '2017-03-05'); 
  GO 
*/

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbproduct 
--
*/ drop table tbproduct;*/

/*
CREATE TABLE  tbproduct  (
   idProduct  int NOT NULL primary key identity(1,1),
   brand  varchar(30) NOT NULL,
   model  varchar(30) NOT NULL,
   price  int NOT NULL,
   description  varchar(200) NOT NULL,
   idStore  int NOT NULL DEFAULT '1',
   idTypeProduct  int DEFAULT NULL,
   nameProduct  varchar(40) DEFAULT NULL,
   characteristics  varchar(1000) NOT NULL,
   serie  varchar(100) NOT NULL,
   active  char(1) DEFAULT NULL
) ; 
GO
*/

--
-- Volcado de datos para la tabla  tbproduct 
--
/*
INSERT INTO  tbproduct  (   brand ,  model ,  price ,  description ,  idStore ,  idTypeProduct ,  nameProduct ,  characteristics ,  serie ,  active ) VALUES
( 'Huawei', 'P8 lite', 23456, 'hhjjhh', 1, 1, 'Celular', 'trrtrttr', '45245jhjh', '1'),
( 'Samsung', 'S7', 128000, 'Descripcion8', 1, 1, 'Celular', '', '', '0'),
( 'Iphone', '6s', 30000088, 'Descripcion4', 1, 1, 'Celular', 'jkjkjkj', 'jjkjkjk', '1'),
( 'LG', 'LG1', 656767678, 'Descripcion5', 1, 1, 'Celular', 'jkjkjkjk', 'kjkjjkjk', '1'),
( 'Huawei', 'P9', 345000, 'Descripcion', 1, 1, 'Celular', 'hjhjhhj', 'hjjhhj', '1'); 
GO
*/
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbproductcalification 
--
/*
CREATE TABLE  tbproductcalification  (
   idCalification  int NOT NULL,
   idProduct  int NOT NULL,
   idUser  int NOT NULL,
   calification  int NOT NULL
) ; 
GO
*/
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbproductcolor 
--
/*
CREATE TABLE  tbproductcolor  (
   idcolor  int NOT NULL,
   idproduct  int NOT NULL,
   color  varchar(15) NOT NULL
) ; 
GO
*/
--
-- Volcado de datos para la tabla  tbproductcolor 
--
/*
INSERT INTO  tbproductcolor  ( idcolor ,  idproduct ,  color ) VALUES
(4, 1, '#ff80ff'),
(6, 5, '#0080ff'),
(7, 5, '#ff8040'),
(8, 5, '#ff0000'),
(9, 1, '#8080ff'),
(10, 1, '#ff8040'),
(11, 4, '#004080'),
(12, 3, '#8080ff'),
(13, 3, '#80ffff'),
(14, 3, '#008080'),
(15, 1, '#000080'); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbproductdesired 
--

CREATE TABLE  tbproductdesired  (
   iddesired  int NOT NULL,
   idclient  int DEFAULT NULL,
   idproduct  int DEFAULT NULL,
   active  char(1) NOT NULL,
   dateactive  date NOT NULL
) ;
 GO

--
-- Volcado de datos para la tabla  tbproductdesired 
--

INSERT INTO  tbproductdesired  ( iddesired ,  idclient ,  idproduct ,  active ,  dateactive ) VALUES
(1, 1, 1, '0', '2017-01-29'),
(2, 1, 2, '1', '2017-01-30'),
(3, 1, 1, '1', '2017-01-30'),
(4, 5, 5, '1', '2017-02-01'); 
  GO
*/
-- --------------------------------------------------------
/*
--
-- Estructura de tabla para la tabla  tbproductliked 
--

CREATE TABLE  tbproductliked  (
   idLiked  int NOT NULL identity(1,1) primary key,
   idProduct  int NOT NULL,
   idUser  int NOT NULL,
   liked  varchar(1) NOT NULL
) ; 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbprovince 
--

CREATE TABLE  tbprovince  (
   idProvince  int NOT NULL,
   nameProvince  varchar(50) NOT NULL
) ; 
  GO

--
-- Volcado de datos para la tabla  tbprovince 
--

INSERT INTO  tbprovince  ( idProvince ,  nameProvince ) VALUES
(1, 'San Jose'),
(2, 'Alajuela'),
(3, 'Cartago'),
(4, 'Heredia'),
(5, 'Guanacaste'),
(6, 'Puntarenas'),
(7, 'Limon'); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbpurchasingsupplier 
--

CREATE TABLE  tbpurchasingsupplier  (
   idPurchase  int NOT NULL,
   billNum  int NOT NULL,
   idProduct  int NOT NULL,
   idSupplier  int NOT NULL,
   datePurchases  date NOT NULL,
   descriptionPurchases  varchar(200) NOT NULL,
   totalPurchases  int NOT NULL,
   grossPrice  int NOT NULL,
   netPrice  int NOT NULL,
   received  char(1) NOT NULL
) ; 
  GO

--
-- Volcado de datos para la tabla  tbpurchasingsupplier 
--

INSERT INTO  tbpurchasingsupplier  ( idPurchase ,  billNum ,  idProduct ,  idSupplier ,  datePurchases ,  descriptionPurchases ,  totalPurchases ,  grossPrice ,  netPrice ,  received ) VALUES
(1, 1, 1, 2, '2017-03-04', '12', 10, 164192, 23456, '1'),
(2, 3, 3, 5, '2017-03-05', '35', 6, 210000616, 30000088, '1'),
(3, 3, 3, 5, '2017-03-05', '35', 7, 210000616, 30000088, '0'),
(4, 1, 1, 2, '2017-03-05', '12', 5, 164192, 23456, '0'),
(5, 4, 4, 3, '2017-03-05', '43', 6, 2147483647, 656767678, '0'),
(6, 5, 5, 2, '2017-03-05', '52', 5, 2415000, 345000, '0'); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbpurchasingsupplierpayable 
--

CREATE TABLE  tbpurchasingsupplierpayable  (
   idPurchase  int NOT NULL,
   billNum  int NOT NULL,
   idProduct  int NOT NULL,
   idSupplier  int NOT NULL,
   datePurchases  date NOT NULL,
   descriptionPurchases  varchar(200) NOT NULL,
   totalPurchases  int NOT NULL,
   grossPrice  int NOT NULL,
   netPrice  int NOT NULL,
   canceled  int NOT NULL,
   received  char(1) NOT NULL
) ; 
  GO

--
-- Volcado de datos para la tabla  tbpurchasingsupplierpayable 
--

INSERT INTO  tbpurchasingsupplierpayable  ( idPurchase ,  billNum ,  idProduct ,  idSupplier ,  datePurchases ,  descriptionPurchases ,  totalPurchases ,  grossPrice ,  netPrice ,  canceled ,  received ) VALUES
(1, 1, 1, 2, '2017-03-04', '12', 5, 164192, 23456, 0, '0'),
(2, 5, 5, 2, '2017-03-05', '52', 3, 2415000, 345000, 0, '0'),
(3, 4, 4, 3, '2017-03-05', '43', 6, 2147483647, 656767678, 0, '0'),
(4, 1, 1, 2, '2017-03-05', '12', 4, 164192, 23456, 0, '0'),
(5, 4, 4, 3, '2017-03-05', '43', 6, 2147483647, 656767678, 0, '0'),
(6, 3, 3, 5, '2017-03-05', '35', 4, 210000616, 30000088, 0, '0'); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbsearch 
--

CREATE TABLE  tbsearch  (
   idSearch  int NOT NULL,
   idProduct  int NOT NULL,
   idClient  int NOT NULL
) ; 
  GO

--
-- Volcado de datos para la tabla  tbsearch 
--

INSERT INTO  tbsearch  ( idSearch ,  idProduct ,  idClient ) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 4, 1),
(4, 5, 1),
(5, 1, 1),
(6, 3, 1),
(7, 4, 1),
(8, 5, 1),
(9, 1, 1),
(10, 3, 1),
(11, 4, 1),
(12, 5, 1),
(13, 1, 1),
(14, 3, 1),
(15, 4, 1),
(16, 5, 1),
(17, 1, 1),
(18, 3, 1),
(19, 4, 1),
(20, 5, 1),
(21, 1, 1),
(22, 3, 1),
(23, 4, 1),
(24, 5, 1),
(25, 1, 1),
(26, 3, 1),
(27, 4, 1),
(28, 5, 1),
(29, 1, 1),
(30, 3, 1),
(31, 4, 1),
(32, 5, 1),
(33, 1, 1),
(34, 3, 1),
(35, 4, 1),
(36, 5, 1),
(37, 1, 1),
(38, 3, 1),
(39, 4, 1),
(40, 5, 1),
(41, 1, 1),
(42, 3, 1),
(43, 4, 1),
(44, 5, 1),
(45, 1, 1),
(46, 3, 1),
(47, 4, 1),
(48, 5, 1),
(49, 1, 1),
(50, 1, 1),
(51, 5, 1),
(52, 1, 1),
(53, 3, 1),
(54, 5, 1),
(55, 1, 1),
(56, 5, 1),
(57, 1, 1),
(58, 3, 1),
(59, 4, 1),
(60, 5, 1),
(61, 1, 1),
(62, 3, 1),
(63, 4, 1),
(64, 5, 1); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbsexualpreferences 
--

CREATE TABLE  tbsexualpreferences  (
   idSex  int NOT NULL,
   nameSex  varchar(30) NOT NULL
) ; 
GO

--
-- Volcado de datos para la tabla  tbsexualpreferences 
--

INSERT INTO  tbsexualpreferences  ( idSex ,  nameSex ) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Asexual'),
(4, 'Bisexual'),
(5, 'Lesbian'),
(6, 'Homosexual'),
(7, 'TransMascFem'),
(8, 'TransFemMasc'); 
GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbspecificationproduct 
--

CREATE TABLE  tbspecificationproduct  (
   idspecification  int NOT NULL,
   idproduct  int NOT NULL,
   namespecification  varchar(100) NOT NULL,
   valuespecification  varchar(200) NOT NULL
) ;
 GO

--
-- Volcado de datos para la tabla  tbspecificationproduct 
--

INSERT INTO  tbspecificationproduct  ( idspecification ,  idproduct ,  namespecification ,  valuespecification ) VALUES
(1, 1, 'Disco duro jaja', '32 GB'),
(2, 1, 'RAM', '16 GB'),
(3, 24, 'prueba', 'prueba2'); 
GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbstock 
--

CREATE TABLE  tbstock  (
   idStock  int NOT NULL,
   idProduct  int NOT NULL,
   idStore  int NOT NULL,
   quantity  int NOT NULL,
   levelStock  int NOT NULL
) ; 
GO

--
-- Volcado de datos para la tabla  tbstock 
--

INSERT INTO  tbstock  ( idStock ,  idProduct ,  idStore ,  quantity ,  levelStock ) VALUES
(1, 1, 1, 10, 10),
(2, 2, 1, 10, 10),
(3, 3, 1, 16, 10),
(4, 4, 1, 10, 10);
 GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbstore 
--

CREATE TABLE  tbstore  (
   idStore  int NOT NULL,
   nameStore  varchar(40) NOT NULL,
   telephoneStore  varchar(30) NOT NULL,
   emailStore  varchar(40) NOT NULL
) ;
 GO

--
-- Volcado de datos para la tabla  tbstore 
--

INSERT INTO  tbstore  ( idStore ,  nameStore ,  telephoneStore ,  emailStore ) VALUES
(1, 'lenguajes_b21190', '25342314', 'mgs'); 
GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbsupplier 
--

CREATE TABLE  tbsupplier  (
   idSupplier  int NOT NULL,
   nameSupplier  varchar(40) NOT NULL,
   emailSupplier  varchar(100) NOT NULL,
   telephoneSupplier  varchar(40) NOT NULL,
   active  char(1) NOT NULL
) ; 
  GO

--
-- Volcado de datos para la tabla  tbsupplier 
--

INSERT INTO  tbsupplier  ( idSupplier ,  nameSupplier ,  emailSupplier ,  telephoneSupplier ,  active ) VALUES
(1, 'Blue', 'blue-celulares@blue.com', '123456789', '1'),
(2, 'Huawei', 'huawei@huawei.com', '123456789', '1'),
(3, 'LG', 'celulares@lg.com', '123456789', '1'),
(4, 'Samsung', 'celulares@samsung.com', '123456789', '1'),
(5, 'Iphone', 'iphone@ios.com', '123456789', '1'); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbsuppliertypeproduct 
--

CREATE TABLE  tbsuppliertypeproduct  (
   idTypeProduct  int NOT NULL,
   idSupplierty  int NOT NULL
) ; 
  GO

--
-- Volcado de datos para la tabla  tbsuppliertypeproduct 
--

INSERT INTO  tbsuppliertypeproduct  ( idTypeProduct ,  idSupplierty ) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbsupplierxproduct 
--

CREATE TABLE  tbsupplierxproduct  (
   idSupplierty  int NOT NULL,
   idProduct  int NOT NULL
) ; 
GO

--
-- Volcado de datos para la tabla  tbsupplierxproduct 
--

INSERT INTO  tbsupplierxproduct  ( idSupplierty ,  idProduct ) VALUES
(2, 1),
(2, 5),
(3, 4),
(4, 2),
(5, 3); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbtypeaccount 
--

CREATE TABLE  tbtypeaccount  (
   idtypeaccount  int NOT NULL,
   nametypeaccount  varchar(300) DEFAULT NULL
) ; 
GO

--
-- Volcado de datos para la tabla  tbtypeaccount 
--

INSERT INTO  tbtypeaccount  ( idtypeaccount ,  nametypeaccount ) VALUES
(1, 'Mastercard'),
(2, 'Visa'); 
  GO

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla  tbtypeproduct 
--

CREATE TABLE  tbtypeproduct  (
   idTypeProduct  int NOT NULL,
   nameTypeProduct  varchar(100) NOT NULL,
   active  char(1) NOT NULL
) ; 
  GO

--
-- Volcado de datos para la tabla  tbtypeproduct 
--

INSERT INTO  tbtypeproduct  ( idTypeProduct ,  nameTypeProduct ,  active ) VALUES
(1, 'Celulares', '1'),
(2, 'Computadoras', '1'),
(3, 'Pantalla', '1'),
(4, 'Pantallas', '0'),
(5, 'Pantallas', '0'),
(6, 'Pantallas', '0'),
(7, 'Pantallas', '0'),
(8, 'Pantallas', '0'),
(9, 'Pantallas', '0'),
(10, 'Pantallas', '0'),
(11, 'Pantallas', '0'),
(12, 'Blu-ray', '0'); 
  GO

--
-- Índices para tablas volcadas
--
*/
--
-- Indices de la tabla  tbaccount 
/**
ALTER TABLE  tbaccount 
  ADD PRIMARY KEY ( idAccount ); 
  GO

--
-- Indices de la tabla  tbadministrator 
--
ALTER TABLE  tbadministrator 
  ADD PRIMARY KEY ( idAdministrator );
   GO

--
-- Indices de la tabla  tbcanceledsales 
--
ALTER TABLE  tbcanceledsales 
  ADD PRIMARY KEY ( idcanceledsales );
   GO

--
-- Indices de la tabla  tbcanton 
--
ALTER TABLE  tbcanton 
  ADD PRIMARY KEY ( idCanton ); 
  GO

--
-- Indices de la tabla  tbclient 
--
ALTER TABLE  tbclient 
  ADD PRIMARY KEY ( emailClient ); 
  GO

--
-- Indices de la tabla  tbcomment 
--
ALTER TABLE  tbcomment 
  ADD PRIMARY KEY ( idComment ); 
  GO

--
-- Indices de la tabla  tbconcretesales 
--
ALTER TABLE  tbconcretesales 
  ADD PRIMARY KEY ( idconcretesales ); 
  GO

--
-- Indices de la tabla  tbcustomershopping 
--
ALTER TABLE  tbcustomershopping 
  ADD PRIMARY KEY ( idSale ); 
  GO

--
-- Indices de la tabla  tbdistrict 
--
ALTER TABLE  tbdistrict 
  ADD PRIMARY KEY ( idDistrict ); 
  GO

--
-- Indices de la tabla  tbfrecuency 
--
ALTER TABLE  tbfrecuency 
  ADD PRIMARY KEY ( idfrecuency ); 
  GO

--
-- Indices de la tabla  tbimageproduct 
--
ALTER TABLE  tbimageproduct 
  ADD PRIMARY KEY ( idImage ); 
  GO

--
-- Indices de la tabla  tblike 
--
ALTER TABLE  tblike 
  ADD PRIMARY KEY ( idlike ); 
  GO

--
-- Indices de la tabla  tboffer 
--
ALTER TABLE  tboffer 
  ADD PRIMARY KEY ( idOffer ); 
  GO

--
-- Indices de la tabla  tboutlay 
--
ALTER TABLE  tboutlay 
  ADD PRIMARY KEY ( idOutlay ); 
  GO

--
-- Indices de la tabla  tbproduct 
--
ALTER TABLE  tbproduct 
  ADD PRIMARY KEY ( idProduct ); 
  GO

--
-- Indices de la tabla  tbproductcolor 
--
ALTER TABLE  tbproductcolor 
  ADD PRIMARY KEY ( idcolor , idproduct ); 
  GO

--
-- Indices de la tabla  tbproductdesired 
--
ALTER TABLE  tbproductdesired 
  ADD PRIMARY KEY ( iddesired ); 
  GO

--
-- Indices de la tabla  tbproductliked 
--
ALTER TABLE  tbproductliked 
  ADD PRIMARY KEY ( idUser , idProduct) ; 
  GO

--
-- Indices de la tabla  tbprovince 
--
ALTER TABLE  tbprovince 
  ADD PRIMARY KEY ( idProvince ); 
  GO

--
-- Indices de la tabla  tbpurchasingsupplier 
--
ALTER TABLE  tbpurchasingsupplier 
  ADD PRIMARY KEY ( idPurchase ); 
  GO

--
-- Indices de la tabla  tbpurchasingsupplierpayable 
--
ALTER TABLE  tbpurchasingsupplierpayable 
  ADD PRIMARY KEY ( idPurchase ); 
  GO

--
-- Indices de la tabla  tbsearch 
--
ALTER TABLE  tbsearch 
  ADD PRIMARY KEY ( idSearch ); 
  GO

--
-- Indices de la tabla  tbspecificationproduct 
--
ALTER TABLE  tbspecificationproduct 
  ADD PRIMARY KEY ( idspecification , idproduct ); 
  GO

--
-- Indices de la tabla  tbstock 
--
ALTER TABLE  tbstock 
  ADD PRIMARY KEY ( idStock ); 
  GO

--
-- Indices de la tabla  tbstore 
--
ALTER TABLE  tbstore 
  ADD PRIMARY KEY ( idStore ); 
  GO

--
-- Indices de la tabla  tbsupplier 
--
ALTER TABLE  tbsupplier 
  ADD PRIMARY KEY ( idSupplier ); 
  GO

--
-- Indices de la tabla  tbsuppliertypeproduct 
--
ALTER TABLE  tbsuppliertypeproduct 
  ADD PRIMARY KEY ( idTypeProduct , idSupplierty ); 
  GO

--
-- Indices de la tabla  tbsupplierxproduct 
--
ALTER TABLE  tbsupplierxproduct 
  ADD PRIMARY KEY ( idSupplierty , idProduct ); 
  GO

--
-- Indices de la tabla  tbtypeaccount 
--
ALTER TABLE  tbtypeaccount 
  ADD PRIMARY KEY ( idtypeaccount ); 
  GO

--
-- Indices de la tabla  tbtypeproduct 
--
ALTER TABLE  tbtypeproduct 
  ADD PRIMARY KEY ( idTypeProduct ); 
  GO

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla  tblike 
--


--
-- Filtros para la tabla  tbaccount 
--
ALTER TABLE  tbaccount 
  ADD CONSTRAINT  tba_fk_typeaccount  FOREIGN KEY ( typeAccount ) REFERENCES  tbtypeaccount  ( idtypeaccount ); 
  GO
  ALTER TABLE  tbaccount 
  ADD CONSTRAINT  tbaccount_ibfk_1  FOREIGN KEY ( idClient ) REFERENCES  tbclient  ( idClient ); 
  GO

--
-- Filtros para la tabla  tbadministrator 
--
ALTER TABLE  tbadministrator 
  ADD CONSTRAINT  tbadministrator_ibfk_1  FOREIGN KEY ( idStore ) REFERENCES  tbstore  ( idStore ); 
  GO

--
-- Filtros para la tabla  tbcanceledsales 
--
ALTER TABLE  tbcanceledsales 
  ADD CONSTRAINT  tbcanceledsales_ibfk_1  FOREIGN KEY ( idclient ) REFERENCES  tbclient  ( idClient ); 
  GO
  ALTER TABLE  tbcanceledsales
  ADD CONSTRAINT  tbcanceledsales_ibfk_2  FOREIGN KEY ( idproduct ) REFERENCES  tbproduct  ( idProduct ); 
  GO

--
-- Filtros para la tabla  tbcanton 
--
ALTER TABLE  tbcanton 
  ADD CONSTRAINT  tbcanton_ibfk_1  FOREIGN KEY ( idProvince ) REFERENCES  tbprovince  ( idProvince ); 
  GO

--
-- Filtros para la tabla  tbconcretesales 
--
ALTER TABLE  tbconcretesales 
  ADD CONSTRAINT  FK_CS  FOREIGN KEY ( idSale ) REFERENCES  tbcustomershopping  ( idSale ); 
  GO
  ALTER TABLE  tbconcretesales 
  ADD CONSTRAINT  tbconcretesales_ibfk_1  FOREIGN KEY ( idclient ) REFERENCES  tbclient  ( idClient );go
  ALTER TABLE  tbconcretesales
  ADD CONSTRAINT  tbconcretesales_ibfk_2  FOREIGN KEY ( idproduct ) REFERENCES  tbproduct  ( idProduct ); 
  GO

--
-- Filtros para la tabla  tbdistrict 
--
ALTER TABLE  tbdistrict 
  ADD CONSTRAINT  tbdistrict_ibfk_1  FOREIGN KEY ( idCanton ) REFERENCES  tbcanton  ( idCanton ); 
  GO

--
-- Filtros para la tabla  tbimageproduct 
--
ALTER TABLE  tbimageproduct 
  ADD CONSTRAINT  tbimageproduct_ibfk_1  FOREIGN KEY ( idProduct ) REFERENCES  tbproduct  ( idProduct ); 
  GO

--
-- Filtros para la tabla  tboffer 
--
ALTER TABLE  tboffer 
  ADD CONSTRAINT  tboffer_ibfk_1  FOREIGN KEY ( idProduct ) REFERENCES  tbproduct  ( idProduct ); 
  GO

--
-- Filtros para la tabla  tbproduct 
--
ALTER TABLE  tbproduct 
  ADD CONSTRAINT  tbproduct_ibfk_1  FOREIGN KEY ( idStore ) REFERENCES  tbstore  ( idStore ); 
  GO
  ALTER TABLE  tbproduct
  ADD CONSTRAINT  tbproduct_ibfk_2  FOREIGN KEY ( idTypeProduct ) REFERENCES  tbtypeproduct  ( idTypeProduct ); 
  GO

--
-- Filtros para la tabla  tbproductdesired 
--
ALTER TABLE  tbproductdesired 
  ADD CONSTRAINT  tbproductdesired_ibfk_1  FOREIGN KEY ( idclient ) REFERENCES  tbclient  ( idClient ); 
  GO
ALTER TABLE  tbproductdesired
  ADD CONSTRAINT  tbproductdesired_ibfk_2  FOREIGN KEY ( idproduct ) REFERENCES  tbproduct  ( idProduct ); 
  GO

--
-- Filtros para la tabla  tbsearch 
--
ALTER TABLE  tbsearch 
  ADD CONSTRAINT  fKsearchClient  FOREIGN KEY ( idClient ) REFERENCES  tbclient  ( idClient ) ON DELETE CASCADE ON UPDATE NO ACTION; 
  GO
  ALTER TABLE  tbsearch 
  ADD CONSTRAINT  fKsearchProduct  FOREIGN KEY ( idProduct ) REFERENCES  tbproduct  ( idProduct ) ON DELETE CASCADE ON UPDATE NO ACTION; 
  GO

--
-- Filtros para la tabla  tbsupplierxproduct 
--
ALTER TABLE  tbsupplierxproduct 
  ADD CONSTRAINT  tbsupplierxproduct_ibfk_1  FOREIGN KEY ( idProduct ) REFERENCES  tbproduct  ( idProduct ); 
  GO

*/

CREATE PROCEDURE sp_is_client @nick_ varchar(40), @pass_ varchar(40) 
	
AS
BEGIN
	
	
	SELECT [idClient] as id, 
	[emailClient] as email,
	[userClient] as nick, 
	[passwordClient] as pass,
	[nameClient] as nombre,
	[surname1Client] as apellido1,
	[surname2Client] as apellido2,
	[sexClient] as sexo,
	[telephoneClient] as tel,
	[provinceClient] as provincia,
	[cantonClient] as canton,
	[districtClient] as distrito,
	[addressClient1] as dir1,
	[addressClient2] as dir2,
	[active],[userType] 
	from [dbo].[tbclient]
	where [dbo].[tbclient].[passwordClient]=@pass_ 
	AND ( [dbo].[tbclient].[userClient] =@nick_ 
	or [dbo].[tbclient].[emailClient] = @nick_
	)

END
GO


