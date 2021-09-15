CREATE TABLE `slide_inicio` (
  `id` int(11) NOT NULL,
  `ruta_imagen` text NOT NULL,
  `hipervinculo` text NULL,
  `texto-banner` varchar(255) NOT NULL,
  `id_inmobiliaria5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `slide_inicio`
--
ALTER TABLE `slide_inicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `slide_inicio`
--
ALTER TABLE `slide_inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO `slide_inicio` (`id`, `ruta_imagen`, `hipervinculo`, `texto-banner`, `id_inmobiliaria5`) VALUES ('1', 'fotos/Banner_1.jpg', NULL, 'En La Cumbre, Trabajamos para encontrar tu inmueble ideal', '10'), ('2', 'fotos/Banner_2.jpg', NULL, 'Más de 13 años acompañando y creando relaciones <br> con nuestros clientes', '10'), ('3', 'fotos/Banner_3.jpg', NULL, 'Generamos tranquilidad, confianza y seguridad', '10');