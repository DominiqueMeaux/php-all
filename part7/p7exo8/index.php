<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p7exo8</title>
  </head>
  <body>
    <p>
    <?php
    if(!empty($_POST['Civilité']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['file'])){
      $infosfichier = pathinfo($_FILES['file']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees ='pdf';
    if ($extension_upload == $extensions_autorisees){
      echo $_POST['Civilité'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' ' . $_FILES['file']['name'];
     

    }else {
      echo 'Ce fichier n\'est pas un fichier PDF !';
    }
    }else{
      ?>
      <form action="index.php" method="POST" enctype="multipart/form-data">
        <select name="Civilité">
          <option value="Mr">Mr</option>
          <option value="Mme">Mme</option>
        </select>
        <input type="text" name="lastname" placeholder="Nom" />
        <input type="text" name="firstname" placeholder="Prénom" />
        <input type="file" name="file"><!--bouton pour upload des fichiers-->
        <input type="submit" name="soumettre" />
      </form>
              
      <?php
    }/*fermeture du else après le form pour inserer le html, ainsi le form est visible ms une
     fois les données entrée et validé il ne l est plus*/
         ?>
   </p>
  </body>
</html>
