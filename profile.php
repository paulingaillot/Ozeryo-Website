
<!DOCTYPE html>

<html>
                       <?php
include("head.html");
?>

<head>
    
            <title>Ozeryo - Testing page</title>

</head>

    

    <body>

        <div id="bloc_page">

                                <?php
include("header.html");
?>

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


    echo "<section>
    <article>
    </article>
    <aside id='stats_barre'>
    <p><center><img src='";
    echo $avatar;
    echo "', alt='avatar user' width='100px', height='100px' />   Statistique de ";
    echo $name;
    echo "<center></p>
    </aside>
    
    </section>
    <section>
    <article>
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
    </article>
    <aside id='top'>
    <h1>Tops</h1>
    Top IDH : ";
    echo $IDH;
    echo" [#";
    echo $top_IDH;
    echo "] <br /> Top Xp : ";
    echo $xp;
    echo " [#";
    echo $top_xp;
    echo "] <br /> Top Cf : ";
    echo $cf;
    echo " [#";
    echo $top_cf;
    echo "] <br /> Top Rep : ";
    echo $rep;
    echo  "[#";
    echo $top_rep;
    echo "] <br /> Top Trophy : ";
    echo $trophy;
    echo " [#";
    echo $top_trophy;
    echo "] <br /> Top Ap : ";
    echo $ap;
    echo " [#";
    echo $top_ap;
    echo "] <br /> Top Level : ";
    echo $level;
    echo " [#";
    echo $top_level;
    echo "] <br /> </aside> </section><section>  <aside id='voting_page'>   <center>Voting page 1 | Voting page 2 | Voting page 3</center> </aside></section>";
    ?>
</div>
    <


                       <?php
include("footer.html");
?>

	</body>
</html>