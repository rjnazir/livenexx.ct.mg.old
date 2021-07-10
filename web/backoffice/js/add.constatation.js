$(function () {
    // Set choix reception height
    $('#id-choix-reception .box').height($('#id-bilan-reception .box').height());

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

    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadChargeUtile, #ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsVide').keyup(function(event) {
        var _poids_vide   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsVide').val();
        var _charge_utile = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadChargeUtile').val();
        var _poids_total  = parseFloat(_poids_vide) + parseFloat(_charge_utile);

        if (!isNaN(_poids_total)) {
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsTotalCharge').val(_poids_total);
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsTotalCharge').val(_poids_total);
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsTotalCharge').val(_poids_total);
        } else {
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsTotalCharge').val("");
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsTotalCharge').val("");
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsTotalCharge').val(_poids_total);
        }

    });

    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadChargeUtile, #ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsVide').keyup(function(event) {
        var _poids_vide   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsVide').val();
        var _charge_utile = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadChargeUtile').val();
        var _poids_total  = parseFloat(_poids_vide) + parseFloat(_charge_utile);

        if (!isNaN(_poids_total)) {
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsTotalCharge').val(_poids_total);
        } else {
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsTotalCharge').val("");
        }

    });

    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadChargeUtile, #ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsVide').keyup(function(event) {
        var _poids_vide   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsVide').val();
        var _charge_utile = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadChargeUtile').val();
        var _poids_total  = parseFloat(_poids_vide) + parseFloat(_charge_utile);

        if (!isNaN(_poids_total)) {
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsTotalCharge').val(_poids_total);
        } else {
            $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsTotalCharge').val("");
        }

    });

    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPremiereCircule').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPremiereCircule').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPremiereCircule').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPremiereCircule').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctGenre').change(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctGenre').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctGenre').val(_left_val).change();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_ctGenre').val(_left_val).change();

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctMarque').change(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctMarque').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctMarque').val(_left_val).change();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_ctMarque').val(_left_val).change();

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadTypeCar').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadTypeCar').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadTypeCar').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadTypeCar').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadNumSerieType').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadNumSerieType').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadNumSerieType').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadNumSerieType').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadNumMoteur').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadNumMoteur').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadNumMoteur').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadNumMoteur').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctSourceEnergie').change(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctSourceEnergie').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctSourceEnergie').val(_left_val).change();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_ctSourceEnergie').val(_left_val).change();

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadCylindre').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadCylindre').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadCylindre').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadCylindre').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPuissance').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPuissance').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPuissance').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPuissance').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctCarosserie').change(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_ctCarosserie').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctCarosserie').val(_left_val).change();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_ctCarosserie').val(_left_val).change();

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadNbrAssis').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadNbrAssis').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadNbrAssis').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadNbrAssis').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadLargeur').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadLargeur').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadLargeur').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadLargeur').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadHauteur').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadHauteur').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadHauteur').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadHauteur').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadLongueur').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadLongueur').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadLongueur').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadLongueur').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadChargeUtile').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadChargeUtile').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadChargeUtile').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadChargeUtile').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsVide').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsVide').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsVide').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsVide').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsTotalCharge').change(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsTotalCharge').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsTotalCharge').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsTotalCharge').val(_left_val);

    });
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsMaxima').keyup(function(event) {
        var _left_val   = $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_0_cadPoidsMaxima').val();
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsMaxima').val(_left_val);
        $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_2_cadPoidsMaxima').val(_left_val);

    });

    $('#id-clear-carte-grise').click(function(event) {
        clearFormCarteGrise();
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

function clearFormCarteGrise() {
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPremiereCircule').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctGenre').val('').trigger('change');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctMarque').val('').trigger('change');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadTypeCar').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadNumSerieType').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadNumMoteur').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctSourceEnergie').val('').trigger('change');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadCylindre').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPuissance').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_ctCarosserie').val('').trigger('change');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadNbrAssis').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadLargeur').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadHauteur').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadLongueur').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadChargeUtile').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsVide').val('');
    $('#ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1_cadPoidsTotalCharge').val('');
}

