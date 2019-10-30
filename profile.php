<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Global site tag (gt<p></p>ag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76348349-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-76348349-4');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6251821844352758",
            enable_page_level_ads: true
        });
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre:400,400i" rel="stylesheet">
    <link rel="shortcut icon" type="images/x-icon" href="/images/icon.ico" />
    <title>Ozeryo - Profil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body style=" background: url('/images/fond.jpg') no-repeat center fixed;">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./images/logo.jpg" class="rounded mx-auto" style="width: 10%;"
                alt="Logo Ozeryo"> Ozeryo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="https://ozeryo.xyz">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://ozeryo.xyz/HowToPlay.php">Comment Jouer ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://ozeryo.xyz/WebMap.php">La map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://ozeryo.xyz/Commands.php">Les Commandes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./LeaderBoard.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Classements
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/LeaderBoard.php">General Top</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./LeaderBoard/GameLevel.php">Game leveling</a>
                        <a class="dropdown-item" href="./LeaderBoard/Rep.php">Rep</a>
                        <a class="dropdown-item" href="./LeaderBoard/Cf.php">Cf</a>
                        <a class="dropdown-item" href="./LeaderBoard/TRophées.php">Trophées</a>
                        <a class="dropdown-item" href="./LeaderBoard/Guilds.php">Guilds</a>
                        <a class="dropdown-item" href="./LeaderBoard/Level.php">Social Leveling</a>
                        <a class="dropdown-item" href="./LeaderBoard/Pays.php">Pays</a>
                        <a class="dropdown-item" href="./LeaderBoard/Ap.php">Ap</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://discordapp.com/oauth2/authorize?client_id=399115724926484490&scope=bot&permissions=2146958847">Ajouter le bot</a>
                </li>
            </ul>
        </div>
    </nav>
    <br />

<?php 
    
    $id = null;
    try {
    $id = $_GET['id'];
    } catch (Exception $e) {
    $id = "102108573298851840";
    }

	// Si les données json sont dans un fichier distant:
	$parsed_json = json_decode(file_get_contents('https://ozeryo.xyz/Rasberry/données/bot/profilData.json'));
    $parsed_json2 = json_decode(file_get_contents('https://ozeryo.xyz/Rasberry/données/bot/levelData.json'));

$date_jour = $parsed_json->{'profils'}->{$id}->{'id'};
$name = $parsed_json->{'profils'}->{$id}->{'name'};
$avatar = $parsed_json->{'profils'}->{$id}->{'IconURL'};
$IDH = $parsed_json->{'profils'}->{$id}->{'idh'};
$top_IDH = 	$parsed_json->{'profils'}->{$id}->{'topIdh'};
$xp = $parsed_json->{'profils'}->{$id}->{'xp'};
$top_xp = $parsed_json->{'profils'}->{$id}->{'topXp'};
$cf =$parsed_json->{'profils'}->{$id}->{'cf'};
$top_cf = $parsed_json->{'profils'}->{$id}->{'topCf'};
$rep = $parsed_json->{'profils'}->{$id}->{'rep'};
$top_rep = $parsed_json->{'profils'}->{$id}->{'toprRep'};
$trophy = $parsed_json->{'profils'}->{$id}->{'trophy'};
$top_trophy = $parsed_json->{'profils'}->{$id}->{'topTrophy'};
$ap = $parsed_json->{'profils'}->{$id}->{'ap'};
$top_ap = $parsed_json->{'profils'}->{$id}->{'topAp'};
$EXP = $parsed_json2->{'levelProfil'}->{$id}->{'xp'};

$inscription = $parsed_json->{'profils'}->{$id}->{'inscription'};

$temps_de_jeu = $parsed_json->{'profils'}->{$id}->{'temps_de_jeu'};

$commands = $parsed_json->{'profils'}->{$id}->{'commands'};

$lastCommand = $parsed_json->{'profils'}->{$id}->{'lastCommand'};



$level= 1;
$EXP_test= 100;
$EXP_Test2 = 0;
if($EXP>=100) {
        for($EXP_test = 100;$EXP_test<=$EXP; $EXP_test= $EXP_Test2+($level+1)*50 ) {
            
            $level++;
            $EXP_Test2 =$EXP_test;
            
        }
        $level--;
        }else {
            $level = 0;
        }

$top_level =$parsed_json2->{'levelProfil'}->{$id}->{'toplevel'};


echo "<div class='container-fluid'>
<div class='row'>
<div class='offset-md-4'></div>
<div class='col-md-4'>

<div class='card'>
  <div class='card-body'>
  <img  src='";
  echo $avatar;
  echo "', alt='avatar user' width='100px', height='100px' />   Statistique de ";
  echo $name;
  echo "</div>
</div>

</div>
</div>
<br />
<div class='row'>
<div class='offset-md-1'></div>
<div class='col-md-7'>

Inscription : ";
    echo  date('d F Y H\Hi',($inscription/1000));
    echo " <br />
    Temps de jeu : ";
    echo ($temps_de_jeu/1000)/60;
    echo  "<br /> Commande tapées : ";
    echo $commands;
    echo "<br /> Dernière commande :";
    echo date('d F Y H\Hi',($lastCommand/1000));
    echo " <br />


</div>

<div class='col-md-3'>

<div class='card'>
  <div class='card-body'>
<h3>Tops</h3>
Top IDH : ";
echo $IDH;
echo" <span class='badge badge-warning'>#";
echo $top_IDH;
echo "</span> <br /> Top Xp : ";
echo $xp;
echo " <span class='badge badge-warning'>#";
echo $top_xp;
echo "</span> <br /> Top Cf : ";
echo $cf;
echo " <span class='badge badge-warning'>#";
echo $top_cf;
echo "</span> <br /> Top Rep : ";
echo $rep;
echo  "<span class='badge badge-warning'>#";
echo $top_rep;
echo "</span> <br /> Top Trophy : ";
echo $trophy;
echo " <span class='badge badge-warning'>#";
echo $top_trophy;
echo "</span> <br /> Top Ap : ";
echo $ap;
echo " <span class='badge badge-warning'>#";
echo $top_ap;
echo "</span> <br /> Top Level : ";
echo $level;
echo " <span class='badge badge-warning'>#";
echo $top_level;
echo "</span> </div>
</div>

</div>
</div>
<br />
<div class='row'>
<div class='offset-md-4'></div>
<div class='col-md-4'>

<div class='card'>
  <div class='card-body'>
<center>Voting page 1 | Voting page 2 | Voting page 3</center>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
";


  
    ?>
    <hr>
    <div class="card bg-secondary mb-3">
        <div class="card-body">
            <p class="card-text">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <h3> Reseaux Sociaux</h3>
                            <br>
                            <img src="./images/discord.png" class="img-fluid" alt="Responsive image" style="width: 5%;">
                            <img src="./images/facebook.png" class="img-fluid" alt="Responsive image"
                                style="width: 5%;">
                            <img src="./images/twitter.png" class="img-fluid" alt="Responsive image" style="width: 5%;">
                        </div>
                        <div class="col-md-4">
                            <h3>L'équipe</h3>
                            <br>
                            <p>Ybsi#3180 - Développeur <br> </p>
                            <p>Evan - Modérateur <br> </p>
                            <p>Delyos - Modérateur </p>
                        </div>
                        <div class="col-md-4">
                            <h3>News</h3>
                            <br>
                            <p>Mises a jours du site en cours, de nouvelles fonctionalités et un nouveau design seront
                                mis en
                                ligne dans les prochains jours</p>
                        </div>
                    </div>
                </div>
                <br>
            </p>
        </div>
    </div>
    </div>
    </div>
    </div>
    <br>
</body>

</html>