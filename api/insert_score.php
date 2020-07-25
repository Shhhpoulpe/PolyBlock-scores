<?php
    //$IDJoueur = (string) $_GET['IDJoueur'];
    $IDJoueur = isset($_GET['IDJoueur']) ? $_GET['IDJoueur'] : NULL;
    var_dump($IDJoueur);
    $niveau = isset($_GET['niveau']) ? $_GET['niveau'] : NULL;
    var_dump($niveau);
    $temps = isset($_GET['temps']) ? $_GET['temps'] : NULL;
    var_dump($temps);

    require '../fonction.php';

    $bdd=connect();

    try
    {
        $sql="insert into scores(IDJoueur, niveau, temps) values('$IDJoueur','$niveau','$temps')";
        $bdd->exec($sql);
        var_dump($sql);
        echo "Success";
    }
    catch(PDOException $e)
    {
        echo "Erreur dans la requête" . $e->getMessage();
    }

    
?>