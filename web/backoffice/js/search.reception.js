$(function () {
    // Numéro de série
    $('#ct_numero_serie').keyup(function(event) {
        ajaxRedirectReceptionEdit($(this).val(), 'serie');
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
            ajaxRedirectReceptionEdit(ui.item.label, 'serie');
        }
    });

    // Numéro d'immatriculation
    $('#ct_numero_immatriculation').keyup(function(event) {
        ajaxRedirectReceptionEdit($(this).val(), 'immatriculation');
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
            ajaxRedirectReceptionEdit(ui.item.label, 'immatriculation');
        }
    });
})

/**
 * Ajax pour rediriger vers la page modification réception
 */
function ajaxRedirectReceptionEdit(_data_value, _type) {
    if (_data_value != '') {
        $.ajax({
            type: "POST",
            url: _get_reception_ajax_uri,
            data: {
                'numero' : _data_value,
                'type' : _type
            },
            cache: false,
            success: function(data) {
                if (data.statut == true) {
                    var _id_reception = data.id_reception;

                    // Redirection vers page modification
                    if (_id_reception != null) {
                        $.ajax({
                            type: "POST",
                            url: _reception_search_ajax_uri,
                            data: {
                                'id' : _id_reception
                            },
                            cache: false,
                            success: function(data) {
                                bootbox.alert(
                                    "Vous allez être redirigé vers la modification de cette réception",
                                    function() {
                                        location.href = data;
                                    }
                                );
                            }
                        });
                    } else {
                        bootbox.alert("Réception non trouvée");
                    }
                }
            }
        });
    }
}