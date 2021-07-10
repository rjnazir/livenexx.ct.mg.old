/**
 * Validation date de début/fin du projet
 */
$(function () {
    // Afficher cacher champ date de début/fin projet
    $('#buro_service_metiermanagerbundle_space_isCreate').click(function(event) {
        if ($(this).is(':checked')) {
            $('#date-disponibility').show();
            $('#date-disponibility').removeClass('hide');
            // Enlever l'obligation du champ mot de passe
            $('#buro_service_metiermanagerbundle_space_dateStart, #buro_service_metiermanagerbundle_space_dateEnd').attr('required');
        } else {
            $('#date-disponibility').hide();
            // Enlever l'obligation du date début/fin projet
            $('#buro_service_metiermanagerbundle_space_dateStart, #buro_service_metiermanagerbundle_space_dateEnd').removeAttr('required');
        }
    });

    // Validation date de début et date de fin du projet
    $('#buro_service_metiermanagerbundle_space_dateStart').on('dp.change', function(e){
        $('#buro_service_metiermanagerbundle_space_dateEnd').data("DateTimePicker").minDate(e.date);
    });
})