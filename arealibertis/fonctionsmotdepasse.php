1- FONCTIONS

<?php
function motDePasse($longueur=5) { // par défaut, on affiche un mot de passe de 5 caractères
    // chaine de caractères qui sera mis dans le désordre:
    $Chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // 62 caractères au total
    // on mélange la chaine avec la fonction str_shuffle(), propre à PHP
    $Chaine = str_shuffle($Chaine);
    // ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
    $Chaine = substr($Chaine,0,$longueur);
    // ensuite on retourne notre chaine aléatoire de "longueur" caractères:
    return $Chaine;
}
// Appel à la fonction:
echo motDePasse(7); // retourne un mot de passe avec 5 caractères (lettres et numéros)
// petite précision: la chaine ne peut pas donner une chaine aléatoire de plus de 62 caractères, 
// si vous souhaitez une chaine plus longue, utilisez la concaténation (le point):
echo motDePasse(62).motDePasse(10); // retourne un mot de passe avec 72 caractères (lettres et numéros)
echo motDePasse(); // affiche un mot de passe de 5 caratères
?>



2- FONCTIONS

<?php
// ---------------------------------------------------------------------
//	Générer un mot de passe aléatoire
// ---------------------------------------------------------------------
function genererMDP ($longueur = 8){
	// initialiser la variable $mdp
	$mdp = "";
 
	// Définir tout les caractères possibles dans le mot de passe, 
	// Il est possible de rajouter des voyelles ou bien des caractères spéciaux
	$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
 
	// obtenir le nombre de caractères dans la chaîne précédente
	// cette valeur sera utilisé plus tard
	$longueurMax = strlen($possible);
 
	if ($longueur > $longueurMax) {
		$longueur = $longueurMax;
	}
 
	// initialiser le compteur
	$i = 0;
 
	// ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
	while ($i < $longueur) {
		// prendre un caractère aléatoire
		$caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);
 
		// vérifier si le caractère est déjà utilisé dans $mdp
		if (!strstr($mdp, $caractere)) {
			// Si non, ajouter le caractère à $mdp et augmenter le compteur
			$mdp .= $caractere;
			$i++;
		}
	}
 
	// retourner le résultat final
	return $mdp;
}
?>




3- FONCTIONS

<?php
function CarAleatoire($taille)
{
$cars="azertyiopqsdfghjklmwxcvbn0123456789/*.!:;,...."; //Listes des caractères possibles
  $mdp='';
  $long=strlen($cars);
  srand((double)microtime()*1000000); //Initialise le générateur de nombres aléatoires
  for($i=0;$i<$taille;$i++)$mdp=$mdp.substr($cars,rand(0,$long-1),1);
  return $mdp;
}
echo CarAleatoire(8);
?>




4- FONCTIONS

<?php
/*
Pondu par Louis VOLANT le Mardi 30 Juillet 2008
Licence GPL
*/
function passwdgenerator ($nb,$valeurs,$nbvaleurs)
{
//Pour la fonction, nb doit être un entier supérieur à 1. C'est le cas ici.
 
$resultat;
 
for($i=0;$i<$nb;$i++)
{
$val=$valeurs[rand(0,$nbvaleurs-1)];
$resultat=$resultat.$val;
}
 
return $resultat;
}
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 
<title>Generateur de mots de passes</title>
</head>
<body>
 
<?php
if ($_POST['minuscules']==on||$_POST['majuscules']==on||$_POST['chiffres']==on||$_POST['caracteresspeciaux']==on&&isset($_POST['longueur']))
{
 
 
$minuscules=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$majuscules=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$chiffres=array(0,1,2,3,4,5,6,7,8,9); //Pas forcément utile, je le reconnait, mais c'est plus clair.
$caracteresspeciaux=array("&gt;","&lt;",",",";",".","/",":","&amp;","|",")","(","~","#","{","}","[","]","-","=","$","*","!","?");
$longueur=$_POST['longueur'];
 
$touslescaracteres=array();
 
if($_POST['minuscules']==on) { $touslescaracteres=$touslescaracteres + $minuscules;}
if($_POST['majuscules']==on) { $touslescaracteres=array_merge($touslescaracteres,$majuscules);}
if($_POST['chiffres']==on) { $touslescaracteres=array_merge($touslescaracteres,$chiffres);}
if($_POST['caracteresspeciaux']==on) { $touslescaracteres=array_merge($touslescaracteres,$caracteresspeciaux);}
 
$nbcaracteres=count($touslescaracteres);
 
$motdepasse=passwdgenerator($longueur,$touslescaracteres,$nbcaracteres);
}
?>
 
<div style="text-align: center;"><big><big>G&eacute;n&eacute;rateur de mots de passe</big></big><br><br>
<div align="center">
<br />
<br />
<div style="text-align: center;"><b>
<?php
if(isset($_POST['longueur']))
{
echo 'Le mot de passe g&eacute;n&eacute;r&eacute; est : '.$motdepasse;
}
?></b></big>
<br />
<br />
<form method="post" action="passwordgenerator.php">
 
<table style="text-align: left; width: 100%;" border="0"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="text-align: right; width: 50%; vertical-align: top;">Quels types de caract&egrave;res voulez-vous int&eacute;grer &agrave; votre mot de passe :</td>
      <td style="text-align: left; width: 50%;"> <input type="checkbox" name="minuscules" id="minuscules" checked="checked" /> <label for="minuscules">Lettres minuscules</label><br />
       <input type="checkbox" name="majuscules" id="majuscules" checked="checked" /> <label for="majuscules">Lettres majuscules</label><br />
       <input type="checkbox" name="chiffres" id="chiffres" checked="checked" /> <label for="chiffres">Chiffres</label><br />
       <input type="checkbox" name="caracteresspeciaux" id="caracteresspeciaux" checked="checked" /> <label for="caracteresspeciaux">Caract&egrave;res speciaux</label></td>
    </tr>
    <tr>
      <td style="text-align: right; width: 50%;"><label for="longueur">Combien de caract&egrave;res aura le mot de passe ?</label></td>
      <td style="text-align: left; width: 50%;"><select name="longueur" id="longueur">
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10" selected="selected">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
       </select></td>
    </tr>
<tr>
      <td style="text-align: right; width: 50%;"></td>
      <td style="text-align: left; width: 50%;"><input type="submit" value="G&eacute;n&eacute;rer !" /></td>
    </tr>
  </tbody>
</table>
 
</form>
<br />
<br/>
<em>Pour information : il y a exactement 83 caract&egrave;res disponibles si vous
s&eacute;lectionnez toutes les options.<br>
Si vous choississez de mettre n caract&egrave;res dans votre mot de passe, il
y aura alors 83^n possibilit&eacute;s de mots de passe.<br>
Par exemple pour n = 10, cela fait en tout... 15516041187205853449
possibilit&eacute;s.
</em>
</div>
 
    </body>
</html>