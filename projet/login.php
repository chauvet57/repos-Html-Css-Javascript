<html>
    <head>
       <meta charset="utf-8">
        <?php
        include "includes/header.php";
        ?>
    </head>
    <body>
    <main class="container col-lg-5">
               
        <div id="container" class="text-center " style="margin-top:40%" >
            <!-- zone de connexion -->
           
            <form action="verification.php" method="POST"  >
                <fieldset>
                <div class="border">
                <br>
                <label><h1>Connexion</h1></label>
                <br>
                <label><h2>Nom d'utilisateur</h2></label>
                <input type="text" class="col-lg-5" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <br>
                <label><h2>Mot de passe</h2></label>
                <input type="password" class="col-lg-5" placeholder="Entrer le mot de passe" name="password" required>
                <br>
                <input type="submit" id='submit' class="btnS" value='Se Connecter' >
                <br>
                <br>

                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                </div>
            </fieldset>
            </form>
        </div>
            
    </body>
</html>