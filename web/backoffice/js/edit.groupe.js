/**
 * Calcul progression
 */
$(function () {
    $("#buro_service_metiermanagerbundle_groupe_nbrPersonne, #buro_service_metiermanagerbundle_groupe_nbrPersonneMax").change(function() {
        var _nbr_personne     = $("#buro_service_metiermanagerbundle_groupe_nbrPersonne").val();
        var _nbr_personne_max = $("#buro_service_metiermanagerbundle_groupe_nbrPersonneMax").val();

        // Calcul
        var _nbr_progression = (parseInt(_nbr_personne) / parseInt(_nbr_personne_max)) * 100;
        $("#buro_service_metiermanagerbundle_groupe_progress").val(_nbr_progression);
    });
})