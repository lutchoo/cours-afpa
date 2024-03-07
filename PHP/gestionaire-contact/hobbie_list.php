<?php
require_once 'function.php';

if(isset($_GET) && !empty($_GET)){
   // var_dump($_GET);
    $id = $_GET['idhobbie'];
}

$hobbie=getMembreByHobbieId($id);
var_dump($hobbie);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class='container'>
   <?php foreach($hobbie as $meme) { ?>
    <div class="card border-light mb-3" style="max-width: 18rem;">
    <div class="card-header"><?= $meme['nom_membre']." ". $meme['prenom_menbre']?>
    <h5 class="card-title"><?=$meme['nom_hobbie']?></h5>
    </div>
  </div>
<?php   }?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>