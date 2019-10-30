
<!DOCTYPE html>

<html>

                       <?php
include("head.html");
?>

<head>
    
            <title>Ozeryo - GameLevel LeaderBoard</title>

</head>
    

    <body>

                               <?php
include("header.html");
?>


<div class="container-fluid">
    <div class="row">
      <div class="offset-md-5"></div>
      <div class="col-md-2">
        <div class="card text-white bg-secondary mb-3 text-center" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">GameLevel Leaderboard</h5>
  </div>
</div>
</div>
</div>
<br>
<div class="row">
<div class="offset-md-4"></div>
<div class="col-md-4">

        <?php 
$monfichier = fopen('/home/DiscordBot/Rasberry/données/bot/LeaderBoard/gamelevel.txt', 'r');

$i = 0;
$max =  fgets($monfichier);
while($i<$max){
$i= $i +1;
try {
$message = fgets($monfichier);
echo "<p>";
echo $message."\n";
echo "</p>";
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
}
fclose($monfichier);
 ?>
 </div>
</div>

                             <?php
include("footer.html");
?>

    </body>
</html>