<!DOCTYPE html>
<html lang="en">
<?php include "Sql.php"; 
?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php

        $sql = new sql();
        $sql->connect();

        $req = $sql->requete("{CALL PS_CD_ListeCollabo}");
        while ($r = $req->fetch())
        {
            print("<pre>");
            print_r($r);
            print("</pre>");
        }
        
        ?>     
</body>
</html>

