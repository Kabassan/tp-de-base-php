<!DOCTYPE html>
<html>
<head>
	<title>Page2</title>
</head>
<body>
    <form action="td2.php" method="post">
        Entrez votre prenom: <input type="text" name="prenom"/>
        <input type="submit" value="Envoyer"/>
    </form>
</body>
</html>
<?php
echo"prenom tapé par l'utilisateur:".$_POST['prenom'];
?>
