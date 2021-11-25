$(function () {
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
        minLength: 2
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
        minLength: 2
    });
    $( "#print" ).click(function() {
        $('#to-print').jqprint();

    });
})