<?php require "content_dynamique/header.php"; ?>

<section id="presentation">
    <h2><span class="symbols">♫</span> Bienvenue sur MÉLOVOX <span class="symbols">♫</span></h2>

    <div id="gallery" class="zone_pres">
        <div class="icone_lien">
            <img src="visuel\icons\gallery_icon.png" alt="">
            <a href="gallery.php">Accéder à la Galerie</a>
        </div>
        <div class="texte_pres">
            <h3>Explorez la galerie</h3>
            <p>Plongez dans un univers musical riche et varié centré sur le partage et la découverte de morceau qui
                résonne avec passion et créativité. <br>Notre plateforme est dédiée à la diffusion de contenus musicaux
                qui célèbrent la diversité des genres et d’artistes indépendant du monde entier.</p> <br>
            <p>Rejoignez notre communauté de mélomanes et partagez vos découvertes et vos coups de cœur avec d'autres
                passionnés. Que vous soyez à la recherche de nouveaux sons ou que vous souhaitiez redécouvrir des
                classiques, notre galerie musicale est l'endroit idéal pour nourrir votre amour de la musique.</p>
        </div>
    </div>

    <div id="liste_aleatoire" class="zone_pres">
        <div class="icone_lien">
            <img src="visuel\icons\icone_playlist_aléatoire.png" alt="">
            <a href="">Laisser vous surprendre par le titre aléatoire du jour !</a>
        </div>
        <div class="texte_pres">
            <h3>Des Découvertes Inattendues.</h3>
            <p>Découvrez des playlists soigneusement sélectionnées, ainsi que de nombreux artistes émergents qui vous
                guideront dans votre exploration musicale. </p>
            <br>
            <p>Notre mission est de vous faire découvrir et mettre en avant des artistes et des sons qui ne manqueront
                pas de vous surprendre par leur créativité. Que vous soyez un passionné de rock, un amateur de pop, ou
                un explorateur de musiques du monde, nous avons ce qu'il vous faut!</p>
        </div>
    </div>
</section>

<section class="texte_pres" id="artiste_moment">
    <h2>🎤 Les artistes du moment 🎧</h2>
  
<!----------------------- SLIDER CODEPEN V2 ------------------------>

    <!-- Conteneur principal pour le slider -->
     <!-- <div class="container"> -->
        <!-- Bouton de navigation gauche -->
        <!-- <div class="bouton-nav gauche">+</div> -->

        <!-- Boîte contenant les images du slider -->
        <!-- <div class="box_slider"> -->
            <!-- Image active affichée par défaut -->
            <!-- <img class="active"
                src="https://images.unsplash.com/photo-1700592478407-3981353caecb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHRyb3BpY2FsJTIwbGVhdmVzfGVufDB8fDB8fHww"
                alt=""> -->
            <!-- Autres images du slider -->
            <!-- <img src="https://images.unsplash.com/photo-1625449455303-a7611109e653?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fHRyb3BpY2FsJTIwbGVhdmVzfGVufDB8fDB8fHww"
                alt="">
            <img src="https://images.unsplash.com/photo-1708658549785-cd3d508f79ac?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjR8fHRyb3BpY2FsJTIwbGVhdmVzfGVufDB8fDB8fHww"
                alt="">
        </div> -->

        <!-- Bouton de navigation droit -->
        <!-- <div class="bouton-nav droit">+</div>
    </div> -->

   
    
<!--------------------- SLIDER SIMPLE CODEPEN ---------------------->
    
<!-- Conteneur principal pour le slider -->
    <!-- <div class="container"> -->
        <!-- Bouton de navigation gauche -->
        <!-- <div class="bouton-nav gauche">+</div> -->

        <!-- Boîte contenant les images du slider -->
        <!-- <div class="box_slider"> -->
            <!-- Image active affichée par défaut -->
            <!-- <img class="active"
                src="https://images.unsplash.com/photo-1700592478407-3981353caecb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHRyb3BpY2FsJTIwbGVhdmVzfGVufDB8fDB8fHww"
                alt=""> -->
            <!-- Autres images du slider -->
            <!-- <img src="https://images.unsplash.com/photo-1625449455303-a7611109e653?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fHRyb3BpY2FsJTIwbGVhdmVzfGVufDB8fDB8fHww"
                alt="">
            <img src="https://images.unsplash.com/photo-1708658549785-cd3d508f79ac?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjR8fHRyb3BpY2FsJTIwbGVhdmVzfGVufDB8fDB8fHww"
                alt="">
        </div> -->

        <!-- Bouton de navigation droit -->
        <!-- <div class="bouton-nav droit">+</div>
    </div> -->
    
<!------------------------- SLIDER COPILOT ------------------------->
    <!-- <div class="slider">
        <div class="arrow left" onclick="slideLeft()">&#9664;</div>
        <div class="images">
            <img src="visuel\icons\users icons\alexia.png" alt="Image 1">
            <img src="visuel\icons\users icons\Catalia.png" alt="Image 2">
            <img src="visuel\icons\users icons\charles.png" alt="Image 3" class="active">
            <img src="visuel\icons\users icons\DJ_alfonso.png" alt="Image 4">
            <img src="visuel\icons\users icons\Eleana.png" alt="Image 5">
        </div>
        <div class="arrow right" onclick="slideRight()">&#9654;</div>
    </div> -->




<!--------------------- SLIDER SANS ANIMATIONS --------------------->
    
    <!-- <div id="slide_artiste">
       <img class="arrow" src="visuel\icons\buttons_icons\Arrow_left_circle.png" alt="">
        <div class="photo_artiste">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\alexia.png" alt=""></a>
            <a href="artist_profile.php">Alexia</a>
        </div>
        <div class="photo_artiste">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\charles.png" alt=""></a>
            <a href="artist_profile.php">Charles</a>
        </div>
        <div class="photo_artiste">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\Eleana.png" alt=""></a>
            <a href="artist_profile.php">Eleana</a>

        </div>

        <div class="photo_artiste">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\Kévin.png" alt=""></a>
            <a href="artist_profile.php">Kévin</a>
        </div>
        <div class="photo_artiste">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\Orisa.png" alt=""></a>
            <a href="artist_profile.php">Orisa</a>
        </div>
        <img class="arrow" src="visuel\icons\buttons_icons\Arrow_right_circle.png" alt="">
     </div>  -->

<!--------------------- Carrousel codepen --------------------->
    

<div class="container">
  <div class="carousel">
    <div class="a">
      <div class="item"><img src="visuel\icons\users icons\alexia.png" alt=""></div>
    </div>
    <div class="b">
      <div class="item">B</div>
    </div>
    <div class="c">
      <div class="item">C</div>
    </div>
    <div class="d">
      <div class="item">D</div>
    </div>
    <div class="e">
      <div class="item">E</div>
    </div>
    <div class="f">
      <div class="item">F</div>
    </div>
    <div class="g">
    <div class="item">JUS</div>
    </div>
    <div class="h">
      <div class="item">ERNEST</div>
    </div>
    <div class="i">
      <div class="item">HOLA</div>
    </div>
    <div class="j">
      <div class="item">QUE</div>
    </div>
    <div class="k">
      <div class="item">TAL</div>
    </div>
  </div>
</div>
<div class="next">Next</div>
<div class="prev">Prev</div>


</section>

<section id="bg_a_propos">
    <div id="a_propos">
        <div>
            <h3>Rejoignez Notre Communauté</h3>
            <p>Ne faites pas que consommer de la musique, partagez-la ! Rejoignez notre communauté de mélomanes,
                échangez vos coups de cœur, et créez des playlists collaboratives avec vos amis.</p>
        </div>

        <div>
            <h3>Artistes : Partagez Votre Talent</h3>
            <p>Chez MÉLOVOX, nous offrons aux artistes une opportunité unique de faire entendre leur voix. Publiez vos
                morceaux, albums et playlists pour toucher un public large et diversifié. </p>
        </div>
        <div>
            <h3>Auditeurs : Plongez dans un Océan Musical</h3>
            <p>Nous vous proposons une bibliothèque musicale vaste et variée, couvrant tous les genres et styles.
                Explorez nos playlists thématiques, découvrez de nouveaux artistes et laissez-vous surprendre par des
                recommandations personnalisées. <br>Créez et partagez vos propres playlists pour immerger vos amis dans
                vos coups de cœur musicaux.</p>
        </div>
    </div>
</section>

<!-- Inclusion du fichier JavaScript pour le slider Copilot -->
<!-- <script src="content_dynamique/slider.js" defer></script> -->

<!-- Inclusion du fichier JavaScript pour le slider codepen -->
<!-- <script src="content_dynamique\slider_codepen.js"></script> -->

 <!-- Inclusion du fichier JavaScript pour le slider codepenV2 -->
 <!-- <script src="scontent_dynamique\sliderV2.js"></script> -->

  <!-- Inclusion du fichier JavaScript pour le slider splide -->
  <script src="content_dynamique/carrousel.js"></script>

<?php require "content_dynamique/footer.php"; ?>