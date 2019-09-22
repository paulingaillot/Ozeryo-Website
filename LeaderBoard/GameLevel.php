
<!DOCTYPE html>

<html>

                       <?php
include("head.html");
?>

<head>
    
            <title>Ozeryo - GameLevel LeaderBoard</title>

</head>
    

    <body>

        <div id="bloc_page">

                               <?php
include("header.html");
?>


		</div>
                        <nav>

                    <ul>

                        <li><a href="/LeaderBoard/GameLevel.php" ><div class="leaderboard">Classement level (jeu)</div></a></li>

                        <li><a href="/LeaderBoard/Rep.php"><div class="leaderboard">Classement Rep</div></a></li>

                        <li><a href="/LeaderBoard/Cf.php"><div class="leaderboard">Classement Cf</div></a></li>

                        <li><a href="/LeaderBoard/Trophées.php"><div class="leaderboard">Classement trophées</div></a></li>

                        <li><a href="/LeaderBoard/Guild.php"><div class="leaderboard">Classement Guild</div></a></li>

                        <li><a href="/LeaderBoard/Level.php"><div class="leaderboard">Classement Level (Chat)</div></a></li>

                        <li><a href="/LeaderBoard/Pays.php"><div class="leaderboard">Classement Pays</div></a></li>


                        <li><a href="/LeaderBoard/Ap.php"><div class="leaderboard">Classement AP</div></a></li>
                    </ul>

                </nav>

        <?php 
$monfichier = fopen('/home/DiscordBot/Rasberry/données/bot/LeaderBoard/gamelevel.txt', 'r');

$i = 0;
$max =  fgets($monfichier);
while($i<$max){
$i= $i +1;
try {
$message = fgets($monfichier);
    echo "<center>";
    echo $message."\n";
    echo "<br />";
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
}
fclose($monfichier);
 ?>

                             <?php
include("footer.html");
?>

        </div>
    </body>
</html>