<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Projet Pumir</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href='font-icons/css/font-awesome.min.css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="wrapper" class="wrapper">
		    <header class="header">
		    	<div id="connexion" class="log"><a href="#">CONNEXION</a></div>
				<div id="inscription" class="log"><a href="#">INSCRIPTION</a></div>
				<div class="inscription">
					<button>X</button>
					<h2>Inscription</h2>
					<form id="entry-form" inscraction="#" >
						<input id="prenom-form" class="inscription-form" type="text" placeholder="Prénom">
						<input id="email-form" class="inscription-form" type="email" placeholder="Email">
						<input id="password-form" class="inscription-form" type="password" placeholder="Mot de Passe">
						<input id="submit-form" class="inscription-form" type="submit" value="Valider">
						<input id="submit-facebook" class="inscription-form" type="submit" value="S'inscrire avec Facebook">
					</form>

					<ul class="link-form">
						<li><a href="#" style="color:#000;">Déjà un compte ?</a></li>
						<li><a href="#" style="color:#b8E986;">SE CONNECTER</a></li>
					</ul>
				</div>
			<div id="search" class="log">
				<form action="" class="search">
					<input id="submit" value="" type="submit">
					<label for="submit" class="submit"></label>
					<a href="javascript: void(0)" class="icon"></a>
					<input type="search" name="Search" id="search" placeholder="Search">
				</form>
			</div>
			<div id="menu" class="menu-icon">
				<span>
					
  				</span>
  			</div>
		    </header>

		    <div class="container">
		        
				<div id="slogan"><h1 id="title-slider">Une envie, une idée, trouvez votre inspiration !</h1></div>
				<div id="scroll-icon"><a href="#content"><i class="fa fa-angle-down fa-3x"></a></i></div>

				
		    </div>
		    <main>
		    	<div id="content">
			    	<div id="content-showroom">
				
						<div id="showroom-1" class="showroom">
							<ul>
								<li><!-- <img src="img/salons.jpg" style="height: 400px;
			    				width: 460px;"></a> --></li>
								<li><!-- <img src="img/salons.jpg" style="height: 400px;
			   					width: 400px; border-radius: 1000px "></a> --></li>
							</ul>
						</div>

						<div id="showroom-2"0clas s="showroom">
							<ul>
								<li><!-- <img src="img/salons.jpg" style="height: 300px; width: 300px;"></a> --></li>
								<li><!-- <img src="img/salons.jpg" style="height: 300px; width: 300px;"></a> --></li>
								<li><!-- <img src="img/salons.jpg" style="height: 300px; width: 300px;"></a> --></li>
							</ul>
						</div>

						<div id="showroom-3" class="showroom">
							<ul>
								<li style="width:619px;"><!-- <img src="img/salons.jpg" style="height: 400px; width: 620px;"></a> --></li>
								<li><!-- <img src="img/salons.jpg" style="height: 400px; width: 300px;"></a> --></li>
							</ul>
						</div>
						
						<i id="btn-up"class="fa fa-long-arrow-up fa-2x"></i>

					</div>
	  			</div>
		    </main>
    
  		</div><!-- /wrapper -->
  		  			

		<button id="mm-menu-toggle" class="mm-menu-toggle">Menu</button>
		<nav id="mm-menu" class="mm-menu">
		    <div class="mm-menu__header">
		      <h2 class="mm-menu__title">-----</h2>
		    </div>
		    <ul class="mm-menu__items">
		      <li class="mm-menu__item">
		        <a class="mm-menu__link" href="#">
		          <span class="mm-menu__link-text"><i class="md md-home"></i> Créations</span>
		        </a>
		      </li>
		      <li class="mm-menu__item">
		        <a class="mm-menu__link" href="#">
		          <span class="mm-menu__link-text"><i class="md md-person"></i> Designers/Artisans</span>
		        </a>
		      </li>
		      <li class="mm-menu__item">
		        <a class="mm-menu__link" href="#">
		          <span class="mm-menu__link-text"><i class="md md-inbox"></i> Évènements</span>
		        </a>
		      </li>
		      <li class="mm-menu__item">
		        <a class="mm-menu__link" href="#">
		          <span class="mm-menu__link-text"><i class="md md-favorite"></i> Carnet d'adresses</span>
		        </a>
		      </li>
		      <li class="mm-menu__item">
		        <a class="mm-menu__link" href="#">
		          <span class="mm-menu__link-text"><i class="md md-settings"></i> FAQ </span>
		        </a>
		      </li>
		      <li class="mm-menu__item">
		        <a class="mm-menu__link" href="#">
		          <span class="mm-menu__link-text"><i class="md md-settings"></i> Contact </span>
		        </a>
		      </li>
		    </ul>
		  </nav><!-- /nav -->
  
		<!-- PRODUCTION -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/search.js"></script>
		<script type="text/javascript" src="js/scroll.js"></script>
		<script type="text/javascript" src="js/scroll-page.js"></script>
		<script type="text/javascript" src="js/inscription-form.js"></script>
		<script type="text/javascript" src="js/fb-connect.js"></script>
		<script src="js/production/materialMenu.min.js"></script>
		<script>
		var menu = new Menu;
		</script>

		<script>

			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	
	</body>
</html>























