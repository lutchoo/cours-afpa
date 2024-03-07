<!DOCTYPE html> 
<html lang="fr"> 
    <head>
        <meta charset="utf-8">
        <title>Ma cvthèque PHP</title>
    </head>
    <body>
		<h1>CVthèque</h1>
		<section id="Formulaire">
			<form action="tri.php" method="POST" enctype='multipart/form-data'>  
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
	</body>
</html>