-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2020 a las 19:56:53
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `titulacion_6to_c`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `est_id` int(11) NOT NULL,
  `est_cedula` varchar(10) DEFAULT NULL,
  `est_nombres` varchar(50) DEFAULT NULL,
  `est_apellidos` varchar(50) DEFAULT NULL,
  `est_convencional` varchar(10) DEFAULT NULL,
  `est_celular` varchar(10) DEFAULT NULL,
  `est_correo` varchar(35) DEFAULT NULL,
  `est_direccion` varchar(50) DEFAULT NULL,
  `est_fecha_nacimiento` varchar(15) DEFAULT NULL,
  `est_edad` varchar(2) DEFAULT NULL,
  `est_enfermedad` varchar(25) DEFAULT NULL,
  `est_alergias` varchar(25) DEFAULT NULL,
  `est_tipo_sangre` varchar(5) DEFAULT NULL,
  `est_genero` varchar(15) DEFAULT NULL,
  `est_curso` varchar(15) DEFAULT NULL,
  `est_jornada` varchar(15) DEFAULT NULL,
  `est_trabaja` varchar(2) DEFAULT NULL,
  `est_provincia` varchar(15) DEFAULT NULL,
  `est_ciudad` varchar(35) DEFAULT NULL,
  `est_vive` varchar(15) DEFAULT NULL,
  `est_hermanos` varchar(10) DEFAULT NULL,
  `est_civil` varchar(10) DEFAULT NULL,
  `est_hijos` varchar(7) DEFAULT NULL,
  `est_nombre_ref` varchar(45) DEFAULT NULL,
  `est_apellidos_ref` varchar(45) DEFAULT NULL,
  `est_cedula_ref` varchar(10) DEFAULT NULL,
  `est_tlf_ref` varchar(10) DEFAULT NULL,
  `est_correo_ref` varchar(35) DEFAULT NULL,
  `est_direccion_ref` varchar(45) DEFAULT NULL,
  `est_fecha` varchar(15) DEFAULT NULL,
  `est_foto` text,
  `est_aceptar` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`est_id`, `est_cedula`, `est_nombres`, `est_apellidos`, `est_convencional`, `est_celular`, `est_correo`, `est_direccion`, `est_fecha_nacimiento`, `est_edad`, `est_enfermedad`, `est_alergias`, `est_tipo_sangre`, `est_genero`, `est_curso`, `est_jornada`, `est_trabaja`, `est_provincia`, `est_ciudad`, `est_vive`, `est_hermanos`, `est_civil`, `est_hijos`, `est_nombre_ref`, `est_apellidos_ref`, `est_cedula_ref`, `est_tlf_ref`, `est_correo_ref`, `est_direccion_ref`, `est_fecha`, `est_foto`, `est_aceptar`) VALUES
(1, '0919186008', 'Christian Mateo', 'Calderon Dominguez', '2389282', '0919181818', 'ghpguayaquil@gmail.com', '27 y pancho segura', '2', '20', 'Ninguna', 'ninguna', 'A-', 'Masculino', 'InformatÃ­ca', 'Si', 'Ma', 'Guayas', 'Guayaquil', 'Solo', 'Dos', 'Soltero', 'Ninguno', 'roberto calderon', 'Calamargo', '0972626372', '37272626', 'roberto@gmail.com', '27 y  la l', '', '2020-02-01 13:5', NULL),
(2, '0963572865', 'Cesar David', 'Bazan Calderon', '2389282', '0919181818', 'ghpguayaquil@gmail.com', '27 y pancho segura', '2019-11-01', '15', 'Ninguna', 'ninguna', 'AB+', 'Masculino', 'InformatÃ­ca', 'Matutina', 'No', 'Guayas', 'Guayaquil', 'Familia', 'Dos', 'Soltero', 'Ninguno', 'Rosa', 'Calderon D', '0972626300', '37272626', 'roberto@gmail.com', '27 y  la l', '2020-02-01 14:0', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_administrador`
--

CREATE TABLE `tb_administrador` (
  `cod_usuario` int(11) NOT NULL,
  `nombres` text CHARACTER SET utf8,
  `apellidos` text CHARACTER SET utf8,
  `email` text CHARACTER SET utf8,
  `pass` text CHARACTER SET utf8,
  `telf` text CHARACTER SET utf8,
  `cod_rol` int(11) DEFAULT NULL,
  `estado` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_administrador`
--

INSERT INTO `tb_administrador` (`cod_usuario`, `nombres`, `apellidos`, `email`, `pass`, `telf`, `cod_rol`, `estado`) VALUES
(1, 'Christian Mateo', 'Calderon Dominguez', 'ghpguayaquil@gmail.com', '99817dc7d2cdc56bfbaf890bada46f5a', '0989812538', 1, 'a'),
(13, 'Maria', 'Dominguez Piscocama', 'maria_dominguez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0989812538', 1, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curriculum`
--

CREATE TABLE `tb_curriculum` (
  `est_id` int(11) NOT NULL,
  `est_cedula` varchar(10) DEFAULT NULL,
  `est_nombres` text,
  `est_apellidos` text,
  `est_convencional` varchar(10) DEFAULT NULL,
  `est_celular` varchar(10) DEFAULT NULL,
  `est_correo` varchar(50) DEFAULT NULL,
  `est_direccion` varchar(50) DEFAULT NULL,
  `est_fecha_nacimiento` varchar(25) DEFAULT NULL,
  `est_edad` int(2) DEFAULT NULL,
  `est_enfermedad` text,
  `est_alergias` text,
  `est_tipo_sangre` varchar(4) DEFAULT NULL,
  `est_genero` text,
  `est_curso` text,
  `est_jornada` text,
  `est_provincia` text,
  `est_ciudad` text,
  `est_trabajo` text,
  `est_vive` text,
  `est_hermanos` text,
  `est_civil` text,
  `est_hijos` text,
  `est_nombre_ref` text,
  `est_apellidos_ref` text,
  `est_cedula_ref` varchar(10) DEFAULT NULL,
  `est_tlf_ref` varchar(10) DEFAULT NULL,
  `est_correo_ref` varchar(60) DEFAULT NULL,
  `est_direccion_ref` varchar(60) DEFAULT NULL,
  `est_aceptar` text,
  `est_foto` text,
  `est_fecha` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_curriculum`
--

INSERT INTO `tb_curriculum` (`est_id`, `est_cedula`, `est_nombres`, `est_apellidos`, `est_convencional`, `est_celular`, `est_correo`, `est_direccion`, `est_fecha_nacimiento`, `est_edad`, `est_enfermedad`, `est_alergias`, `est_tipo_sangre`, `est_genero`, `est_curso`, `est_jornada`, `est_provincia`, `est_ciudad`, `est_trabajo`, `est_vive`, `est_hermanos`, `est_civil`, `est_hijos`, `est_nombre_ref`, `est_apellidos_ref`, `est_cedula_ref`, `est_tlf_ref`, `est_correo_ref`, `est_direccion_ref`, `est_aceptar`, `est_foto`, `est_fecha`) VALUES
(6, '1758017444', 'ANGELA MARTITA', 'PANCHANA POVEDA', '2332561', '0985987766', 'rosa@gmail.com', '32 y Vacas Galindo', '2020-02-01', 16, 'Ninguna', 'ninguna', 'AB+', 'Masculino', 'EnfermerÃ­a', 'Matutina', 'Pichincha', 'guayaquil', 'Si', 'Familia', 'Uno', 'Soltero', 'Uno', 'roberto calderon', 'PALLAZCO MUÃ‘OZ', '0904272077', '0990797645', 'angela123@hotmail.com', '29 y galapagos', 'SI', 'png', '2020-02-13 15:59:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_document`
--

CREATE TABLE `tb_document` (
  `doc_id` int(10) NOT NULL,
  `doc_nombre` varchar(45) DEFAULT NULL,
  `doc_apellido` varchar(45) DEFAULT NULL,
  `doc_cedula` varchar(10) DEFAULT NULL,
  `doc_telefono` varchar(10) DEFAULT NULL,
  `doc_genero` varchar(15) DEFAULT NULL,
  `doc_curso` varchar(20) DEFAULT NULL,
  `doc_aprobo` varchar(3) DEFAULT NULL,
  `doc_reprobo` varchar(3) DEFAULT NULL,
  `doc_motivo` varchar(25) DEFAULT NULL,
  `doc_fecha` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_document`
--

INSERT INTO `tb_document` (`doc_id`, `doc_nombre`, `doc_apellido`, `doc_cedula`, `doc_telefono`, `doc_genero`, `doc_curso`, `doc_aprobo`, `doc_reprobo`, `doc_motivo`, `doc_fecha`) VALUES
(25, 'ROBERTO', 'MARTINEZ', '0986965252', '2513986', 'Masculino', 'Lectura Rapida', 'No', 'No', 'El lugar no era adecuado', '2020-02-14 15:41:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estudiantes`
--

CREATE TABLE `tb_estudiantes` (
  `est_id` int(10) NOT NULL,
  `est_nombres` text,
  `est_apellidos` text,
  `est_cedula` int(10) DEFAULT NULL,
  `est_correo` varchar(50) DEFAULT NULL,
  `est_edad` int(2) DEFAULT NULL,
  `est_direccion` varchar(50) DEFAULT NULL,
  `est_telefono` int(10) DEFAULT NULL,
  `est_fecha_nac` varchar(8) DEFAULT NULL,
  `est_genero` text,
  `est_curso` text,
  `est_provincia` text,
  `est_ciudad` text,
  `est_familia` text,
  `est_hermanos` int(2) DEFAULT NULL,
  `est_enfermedad` varchar(50) DEFAULT NULL,
  `est_sangre` varchar(5) DEFAULT NULL,
  `est__nomb_contacto` text,
  `est_apellido_contacto` text,
  `est_cedula_contacto` int(10) DEFAULT NULL,
  `est_direccion_contacto` varchar(50) DEFAULT NULL,
  `est_correo_contacto` varchar(50) DEFAULT NULL,
  `est_telf_contacto` int(10) DEFAULT NULL,
  `taxta_foto` text,
  `taxta_fecha` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_estudiantes`
--

INSERT INTO `tb_estudiantes` (`est_id`, `est_nombres`, `est_apellidos`, `est_cedula`, `est_correo`, `est_edad`, `est_direccion`, `est_telefono`, `est_fecha_nac`, `est_genero`, `est_curso`, `est_provincia`, `est_ciudad`, `est_familia`, `est_hermanos`, `est_enfermedad`, `est_sangre`, `est__nomb_contacto`, `est_apellido_contacto`, `est_cedula_contacto`, `est_direccion_contacto`, `est_correo_contacto`, `est_telf_contacto`, `taxta_foto`, `taxta_fecha`) VALUES
(6, 'ALEKSEI', 'CHURILOV ', 907831259, 'ale@gmail.com', 35, '27 entre sedalana y oriente', 0, '2007-03-', 'Masculino', 'Lectura Rapida', 'Guayas', 'Guayaquil', 'Padres', 2, 'Ninguna', 'AB+', 'MARTHA ELIZABETH ', 'OCHOA CHANGO ', 923449334, 'isla trinitaria mz 22 solar 3', 'cd@gmail.com', 968503506, 'jpg', '2019-12-27 17:16:57'),
(7, 'ANGELA MARTITA', 'PANCHANA POVEDA', 600947741, 'angela@hotmail.com', 27, 'isla trinitaria mz 22 solar 3', 983495182, '1998-06-', 'Femenino', 'EnfermerÃ­a', 'Guayas', 'Guayaquil', 'Padres', 2, 'Ninguna', 'AB+', 'MARTHA ELIZABETH ', 'OCHOA CHANGO ', 923449334, 'isla trinitaria mz 22 solar 2', 'cd@gmail.com', 968503506, 'jpg', '2019-12-27 17:20:56'),
(8, 'christian Mateo', 'Calderon Dominguez', 919186007, 'ghpguayaquil@gmail.com', 41, '27 entre sedalana y oriente', 989812538, '1978-03-', 'Masculino', 'InformatÃ­ca', 'ManabÃ­', 'Portoviejo', 'Padres', 2, 'Rinitis', 'B+', 'Roberto', 'Calderon', 923449334, '29 y galapagos', 'rb@gmail.com', 968503525, 'jpg', '2019-12-27 17:27:01'),
(9, 'JUAN GERARDO', 'CHURILOV ', 1758222263, 'ale@gmail.com', 26, '32 y Vacas Galindo', 980588255, '2010-10-', 'Masculino', 'Lectura Rapida', 'Santa Elena', 'Esmeraldas', 'Parientes', 0, 'Rinitis', 'AB+', 'MARTHA ELIZABETH ', 'Calderon', 2147483647, '29 y galapagos', 'rb@gmail.com', 968503525, 'png', '2019-12-27 17:39:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_historico`
--

CREATE TABLE `tb_historico` (
  `fecha_inicio` varchar(15) NOT NULL,
  `fecha_fin` varchar(15) NOT NULL,
  `hist_curso` text NOT NULL,
  `hist_docente` text NOT NULL,
  `hist_admin` text NOT NULL,
  `hist_estado` text NOT NULL,
  `hist_observacion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_historico_est`
--

CREATE TABLE `tb_historico_est` (
  `ind_hist_estudiante` int(11) NOT NULL,
  `Fecha_inicio` text,
  `fecha_fin` text,
  `hist_curso` text,
  `hist_docente` text,
  `hist_observacion` text,
  `hist_admin` text,
  `hist_estado` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_instalaciones`
--

CREATE TABLE `tb_instalaciones` (
  `inst_id` int(10) NOT NULL,
  `inst_nombre` text,
  `inst_correo` text,
  `inst_ciudad` text,
  `inst_opinion` text,
  `inst_fecha` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_instalaciones`
--

INSERT INTO `tb_instalaciones` (`inst_id`, `inst_nombre`, `inst_correo`, `inst_ciudad`, `inst_opinion`, `inst_fecha`) VALUES
(1, 'CHRISTIAN CALDERON', 'ghpguayaquil@gmail.com', 'Guayaquil', 'ninguna opinion', '2019-06-30 20:16:22'),
(2, 'CHRISTIAN CALDERON', 'ghpguayaquil1@gmail.com', 'Quito', 'las instalaciones me parecen las adecuadas para los cursos', '2019-06-30 21:20:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pasantes`
--

CREATE TABLE `tb_pasantes` (
  `pst_id` int(11) NOT NULL,
  `pst_cedula` varchar(10) DEFAULT NULL,
  `pst_nombres` text NOT NULL,
  `pst_apellidos` text NOT NULL,
  `pst_convencional` varchar(10) DEFAULT NULL,
  `pst_celular` varchar(10) DEFAULT NULL,
  `pst_correo` varchar(45) DEFAULT NULL,
  `pst_direccion` varchar(45) DEFAULT NULL,
  `pst_fecha_nacimiento` varchar(25) DEFAULT NULL,
  `pst_edad` text,
  `pst_enfermedad` text,
  `pst_alergias` text,
  `pst_tipo_sangre` varchar(10) DEFAULT NULL,
  `pst_genero` text,
  `pst_curso` text,
  `pst_jornada` text,
  `pst_trabaja` text,
  `pst_provincia` text,
  `pst_ciudad` text,
  `pst_dependiente` text NOT NULL,
  `pst_vive` text,
  `pst_civil` text,
  `pst_hijos` text,
  `pst_universidad` text,
  `pst_nombre_ref` text,
  `pst_apellidos_ref` text,
  `pst_direccion_ref` varchar(35) DEFAULT NULL,
  `pst_tlf_ref` varchar(10) DEFAULT NULL,
  `pst_foto` text,
  `pst_aceptar` text,
  `pst_fecha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_pasantes`
--

INSERT INTO `tb_pasantes` (`pst_id`, `pst_cedula`, `pst_nombres`, `pst_apellidos`, `pst_convencional`, `pst_celular`, `pst_correo`, `pst_direccion`, `pst_fecha_nacimiento`, `pst_edad`, `pst_enfermedad`, `pst_alergias`, `pst_tipo_sangre`, `pst_genero`, `pst_curso`, `pst_jornada`, `pst_trabaja`, `pst_provincia`, `pst_ciudad`, `pst_dependiente`, `pst_vive`, `pst_civil`, `pst_hijos`, `pst_universidad`, `pst_nombre_ref`, `pst_apellidos_ref`, `pst_direccion_ref`, `pst_tlf_ref`, `pst_foto`, `pst_aceptar`, `pst_fecha`) VALUES
(36, '0919186007', 'MARIA ESTHER', 'LOZADA MIELES', '2048380', '0989563456', 'lozada@gmail.com', 'mocho lote 2 mz 22 solar 4', '1998-06-16', '32', 'Ninguna', 'ninguna', 'O+', 'Femenino', 'Lectura Rapida', 'Matutina', 'No', 'Loja', 'guayaquil', 'Abuelos', 'Familia', 'Union de Hecho', 'Dos', 'Universidad Estatal', 'roberto calderon', 'PALMA MONSERRATE ', '29 y galapagos', '0986214456', 'jpg', 'SI', '2020-02-13 16:1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro_estudiante`
--

CREATE TABLE `tb_registro_estudiante` (
  `est_id` int(11) NOT NULL,
  `est_cedula` varchar(10) DEFAULT NULL,
  `est_nombres` varchar(50) DEFAULT NULL,
  `est_apellidos` varchar(50) DEFAULT NULL,
  `est_convencional` varchar(10) DEFAULT NULL,
  `est_celular` varchar(10) DEFAULT NULL,
  `est_correo` varchar(45) DEFAULT NULL,
  `est_direccion` varchar(45) NOT NULL,
  `est_fecha_nacimiento` varchar(20) DEFAULT NULL,
  `est_edad` varchar(2) DEFAULT NULL,
  `est_enfermedad` varchar(40) DEFAULT NULL,
  `est_alergias` varchar(40) DEFAULT NULL,
  `est_tipo_sangre` varchar(5) DEFAULT NULL,
  `est_genero` varchar(15) DEFAULT NULL,
  `est_curso` varchar(20) DEFAULT NULL,
  `est_jornada` varchar(15) DEFAULT NULL,
  `est_trabaja` varchar(3) DEFAULT NULL,
  `est_provincia` varchar(15) DEFAULT NULL,
  `est_ciudad` varchar(25) DEFAULT NULL,
  `est_vive` varchar(25) DEFAULT NULL,
  `est_hermanos` varchar(10) DEFAULT NULL,
  `est_civil` varchar(15) DEFAULT NULL,
  `est_hijos` varchar(8) DEFAULT NULL,
  `est_nombre_ref` varchar(50) DEFAULT NULL,
  `est_apellidos_ref` varchar(50) DEFAULT NULL,
  `est_cedula_ref` varchar(10) DEFAULT NULL,
  `est_tlf_ref` varchar(10) DEFAULT NULL,
  `est_correo_ref` varchar(45) DEFAULT NULL,
  `est_direccion_ref` varchar(45) DEFAULT NULL,
  `est_foto` text,
  `est_fecha` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro_pasante`
--

CREATE TABLE `tb_registro_pasante` (
  `pst_id` int(11) NOT NULL,
  `pst_cedula` varchar(10) DEFAULT NULL,
  `pst_nombres` varchar(50) DEFAULT NULL,
  `pst_apellidos` varchar(50) DEFAULT NULL,
  `pst_convencional` varchar(10) DEFAULT NULL,
  `pst_celular` varchar(10) DEFAULT NULL,
  `pst_correo` varchar(45) DEFAULT NULL,
  `pst_direccion` varchar(45) DEFAULT NULL,
  `pst_fecha_nacimiento` varchar(20) DEFAULT NULL,
  `pst_edad` varchar(10) DEFAULT NULL,
  `pst_enfermedad` varchar(25) DEFAULT NULL,
  `pst_alergias` varchar(25) DEFAULT NULL,
  `pst_tipo_sangre` varchar(10) DEFAULT NULL,
  `pst_genero` varchar(20) DEFAULT NULL,
  `pst_curso` varchar(20) DEFAULT NULL,
  `pst_jornada` varchar(20) DEFAULT NULL,
  `pst_trabaja` varchar(5) DEFAULT NULL,
  `pst_provincia` varchar(20) DEFAULT NULL,
  `pst_ciudad` varchar(20) DEFAULT NULL,
  `pst_dependiente` varchar(25) DEFAULT NULL,
  `pst_vive` varchar(25) DEFAULT NULL,
  `pst_civil` varchar(20) DEFAULT NULL,
  `pst_hijos` varchar(5) DEFAULT NULL,
  `pst_universidad` varchar(20) DEFAULT NULL,
  `pst_nombre_ref` varchar(50) DEFAULT NULL,
  `pst_apellidos_ref` varchar(50) DEFAULT NULL,
  `pst_direccion_ref` varchar(45) DEFAULT NULL,
  `pst_tlf_ref` varchar(10) DEFAULT NULL,
  `pst_aceptar` varchar(5) DEFAULT NULL,
  `pst_fecha` varchar(15) DEFAULT NULL,
  `pst_foto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_registro_pasante`
--

INSERT INTO `tb_registro_pasante` (`pst_id`, `pst_cedula`, `pst_nombres`, `pst_apellidos`, `pst_convencional`, `pst_celular`, `pst_correo`, `pst_direccion`, `pst_fecha_nacimiento`, `pst_edad`, `pst_enfermedad`, `pst_alergias`, `pst_tipo_sangre`, `pst_genero`, `pst_curso`, `pst_jornada`, `pst_trabaja`, `pst_provincia`, `pst_ciudad`, `pst_dependiente`, `pst_vive`, `pst_civil`, `pst_hijos`, `pst_universidad`, `pst_nombre_ref`, `pst_apellidos_ref`, `pst_direccion_ref`, `pst_tlf_ref`, `pst_aceptar`, `pst_fecha`, `pst_foto`) VALUES
(7, '0919186220', 'VANESSA ALEXANDRA', 'GRANDA SOLANO', '2563215', '0989563456', 'julio@gmail.com', '29 y Gomez RendÃ³n', '2020-02-01', '41', 'Cefalea', 'ninguna', 'O-', 'Masculino', 'EnfermerÃ­a', 'Matutina', 'Si', 'El Oro', 'guayaquil', 'Hermanos', 'Familia', 'Casado', 'Uno', 'Universidad Estatal', 'LUIS ALBERTO ', 'PEÃ‘ALOZA BARRAGAN', 'flor de bastion bloque c mz 2 solar 14', '0986214456', 'SI', '2020-02-18 15:4', 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `cod_rol` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`cod_rol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Taxista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sugerencia`
--

CREATE TABLE `tb_sugerencia` (
  `sug_id` int(10) NOT NULL,
  `sug_nombre` text,
  `sug_correo` text,
  `sug_ciudad` text,
  `sug_telefono` text,
  `sug_asunto` text,
  `sug_comentario` text,
  `sug_fecha` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_sugerencia`
--

INSERT INTO `tb_sugerencia` (`sug_id`, `sug_nombre`, `sug_correo`, `sug_ciudad`, `sug_telefono`, `sug_asunto`, `sug_comentario`, `sug_fecha`) VALUES
(11, 'Patricia Maria Herrera Delgado', 'herrera@gmail.com', 'Guayaquil', '1234566789', 'Felicitaciones', 'Me parece una excelente aportacion para el gremio de taxistas de guayaquil que nos permitan enviar ', '2019-03-26 22:20:56'),
(13, 'Juan carlos Yulan', 'datainfo@datainfo', 'Guayaquil', '0987697658', 'Cupo para curos', 'Buenas tardes, quisiera poder ingresar en un curso que estan ofertan por su pagina Web', '2019-06-10 23:08:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD UNIQUE KEY `est_id` (`est_id`);

--
-- Indices de la tabla `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `tb_curriculum`
--
ALTER TABLE `tb_curriculum`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `tb_document`
--
ALTER TABLE `tb_document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indices de la tabla `tb_estudiantes`
--
ALTER TABLE `tb_estudiantes`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `tb_historico_est`
--
ALTER TABLE `tb_historico_est`
  ADD PRIMARY KEY (`ind_hist_estudiante`);

--
-- Indices de la tabla `tb_instalaciones`
--
ALTER TABLE `tb_instalaciones`
  ADD PRIMARY KEY (`inst_id`);

--
-- Indices de la tabla `tb_pasantes`
--
ALTER TABLE `tb_pasantes`
  ADD PRIMARY KEY (`pst_id`);

--
-- Indices de la tabla `tb_registro_estudiante`
--
ALTER TABLE `tb_registro_estudiante`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `tb_registro_pasante`
--
ALTER TABLE `tb_registro_pasante`
  ADD PRIMARY KEY (`pst_id`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `tb_sugerencia`
--
ALTER TABLE `tb_sugerencia`
  ADD PRIMARY KEY (`sug_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_administrador`
--
ALTER TABLE `tb_administrador`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tb_curriculum`
--
ALTER TABLE `tb_curriculum`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tb_document`
--
ALTER TABLE `tb_document`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `tb_estudiantes`
--
ALTER TABLE `tb_estudiantes`
  MODIFY `est_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tb_historico_est`
--
ALTER TABLE `tb_historico_est`
  MODIFY `ind_hist_estudiante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_instalaciones`
--
ALTER TABLE `tb_instalaciones`
  MODIFY `inst_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_pasantes`
--
ALTER TABLE `tb_pasantes`
  MODIFY `pst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `tb_registro_estudiante`
--
ALTER TABLE `tb_registro_estudiante`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_registro_pasante`
--
ALTER TABLE `tb_registro_pasante`
  MODIFY `pst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_sugerencia`
--
ALTER TABLE `tb_sugerencia`
  MODIFY `sug_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
