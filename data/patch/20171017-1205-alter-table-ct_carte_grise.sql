ALTER TABLE ct_carte_grise
ADD cg_immatriculation VARCHAR(45) DEFAULT NULL;

CREATE UNIQUE INDEX UNIQ_A447BE7316321FAD ON ct_carte_grise (cg_immatriculation);
