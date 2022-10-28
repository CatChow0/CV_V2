<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminPanel</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="admin-body" >

    <?php
    // prepare la connexion
    $user='root';
    $pass='root';
    $db='catchowcontact';
    // Connexion avec data base
    $db=new mysqli('localhost',$user,$pass,$db) or die("fail to connect");

    // Selectione la table
    $sql="select * from contact";
    $result=mysqli_query($db,$sql) or die("bad query");


    //Affichage en tableau
    // Ligne des catégorie du tableau
    echo "<table border='1'>";
    echo "<tr><td>id</td><td>prenom</td><td>nom</td><td>email</td><td>tel</td></tr>\n";

    // Affichage data base dans le tableau
    while($row=mysqli_fetch_assoc($result)) {
        echo"<tr><td>{$row['id']}</td><td>{$row['prenom']}</td><td>{$row['nom']}</td><td>{$row['email']}</td><td>{$row['tel']} <br>";
    }
    // Fini le tableau
    echo "</table>";
    ?>

    

    <script src="index.js"></script>
    </body>
</html>