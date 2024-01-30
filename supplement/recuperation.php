
<?php //if (isset($_COOKIE['token']) && ($_COOKIE['token']==$_GET['token'] )): ?>




        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link rel="stylesheet" href="../CreateAccount/CreateAccount.css">

            <title>Formulaire d'E-mail</title>
        </head>
        <body>
            <div class="box">
                <span class="borderLine"></span>

                <form action="recup.php" method="post">
                    <div class="inputBox">
                       <h1 style="color:#ffb42a;text-align:center;text-decoration:underline"> BIENVENUE SUR LA PAGE DE RECUPERATION DE VOTRE COMPTE <h1>
                       <p class="notice"><?php if(isset($_GET['message'])) echo $_GET['message'] ?></p>
                    </div>
                   <div class="inputBox">
                       <input type="text" id="username" name="username" required>
                       <span>Nom d 'utilisateur</span>
                       <i></i>
                   </div>
                   <div class="inputBox">
                       <input type="email" id="email" name="email" required>
                       <span>Adresse e-mail </span>
                       <i></i>
                   </div>
                   <div class="inputBox">
                       <input type="password" id="mdp" name="mdp" minlengh="8" required>
                       <span>Nouveau Mot de passe</span>
                       <i></i>
                   </div>
                  <input type="submit" value="SOUMETTRE" style="width:200px;margin-top:20px;">
               </form>
            </div>





        </body>
        </html>

<?php //else: ?>

    <!-- <script>alert("OUPS QUELQUE CHOSE S EST MAL PASSE") </script> -->

<?php //endif;
//exit;  ?>











































