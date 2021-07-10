CREATE TABLE ct_zone_deserte (id INT AUTO_INCREMENT NOT NULL, zd_libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE ct_carte_grise ADD ct_zone_deserte_id INT DEFAULT NULL;
ALTER TABLE ct_carte_grise ADD CONSTRAINT FK_A447BE73C50880EA FOREIGN KEY (ct_zone_deserte_id) REFERENCES ct_zone_deserte (id);
