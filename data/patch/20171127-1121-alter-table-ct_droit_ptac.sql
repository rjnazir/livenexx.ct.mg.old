CREATE TABLE `ct_type_droit_ptac` (
`id` int(11) NOT NULL,
`tp_dp_libelle` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `ct_type_droit_ptac` ADD PRIMARY KEY (`id`);

DROP TABLE IF EXISTS `ct_droit_ptac`;
CREATE TABLE `ct_droit_ptac` ( `id` int(11) NOT NULL,
`ct_genre_categorie_id` int(11) DEFAULT NULL,
`dp_prix_min` double DEFAULT NULL,
`dp_prix_max` double DEFAULT NULL,
`dp_droit` double DEFAULT NULL,
`ct_type_droit_ptac_id` int(11) DEFAULT NULL )
ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `ct_droit_ptac`
ADD PRIMARY KEY (`id`),
ADD KEY `IDX_DB918ADA12DA9529` (`ct_genre_categorie_id`),
ADD KEY `IDX_DB918ADA7CFDF4AC` (`ct_type_droit_ptac_id`);

ALTER TABLE `ct_droit_ptac`
ADD CONSTRAINT `FK_DB918ADA12DA9529` FOREIGN KEY (`ct_genre_categorie_id`) REFERENCES `ct_genre_categorie` (`id`),
ADD CONSTRAINT `FK_DB918ADA7CFDF4AC` FOREIGN KEY (`ct_type_droit_ptac_id`) REFERENCES `ct_type_droit_ptac` (`id`);