
<?php

include "includes/header.php";

?>


<body onload="window.location.href = '#openModal';"> 
    <div id="openModal" class="modalDialog"> 
        <div> 
                    
        
                        <a href="liste_client.php" style="width:40px;" title="Close" class="closeX">X<br></a>
        
            
                        <h2 style="color:black">Client inscrit</h2>
                        <br> 
                        <a style="color:black;font-size:20px" >Voulez vous compléter</a> 
                        <a style="color:black;font-size:20px">les formulaires ?</a> 
         
                        <a href="formulaire1.php" style="margin-right:20px;margin-top:30px;"  title="Close" class="close">Document investisseur</a>
                        <a href="formulaire8.php" style="margin-right:20px;margin-top:30px;" title="Close" class="close">Fiche patrimoniale</a>
                        
          
        </div> 
    </div>  





<style>

.modalDialog { 
    position: fixed; 
    font-family: Arial, Helvetica, sans-serif; 
    top: 0; 
    right: 0; 
    bottom: 0; 
    left: 0; 
    background: rgba(0,0,0,0.8); 
    z-index: 99999; 
    opacity:0; 
    -webkit-transition: opacity 400ms ease-in; 
    -moz-transition: opacity 400ms ease-in; 
    transition: opacity 400ms ease-in; 
    pointer-events: none;
 } 
 
 .modalDialog:target { 
     opacity:1; 
     pointer-events: auto; 
    }
     
.modalDialog > div { 
    width: 400px;
    height:200px; 
    position: relative; 
    margin: 10% auto; 
    padding: 5px 20px 13px 20px; 
    border-radius: 10px; 
    background: #fff; 
    background: -moz-linear-gradient(#fff, #999); 
    background: -webkit-linear-gradient(#fff, #999); 
    background: -o-linear-gradient(#fff, #999); 
}

.close { 
  background: #346be0; 
  color: #FFFFFF; 
  line-height: 25px; 
  text-align: center; 
  float: right; 
  width: 150px;
  
  text-decoration: none; 
  font-weight: bold; 
  -webkit-border-radius: 12px; 
  -moz-border-radius: 12px; 
  border-radius: 12px; 
  -moz-box-shadow: 1px 1px 3px #000; 
  -webkit-box-shadow: 1px 1px 3px #000; 
  box-shadow: 1px 1px 3px #000; 
} 

.close:hover { 
  background: #003cff; 
}



.closeX { 
  background: #c83d24; 
  color: #FFFFFF; 
  line-height: 25px; 
  text-align: center; 
  float: right; 
  width: 100px;
  
  text-decoration: none; 
  font-weight: bold; 
  -webkit-border-radius: 12px; 
  -moz-border-radius: 12px; 
  border-radius: 12px; 
  -moz-box-shadow: 1px 1px 3px #000; 
  -webkit-box-shadow: 1px 1px 3px #000; 
  box-shadow: 1px 1px 3px #000; 
} 

.closeX:hover { 
  background: #ff1e00; 
}




</style>