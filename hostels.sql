-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2021 a las 16:33:43
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hostels`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hostel`
--

CREATE TABLE `hostel` (
  `idHostel` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Ocupacion` date NOT NULL,
  `Descripcion` text NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `Camas` int(11) NOT NULL,
  `Fotos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hostel`
--

INSERT INTO `hostel` (`idHostel`, `Nombre`, `Ocupacion`, `Descripcion`, `Ciudad`, `Camas`, `Fotos`) VALUES
(1, 'MamaHome', '2021-05-12', 'Ven a buscar nuevas aventuras en Sidney en una casa rural a 5 min de la ciudad y vive la experiencia silvestre local.', 'Sidney', 6, 'hostel-1.jpg'),
(2, 'SweetHome', '2021-05-04', 'Un albergue pensado para las personas que buscan tranquilidad a un costo muy bajo. Vive la experiencia de viajar sola y con seguridad.', 'Madrid', 9, 'hostel-2.jpg'),
(3, 'AnimalHome', '2021-05-12', 'Ven a buscar nuevas aventuras en Sidney en una casa rural a 5 min de la ciudad y vive la experiencia silvestre local.', 'Berlin', 6, 'hostel-3.jpg'),
(4, 'FreeHome', '2021-05-04', 'Un albergue pensado para las personas que buscan tranquilidad a un costo muy bajo. Vive la experiencia de viajar sola y con seguridad.', 'Perú', 9, 'hostel-4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `idJobs` int(11) NOT NULL,
  `jobs` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jobs`
--

INSERT INTO `jobs` (`idJobs`, `jobs`, `descripcion`, `foto`, `pais`, `titulo`) VALUES
(6, 'Voluntier', 'Volunteer in China and discover the Middle Kingdom from a completely different point of view. The massive country offers almost too many incredible sights to explore: from the megacities of Shanghai and Bejing to ancient temples, the Great Wall and the most spectacular natural sights, China will leave you absolutely stunned.', 'job-3', 'Chine', 'Come and Practice English'),
(7, 'Voluntier', 'Volunteer in China and discover the Middle Kingdom from a completely different point of view. The massive country offers almost too many incredible sights to explore: from the megacities of Shanghai and Bejing to ancient temples, the Great Wall and the most spectacular natural sights, China will leave you absolutely stunned.', 'job-4', 'Vietnan', 'Help Children with Homework'),
(8, 'voluntier', 'As a Rainforest and Coastal Conservation volunteer you’ll have the opportunity to get involved in a variety of conservation projects. This opportunity is perfect for anyone who is passionate about conservation, doesn’t mind getting their hands dirty and wants to experience life on the edge of a rainforest.', 'job-1', 'Africa', 'Lenguage Teacher'),
(9, 'Job', 'As a Rainforest and Coastal Conservation volunteer you’ll have the opportunity to get involved in a variety of conservation projects. This opportunity is perfect for anyone who is passionate about conservation, doesn’t mind getting their hands dirty and wants to experience life on the edge of a rainforest.', 'job-2', 'China', 'Photography and Videography');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuarios`
--

CREATE TABLE `registrousuarios` (
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `password_two` varchar(30) NOT NULL,
  `idRegistro` int(11) NOT NULL,
  `tipo_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrousuarios`
--

INSERT INTO `registrousuarios` (`nombre`, `apellidos`, `nombreUsuario`, `password_two`, `idRegistro`, `tipo_rol`) VALUES
('shirley', 'ppppp', 'shirleyp', '123456', 1, 'admin'),
('AAAA', 'AAA', 'AAA', 'AAA', 2, 'usuario'),
('HOLA', 'HOLA', 'HOLA', 'AAA', 3, 'ADMIN'),
('luciana', 'perez', 'luci', '123456', 4, 'admin'),
('juan', 'perez', 'juanita', 'asdasdasd', 5, 'usuario'),
('maria', 'juan', 'mariana', 'asdasd', 6, 'usuario'),
('luis', 'luisito', 'luisito', 'asdasd', 7, 'admin'),
('aaaaa', 'dddd', 'aaaa', 'asas', 8, 'admin'),
('juan', 'antonio', 'juan', '1230', 9, 'usuario'),
('raul', 'raul', 'raul', 'raul', 10, 'usuario'),
('shirley', 'lu', ' shirleylu', '123456', 11, 'admin'),
('juaquin', 'perez', ' juaquin', '13456', 12, 'usuario'),
('mariajuanita', 'juanita', ' juanita', '123456', 13, 'usuario'),
('cecilia', 'porroa', 'cecilia', '123456', 14, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessiones`
--

CREATE TABLE `sessiones` (
  `nombre_usuario` varchar(30) NOT NULL,
  `password_two` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `autentificar` varchar(30) NOT NULL,
  `session` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sessiones`
--

INSERT INTO `sessiones` (`nombre_usuario`, `password_two`, `fecha`, `autentificar`, `session`) VALUES
('shirleylu', '123456', '2021-06-04', 'usuario', 0),
('juanito', '123589', '2021-06-04', 'admin', 0),
('', '', '2021-06-04', '', 0),
('maria', 'maria123456', '2021-06-04', '', 0),
('juaquin', 'juaquin123456', '2021-06-04', '', 0),
('juaquin', '123456', '2021-06-05', '', 0),
('juan', '123456', '2021-06-05', '', 0),
('sdasd', 'asdasd', '2021-06-05', '', 0),
('mari carmen', '1354989', '2021-06-05', 'admin', 1),
('juanita', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('asdasd', 'asdasd', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-05', '', 0),
('cecilia', '123456', '2021-06-07', '', 0),
('cecilia', '123456', '2021-06-07', '', 0),
('cecilia', '123456', '2021-06-07', '', 0),
('cecilia', '123456', '2021-06-07', '', 0),
('cecilia', '123456', '2021-06-07', '', 0),
('cecilia', '123456', '2021-06-07', 'admin', 1),
('cecilia', '123456', '2021-06-07', 'admin', 1),
('cecilia', '123456', '2021-06-07', 'admin', 1),
('cecilia', '123456', '2021-06-07', 'admin', 1),
('cecilia', '123456', '2021-06-07', 'admin', 1),
('cecilia', '123456', '2021-06-08', 'admin', 1),
('cecilia', '123456', '2021-06-08', 'admin', 1),
('cecilia', '123456', '2021-06-09', 'admin', 1),
('cecilia', '123456', '2021-06-10', 'admin', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`idHostel`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`idJobs`);

--
-- Indices de la tabla `registrousuarios`
--
ALTER TABLE `registrousuarios`
  ADD PRIMARY KEY (`idRegistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hostel`
--
ALTER TABLE `hostel`
  MODIFY `idHostel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `idJobs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registrousuarios`
--
ALTER TABLE `registrousuarios`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
