ALTER TABLE ct_carte_grise
DROP FOREIGN KEY FK_A447BE7355B81AF1;

DROP INDEX fk_ct_carte_grise_ct_utilisation1_idx ON ct_carte_grise;

ALTER TABLE ct_carte_grise
DROP ct_utilisation_id;

ALTER TABLE ct_visite
ADD ct_utilisation_id INT DEFAULT NULL;

ALTER TABLE ct_visite
ADD CONSTRAINT FK_7F3E82E355B81AF1 FOREIGN KEY (ct_utilisation_id) REFERENCES ct_utilisation (id);

CREATE INDEX IDX_7F3E82E355B81AF1 ON ct_visite (ct_utilisation_id);
