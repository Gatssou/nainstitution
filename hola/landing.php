<?php
   session_start();
   require_once 'config.php';
   if(!isset($_SESSION['user']))
   header('Location: indexc.php');

   ?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../index.css">
      <link rel="shortcut icon" href="../Photos/pokeball-5128709_960_720.webp" type="image">
      <title>Connexion réussie</title>
   </head>
   <body>
      <nav>
         <!-- Header Menu Scroll-->
         <div id="monSidebar" class="Header_sidebar">
            <!--Bouton ouverture de la nav-->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <!--Texte de la barre de nav-->
            <a href="../indexc.php" >Accueil</a>
            <a href="../figurines.html">Figurine</a>
            <a href="../poster.html">Produit dérivé</a>
            <a href="../contact.html">Contact</a>

            <?php
            if(PHP_SESSION_ACTIVE){ ?>
            <a href="./profil.php">Profil</a>
            <?php } ?>

            <?php
            /* isset / empty echo afficher a*/
          if($_SESSION['compte_verifie'] = '1'){?> 
            <a href="http://localhost/Site_Dinamax/article%20admin/article.php">Article</a>
               <?php }?>
               

               <?php
          if($_SESSION['compte_verifie'] = '1'){?> 
            <a href="http://localhost/Site_Dinamax/article%20admin/modification%20article.php">Modif article</a>
               <?php } ?>


            <div class="Header_sidebar_borderbottom" ></div>
            <div class="Header_sidebar_mention_legal"><a href="https://boutique-pokemon.com/pages/mentions-legales">Mention légal</a>
            </div>
            <div class="Header_sidebar_icon">
               <a href="https://www.facebook.com/PokemonOfficielFR/?brand_redir=230809307041021">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                     <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                  </svg>
               </a>
               <a href="https://twitter.com/Pokemon?failedScript=main">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                     <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                  </svg>
               </a>
               <a href="https://www.instagram.com/accounts/login/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                     <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                  </svg>
               </a>
               <a href="https://www.youtube.com/user/pokemon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                     <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                  </svg>
               </a>
            </div>
         </div>
         <button class="openbtn" onclick="openNav()">&#9776;</button>
         <!--Header Logo-->
         <div class="Header_logo">
         
            <img src="../Photos/dynamax et logo.png" alt="Logo_Dynamax" class="Logo_dynamax_taille">
            
         </div>
         
         <!--Svg icon Header-->
         <div class="Icon_button_nav">

            <?php
          if(PHP_SESSION_ACTIVE){?> 
            <a href="deconnexion.php">Deconnexion</a>
            
            <?php }if($_SESSION['id'] = 0){?>
               <a href="index.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" >
                  <path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"/>
               </svg></a>
               <?php } ?>

            
            <a href="#search_box" class="btn" id="search">
               <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
               </svg>
            <a href="../panier.html">
               <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.305-15l-3.432 12h-10.428l-2.937-7h11.162l-1.412 5h2.078l1.977-7h-16.813l4.615 11h13.239l3.474-12h1.929l.743-2h-4.195z"/>
               </svg>
            </a>
         </div>
         <form class="search_box" id="search_box" action="/search/">
            <input name="search_criteria" placeholder="Recherche..." value="" type="text">
            <input class="search_icon" value="Rechercher" type="submit">
         </form>
      </nav>
      <body>
         <div class="prout">
         <div class="container2">
         <h1>Bonjour ! <?php echo $_SESSION['user'];?> </h1>
         <a href="deconnexion.php">deconnexion</a>
   </body>
   <script src="../index.js"></script>
</html>