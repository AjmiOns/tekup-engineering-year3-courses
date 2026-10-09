 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
       
        <form method="post" enctype="multipart/form-data">
                
            Nom <input type="text" name="nom"><br><br>
                Prenom <input type="text" name="prenom"><br><br>
                Age <input type="text" name="age"><br><br>
                Sexe <input type="radio" name="sexe"value="homme">  H  <input type="radio" name="sexe" value="femme">  F<br><br>
                Ville  <select name="ville">                   
                    <option value="tunis"> Tunis</option><br><br>
                    <option value="france" > France</option><br><br>
                    <option value="algerie" > Algérie</option><br><br>
                    </select>
                <br><br>
                
                Compétences<br>
                <input type="checkbox" name="comp[]"  value="php5">PHP5<br><br>
                <input type="checkbox" name="comp[]" value="symfony">Symfony<br><br>
                <input type="checkbox" name="comp[]" value="html5">HTML5<br><br>
                <input type="checkbox" name="comp[]" value="css3">CSS3<br><br>
                Photo <input type="file" name='photo' accept="images/*"><br><br>
                
                <input type="submit" value="enregistrer" name="bt"><br><br>
        </form>
        <?php
        require 'Personne.php';
        $p=new personne(null,"","","","","","","");
        if(isset($_POST['bt']))
        {
         $p->nom=$_POST["nom"];
        //$x=$_POST["nom"];
        $p->prenom=$_POST["prenom"];
        $p->sexe=$_POST["sexe"];
        $p->age=$_POST["age"];
        $p->ville=$_POST["ville"];
        
        $comp="";
        foreach($_POST['comp']as $v)
        {
            $comp=$comp.' '.$v;
        }
        $p->competences=$comp;
        $p->photo=$_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$p->photo);
        $p->affiche();
        $p->insertion($pdo);
        }
        
    </body>
</html>