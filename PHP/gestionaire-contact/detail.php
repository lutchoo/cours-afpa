<?php
require_once 'function.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}
//var_dump($_GET);

$role = getMemberRoleByMemberId($id);
$hobbie = getHobbieByMemberId($id);
$oneMembre = getOneMembre($id);
   //var_dump($oneMembre);
   //var_dump($hobbie)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="container">
    <?php foreach($oneMembre as $membre) {?>
  <section class="container row">
  <div class="card col-10" style= "margin-top:100px" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $membre['nom_membre'] . " " . $membre['prenom_menbre']  ?></h5>
    <h5 class="card-text">Genre : <?php echo $membre['genre']  ?></h5>
    <h5 class="card-text">Date de naissance :<?php echo date('d-m-Y', strtotime($membre["naissance"]))?></h5>
    <h5 class="card-text">Status au sein de lorganisation :<?php echo $role['nom_role']  ?></h5>
  </div>
  <?php foreach($hobbie as $hob) { ?>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $hob['nom_hobbie']  ?></li>
  </ul>
  <?php }?>
  <div class="card-body">
    <a href="modifier.php?id=<?= $membre['id_membre']?>" class="card-link">modifier</a>
    <a href="#" class="card-link">delete</a>
  </div>
</div>
  </section>
  <?php } ?>
</body>
</html>