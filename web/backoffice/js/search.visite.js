$(function () {
    // Numéro de série
    $('#ct_numero_serie').keyup(function(event) {
        ajaxRedirectVisiteEdit($(this).val(), 'serie');
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
            ajaxRedirectVisiteEdit(ui.item.label, 'serie');
        }
    });

    // Numéro d'immatriculation
    $('#ct_numero_immatriculation').keyup(function(event) {
        ajaxRedirectVisiteEdit($(this).val(), 'immatriculation');
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
            ajaxRedirectVisiteEdit(ui.item.label, 'immatriculation');
        }
    });
})

/**
 * Ajax pour rediriger vers la page modification visite
 */
function ajaxRedirectVisiteEdit(_data_value, _type) {
    if (_data_value != '') {
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
                    var _id_visite = data.data.vst_id;

                    // Redirection vers page modification
                    if (_id_visite != null) {
                        $.ajax({
                            type: "POST",
                            url: _visite_search_ajax_uri,
                            data: {
                                'id' : _id_visite
                            },
                            cache: false,
                            success: function(data) {
                                bootbox.alert(
                                    "Vous allez être redirigé vers la modification de cette visite",
                                    function() {
                                        location.href = data;
                                    }
                                );
                            }
                        });
                    } else {
                        bootbox.alert("Visite non trouvée");
                    }
                }
            }
        });
    }
}