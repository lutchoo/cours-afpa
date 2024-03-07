<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma CVthèque PHP</title>
</head>
	<body>
    <?php
        //fonction permettant de calculer l'âge en fonction de la date de naissance
        function age($date_naissance) {
            $dateActuelle = new DateTime ('now');
            $date_naissance_format = DateTime::createFromFormat('d/m/Y',$date_naissance);
            $interval= $dateActuelle->diff($date_naissance_format); 
            return $interval->format('%Y');
        }

        //récupération des données CSV dans un tableau
        $tableau=array();
        if (($handle = fopen("hrdata.csv", "r")) !== FALSE) {
            $index=0;
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                //on fait démarrer le tableau à la seconde ligne (en index 1)
                if ($index>0) {
                    $tableau[]=$data;
                }
                $index++;
            }
            fclose($handle);
        }

    //fonction permettant d'extraire et de trier des données du tableau par nom et prénom

        //extraire les variables $noms et $prenoms sur les valeurs des colonnes 1 et 2
        if ($_POST["tri"]=="nomAZ") {
        $noms = array();
        $prenoms = array();
        foreach($tableau as $value){
            $noms[]=$value[1];
            $prenoms[]=$value[2];
        }
        //effectue le tri de chacune des variables, puis du tableau
        array_multisort($noms, SORT_ASC,
                        $prenoms, SORT_ASC,
                        $tableau);
        }
        //extraire les variables $noms et $prenoms sur les valeurs des colonnes 1 et 2
        if ($_POST["tri"]=="nomZA") {
            $noms = array();
            $prenoms = array();
            foreach($tableau as $value){
                $noms[]=$value[1];
                $prenoms[]=$value[2];
            }
            //effectue le tri de chacune des variables, puis du tableau
            array_multisort($noms, SORT_DESC,
                            $prenoms, SORT_DESC,
                            $tableau);
            }

        
    //fonction permettant d'extraire et de trier des données du tableau par ville

        //extraire le variable $ville sur la valeur de la colonne 8
        if ($_POST["tri"]=="villeAZ") {
            $ville = array();
        foreach($tableau as $value){
            $ville[]=$value[8];
        }
        //effectue le tri de la variables, puis du tableau
        array_multisort($ville, SORT_ASC,
                        $tableau);
        }
        //extraire le variable $ville sur la valeur de la colonne 8
        if ($_POST["tri"]=="villeZA") {
            $ville = array();
        foreach($tableau as $value){
            $ville[]=$value[8];
        }
        //effectue le tri de la variables, puis du tableau
        array_multisort($ville, SORT_DESC,
                        $tableau);
        }

    //fonction permettant d'extraire et de trier des données du tableau par profil

        //extraire le variable $profil sur la valeur de la colonne 12
        if ($_POST["tri"]=="profilAZ"){
        $profil = array();
        foreach($tableau as $value){
            $profil[]=$value[12];
        }
        //effectue le tri de la variables, puis du tableau
        array_multisort($profil, SORT_ASC,
                        $tableau);
        }
        //extraire le variable $profil sur la valeur de la colonne 12
        if ($_POST["tri"]=="profilZA"){
            $profil = array();
            foreach($tableau as $value){
                $profil[]=$value[12];
            }
            //effectue le tri de la variables, puis du tableau
            array_multisort($profil, SORT_DESC,
                            $tableau);
            }

    //fonction permettant d'extraire et de trier des données du tableau par age

        //extraire le variable $ages sur la valeur de la colonne 3
        if ($_POST["tri"]=="agecroissant"){
        $ages = array();
        foreach($tableau as $value){
            $ages[]=age($value[4]);
        }
        //effectue le tri de la variables, puis du tableau
        array_multisort($ages, SORT_ASC,
                        $tableau);
        }
        //extraire le variable $ages sur la valeur de la colonne 3
        if ($_POST["tri"]=="agedecroissant"){
            $ages = array();
            foreach($tableau as $value){
                $ages[]=age($value[4]);
            }
            //effectue le tri de la variables, puis du tableau
            array_multisort($ages, SORT_DESC,
                            $tableau);
            }

    ?>

        <section id="Formulaire">
			<form method="POST" enctype='multipart/form-data'>  
    		    <label for="tri">Modes de tri</label>    
                <select name="tri" id="modeDeTri">
                        <option value="nomAZ">Trier par nom de A à Z</option>
                        <option value="nomZA">Trier par nom de Z à A</option>
                        <option value="villeAZ">Trier par ville de A à Z </option>
                        <option value="villeZA">Trier par ville de Z à A</option>
                        <option value="profilAZ">Trier par profil recherché de A à Z</option>
                        <option value="profilZA">Trier par profil recherché de Z à A</option>
                        <option value="agecroissant">Trier par âge en ordre croissant</option>
                        <option value="agedecroissant">Trier par âge en ordre décroissant</option>
                </select>
                <button type="submit">Appliquer</button>
			</form>
		</section>

<table border="1">
    <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Date de naissance</th>
        <th>Adresse</th>
        <th>Complément d'adresse</th>
        <th>Code postal</th>
        <th>Ville</th>
        <th>Tel.Mobile</th>
        <th>Tel.Fixe</th>
        <th>Courriel</th>
        <th>Profil</th>
        <th>Compétence 1</th>
        <th>Compétence 2</th>
        <th>Compétence 3</th>
        <th>Compétence 4</th>
        <th>Compétence 5</th>
        <th>Compétence 6</th>
        <th>Compétence 7</th>
        <th>Compétence 8</th>
        <th>Compétence 9</th>
        <th>Compétence 10</th>
        <th>Site web</th>
        <th>Profil Linkedin</th>
        <th>Profil Viadeo</th>
        <th>Profil Facebook</th>
    </thead>
    <tbody>
    <!--AFFICHAGE DES DONNEES DU TABLEAU -->
    <!--Pour effacer les NULL présents dans l'ensemble des colonnes du tableau
        <?php foreach ($tableau as $value) { ?>
            <tr>
                <?php foreach ($value as $col) { ?>
                    <td><?php if ($col!=="NULL") { 
                        print $col; } ?></td>
                <?php } ?> 
            </tr>
        <?php } ?>
    ------------------------------------------------------------------------------------------>
    <!--Pour effacer les NULL présents dans le tableau colonne par colonne -->
        <?php foreach ($tableau as $value) { ?>
            <tr>
                <td><?php if ($value[0]!=="NULL"){
                    print $value[0];
                } ?></td>
                <td><?php if ($value[1]!=="NULL"){
                    print $value[1];
                } ?></td>
                <td><?php if ($value[2]!=="NULL"){
                    print $value[2];
                } ?></td>
                <td><?php
                    //Ici on affiche l'âge calculé grâce à la fonction age($date_naissance)
                    //et on l'affiche à la place des données rentrées dans la colonne age
                    print age($value[4]); ?></td>
                <td><?php if ($value[4]!=="NULL"){
                    print $value[4];
                } ?></td>
                <td><?php if ($value[5]!=="NULL"){
                    print $value[5];
                } ?></td>
                <td><?php if ($value[6]!=="NULL"){
                    print $value[6];
                } ?></td>
                <td><?php if ($value[7]!=="NULL"){
                    print $value[7];
                } ?></td>
                <td><?php if ($value[8]!=="NULL"){
                    print $value[8];
                } ?></td>
                <td><?php if ($value[9]!=="NULL"){
                    print $value[9];
                } ?></td>
                <td><?php if ($value[10]!=="NULL"){
                    print $value[10];
                } ?></td>
                <td><?php if ($value[11]!=="NULL"){
                    print $value[11];
                } ?></td>
                <td><?php if ($value[12]!=="NULL"){
                    print $value[12];
                } ?></td>
                <td><?php if ($value[13]!=="NULL"){
                    print $value[13];
                } ?></td>
                <td><?php if ($value[14]!=="NULL"){
                    print $value[14];
                } ?></td>
                <td><?php if ($value[15]!=="NULL"){
                    print $value[15];
                } ?></td>
                <td><?php if ($value[16]!=="NULL"){
                    print $value[16];
                } ?></td>
                <td><?php if ($value[17]!=="NULL"){
                    print $value[17];
                } ?></td>
                <td><?php if ($value[18]!=="NULL"){
                    print $value[18];
                } ?></td>
                <td><?php if ($value[19]!=="NULL"){
                    print $value[19];
                } ?></td>
                <td><?php if ($value[20]!=="NULL"){
                    print $value[20];
                } ?></td>
                <td><?php if ($value[21]!=="NULL"){
                    print $value[21];
                } ?></td>
                <td><?php if ($value[22]!=="NULL"){
                    print $value[22];
                } ?></td>
                <td><?php if ($value[23]!=="NULL"){
                    print $value[23];
                } ?></td>
                <td><?php if ($value[24]!=="NULL"){
                    print $value[24];
                } ?></td>
                <td><?php if ($value[25]!=="NULL"){
                    print $value[25];
                } ?></td>
                <td><?php if ($value[26]!=="NULL"){
                    print $value[26];
                } ?></td>
            </tr>
        <?php 
        } ?>
    </tbody>
</table>
</body>
</html>