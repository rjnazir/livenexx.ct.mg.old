ALTER TABLE ct_carte_grise
ADD cg_created DATETIME DEFAULT NULL;

ALTER TABLE ct_visite
ADD vst_is_contre_visite TINYINT(1) NOT NULL;
