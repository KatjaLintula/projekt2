<article class="allforms">
<h3>Logga in här!</h3>

<?php include "model_login.php" ?>

<form id="form" action="index.php" method="get">
        Användarnamn: <input class= name type="text" name="user"><br>
        Password: <input class= pass type="password" name="password"><br>
        <input type="hidden" name="user_id" value="<?=$loginprofile['id']?>">
        <input class="button" type="submit" value="Logga in!">
</form>

</article>

