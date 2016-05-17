<?php
		require_once ('inc/autoload.php');
		require_once ('template/_header.php');
	
	?>
	</br></br></br></br></br>
<style type="text/css">
.clear{clear:both;}	
.search{
	float: right;
	width: 40%;
	margin-top: 35px;
	border: solid 2px #F1F0F6; 
	border-radius: 6px;
}
.search input[type="text"]{
	width: 83.5%;
	padding: 10px;
	float: left;
	border: 1px solid rgba(85, 85, 85, 0.15);
	border:none;
	outline:none;
	font-family: 'gandhi_sansregular';
	color: #888;
}
.search input[type="submit"]{
	background: url(assets/images/search-icon.png) no-repeat 46% 46% #0b9ff3;#000;
	padding: 10px;
	width: 50px;
	margin-left: 24.5px;
	cursor: pointer;
	border: none;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	color: #FFF;
	outline: none;
	font-family: 'gandhi_sansregular';
	text-transform: uppercase;
}
.search input[type="submit"]:hover{
	color:#888;
}
</style>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Courses</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			
				
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<h2  style="float: left;">Cours En Ligne</h2>
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

</br>
			 <section class="news-box top-margin">
        <div class="container"> 
            <div class="row">	
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news2.png" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>ANDROID</strong></p>
                                            <p>prononcé androïde, est un système d'exploitation mobile basé sur le noyau Linux et développé actuellement par Google. Le système a d'abord...</p>
                                        </div>
                                        <div>
                                            <a href="ANDROID.php" class="btn-inline">Plus..</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news3.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>HTML/CSS</strong></p>
                                            <p>Le langage comprend également une couche application avec de nombreuses API, ainsi qu'un algorithme afin de pouvoir traiter les documents....</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">Plus..</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news4.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>java</strong></p>
                                            <p>Le langage Java est un langage de programmation informatique orienté objet créé par James Gosling et Patrick Naughton, employés de Sun Microsystems....</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">Plus..</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
      <section class="news-box top-margin">
        <div class="container"> 
            <div class="row">
       <div>
							<h3>Autre cours</h3>
							
						</div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news6.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Mathématique</strong></p>
                                            <p>Les mathématiques sont un ensemble de connaissances abstraites résultant de raisonnements logiques appliqués à des objets divers tels que les nombres...</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">Plus..</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news7.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Physique</strong></p>
                                            <p>La physique est la science qui tente de comprendre, de modéliser, voire d'expliquer les phénomènes naturels de l'univers. Elle correspond ...</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">Plus..</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news8.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Anglais</strong></p>
                                            <p>L'anglais est une langue indo-européenne germanique originaire d'Angleterre qui tire ses racines de langues du nord de l'Europe et dont le vocabulaire....</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">Plus..</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


		</section>
	</div>
	


	<?php
		require_once ('template/_footer.php');
	
	?>