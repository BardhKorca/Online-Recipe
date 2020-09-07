<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>GoodFoods</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans%7COswald:300,400,500,700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="dist/css/reset.css">
	<link rel="stylesheet" href="dist/css/app.css">
</head>

<body>
	<!-- BEGIN HEADER -->
	<header id="header" class="main_header">
		<div class="container">
			<div class="headerWrap">
				<div class="header_logo">
					<a href="index.html">
						<img src="dist/images/Logo.jpg" alt="Online Recipe Logo">
					</a>
				</div>
				<nav class="nav_wrapper">
					<ul>
					    <li><a href="logIn.php">Sign In</a></li>
						<li class="is--active"><a href="index.html">Home</a></li>
						<li><a href="#Recipes">Recipes</a></li>
						<li><a href="contact.php">contact us</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="videos.php">Videos</a></li>
					</ul>
				</nav>
				<div class="hamburger show-mob">
					<span> </span>
					<span></span>
					<span></span>
				</div>
				<a href="tel:+383-49-374-262" class="call_button"><span>+383-49-374-262</span></a>
			</div>
		</div>
	</header>
	<!-- END HEADER -->
	<!-- BEGIN MAIN -->
	<main id="main" class="main_content">
		<div class="mainWrap">
			<section class="block_section">
				<ul class="slider block_section">
					<li class="slider_item" style="background-image: url(dist/images/slide1.jpg)">
						<div class="container">
							<div class="slider_item__content">
								<span class="label_bg">landing page template</span>
								<h3>Welcome to our Blog</h3>
								<h4>best choice for your recipes</h4>
							</div>
						</div>
					</li>
					<li class="slider_item" style="background-image: url(dist/images/slide2.jpg)">
						<div class="container">
							<div class="slider_item__contentf">
								<span class="label_bg">landing page template</span>
								<h3>Welcome to our Blog</h3>
								<h4>best choice for your recipes</h4>
							</div>
						</div>
					</li>
					<li class="slider_item" style="background-image: url(dist/images/slide3.jpg)">
						<div class="container">
							<div class="slider_item__content">
								<span class="label_bg">landing page template</span>
								<h3>Welcome to our Blog</h3>
								<h4>best choice for your recipes</h4>
							</div>
						</div>
					</li>
				</ul>
				<div class="slider_nav">
					<div class="container">
						<button class="prev" id="prev"></button>
						<button class="next" id="next"></button>
					</div>
				</div>
			</section>
			<section class="block_section trainers_section">
				<div class="container">
					<div class="main_title">
						<span id="Recipes">
							<h4>Recipes</h4>
						</span>
					</div>
					<div class="trainers_wrapper block_section">
						<div class="row">
							<div class="column-3 column-mob-12">
								<div class="box">
									<div class="box__thumb">
										<img src="dist/images/shalqiri.jpg" alt="Shalqiri">
									</div>
									<div class="box__content">
										<h4>Lëng shalqiri i freskët</h4>
										<span>Receta</span>
										<p>Për të përgaditur lëng shalqiri, zgjedhim bostanin e ëmbël dhe të pjekur.
											Presim shalqirin në copa të vogla dhe e hedhim në grirës elektrik.E lëm një
											fetë për ta vendosur sipër për dekor. Shtrydhim gjysmën e limonit dhe e
											shtojmë në griërs. Pasi të jetë bërë në formë pureje, e hedhim në një sitë
											që të eleminojmë farat dhe e hedhim nëpër gota.Gotav me lëng shalqiri i
											shtojmë akullin e grirë. I përziejm dhei vendosim sipër dy feta të vogla
											shalqiri. </p>
									</div>
								</div>
							</div>
							<div class="column-3 column-mob-12">
								<div class="box">
									<div class="box__thumb">
										<img src="dist/images/makarona.jpg" alt="Makarona Me mish">
									</div>
									<div class="box__content">
										<h4>Makarona me mish</h4>
										<span>Receta</span>
										<p>Në një tenxhere me 3 lugë vaj ulliri kaurdisim mishin e qingjit të spërkatur
											me kripë. E kaurdisim nga të gjitha anët dhe më pas e shuajmë me verë të
											bardhë.Sapo alkooli i verës të avullojë shtojmë një qepë të grirë imët,
											karrotën të prerë në kubikë të vegjël dhe domaten të grirë në rende.I
											trazojmë mirë përbërësit i rregullojmë me pak sheqer, kripë dhe piper dhe më
											pas shtojmë buljon me koncentrat pule. Ulim temperaturën e sobës dhe e lemë
											gatimin të ziejë për rreth 40 minuta në temperaturë të ulët.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/ujisass.png" alt="Uji Sass">
								</div>
								<div class="box__content">
									<h4>Uji Sass</h4>
									<span>receta</span>
									<p><b>Përbërësit:</b> litra ujë, 1 lugë çaji xhenxhefil të grirë, 1 kastravec, i
										qëruar dhe prerë hollë, 1 limon, i prerë hollë, gjethe mente.
										<br><b>Përgaditja:</b> Përzieni të gjithë përbërësit në një brokë të madhe dhe i
										lini përbërësit të treten gjatë gjithë natës. Konsumojeni të gjithë ujin në
										broke gjatë gjithë ditës së nesërme. Të njëjtën gjë bëni çdo ditë.
										</br></p>

								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/byrek.png" alt="Byrek me Spinaq">
								</div>
								<div class="box__content">
									<h4>Byrek me spniaq</h4>
									<span>Receta</span>
									<p><b>Përbërësit:</b> 400gr gjizë pa yndyrë, 500gr spinaq, dy patate të ziera, kripë
										dhe piper.<br><b>Përgaditja:</b> Zieni spinaqin në pak ujë, shtrydheni dhe
										grijeni. Bashkojeni me patatet e ziera dhe gjizën, duke i hedhur piper dhe pak
										kripë. Përzierjen e përftuar vendoseni në një tavë të mbuluar me letër furre dhe
										futeni të piqet për rreth 40-45 minuta në furrë me 200 gradë.</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/qofte.jpg" alt="Qofte">
								</div>
								<div class="box__content">
									<h4>Qofte</h4>
									<span>Receta</span>
									<p><b>Përbërësit:</b> 60 gr thërrime buke,60 ml qumësht,400 gr mish i girë viçi,1
										vezë,30 gr djathë kaçkavall,Pak arrëmyshk,1 lugë gjelle majdanoz,1 lugë gjelle
										nenexhik,Vaj,Kripë,Piperi zi.<br><b>Përgaditja:</b> Shtoni thërrimet e bukës në
										një tas mesatar sëbashku me qumështin dhe lërini për 10 minuta, derisa buka të
										përthithë gjithë qumështin. Më pas shtoni në të mishin e viçit. Hidhni vezën,
										djathin e grirë, arrëmyshkun, majdanozin dhe nenexhikun e copëtuar. Spërkatini
										me pak kripë dhe piper të zi dhe përziejini mirë të gjithë përbërësit që të
										përftoni një masë homogjene. Më pas merrni nga masa e përgatitur dhe formoni
										qoftet në formën që dëshironi. Vendosni një tigan me vaj dhe renditni qoftet në
										të. Skuqini për disa minuta nga të dyja anët dhe renditini në një pjatë për
										servirje.</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/kek.jpg" alt="Kek pa miell dhe sheqer">
								</div>
								<div class="box__content">
									<h4>Kek pa miell dhe sheqer</h4>
									<span>Receta</span>
									<p><b>Përbërësit:</b> 4 vezë, 2 portokall, 200 gram arra, gjysëm lugë çaji sodë
										buke, 100 gram çokollatë gatimi ,200 ml ajkë qumështi<br><b>Përgaditja:</b> Së
										pari, qërojini, grijini dhe hidhini portokajt në një enë të vogël. Ziejini për
										gjysmë ore derisa të zbuten. Shtojini në blender së bashku me vezët, arrat dhe
										sodën e bukës .Hidheni përzierjen në një formë keku dhe vendoseni në furrë.
										Piqeni në temperaturën 200 gradë Celcius për 20 minuta. Ndërkohë, shkrijeni
										çokollatën dhe ajkën e qumështit për disa minuta. Nxirreni kekun nga furra dhe
										hidheni përzierjen me çokollatë mbi të.</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/shkrirje.jpg" alt="Shkrirës të kilogramëve">
								</div>
								<div class="box__content">
									<h4>Shkrirës të kilogramëve</h4>
									<span>Receta</span>
									<p><b>Përbërësit:</b>

										një filxhan i vogël lëng domateje,
										¼ e filxhanit lëng limoni,
										një lugë xhenxhefil të grirë në rende,
										një spec djegës,
										dy degëza selinoje (të madhësisë mesatare).

										<br><b>Përgaditja:</b>

										Përzijeni lëngun e domates, lëngun e limonit, xhenxhefilin dhe specin djegës. Do
										të përftoni 220 ml lëng
										Shërbejeni në gota qelqi dhe shtoni degëzat e selinos të cilat i hani nga pak
										duke pirë pijen. Midis racioneve pini tri gota të kësaj pijeje. Nëse bëni më
										shumë, pijen ruajeni në frigorifer
										</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/rizoto.png" alt="Rizoto">
								</div>
								<div class="box__content">
									<h4>Rizoto</h4>
									<span>Receta</span>
									<p><b>Përbërësit:</b>

										200 gramë kërpudha,

										100 gramë oriz,

										1 karotë e madhe,

										2 tufa qepë të reja,

										fletë majdanozi,

										vaj,

										kripë,

										piper.

										</br><b>Përgaditja:</b>

										Në vaj fërgoni qepën e grirë pastaj shtoni karotën e grirë.

										Kur të fërgohet, shtoni shampinjonët e grirë dhe orizin të cilin më parë e keni
										larë, pastaj qitni pak ujë dhe zieni në zjarr të ngadalshëm.

										Kur orizi të fryhet pak, shtoni kripën dhe piperin, pastaj qiteni në gjyveç dhe
										shtoni fletët e grira të majdanozit.

										Shtoni edhe pak ujë dhe futeni në furrë që të piqet në 200 gradë Celsius rreth
										30 minuta.</br></p>
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</section>
			
		</div>
	</main>
	<!-- END MAIN -->

	<!-- BEGIN FOOTER -->
	<footer>

		<div class="row">
			<div class="column">Copyright©2020. All Rights Reserved</div>

			<!-- END FOOTER -->

</body>
<!-- SCRIPTS -->
<script src="dist/js/jquery-1.12.4.js" type="text/javascript"></script>
<script src="dist/js/app.js" type="text/javascript"></script>

</html>