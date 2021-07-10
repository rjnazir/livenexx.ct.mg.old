ALTER TABLE ct_visite_visite_extra
DROP FOREIGN KEY FK_497E418E15D88434;

ALTER TABLE ct_visite_visite_extra
DROP FOREIGN KEY FK_497E418E5314CD4;

ALTER TABLE ct_visite_visite_extra
DROP PRIMARY KEY;

ALTER TABLE ct_visite_visite_extra
ADD CONSTRAINT FK_497E418E15D88434 FOREIGN KEY (ct_visite_extra_id) REFERENCES ct_visite_extra (id);

ALTER TABLE ct_visite_visite_extra
ADD CONSTRAINT FK_497E418E5314CD4 FOREIGN KEY (ct_visite_id) REFERENCES ct_visite (id);

ALTER TABLE ct_visite_visite_extra
ADD PRIMARY KEY (ct_visite_id, ct_visite_extra_id);
