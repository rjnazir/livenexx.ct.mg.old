ALTER TABLE ct_usage_tarif MODIFY id INT NOT NULL;
ALTER TABLE ct_usage_tarif DROP PRIMARY KEY;
ALTER TABLE ct_usage_tarif CHANGE ct_usage_id ct_usage_id INT DEFAULT NULL;
ALTER TABLE ct_usage_tarif ADD PRIMARY KEY (id);