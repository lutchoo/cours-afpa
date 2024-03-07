<?php
function dbconnect(){
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=sql_millau', 'root', '');
        return $dbh;
    } catch (PDOException $e) {
        echo'un probleme est survenue';
    }
}

function getAllmember(){
    $connect = dbconnect();
    $membres =  $connect ->query('SELECT * FROM membres');
    $list_membres =  $membres->fetchALL(PDO::FETCH_ASSOC);
    return $list_membres; 
}

function getMemberRoleByMemberId($id) {
    $connect = dbconnect();
    $stmt = $connect ->query("SELECT * FROM roles JOIN membres ON roles.id_role = membres.role_id WHERE  membres.id_membre = $id ");
    $role  = $stmt->fetch(PDO::FETCH_ASSOC);
    return $role;
}

function getHobbieByMemberId($id){
    $connect = dbconnect();
    $getHobbie = $connect -> query("SELECT * FROM hobbies JOIN hobbies_membre ON hobbies.`id-hobbie` = hobbies_membre.hobbie_id JOIN membres ON membres.id_membre = hobbies_membre.membre_id WHERE membres.id_membre = $id ");
    $hobbie = $getHobbie->fetchALL(PDO::FETCH_ASSOC);
    return $hobbie;
    var_dump($hobbie);
}

function getOneMembre($id){
    $connect = dbconnect();
    $membre =  $connect ->query("SELECT * FROM membres WHERE membres.id_membre = $id ");
    $oneMembre = $membre->fetchALL(PDO::FETCH_ASSOC);
    return $oneMembre;

}

function getrole(){
    $connect = dbconnect();
    $stmt = $connect ->query("SELECT * FROM roles");
    $list_role = $stmt->fetchALL(PDO::FETCH_ASSOC);
    return $list_role;

}

function getMembreByRoleId($id){
    $connect = dbconnect();
    $stmt = $connect ->query("SELECT * FROM membres JOIN roles ON roles.id_role = membres.role_id   WHERE membres.role_id = $id");
    $rolee = $stmt ->fetchALL(PDO::FETCH_ASSOC);
    return $rolee;
}

function addMember($nom,$prenom,$date,$genre,$role){
    $connect = dbconnect();
    $stmt = $connect ->query("INSERT INTO membres VALUES(null,'$nom','$prenom','$date','$genre','$role')");
}

function gethobbies(){
    $connect = dbconnect();
    $stmt = $connect ->query("SELECT * FROM hobbies");
    $list_hob = $stmt ->fetchALL(PDO::FETCH_ASSOC);
    return $list_hob;
}

function getMembreByHobbieId($id){
    $connect = dbconnect();
    $stmt = $connect ->query("SELECT *  FROM membres JOIN hobbies_membre ON membres.id_membre = hobbies_membre.membre_id JOIN hobbies ON hobbies.`id-hobbie` = hobbies_membre.hobbie_id WHERE hobbies_membre.hobbie_id = $id");
    $list = $stmt ->fetchALL(PDO::FETCH_ASSOC);
    return $list;
}


