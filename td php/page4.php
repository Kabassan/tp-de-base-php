<!DOCTYPE html>
<html>
<head>
	<title>Page4</title>
</head>
<body>
    <form action="page4a.php" method="post">
        Matricule <input type="text" name="matricule" id="color"/>
        <br />
        <br />
        Nom  <input type="text" name="nom" id="color"/>
        <br />
        <br />
        Prenom <input type="text" name="prenom"/>
        <br />
        <br />
        Sexe   <input type="radio" name="sexe" value="masculin"/>Masculin
         <input type="radio" name="sexe" value="feminin"/>Feminin
        <br />
        <br />
        Adresse <textarea name="adresse" id="" cols="30" rows="2"></textarea>
        <br />
        <br />
        Service <select name="service" class="service">
            <option value="choix">Choisir</option>
            <option value="choix1">Choix1</option>
            <option value="choix2">Choix2</option>
        </select>
        <br />
        <br />
        Fonction <select name="fonction">
            <option value="choix">Choisir</option>
            <option value="choix1">Choix1</option>
            <option value="choix2">Choix2</option>
        </select>
        <br />
        <br />
        <input type="submit" value="valider" /> 
        <input type="submit" value="Réinitialiser" /> 
    </form>
    <style>
        #color{
            background-color:pink;
        }
        input['submit']{
            background-color:dark gray;
        }
        .service{
            width:150px;
        }
    </style>
</body>
</html>