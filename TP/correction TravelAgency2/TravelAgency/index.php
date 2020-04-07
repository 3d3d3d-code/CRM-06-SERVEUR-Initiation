<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">
    <title>Travel Agency</title>
</head>

<body>
    <header>
        <div class="wrapper">
            <h1>Travel Agency<span class="orange">.</span></h1>
            <nav>
                <ul>
                    <li><a href="#main-image">Accueil</a></li>
                    <li><a href="#steps">Destinations</a></li>
                    <li><a href="#possibilities">Circuits</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="main-image">
        <div class="wrapper">
            <h2>Organisez votre<br><strong>voyage sur mesure</strong></h2>
            <a href="#" class="button-1">Par ici</a>
        </div>
    </section>

    <section id="steps">
        <div class="wrapper">
            <ul>
                <li id="step-1">
                    <h4>Planifier</h4>
                    <p>Confiez-nous vos rêves d’évasion : en famille ou entre amis, nous trouverons la formule qui
                        comblera vos attentes.</p>
                </li>
                <li id="step-2">
                    <h4>Organiser</h4>
                    <p>Bénéficiez de l’expertise de nos spécialistes de chaque destination, ils vous accompagnent dans
                        la réalisation de votre voyage.</p>
                </li>
                <li id="step-3">
                    <h4>Voyager</h4>
                    <p>Nous nous chargeons d’assurer votre sécurité et de veiller à votre pleine sérénité tout au long
                        de votre voyage.</p>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </section>

    <section id="possibilities">
        <div class="wrapper">
            <article style="background-image: url(images/article-image-1.jpg);">
                <div class="overlay">
                    <h4>Partez en famille</h4>
                    <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</small></p>
                    <a href="#" class="button-2">Plus d'infos</a>
                </div>
            </article>

            <article style="background-image: url(images/article-image-2.jpg);">
                <div class="overlay">
                    <h4>Envie de s'evader</h4>
                    <p><small>Parfois un peu d'évasion serait le bienvenue et ferait le plus grand bien !</small></p>
                    <a href="#" class="button-2">Plus d'infos</a>
                </div>
            </article>

            <div class="clear"></div>

        </div>
    </section>

    <section id="contact">
        <div class="wrapper">

        <?php
         $iscontact='n';

        if (isset($_GET['iscontact'])){
            
            $iscontact=$_GET['iscontact'];
        }
        if($iscontact=='o'){?>
        <h3 class="form-done">Deja contacte</h3>
       } else{?>
            <h3 id="contact-us"> Contactez nous</h3>
           <?php } ?>
            
           

        
           
            
            <p>Chez Travel Agency nous savons que voyager est une aventure humaine mais également un engagement
                financier important pour vous. C'est pourquoi nous mettons un point d'honneur à prendre en compte
                chacune de vos attentes pour vous aider dans la préparation de votre séjour, circuit ou voyage sur
                mesure.</p>
                
    
    
    
               
                <form name="contact-form" action="contact.php" method="POST">
                    <label for="name">Nom</label><sup><span style="color : red;">*</span></sup>
                    <input type="text" id="name" name="name" placeholder="Votre nom" onchange="checkInputName(this.value)">
                    <label for="email">Email</label><sup><span style="color : red">*</span></sup>
                    <input type="text" id="email" name="email" placeholder="Votre email" onchange="checkInputEmail(this.value)">
                    <input type="submit" value="OK" id="button-ok" class="button-3" >
                </form>

         
        </div>
    </section>


    <footer>
        <div class="wrapper">
            <h1>Travel Agency<span class="orange">.</span></h1>
            <div class="copyright">Copyright © Tous droits réservés.</div>
        </div>
    </footer>


   <!-- <script src="script.js"></script>-->
</body>

</html>