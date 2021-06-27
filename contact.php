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

		<title>ASA, CONTACT</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/contact.css"/>

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
		<!-- SECTION -->
		<div class="section">
			<img src="img/contact_005.jpg" alt="" class="imgcontact">
		</div>
		<!-- /SECTION -->
		<div class="espacevide"></div>
		<!-- code php de contact -->
<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
  
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
  // Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
  
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }
  
  if (!isset($_POST['captcha'])) {
    $nombreErreur++;
    $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
  } else {
    if ($_POST['captcha']!=4) {
      $nombreErreur++;
      $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
    }
  }
  
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $prenom = htmlentities($_POST['prenom']);
    $email = htmlentities($_POST['email']);
    $subjet = htmlentities($_POST['subjet']);
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    $destinataire = 'commercial@digiuslinkalgeria.net'; // Adresse email du webmaster
    $sujet = 'Titre du message'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Prénom</strong>: '.$prenom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Sujet</strong>: '.$subjet.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    
    echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
  if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
  if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
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
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title color-red">Formulaire de contact</div>
						<div class="section_subtitle">Avez-vous des questions, remarques ou suggestions sur ASA ?<br> Souhaitez-vous tout simplement nous laisser un message ?<br>Remplissez ce formulaire, nous vous répondrons dans les plus brefs délais.</div>
						<div class="contact_form_container">
							<form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>" id="contact_form" class="contact_form">
								<div class="row">
									<div class="">
										<!-- Name -->
										<label for="contact_name">Nom*</label>
										<input type="text" id="contact_name" class="contact_input" required="required" name="nom">
										<!-- Last Name -->
										<label for="contact_last_name">Prénom*</label>
										<input type="text" id="contact_last_name" class="contact_input" required="required" name="prenom">
									</div>
								</div>
								<div class="row">
									<!-- Subject -->
									<label for="contact_email">Email</label>
									<input type="email" id="contact_email" class="contact_input" name="email">
								</div>
								<div class="row">
									<!-- Subject -->
									<label for="contact_company">Sujet</label>
									<input type="text" id="contact_company" class="contact_input" name="subjet">
								</div>
								<div class="row">
									<label for="contact_textarea">Message*</label>
									<textarea id="contact_textarea" class="contact_input contact_textarea" required="required" name="message"></textarea>
								</div>
								<div class="row">Combien font 1+3:*<input class="contact_input" type="text" name="captcha" size="2"/></div>
								<input class="primary-btn btn-envoyer" type="submit" name="submit" value="Envoyer" />
							</form>
						</div>
					</div>
				</div>
				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col bloc-contact">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Direction générale</div>
							<ul>
								<li>Phone: <span>+213 (0)23 816 652</span></li>
								<li>Fax: <span class="fax">+213 (0)23 816 655</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Bureau commercial</div>
							<ul>
								<li>Phone: <span>+213 (0)550 902 702</span></li>
								<li>Email: <span>commercial@digiuslinkalgeria.net</span></li>
							</ul>
						</div>
						<!--<div class="contact_info_section">
							<div class="contact_info_title">Ressources humaines</div>
							<ul>
								<li>Phone: <span>+213 (0)561 690 345</span></li>
								<li>Email: <span>hr@digiuslinkalgeria.net</span></li>
							</ul>
						</div>-->
					</div>
				</div>
			</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<div class="espacevide"></div>
		<!-- SECTION -->
		<div class="bande-gris"></div>
		<div class="section maps-section">
			<!-- container -->
						<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=36.709155%2C%203.219030&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/internetagentur/"></a></div><style>.mapouter{text-align:right;height:550px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:550px;width:100%;}</style></div>
			<!-- /container -->
		</div>
		<div class="bande-gris"></div>
		<!-- /SECTION -->
		<div class="espacevide2"></div>
				<!-- SECTION -->
		<!--div class="section" -->
			<!-- container -->
			<!--div class="container" -->
				<!-- row -->
				<!--div class="row">
					<div class="section-title">
						<h1 class="title color-title2">Nos références</h1>
					</div-->
			<!-- container -->
					<!--div class="customer-logos">
  						<div class="slide"><img src="http://46c4ts1tskv22sdav81j9c69-wpengine.netdna-ssl.com/wp-content/uploads/sites/2/2012/02/6874.5_5F00_01C91EBC.png"></div>
  						<div class="slide"><img src="https://1000logos.net/wp-content/uploads/2017/03/LINUX-LOGO.png"></div>
  						<div class="slide"><img src="http://www.click3g.com/WebRoot/ce_pt/Shops/297911/MediaGallery/ios_icon.png"></div>
  						<div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Logo-ubuntu_cof-orange-hex.svg/1024px-Logo-ubuntu_cof-orange-hex.svg.png"></div>
  						<div class="slide"><img src="https://gigaom.com/wp-content/uploads/sites/1/2012/08/redhat.jpg"></div>
  						<div class="slide"><img src="https://www.sjsolutions.net/wp-content/uploads/2016/01/cisco-logo-vector.png"></div>
  						<div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Dell_logo_2016.svg/1024px-Dell_logo_2016.svg.png"></div>
  						<div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/1024px-HP_logo_2012.svg.png"></div>
  						<div class="slide"><img src="https://t4.rbxcdn.com/cebd52c0dc97577fb1e007e8be8442e1"></div>
  						<div class="slide"><img src="https://www.intel.com/etc/designs/intel/us/en/images/printlogo.png"></div>
  						<div class="slide"><img src="https://www.androidblog.ch/wp-content/uploads/2012/05/asus_front.jpg"></div>
  						<div class="slide"><img src="https://vignette.wikia.nocookie.net/theideas/images/6/6b/AMD-logo.jpg/revision/latest?cb=20181030151057"></div>
					</div>	
				</div>
				<!-- /row -->
			<!--/div>
			<!-- /container -->
		<!--/div-->
		<!-- /SECTION -->
		<?php include("footer.php"); ?>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<!--script>
			$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});
		<!-- /script -->
	</body>
</html>
