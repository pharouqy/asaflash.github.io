		<!-- FOOTER -->
		<div class="bande-rouge"></div>
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">A propos</h3>
								<p class="font-size-footer">ASA est une societe de distrubution et de commercialisation de produits informatiques et electroniques associee avec digius link algeria.</p>
								<ul class="footer-links">
									<li class="font-size-footer"><i class="fa fa-map-marker"></i>Adresse: Cité Krim Belkacem Grp 04 Villa N°02 Dar-El-Beida - Alger</li>
									<li class="font-size-footer"><i class="fa fa-phone"></i>Tel: +213 (0) 23 816 652 / +213 (0) 23 816 655</li>
									<li class="font-size-footer"><i class="fa fa-mobile"></i>Mob: +213 (0) 550 902 702</li>
									<li class="font-size-footer"><a href="mailto:contact@asaflash.com"><i class="fa fa-envelope-o"></i>Email: contact@asaflash.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li class="font-size-footer"><a href="produits.php#souris">Souris</a></li>
									<li class="font-size-footer"><a href="produits.php#chargeur">Chargeurs</a></li>
									<li class="font-size-footer"><a href="produits.php#cable-usb">Câbles USB</a></li>
									<li class="font-size-footer"><a href="produits.php#ddr3">Barettes RAM</a></li>
									<li class="font-size-footer"><a href="produits.php#flashdisque">Flash Disques</a></li>
									<li class="font-size-footer"><a href="produits.php#cables-alimentations">Câbles alimentations</a></li>
									<!--li class="font-size-footer"><a href="produits.php#tablette">Tablettes</a></li-->
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informations</h3>
								<ul class="footer-links">
									<li class="font-size-footer"><a href="apropos.php">A propos</a></li>
									<li class="font-size-footer"><a href="produits.php">Produits</a></li>
									<li class="font-size-footer"><a href="contact.php">Contact</a></li>
									<li class="font-size-footer"><a href="rma.php">RMA</a></li>
									<li class="font-size-footer">FAQ</li>
									<li class="font-size-footer">Terms & Conditions</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<a href="https://asaflash.com/"><img src="img/asa-white.png" id="img-footer" alt="asa"></a>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
			<div class="cRetour"></div>

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!--  -->
								 &copy; <script>document.write(new Date().getFullYear());</script> Tous droits reservés
							<!--  -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
		<script>            
			jQuery(document).ready(function() {
  			var duration = 500;
  			jQuery(window).scroll(function() {
    			if (jQuery(this).scrollTop() > 100) {
      			// Si un défillement de 100 pixels ou plus.
      			// Ajoute le bouton
      			jQuery('.cRetour').fadeIn(duration);
    			} else {
      			// Sinon enlève le bouton
      			jQuery('.cRetour').fadeOut(duration);
    			}
  			});
				
  			jQuery('.cRetour').click(function(event) {
    			// Un clic provoque le retour en haut animé.
    			event.preventDefault();
    			jQuery('html, body').animate({scrollTop: 0}, duration);
    			return false;
  			})
			});
		</script>