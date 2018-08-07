
<!DOCTYPE html>

<html>

    <head>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76348349-4"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-76348349-4');
		</script>
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6251821844352758",
		enable_page_level_ads: true
		});
</script>

	
	
        <meta charset="utf-8" />

        <link rel="stylesheet" href="style.css" />

        <title>Ozeryo - Accueil</title>
		<link rel="shortcut icon" type="images/x-icon" href="/images/icon.ico" />
    </head>

    

    <body>

        <div id="bloc_page">

            <header>

                <div id="titre_principal">

                    <div id="logo">

                        <img src="/images/logo.jpg" alt="Logo de Ozeryo" />

                        <h1>Ozeryo</h1>    

                    </div>

                </div>

                

                <nav>

                    <ul>

                        <li><a href="">Accueil</a></li>

                        <li><a href="serveur">Le Serveur</a></li>

                        <li><a href="bot">Le Bot</a></li>

                        <li><a href="contact">Me contacter</a></li>

                    </ul>

                </nav>

            </header>

            <div id=separateur style="text-align:center"> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div>

            <div id="banniere_image">

                <div id="banniere_description">

                    BETA du serveur : Ozeryo.ddns.net

                    <a href="#" class="bouton_rouge">plus d'informations <img src="images/bannières.png" alt="bannière serveur" /></a>

                </div>

            </div>

            

            <section>

                <article>

                    <strong><h1>A propos de nous</h1></Strong>

                    <p>Ozeryo est a l'origine une guilde gaming fondé le 1er Septembre 2015. Nous sommes a la base une bande de potes jouant a minecraft. <br />
					Depuis nous nous sommes ouvert sur de nombreux nouveaux jeux comme Fortnite, League Of Legend ou encore Overwatch. <br />
					Aujourd'hui nous avons decidez de creer un bot discord et un serveur de divertissement ou nous organisons des concours de build <br /><br />
					Si vous voulez vous aussi rejoindre le serveur ou jouez avec nous alors n'esitez pas et <a href='serveur'>[cliquez ici]</a> pour plus de renseignements<br /><br />
					 De plus si vous voulez vous renseignez a propos de notre bot alors <a href='bot'>[cliquez ici]</a> pour plus de renseignements<br /><br />
						--> 		❓❓ D'autres questions ???❓❓ <br />
					Posez les sur <a href="https://discord.gg/5J6V88k">notre discord</a>, nous sommes la pour y repondre !!! 😉😉</p>

                </article>

                <aside>

                    <h1>Notre serveur Discord</h1>
					
					<iframe src="https://discordapp.com/widget?id=326345972739473410&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>

                </aside>

				
            </section>
			<section>
			<article>
                    <Strong><h1>Dernières  nouvautés</h1></Strong>

                    <p>Le serveur Ozeryo ouvre sa beta au grand public !!! <br /> Pour y participer il vous suffit de rejoinre notre <a href=https://discord.gg/CyYCD9>serveur discord</a><br /> Ensuite rejoignez le serveur a l'ip : Ozeryo.ddns.net en 1.12.2 !!!<br /></p>
					<?php
			$file    = fopen( '../../../home/DiscordBot/données/Users/102108573298851840/EXP.txt', 'r+' );
			$content = "";
			while(!feof($fp)) {
			$content .= fgets($file);
			}
			fclose($file);
			echo $content
			?>
                </article>
				</section>

            <div id=separateur style="padding-top:25px; text-align:center"> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div>

            <footer>

                <div id="reseaux sociaux">

                    <h3>Reseaux Sociaux</h3>
					
				 <p><img src="/images/facebook.png" alt="Facebook" height="30" width="30" /><img src="/images/twitter.png" alt="Twitter" height="30" width="30" /><a href="https://discord.gg/5J6V88k"><img src="images/discord.png" alt="discord" height="30" width="30" /></a></p>

                </div>

				<div id="separateur 1"><img src="/images/separateurV.png" alt="separateur" height="90" width="10"/></div>
				
				 <div id="Les moderateurs">

                    <h3>moderateurs</h3>

                    <div id="moderateurs">

                        <ul>

                            <li>Ybsicraft - Le dictateur !</li>
							<li> MissGeek15 - La futur Graphiste</li>

                        </ul>

                    </div>

                </div>
				<div id="separateur 1"><img src="/images/separateurV.png" alt="separateur" height="90" width="10"/></div>
                <div id="Le serveur">

                    <h3>Le serveur</h3>

                    <div id="ip"> <strong>minecraft 1.12.2 : Ozeryo.ddns.net</strong></p>

                </div>

            </footer>

        </div>

    </body>

</html>

