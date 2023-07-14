<?php
    require "config.php";
    $equipe_nom=$_GET['nom'];
    $requast="SELECT * FROM membre WHERE nom_equipe=?";
    $statement =$pdo->prepare($requast);
    $statement->execute(array($equipe_nom));
    $existe_membre=$statement->rowcount();
    if(!$existe_membre){
        $request ="DELETE FROM equipe WHERE nom=?";
        $statement =$pdo->prepare($request);
        $statement->execute(array($equipe_nom));
        header("location:gestequipe.php");
    }else{
        header("location:gestequipe.php?deleteErr=tu peut pas suppremer une equipe avec des membres ");
    }
?>