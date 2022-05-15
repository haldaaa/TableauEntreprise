
$(document).ready(function () {
  //console.log("please marche");
  //alert('ALERT');

  // ACTIVATION DU DATEPICKER
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });
});

// Toujours avoir cette syntaxte pour commencer du code jquery ($(document.ready))
// Bien charger le jquery, puis notre js perso.
