<article class="allforms">

<h2>Radera din profil</h2>
<p>Synd att du vill radera din profil, vi hoppas att se dig igen </p><br>
<p>Skriv in ditt lösenord här för att ta bort din profil</p>

<form action="index.php" method="get">
<input type="text" name="password"><br>
<input type="hidden" name="state" value="delete"><br>
<input type="submit" value="Radera din profil">
</form>

<?php include "model_remove.php" 
?>

</article>