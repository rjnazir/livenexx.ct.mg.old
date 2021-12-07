ALTER TABLE ct_historique ADD ct_centre_id INT DEFAULT NULL;
ALTER TABLE ct_historique ADD CONSTRAINT FK_7E72DEE182C8474E FOREIGN KEY (ct_cen
tre_id) REFERENCES ct_centre (id);
CREATE INDEX IDX_7E72DEE182C8474E ON ct_historique (ct_centre_id);