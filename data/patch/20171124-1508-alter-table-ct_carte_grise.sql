ALTER TABLE ct_carte_grise
ADD cg_nom_cooperative VARCHAR(100) DEFAULT NULL,
ADD cg_itineraire VARCHAR(100) DEFAULT NULL,
ADD cg_is_transport TINYINT(1) NOT NULL;
