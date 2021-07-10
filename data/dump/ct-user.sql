--
-- Contenu de la table `ct_user`
--

INSERT INTO `ct_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `usr_name`, `usr_email`, `usr_locked`, `usr_password`, `usr_adresse`, `usr_token`, `usr_created_at`, `usr_updated_at`, `usr_locked_update`, `usr_request_update`, `usr_profession`, `usr_telephone`, `usr_is_connected`, `usr_presence`, `ct_centre_id`, `ct_role_id`) VALUES
(1, 'superadmin@ct.mg', 'superadmin@ct.mg', 'superadmin@ct.mg', 'superadmin@ct.mg', 1, NULL, '$2y$13$00i3h0G7QQzJHe/Rie7b/eYsl7VPCVzpb/Bz2R6ewx/HL1ZdoPsAy', '2017-10-12 12:16:34', NULL, NULL, 'a:1:{i:0;s:15:"ROLE_SUPERADMIN";}', NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-12 08:48:39', NULL, 1, 0, NULL, NULL, 0, NULL, NULL, NULL);
