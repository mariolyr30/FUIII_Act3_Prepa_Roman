-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 01:02:13
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdepccj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `DNI` varchar(10) NOT NULL,
  `Nombre(s)` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(25) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Domicilio` varchar(60) DEFAULT NULL,
  `Fecha de nacimiento` date DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Materia` varchar(25) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Grupos` char(1) DEFAULT NULL,
  `Salon` char(2) DEFAULT NULL,
  `Turno` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`DNI`, `Nombre(s)`, `Apellidos`, `Telefono`, `Domicilio`, `Fecha de nacimiento`, `Sexo`, `Materia`, `Email`, `Grupos`, `Salon`, `Turno`) VALUES
('5678490835', 'Luis Angel', 'Ramirez Paez', '2117788973', 'Calle Ramurai #2346 Col. Saltos Grises', '1980-03-05', 'M', 'Fisica', 'luisangelrp@gmail.com', '4', '12', 'V'),
('6753625516', 'Guillermo Agustin', 'Pelaes Tamarillo', '9987654430', 'Calle Solobia #1829 Col. Durango', '1975-12-12', 'M', 'Cálculo Integral', 'guillermoagustinpt@gmail.com', '6', '14', 'M'),
('8746537209', 'Amalia ', 'Mendoza Perez', '6567865541', 'Calle Hidalgo #9896 Col. Colorado', '1990-08-26', 'F', 'Astrología', 'amaliamp@gmail.com', '8', '23', 'M'),
('8887653452', 'Ubaldo', 'Landa Uscanga', '7776285236', 'Calle Ocampo #556 Col. Villa hermosa', '1883-09-13', 'M', 'TIC\'S', 'ubaldolu@gmail.com', '8', '28', 'M'),
('9008324512', 'Karla Rosita', 'Lopez Libanoi', '6735426617', 'Calle Estopa #3345 Col. Kuwai', '1994-04-01', 'F', 'Geografía ', 'karlarositall@gamilc.om', '6', '34', 'V');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;