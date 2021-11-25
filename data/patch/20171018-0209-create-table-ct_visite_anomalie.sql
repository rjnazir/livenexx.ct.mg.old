CREATE TABLE ct_visite_anomalie (
ct_anomalie_id INT NOT NULL,
ct_visite_id INT NOT NULL,
INDEX IDX_4F17BA6ED0C80021 (ct_anomalie_id),
INDEX IDX_4F17BA6E5314CD4 (ct_visite_id),
PRIMARY KEY(ct_anomalie_id, ct_visite_id))
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

ALTER TABLE ct_visite_anomalie
ADD CONSTRAINT FK_4F17BA6ED0C80021 FOREIGN KEY (ct_anomalie_id) REFERENCES ct_visite (id);

ALTER TABLE ct_visite_anomalie
ADD CONSTRAINT FK_4F17BA6E5314CD4 FOREIGN KEY (ct_visite_id) REFERENCES ct_anomalie (id);
