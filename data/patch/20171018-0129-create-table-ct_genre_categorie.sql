CREATE TABLE ct_genre_categorie (
id INT AUTO_INCREMENT NOT NULL,
gc_libelle VARCHAR(255) DEFAULT NULL,
gc_is_calculable TINYINT(1) NOT NULL,
PRIMARY KEY(id))
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

ALTER TABLE ct_droit_ptac
DROP FOREIGN KEY FK_DB918ADA45348DE0;

DROP INDEX IDX_DB918ADA45348DE0 ON ct_droit_ptac;

ALTER TABLE ct_droit_ptac
CHANGE ct_motif_id ct_genre_categorie_id INT DEFAULT NULL;

ALTER TABLE ct_droit_ptac
ADD CONSTRAINT FK_DB918ADA12DA9529 FOREIGN KEY (ct_genre_categorie_id) REFERENCES ct_genre_categorie (id);

CREATE INDEX IDX_DB918ADA12DA9529 ON ct_droit_ptac (ct_genre_categorie_id);

ALTER TABLE ct_genre
ADD ct_genre_categorie_id INT DEFAULT NULL;

ALTER TABLE ct_genre
ADD CONSTRAINT FK_9BCBF2CE12DA9529 FOREIGN KEY (ct_genre_categorie_id) REFERENCES ct_genre_categorie (id);

CREATE INDEX IDX_9BCBF2CE12DA9529 ON ct_genre (ct_genre_categorie_id);
