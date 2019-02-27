(function(){
  "use strict";
  $(document).ready(function(){
    $("#button_deconnection").click(function(){
      $.ajax({
        url : "deconnexion.php"
      }).done(function(){
          window.location.reload(true);
        })
      })

      $.ajax({
        url : 'is_connected.php',
        dataType: "json",
        success: connecter
      });

      function connecter(result){
        console.log(result);
        if(result['success']=== true){
          console.log(result['success']);
          $('#button_connection').remove();
          $('#button_deconnection').show();
        }
        if(result['success']=== false){
          $('#button_connection').show();
          $('#button_deconnection').remove();
        }
      }
    })
})();