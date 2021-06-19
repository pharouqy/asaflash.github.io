<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="ASA est une societe de distrubution et de commercialisation de produits informatiques et electroniques associee avec digius link algeria."/>
		<Meta name="keywords" content="informatiques, electronique, flash disque, chargeur, souris, algerie, alger, asa, asaflash">
		<meta name="revisit-after" content="30 days">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ASA, RMA</title>

		<link type="text/css" rel="stylesheet" href="css/contact.css"/>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<?php include("header.php"); ?>
		<div class="espacevide"></div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h1 class="title-change">RETOUR RMA</h1>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
		<!-- code php de contact -->
<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
  
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $client = htmlentities($_POST['client']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $tel = htmlentities($_POST['tel']);
    $mob = htmlentities($_POST['mob']);
    $adresse = htmlentities($_POST['adresse']);
    $mail = htmlentities($_POST['mail']);
    $reference1 = htmlentities($_POST['reference1']);
    $article1 = htmlentities($_POST['article1']);
    $quantite1 = htmlentities($_POST['quantite1']);
    //$defectueux1 = htmlentities($_POST['defectueux1']);
    //$endommager1 = htmlentities($_POST['endommager1']);
    //$autre1 = htmlentities($_POST['autre1']);
    $explication1 = htmlentities($_POST['explication1']);
    $reference2 = htmlentities($_POST['reference2']);
    $article2 = htmlentities($_POST['article2']);
    $quantite2 = htmlentities($_POST['quantite2']);
    //$defectueux2 = htmlentities($_POST['defectueux2']);
    //$endommager2 = htmlentities($_POST['endommager2']);
    //$autre2 = htmlentities($_POST['autre2']);
    $explication2 = htmlentities($_POST['explication2']);
    $reference3 = htmlentities($_POST['reference3']);
    $article3 = htmlentities($_POST['article3']);
    $quantite3 = htmlentities($_POST['quantite3']);
    //$defectueux3 = htmlentities($_POST['defectueux3']);
    //$endommager3 = htmlentities($_POST['endommager3']);
    //$autre3 = htmlentities($_POST['autre3']);
    $explication3 = htmlentities($_POST['explication3']);
    $reference4 = htmlentities($_POST['reference4']);
    $article4 = htmlentities($_POST['article4']);
    $quantite4 = htmlentities($_POST['quantite4']);
    //$defectueux4 = htmlentities($_POST['defectueux4']);
    //$endommager4 = htmlentities($_POST['endommager4']);
    //$autre4 = htmlentities($_POST['autre4']);
    $explication4 = htmlentities($_POST['explication4']);
    $reference5 = htmlentities($_POST['reference5']);
    $article5 = htmlentities($_POST['article5']);
    $quantite5 = htmlentities($_POST['quantite5']);
    //$defectueux5 = htmlentities($_POST['defectueux5']);
    //$endommager5 = htmlentities($_POST['endommager5']);
    //$autre5 = htmlentities($_POST['autre5']);
    $explication5 = htmlentities($_POST['explication5']);
    
    // Variables concernant l'email
		//$destinataire = 'pharouky@gmail.com';
    $destinataire = 'support@asaflash.com'; // Adresse email du webmaster
    $sujet = 'Formulaire De Fiche Retour ( R M A) Du Client  ' .$client. ''; // Titre de l'email
    $contenu = '<html><head><style>table, td {border: 1px solid black;border-collapse: collapse;text-align: center;} td {width: fit-content;} th {background: black;color: white;border: 1px solid white;padding: 10px 25px;}</style><title>Fiche Retour Produits ( R M A)</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un nouveau formulaire ( R M A ) à partir de votre site web.</p>';
    $contenu .= '<p><strong>Client</strong>: '.$client.'</p>';
    $contenu .= '<p><strong>Téléphone</strong>: '.$tel.'</p>';
    $contenu .= '<p><strong>Mobile</strong>: '.$mob.'</p>';
    $contenu .= '<p><strong>Adresse</strong>: '.$adresse.'</p>';
    $contenu .= '<p><strong>Mail</strong>: '.$mail.'</p>';
	$contenu .= '<table>';
	$contenu .= '<thead>';
	$contenu .= '<tr>';
	$contenu .= '<th>RÉFÉRENCE ARTICLE</th>';
	$contenu .= '<th>ARTICLE</th>';
	$contenu .= '<th>QUANTITE</th>';
	//$contenu .= '<th>MOTIF DE RETOUR</th>';
	$contenu .= '<th>EXPLICATIONS <br> (PARTIE RESERVEE POUR ASA)</th>';
	$contenu .= '</tr>';
	$contenu .= '</thead>';
	$contenu .= '<tbody>';
	$contenu .= '<tr>';
	$contenu .= '<td>' .$reference1. '</td>';
	$contenu .= '<td>' .$article1. '</td>';
	$contenu .= '<td>' .$quantite1. '</td>';
	//$contenu .= '<td>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>01- Produits déféctueux  </strong>' .$defectueux1. '</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>02- Produits est endommagé  </strong>' .$endommager1.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>03- Autre  </strong>'.$autre1.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '</td>';
	$contenu .= '<td>' .$explication1. '</td>';
	$contenu .= '</tr>';
	$contenu .= '<tr>';
	$contenu .= '<td>' .$reference2. '</td>';
	$contenu .= '<td>' .$article2. '</td>';
	$contenu .= '<td>' .$quantite2. '</td>';
	//$contenu .= '<td>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>01- Produits déféctueux  </strong>'.$defectueux2.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>02- Produits est endommagé  </strong>'.$endommager2.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>03- Autre  </strong>'.$autre2.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '</td>';
	$contenu .= '<td>' .$explication2. '</td>';
	$contenu .= '</tr>';
	$contenu .= '<tr>';
	$contenu .= '<td>' .$reference3. '</td>';
	$contenu .= '<td>' .$article3. '</td>';
	$contenu .= '<td>' .$quantite3. '</td>';
	//$contenu .= '<td>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>01- Produits déféctueux  </strong>'.$defectueux3.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>02- Produits est endommagé  </strong>'.$endommager3.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>03- Autre  </strong>'.$autre3.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '</td>';
	$contenu .= '<td>' .$explication3. '</td>';
	$contenu .= '</tr>';
	$contenu .= '<tr>';
	$contenu .= '<td>' .$reference4. '</td>';
	$contenu .= '<td>' .$article4. '</td>';
	$contenu .= '<td>' .$quantite4. '</td>';
	//$contenu .= '<td>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>01- Produits déféctueux  </strong>'.$defectueux4.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>02- Produits est endommagé  </strong>'.$endommager4.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>03- Autre  </strong>'.$autre4.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '</td>';
	$contenu .= '<td>' .$explication4. '</td>';
	$contenu .= '</tr>';
	$contenu .= '<tr>';
	$contenu .= '<td>' .$reference5. '</td>';
	$contenu .= '<td>' .$article5. '</td>';
	$contenu .= '<td>' .$quantite5. '</td>';
	//$contenu .= '<td>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>01- Produits déféctueux  </strong>'.$defectueux5.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>02- Produits est endommagé  </stron'.$endommager5.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '<div>';
	//$contenu .= '<p><strong>03- Autre  </strong>'.$autre5.'</p>';
	//$contenu .= '</div>';
	//$contenu .= '</td>';
	$contenu .= '<td>' .$explication5. '</td>';
	$contenu .= '</tr>';
	$contenu .= '</tbody>';
	$contenu .= '</table>';
    $contenu .= '</body></html>'; // Contenu du message de l'email
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    
    echo '<h3 style="text-align: center;">Formulaire RMA Envoyé Avec Succès</h3>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    echo '</div>';
  }
}
?>
<!--/code php de contact-->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
			<div class="row">
				<!-- Get in touch -->
				<div class="col-lg-12 contact_col">
					<div class="get_in_touch">
						<div class="section_title color-red">Formulaire de retour R M A</div>
						<div class="contact_form_container">
							<form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>" id="contact_form" class="contact_form">
								<div class="row">
									<div class="">
										<!-- Name -->
										<label for="client_name">Client*</label>
										<input type="text" id="client_name" class="contact_input" required="required" name="client">
										<!-- Last Name -->
										<label for="tel_name">Téléphone*</label>
										<input type="tel" id="tel_name" class="contact_input" required="required" name="tel">
									</div>
								</div>
								<div class="row">
									<!-- Subject -->
									<label for="mail_name">Mail*</label>
									<input type="email" id="mail_name" class="contact_input" name="mail" required="required">
								</div>
								<div class="row">
									<!-- Subject -->
									<label for="mob_name">Mobile</label>
									<input type="tel" id="mob_name" class="contact_input" name="mob">
								</div>
								<div class="row">
									<!-- Subject -->
									<label for="adress_name">Adresse</label>
									<input type="text" id="adress_name" class="contact_input" name="adresse">
								</div>
								<div class="row">
								<table class="retourRMA">
									<thead>
										<tr>
											<th>REFERENCE ARTICLE</th>
											<th>ARTICLE</th>
											<th>QUANTITE</th>
											<!--th>MOTIF DE RETOUR</th-->
											<th>EXPLICATIONS</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<input type="text" id="reference_name1" class="contact_input" name="reference1" placeholder="Reference Article">
											</td>
											<td>
												<SELECT name="article1" size="1" id="article_name1" class="contact_input" required="required">
												<OPTION></OPTION>
												<OPTION>SOURIS OPTIQUE SANS FIL AS47W MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE SANS FIL AS48W01 MODEL B</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS47M MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS50M01 MODEL B</OPTION> 
												<OPTION>CHARGEUR FAST QC3 AVEC CÂBLE USB 3.0</OPTION> 
												<OPTION>CHARGEUR FAST AVEC CÂBLE USB</OPTION> 
												<OPTION>CÂBLE USB LUNA IPHONE TYPE C</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 128 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 4 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 8 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 16 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 2.0</OPTION> 
												<OPTION>CÂBLE ONDULEUR</OPTION> 
												<OPTION>CÂBLE LAPTOP</OPTION> 
												<OPTION>CÂBLE PC</OPTION> 
												<OPTION>RAM DDR3 2GO</OPTION> 
												<OPTION>RAM DDR3 4GO</OPTION> 
												<OPTION>RAM DDR3 8GO</OPTION> 
												</SELECT>
											</td>
											<td>
												<input type="number" id="quantite_name1" class="contact_input" name="quantite1" required="required" placeholder="Quantité" min="0">
											</td>
											<!--td>
												<div class="flex-input">
												<label class="width-label" for="defectueux">01- Produits defectueux</label><input type="checkbox" name="defectueux1" id="defectueux" class="contact_input">
												</div>
												<div class="flex-input">
       											<label class="width-label" for="endommager">02- Produits est endommage</label><input type="checkbox" name="endommager1" id="endommager" class="contact_input">
       											</div>
												<div class="flex-input">
       											<label class="width-label" for="autre">03- Autre</label><input type="checkbox" name="autre1" id="autre" class="contact_input">
												</div>
											</td-->
											<td>
												<textarea id="explication_name" class="contact_input contact_textarea" name="explication1" placeholder="Explications"></textarea>
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" id="reference_name2" class="contact_input" name="reference2" placeholder="Reference Article" >
											</td>
											<td>
												<SELECT name="article2" size="1" id="article_name2" class="contact_input">
												<OPTION></OPTION>
												<OPTION>SOURIS OPTIQUE SANS FIL AS47W MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE SANS FIL AS48W01 MODEL B</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS47M MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS50M01 MODEL B</OPTION>
												<OPTION>CHARGEUR FAST QC3 AVEC CÂBLE USB 3.0</OPTION> 
												<OPTION>CHARGEUR FAST AVEC CÂBLE USB</OPTION> 
												<OPTION>CÂBLE USB LUNA IPHONE TYPE C</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 128 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 4 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 8 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 16 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 2.0</OPTION> 
												<OPTION>CÂBLE ONDULEUR</OPTION> 
												<OPTION>CÂBLE LAPTOP</OPTION> 
												<OPTION>CÂBLE PC</OPTION> 
												<OPTION>RAM DDR3 2GO</OPTION> 
												<OPTION>RAM DDR3 4GO</OPTION> 
												<OPTION>RAM DDR3 8GO</OPTION> 
												</SELECT>
											</td>
											<td>
												<input type="number" id="quantite_name2" class="contact_input" name="quantite2" placeholder="Quantité" min="0">
											</td>
											<!--td>
												<div class="flex-input">
												<label class="width-label" for="defectueux2">01- Produits defectueux</label><input type="checkbox" name="defectueux2" id="defectueux2" class="contact_input">
												</div>
												<div class="flex-input">
       											<label class="width-label" for="endommager2">02- Produits est endommage</label><input type="checkbox" name="endommager2" id="endommager2" class="contact_input">
       											</div>
												<div class="flex-input">
       											<label class="width-label" for="autre2">03- Autre</label><input type="checkbox" name="autre2" id="autre2" class="contact_input">
												</div>
											</td-->
											<td>
												<textarea id="explication_name" class="contact_input contact_textarea" name="explication2" placeholder="Explications"></textarea>
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" id="reference_name3" class="contact_input" name="reference3" placeholder="Reference Article" >
											</td>
											<td>
												<SELECT name="article3" size="1" id="article_name3" class="contact_input">
												<OPTION></OPTION>
												<OPTION>SOURIS OPTIQUE SANS FIL AS47W MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE SANS FIL AS48W01 MODEL B</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS47M MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS50M01 MODEL B</OPTION> 
												<OPTION>CHARGEUR FAST QC3 AVEC CÂBLE USB 3.0</OPTION> 
												<OPTION>CHARGEUR FAST AVEC CÂBLE USB</OPTION> 
												<OPTION>CÂBLE USB LUNA IPHONE TYPE C</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 128 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 4 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 8 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 16 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 2.0</OPTION> 
												<OPTION>CÂBLE ONDULEUR</OPTION> 
												<OPTION>CÂBLE LAPTOP</OPTION> 
												<OPTION>CÂBLE PC</OPTION> 
												<OPTION>RAM DDR3 2GO</OPTION> 
												<OPTION>RAM DDR3 4GO</OPTION> 
												<OPTION>RAM DDR3 8GO</OPTION> 
												</SELECT>
											</td>
											<td>
												<input type="number" id="quantite_name3" class="contact_input" name="quantite3" placeholder="Quantité" min="0">
											</td>
											<!--td>
												<div class="flex-input">
												<label class="width-label" for="defectueux3">01- Produits defectueux</label><input type="checkbox" name="defectueux3" id="defectueux3" class="contact_input">
												</div>
												<div class="flex-input">
       											<label class="width-label" for="endommager3">02- Produits est endommage</label><input type="checkbox" name="endommager3" id="endommager3" class="contact_input">
       											</div>
												<div class="flex-input">
       											<label class="width-label" for="autre3">03- Autre</label><input type="checkbox" name="autre3" id="autre3" class="contact_input">
												</div>
											</td-->
											<td>
												<textarea id="explication_name" class="contact_input contact_textarea" name="explication3" placeholder="Explications"></textarea>
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" id="reference_name4" class="contact_input" name="reference4" placeholder="Reference Article" >
											</td>
											<td>
												<SELECT name="article4" size="1" id="article_name4" class="contact_input">
												<OPTION></OPTION>
												<OPTION>SOURIS OPTIQUE SANS FIL AS47W MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE SANS FIL AS48W01 MODEL B</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS47M MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS50M01 MODEL B</OPTION> 
												<OPTION>CHARGEUR FAST QC3 AVEC CÂBLE USB 3.0</OPTION> 
												<OPTION>CHARGEUR FAST AVEC CÂBLE USB</OPTION> 
												<OPTION>CÂBLE USB LUNA IPHONE TYPE C</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 128 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 4 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 8 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 16 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 2.0</OPTION> 
												<OPTION>CÂBLE ONDULEUR</OPTION> 
												<OPTION>CÂBLE LAPTOP</OPTION> 
												<OPTION>CÂBLE PC</OPTION> 
												<OPTION>RAM DDR3 2GO</OPTION> 
												<OPTION>RAM DDR3 4GO</OPTION> 
												<OPTION>RAM DDR3 8GO</OPTION> 
												</SELECT>
											</td>
											<td>
												<input type="number" id="quantite_name4" class="contact_input" name="quantite4" placeholder="Quantité" min="0">
											</td>
											<!--td>
												<div class="flex-input">
												<label class="width-label" for="defectueux4">01- Produits defectueux</label><input type="checkbox" name="defectueux4" id="defectueux4" class="contact_input">
												</div>
												<div class="flex-input">
       											<label class="width-label" for="endommager4">02- Produits est endommage</label><input type="checkbox" name="endommager4" id="endommager4" class="contact_input">
       											</div>
												<div class="flex-input">
       											<label class="width-label" for="autre4">03- Autre</label><input type="checkbox" name="autre4" id="autre4" class="contact_input">
												</div>
											</td-->
											<td>
												<textarea id="explication_name" class="contact_input contact_textarea" name="explication4" placeholder="Explications"></textarea>
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" id="reference_name5" class="contact_input" name="reference5" placeholder="Reference Article" >
											</td>
											<td>
												<SELECT name="article5" size="1" id="article_name5" class="contact_input">
												<OPTION></OPTION>
												<OPTION>SOURIS OPTIQUE SANS FIL AS47W MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE SANS FIL AS48W01 MODEL B</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS47M MODEL A</OPTION> 
												<OPTION>SOURIS OPTIQUE FILAIRE AS50M01 MODEL B</OPTION> 
												<OPTION>CHARGEUR FAST QC3 AVEC CÂBLE USB 3.0</OPTION> 
												<OPTION>CHARGEUR FAST AVEC CÂBLE USB</OPTION> 
												<OPTION>CÂBLE USB LUNA IPHONE TYPE C</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 128 GO 3.0</OPTION> 
												<OPTION>FLASH DISQUE 4 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 8 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 16 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 32 GO 2.0</OPTION> 
												<OPTION>FLASH DISQUE 64 GO 2.0</OPTION> 
												<OPTION>CÂBLE ONDULEUR</OPTION> 
												<OPTION>CÂBLE LAPTOP</OPTION> 
												<OPTION>CÂBLE PC</OPTION> 
												<OPTION>RAM DDR3 2GO</OPTION> 
												<OPTION>RAM DDR3 4GO</OPTION> 
												<OPTION>RAM DDR3 8GO</OPTION> 
												</SELECT>
											</td>
											<td>
												<input type="number" id="quantite_name5" class="contact_input" name="quantite5" placeholder="Quantité" min="0">
											</td>
											<!--td>
												<div class="flex-input">
												<label class="width-label" for="defectueux5">01- Produits defectueux</label><input type="checkbox" name="defectueux5" id="defectueux5" class="contact_input">
												</div>
												<div class="flex-input">
       											<label class="width-label" for="endommager5">02- Produits est endommage</label><input type="checkbox" name="endommager5" id="endommager5" class="contact_input">
       											</div>
												<div class="flex-input">
       											<label class="width-label" for="autre5">03- Autre</label><input type="checkbox" name="autre5" id="autre5" class="contact_input">
												</div>
											</td-->
											<td>
												<textarea id="explication_name" class="contact_input contact_textarea" name="explication5" placeholder="Explications"></textarea>
											</td>
										</tr>
									</tbody>
								</table>
								</div>
								<!--div class="row">Combien font 11X12:*<input class="contact_input" type="text" name="captcha" size="2"/></div-->
								<div class="btn-rma">
									<input class="primary-btn btn-envoyer" type="submit" name="submit" value="Envoyer" required="required">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->
		<div class="espacevide"></div>
		<?php include("footer.php"); ?>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
