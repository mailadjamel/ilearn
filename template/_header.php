<?php



if(isset($_POST['NameSignUp'])){
    SignUp::Inscri($_POST['NameSignUp'],$_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['pwd'],$_POST['Date_de_naissance']);
  }
  if(isset($_POST['NameSignIn'])){

    SignIn::Login($_POST['NameSignIn'],$_POST['pwd']);

  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>ILearner</title>
	<link rel="favicon" href="assets/images/favicon.png">

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/style.css">
  
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
   	


	
  <script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
  <script src="js/modernizr.js"></script>
    


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->


</head>
<body>

<div role="banner"  id="header" class="alt">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
				
					
					<?php if (!isset($_SESSION['pseudo'])) {
        				echo '
                <li class="active"><a href="index.php">Accueil</a></li>
                <li class="t"><a href="about.php">À Propos</a></li>
                <li class="t"><a href="portfolio.php">Portfolio</a></li>
                <li class="t"><a href="contact.php">Contact</a></li>
							      <li  class ="login" class="t"><a class="cd-signin" href="#0">Se Connecter</a></li>
          					<li  class ="login" class="t"><a class="cd-signup" href="#0">Inscription</a></li>'; }


				   		 if (isset($_SESSION['pseudo'])){

				    	echo ' 	

								<nav id="nav">
								<ul>
                    <li class="active"><a href="index.php">Accueil</a></li>
                    <li class="t"><a href="about.php">À Propos</a></li>
                    <li class="t"><a href="courses.php">Courses</a></li>
                    <li class="t"><a href="portfolio.php">Portfolio</a></li>
                    <li class="t"><a href="contact.php">Contact</a></li>
                    <li class="t"><a href="">'. $_SESSION['pseudo'] .'</a>
                          <ul>
                                <li><a href="generic.html">Mes cours</a></li>
                                <li><a href="logout.php">Déconnexion</a></li>
                          </ul></li>
                </ul>
								</nav>
								
				    		';


				    	}

				    ?>
					

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

</div>




<div class="cd-user-modal"  id="modal"> <!-- this is the entire modal form, including the background -->
              <!-- this is the container wrapper -->
    <div class="cd-user-modal-container">
      <ul class="cd-switcher">
        <li><a href="#0">Se Connecter</a></li>
        <li><a href="#0">Inscription</a></li>
      </ul>


                  <!-- log in form -->


      <div id="cd-login">
        <form class="cd-form" method="POST" action="">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">pseudo</label>
            <input class="full-width has-padding has-border" name="NameSignIn" id="" type="text" placeholder="pseudo" required="">
            <span class="cd-error-message">Erreur message ici!</span>
          </p>
        
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">Mot de passe</label>
            <input class="full-width has-padding has-border" name="pwd" id="signin-password" type="password"  placeholder="Password" required="">
            <a href="#0" class="hide-password">Afficher</a>
            <span class="cd-error-message">Erreur message ici!</span>
          </p>

          

          <p class="fieldset" >
            <input class="full-width" type="submit" value="Login" >
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Mot de passe oublié?</a></p>
        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-login -->



              <!-- sign up form -->


      <div id="cd-signup">
        <form class="cd-form"  method="POST" action="">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">pseudo</label>
            <input class="full-width has-padding has-border" name="NameSignUp" id="signup-username" type="text"  required="" placeholder="pseudo">
            <span class="cd-error-message">Erreur message ici!</span>
          </p>
            <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Nom</label>
            <input class="full-width has-padding has-border" name="Nom" id="" type="text" placeholder="Nom" required="">
            <span class="cd-error-message">Erreur message ici!</span>
          </p>
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Prenom</label>
            <input class="full-width has-padding has-border" name="Prenom" id="" type="text" placeholder="Prenom" required="">
            <span class="cd-error-message">Erreur message ici!</span>
          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" name="Email" id="signup-email" type="email"  placeholder="E-mail">
            <span class="cd-error-message">Erreur message ici!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-Date_de_naissance" for="signup-Date_de_naissance">Date de naissance</label>
            <input class="full-width has-padding has-border" name="Date_de_naissance" id="signup-Date_de_naissance" type="date" placeholder="Date_de_naissance">
            <span class="cd-error-message">Erreur message ici!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Mot de passe</label>
            <input class="full-width has-padding has-border" name="pwd" id="signup-password" type="password" required=""  placeholder="Password">
            <a href="#0" class="hide-password">Afficher</a>
            <span class="cd-error-message">Erreur message ici!</span>
          </p>


          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Create account" >
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->

      <div id="cd-reset-password"> <!-- reset password form -->
        <p class="cd-form-message">Mot de passe perdu? S'il vous plaît entrer votre adresse e-mail. Vous recevrez un lien pour créer un nouveau mot de passe.</p>

        <form class="cd-form"  >
          <p class="fieldset">
            <label class="image-replace cd-email" for="reset-email">E-mail</label>
            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
            <span class="cd-error-message">Erreur message ici!</span>
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Reset password">
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Retour à connexion</a></p>
      </div> <!-- cd-reset-password -->
      <a href="#0" class="cd-close-form">Fermer</a>


    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-modal -->



<script type="text/javascript">
	


(function($) {



	$(function() {

		
		// Dropdowns.
			$('#nav > ul').dropotron({
				alignment: 'right'
			});

		

	});

})(jQuery);

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->


