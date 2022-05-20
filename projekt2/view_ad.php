
<article class="allforms">
<h2>Här är användarens annons: </h2>

<?php 
include "model_ad.php";

print("<div id='ads'>");
print("<h3>".$ad['fullname']. "</h3>");
print("<p>".$ad['aboutme']."</p>");
print('</div>');

?>

<form action="index.php" method="get">
    Kommentar: <textarea name="comment"></textarea>
    <input type="hidden" name="reciever" value="<?=$profile?>">
    <input type="hidden" name="reciever_id" value="<?=$ad['id']?>">
    <input class="button" type="submit" value="Kommentera">
</form>
<form action="index.php" method="get">
    <input type="radio" name="like" value="Gilla">
    <label for="Gilla"><b>Gilla profilen!</b> </label><br>
    <input type="submit" class="button" value="Gilla">
</form>
</article>