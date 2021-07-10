/**
 * Vérification existence numéro de série
 */
$(function () {
    // Numéro de série
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcNumSerie, #ct_numero_serie').keyup(function(event) {
        ajaxFillValueFormVehicule($(this).val());
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
            ajaxFillValueFormVehicule(ui.item.label);
        }
    });

    // Numéro d'immatriculation
    $('#ct_numero_immatriculation').keyup(function(event) {
        ajaxFillValueFormCarteGrise($(this).val());
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
            ajaxFillValueFormCarteGrise(ui.item.label);
        }
    });

    // Numéro d'identification
    $('#ct_numero_identification').keyup(function(event) {
        ajaxFillValueFormCarteGriseByNumeroIdentification($(this).val());
    });
    $( "#ct_numero_identification" ).autocomplete({
        source: function (request, response) {
            $.ajax({
                url: _autocomplete_numero_identification_ajax_uri,
                dataType: "json",
                data: { term: $("#ct_numero_identification").val() },
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
            ajaxFillValueFormCarteGrise(ui.item.label);
        }
    });

    // Calcul automatique poids total en charge
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPoidsVide, #ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcChargeUtile').keyup(function(event) {
        var _poids_vide   = $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPoidsVide').val();
        var _charge_utile = $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcChargeUtile').val();
        var _poids_total  = parseFloat(_poids_vide) + parseFloat(_charge_utile);

        if (!isNaN(_poids_total)) {
            $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPoidsTotalCharge').val(_poids_total);
        } else {
            $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPoidsTotalCharge').val("");
        }

    });

    // Affichage champs transport
    $('#ct_service_metiermanagerbundle_carte_grise_cgIsTransport').click(function() {
        if ($(this).is(':checked')) {
            $('#form-transport').removeClass('hidden');
        } else {
            $('#form-transport').addClass('hidden');
        }
    });
})

/**
 * Vider les formulaires véhicule
 */
function emptyValueFormVehicule() {
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcNumMoteur').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcProvenance').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcCylindre').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPuissance').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPoidsVide').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcChargeUtile').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcHauteur').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcLongueur').val('');
    $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcLargeur').val('');
}

/**
 * Ajax pour autocompléter les formulaires véhicule
 */
function ajaxFillValueFormVehicule(_data_value) {
    if (_data_value != '') {
        $.ajax({
            type: "POST",
            url: _check_numero_ajax_uri,
            data: {'numero_serie' : _data_value},
            cache: false,
            success: function(data) {
                if (data.statut == true) {
                    if (data.type == 'carte-grise') {
                        bootbox.alert(data.message);

                        $("#carte-grise-form").html(data.view);
                        $("#carte-grise-form").find('input, select').attr('disabled', 'disabled');
                        $("#search-form").hide();

                    }

                    if (data.type == 'numero-serie') {
                        bootbox.alert(data.message);

                        var _vehicule = data.vehicule;

                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_ctMarque').val(_vehicule.vhc_marque).change();
                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_ctGenre').val(_vehicule.vhc_genre).change();
                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcType').val(_vehicule.vhc_type);
                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcNumSerie').val(_vehicule.vhc_numero_serie);
                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcNumMoteur').val(_vehicule.vhc_numero_moteur);
                        $('#ct_service_metiermanagerbundle_carte_grise_cgPuissanceAdmin').val(_vehicule.vhc_puissance);
                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPoidsVide').val(_vehicule.vhc_poids_vide);
                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcChargeUtile').val(_vehicule.vhc_charge_utile);
                        $('#ct_service_metiermanagerbundle_carte_grise_ctVehicule_vhcPoidsTotalCharge').val(_vehicule.vhc_ptac);
                        $('#ct_service_metiermanagerbundle_carte_grise_ctCarosserie').val(_vehicule.vhc_carosserie).change();
                        $('#ct_service_metiermanagerbundle_carte_grise_ctSourceEnergie').val(_vehicule.vhc_source).change();
                        $('#ct_service_metiermanagerbundle_carte_grise_cgNbrAssis').val(_vehicule.vhc_nbr_assis).change();
                        $('#ct_service_metiermanagerbundle_carte_grise_cgMiseEnService').val(_vehicule.vhc_mise_service).change();
                    }
                }
            }
        });
    }
}

/**
 * Ajax pour autocompléter les formulaires carte grise
 */
function ajaxFillValueFormCarteGrise(_data_value) {
    if (_data_value != '') {
        $.ajax({
            type: "POST",
            url: _fill_form_ajax_uri,
            data: {'numero_immatriculation' : _data_value},
            cache: true,
            async: false,
            success: function(data) {
                if (data.statut == true) {
                    bootbox.alert(data.message);

                    $("#carte-grise-form").html(data.view);
                    $("#carte-grise-form").find('input, select').attr('disabled', 'disabled');
                    $("#search-form").hide();
                    // Datepicker
                    $(".datepicker-partial").datetimepicker({
                        locale: 'fr',
                        viewMode: 'years',
                        format: 'DD/MM/YYYY'
                    });
                }
            }
        });
    }
}

/**
 * Ajax pour autocompléter les formulaires carte grise (par numéro d'identification)
 */
function ajaxFillValueFormCarteGriseByNumeroIdentification(_data_value) {
    if (_data_value != '') {
        $.ajax({
            type: "POST",
            url: _fill_form_by_numero_identification_ajax_uri,
            data: {'numero_identification' : _data_value},
            cache: true,
            async: false,
            success: function(data) {
                if (data.statut == true) {
                    bootbox.alert(data.message);

                    $("#carte-grise-form").html(data.view);
                    $("#carte-grise-form").find('input, select').attr('disabled', 'disabled');
                    $("#search-form").hide();
                    // Datepicker
                    $(".datepicker-partial").datetimepicker({
                        locale: 'fr',
                        viewMode: 'years',
                        format: 'DD/MM/YYYY'
                    });
                }
            }
        });
    }
}