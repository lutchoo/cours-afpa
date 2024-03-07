<?php
require_once 'function.php';
$roles = getrole();
$hobbies = gethobbies();


if(isset($_POST) && !empty($_POST)){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $genre = $_POST["genre"];
    $date = $_POST["date_naissance"];
    $role = $_POST["role"];
    //var_dump($_POST);
    addMember($nom,$prenom,$date,$genre,$role);
}



?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1>Formulaire</h1>
    <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required class="form-control"><br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required class="form-control"><br><br>
        
        <label>Genre :</label>
        <input type="radio" id="genre_f" name="genre" value="f" >
        <label for="genre_f">Femme</label>
        <input type="radio" id="genre_m" name="genre" value="m" checked >
        <label for="genre_m">Homme</label><br><br>
        
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required class="form-control"><br><br>
        
        <label for="role">Rôle :</label>
        <select id="role" name="role">
        <?php foreach($roles as $role){?>
            <option value="<?= $role['id_role'] ?>"><?= $role['nom_role'] ?></option>
        <?php  }  ?>
        </select><br><br>
        
        <label for="hobbie">hobbie :</label><br>
        <?php foreach($hobbies as $hobb) { ?>
            <input type="checkbox" value="<?=$hobb['id-hobbie'] ?>"><?= $hobb['nom_hobbie']?></input><br><br>
        <?php } ?>
        
        
        <input type="submit" value="Envoyer">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
