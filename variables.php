<?php
$nom_visiteur ="Mohamed";

echo '<center>Le nom du visiteur est '. $nom_visiteur. ' Merci</center>';

$var1 =5;
$var2 =2;

$addition = $var1 + $var2;
$division = $var1 / $var2;
$multiplication = $var1 * $var2;
$soustraction = $var1 - $var2;
$modulo = $var1 % $var2;

echo '</br>';
echo 'le resultat de l\'addition de '. $var1. ' et '. $var2. ' est '.$addition. '</br>';
echo 'le resultat de la division de '. $var1. ' et '. $var2. ' est '.$division. '</br>';
echo 'le resultat de la multiplication de '. $var1. ' et '. $var2. ' est '.$multiplication. '</br>';
echo 'le resultat de la soustraction de '. $var1. ' et '. $var2. ' est '.$soustraction. '</br>';
echo 'le resultat du modulo de '. $var1. ' et '. $var2. ' est '.$modulo. '</br>';
echo '</br>'
?>

<?php
$age_visiteur = 20;
$langue ='arabe';
$pays ='maroc';

if ($age_visiteur == 20 and $langue =="arabe" and $pays == "maroc") {
  echo 'Merhba';
}
else {
        echo 'Au revoir';
}


?>
