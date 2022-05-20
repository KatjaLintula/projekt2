
<h1>Användares annonser: </h1>

<?php 
include "model_ads.php";


foreach($ads as $ad) {
    print("<a href='index.php?ad=".$ad['username']."'>");
    print("<div id='ads'>");
    print("<h3>".$ad['fullname']. "</h3></a>");
    print("<h4>".$ad['aboutme']."</h4>");
    print("<p> Såhär många gillar profilen: <b>".$ad['likes']."</b>"."</p>");
    print("<p> Årslön: ". $ad['salary']. "€ </p>");
    print('</div>');
}
?>

<form action="index.php" method="get">
    <p> Sortera enligt: </p><br>
    <input type="checkbox" name="adsalary" value="1">
    <label for="adsalary"> Lön </label><br>
    <input type="checkbox" name="adlikes" value="2">
    <label for="adlikes"> Mest gillningar</label><br>
    <input type="submit" class="button" value="Sortera!">
</form>

