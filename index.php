
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style3.css">
        <link rel="icon" type="image/png" sizes="16x16" href="icones/logo.png">
        <title> Portfolio en ligne Ténénan C. </title>
    </head>

    <header>
        <img src="icones/identite1.png" alt="identité">
        <h2 class="myName"> Ténénan COULIBALY </h2>
        <div class="online pop"> CV en ligne </div>
    </header>
            
    <body>

        <nav class="navbar">
            <h1> 
                <a href ="#bigDiv" > <b> Accueil </b> </a> 
                <a href ="#myExperiences" title="Mon expérience"> <b> Mes réalisations </b> </a>    
                <a href ="#livreOr" title="Contact et livre d'or"> <b> Contact & commentaire </b> </a>  
            </h1>

        </nav>

        <div id ="bigDiv">
            
            <div class="container animationContainer">
                <section>
                    <h1> Qui suis-je ?</h1>
                                        
                    Etudiant en deuxième année de BTS SNIR (<strong><em>S</em></strong>ystème <strong><em>N</em></strong>umérique - <strong><em>I</em></strong>nformatique & <strong><em>R</em></strong>éseau).
                </section>

                <section >
                    <h1> Mes domaines de compétences </h1>

                    <img src="icones/php.png" alt="PHP"> <img src="icones/c.png" alt="C">
                    <img src="icones/cplusplus.png" alt="C++"> <img src="icones/java.png" alt="Java"> 
                    <img src="icones/mysql.png" alt="MYSQL"> <img src="icones/html.png" alt="HTML"> 
                    <img src="icones/css.png" alt="CSS"> <img src="icones/jjquery.png" alt="JQUERY">
                    <img src="icones/sql.png" alt="SQL"> <img src="icones/word.png" alt="Word">
                    <img src="icones/excel.png" alt="Excel"> <img src="icones/powerPoint.png" alt="PowerPoint">
                </section>


                <section id="myExperiences">
                        <h1> Expériences professionnelles </h1>

                        Dévélopper un site internet dynamique pour une association durant ma période de stage de première année. 
                </section> 
                
                <section>
                    <h1> Formations </h1>
                    <div>
                        <img src="icones/diplome3.png" alt="2016 Brévet">
                        <label for="diplome1"> 2016 - Obtention du brevet </label>
                    </div>    
                    <div>
                        <img src="icones/diplome2.png" alt="2020 Bacalauréat">
                        <label for="diplome2"> 2020 - Obtention du bacalauréat </label>
                    </div>
                    <div>
                        <img src="icones/diplome1.png" alt="BTS SN-IR">
                        <label for="diplome3"> 2022 - Formation en cours </label>
                    </div>
                </section>

                <section>
                    <h1> Langues </h1>
                    
                    Anglais et italien
                </section>

                <section>
                    <h1> Loisirs </h1>
                        
                    <img src="icones/jogging.png" alt="Jogging">
                    <label for="Jogging"> Jogging </label>, 
                    
                    <img src="icones/twitch.png" alt="Twitch">
                    <label for="Twitch"> Jeux vidéos </label>,

                    <img src="icones/velo.png" alt="Vélo">
                    <label for="Velo"> Vélo </label>
                </section>

            </div>

            <div id="livreOr" >
                
                <form  action="index.php" method="post">
                    <h1> Laissez-moi un message </h1>

                    <?php include_once("contact.php"); ?>
                                
                    <label for="nom/prenom"> <b> Nom/Prénom </b> </label>
                    <input type="text" name="nomOuPrenom" placeholder="Insérer votre nom ou prénom">
        
                    <label for="email"> <b> Email </b> </label>
                    <input type="email" name="mail" placeholder="votre@email.com" >

                    <label for="message"> <b> Message </b> </label>
                    <textarea rows="5" cols="33" name="message"> laissez votre commentaire ... </textarea>
                                
                    <input type="submit" value="Envoyer" class="Envoyer">
                </form>
        
                <form method="post" action="index.php" id="commentaire">
                    <h1> Laissez-moi un commentaire </h1>
        
                    <label for="nom/prenom"> <b>Nom/Prénom</b> </label>
                    <input type="text\" name="nomOuPrenom" placeholder="Insérer votre nom ou prénom">

                    <label for="email"> <b>Email</b> </label>
                    <input type="email" name="mail" placeholder="votre@email.com">

                    <label for="commentaire"> <b>Commentaire</b> </label>
                    <textarea rows="5" cols="33" name="commentaire"> Laissez-moi un petit commentaire ... </textarea>
                            
                    <input type="submit" value="Envoyer" class="Envoyer">

                     <?php include 'livreOr.php'; ?>
                            
                </form>
            </div>
        </div>
        
    </body>
    <footer id="contact">
        <h2> Ténénan COULIBALY </h2>
        <address>
            Tel : 07 86 203 770 <br>
           <p> Pour m'envoyer un mail : <a href="mailto:ctnole25@gmail.com">email</a> </p>
        </address>
    </footer>

</html>