ALTER TABLE ct_reception ADD ct_carosserie_id INT DEFAULT NULL;
ALTER TABLE ct_reception ADD CONSTRAINT FK_942215A2F2AE3878 FOREIGN KEY (ct_carosserie_id) REFERENCES ct_carosserie (id);
CREATE INDEX IDX_942215A2F2AE3878 ON ct_reception (ct_carosserie_id);
