<html>

<head>
    <title>::My Shop::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="../Vues/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="../Vues/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Vues/css/style2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Vues/css/media.css">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="subheader">
                <div class="container">
                    <p>Choisir votre langue : <img src="../Vues/imagesiteweb/franceflag.png"> Français</p>
                    <a href="#"></a><a href="#"></a><a href="#"></a><a href="#">Besoin d'aide ?</a>
                </div>
            </div>
            <!--==main header==-->
            <div id="main-header">
                <!--logo-->
                <div id="logo">
                    <img src="../Vues/imagesiteweb/logoprojet.png">
                </div>
                <!--==search area==-->
                <div id="search">
                    <form action="">
                        <input class="search-area" type="text" name="text" placeholder="Rechercher un produit">
                        <input class="search-btn" type="submit" name="submit" value="Rechercher">

                    </form>
                </div>
                <!--==user-menu==-->
            </div>
        </div>

        <!----=====navigation bar==--->
        <div id="navigation">
           <a href="#" class="menu-togglr"><i class="fa fa-bars"></i></a>
            <ul>
              <li><a href="../index.php">Accueil</a></li>
              <li><a href="../Controler/CarteMere.ctrl.php">Carte mère</a></li>
              <li><a href="../Controler/DisqueDur.ctrl.php">Disque dur</a></li>
              <li><a href="../Controler/Processeur.ctrl.php">Processeur</a></li>
              <li><a href="../Controler/Souris.ctrl.php">Souris</a></li>
              <li><a href="#">Contactez nous</a></li>
            </ul>
        </div>
        <!--============home-slider==-->
        <div id="slider">
            <ul class="bxslider">
                <li><img src="../Vues/imagesiteweb/Slide1.png"></li>
                <li><img src="../Vues/imagesiteweb/Slide2.png"></li>
                <li><img src="../Vues/imagesiteweb/Slide3.png"></li>
            </ul>
        </div>
        <!----=====category boxes===----->
        <div class="container">

          <div id="heading-block">
              <h2>Liste des produits</h2>
          </div>

          <?php foreach($list as $id => $url){   ?>
            <div class="box">

            <a href="DisqueDur2.ctrl.php?id=<?php echo $id ?>">
            <img src="<?='../Vues/Images/ImagesDisqueDur/'.$url->img ?>" />
            <span><?php echo $url->modele ?></span>
              </div>
            </a>
           <?php } ?>

           <div class="fleches">

             <a href="DisqueDur.ctrl.php?firstId=<?= $pageAvant ?>&nbDisqueDur=<?= $nbDisqueDur ?>">
             <img src="../Vues/Images/ImagesSwitch/Actions-arrow-left-icon.png" alt="Flèche gauche"></a>
             <?= $page ?>
             <a href ="DisqueDur.ctrl.php?firstId=1">
             <img src="../Vues/Images/ImagesSwitch/Actions-arrow-top-icon.png" alt="Menu principal"></a>
             <a href="DisqueDur.ctrl.php?firstId=<?= $pageApres ?>&nbDisqueDur=<?= $nbDisqueDur ?>">
             <img src="../Vues/Images/ImagesSwitch/Actions-arrow-right-icon.png" alt="Flèche droite"></a></p>
             
           </div>

        </div>

        <div id="footer">
            <div class="container">
                <div class="footer_sub">
                    <h2>Notre histoire</h2>
                    <p>Compinfo est un site d'informations concernant du matériel informatique, développé par Mehdi Zaaboub, Alexandre
                    Martin et Rowin Boissin. Le site a été fondé en 2018 dans le cadre d'un projet PHP.</a></span> </p>
                </div>
                <div class="footer_sub_2">
                    <center>
                        <h2>Liens importants</h2>
                        <ul>
                          <li><a href="../index.php">Accueil</a></li>
                          <li><a href="../Controler/CarteMere.ctrl.php">Carte mère</a></li>
                          <li><a href="../Controler/DisqueDur.ctrl.php">Disque dur</a></li>
                          <li><a href="../Controler/Processeur.ctrl.php">Processeur</a></li>
                          <li><a href="../Controler/Souris.ctrl.php">Souris</a></li>
                          <li><a href="#">Contactez nous</a></li>
                        </ul>
                    </center>
                </div>
                <div class="footer_sub_2">
                    <center>
                        <h2>Réseaux sociaux</h2>
                        <ul>
                          <li><a href="https://www.facebook.com/">Facebook</a></li>
                          <li><a href="https://plus.google.com/discover">Google+</a></li>
                          <li><a href="https://www.youtube.com/?gl=FR&hl=fr">Youtube</a></li>
                          <li><a href="https://twitter.com/?lang=fr">Twitter</a></li>
                          <li><a href="https://fr.linkedin.com/">Linkdin</a></li>
                          <li><a href="https://www.blogger.com/about/?r=1-null_user">Blogger</a></li>
                          <li><a href="http://digg.com/">Digg</a></li>
                        </ul>
                    </center>
                </div>
                <div class="footer_sub_3">
                    <center>
                        <h2>Abonnez vous</h2>
                        <input type="text" name="subs" placeholder="Ecrire votre email" class="subs">
                        <input action "index.html" type="submit" name="submit_btn" value="Abonner" class="sub_btn">
                        <p class="sub_p">Entrez votre email et restez informé des nouveautés.</p>
                    </center>
                </div>
            </div>
        </div>

    </div>
    <script src="../Vues/js/jquery.js"></script>
    <script src="../Vues/js/jquery.bxslider.min.js"></script>
    <script src="../Vues/js/my.js"></script>
</body>
</html>
