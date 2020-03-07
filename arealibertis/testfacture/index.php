<?php
if(isset($_GET["fctuser"]))
{
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		include("config/config.php");
		$bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
		
		$req = $bdd->query('SELECT id_licence,idclientsta,proprietaire,coordoneesuser,nomproduit,naturelicence,quantite_licence,prixunitaire,prixproduitHT,TVAlicence,prixproduitTTC,qteabonnemnt,puabonnement,prihtabonnement,TVAabonnement,PrixTTCabnmt,quantitepstclt,punitairepstclt,prixhtpstclt,tvapstclt,prixttcpstclt,quantitepstcltabnmt,punitairepstcltabnmt,prixhtpstcltabnmt,tvapstcltabnmt,prixttcpstcltabnmt,prixtotal,datepaiement FROM licence WHERE id_licence = "'.$_GET["fctuser"].'" ');
		while($donnees = $req->fetch())
		{
			$idlicence = $donnees["id_licence"];
			$idclientsta = $donnees["idclientsta"];
			$proprietaire = $donnees["proprietaire"];
			$coordoneesuser = $donnees["coordoneesuser"];
			$nomproduit = $donnees["nomproduit"];
			$naturelicence = $donnees["naturelicence"];
			$quantitelicence = $donnees["quantite_licence"];
			$prixunitaire = $donnees["prixunitaire"];
			$prixproduitHT = $donnees["prixproduitHT"];
			$TVAlicence = $donnees["TVAlicence"];
			$prixproduitTTC = $donnees["prixproduitTTC"];
			$qteabonnemnt = $donnees["qteabonnemnt"];
			$puabonnement = $donnees["puabonnement"];
			$prihtabonnement = $donnees["prihtabonnement"];
			$TVAabonnement = $donnees["TVAabonnement"];
			$PrixTTCabnmt = $donnees["PrixTTCabnmt"];
			$quantitepstclt = $donnees["quantitepstclt"];
			$punitairepstclt = $donnees["punitairepstclt"];
			$prixhtpstclt = $donnees["prixhtpstclt"];
			$tvapstclt = $donnees["tvapstclt"];
			$prixttcpstclt = $donnees["prixttcpstclt"];
			$quantitepstcltabnmt = $donnees["quantitepstcltabnmt"];
			$punitairepstcltabnmt = $donnees["punitairepstcltabnmt"];
			$prixhtpstcltabnmt = $donnees["prixhtpstcltabnmt"];
			$tvapstcltabnmt = $donnees["tvapstcltabnmt"];
			$prixttcpstcltabnmt = $donnees["prixttcpstcltabnmt"];
			$prixtotal = $donnees["prixtotal"];
			$datepaiement = $donnees["datepaiement"];
		}
		$req->closeCursor();
													
		
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
}

require('fpdf.php');

class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('logostabeninstagroupe.png',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(30,10,'Titre',1,0,'C');
    // Saut de ligne
    $this->Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
/*for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Impression de la ligne numéro '.$i,0,1);*/
$pdf->Output();
?>