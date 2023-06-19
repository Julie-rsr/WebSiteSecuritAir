<html>
  <head>
    <title>Securit'Air</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/subscribe.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="JS/subscribe.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>

  <div class="header">
    <a href="accueil.html" class="logo">
      <img
        src="Ressources/logo.png"
        alt="Logo"
        width="300"
        height="auto"
      />
    </a>
    <div class="header-center">
      <a href="accueil.html">Accueil</a>
      <div class="dropdown">
        <a class="dropbtn">A propos</a>
        <div class="dropdown-content">
          <a href="qsn.html">Qui sommes nous</a>
          <a href="produit.html">Notre produit</a>
        </div>
      </div>
      <a href="contact.html">Nous contacter</a>
    </div>
    <div class="header-right">
      <a href="subscribe.php">S'inscrire</a>
      <a class="btn" href="connect.php">Se connecter</a>
    </div>
  </div>
  <section class="subscribe">
      <div class="container">
        <div class="left">
            <h1><span class="orange">Inscrivez</span> vous</h1>
    </div>
    <div class="formulaire">
      <form action="/Securit'Air 2/Model/inscription.php" method="POST" action="/controller/subscribetraitement.php" onsubmit="return validateForm();">
        <div class="part1">
          <div class="pat1">
            <h3>Nom</h3>
            <input
            type="text"
            name="nom"
            placeholder="Entrez votre nom"
            required value="<?php if(isset($_COOKIE['nom'])){echo $_COOKIE['nom'];}?>"><p class="error"><?php if(isset($_GET["nom"]) && $_GET["nom"] === "true"){echo "Veuillez remplir votre nom";}?></p>
            </div>

            <div class="pat1"><h3>Prénom</h3>
            <input
            type="text"
            name="prenom"
            placeholder="Entrez votre prénom"
            required value="<?php if(isset($_COOKIE['prenom'])){echo $_COOKIE['prenom'];}?>"><p class="error"><?php if(isset($_GET["prenom"]) && $_GET["prenom"] === "true"){echo "Veuillez remplir votre prénom";}?></p>
            </div>
        </div>
        <h3>Identifiant</h3>
        <input
          type="text"
          name="identifiant"
          placeholder="Entrez votre Identifiant"
          required value="<?php if(isset($_COOKIE['identifiant'])){echo $_COOKIE['identifiant'];}?>"><p class="error"><?php if(isset($_GET["identifiant"]) && $_GET["identifiant"] === "true"){echo "Veuillez remplir votre identifiant";}?></p>
        
        <h3>E-mail</h3>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Entrez votre adresse e-mail" onblur="checkMail()"
          required value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}?>"><p class="error"><?php if(isset($_GET["email"]) && $_GET["email"] === "true"){echo "Veuillez remplir votre email";}?></p>
        
      
       <div class="part1">
          <div class="pat1">
          <h3>Mot de passe</h3>
          <input
            type="password"
            name="password"
            placeholder="Entrez votre mot de passe"
            id="password"
            required value="<?php if(isset($_COOKIE['mdp'])){echo $_COOKIE['mdp'];}?>"><p class="error"><?php if(isset($_GET["mdp"]) && $_GET["mdp"] === "true"){echo "Veuillez remplir votre mot de passe";}?></p>
          </div>

          <div class="pat1"><h3>Confirmer mot de passe</h3>
          <input
            type="password"
            name="password"
            id="password-confirm"
            placeholder="Entrez votre adresse"
            required value="<?php if(isset($_COOKIE['mdp2'])){echo $_COOKIE['mdp2'];}?>"><p class="error"><?php if(isset($_GET["mdp2"]) && $_GET["mdp2"] === "true"){echo "Veuillez confirmer votre mot de passe";}?></p>
          </div></div>
          <div class="subscribebutton"><button type="submit">S'inscrire</button></div>
        </div>
      </form>
       <h2>Vous avez déjà un compte ?
       </h2>
      <div class="connect">
        <button><a href="connect.html">Se connecter</a></button>
        </div>
  </section>
  <script>
            function validateForm() {
                var email = document.getElementById('email').value;
                var atpos = email.indexOf('@');
                var dotpos = email.lastIndexOf('.');
        
                if (atpos < 1 || (dotpos - atpos < 2)) {
                    alert('Veuillez entrer une adresse e-mail valide');
                    document.getElementById('email').focus();
                    return false;
                }
        
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('password-confirm').value;
        
                if (password.length < 8 || !/[A-Z]/.test(password) || !/[\W_]/.test(password)) {
                    alert('Le mot de passe doit comporter au moins 8 caractères, une majuscule et un caractère spécial.');
                    return false;
                }
        
                if (password !== confirmPassword) {
                    alert("Les mots de passe ne correspondent pas.");
                    return false;
                }
      
                // Le formulaire est valide
                alert("Inscription réussie !");
            }
        </script>
        

  <footer>
    <div class="footer-left">
      <a href="faq.php" class="faq">Vous pouvez aussi regarder notre FAQ</a>

      <div class="contacter">
        <a href="contact.html" class="button">Nous contacter</a>
        <i href="https://www.facebook.com/securitair"
          ><img src="Ressources/i.png" class="insta"
        /></i>
        <i href="https://www.instagram.com/secur_itairparis/"
          ><img src="Ressources/f.png" class="facebook"
        /></i>
      </div>
    </div>
    <img src="Ressources/logo.png" alt="Logo" class="footer-logo" />
    <div class="cgu">
      <a href="cgv.html" class="footer-cgu">Conditions générales de ventes</a>
      <a href="ml.html" class="footer-cgu">Mentions Légales</a>
      <a href="pc.html" class="footer-cgu">Politique de confidentialité</a>
    </div>
  </footer>
</html>
