(function () {
    "use strict";
    document.forms["inscription"].addEventListener("submit",function (e) {


        let erreur;
        //On recupere tous les inputs
        let inputs = this;
        if(inputs["mdp1"].value != inputs["mdp2"].value){
            erreur = "Les mots de passe ne correspondent pas";
        }

        if(inputs["pseudo"].value.length < 5){
            erreur ="Entrez un pseudo superieur à 4 caractères."
        }
        for(var i = 0; i<inputs.length; ++i){
            if(!inputs[i].value){
                erreur = "Veuillez renseigner tous les champs.";
            }
        }

        if(erreur){
            //Evite de recharger la page
            e.preventDefault();
            document.getElementById("test").innerHTML= '<p class="alert alert-danger" id="erreur"></p>';
            document.getElementById("erreur").innerHTML = erreur;
            return false;
        }else{
            alert("Ok");w
        }
        // let pseudo = document.getElementById("pseudo");
        // let email = document.getElementById("email");
        // let mdp1 = document.getElementById("mdp1");
        // let mdp2 = document.getElementById("mdp2");
        //
        //
        // if(!pseudo.value){
        //     erreur = "Renseignez un pseudo";
        // }
        // if(!email.value){
        //     erreur = "Renseignez un email";
        // }
        // if(!mdp1.value){
        //     erreur = "Renseignez un mot de passe";
        // }


    })

})();