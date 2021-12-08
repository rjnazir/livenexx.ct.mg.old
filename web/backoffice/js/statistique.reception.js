$(function () {
    // Génération reporting
    $('#btn-generate').click(function(event) {
        ajaxGenerateStatistiqueReception();

        return false;
    });
})

function setTypeBilan(_type) {
    $('#type-bilan').val(_type);
    $('#title-type').text(_type);
    $('#link-download').hide();
    if (_type == 'semestriel') {
        $('.kl-semestriel').removeClass('hide');
        $('.kl-trimestriel').addClass('hide');
        $('.kl-mensuel').addClass('hide');
    }
    if (_type == 'trimestriel') {
        $('.kl-trimestriel').removeClass('hide');
        $('.kl-semestriel').addClass('hide');
        $('.kl-mensuel').addClass('hide');
    }
    if (_type == 'mensuel') {
        $('.kl-mensuel').removeClass('hide');
        $('.kl-semestriel').addClass('hide');
        $('.kl-trimestriel').addClass('hide');
    }
    if (_type == 'annuel') {
        $('.kl-semestriel').addClass('hide');
        $('.kl-trimestriel').addClass('hide');
        $('.kl-mensuel').addClass('hide');
    }
}

/**
 * Ajax pour générer le bilan visite par type (annuel, mensuel, trimestriel)
 */
function ajaxGenerateStatistiqueReception() {
    var _loading   = "<i class='fa-li fa fa-spinner fa-spin'></i>";
    var _id_centre = $('#ct-centre').val();
    var _annee     = $('#ct-annee').val();
    var _type      = $('#type-bilan').val();
    var _type_rec  = $('#ct-rec-type').val();
    var _value = 0;
    if(_type == 'semestriel') _value = $('#id-semestre').val();
    if(_type == 'trimestriel') _value = $('#id-trimestre').val();
    if(_type == 'mensuel') _value = $('#id-mois').val();

    $('#link-download').show();
    $('#link-download').html(_loading);
    $.ajax({
        type: "POST",
        url: _generate_reporting_ajax_uri,
        cache: false,
        data: {
            'id_centre' : _id_centre,
            'annee' : _annee,
            'type' : _type,
            'type_rec' : _type_rec,
            'value' : _value
        },
        success: function(data) {
            var _link_download = "<a href='" + data + "' title='Télécharger' " +
                " id='id-download-stat' class='btn btn-success' target='_blank'>Télécharger <i class='fa-li fa fa-file-word-o'></i></a>"

            $('#link-download').html(_link_download);

            $('#id-download-stat').click(function(){
                $('#modal-generate').modal('toggle');
            });
        }
    });
}