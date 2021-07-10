$(function () {
    $("#form-carte-grise, #form-vehicule").find('input, select').attr('readonly', true);

    var _id_visite = $('#ct-visite-id').val();
    if (_id_visite == '')
        $("#btn-generate-reporting-add").hide();

    // Numéro de série
    $('#ct_numero_serie').keyup(function(event) {
        ajaxFillValueFormCarteGrise($(this).val(), 'serie');
    });

    $( "#ct_numero_serie" ).autocomplete({
        source: function (request, response) {
            $.ajax({
                url: _autocomplete_numero_serie_ajax_uri,
                dataType: "json",
                data: { term: $("#ct_numero_serie").val() },
                type: "POST",
                success: function(data) {
                    data = data.length > 0 ? data : ['Aucun résultat trouvé!'];
                    response($.map(data, function(obj) {
                        return {
                            label: obj,
                            value: obj
                        };
                    }));
                }
            });
        },
        minLength: 2,
        select: function(event , ui) {
            ajaxFillValueFormCarteGrise(ui.item.label, 'serie');
        }
    });

    $("#ct_verif_centre").change(function () {
        var _id_centre = $("#ct_verif_centre").val();
        var _id_select = "ct_verif";
        ajaxSelectVerifByCentre(_id_centre, _id_select);
    });

    // Numéro d'immatriculation
    $('#ct_numero_immatriculation').keyup(function(event) {
        ajaxFillValueFormCarteGrise($(this).val(), 'immatriculation');
    });

    $( "#ct_numero_immatriculation" ).autocomplete({
        source: function (request, response) {
            $.ajax({
                url: _autocomplete_numero_immatriculation_ajax_uri,
                dataType: "json",
                data: { term: $("#ct_numero_immatriculation").val() },
                type: "POST",
                success: function(data) {
                    data = data.length > 0 ? data : ['Aucun résultat trouvé!'];
                    response($.map(data, function(obj) {
                        return {
                            label: obj,
                            value: obj
                        };
                    }));
                }
            });
        },
        minLength: 2,
        select: function(event , ui) {
            ajaxFillValueFormCarteGrise(ui.item.label, 'immatriculation');
        }
    });

    // Génération reporting
    $('#btn-generate-reporting').click(function(event) {
        ajaxGenerateCarteGrise();
    });

    // Génération PV Visite
    $('#btn-generate-pv-visite').click(function(event) {
        ajaxGeneratePvVisite();
        return false;
    });

    // Génération reporting
    $('#btn-generate-reporting-add').click(function(event) {
        ajaxGenerateCarteGriseAdd();
    });

    // Génération PV Visite
    $('#btn-generate-pv-visite-add').click(function(event) {
        ajaxGeneratePvVisiteAdd();
        return false;
    });

    // Génération feuille de caisse
    $('#btn-generate-feuille-caisse').click(function(event) {
        ajaxGenerateFeuilleCaisse();

        return false;
    });

    // Génération liste anomalies
    $('#btn-generate-liste-anomalie').click(function(event) {
        ajaxGenerateListeAnomalies();

        return false;
    });

    // Génération fiche de verificateur
    $('#btn-generate-fiche-verif').click(function(event) {
        ajaxGenerateFicheVerificateur();

        return false;
    });

    // Change usage par type visite
    $("#ct_service_metiermanagerbundle_visite_ctTypeVisite").change(function () {
        ajaxSelectUsage();
    });

    // Mettre expiration par usage
    $("#ct_service_metiermanagerbundle_visite_ctUsage").change(function () {
        ajaxSetExpiration();
    });

    $("#ct_service_metiermanagerbundle_visite_ctCentre").change(function () {
        var _id_centre = $("#ct_service_metiermanagerbundle_visite_ctCentre").val();
        var _id_select = "ct_service_metiermanagerbundle_visite_ctVerificateur";
        ajaxSelectVerifByCentre(_id_centre, _id_select);
    });

    // Affichage champ durée réparation accordée
    $('#ct_service_metiermanagerbundle_visite_ctAnomalie').select2().on("change", function(e) {
        var _selected_element = $(e.currentTarget);
        var _select_val       = _selected_element.val();

        if (_select_val != '') {
            $("#form-duree-reparation").removeClass('hidden');
        } else {
            $("#form-duree-reparation").addClass('hidden');
        }
    });
})

/**
 * Ajax pour autocompléter les formulaires carte grise
 */
function ajaxFillValueFormCarteGrise(_data_value, _type) {
    if (_data_value != '') {
        $('#link-download').hide();

        $.ajax({
            type: "POST",
            url: _fill_form_carte_grise_ajax_uri,
            data: {
                'numero' : _data_value,
                'type' : _type
            },
            cache: false,
            success: function(data) {
                if (data.statut == true) {
                    bootbox.alert(data.message);

                    var _carte_grise = data.data;

                    // Carte grise
                    $('#ct-visite-id').val(_carte_grise.vst_id);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgDateEmission').val(_carte_grise.cg_date_emission);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgImmatriculation').val(_carte_grise.cg_numero_immatriculation);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgNom').val(_carte_grise.cg_nom_proprietaire);
                    // $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgPrenom').val(_carte_grise.cg_prenom_proprietaire);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgProfession').val(_carte_grise.cg_profession_proprietaire);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgAdresse').val(_carte_grise.cg_adresse_proprietaire);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgCommune').val(_carte_grise.cg_commune_proprietaire);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgPuissanceAdmin').val(_carte_grise.cg_puissance_administrative);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgNbrAssis').val(_carte_grise.cg_nbr_assis);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgMiseEnService').val(_carte_grise.cg_mise_en_service);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctCarosserie').val(_carte_grise.cg_carosserie);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctSourceEnergie').val(_carte_grise.cg_source);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgNumCarteViolette').val(_carte_grise.cg_carte_violette);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgLieuCarteViolette').val(_carte_grise.cg_lieu_carte_violette);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgDateCarteViolette').val(_carte_grise.cg_date_carte_violette);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgPatente').val(_carte_grise.cg_patente);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgAni').val(_carte_grise.cg_ani);
                    if (_carte_grise.cg_is_transport) {
                        $('#form-transport').removeClass('hidden');
                        $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgIsTransport').prop( "checked", true );
                        $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgNomCooperative').val(_carte_grise.cg_nom_cooperative);
                        $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgItineraire').val(_carte_grise.cg_itineraire);
                        $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgNumVignette').val(_carte_grise.cg_numero_licence);
                    } else {
                        $('#form-transport').addClass('hidden');
                        $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_cgIsTransport').prop( "checked", false );
                    }

                    // Vehicule
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_ctMarque').val(_carte_grise.vhc_marque).change();
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_ctGenre').val(_carte_grise.vhc_genre).change();
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_vhcType').val(_carte_grise.vhc_type);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_vhcNumMoteur').val(_carte_grise.vhc_numero_moteur);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_vhcNumSerie').val(_carte_grise.vhc_numero_serie);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_vhcPuissance').val(_carte_grise.vhc_puissance);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_vhcPoidsTotalCharge').val(_carte_grise.vhc_poids_total);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_vhcPoidsVide').val(_carte_grise.vhc_poids_vide);
                    $('#ct_service_metiermanagerbundle_visite_ctCarteGrise_ctVehicule_vhcChargeUtile').val(_carte_grise.vhc_charge_utile);

                    // Bouton générer reporting
                    var _id_visite = $('#ct-visite-id').val();
                    if (_id_visite != '')
                        $("#btn-generate-reporting-add").show();
                    else
                        $("#btn-generate-reporting-add").hide();
                }
            }
        });
    }
}

/**
 * Ajax pour générer la carte visite
 */
function ajaxGenerateCarteGrise() {
    var _loading   = "<i class='fa-li fa fa-spinner fa-spin'></i>";
    var _id_visite = $('#ct-visite-id').val();

    $('#link-download').show();
    $('#link-download').html(_loading);
    $.ajax({
        type: "POST",
        url: _generate_reporting_ajax_uri,
        cache: false,
        data: { 'id' : _id_visite},
        success: function(data) {
            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-success'>Télécharger <i class='fa-li fa fa-file-word-o'></i></a>"

            $('#link-download').html(_link_download);
        }
    });
}

/**
 * Ajax pour générer PV visite
 */
function ajaxGeneratePvVisite() {
    var _loading   = "<i class='fa-li fa fa-spinner fa-spin'></i>";
    var _id_visite = $('#ct-visite-id').val();

    $('#link-download-pv').show();
    $('#link-download-pv').html(_loading);
    $('#link-download-pv-inapte').html("");
    $.ajax({
        type: "POST",
        url: _generate_pv_visite_ajax_uri,
        cache: false,
        data: { 'id' : _id_visite},
        success: function(data) {
            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-warning'>Télécharger PV</a>"
            if ("url_path_inapte" in data) {
                var _link_download_inapte = "<a href='" + data.url_path_inapte + "' title='Télécharger' target='_blank' class='btn btn-danger'>Télécharger PV Inapte</a>"
                $('#link-download-pv-inapte').html(_link_download_inapte);
                $('#link-download-pv').html("");
            } else {
                $('#link-download-pv').html(_link_download);
            }


        }
    });
}

/**
 * Ajax pour générer la carte visite
 */
function ajaxGenerateCarteGriseAdd() {
    var _loading   = "<i class='fa-li fa fa-spinner fa-spin'></i>";
    var _id_visite = $('#ct-visite-id').val();

    $('#link-download-cg').show();
    $('#link-download-cg').html(_loading);
    $.ajax({
        type: "POST",
        url: _generate_reporting_ajax_uri,
        cache: false,
        data: { 'id' : _id_visite},
        success: function(data) {
            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-success'>Télécharger <i class='fa-li fa fa-file-word-o'></i></a>"

            $('#link-download-cg').html(_link_download);
        }
    });
}

/**
 * Ajax pour générer PV visite
 */
function ajaxGeneratePvVisiteAdd() {
    var _loading   = "<i class='fa-li fa fa-spinner fa-spin'></i>";
    var _id_visite = $('#ct-visite-id').val();

    $('#link-download-pv-add').show();
    $('#link-download-pv-add').html(_loading);
    $('#link-download-pv-inapte-add').html("");
    $.ajax({
        type: "POST",
        url: _generate_pv_visite_ajax_uri,
        cache: false,
        data: { 'id' : _id_visite},
        success: function(data) {
            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-warning'>Télécharger PV</a>"
            if ("url_path_inapte" in data) {
                var _link_download_inapte = "<a href='" + data.url_path_inapte + "' title='Télécharger' target='_blank' class='btn btn-danger'>Télécharger Recu Inapte</a>"
                $('#link-download-pv-inapte-add').html(_link_download_inapte);
            }

            $('#link-download-pv-add').html(_link_download);
        }
    });
}

/**
 * Ajax pour générer le feuille de caisse
 */
function ajaxGenerateFeuilleCaisse() {
    var _loading = "<i class='fa-li fa fa-spinner fa-spin kl-spin'></i>";
    var _date    = $('#ct_fdc_date').val();
    var _centre  = $('#ct_fdc_centre').val();
    var _type    = $('#ct_fdc_type').val();

    $('#link-download-feuille-caisse').show();
    $('#link-download-feuille-caisse').html(_loading);
    $('#link-download-feuille-caisse-omavet').html("");
    $.ajax({
        type: "POST",
        url: _generate_feuille_caisse_ajax_uri,
        cache: false,
        data: { 'date' : _date, 'centre_id' : _centre, 'type_visite': _type},
        success: function(data) {
            var _url_path_omavet = "";
            if (("download_path_omavet" in data) && ("url_path_omavet" in data)) {
                _url_path_omavet = data.url_path_omavet;
                var _link_download_omavet = "<a href='" + _url_path_omavet + "' title='Télécharger' target='_blank' class='btn btn-warning kl-download-omave'>Télécharger OMAVET</a>"
                $('#link-download-feuille-caisse-omavet').html(_link_download_omavet);
            }
            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-success kl-download'>Télécharger</a>"

            $('#link-download-feuille-caisse').html(_link_download);
        }
    });
}

/**
 * Ajax pour lister verificateur par centre
 */
function ajaxSelectVerif() {
    var _id_centre    = $('#ct_verif_centre').val();

    $.ajax({
        type: "POST",
        url: _select_verif_by_centre_ajax_uri,
        cache: false,
        data: { 'centre_id' : _id_centre},
        success: function(data) {
            var _select = "<option value='' selected='selected'>Choisir</option>";
            for (var _i = 0; _i < data.length; _i++) {
                var _verif = data[_i];
                var _verif_id = _verif.id;
                var _verif_libelle = _verif.libelle;
                _select += "<option value='"+_verif_id+"'>"+_verif_libelle+"</option>";
            }

            $('#ct_verif').html(_select);
        }
    });
}

/**
 * Ajax pour lister verificateur par centre
 */
function ajaxSelectVerifByCentre(_id_centre, _id_select) {

    $.ajax({
        type: "POST",
        url: _select_verif_by_centre_ajax_uri,
        cache: false,
        data: { 'centre_id' : _id_centre},
        success: function(data) {
            var _select = "<option value='' selected='selected'>Choisir</option>";
            for (var _i = 0; _i < data.length; _i++) {
                var _verif = data[_i];
                var _verif_id = _verif.id;
                var _verif_libelle = _verif.libelle;
                _select += "<option value='"+_verif_id+"'>"+_verif_libelle+"</option>";
            }

            $('#'+_id_select).html(_select);
        }
    });
}

/**
 * Ajax pour générer Liste anomalies
 */
function ajaxGenerateListeAnomalies() {
    var _loading   = "<i class='fa-li fa fa-spinner fa-spin kl-spin'></i>";
    var _date    = $('#ct_anomalie_date').val();
    var _centre  = $('#ct_anomalie_centre').val();

    $('#link-download-liste-anomalie').show();
    $('#link-download-liste-anomalie').html(_loading);
    $.ajax({
        type: "POST",
        url: _generate_liste_anomalies_ajax_uri,
        cache: false,
        data: { 'date' : _date, 'centre_id' : _centre},
        success: function(data) {

            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-warning kl-download-anomalie'>Télécharger Liste Anomalie</a>"

            $('#link-download-liste-anomalie').html(_link_download);
        }
    });
}

/**
 * Ajax pour générer la fiche verificateur
 */
function ajaxGenerateFicheVerificateur() {
    var _loading = "<i class='fa-li fa fa-spinner fa-spin'></i>";
    var _date    = $('#ct_date_verif').val();
    var _centre  = $('#ct_verif_centre').val();
    var _id_verif     = $('#ct_verif').val();

    $('#link-download-fiche-verif').show();
    $('#link-download-fiche-verif').html(_loading);
    $.ajax({
        type: "POST",
        url: _generate_fiche_ctrl_verif_ajax_uri,
        cache: false,
        data: { 'date' : _date, 'centre_id' : _centre, 'verif_id' : _id_verif},
        success: function(data) {

            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-success'>Télécharger</a>"

            $('#link-download-fiche-verif').html(_link_download);
        }
    });
}

/**
 * Ajax pour lister usage par type visite
 */
function ajaxSelectUsage() {
    var _id_visite_type    = $('#ct_service_metiermanagerbundle_visite_ctTypeVisite').val();


    $.ajax({
        type: "POST",
        url: _select_usage_by_type_visite_ajax_uri,
        cache: false,
        data: { 'type_visite_id' : _id_visite_type},
        success: function(data) {
            var _select = "<option value='' selected='selected'>Choisir</option>";
            for (var _i = 0; _i < data.length; _i++) {
                var _usage = data[_i];
                var _usage_id = _usage.id;
                var _usage_libelle = _usage.libelle;
                _select += "<option value='"+_usage_id+"'>"+_usage_libelle+"</option>";
            }

            $('#ct_service_metiermanagerbundle_visite_ctUsage').html(_select);
        }
    });
}

/**
 * Ajax pour mettre expiration par usage
 */
function ajaxSetExpiration() {
    var _id_usage    = $('#ct_service_metiermanagerbundle_visite_ctUsage').val();

    $.ajax({
        type: "POST",
        url: _select_expiration_by_usage_ajax_uri,
        cache: false,
        data: { 'usage_id' : _id_usage},
        success: function(data) {
            if ("expiration" in data) {
                var _expiration = data.expiration;
                $('#ct_service_metiermanagerbundle_visite_vstDateExpiration').val(_expiration);
            }
        }
    });
}