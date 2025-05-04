-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2025 a las 18:28:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `briefcase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `idimg` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`idimg`, `img`) VALUES
(16775248, '16775248_Capterereura.PNG'),
(18259547, '18259547_11.PNG'),
(19737405, '19737405_9.PNG'),
(20458306, '20458306_encrip.PNG'),
(20662009, '20662009_16.PNG'),
(23153682, '23153682_Capt8787ura.PNG'),
(26048272, '26048272_rickymorty.PNG'),
(27208387, '27208387_16.PNG'),
(27529283, '27529283_Captyttura.PNG'),
(27849987, '27849987_Capttrrrura.PNG'),
(30568417, '30568417_log.PNG'),
(31988880, '31988880_10.PNG'),
(36320925, '36320925_10.PNG'),
(36583361, '36583361_8.PNG'),
(38150733, '38150733_Cyuiaptura.PNG'),
(39556534, '39556534_18.PNG'),
(42827830, '42827830_15.PNG'),
(46811630, '46811630_14.PNG'),
(47998837, '47998837_11.PNG'),
(49699037, '49699037_Captura.PNG'),
(50837638, '50837638_Cayyptura.PNG'),
(53542887, '53542887_Cayuyuptura.PNG'),
(54007509, '54007509_Cuiuuiaptura.PNG'),
(54325420, '54325420_Captuura.PNG'),
(54641171, '54641171_des.PNG'),
(55505864, '55505864_3.PNG'),
(57082137, '57082137_6.PNG'),
(57128171, '57128171_4.PNG'),
(58263187, '58263187_14.PNG'),
(60397309, '60397309_Catyptura.PNG'),
(60924079, '60924079_1.PNG'),
(62301591, '62301591_Capttyyura.PNG'),
(62939978, '62939978_15.PNG'),
(64194377, '64194377_Captuttyra.PNG'),
(64973311, '64973311_2.PNG'),
(66152052, '66152052_1.PNG'),
(67664797, '67664797_5.PNG'),
(68014823, '68014823_Captyuyyuura.PNG'),
(69034918, '69034918_2.PNG'),
(72294461, '72294461_Captrrrtura.PNG'),
(72410016, '72410016_6.PNG'),
(74731185, '74731185_4.PNG'),
(78170356, '78170356_Capturatyytty.PNG'),
(78472566, '78472566_7.PNG'),
(78560229, '78560229_12.PNG'),
(82544211, '82544211_Capttytura.PNG'),
(83146086, '83146086_Cayuyptura.PNG'),
(84296242, '84296242_3.PNG'),
(86276538, '86276538_9.PNG'),
(88540578, '88540578_7.PNG'),
(89679123, '89679123_5.PNG'),
(90686105, '90686105_12.PNG'),
(91073219, '91073219_17.PNG'),
(92161126, '92161126_13.PNG'),
(93595801, '93595801_Captyuura.PNG'),
(96017627, '96017627_8.PNG'),
(96430697, '96430697_Cuyyuyptura.PNG'),
(96958981, '96958981_13.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `name`, `email`, `password`, `image`) VALUES
(1, 'pipe2000', 'Andres Gonzalez', 'andrespino2000@gmail.com', 'anapino123', 'andres.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile_description`
--

CREATE TABLE `profile_description` (
  `DesProfile` varchar(1000) DEFAULT NULL,
  `idProfile` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profile_description`
--

INSERT INTO `profile_description` (`DesProfile`, `idProfile`) VALUES
('Estudiante de Ingeniería de Sistemas en la Corporación Unificada Nacional de Educación Superior. Técnico académico laboral por competencias de administración de empresas con manejo del idioma inglés A1 y con experiencia en el desarrollo web. Caracterizado por ser una persona inteligente, centrada, proactiva, que sigue las normas socialmente establecidas y que cumple con los objetivos propuestos.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `github` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `projet`
--

INSERT INTO `projet` (`id`, `name`, `description`, `github`, `link`, `image`) VALUES
(1, 'Administrador de usuarios con Flask', 'Este es un pequeño proyecto realizado con el FrameWork Flask de Python. es un pequeño CRUD para la creación de usuarios  y la administración de los mismos.<br>\r\nUsuario: root y Contraseña: root.<br><br>\r\nTecnologías: Flask-Python, Bootstrap.', 'https://github.com/pipe2000-techs/crudFlaskPython', 'https://pipe2000.pythonanywhere.com/login', 'flask.png'),
(2, 'Administrador de productos con el framework Flight de php', 'Administrador de productos con el FrameWork de php Flight es un Crud.<br>\r\nUsuario: root.<br>\r\nCotraseña : root.<br><br>\r\nTecnología: php-flight, Bootstrap, MySql.\r\n\r\n', 'https://github.com/pipe2000-techs/Administrador-de-productos-con-el-framework-Flight-de-php', 'https://suprasegmental-deck.000webhostapp.com/preu_flight%20_php/', 'flight.png'),
(56, 'Encriptador con Php', 'Encriptado con Php, con clave de encriptación y desencriptación. este proyecto fue relazado sin utilizar  funciones especiales para encriptar de Php.\r\n<br><br>\r\nTecnología: Php, Bootstrap.', 'https://github.com/pipe2000-techs/Encriptador-con-Php', 'https://suprasegmental-deck.000webhostapp.com/encriptacion/', '1665591053_pngegg.png'),
(57, 'Tienda Pipe Grow', 'Este proyecto se trata de una pequeña tienda para un growshop con su respectivo administrador. genera facturas y las envía por correo electrónico a los respectivos clientes. <br><br>\r\n\r\nTecnologías: php, MySql, Bootstrap.', 'https://github.com/pipe2000-techs/Tienda-Pipegrow', 'https://www.pipegrow.x10.mx/j', '1673193477_logo.png'),
(58, 'React con api rick y morty', 'Pequeña aplicación donde muestra todos Personajes de la serie rick y morty, donde muestra la imagen, el nombre, el origen y si esta vino. también tiene un paginación de los personajes.<br><br>\r\nTecnología: Js, React, Api Rick and Morty.', 'https://github.com/pipe2000-techs/Reack-api-rick-and-morty', 'https://pipe2000-techs.github.io/Reack-api-rick-and-morty/', '1665592359_1660526891_ramjpg.jpg'),
(15201288, 'Administrador de usuarios con cambio de contraseña ', 'Este proyecto es un administrador de usuarios que gurda y administra la información del usuario como nombre, creo, fecha de creación, fecha de la última actualización, imagen del usuario. Si el usuario olvido su contraseña la pueda cambiar por medio de un código que le llega al correo electrónico. \r\n<br>\r\nUsuario y Contraseña: root <br><br>\r\nTecnologías:  Php, JavaScript, React, MySQL, Vite.\r\n', 'https://github.com/pipe2000-techs/Loquin-react-php-page', 'https://gjuggfhjhhujk.000webhostapp.com/', '1673829740_perfil.png'),
(94266812, 'Administrador de arriendos', 'Este administrador ayudara a gestionar los pisos y costos de los arriendos, donde automáticamente le llegara un correo a cada usuario recordándole que ya se le venció el mes y debe paga donde el inquilino colocara el comprovante de pago y si es valido será aprobado el pago. el sistema tiene una pequeña grafica donde muestra el total recaudado en cada mes atreves del año. <br><br>\r\n\r\nTecnologías: Php, JavaScript, AlpineJs, MySql.  ', 'https://www.youtube.com/watch?v=V1lGJWUzNVs', 'https://www.youtube.com/watch?v=V1lGJWUzNVs', '1675644646_4e6c78d321c54f77baa40e6539cb5c86.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projet_images`
--

CREATE TABLE `projet_images` (
  `id` int(11) NOT NULL,
  `idProjet` int(11) NOT NULL,
  `idImages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `projet_images`
--

INSERT INTO `projet_images` (`id`, `idProjet`, `idImages`) VALUES
(25, 58, 26048272),
(52, 56, 20458306),
(53, 56, 54641171),
(54, 2, 60397309),
(55, 2, 62301591),
(56, 2, 54325420),
(57, 2, 30568417),
(58, 2, 78170356),
(59, 2, 64194377),
(62, 1, 50837638),
(63, 1, 96430697),
(64, 1, 53542887),
(65, 1, 83146086),
(66, 15201288, 49699037),
(67, 15201288, 23153682),
(68, 15201288, 82544211),
(69, 15201288, 72294461),
(70, 15201288, 68014823),
(72, 15201288, 54007509),
(73, 15201288, 27849987),
(74, 15201288, 93595801),
(75, 15201288, 16775248),
(76, 15201288, 27529283),
(77, 15201288, 38150733),
(78, 57, 60924079),
(79, 57, 69034918),
(80, 57, 55505864),
(81, 57, 57128171),
(82, 57, 67664797),
(83, 57, 72410016),
(84, 57, 78472566),
(85, 57, 96017627),
(86, 57, 86276538),
(87, 57, 31988880),
(88, 57, 18259547),
(89, 57, 90686105),
(90, 57, 92161126),
(91, 57, 46811630),
(92, 57, 42827830),
(93, 57, 20662009),
(94, 94266812, 66152052),
(95, 94266812, 64973311),
(96, 94266812, 84296242),
(97, 94266812, 74731185),
(98, 94266812, 89679123),
(99, 94266812, 57082137),
(100, 94266812, 88540578),
(101, 94266812, 36583361),
(102, 94266812, 19737405),
(103, 94266812, 36320925),
(104, 94266812, 47998837),
(105, 94266812, 78560229),
(106, 94266812, 96958981),
(107, 94266812, 58263187),
(108, 94266812, 62939978),
(109, 94266812, 27208387),
(110, 94266812, 91073219),
(111, 94266812, 39556534);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `percent` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `technology`
--

INSERT INTO `technology` (`id`, `name`, `icon`, `percent`) VALUES
(1, 'Php', 'php.png', 100),
(2, 'python', 'python.png', 100),
(3, 'flask', 'flask.png', 120),
(4, 'react', 'react.png', 120),
(5, 'laravel', 'laravel.png', 130),
(6, 'mysql', 'mysql.png', 130),
(7, 'flight-php', 'flight-php.png', 250),
(10, 'Alpine', '1665590043_alpine_long.svg', 220),
(13, 'JavaScript ', '1670715044_1642808502_pngegg.png', 150),
(14, 'tekinter', '1681693893_tkinter-tutorial.png', 150);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimg`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projet_images`
--
ALTER TABLE `projet_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProjet` (`idProjet`),
  ADD KEY `idImages` (`idImages`);

--
-- Indices de la tabla `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1673744795;

--
-- AUTO_INCREMENT de la tabla `projet_images`
--
ALTER TABLE `projet_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `projet_images`
--
ALTER TABLE `projet_images`
  ADD CONSTRAINT `projet_images_ibfk_1` FOREIGN KEY (`idProjet`) REFERENCES `projet` (`id`),
  ADD CONSTRAINT `projet_images_ibfk_2` FOREIGN KEY (`idImages`) REFERENCES `images` (`idimg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
