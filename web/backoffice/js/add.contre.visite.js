$(function () {
    $("#form-carte-grise, #form-vehicule").find('input, select').attr('readonly', true);
    // $("#btn-generate-reporting").hide();

    // Numéro de série
    $( "#ct_numero_serie" ).autocomplete({
        source: _autocomplete_numero_serie_ajax_uri,
        minLength: 2
    });

    // Numéro d'immatriculation
    $( "#ct_numero_immatriculation" ).autocomplete({
        source: _autocomplete_numero_immatriculation_ajax_uri,
        minLength: 2
    });

    // Génération reporting
    // $('#btn-generate-reporting').click(function(event) {
    //     ajaxGenerateCarteGrise();
    // });

    $("#ct_service_metiermanagerbundle_visite_ctCentre").change(function () {
        var _id_centre = $("#ct_service_metiermanagerbundle_visite_ctCentre").val();
        var _id_select = "ct_service_metiermanagerbundle_visite_ctVerificateur";
        ajaxSelectVerifByCentre(_id_centre, _id_select);
    });

    // Mettre expiration par usage
    $("#ct_service_metiermanagerbundle_visite_ctUsage").change(function () {
        ajaxSetExpiration();
    });

    // Génération PV Visite
    $('#btn-generate-pv-visite').click(function(event) {
        ajaxGeneratePvVisite();
        return false;
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
                var _link_download_inapte = "<a href='" + data.url_path_inapte + "' title='Télécharger' target='_blank' class='btn btn-danger'>Télécharger Recu Inapte</a>"
                $('#link-download-pv-inapte').html(_link_download_inapte);
            }

            $('#link-download-pv').html(_link_download);
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