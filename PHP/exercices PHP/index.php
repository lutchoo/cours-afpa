<!DOCTYPE html>
<html lang=”fr”>

<head>
    <meta charset=”utf-8”>
    <title>Cinema 100 films</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <main>


        <article class="film1">
            <h2>300</h2>           
            <input type="checkbox">
        </article>

        <article class="film2">
            <h2>Seven</h2>            
            <input type="checkbox">
        </article>

    
    </main>
</body>




<?php 

function read($csv){
    $file = fopen($csv, 'r');
    while (!feof($file) ) {
        $line[] = fgetcsv($file, 1024);
    }
    fclose($file);
    return $line;
}

$csv = 'films.csv';
$csv = read($csv);
echo '<pre>';
print_r($csv);
echo '</pre>';

while ($line = $i)
for($i >0; $i < count($line); $i ++) {
    print ($line);

}

