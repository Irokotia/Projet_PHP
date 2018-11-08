<html>

<head>
    <title>::My Shop::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="../Vues/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="../Vues/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Vues/css/style.css" rel="stylesheet" type="text/css">
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
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Dernières nouveautés</a></li>
                <li><a href="#">Bons Plans</a></li>
                <li><a href="#">Composants</a></li>
                <li><a href="#">PC de bureau</a></li>
                <li><a href="#">PC gamers</a></li>
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

            <img src="../Vues/Images/ImagesProcesseur/<?= $p->img ?>" alt="Image de la Carte Mère">

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
    <script src="../Vues/js/jquery.js"></script>
    <script src="../Vues/js/jquery.bxslider.min.js"></script>
    <script src="../Vues/js/my.js"></script>
</body>
</html>
