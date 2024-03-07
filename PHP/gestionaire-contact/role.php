<?php
require_once 'function.php';

if(isset($_GET) && !empty($_GET)){
    var_dump($_GET);
    $id = $_GET['roleid'];
}


$memerole=getMembreByRoleId($id);
//var_dump($memerole);

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

   <?php foreach($memerole as $meme) { 
    $id_m = $meme['id_membre'];  
    $hobbi=getHobbieByMemberId($id_m);
    //var_dump($hobbi);
    ?>
    <div class="card border-light mb-3" style="max-width: 18rem;">
    <div class="card-header"><?= $meme['nom_membre']." ". $meme['prenom_menbre']?>
    <h2 class="card-title"><?=$meme['nom_role']?></h2>
    <h5 class="card-title"><?=$meme['genre']?></h5>
    <h5 class="card-title"><?php echo date('d-m-Y', strtotime($meme["naissance"]))?></h5>
    <?php foreach($hobbi as $hob){ ?>
      <h5 class="card-title"><?=$hob['nom_hobbie']?></h5>

  <?php  } ?>
 
    </div>
  </div>
<?php   }   
              ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>