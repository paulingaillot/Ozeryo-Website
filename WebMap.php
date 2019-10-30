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
    <title>Ozeryo - WebMap</title>
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

<div clss="container-fluid">


    <div class= "row">
            <div class="offset-md-1"></div>
        <div class="col-md-2" style="padding:0%; width:20%;">
                                    <div class="media">
                                            <img data-toggle="modal" data-target="#map-10_10" src="/Rasberry/données/bot/WebMap/-10_10.png" alt="map -10_-10" class="mr-3 img-fluid">
                                            <div class="modal fade" id="map-10_10" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="/Rasberry/données/bot/WebMap/-10_10.png" alt="map -10_-10" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                
                                            </div>
                                        </div>
        </div>
        <div class="col-md-2" style="padding:0%; width:20%;">

                                        <div class="media">
                                                <img data-toggle="modal" data-target="#map-5_10" src="/Rasberry/données/bot/WebMap/-5_10.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                <div class="modal fade" id="map-5_10" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img src="/Rasberry/données/bot/WebMap/-5_10.png" alt="map -10_-10" width="100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                </div>
                                            </div>
        </div>
        <div class="col-md-2" style="padding:0%; width:20%;">
                                            <div class="media">
                                                    <img data-toggle="modal" data-target="#map0_10" src="/Rasberry/données/bot/WebMap/0_10.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                    <div class="modal fade" id="map0_10" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="/Rasberry/données/bot/WebMap/0_10.png" alt="map -10_-10" width="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                        
                                                    </div>
                                                </div>
        </div>
        <div class="col-md-2" style="padding:0%; width:20%;">
                                                <div class="media">
                                                        <img data-toggle="modal" data-target="#map5_10" src="/Rasberry/données/bot/WebMap/5_10.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                        <div class="modal fade" id="map5_10" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <img src="/Rasberry/données/bot/WebMap/5_10.png" alt="map -10_-10" width="100%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                            
                                                        </div>
                                                    </div>
        </div>
        <div class="col-md-2" style="padding:0%; width:20%;">
                                                    <div class="media">
                                                            <img data-toggle="modal" data-target="#map10_10" src="/Rasberry/données/bot/WebMap/10_10.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                            <div class="modal fade" id="map10_10" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="/Rasberry/données/bot/WebMap/10_10.png" alt="map -10_-10" width="100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                
                                                            </div>
                                                        </div>
        </div>
    </div>
    <div class= "row">
            <div class="offset-md-1"></div>
        <div class="col-md-2" style="padding:0%; width:20%;">
                                        <div class="media">
                                                <img data-toggle="modal" data-target="#map-10_0" src="/Rasberry/données/bot/WebMap/-10_0.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                <div class="modal fade" id="map-10_0" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img src="/Rasberry/données/bot/WebMap/-10_0.png" alt="map -10_-10" width="100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                </div>
                                            </div>
        </div>
        <div class="col-md-2" style="padding:0%; width:20%;">
                                            <div class="media">
                                                    <img data-toggle="modal" data-target="#map-5_0" src="/Rasberry/données/bot/WebMap/-5_0.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                    <div class="modal fade" id="map-5_0" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="/Rasberry/données/bot/WebMap/-5_0.png" alt="map -10_-10" width="100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                        
                                                    </div>
                                                </div>
        </div>
        <div class="col-md-2" style="padding:0%; width:20%;">

                                                <div class="media">
                                                        <img data-toggle="modal" data-target="#map0_0" src="/Rasberry/données/bot/WebMap/0_0.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                        <div class="modal fade" id="map0_0" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <img src="/Rasberry/données/bot/WebMap/0_0.png" alt="map -10_-10" width="100%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-md-2" style="padding:0%; width:20%;">

                                                    <div class="media">
                                                            <img data-toggle="modal" data-target="#map5_0" src="/Rasberry/données/bot/WebMap/5_0.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                            <div class="modal fade" id="map5_0" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="/Rasberry/données/bot/WebMap/5_0.png" alt="map -10_-10" width="100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2" style="padding:0%; width:20%;">

                                                        <div class="media">
                                                                <img data-toggle="modal" data-target="#map10_0" src="/Rasberry/données/bot/WebMap/10_0.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                                <div class="modal fade" id="map10_0" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <img src="/Rasberry/données/bot/WebMap/10_0.png" alt="map -10_-10" width="100%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                    
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
        <div class= "row">
                <div class="offset-md-1"></div>
            <div class="col-md-2" style="padding:0%; width:20%;">
                        <div class="media">
                                <img data-toggle="modal" data-target="#map-10_-5" src="/Rasberry/données/bot/WebMap/-10_-5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                <div class="modal fade" id="map-10_-5" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="/Rasberry/données/bot/WebMap/-10_-5.png" alt="map -10_-10" width="100%">
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
            </div>
            <div class="col-md-2" style="padding:0%; width:20%;">
                            <div class="media">
                                    <img data-toggle="modal" data-target="#map-5_-5" src="/Rasberry/données/bot/WebMap/-5_-5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                    <div class="modal fade" id="map-5_-5" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="/Rasberry/données/bot/WebMap/-5_-5.png" alt="map -10_-10" width="100%">
                                                </div>
                                            </div>
                                        </div>
                        
                                    </div>
                                </div>
            </div>
            <div class="col-md-2" style="padding:0%; width:20%;">
                                <div class="media">
                                        <img data-toggle="modal" data-target="#map0_-5" src="/Rasberry/données/bot/WebMap/0_-5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                        <div class="modal fade" id="map0_-5" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="/Rasberry/données/bot/WebMap/0_-5.png" alt="map -10_-10" width="100%">
                                                    </div>
                                                </div>
                                            </div>
                            
                                        </div>
                                    </div>
            </div>
            <div class="col-md-2" style="padding:0%; width:20%;">
                                    <div class="media">
                                            <img data-toggle="modal" data-target="#map5_-5" src="/Rasberry/données/bot/WebMap/5_-5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                            <div class="modal fade" id="map5_-5" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="/Rasberry/données/bot/WebMap/5_-5.png" alt="map -10_-10" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                
                                            </div>
                                        </div>
            </div>
            <div class="col-md-2" style="padding:0%; width:20%;">
                                        <div class="media">
                                                <img data-toggle="modal" data-target="#map10_-5" src="/Rasberry/données/bot/WebMap/10_-5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                <div class="modal fade" id="map10_-5" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img src="/Rasberry/données/bot/WebMap/10_-5.png" alt="map -10_-10" width="100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                </div>
                                            </div>
            </div>
        </div>

                                                    <div class= "row">
                                                            <div class="offset-md-1"></div>
                                                        <div class="col-md-2" style="padding:0%; width:20%;">

                                                                <div class="media">
                                                                        <img data-toggle="modal" data-target="#map-10_5" src="/Rasberry/données/bot/WebMap/-10_5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                                        <div class="modal fade" id="map-10_5" tabindex="-1" role="dialog" aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-body">
                                                                                        <img src="/Rasberry/données/bot/WebMap/-10_5.png" alt="map -10_-10" width="100%">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                            
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="col-md-2" style="padding:0%; width:20%;">

                                                                    <div class="media">
                                                                            <img data-toggle="modal" data-target="#map-5_-5" src="/Rasberry/données/bot/WebMap/-5_5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                                            <div class="modal fade" id="map-5_-5" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                <div class="modal-dialog modal-lg">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-body">
                                                                                            <img src="/Rasberry/données/bot/WebMap/-5_5.png" alt="map -10_-10" width="100%">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                
                                                                            </div>
                                                                        </div>
                                                        </div>
                                                        <div class="col-md-2" style="padding:0%; width:20%;">

                                                                        <div class="media">
                                                                                <img data-toggle="modal" data-target="#map0_5" src="/Rasberry/données/bot/WebMap/0_5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                                                <div class="modal fade" id="map0_5" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-body">
                                                                                                <img src="/Rasberry/données/bot/WebMap/0_5.png" alt="map -10_-10" width="100%">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                        </div>
                                                        <div class="col-md-2" style="padding:0%; width:20%;">

                                                                            <div class="media">
                                                                                    <img data-toggle="modal" data-target="#map5_5" src="/Rasberry/données/bot/WebMap/5_5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                                                    <div class="modal fade" id="map5_5" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-lg">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-body">
                                                                                                    <img src="/Rasberry/données/bot/WebMap/5_5.png" alt="map -10_-10" width="100%">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                        
                                                                                    </div>
                                                                                </div>
                                                        </div>
                                                        <div class="col-md-2" style="padding:0%; width:20%;">

                                                                                <div class="media">
                                                                                        <img data-toggle="modal" data-target="#map10_5" src="/Rasberry/données/bot/WebMap/10_5.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                                                        <div class="modal fade" id="map10_5" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-lg">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-body">
                                                                                                        <img src="/Rasberry/données/bot/WebMap/10_5.png" alt="map -10_-10" width="100%">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                            
                                                                                        </div>
                                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class= "row">
                                                            <div class="offset-md-1"></div>
                                                    <div class="col-md-2" style="padding:0%; width:20%;">
                                                            <div class="media">
                                                            <img data-toggle="modal" data-target="#map-10_-10" src="/Rasberry/données/bot/WebMap/-10_-10.png" alt="map -10_-10" class="mr-3 img-fluid">
                                                            <div class="modal fade" id="map-10_-10" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="/Rasberry/données/bot/WebMap/-10_-10.png" alt="map -10_-10" width="100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2" style="padding:0%; width:20%;">
                                                        <div class="media">
                                                                <img data-toggle="modal" data-target="#map-5_-10" src="/Rasberry/données/bot/WebMap/-5_-10.png" alt="map -5_-10" class="mr-3 img-fluid">
                                                                <div class="modal fade" id="map-5_-10" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <img src="/Rasberry/données/bot/WebMap/-5_-10.png" alt="map -10_-5" width="100%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                    
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-2" style="padding:0%; width:20%;">
                                                            <div class="media">
                                                                    <img data-toggle="modal" data-target="#map0_-10" src="/Rasberry/données/bot/WebMap/0_-10.png" alt="map -10_0" class="mr-3 img-fluid">
                                                                    <div class="modal fade" id="map0_-10" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body">
                                                                                    <img src="/Rasberry/données/bot/WebMap/0_-10.png" alt="map -10_0" width="100%">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                    </div>
                                                                </div>
                                                    </div>
                                                    <div class="col-md-2" style="padding:0%; width:20%;">
                                                                <div class="media">
                                                                        <img data-toggle="modal" data-target="#map5_-10" src="/Rasberry/données/bot/WebMap/5_-10.png" alt="map -10_5" class="mr-3 img-fluid">
                                                                        <div class="modal fade" id="map5_-10" tabindex="-1" role="dialog" aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-body">
                                                                                        <img src="/Rasberry/données/bot/WebMap/5_-10.png" alt="map -10_5" width="100%">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                            
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                            <div class="col-md-2" style="padding:0%; width:20%;">
                                                                    <div class="media">
                                                                            <img data-toggle="modal" data-target="#map10_-10" src="/Rasberry/données/bot/WebMap/10_-10.png" alt="map -10_10" class="mr-3 img-fluid">
                                                                            <div class="modal fade" id="map10_-10" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                <div class="modal-dialog modal-lg">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-body">
                                                                                            <img src="/Rasberry/données/bot/WebMap/10_-10.png" alt="map -10_10" width="100%">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                        </div>

</div>

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
</body>

</html>