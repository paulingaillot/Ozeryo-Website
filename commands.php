
<!DOCTYPE html>


<!DOCTYPE html>

<html>

        <?php
include("head.html");
?>
    

	<head>
    
            <title>Ozeryo - Commands</title>

</head>

    <body>

        <div id="bloc_page">

                    <?php
include("header.html");
?>


		</div>
		
		<section> 
		<article>
		<p style='text-align:center'> Le bot Discord a été officialisé le 1er mars 2018, il comporte donc toujours un certains nombre de bug et de problèmes non-corrigés ! Afin de faire remonter les bugs nous avons mis en place une commande : =report [commande] [raison] <br /><br /></p>
		<p><br /><br /> Le Prefix par defaut du bot est "<Strong>=</Strong>"</p>
	</article>
	<aside>
		<a href="https://discordbots.org/bot/399115724926484490" style="text-align:center" >
  <img src="https://discordbots.org/api/widget/399115724926484490.svg" alt="OzeryoBot Stats" style="text-align:center" />
	</a>
</aside>
</section>
<hr>
	<article>
		<h1 style="text-align:center" style="font-family:Dayrom; src: url('polices/ballpark.eot');">Les Commandes</h1>
		<h3>Utility</h3>
		<table width="75%">
		<ul> 
		<tr>
		<th><a href="/commands/help.php" style='color: #000000'>=help  </a></th><td> Permet d'afficher la page d'aide du bot</td>
		</tr>
		<tr>
		<th><a href="/commands/report.php" style='color: #000000'>=report [commandes] [raison]</a></th><td> Permet de faire remonter l'existance d'un bug</td>
		</tr>
		<tr>
		<th><a href="/commands/info.php" style='color: #000000'>=info </a></th><td> Permet d'afficher l'etat de service du bot</td>
		</tr>
		<tr>
		<th><a href="/commands/nsfw.php" style='color: #000000'>=nsfw</a></th><td> t'affiche de belle images (FAKE)</td>
		</tr>
		<tr>
		<th><a href="/commands/setchannel.php" style='color: #000000'>=set</a></th><td> Permet de selectionner un channel pour une action precise (welcome, Tmusique(le bot envoi les infos sur la musique a ce channel), Vmusique(le bot rejoint et demarre la musique automatiquement lorsque quelqu'un entre dans ce channel) , AR (AutoResponder))</td>
		</tr>
		<tr>
		<th><a href="/commands/google.php" style='color: #000000'>=google </a></th><td> Fait une recherche google</td></li>
		</tr>
		<tr>
		<th><a href="/commands/hypixel.php" style='color: #000000'>=hypixel [stat] [joueur] </a></th><td> Affiche les stats Hypixel d'un joueur. Stat doit etre : stats, statut, paintball, bedwars, help, CaC, TnT</td>
		</tr>
		<tr>
		<th><a href="/commands/fortnite.php" style='color: #000000'>=fortnite [plateforme] [joueur] </a></th><td> Affiche les stats Forntnite d'un joueur. La plateforme doit etre PC, PS4, XBOX</td>
		</tr>
		<tr>
		<th><a href="/commands/say.php" style='color: #000000'>=say |action]</a></th><td>Le bot repeterra votre phrase</td>
		</tr>
		<tr>
		<th><a href="/commands/serveur.php" style='color: #000000'>=serveur</a></th><td>Permet de rejoindre le serveur officiel <a href='https://discord.gg/5J6V88k'>d'OzeryoBot</a></td>
		</tr>
		<tr>
		<th><a href="/commands/invite.php" style='color: #000000'>=invite</a></th><td>Permet d'inviter le bot sur un de vos serveur</td>
		</tr>
		</ul>
		</table>
		<h3>Musique</h3>
		<table width="75%">
		<ul>
			<tr>
		<th>=play [URL]</th><td>Demmarre une musique,⚠️ doit etre utilisé dans un salon vocal !⚠️</td>
		</tr>
		<tr>
		<th>=Gplaylist [action]</th><td>Demmarre avec 'play' ou ajoute une musique avec 'add' a la playlist de guilde</td>
		</tr>
		<tr>
		<th>=skip</th><td>Permet de passer une musique </td>
		</tr>
		<tr>
		<th>=stop</th><td>Permet d'arreter la musique</td>
		</tr>
		<tr>
		<th>=song</th><td>Permet d'afficher la piste en cours</td>
		</tr>
		<tr>
		<th>=volume</th><td>Permet de regler le volume du bot</td>
		</tr>
		<tr>
		<th>=pause</th><td>Permet de mettre en pause et de redemarrer la piste en cours</td>
		</tr>
		</ul>
	</table>
		<h3>Level</h3>
		<table width="75%">
		<ul>
			<tr>
		<th>=level</th><td>Permet d'afficher votre niveau(niveau de joueur) </td>
		</tr>
		<tr>
		<th>=Glevel</th><td>Permet d'afficher le niveau de votre guilde</td>
		</tr>
		<tr>
		<th>=profile</th><td>Permet d'afficher vos informations de joueurs</td>
		</tr>
		</ul>
	</table>

		<h3>Game (En Developpement)</h3>
		<table width="75%">
		<ul>
		<tr>
		<th>=city</th><td>permet d'affichez votre ville</td>
		</tr>
		<tr>
		<th>=hourly</th><td>Permet d'obtenir le bonus horaire</td>
		</tr>
		<tr>
		<th>=daily</th><td>Permet de reclamer le bonus quotidien</td>
		</tr>
		<tr>
		<th>=build [batiment] [level]</th><td> Permet d'ameliorer un batiment de la ville (centre commercial (cc), entreprise, hopital, caserne)</td>
		</tr>
		<tr>
		<th>=attack [soldats] [cible]</th><td>Permet d'attaquer une ville</td>
		</tr>
		</ul>
		</table>
		</ul>
		 

	</article>
</section>

		
		
                    <?php
include("footer.html");
?>

        </div>
	</body>
</html>