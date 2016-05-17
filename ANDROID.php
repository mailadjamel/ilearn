
<?php
	require_once ('inc/autoload.php');
	require_once ('template/_header.php');
	
	

?>
	</br></br></br></br>
<!DOCTYPE HTML>
	<head>
		<title>ANDROID</title>
		<link href="assets/css/style3.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="assets/css/style.css" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="courses.php"><img src="assets/images/logo1.png" title="logo" /></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<div class="top-menu">
					<div class="top-nav">
						<ul>
							
						</ul>
					</div>
					<div class="search">
						<form>
							<input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<!---End-top-menu-search---->
			</div>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->



		<div class="main-content">
			<div class="wrap">
			<div class="left-sidebar">
				<div class="sidebar-boxs">
					<div class="clear"> </div>
					<div class="type-videos">
						<h3>liste des videos</h3>
						<ul>
							<li><a href="#" id="tut0" onclick="runVideo(0);">Introduction</a></li>
							<li><a href="#" id="tut1" onclick="runVideo(1);">Android1</a></li>
							<li><a href="#" id="tut2" onclick="runVideo(2);">Android2</a></li>
							<li><a href="#" id="tut3" onclick="runVideo(3);">Android3</a></li>
							<li><a href="#" id="tut4" onclick="runVideo(4);">Android4</a></li>
							<li><a href="Cours Android.pdf" id="tut4" onclick="">PDF</a></li>


						</ul>
					</div>
				</div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>ANDROID</h3>
					</div>
					<div class="right-content-heading-right">
						<div class="social-icons">
			                <ul>
			                    <li><a class="facebook" href="#" target="_blank"> </a></li>
			                    <li><a class="twitter" href="#" target="_blank"></a></li>
			                    <li><a class="googleplus" href="#" target="_blank"></a></li>
			                    <li><a class="pinterest" href="#" target="_blank"></a></li>
			                    <li><a class="dribbble" href="#" target="_blank"></a></li>
			                    <li><a class="vimeo" href="#" target="_blank"></a></li>
			                </ul>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="inner-page">
				<div class="title">
					<h3>prononcé androïde, est un système d'exploitation mobile basé sur le noyau Linux et développé actuellement par Google. Le système a d'abord été conçu pour les smartphones et tablettes tactiles.</h3>
					<ul>
						<li><h4>By:</h4></li>
						<li><a href="#">Maila</a></li>
						<li><a href="#"><img src="assets/images/sub.png" title="subscribe">abonner</a></li>
					</ul>
				</div>

				

				<div>
				<video id="tutorials"  onended="run()" autobuffer="true"  width="100%" height="500px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen controls>
				<source id="v1" src="Learn1.mp4" type="video/mp4" ></source>
				</video>
				
				</div>
				
					

				
				


				<div class="clear"> </div>
				<div class="video-details">
					<ul>
						<li><p>Téléchargée le <a href="#">mai 16, 2016</a> by <a href="#">Maila</a></p></li>
						<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<div class="tags">
					<ul>
						<li><h3>Tags:</h3></li>
						<li><a href="#">ANDROID</a> ,</li>
						<li><a href="#">HD-Videos</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<div class="share-artical">
		  				<h3> Aussi partager sur</h3>
		  					<ul>
		  						<li><a href="#"><img src="assets/images/facebook.png" title="facebook">Facebook</a></li>
		  						<li><a href="#"><img src="assets/images/twiter.png" title="Twitter">Twiiter</a></li>
		  						<li><a href="#"><img src="assets/images/in.png" title="linked-in">Linked-in</a></li>
		  						<li><a href="#"><img src="assets/images/google+.png" title="google+">Google+</a></li>
		  						<li><a href="#"><img src="assets/images/pintrest.png" title="pintrest">Pintrest</a></li>
		  						<li><a href="#"><img src="assets/images/rss.png" title="rss">Rss</a></li>
		  					</ul>
		  		</div>
		  		<div class="artical-commentbox">
		  						 	<h3>laissez un commentaire</h3>
		  						 	<div class="table-form">
									<form>
										<input type="text" class="textbox" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
										<input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
										<input type="text" class="textbox" value="Phone:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
										<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>	
									</form>
									<a href="#">Envoyer un commentaire</a>
								</div>
		  						 </div>
			</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
		<!---start-copy-right---->
		<div class="copy-right">
			
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>

<script type="text/javascript">

  video_count =0;
  videoPlayer = document.getElementById("tutorials");

  function runNext()
  {
    runVideo(video_count+1);
  }

  function runVideo(number)
  {
    if (number > 4) return;
    video_count = number;
    videoPlayer.src = "Learn"+video_count+".mp4";
    videoPlayer.play();
  }

</script>
<?php
		require_once ('template/_footer.php');
	
	?>

	<script src="assets/js/jquery.cslider.js"></script>
  <script src="assets/js/custom.js"></script>