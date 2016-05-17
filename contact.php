
	<?php
		require_once ('inc/autoload.php');
		require_once ('template/_header.php');
	
	?>
	</br></br></br></br>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Contactez Nous</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Votre Message</h3>
						<p>
						pour quelque chose que vous voulez demander un plaisir de nous contacter, et je vous répondrai dès que possible.
						</p>
								<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm"  novalidate> 
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="S'il vous plaît entrez votre nom" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control" placeholder="Email" 
		id="email" required
		data-validation-required-message="S'il vous plaît entrez votre email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control" 
		placeholder="Message" id="message" required
		data-validation-required-message="S'il vous plaît entrez votre message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary pull-right">Envoyer</button><br /><br /><br /><br />
		</form>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Adresse de Bureau</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>Badji Mokhtar univercity</p>
									
									<h5>Email</h5>
									<p>mailatheboss@gmail.com</p>
									
									<h5>Tel:</h5>
									<p>+213697087417</p>
								</div>
							</div>
							<div class="col-md-6">
								<h3 class="section-title">Timings</h3>
								<div class="contact-info">
									<h5>Dimanche - Jeudi</h5>
									<p>09:00 - 18:30</p>
									
									<h5>Vendredi</h5>
									<p>Fermé</p>
									
									<h5>Samedi</h5>
									<p>Fermé</p>
								</div>
							</div>
						</div>
						<h3 class="section-title">Soyez connectés</h3>
						<p>
						Pour obtenir plus instruits et vous aider à vous construire une vie réussie.
						</p>						
					</div>
				</div>
			</div>
	<!-- /container -->

	

	<?php
		require_once ('template/_footer.php');
	
	?>