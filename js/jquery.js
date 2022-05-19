
$(document).ready(function () {
  //console.log("please marche");
  alert('Page JS chargé');

  // ACTIVATION DU DATEPICKER
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });


    var taxe = 0.15 ;
    var montant = "1500";

    $(".montant_ht_div").change(function() {
      alert("Le montant a été modifié");
     var montant = $(".montant_ht_div").val();
      alert(montant);



    })

    $("#btn").click(function(){
      var texte = $("txt").val();
      alert("Clique");
      console.log(texte);
      //$("tc").val()

    })




});

// Toujours avoir cette syntaxte pour commencer du code jquery ($(document.ready))
// Bien charger le jquery, puis notre js perso.
