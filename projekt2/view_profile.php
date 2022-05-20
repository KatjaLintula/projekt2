<article class="allforms">
<h1>Här är din profil!</h1>
<p>Du kan ändra på dina uppgifter här</p>

<?php include "model_profile.php";

?>

<form action="index.php" method="get">
        Namn: <input class= fname type="text" name="fullname" value = "<?php print($ad['fullname'])?>"><br>
        Email:<input class= email type="text" name="email" value="<?php print($ad['email'])?>"><br>
        Annonsen: <input class= ad type="text" name="ad" value="<?php print($ad['aboutme'])?>"><br>
        Stad:<input type="text" name="city" value = "<?php print($ad['city'])?>"> <br>
        <input class="button" type="submit" value="Ändra!">
</form>

<form action="../remove/">
    <input type="submit" value="Radera profil" />
</form>

<h4>Senaste Kommentarerna </h4>
    <?= $user. " har kommenterat: <br>".$kommentar ?>

</article>

