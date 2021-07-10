ALTER TABLE ct_reception ADD ct_source_energie_id INT DEFAULT NULL;
ALTER TABLE ct_reception ADD CONSTRAINT FK_942215A27EE62163 FOREIGN KEY (ct_source_energie_id) REFERENCES ct_source_energie (id);
CREATE INDEX IDX_942215A27EE62163 ON ct_reception (ct_source_energie_id);
