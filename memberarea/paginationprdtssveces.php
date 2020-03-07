<?php
/*
003.permet la pagination à afficher
004.prend en paramètres le nombre total de pages et la page courante
005.*/
function pagination($total,$courante)
{
		/* on définit quelques variables dont on aura besoin */
		$prec = $courante - 1; // numéro de la page précédente
		$suiv = $courante + 1; // numéro de la page suivante
		$avder = $total - 1; // avant dernière page
		$adjacentes = 3; // nombre de pages à afficher de chaque côté de la page courante
		/*
		015.On commence la pagination que l'on stocke dans la variable
		016.à retourner
		017.pagination() pourra ainsi être appelée plusieurs fois,
		018.en haut et en bas d'une page par exemple
		019.*/
		$pagination = "";
		// s'il n'ya pas au moins deux pages, on n'affiche rien
		if($total > 1)
		// il y a au moins deux pages
		{
				// on commence par stocker
				// dans $pagination le <div> d'ouverture
				$pagination .= "<div class=\"pagination\">\n";
				// on affiche d'abord le bouton précédent
				if ($courante == 2)
				// si on est sur la page 2,
				//le bouton précédent renvoit sur la page initiale,
				//il est inutile de mettre ?page=1 sinon
				//on se retrouve avec un duplicate content
				$pagination.= "<a href=\"payerproduits.php\">«
				préc</a>";
				elseif ($courante > 2)
				// si la page actuelle est supérieure à 2
				//le bouton précédent renvoit sur la page
				//dont le numéro est immédiatement inférieur
				$pagination.= "<a href=\"payerproduits.php?page=$prec\">«
				préc</a>";
				else
				// sinon on est sur la page 1 :
				//on désactive le bouton précédent.
				//on est nécessairement sur la page 1
				//car on a fait le traitement des pages dans payerproduits.php,
				//pas besoin de mettre elseif ($courante==1)
				$pagination.= "<span class=\"desactive\">« 
				préc</span>";
				/*
				052.On affiche maintenant les pages.
				053.On cherchera à afficher au maximum 11 numéros de page
				054.en général, et 12 dans le cas 1 où il n'y a pas de troncature :
				055.dans un 1er cas, il n'y a pas assez de pages 
				056.pour "tronquer la pagination" : on affiche toutes les pages
				057.dans le 2ème cas, il y a trop de pages :
				058.la troncature s'effectue selon la page sur laquelle on est positionnée
				059.*/
				// CAS 1 : il n'y a pas assez de pages pour tronquer,
				//on les affiche toutes
				if ($total < 7 + ($adjacentes * 2))
				{
						/*
						065.On ajoute la page 1.
						066.On la traite séparément pour avoir payerproduits.php
						067.au lieu de payerproduits.php?page=1
						068.et ainsi éviter le duplicate content
						069.cette ligne équivaut à :
						070.if ($courante == 1)
						071.$pagination.= "<span class=\"courante\">1</span>";
						072.else
						073.$pagination.= "<a href=\"payerproduits.php\">1</a>";
						074.*/
						$pagination.= ($courante == 1) ? "<span class=\"
						courante\">1</span>" :
						"<a href=\"payerproduits.php\">1</a>";
						// pour les pages restantes on utilise une simple boucle for
						for ($compteur = 2; $compteur <= $total; $compteur++)
						{
						if ($compteur == $courante)
						// on affiche la page courante différemment
						//pour la mettre en évidence
						$pagination.= "<span class=\"courante\">
						$compteur</span>";
						else
						$pagination.= "<a href=\"payerproduits.php?page=$compteur\">
						$compteur</a>";
						}
				}
				// CAS 2 : on a assez de pages pour tronquer
				// en fonction de la page actuelle
				elseif($total > 5 + ($adjacentes * 2))
				{
						/*
						096.On est placé dans la partie proche des premières pages
						097.on tronque donc la fin de la pagination.
						098.l'affichage sera 9 pages à gauche ...
						099.2 pages à droite
						100.*/
						if($courante < 1 + ($adjacentes * 2))
						{
							// on affiche la page 1 comme vu précédemment
							$pagination.= ($courante == 1) ? "<span class=\"courante\">1</span>" :
							"<a href=\"payerproduits.php\">1</a>";
							// puis les huit pages suivantes
								for ($compteur = 2; $compteur < 4 + ($adjacentes * 2); $compteur++)
								{
								if ($compteur == $courante)
								$pagination.= "<span class=\"courante\">$compteur</span>";
								else
								$pagination.= "<a href=\"payerproduits.php?page=$compteur\">$compteur</a>";
								}
							// les ... pour marquer la troncature
							//$pagination.= " ... ";
							// et enfin les deux dernières pages
							$pagination.= "<a href=\"payerproduits.php?page=$avder\">$avder</a>";
							$pagination.= "<a href=\"payerproduits.php?page=$total\">$total</a>";
						}
						/*
						121.on est placé dans la partie centrale de notre pagination,
						122.on tronque donc le début et la fin de la pagination.
						123.l'affichage sera 2 pages à gauche ...
						124.7 pages au centre ...
						125.2 pages à droite
						126.*/
						elseif($total - ($adjacentes * 2) > $courante && $courante > ($adjacentes * 2))
						{
								// on affiche les deux premières pages
								$pagination.= "<a href=\"payerproduits.php\">1</a>";
								$pagination.= "<a href=\"payerproduits.php?page=2\">2</a>";
								// les ... pour marquer la troncature
								// $pagination.= " ... ";
								/* puis sept pages :
								135.les trois précédent la page courante,
								136.la page courante, puis les trois lui succédant
								137.*/
								for ($compteur = $courante - $adjacentes; $compteur <= $courante +
								$adjacentes; $compteur++)
								{
								if ($compteur == $courante)
								$pagination.= "<span class=\"courante\">$compteur</span>";
								else
								$pagination.= "<a href=\"payerproduits.php?page=$compteur\">$compteur</a>";
								}
								// les ... pour marquer la troncature
								//  $pagination.= " ... ";
								// et enfin les deux dernière spages
								$pagination.= "<a href=\"payerproduits.php?page=$avder\">$avder</a>";
								$pagination.= "<a href=\"payerproduits.php?page=$total\">$total</a>";
						}
						/*
						153.sinon on est placé dans la partie de droite,
						154.on tronque donc le début de la pagination.
						155.l'affichage sera 2 pages à gauche ...
						156.9 pages à droite (voir figure 4)
						157.*/
						else
						{
									// on affiche les deux premières pages
									$pagination.= "<a href=\"payerproduits.php\">1</a>";
									$pagination.= "<a href=\"payerproduits.php?page=2\">2</a>";
									// les ... pour marquer la troncature
									$pagination.= " ... ";
									// et enfin les neuf dernières pages
									for ($compteur = $total - (2 + ($adjacentes * 2)); $compteur <= $total; $compteur++)
									{
									if ($compteur == $courante)
									$pagination.= "<span class=\"courante\">$compteur</span>";
									else
									$pagination.= "<a href=\"payerproduits.php?page=$compteur\">$compteur</a>";
									}
						}
				}
				// pour finir on affiche le bouton suivant
				if ($courante < $compteur - 1)
				$pagination.= "<a href=\"payerproduits.php?page=$suiv\"> suiv »</a>\n";
				else
				$pagination.= "<span class=\"desactive\">suiv »</span>\n";
				$pagination.= "</div>\n";
		}
		// et on retourne $pagination au programme appelant la fonction
		return ($pagination);
}
?> 