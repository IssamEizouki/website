<section id="nav-bar">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Horse Hosting</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span>
                        <i class="fa fa-bars toggle" aria-hidden="true"></i>
                        </span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="link1" href="#Accueille"><?php 
                        echo $langue['Accueil'] ;
                        ?><span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="link1" href="#services"><?php 
                        echo $langue['Services'] ;
                        ?></a></li>
                        <li class="nav-item"><a class="link1" href="#offre"><?php 
                        echo $langue['Offers'] ;
                        ?></a></li>
                        <li class="nav-item"><a class="link1" href="#qui"><?php 
                        echo $langue['Qui'] ;
                        ?></a></li>
                        <li class="nav-item"><a class="link1" href="#equipe"><?php 
                        echo $langue['Equipe'] ;
                        ?></a></li>
                        <li class="nav-item"><a class="link1" href="back-end/requettesql.php">RequetteSQL</a></li>
                        <li class="nav-item"><a class="link1" href="#contact"><?php 
                        echo $langue['Contact'] ;
                        ?></a></li>
                        <li class="nav-item fr"><a class="link1" href="index.php?langues=fr"><?php echo $langue['langue-fr'] ?></a><img src="front-end/images/fr.png" width="15px"></li>
                        <li class="nav-item en"><a class="link1" href="index.php?langues=en"><?php echo $langue['langue-en'] ?></a><img src="front-end/images/en.png" width="25px"></li>


                    </ul>
                </div>
            </div>
        </nav>
        <button id="btnScrollToTop">
  <i class="fa  fa-arrow-up arrow "></i>
    </section>
