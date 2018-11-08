<html>

<head>
    <title>::My Shop::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>

<div id="wrapper">
    <div id="header">
        <div id="subheader">
            <div class="container">
                <p>Choisir votre langue : <img src="images/franceflag.png"> Français</p>
                <a href="#"></a><a href="#"></a><a href="#"></a><a href="#">Besoin d'aide ?</a>
            </div>
        </div>
        <!--==main header==-->
        <div id="main-header">
            <!--logo-->
            <div id="logo">
                <img src="images/logoprojet.png">
            </div>
            <!--==search area==-->
            <div id="search">
                <form action="">
                    <input class="search-area" type="text" name="text" placeholder="Rechercher un produit">
                    <input class="search-btn" type="submit" name="submit" value="Rechercher">

                </form>
            </div>

            <!--==user-menu==-->
            <div id="user-menu">
                <li><a href="#">Panier</a></li>
                <li><a href="#">Login</a></li>
            </div>
        </div>
    </div>
    <!----=====navigation bar==--->
    <div id="navigation">
       <a href="#" class="menu-togglr"><i class="fa fa-bars"></i></a>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Dernières nouveautés</a></li>
            <li><a href="#">Bons Plans</a></li>
            <li><a href="#">Composants</a></li>
            <li><a href="#">PC de bureau</a></li>
            <li><a href="#">PC gamers</a></li>
            <li><a href="#">Contactez nous</a></li>
        </ul>
    </div>

    <!----=====category boxes===----->
    <div class="container">

      <?php foreach($list as $id => $url){   ?>
      <a href="DisqueDur2.ctrl.php?id=<?php echo $id ?>">
      <img src="<?= $url ?>" />
      </a>
     <?php } ?>

    </div>

        <div id="footer">
            <div class="container">
                <div class="footer_sub">
                    <h2>Notre histoire</h2>
                    <p>Compinfo est un site de ventes de matériel informatiques, de pc pré-conçus et de nombreux autres composants
                    d'ordinateur. Compinfo a été fondé en 2004 par Mike Cornwell et s'est imposé comme le 1er site de vente
                    de matériel informatique sur Internet.</a></span> </p>
                </div>
                <div class="footer_sub_2">
                    <center>
                        <h2>Liens importants</h2>
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Nouveaux Produits</a></li>
                            <li><a href="#">Bons Plans</a></li>
                            <li><a href="#">Composants</a></li>
                            <li><a href="#">PC de bureaux</a></li>
                            <li><a href="#">PC gamer</a></li>
                            <li><a href="#">Contactez nous</a></li>
                        </ul>
                    </center>
                </div>
                <div class="footer_sub_2">
                    <center>
                        <h2>Réseaux sociaux</h2>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkdin</a></li>
                            <li><a href="#">Blogger</a></li>
                            <li><a href="#">Digg</a></li>
                        </ul>
                    </center>
                </div>
                <div class="footer_sub_3">
                    <center>
                        <h2>Abonnez vous</h2>
                        <input type="text" name="subs" placeholder="Ecrire votre email" class="subs">
                        <input type="submit" name="submit_btn" value="Abonner" class="sub_btn">
                        <p class="sub_p">Entrez votre email et restez informé des nouveautés.</p>
                    </center>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
