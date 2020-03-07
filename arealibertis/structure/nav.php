<nav class="STA-nav">
    <ul class="STA-hmenu">
		<li><a href="home.php" class="<?php if($menu == "home.php") echo "active";?>">Home</a></li>
		<li><a href="#" class="<?php if($menu == "gestionarticles.php" OR $menu == "savearticles.php" OR $menu == "deletearticles.php" OR $menu == "redigerarticles.php") echo "active";?>">Produits & Services</a>
			<ul>
				<li>
				   <a href="gestionarticles.php">Gestion produits & services</a>
				</li>
				<li>
				   <a href="#">Ajout de produits ou services</a>
				   <ul>
                       <li><a href="redigerarticles.php">Ajout de produit</a></li>
				   <li><a href="evenementgestion.php">Ajout et publication d'évenement</a></li>
				   <li><a href="redigerpartenaire.php">Ajout de partenaires</a></li>
				   
				   </ul>
				   
				</li>
			    <li>
				   <a href="#">Gestion des réservations</a>
				   <ul>
                       <li><a href="lesreservationpartenaires.php">Gestion réservation de partenaires</a></li>
				   <li><a href="lesreservationevenements.php">Gestion des entrées aux soirées-Evenements</a></li>
				   
				   
				   </ul>
				   
				</li>
			
			
			
			</ul>
		</li>
		<li><a href="#" class="<?php if($menu == "transactionfond.php" OR $menu == "detailsolde.php" OR $menu == "livraisoncommande.php") echo "active";?>">Transactions</a>
			<ul>
				<li><a href="transactionfond.php">Ajout et retrait de fond</a></li>
				<li><a href="detailsolde.php">Détails des soldes / Historique transactions</a></li>
				<li><a href="livraisoncommande.php">Livraison Commandes</a></li>
			</ul>
		</li>
		<li><a href="#" class="<?php if($menu == "messagerecu.php" OR $menu == "nouveaumessage.php" OR $menu == "messagesenvoyes.php" OR $menu == "fichierssoumis.php" OR $menu == "brouillons.php" OR $menu == "messagecollectifs.php") echo "active";?>">Messages</a>
			<ul>
				<li><a href="nouveaumessage.php">Nouveau message</a></li>
				<li><a href="brouillons.php">Brouillons</a></li>
				<li><a href="messagerecu.php">Messages reçus</a></li>
				<li><a href="messagesenvoyes.php">Messages envoyés</a></li>
				<li><a href="fichierssoumis.php">Fichiers soumis</a></li>
				<li><a href="messagecollectifs.php">Messages collectifs</a></li>
			</ul>
		</li>
		<li><a href="#" class="<?php if($menu == "adminusers.php" OR $menu == "gestioninternaute.php") echo "active";?>">Administration</a>
			<ul>
				<li>
				   <a href="adminusers.php">Gestion administrateur</a>
				</li>
				<li>
				   <a href="gestioninternaute.php">Gestion des membres</a>
				</li>
				<li>
				   <a href="journaladmin.php">Journal Admin</a>
				</li>
			</ul>
		</li>
		<li><a href="<?php echo $menu;?>?logout=ok">Deconnexion</a></li>
	</ul> 
</nav>