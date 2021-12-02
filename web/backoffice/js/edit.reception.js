$(function () {
    // Check focus
    var _is_focus = $('#id-is-focus').val();
    if (_is_focus == 1) {
        $("#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumSerie").focus();
    }
    // Récuperation url ajax
    var _url_autocomplete = $("#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumSerie").attr("ajax-url");

    $( "#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumSerie" ).autocomplete({
        minLength: 2,
        source: function (request, response) {
            $.ajax({
                url: _url_autocomplete,
                dataType: "json",
                data: {term: $("#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumSerie").val()},
                type: "POST",
                success: function(data) {
                    // bootbox.alert("Numero de serie existe deja");
                    // $('.ui-autocomplete-loading').removeClass("ui-autocomplete-loading");
                    response($.map(data, function(obj) {
                        return {
                            label: obj.num_serie,
                            value: obj.num_serie,
                            id: obj.id_reception // don't really need this unless you're using it elsewhere.
                        };
                    }));
                }
            });
        },
        select: function (event, ui) {
            bootbox.alert("Numero de serie existe deja! Vous serez rediriger sur la page edit",
                function(){ location.href = _base_url + "reception/" + ui.item.id + "/redirect-to-edit"; });
            return false;
        },
    });

    $( "#ct_numero_serie" ).autocomplete({
        minLength: 2,
        source: function (request, response) {
            $.ajax({
                url: _autocomplete_numero_serie_ajax_uri,
                dataType: "json",
                data: {term: $("#ct_numero_serie").val()},
                type: "POST",
                success: function(data) {
                    if(data.length > 0)
                    response($.map(data, function(obj) {
                        return {
                            id:                 obj.rcp_id, // don't really need this unless you're using it elsewhere.
                            label:              obj.rcp_veh_num_serie,
                            value:              obj.rcp_veh_num_serie,
                            numero_pv:          obj.rcp_num_pv,
                            serie_type:         obj.rcp_veh_type_serie,
                            immatriculation:    obj.rcp_immatriculation,
                            num_moteur:         obj.rcp_veh_num_moteur,
                            genre:              obj.rcp_veh_genre,
                            marque:             obj.rcp_veh_marque,
                            cylindre:           obj.rcp_veh_cylindre,
                            puissance:          obj.rcp_veh_puissance,
                            charge_utile:       obj.rcp_veh_charge_utile,
                            poids_vide:         obj.rcp_veh_poids_vide,
                            poids_total_charge: obj.rcp_veh_ptac,
                            source_energie:     obj.rcp_source_energie,
                            carosserie:         obj.rcp_carosserie,
                            nbr_assis:          obj.rcp_nbr_assis,
                            nbr_debout:         obj.rcp_nbr_debout,
                            mise_service:       obj.rcp_mise_service,
                            motif:              obj.rcp_motif,
                            proprietaire:       obj.rcp_proprietaire,
                            adresse:            obj.rcp_adresse,
                            profession:         obj.rcp_profession,
                            utilisation:        obj.rcp_utilisation,
                            num_pv_modified:    obj.rcp_num_pv_modified,
                            num_group:          obj.rcp_num_group,
                            type_reception:     obj.rcp_reception_type,
                            num_serie:          obj.rcp_veh_num_serie,
                        };
                    }));else{
                        data = ['Aucun résultat trouvé!'];
                        response($.map(data, function(obj) {
                            return {
                                label: obj,
                                value: obj
                            };
                        }));
                    }
                    //bootbox.alert("Aucun resultat trouvé hein!",
                     //   function(){ $('.ui-autocomplete-loading').removeClass("ui-autocomplete-loading"); });
                }
            });
        },
        select: function (event, ui) {
            $('#ct_numero_immatriculation').val(ui.item.immatriculation);
            $('#ct_numero_serie').val(ui.item.num_serie);
            // PV
            $('#ct_numero_pv').val(ui.item.numero_pv);
            // Informations Vehicules
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumSerie').val(ui.item.num_serie).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcType').val(ui.item.serie_type).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpImmatriculation').val(ui.item.immatriculation).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumMoteur').val(ui.item.num_moteur).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_ctGenre').val(ui.item.genre).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_ctMarque').val(ui.item.marque).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcCylindre').val(ui.item.cylindre).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPuissance').val(ui.item.puissance).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcChargeUtile').val(ui.item.charge_utile).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsVide').val(ui.item.poids_vide).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsTotalCharge').val(ui.item.poids_total_charge).prop("readonly", "readonly");
            // Informations Receptions
            $('#ct_type_reception').val(ui.item.type_reception);
            $('#ct_service_metiermanagerbundle_reception_ctSourceEnergie').val(ui.item.source_energie).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_ctCarosserie').val(ui.item.carosserie).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_rcpNbrAssis').val(ui.item.nbr_assis).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpNbrDebout').val(ui.item.nbr_debout).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpMiseService').val(ui.item.mise_service).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctMotif').val(ui.item.motif).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_rcpProprietaire').val(ui.item.proprietaire).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpAdresse').val(ui.item.adresse).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpProfession').val(ui.item.profession).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctUtilisation').val(ui.item.utilisation).change().prop("disabled", "disabled");

            // Lien generer PV
            $('#ct_link_generer_pv').removeClass("disabled").prop("href", ui.item.id + "/generer-pv-duplicata");
            return false;
        }
    });


    // Set choix reception height
    $('#id-choix-reception .box').height($('#id-bilan-reception .box').height());

    $( "#ct_numero_immatriculation" ).autocomplete({
        minLength: 2,
        source: function (request, response) {
            $.ajax({
                url: _autocomplete_immatricule_ajax_uri,
                dataType: "json",
                data: {term: $("#ct_numero_immatriculation").val()},
                type: "POST",
                success: function(data) {
                    if(data.length > 0)
                    response($.map(data, function(obj) {
                        return {
                            id:                 obj.rcp_id, // don't really need this unless you're using it elsewhere.
                            label:              obj.rcp_immatriculation,
                            value:              obj.rcp_immatriculation,
                            num_serie:          obj.rcp_veh_num_serie,
                            serie_type:         obj.rcp_veh_type_serie,
                            numero_pv:          obj.rcp_num_pv,
                            immatriculation:    obj.rcp_immatriculation,
                            num_moteur:         obj.rcp_veh_num_moteur,
                            genre:              obj.rcp_veh_genre,
                            marque:             obj.rcp_veh_marque,
                            cylindre:           obj.rcp_veh_cylindre,
                            puissance:          obj.rcp_veh_puissance,
                            charge_utile:       obj.rcp_veh_charge_utile,
                            poids_vide:         obj.rcp_veh_poids_vide,
                            poids_total_charge: obj.rcp_veh_ptac,
                            source_energie:     obj.rcp_source_energie,
                            carosserie:         obj.rcp_carosserie,
                            nbr_assis:          obj.rcp_nbr_assis,
                            nbr_debout:         obj.rcp_nbr_debout,
                            mise_service:       obj.rcp_mise_service,
                            motif:              obj.rcp_motif,
                            proprietaire:       obj.rcp_proprietaire,
                            adresse:            obj.rcp_adresse,
                            profession:         obj.rcp_profession,
                            utilisation:        obj.rcp_utilisation,
                            num_pv_modified:    obj.rcp_num_pv_modified,
                            num_group:          obj.rcp_num_group,
                            type_reception:     obj.rcp_reception_type,
                        };
                    }));else{
                        data = ['Aucun résultat trouvé!'];
                        response($.map(data, function(obj) {
                            return {
                                label: obj,
                                value: obj
                            };
                        }));
                    }
                }
            });
        },
        select: function (event, ui) {
            $('#ct_numero_immatriculation').val(ui.item.immatriculation);
            $( "#ct_numero_serie" ).val(ui.item.num_serie);
            // PV
            $('#ct_numero_pv').val(ui.item.numero_pv);
            // Informations Vehicules
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumSerie').val(ui.item.num_serie).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcType').val(ui.item.serie_type).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpImmatriculation').val(ui.item.immatriculation).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcNumMoteur').val(ui.item.num_moteur).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_ctGenre').val(ui.item.genre).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_ctMarque').val(ui.item.marque).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcCylindre').val(ui.item.cylindre).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPuissance').val(ui.item.puissance).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcChargeUtile').val(ui.item.charge_utile).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsVide').val(ui.item.poids_vide).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsTotalCharge').val(ui.item.poids_total_charge).prop("readonly", "readonly");
            // Informations Receptions
            $('#ct_type_reception').val(ui.item.type_reception);
            $('#ct_service_metiermanagerbundle_reception_ctSourceEnergie').val(ui.item.source_energie).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_ctCarosserie').val(ui.item.carosserie).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_rcpNbrAssis').val(ui.item.nbr_assis).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpNbrDebout').val(ui.item.nbr_debout).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpMiseService').val(ui.item.mise_service).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctMotif').val(ui.item.motif).change().prop("disabled", "disabled");
            $('#ct_service_metiermanagerbundle_reception_rcpProprietaire').val(ui.item.proprietaire).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpAdresse').val(ui.item.adresse).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_rcpProfession').val(ui.item.profession).prop("readonly", "readonly");
            $('#ct_service_metiermanagerbundle_reception_ctUtilisation').val(ui.item.utilisation).change().prop("disabled", "disabled");

            // Lien generer PV
            $('#ct_link_generer_pv').removeClass("disabled").prop("href", ui.item.id + "/generer-pv-duplicata");
            return false;
        },
        error: function (result) {
            $('.ui-autocomplete-loading').removeClass("ui-autocomplete-loading");
        },
    });

    var action = $('#nb_vehicule').prop('action');

    $('#select-type').change(function() {
        var c = $(this).find(':selected').val();
        var expr_type = /ype/;
        var expr_isole = /sol/;
        $('#creer-form').removeClass('hide');
        if (expr_isole.test(c)) { // type isole
            $('#nb-vehicule-form').addClass('visibility-hidden');
            //$('#type-reception').val("isole")
            $('#ct_nb_total_vehicule').removeAttr("required");
            $('#nb_vehicule').prop('action', action + '/isole');
        } else if (expr_type.test(c)) { // type par_type
            $('#nb-vehicule-form').removeClass('visibility-hidden');
            //$('#type-reception').val("type")
            $('#ct_nb_total_vehicule').prop("required", true);
            $('#nb_vehicule').prop('action', action + '/type');
        } else {
            $('#creer-form').addClass('hide');
        }


    });

    var _poids_vide   = $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsVide').val();
    var _charge_utile = $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcChargeUtile').val();
    var _poids_total  = parseFloat(_poids_vide) + parseFloat(_charge_utile);

    if (!isNaN(_poids_total)) {
        $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsTotalCharge').val(_poids_total);
        if (_poids_total > 26000) bootbox.alert("Le poids total en charge ne doit pas être supérieur à 26 Tonnes!!");
    } else {
        $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsTotalCharge').val("");
    }

    $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsVide, #ct_service_metiermanagerbundle_reception_ctVehicule_vhcChargeUtile').keyup(function(event) {
        _poids_vide   = $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsVide').val();
        _charge_utile = $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcChargeUtile').val();
        _poids_total  = parseFloat(_poids_vide) + parseFloat(_charge_utile);

        if (!isNaN(_poids_total)) {
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsTotalCharge').val(_poids_total);
            if (_poids_total > 26000) bootbox.alert("Le poids total en charge ne doit pas être supérieur à 26 Tonnes!!");
        } else {
            $('#ct_service_metiermanagerbundle_reception_ctVehicule_vhcPoidsTotalCharge').val("");
        }

    });



    var _type_recep_bilan = 0;
    var _dt_value = 0;
    var _formatted = 0;

    // Datepicker
    $(".cs-datepicker").datetimepicker({
        locale: 'fr',
        viewMode: 'years',
        format: 'DD/MM/YYYY',
        maxDate: moment()
    }).on('dp.change', function(e){
        var _formatedValue = e.date.format(e.date._f);
        _formatted = _formatedValue.replace(/\//gi, '_');
        $("#ct_link_generer_feuille_caisse").prop("href", "generer-fdc-rec/" + _formatted + "/" + _type_recep_bilan);
        $("#ct_link_generer_fiche_controle").prop("href", "generer-fiche-controle-rec/" + _formatted + "/" + _type_recep_bilan);
    });

    _dt_value = $(".cs-datepicker").val();
    if (_dt_value)
        _formatted = _dt_value.replace(/\//gi, '_');

    $("#ct_link_generer_feuille_caisse").prop("href", "generer-fdc-rec/" + _formatted + "/" + _type_recep_bilan);
    $("#ct_link_generer_fiche_controle").prop("href", "generer-fiche-controle-rec/" + _formatted + "/" + _type_recep_bilan);

    $("#ct_link_generer_feuille_caisse").click(function(event) {
        var select_type_bilan = $("#select-type-bilan").val();
        var ct_date_generer   = $("#ct_date_generer").val();
        if (select_type_bilan == '') {
            $("#select-type-bilan").focus();

            return false;
        }
        if (ct_date_generer == '') {
            $("#ct_date_generer").focus();

            return false;
        }
    });

    $('#select-type-bilan').change(function() {
        var c = $(this).find(':selected').val();
        if (c == "") _type_recep_bilan = 0;
        else _type_recep_bilan = c;

        $("#ct_link_generer_feuille_caisse").prop("href", "generer-fdc-rec/" + _formatted + "/" + _type_recep_bilan);
        $("#ct_link_generer_fiche_controle").prop("href", "generer-fiche-controle-rec/" + _formatted + "/" + _type_recep_bilan);
    });

    $("#ct_verif_centre").change(function () {
        var _id_centre = $("#ct_verif_centre").val();
        var _id_select = "ct_verif";
        ajaxSelectVerifByCentre(_id_centre, _id_select);
    });

    // Génération feuille de caisse
    $('#btn-generate-feuille-caisse').click(function(event) {
        ajaxGenerateFeuilleCaisse();

        return false;
    });

    // Génération fiche de verificateur
    $('#btn-generate-fiche-verif').click(function(event) {
        ajaxGenerateFicheVerificateur();

        return false;
    });
});

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

