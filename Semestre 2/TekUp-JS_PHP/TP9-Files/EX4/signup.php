<?php

?>


<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            
            <form action="" method="POST">
                <h1>Sign Up</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
				
				<label><b>Confirmer le mot de passe</b></label>
                <input type="password" placeholder="Confirmer le mot de passe" name="confirm" required>

                <input type="submit" name='submit' value='Sign Up' >
            </form>
        </div>
    </body>
</html>