<html>

<head>
    <meta charset="utf-8">
    <?php
    include "Includes/header.php";
    ?>
</head>

<body>
    <main class="container col-lg-5">

        <div id="container" class="text-center " style="margin-top:20%">
            <!-- zone de connexion -->
            <IMG class="displayed" src="Images/logo active transparent.png" alt="...">
            <form action="Connexion/Test2.php" method="POST">
                <fieldset>
                    <div class="border">
                        <br>
                        <label>
                            <h1>Connexion</h1>
                        </label>
                        <br>
                        <br>
                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-lg-6" style="text-align:right; padding-right:10px">

                                    <label>
                                        <h2>Nom d'utilisateur</h2>
                                    </label>
                                    <br>
                                    <label>
                                        <h2>Mot de passe</h2>
                                    </label>
                                </div>
                                <div class="col-lg-6" style="text-align:left; padding-left:10px">
                                    <input type="text" style="width:200px;" placeholder="Entrer le nom d'utilisateur" name="login" required>
                                    <br>
                                    <br>
                                    <input type="password" style="width:200px;" placeholder="Entrer le mot de passe" name="pwd" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button type="submit" id='submit' class="btn btn-success"  value='Se Connecter'>Se Connecter</button>
                        <br>
                        <br>

                        <?php
                        if (isset($_GET['erreur'])) {
                            $err = $_GET['erreur'];
                            if ($err == 1 || $err == 2)
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                        ?>
                    </div>
                </fieldset>
            </form>
        </div>

</body>

</html>