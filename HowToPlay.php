
<!DOCTYPE html>

<html>

   
                    <?php
include("head.html");
?>

<head>
    
            <title>Ozeryo - HotToPlay</title>

</head>

    

    <body>

        <div id="bloc_page">

            
                    <?php
include("header.html");
?>



        <div class=sommaire>
            
                        <a class=sommaire, href="#Bien débuter">🏰 Bien débuter</a><br />
                        <a class=sommaire, href="#Les Batiments">🏙️ Les Batiments</a><br />
                        <a class=sommaire, href="#Les Attaques">⚔️ Les Attaques</a><br />
                        <a class=sommaire, href="#Les Pays">🌍 Les Pays</a><br />
                        <a class=sommaire, href="#Le Laboratoire">⚗️ Le Laboratoire</a><br />
                        <a class=sommaire, href="#Les Enchères">💸 Les Enchères</a><br />
                        <a class=sommaire, href="#La Map">💸 La Map</a><br />

                    </ul>


        </div>
            <p><center><div id="Bien débuter"><span style="font-size: 2.3em"><strong>🏰 Comment bien débuter en jeu ?</strong></span></div></center><br /><br />

    • Vous pouvez accéder à toutes les commandes jeu à l'aide de la commande =help game ou =help.<br /><br />


- Tout d'abord, vous pouvez retrouver votre ville/base principale à l'aide de la commande =city. Celle-ci vous affiche l'avancée de votre ville ainsi que votre inventaire de jeu ( money, exp, ressources ).<br /><br />


- Afin d'augmenter vos stocks de moneys / ressources et de gagner de l'exp pour monter de niveau, trois commandes vous seront utiles : =hr, à faire toute les heures, =dl à faire tout les jours et =work ou =work all qui se recharge selon votre barre de mana ( visible sur votre affichage de ville ).<br /><br />

- Vous pouvez à présent commencer à construire. Quelques conseils, premièrement, ne construisez pas directement votre caserne, vous pourriez vous faire attaquer avant même d'avoir réellement débuté... L'entreprise est le bâtiment le plus important chez les débutant car il vous permet d'augmenter le gain de money ( dans les 3 commandes vues précédemment ), pour se faire, faites =b entreprise : vous verrez alors combien coûte son amélioration ensuite, si vous avez assez de money / ressources, faites =b entreprise 1. Le nombre à la fin variera selon le niveau à laquelle vous voulez améliorer votre bâtiment.<br /><br />

- Pour finir cette introduction au jeu, un autre moyen de gagner des ressources / moneys / exp est d'attraper des coffres-forts. Ceux-ci apparaissent plusieurs fois par heure à des intervalles aléatoires. Pour tenter de l'attraper, faites =cf et répétez l'action autant de fois que nécessaire. Attention, ceci peut être difficile si un autre joueur tente d'attraper le coffre en même temps !</p><br />
<center><div class=separateur> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div></center>
<p><center><div id="Les Batiments"><span style="font-size: 2.3em"><strong>🏙️ Les bâtiments</strong></span></div></center><br /><br />

    • Vous pouvez accéder à toutes les commandes jeu à l'aide de la commande =help game ou =help.<br /><br />

<span style="font-weight : bold">🏪 Centre commerciale ( cc ) :</span> augmentera la limite d'habitants dans votre ville.<br />
<span style="font-weight : bold">🏥 Hôpital :</span> lorsque vous avez déplacer la limite d'habitants de votre ville, vous pouvez toujours en gagner, cependant  ceux-ci "meurent", l'hôpital ralentit alors cette descente d'habitants.<br />
<span style="font-weight : bold">🏢 Entreprise ( ent ) :</span> boost le gain de money.<br />
<span style="font-weight : bold">🏬 Caserne :</span> vous permet de former des soldats pour attaquer ou des espions. En la construisant, vous pouvez être attaqué.<br />
<span style="font-weight : bold">🐻 Zoo :</span> augmente la capacité de stockage des animaux.<br />
<span style="font-weight : bold">⛏️ Mine :</span> augmente le rendement de matériaux.<br />
<span style="font-weight : bold">🔬 Laboratoire ( labo ) :</span> vous permet de gagner un bonus d'exp ( voir prochain tuto ).<br />
<span style="font-weight : bold">🏛️ Temple :</span> possède qu'un seul niveau. Vous permet de =pray [dieu] qui vous apportera un bonus.<br />
<span style="font-weight : bold">🏯 Bunker :</span> améliore votre défense.<br />
<span style="font-weight : bold">🏫 École :</span> donne un bonus de population.<br />
<span style="font-weight : bold">🚗 Transport :</span> bâtiment spécial qui évolue selon l'amélioration. Donne un bonus de déplacement ( les réduits ). =b gare pour build la gare ; =b port pour build le port ; =b aeroport pour build l'aéroport ; =b zone de lancement pour build la zone de lancement. Vous devez faire les améliorations dans cet ordre là.<br /><br /></p>
<center><div class=separateur> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div></center>
<p><center><div id="Les Attaques"><span style="font-size: 2.3em"><strong>⚔️ Caserne et attaques</strong></span></div></center><br /><br />

• Vous pouvez accéder à toutes les commandes casernes / attaques à l'aide de la commande =help game ou =help.<br /><br />

:department_store: Caserne : Disponible à la construction dès le début du jeu mais peu recommandable. En effet en la construisant, vous pouvez attaquer les autres joueurs mais aussi vous faire attaquer. Attendez donc le bon moment.<br /><br />

En la construisant, vous pourrez entrainer des soldats ( =soldier train [nombre] ) contre de la money et des habitants. En l'améliorant de niveau, vous abaisserez le coût ( en money ) de leur formation. De plus au niveau 26 et plus, vous debloquez une nouvelle unité, l'espion.<br /><br />

<span style="font-weight : bold">I / Attaques</span><br /><br />

    • Après avoir former vos soldats, vous pouvez attaquer d'autres joueurs avec la commande =a [joueur] [nombre de soldats]. Dans la case joueur, vous pouvez indiquer un @pseudo, une ID discord ou encore une position de joueur sur la map ( =map )<br /><br />

    • Attention, garder toujours une réserve de soldats en défense au cas où quelqu'un vous attaquerait...<br /><br />

    • En cas de victoire / défaite, vous recevrez un rapport de combat ( attaque ou défense ) de la part du bot pour vous informer des pertes / gains.<br /><br />

    • Commandes utile : =soldier train max : entrainer le maximum de soldats possibles, sinon vous pouvez utiliser =soldier train [nombre] mais attention à la limite horaire de train.<br /><br />

<span style="font-weight : bold">II / Espions</span><br /><br />

    • Ils se débloquent à partir du level 26 de la caserne et vous permette d'espionner les villes des autres joueurs.<br /><br />

    • Pas besoin de les former, vous avez automatiquement un nombre d'espionnage par jour qui dépend du niveau de votre caserne. De plus, plus celle-ci est haut niveau, moins l'espion à une chance de se faire voir.<br /><br />

    • =spy [joueur] et le bot vous enverra un rapport d'espionnage avec un nombre approché des soldats dans la ville et une information sur une ressource.<br /><br /></p>
<center><div class=separateur> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div></center>
<p><center><div id="Les Pays"><span style="font-size: 2.3em"><strong>🌍 Pays</strong></span></div></center><br /><br />

    • Vous pouvez accéder à toutes les commandes pays à l'aide de la commandes =help game ou =help.<br /><br />

Voyez le pays comme une team. Il vous permettra de vous regrouper avec différents joueurs / amis et d'évoluer avec.<br /><br />

<span style="font-weight : bold">I / Commandes de base</span><br /><br />

• =p affichera votre pays ( si vous êtes dans un pays ).<br />
• =p create [nom] pour créer votre pays. Cela coûte 10 M.<br />
• =p invite [pseudo] pour inviter quelqu'un dans votre pays et =p join [nom pays] pour accepter l'invitation. Attention vous devez écrire le pays parfaitement ( majuscules, emojis... ) sinon ça ne fonctionnera pas.<br /><br />

<span style="font-weight : bold">II / Level up et investissements</span><br /><br />

Les pays ont un système de niveau, visibles sur la première ligne du =p. Vous pouvez voir le classement des pays avec la commande =topPays.<br /><br />

Pour faire monter votre pays de niveau, vous devrez investir des matériaux ( pétrole, verre, brique, pierre, acier et bois ). Dans l'affichage de votre pays ( =p ), à côté de chaque matériaux vous aurez marqué un nombre ( 0 ; 1 ; 3 ; 5 ). Ce nombre correspond au multiplicateur qui sera affecté pendant votre investissement. Si vous investissez 400 bois alors qu'aujourd'hui le multiplicateur du bois est de 3, cela rapportera 1200 points à votre pays. Si vous investissez 1000 verre alors que le multiplicateur du verre est de 0, cela rapportera 0 point à votre pays. Les multiplicateurs changent de matériaux tout les jours de manières aléatoire.<br /><br />

• =p invest [matériaux] [nombre] pour investir.<br /><br />

<span style="font-weight : bold">III / Personnaliser son pays</span><br /><br />

Quelques commandes sont présentes pour rendre votre pays unique et à votre image.<br /><br />

• =p discord [lien] vous permettra d'intégrer un lien vers votre discord ( visible en =p ).<br />
• =p desc [description] pour ajouter une description à l'affichage de votre pays.<br />
• =p emoji [emoji] pour ajouter un emoji à l'affichage de votre pays. Se débloque selon le niveau du pays.<br /><br />

• Vous pouvez accéder à toutes les commandes pays à l'aide de la commande =help game ou =help.<br /><br />

Vous pouvez continuer de personnaliser votre pays avec la création de grade personnalisés ( + permissions ) :<br /><br />

• =p rank [add/remove] [nom] pour créer ou supprimer un rôle.<br />
• =p perm [add/remove] [rank] [perm] pour ajouter une permission a un rank ou en retirer une.<br />
• =p role [rank] [mention] pour donner un rôle a un joueur.<br />
• Listes des permissions :<br />
- Kick ( pouvoir kick un joueur )<br />
- Desc ( changer la description )<br />
- ChangeE ( change emote )<br />
- ChangeD ( change discord ) <br />
- Invite ( pouvoir inviter )<br />
- ShowM ( faire =p members )<br />
- GiveR ( donner un rank )<br />
- ModifR ( modifier un rank )<br />
- CreateR ( Creer un rank )<br />
- GiveB ( donner de l argent a la bank )<br />
- CreditB ( prendre de l argent a la bank )<br />
- SoldierA ( mettre des soldats )<br />
- PAttack ( attack avec le pays ) <br />
- Prename ( rename le pays )<br /><br />

<span style="font-weight : bold">IV / Modération du pays</span><br /><br />

• =p kick [pseudo] pour exclure quelqu'un du pays.<br />
• =p rename [nom] pour renommer le pays. :warning: Si des bugs surviennent après la commande, contactez un admin !:warning: <br /><br />

 <span style="font-weight : bold">V / Autres </span><br /><br />

• =p members pour voir la liste des membres du pays.<br />
• =p attack [pays] [soldats nombre] pour lancer une attaque contre un autre pays.<br />
• =p bank [add/credit] [nombre] pour ajouter ou retirer de l'argent de la banque de votre pays.<br /><br /></p>
<center><div class=separateur> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div></center>
<p><center><div id="Le Laboratoire"><span style="font-size: 2.3em"><strong>⚗️ Laboratoire</strong></span></div></center><br /><br />

• Vous pouvez accéder à toutes les commandes laboratoire à l'aide de la commande =help game ou =help.<br /><br />

Le laboratoire vous permet un gain de mana et d'expérience.<br />
Voici son utilisation en quelques étapes :<br /><br />

• =b labo vous permettra de le construire à partir du niveau 50.<br /><br />

• Effectuez ensuite la commande =labo start pour le démarrer. Les recherches du labo dure 4h, après ces 4h vous pouvez le récupérer pendant 1h. Au final, si vous lancer votre labo, vous pourrez le récupérer au maximum 5 heures après. Pour ne pas l'oublier,vous pouvez utiliser la commande =rmd [heures] [labo] qui vous préviendra.<br /><br />

• Lorsque le labo sera prêt, 4h après vous pourrez donc récupérer ses résultats avec =labo claim qui vous donnera de l'expérience et du mana.<br /><br />

• Si vous n'avez pas récupérer les résultats au maximum 5h après l'avoir lancer, celui-ci explosera ! Vous devrez le réparer à l'aide de la commande =labo repair. Le labo prendra 24h pour se réparer, vous pouvez cependant accélérer le precessus et le réparer immédiatement ( coûte des matériaux + de la money ) en faisant =labo repair confirm.<br /><br /></p>
<center><div class=separateur> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div></center>
<p><center><div id="Les Enchères"><span style="font-size: 2.3em"><strong>💸 Enchères</strong></span></div></center><br /><br />

Les enchères vous permettent de remporter des pets ( =zoo ), des houses ( =houses ), des armes (=h weapons) ou bien encore des armures (=h armor).<br />
Chaque jour un nouvel objet est mis aux enchères, il peut être un pet ou une house.<br /><br />

• Vous pouvez voir vos jetons avec la commande =bid.<br /><br />

• Vous pouvez renchérir ou débuter une enchère avec la commande =bid [nombre]. Le résultat est donné vers 1 heure du matin ( heure de France ).<br /><br />

• Les jetons sont gagnés dans les hourly, daily, votes et lootboxs.<br /><br /></p>

<center><div class=separateur> <img src="/images/separateur.png" alt="separateur" width="900" height="20" /></div></center>
<p><center><div id="La Map"><span style="font-size: 2.3em"><strong>🌐 La Map </strong></span></div></center><br /><br />

    • Vous pouvez accéder à toutes les commandes d'attaque à l'aide de la commandes =help game ou =help.<br /><br />

    Les points de ressources se situent sur la map a des intervalles de 5 cases ( x = 0 y = 0 , x = 5 ; y =0 etc...).<br /><br />

    • Concernant comment attaquez merci de lire la partie  "<a href="#Les Attaques">⚔ Les Attaques</a>" de la F.A.Q.<br /><br />

    Lors d'une attaque sur un point de ressource avec comme exemple 1 000 000 de soldats vous pourrez gagner le point si l'occupant actuel a moins de 1 000 000 de soldats sur le points.<br /><br />

    <span style="font-weight : bold">• Les récompense sur les points.</span><br /><br />

    Chaque point vous rapporte (au nv 0 du point) 20 matériaux (défini par le nom du point de ressource, ex : carriere = pierre ; scierie = bois etc...) toute les heures ! (pour chaque nouveau niveau sur un point de ressource vous gagnerez 10 matériaux supplémentaire chaque heures)<br /><br />

    <span style="font-weight : bold">• Les donjons</span><br /><br />

    Les donjons apparaissent aléatoirement sur la carte ont un niveau aléatoire entre 1 et 10 et sont tuable via les héros qui seront expliqué a la page suivante 😉 <br /><br />

    <span style="font-weight : bold">• Les récompenses</span><br /><br />

    Les donjons donnent en étant vaincu une récompense entre 1 et 10 lootbox (=lb) (si vous vainquez un boss nv 1 vous obteniendrez obligatoirement 1 lb mais si vous vainquez un boss nv 10 vous obtiendrez entre 1 et 10 lb)</p>

        </div>
         
                    <?php
include("footer.html");
?>

        </div>
    </body>
</html>