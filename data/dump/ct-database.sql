-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Octobre 2017 à 15:20
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `controle_technique`
--

-- --------------------------------------------------------

--
-- Structure de la table `ct_anomalie`
--

CREATE TABLE `ct_anomalie` (
  `id` int(11) NOT NULL,
  `ct_anomalie_type_id` int(11) DEFAULT NULL,
  `anml_libelle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anml_code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_anomalie_has_visite`
--

CREATE TABLE `ct_anomalie_has_visite` (
  `ct_anomalie_id` int(11) NOT NULL,
  `ct_visite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_anomalie_type`
--

CREATE TABLE `ct_anomalie_type` (
  `id` int(11) NOT NULL,
  `atp_libelle` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_carosserie`
--

CREATE TABLE `ct_carosserie` (
  `id` int(11) NOT NULL,
  `crs_libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_carte_grise`
--

CREATE TABLE `ct_carte_grise` (
  `id` int(11) NOT NULL,
  `ct_carosserie_id` int(11) DEFAULT NULL,
  `ct_centre_id` int(11) DEFAULT NULL,
  `ct_source_energie_id` int(11) DEFAULT NULL,
  `ct_utilisation_id` int(11) DEFAULT NULL,
  `ct_vehicule_id` int(11) DEFAULT NULL,
  `cg_date_emission` date DEFAULT NULL,
  `cg_nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_profession` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_commune` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_nbr_assis` int(11) DEFAULT NULL,
  `cg_nbr_debout` int(11) DEFAULT NULL,
  `cg_puissance_admin` int(11) DEFAULT NULL,
  `cg_mise_en_service` date DEFAULT NULL,
  `cg_patente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_ani` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_rta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_num_carte_violette` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_date_carte_violette` date DEFAULT NULL,
  `cg_lieu_carte_violette` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_num_vignette` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cg_date_vignette` date DEFAULT NULL,
  `cg_lieu_vignette` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_centre`
--

CREATE TABLE `ct_centre` (
  `id` int(11) NOT NULL,
  `ct_province_id` int(11) DEFAULT NULL,
  `ctr_nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctr_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctr_created_at` datetime DEFAULT NULL,
  `ctr_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_const_av_ded`
--

CREATE TABLE `ct_const_av_ded` (
  `id` int(11) NOT NULL,
  `ct_centre_id` int(11) DEFAULT NULL,
  `ct_verificateur_id` int(11) DEFAULT NULL,
  `cad_provenance` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_divers` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_proprietaire_nom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_proprietaire_adresse` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_bon_etat` tinyint(1) DEFAULT NULL,
  `cad_sec_pers` tinyint(1) DEFAULT NULL,
  `cad_sec_march` tinyint(1) DEFAULT NULL,
  `cad_protec_env` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_numero` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_const_av_ded_carac`
--

CREATE TABLE `ct_const_av_ded_carac` (
  `id` int(11) NOT NULL,
  `ct_carosserie_id` int(11) DEFAULT NULL,
  `ct_const_av_ded_id` int(11) DEFAULT NULL,
  `ct_const_av_ded_type_id` int(11) DEFAULT NULL,
  `ct_genre_id` int(11) DEFAULT NULL,
  `ct_marque_id` int(11) DEFAULT NULL,
  `ct_source_energie_id` int(11) DEFAULT NULL,
  `cad_cylindre` int(11) DEFAULT NULL,
  `cad_puissance` double DEFAULT NULL,
  `cad_poids_vide` double DEFAULT NULL,
  `cad_charge_utile` double DEFAULT NULL,
  `cad_hauteur` double DEFAULT NULL,
  `cad_largeur` double DEFAULT NULL,
  `cad_longueur` double DEFAULT NULL,
  `cad_num_serie_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_num_moteur` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_provenance` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_type_car` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_poids_maxima` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_const_av_ded_type`
--

CREATE TABLE `ct_const_av_ded_type` (
  `id` int(11) NOT NULL,
  `cad_tp_libelle` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_genre`
--

CREATE TABLE `ct_genre` (
  `id` int(11) NOT NULL,
  `gr_libelle` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gr_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_genre_tarif`
--

CREATE TABLE `ct_genre_tarif` (
  `id` int(11) NOT NULL,
  `ct_genre_id` int(11) DEFAULT NULL,
  `grt_prix` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grt_annee` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_marque`
--

CREATE TABLE `ct_marque` (
  `id` int(11) NOT NULL,
  `mrq_libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_motif`
--

CREATE TABLE `ct_motif` (
  `id` int(11) NOT NULL,
  `mtf_libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_motif_tarif`
--

CREATE TABLE `ct_motif_tarif` (
  `id` int(11) NOT NULL,
  `ct_motif_id` int(11) DEFAULT NULL,
  `mtf_trf_prix` double DEFAULT NULL,
  `mtf_trf_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_province`
--

CREATE TABLE `ct_province` (
  `id` int(11) NOT NULL,
  `prv_nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prv_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prv_created_at` datetime DEFAULT NULL,
  `prv_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_reception`
--

CREATE TABLE `ct_reception` (
  `id` int(11) NOT NULL,
  `ct_centre_id` int(11) DEFAULT NULL,
  `ct_motif_id` int(11) DEFAULT NULL,
  `ct_type_reception_id` int(11) DEFAULT NULL,
  `ct_user_id` int(11) DEFAULT NULL,
  `ct_utilisation_id` int(11) DEFAULT NULL,
  `ct_vehicule_id` int(11) DEFAULT NULL,
  `rcp_mise_service` date DEFAULT NULL,
  `rcp_immatriculation` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rcp_proprietaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rcp_profession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rcp_adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rcp_nbr_assis` int(11) DEFAULT NULL,
  `rcp_nbr_debout` int(11) DEFAULT NULL,
  `rcp_num_pv` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_role`
--

CREATE TABLE `ct_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_source_energie`
--

CREATE TABLE `ct_source_energie` (
  `id` int(11) NOT NULL,
  `sre_libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_type_reception`
--

CREATE TABLE `ct_type_reception` (
  `id` int(11) NOT NULL,
  `tprcp_libelle` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_type_visite`
--

CREATE TABLE `ct_type_visite` (
  `id` int(11) NOT NULL,
  `tpv_libelle` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_usage`
--

CREATE TABLE `ct_usage` (
  `id` int(11) NOT NULL,
  `usg_libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usg_validite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usg_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_usage_tarif`
--

CREATE TABLE `ct_usage_tarif` (
  `id` int(11) NOT NULL,
  `ct_usage_id` int(11) NOT NULL,
  `usg_trf_annee` date DEFAULT NULL,
  `usg_trf_prix` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_user`
--

CREATE TABLE `ct_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `usr_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_locked` tinyint(1) DEFAULT NULL,
  `usr_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_created_at` datetime DEFAULT NULL,
  `usr_updated_at` datetime DEFAULT NULL,
  `usr_locked_update` tinyint(1) DEFAULT NULL,
  `usr_request_update` tinyint(1) NOT NULL,
  `usr_profession` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_telephone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_is_connected` tinyint(1) DEFAULT NULL,
  `usr_presence` tinyint(1) DEFAULT NULL,
  `ct_centre_id` int(11) DEFAULT NULL,
  `ct_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_utilisation`
--

CREATE TABLE `ct_utilisation` (
  `id` int(11) NOT NULL,
  `ut_libelle` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_vehicule`
--

CREATE TABLE `ct_vehicule` (
  `id` int(11) NOT NULL,
  `ct_genre_id` int(11) DEFAULT NULL,
  `ct_marque_id` int(11) DEFAULT NULL,
  `vhc_cylindre` int(11) DEFAULT NULL,
  `vhc_puissance` double DEFAULT NULL,
  `vhc_poids_vide` double DEFAULT NULL,
  `vhc_charge_utile` double DEFAULT NULL,
  `vhc_hauteur` double DEFAULT NULL,
  `vhc_largeur` double DEFAULT NULL,
  `vhc_longueur` double DEFAULT NULL,
  `vhc_num_serie` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vhc_num_moteur` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vhc_created` datetime DEFAULT NULL,
  `vhc_provenance` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_visite`
--

CREATE TABLE `ct_visite` (
  `id` int(11) NOT NULL,
  `ct_carte_grise_id` int(11) DEFAULT NULL,
  `ct_centre_id` int(11) DEFAULT NULL,
  `ct_type_visite_id` int(11) DEFAULT NULL,
  `ct_usage_id` int(11) DEFAULT NULL,
  `ct_user_id` int(11) DEFAULT NULL,
  `ct_verificateur_id` int(11) DEFAULT NULL,
  `vst_num_pv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vst_num_feuille_caisse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vst_date_expiration` date DEFAULT NULL,
  `vst_created` datetime DEFAULT NULL,
  `vst_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_visite_anomalies`
--

CREATE TABLE `ct_visite_anomalies` (
  `id` int(11) NOT NULL,
  `anomalie_id` int(11) DEFAULT NULL,
  `visite_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_visite_extra`
--

CREATE TABLE `ct_visite_extra` (
  `id` int(11) NOT NULL,
  `vste_libelle` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_visite_extra_has_ct_visite`
--

CREATE TABLE `ct_visite_extra_has_ct_visite` (
  `ct_visite_extra_id` int(11) NOT NULL,
  `ct_visite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ct_visite_extra_tarif`
--

CREATE TABLE `ct_visite_extra_tarif` (
  `id` int(11) NOT NULL,
  `ct_visite_extra_id` int(11) DEFAULT NULL,
  `vet_annee` date DEFAULT NULL,
  `vet_prix` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ct_anomalie`
--
ALTER TABLE `ct_anomalie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_anomalie_ct_anomalie_type1_idx` (`ct_anomalie_type_id`);

--
-- Index pour la table `ct_anomalie_has_visite`
--
ALTER TABLE `ct_anomalie_has_visite`
  ADD PRIMARY KEY (`ct_anomalie_id`,`ct_visite_id`),
  ADD KEY `IDX_77F95265D0C80021` (`ct_anomalie_id`),
  ADD KEY `IDX_77F952655314CD4` (`ct_visite_id`);

--
-- Index pour la table `ct_anomalie_type`
--
ALTER TABLE `ct_anomalie_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_carosserie`
--
ALTER TABLE `ct_carosserie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_carte_grise`
--
ALTER TABLE `ct_carte_grise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_carte_grise_ct_carosserie1_idx` (`ct_carosserie_id`),
  ADD KEY `fk_ct_carte_grise_ct_source_energie1_idx` (`ct_source_energie_id`),
  ADD KEY `fk_ct_carte_grise_ct_vehicule1_idx` (`ct_vehicule_id`),
  ADD KEY `fk_ct_carte_grise_ct_utilisation1_idx` (`ct_utilisation_id`),
  ADD KEY `fk_ct_carte_grise_ct_centre1_idx` (`ct_centre_id`);

--
-- Index pour la table `ct_centre`
--
ALTER TABLE `ct_centre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_centre_ct_province1_idx` (`ct_province_id`);

--
-- Index pour la table `ct_const_av_ded`
--
ALTER TABLE `ct_const_av_ded`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_const_av_ded_ct_user1_idx` (`ct_verificateur_id`),
  ADD KEY `fk_ct_const_av_ded_ct_centre1_idx` (`ct_centre_id`);

--
-- Index pour la table `ct_const_av_ded_carac`
--
ALTER TABLE `ct_const_av_ded_carac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_const_av_ded_carac_ct_genre1_idx` (`ct_genre_id`),
  ADD KEY `fk_ct_const_av_ded_carac_ct_marque1_idx` (`ct_marque_id`),
  ADD KEY `fk_ct_const_av_ded_carac_ct_source_energie1_idx` (`ct_source_energie_id`),
  ADD KEY `fk_ct_const_av_ded_carac_ct_carosserie1_idx` (`ct_carosserie_id`),
  ADD KEY `fk_ct_const_av_ded_carac_ct_const_av_ded_type1_idx` (`ct_const_av_ded_type_id`),
  ADD KEY `fk_ct_const_av_ded_carac_ct_const_av_ded1_idx` (`ct_const_av_ded_id`);

--
-- Index pour la table `ct_const_av_ded_type`
--
ALTER TABLE `ct_const_av_ded_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_genre`
--
ALTER TABLE `ct_genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_genre_tarif`
--
ALTER TABLE `ct_genre_tarif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_genre_tarif_ct_genre1_idx` (`ct_genre_id`);

--
-- Index pour la table `ct_marque`
--
ALTER TABLE `ct_marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_motif`
--
ALTER TABLE `ct_motif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_motif_tarif`
--
ALTER TABLE `ct_motif_tarif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_motif_tarif_ct_motif1_idx` (`ct_motif_id`);

--
-- Index pour la table `ct_province`
--
ALTER TABLE `ct_province`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_reception`
--
ALTER TABLE `ct_reception`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constatation_d_immatriculation_unique` (`rcp_immatriculation`),
  ADD KEY `fk_ct_reception_ct_type_reception1_idx` (`ct_type_reception_id`),
  ADD KEY `fk_ct_reception_ct_motif1_idx` (`ct_motif_id`),
  ADD KEY `fk_ct_reception_ct_utilisation1_idx` (`ct_utilisation_id`),
  ADD KEY `fk_ct_reception_ct_user1_idx` (`ct_user_id`),
  ADD KEY `fk_ct_reception_ct_vehicule1_idx` (`ct_vehicule_id`),
  ADD KEY `fk_ct_reception_ct_centre1_idx` (`ct_centre_id`);

--
-- Index pour la table `ct_role`
--
ALTER TABLE `ct_role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_source_energie`
--
ALTER TABLE `ct_source_energie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_type_reception`
--
ALTER TABLE `ct_type_reception`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_type_visite`
--
ALTER TABLE `ct_type_visite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_usage`
--
ALTER TABLE `ct_usage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_usage_tarif`
--
ALTER TABLE `ct_usage_tarif`
  ADD PRIMARY KEY (`id`,`ct_usage_id`),
  ADD KEY `fk_ct_usage_tarif_ct_usage1_idx` (`ct_usage_id`);

--
-- Index pour la table `ct_user`
--
ALTER TABLE `ct_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_canonical_UNIQUE` (`username_canonical`),
  ADD UNIQUE KEY `email_canonical_UNIQUE` (`email_canonical`),
  ADD UNIQUE KEY `confirmation_token_UNIQUE` (`confirmation_token`),
  ADD KEY `IDX_A115979E82C8474E` (`ct_centre_id`),
  ADD KEY `IDX_A115979EB37C5964` (`ct_role_id`);

--
-- Index pour la table `ct_utilisation`
--
ALTER TABLE `ct_utilisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_vehicule`
--
ALTER TABLE `ct_vehicule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_vehicule_ct_marque1_idx` (`ct_marque_id`),
  ADD KEY `fk_ct_vehicule_ct_genre1_idx` (`ct_genre_id`);

--
-- Index pour la table `ct_visite`
--
ALTER TABLE `ct_visite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_visite_ct_carte_grise1_idx` (`ct_carte_grise_id`),
  ADD KEY `fk_ct_visite_ct_usage1_idx` (`ct_usage_id`),
  ADD KEY `fk_ct_visite_ct_user1_idx` (`ct_user_id`),
  ADD KEY `fk_ct_visite_ct_type_visite1_idx` (`ct_type_visite_id`),
  ADD KEY `fk_ct_visite_ct_user2_idx` (`ct_verificateur_id`),
  ADD KEY `fk_ct_visite_ct_centre1_idx` (`ct_centre_id`);

--
-- Index pour la table `ct_visite_anomalies`
--
ALTER TABLE `ct_visite_anomalies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visite_anomalies_visite_id_index` (`visite_id`),
  ADD KEY `visite_anomalies_anomalie_id_index` (`anomalie_id`);

--
-- Index pour la table `ct_visite_extra`
--
ALTER TABLE `ct_visite_extra`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ct_visite_extra_has_ct_visite`
--
ALTER TABLE `ct_visite_extra_has_ct_visite`
  ADD PRIMARY KEY (`ct_visite_extra_id`,`ct_visite_id`),
  ADD KEY `IDX_74832D8815D88434` (`ct_visite_extra_id`),
  ADD KEY `IDX_74832D885314CD4` (`ct_visite_id`);

--
-- Index pour la table `ct_visite_extra_tarif`
--
ALTER TABLE `ct_visite_extra_tarif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ct_visite_extra_tarif_ct_visite_extra1_idx` (`ct_visite_extra_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ct_anomalie`
--
ALTER TABLE `ct_anomalie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_anomalie_type`
--
ALTER TABLE `ct_anomalie_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_carosserie`
--
ALTER TABLE `ct_carosserie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_carte_grise`
--
ALTER TABLE `ct_carte_grise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_centre`
--
ALTER TABLE `ct_centre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_const_av_ded`
--
ALTER TABLE `ct_const_av_ded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_const_av_ded_carac`
--
ALTER TABLE `ct_const_av_ded_carac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_const_av_ded_type`
--
ALTER TABLE `ct_const_av_ded_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_genre`
--
ALTER TABLE `ct_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_genre_tarif`
--
ALTER TABLE `ct_genre_tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_marque`
--
ALTER TABLE `ct_marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_motif`
--
ALTER TABLE `ct_motif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_motif_tarif`
--
ALTER TABLE `ct_motif_tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_province`
--
ALTER TABLE `ct_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_reception`
--
ALTER TABLE `ct_reception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_role`
--
ALTER TABLE `ct_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_source_energie`
--
ALTER TABLE `ct_source_energie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_type_reception`
--
ALTER TABLE `ct_type_reception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_type_visite`
--
ALTER TABLE `ct_type_visite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_usage`
--
ALTER TABLE `ct_usage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_user`
--
ALTER TABLE `ct_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_utilisation`
--
ALTER TABLE `ct_utilisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_vehicule`
--
ALTER TABLE `ct_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_visite`
--
ALTER TABLE `ct_visite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_visite_anomalies`
--
ALTER TABLE `ct_visite_anomalies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_visite_extra`
--
ALTER TABLE `ct_visite_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ct_visite_extra_tarif`
--
ALTER TABLE `ct_visite_extra_tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ct_anomalie`
--
ALTER TABLE `ct_anomalie`
  ADD CONSTRAINT `FK_E4809465F16CE4D9` FOREIGN KEY (`ct_anomalie_type_id`) REFERENCES `ct_anomalie_type` (`id`);

--
-- Contraintes pour la table `ct_anomalie_has_visite`
--
ALTER TABLE `ct_anomalie_has_visite`
  ADD CONSTRAINT `FK_77F952655314CD4` FOREIGN KEY (`ct_visite_id`) REFERENCES `ct_visite` (`id`),
  ADD CONSTRAINT `FK_77F95265D0C80021` FOREIGN KEY (`ct_anomalie_id`) REFERENCES `ct_anomalie` (`id`);

--
-- Contraintes pour la table `ct_carte_grise`
--
ALTER TABLE `ct_carte_grise`
  ADD CONSTRAINT `FK_A447BE73346884A7` FOREIGN KEY (`ct_vehicule_id`) REFERENCES `ct_vehicule` (`id`),
  ADD CONSTRAINT `FK_A447BE7355B81AF1` FOREIGN KEY (`ct_utilisation_id`) REFERENCES `ct_utilisation` (`id`),
  ADD CONSTRAINT `FK_A447BE737EE62163` FOREIGN KEY (`ct_source_energie_id`) REFERENCES `ct_source_energie` (`id`),
  ADD CONSTRAINT `FK_A447BE7382C8474E` FOREIGN KEY (`ct_centre_id`) REFERENCES `ct_centre` (`id`),
  ADD CONSTRAINT `FK_A447BE73F2AE3878` FOREIGN KEY (`ct_carosserie_id`) REFERENCES `ct_carosserie` (`id`);

--
-- Contraintes pour la table `ct_centre`
--
ALTER TABLE `ct_centre`
  ADD CONSTRAINT `FK_902E42D9764A0FC` FOREIGN KEY (`ct_province_id`) REFERENCES `ct_province` (`id`);

--
-- Contraintes pour la table `ct_const_av_ded`
--
ALTER TABLE `ct_const_av_ded`
  ADD CONSTRAINT `FK_5116CBD82C8474E` FOREIGN KEY (`ct_centre_id`) REFERENCES `ct_centre` (`id`),
  ADD CONSTRAINT `FK_5116CBDBDF4F30F` FOREIGN KEY (`ct_verificateur_id`) REFERENCES `ct_user` (`id`);

--
-- Contraintes pour la table `ct_const_av_ded_carac`
--
ALTER TABLE `ct_const_av_ded_carac`
  ADD CONSTRAINT `FK_FAC238B67EE62163` FOREIGN KEY (`ct_source_energie_id`) REFERENCES `ct_source_energie` (`id`),
  ADD CONSTRAINT `FK_FAC238B683FAC2F` FOREIGN KEY (`ct_const_av_ded_id`) REFERENCES `ct_const_av_ded` (`id`),
  ADD CONSTRAINT `FK_FAC238B68CD3293F` FOREIGN KEY (`ct_marque_id`) REFERENCES `ct_marque` (`id`),
  ADD CONSTRAINT `FK_FAC238B6B08BD647` FOREIGN KEY (`ct_const_av_ded_type_id`) REFERENCES `ct_const_av_ded_type` (`id`),
  ADD CONSTRAINT `FK_FAC238B6D74CE6E6` FOREIGN KEY (`ct_genre_id`) REFERENCES `ct_genre` (`id`),
  ADD CONSTRAINT `FK_FAC238B6F2AE3878` FOREIGN KEY (`ct_carosserie_id`) REFERENCES `ct_carosserie` (`id`);

--
-- Contraintes pour la table `ct_genre_tarif`
--
ALTER TABLE `ct_genre_tarif`
  ADD CONSTRAINT `FK_CD5527BAD74CE6E6` FOREIGN KEY (`ct_genre_id`) REFERENCES `ct_genre` (`id`);

--
-- Contraintes pour la table `ct_motif_tarif`
--
ALTER TABLE `ct_motif_tarif`
  ADD CONSTRAINT `FK_110F10F845348DE0` FOREIGN KEY (`ct_motif_id`) REFERENCES `ct_motif` (`id`);

--
-- Contraintes pour la table `ct_reception`
--
ALTER TABLE `ct_reception`
  ADD CONSTRAINT `FK_942215A2346884A7` FOREIGN KEY (`ct_vehicule_id`) REFERENCES `ct_vehicule` (`id`),
  ADD CONSTRAINT `FK_942215A245348DE0` FOREIGN KEY (`ct_motif_id`) REFERENCES `ct_motif` (`id`),
  ADD CONSTRAINT `FK_942215A24E379674` FOREIGN KEY (`ct_type_reception_id`) REFERENCES `ct_type_reception` (`id`),
  ADD CONSTRAINT `FK_942215A255B81AF1` FOREIGN KEY (`ct_utilisation_id`) REFERENCES `ct_utilisation` (`id`),
  ADD CONSTRAINT `FK_942215A282C8474E` FOREIGN KEY (`ct_centre_id`) REFERENCES `ct_centre` (`id`),
  ADD CONSTRAINT `FK_942215A2C211A85D` FOREIGN KEY (`ct_user_id`) REFERENCES `ct_user` (`id`);

--
-- Contraintes pour la table `ct_usage_tarif`
--
ALTER TABLE `ct_usage_tarif`
  ADD CONSTRAINT `FK_FA9D5B81B48AD363` FOREIGN KEY (`ct_usage_id`) REFERENCES `ct_usage` (`id`);

--
-- Contraintes pour la table `ct_user`
--
ALTER TABLE `ct_user`
  ADD CONSTRAINT `FK_A115979E82C8474E` FOREIGN KEY (`ct_centre_id`) REFERENCES `ct_centre` (`id`),
  ADD CONSTRAINT `FK_A115979EB37C5964` FOREIGN KEY (`ct_role_id`) REFERENCES `ct_role` (`id`);

--
-- Contraintes pour la table `ct_vehicule`
--
ALTER TABLE `ct_vehicule`
  ADD CONSTRAINT `FK_BCF5CAE48CD3293F` FOREIGN KEY (`ct_marque_id`) REFERENCES `ct_marque` (`id`),
  ADD CONSTRAINT `FK_BCF5CAE4D74CE6E6` FOREIGN KEY (`ct_genre_id`) REFERENCES `ct_genre` (`id`);

--
-- Contraintes pour la table `ct_visite`
--
ALTER TABLE `ct_visite`
  ADD CONSTRAINT `FK_7F3E82E382C8474E` FOREIGN KEY (`ct_centre_id`) REFERENCES `ct_centre` (`id`),
  ADD CONSTRAINT `FK_7F3E82E39C6EC188` FOREIGN KEY (`ct_type_visite_id`) REFERENCES `ct_type_visite` (`id`),
  ADD CONSTRAINT `FK_7F3E82E3A2084498` FOREIGN KEY (`ct_carte_grise_id`) REFERENCES `ct_carte_grise` (`id`),
  ADD CONSTRAINT `FK_7F3E82E3B48AD363` FOREIGN KEY (`ct_usage_id`) REFERENCES `ct_usage` (`id`),
  ADD CONSTRAINT `FK_7F3E82E3BDF4F30F` FOREIGN KEY (`ct_verificateur_id`) REFERENCES `ct_user` (`id`),
  ADD CONSTRAINT `FK_7F3E82E3C211A85D` FOREIGN KEY (`ct_user_id`) REFERENCES `ct_user` (`id`);

--
-- Contraintes pour la table `ct_visite_anomalies`
--
ALTER TABLE `ct_visite_anomalies`
  ADD CONSTRAINT `FK_B14B94EEAEEAB197` FOREIGN KEY (`anomalie_id`) REFERENCES `ct_anomalie` (`id`),
  ADD CONSTRAINT `FK_B14B94EEC1C5DC59` FOREIGN KEY (`visite_id`) REFERENCES `ct_visite` (`id`);

--
-- Contraintes pour la table `ct_visite_extra_has_ct_visite`
--
ALTER TABLE `ct_visite_extra_has_ct_visite`
  ADD CONSTRAINT `FK_74832D8815D88434` FOREIGN KEY (`ct_visite_extra_id`) REFERENCES `ct_visite_extra` (`id`),
  ADD CONSTRAINT `FK_74832D885314CD4` FOREIGN KEY (`ct_visite_id`) REFERENCES `ct_visite` (`id`);

--
-- Contraintes pour la table `ct_visite_extra_tarif`
--
ALTER TABLE `ct_visite_extra_tarif`
  ADD CONSTRAINT `FK_E3F1985E15D88434` FOREIGN KEY (`ct_visite_extra_id`) REFERENCES `ct_visite_extra` (`id`);
