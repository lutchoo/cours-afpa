<?php require_once'function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1>Contact Millau</h1>
   >
    <main class="container" >
        <a href="form.php">ajouter un contact </a>
    <section class="row">
    <?php 
    $list_membres = getAllmember();
    foreach($list_membres as $membre){ ?>
        <?php $role = getMemberRoleByMemberId($membre["id_membre"]);
        $hobbie = getHobbieByMemberId($membre["id_membre"]);
        $id = $membre['id_membre'];
        //var_dump($hobbie)
        ?>
        <div class="card col-5 text-center" style="margin-bottom : 20px; box-shadow : 0px 0px 2px 2px; margin-left : 20px">
        <div class="card-body">
        <h5 class="card-title"><?php echo $membre['nom_membre'] . ' ' . $membre['prenom_menbre'] ?></h5>
        <h6 class="card-text">Genre :<?php echo $membre['genre']; ?></h6>
        <h6 class="card-subtitle mb-2 text-body-secondary">Ne le :<?php echo date('d-m-Y', strtotime($membre["naissance"]))?></h6>
        <a href="role.php?roleid=<?php echo $role['id_role']; ?>"><?php echo $role['nom_role']; ?></a>
        <p href="#" class="card-text">
            <?php foreach($hobbie as $hob){  //var_dump($hob)?>
               
                <a href="hobbie_list.php?idhobbie=<?= $hob['id-hobbie']?>"><?= $hob["nom_hobbie"]?></a>; 
            <?php   }?>
        </p>
        <a href="detail.php?id=<?php echo $id?>" class="card-link">Detail</a>
        </div>
        </div>
    <?php } ?>
    </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>