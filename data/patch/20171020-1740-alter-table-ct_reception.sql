ALTER TABLE ct_reception ADD rcp_num_group VARCHAR(255) DEFAULT NULL;
ALTER TABLE ct_reception ADD rcp_created DATE DEFAULT NULL;
DROP INDEX constatation_d_immatriculation_unique ON ct_reception;