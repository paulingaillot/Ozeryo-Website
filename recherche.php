<?php 
                     if (!isset($_POST['username']) && $_GET['username'] != "") {
                    $username = $_GET['username'];

                    $parsed_json = json_decode(file_get_contents('https://ozeryo.xyz/Rasberry/données/bot/profilData.json'));
                    $profils = $parsed_json->{'profils'};

                    foreach($profils as $profil) {
                      if(strtolower($profil->{'name'}) == strtolower($username)) {
                          echo 'Ybsi';
                          $id = $profil->{'id'};
                          header('Location: https://ozeryo.xyz/profile.php?id='.$id);
                          exit();
                      }
                  }
                }
                    ?>