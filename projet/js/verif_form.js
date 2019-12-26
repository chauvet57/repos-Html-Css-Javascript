document.getElementById("envoi").addEventListener("submit", function(e) { 
    
        var erreur; 
        var inputs = this.getElementsByTagName("input");


        
        for (var i=0;i <inputs.length;i++){
                if(!inputs[i].value){
                        erreur = "Veuillez renseigner tous les champs";
                }
        }

        if(erreur){
            e.preventDefault();
                document.getElementById("erreur").innerHTML = erreur;
                return false;
        }else{
            alert('Formulaire envoyé !');
        }

        //start[0].addEventListener('click', valider, false);
       
});



function verif()
{
        
}
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

