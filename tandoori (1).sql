-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2024 a las 08:01:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tandoori`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `Titulo_about` varchar(70) NOT NULL,
  `Url_about` varchar(500) NOT NULL,
  `Contenido_about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `Titulo_about`, `Url_about`, `Contenido_about`) VALUES
(1, 'ABOUT US', 'https://www.bing.com/images/search?view=detailV2&ccid=IAsTqRdw&id=2BC6DD7C8E11AE92BD6CFEA00BC89700B57B409E&thid=OIP.IAsTqRdwBSu_iTXfnEdv0wHaE7&mediaurl=https%3a%2f%2fwww.travelingeast.com%2fwp-content%2fuploads%2f2013%2f04%2fDepositphotos_7932088_xl-2015-scaled.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.200b13a91770052bbf8935df9c476fd3%3frik%3dnkB7tQCXyAug%252fg%26pid%3dImgRaw%26r%3d0&exph=1706&expw=2560&q=LA+INDIA+&simid=607992203922387986&FORM=IRPRST&ck=0B5BD08DBC475915A89C9F0C467C390A', 'Our team is passionate about food and committed to making your visit memorable. From our skilled chefs to our friendly servers, everyone plays a role in delivering a great experience.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Titulo_contact` varchar(70) NOT NULL,
  `email_contact` varchar(500) NOT NULL,
  `name_contact` varchar(300) NOT NULL,
  `lastname_contact` varchar(300) NOT NULL,
  `message_contact` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `Titulo_contact`, `email_contact`, `name_contact`, `lastname_contact`, `message_contact`) VALUES
(1, 'HOW CAN WE HELP YOU?', 'EMAIL', 'NAME', 'LAST NAME', 'MESSAGE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desserts`
--

CREATE TABLE `desserts` (
  `id` int(11) NOT NULL,
  `Titulo_desserts` varchar(70) NOT NULL,
  `Url_desserts` varchar(500) NOT NULL,
  `Contenido_desserts` longtext NOT NULL,
  `Fecha_desserts` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `Titulo_drinks` varchar(70) NOT NULL,
  `Url_drinks` varchar(500) NOT NULL,
  `Contenido_drinks` longtext NOT NULL,
  `Fecha_drinks` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `Titulo_menu` varchar(70) NOT NULL,
  `Url_menu` varchar(500) NOT NULL,
  `Contenido_menu` longtext NOT NULL,
  `Fecha_menu` date NOT NULL,
  `tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `Titulo_menu`, `Url_menu`, `Contenido_menu`, `Fecha_menu`, `tipo`) VALUES
(9, 'GARAM MASALA', 'https://mejorconsalud.as.com/wp-content/uploads/2021/10/platos-india.jpg', 'Spices have the ability to transform the most tasteless of dishes into a delicacy. The combinations are endless, as numerous as the cooks themselves.', '2001-12-21', 'Comida'),
(10, 'INDIAN VEGETABLE ', 'https://i.blogs.es/e32045/samosas-vegetales/840_560.jpg', '\r\nStaying true to our devotion to the world of frying, today we bring you an extremely easy recipe from Indian cuisine that will satisfy your cravings for fried food with minimal hassle, and if you wish, you can even bake them.\r\n', '2009-08-12', 'Comida'),
(11, 'Dudh Badam', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2023/04/badam-milk-recipe.jpg.webp', 'Dudh Badam is the way in which smoothies are referred to in India. ', '2003-07-21', 'Bebida'),
(12, 'Rose milk', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Xv39W5pd-QjbvxLRL_wH8YzwghcBll7cOcfkMjX7jL05A0LLhpZyeKCknXjuOFL0D7I&usqp=CAU', ' Rose milk could be considered another type of lassi.  Essentially, it consists of drinking a rose-flavored milkshake with a very sweet taste. The aroma and flavor it offers are unlike anything commonly consumed in Spain and are very comforting and appealing to our palate.  The aroma and flavor it offers are unlike anything commonly consumed in Spain and are very comforting and appealing to our palate. ', '2017-03-12', 'Bebida'),
(16, 'Masala Chai', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBY0VjsrwN5-FvjDgo3nL6v911ArkdzLPfng&usqp=CAU', 'Masala Chai, traditional in southern India, is a very special tea preparation in which black tea is combined with various spices. ', '2001-12-21', 'Bebida'),
(17, 'Mango lassi', 'https://gastronomadas.com.mx/wp-content/uploads/2021/09/5.png', 'Lassi is a beverage made from yogurt, traditional to northern India, typically served very cold.', '2001-12-21', 'Bebida'),
(18, 'Nimbu Pani', 'https://i.blogs.es/257c77/1366_2000/450_1000.jpeg', 'Nimbu Pani is a traditional Indian drink that is traditionally used to accompany meals. Its appearance and some of its ingredients will remind us of our classic lemonades. ', '2001-12-21', 'Bebida'),
(19, 'Golden Milk', 'https://i.blogs.es/50ca81/desi.foodbie_26262525_169003953829676_7064043431693123584_n/650_1200.jpeg', 'Mix water with ground turmeric, cinnamon powder, ground ginger, ground black pepper, and coconut oil.', '2001-12-21', 'Bebida'),
(20, '  CURRY POWDER', 'https://qph.cf2.quoracdn.net/main-qimg-15c4eb94e47b63b52daf4a8a5e23e9ac-lq', 'When we look at recipes from India, Indonesia, o', '2024-05-16', 'Comida'),
(21, 'BASMATI RICE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToKStGPT0O-1xdwu7jMMWD_LDjdW1s6z62VA&usqp=CAU', 'Just like white rice made with other varieties, basmati rice has its tricks and requires a certain process when cooking to achieve optimal results.', '0000-00-00', 'Comida'),
(22, 'RASMALAI', 'https://www.montagud.com/wp-content/uploads/2020/05/cd-articulos48.jpg', 'Rasmalai is a dessert that originated in the western region of Bengal, India. The name of this dessert comes from the words: ras which means nectar or juice and malai, which is cream', '2024-05-25', 'Postre'),
(23, 'PEDA', 'https://www.montagud.com/wp-content/uploads/2020/05/cd-articulos49.jpg', 'Sweet originating from northern India, shaped like a spherical cookie. Its main ingredients are condensed milk, butter, and powdered milk.', '2024-05-13', 'Postre'),
(24, 'KHEER', 'https://www.mdzol.com/u/fotografias/m/2023/4/18/f848x477-1397278_1455081_5050.jpg', 'Kheer is a traditional Indian dessert made with rice, mil', '2024-05-14', 'Postre'),
(25, 'KULFI', 'https://www.montagud.com/wp-content/uploads/2020/05/cd-articulos46.jpg', 'Intensely sweet and dense, kulfi is to Indians what gelato is to Italians. Unlike churned ice cream, kulfi is frozen from boiled milk without churning.', '2024-05-05', 'Postre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pinicio`
--

CREATE TABLE `pinicio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `icono` varchar(100) DEFAULT NULL,
  `texto` longtext DEFAULT NULL,
  `carrusel1` varchar(255) DEFAULT NULL,
  `carrusel2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Volcado de datos para la tabla `pinicio`
--

INSERT INTO `pinicio` (`id`, `titulo`, `icono`, `texto`, `carrusel1`, `carrusel2`) VALUES
(1, 'Bienvenido', 'url', 'Tandoori', 'url', 'url');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_About_Titulo_about` (`Titulo_about`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_Contact_Titulo_contact` (`Titulo_contact`);

--
-- Indices de la tabla `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_Desserts_Titulo_desserts` (`Titulo_desserts`);

--
-- Indices de la tabla `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_Drinks_Titulo_drinks` (`Titulo_drinks`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_Menu_Titulo_menu` (`Titulo_menu`);

--
-- Indices de la tabla `pinicio`
--
ALTER TABLE `pinicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
