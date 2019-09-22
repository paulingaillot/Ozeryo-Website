
<!DOCTYPE html>

<html>

                       <?php
include("header.html");
?>

<head>
    
            <title>Ozeryo - Trophées LeaderBoard</title>

</head>

    

    <body>

        <div id="bloc_page">

                               <?php
include("header.html");
?>

<?php 
$monfichier = fopen('/home/DiscordBot/Rasberry/données/bot/LeaderBoard/trophées.txt', 'r');

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