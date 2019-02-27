(function(){
  "use strict";
  
  $(document).ready(function(){
  $("#id_incorrect").hide();

  $("#connexion_form").submit(function(){
    $.ajax({
      url : 'se_connecter.php',
      method : "POST",
      dataType : "json",
      data : $(this).serialize(),
    }).done(function (result){
        console.log(result["success"]);
        if(result["success"] == 1){
          window.location.href = "index.php";
        }
        else if(result["success"] == 2){
          $("#id_incorrect").show();
          $("#id_incorrect").attr({
            'class' : "alert alert-warning"
          }).html("Identifiant incorrect ! ");
        }else if(result["success"] == 3){
          $("#id_incorrect").show();
          $("#id_incorrect").attr({
            'class' : "alert alert-danger"
        }).html("Remplir les champs !");
        }
      });
    return false;
    })
  })
})();
