<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mon Portfolio</title>

    <!-- lien Bootstrap avec CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><em>Selma Muzevic</em></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#accueil">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Competences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <section id="accueil">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Selma Muzevic</h1>
                <hr>
                <p>Developpeuse Web Junior, en formation chez Simplon</p>
                <p>Portfolio En Cours De Développement !</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">A Decouvrir !</a>
            </div>
        </div>
    </section>
</header>

<section id="about">
    <section class="a-propos">
        <div class="primary+">
            <img id="selma" src="selma.jpg" alt="Selma Muzevic" height="450px" width="450px">
        </div>

        <div class="paragraph">
           <!--Je suis en pleine reconversion professionnelle.
                 Très motivée, j'aime apprendre et réapprendre.
                 Intéressée par le web, je cherche des nouvelles expériences.
                 En voulant découvrir encore plus le monde du web,
                 je me suis orientée vers le développement.-->
    <p><strong><font size="3"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Sed non risus. 
        Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. 
        Cras elementum ultrices diam. 
        Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
        Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. 
        Duis semper. 
        Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. 
        Pellentesque congue. 
        Ut in risus volutpat libero pharetra tempor. 
        Cras vestibulum bibendum augue. Praesent egestas leo in pede. 
        Praesent blandit odio eu enim. 
        Pellentesque sed dui ut augue blandit sodales. 
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
        Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. 
        Maecenas adipiscing ante non diam sodales hendrerit.
        
        Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. 
        Aenean ut orci vel massa suscipit pulvinar. 
        Nulla sollicitudin.
        Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. 
        Pellentesque rhoncus nunc et augue. 
        Integer id felis. 
        Curabitur aliquet pellentesque diam. 
        Integer quis metus vitae elit lobortis egestas. 
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
        Morbi vel erat non mauris convallis vehicula. 
        Nulla et sapien. 
        Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. 
        Mauris ullamcorper felis vitae erat. 
        Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.</em></font></strong></p>
        </div>
    </section>
</section>

    <section id="services">
        <div class="soustitres">
            <h2>Mes projets</h2>
            <p><em>Realisés dans le cadre de la formation:</em></p>
   </div>
<?php

$json = file_get_contents("projets/bd.json");

$projets = json_decode($json);

foreach($projets as $fichier){
?>
    <section>
        <h3><?php echo $fichier->nom; ?></h3>
        <p><?php echo $fichier->description; ?></p>
        <a href="<?php echo $fichier->urlProjet; ?>" />
        <img src="<?php echo $fichier->urlImg; ?>" />
    </section>
<?php
}
?>

<section id="portfolio">
    <section class="skills">
            <h2>Competences :</h2>
            <p><em>En Développement:</em></p>
           <h5>Front-end:</h5>
    </section> 
<section class="langages">
         
    <section class="front-langages">

            <section class="html">
                <p><img src="HTML5.png" alt="html5" width="80px" height="80px"></p>
              
            </section>

             <section class="css3">
                <p><img src="css3.png" alt="css3" width="80px" height="80px"></p>
           
            </section>

            <section class="js">
                <p><img src="js.png" alt="javascript" width="80px" height="80px"></p>
            </section>

            <section class="angular">   
                    <p><img src="angular-logo.png" alt="angular" width="150px" height="150px"></p>
                     
             </section>

             <section class="bootstrap">  
                    <p><img src="bootstrap.png" alt="bootstrap" width="80px" height="80px"></p>
            </section>

            <!--<section class="wordpress">  
                    <p><img src="wordpress.png" alt="wordpress" width="80px" height="80px"></p>
            </section>-->

                <h5 class="col-lg-12 text-center">Back-end:</h5>

                <section class="php">  
                    <p><img src="php-512.png" alt="php" width="80px" height="80px"></p>
                    
               </section>

                <section class="mysql">
                    <p><img src="mysql.png" alt="mysql" width="80px" height="80px"></p>
                     
                </section>

             <section class="nodejs">  
                    <p><img src="nodejs_logo.png" alt="nodejs" width="80px" height="80px"></p>
             </section> 

    </section>
</section>
</section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Contactez-moi !</h2>
                    <hr class="primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>06.33.90.02.29</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>
                        <a href="muzevicselma34@gmail.com">muzevicselma34@gmail.com</a>
                    </p>
                </div>

                <div class="col-lg-4 mr-auto text-center">
                    <a href="https://linkedin.com/in/selma-muzevic/"><img src="linkedIN.png" alt="linkedin" height="100px" width="100px"></a>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <a href="https://github.com/SelmaMuzevic/"><img src="blackGIT.png" alt="git" height="100px" width="100px"></a>
                </div>

            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>