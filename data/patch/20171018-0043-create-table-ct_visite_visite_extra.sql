CREATE TABLE ct_visite_visite_extra (
ct_visite_extra_id INT NOT NULL,
ct_visite_id INT NOT NULL,
INDEX IDX_497E418E15D88434 (ct_visite_extra_id),
INDEX IDX_497E418E5314CD4 (ct_visite_id),
PRIMARY KEY(ct_visite_extra_id, ct_visite_id))
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

ALTER TABLE ct_visite_visite_extra
ADD CONSTRAINT FK_497E418E15D88434 FOREIGN KEY (ct_visite_extra_id) REFERENCES ct_visite (id);

ALTER TABLE ct_visite_visite_extra
ADD CONSTRAINT FK_497E418E5314CD4 FOREIGN KEY (ct_visite_id) REFERENCES ct_visite_extra (id);
